<?php

class TableDocumentation
{

    private $display_name;
    private $columns_information;

    public function __construct(string $display_name, array $columns_information)
    {
        $this->display_name = $display_name;
        $this->columns_information = $columns_information;
    }

    public static function from_table_description(string $display_name, array $table_description): TableDocumentation
    {
        return new TableDocumentation($display_name, $table_description);
    }

    public static function from_string(string $to_parse): TableDocumentation
    {

    }


    public function __toString(): string
    {
        $columns_information = $this->columns_information;

        // Add hyper links to field names
        foreach ($columns_information as $index => $column_information) {
            $field = $column_information['Field'];

            $columns[$index]['Name'] = $field; // Save field name before adding the hyper link for column definition
            $columns[$index]['Field'] = "[`$field`](#$field)";
        }

        $lines = ['# ' . $this->display_name, ''];
        $lines = array_merge($lines, create_markdown_table($columns, [ 'Field', 'Type', 'Null', 'Key', 'Default', 'Extra' ]));

        // Add column definitions
        foreach ($columns as $index => $column_information) {
            $lines[] = '';
            $lines[] = '## `' . $column_information['Name'] . '`';
        }

        $lines[] = '';

        return implode("\n", $lines);
    }

    /**
     * Creates a markdown table of the data with the only the specified columns shown and in the specified order.
     * Every cell is padded right with spaces to ensure every column is as wide as the widest cell in that column.
     *
     * @param array $contents the data that is shown within the table
     * @param array $table_columns the columns to display
     * @return array array of strings -- the generate markdown table
     */
    public static function create_markdown_table(array $contents, array $table_columns): array {
        // For each column find the length of the longest value (used for padding in the table)
        $column_lengths = [];

        foreach ($contents as $row) {
            foreach ($row as $column => $value) {
                $column_lengths[$column] = max(strlen($value), array_get($column_lengths, $column, strlen($column)));
            }
        }

        $output_table = [];

        // Add headers
        $header = '|';
        $line_under_header = '|';

        foreach ($table_columns as $column) {
            $header .= str_pad($column, $column_lengths[$column]) . '|';
            $line_under_header .= str_repeat('-', $column_lengths[$column]) . '|';
        }

        $output_table[] = $header;
        $output_table[] = $line_under_header;

        // Add data
        foreach ($contents as $row) {
            $output_row = '|';

            foreach ($table_columns as $column) {
                $output_row .= str_pad(array_get($row, $column, ''), $column_lengths[$column]) . '|';
            }

            $output_table[] = $output_row;
        }

        return $output_table;
    }

    /**
     * Detects columns in the text by finding column descriptions. A column description contains the name of the column
     * prefixed by "## " (without quotes).
     *
     * For example, for a column named something_useful, its column description would look like this:
     *
     * ## something_useful
     *
     * @param array $lines an array of strings -- the lines of the text
     * @return array an array of strings containing the column names detected in text
     */
    public static function detect_columns_in_text(array $lines): array {
        // array_values is used to reindex the array
        return array_values(preg_filter('/^## ([a-zA-Z0-9_]+)/', '$1', $lines));
    }
}