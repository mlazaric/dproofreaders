<?php
$relPath="./../../pinc/";
include_once($relPath.'base.inc');
include_once($relPath.'page_tally.inc');
include_once('common.inc');

// Create the graph. We do this before everything else
// to make use of the jpgraph cache if enabled.
// Last value controls how long the graph is cached for in minutes.
$graph = new Graph(640,400,get_image_cache_filename(),900);

///////////////////////////////////////////////////
// For each month (in which at least one person joined),
// get the number who joined,
// and the number who have since proofread at least one page.
//
$result = mysql_query("
    SELECT
        FROM_UNIXTIME(date_created, '%Y-%m')
          AS month,
        count(*)
          AS num_who_joined,
        SUM($user_ELR_page_tally_column > 0)
          AS num_who_proofed
    FROM users $joined_with_user_ELR_page_tallies 
    GROUP BY month
    ORDER BY month
");


while ( $row = mysql_fetch_object($result) )
{
    $datax[]  = $row->month;
    $data1y[] = $row->num_who_joined;
    $data2y[] = $row->num_who_proofed;
    $data3y[] = 100.0 * $row->num_who_proofed / $row->num_who_joined;
}


$graph->SetScale("textint");

//set X axis
$graph->xaxis->SetTickLabels($datax);
$graph->xaxis->SetLabelAngle(90);
$graph->xaxis->title->Set("");

//Set Y axis
$graph->yaxis->title->Set('New Users');
$graph->yaxis->SetTitleMargin(45);

//Set background to white
$graph->SetMarginColor('white');

// Add a drop shadow
$graph->SetShadow();

// Adjust the margin a bit to make more room for titles
//left, right , top, bottom

$graph->img->SetMargin(70,30,20,100);


 // Create the bar plots
$b1plot = new BarPlot ($data1y);
$b1plot ->SetFillColor ("aquamarine");
$b1plot->SetLegend(_("Newly Joined Users"));

$b2plot = new BarPlot ($data2y);
$b2plot ->SetFillColor ("chartreuse");
$b2plot->SetLegend(_("Newly Joined Users who Proofread"));

// Create the grouped bar plot
$gbplot = new GroupBarPlot (array($b1plot ,$b2plot));

// ...and add it to the graPH
$graph->Add( $gbplot);


// line plot showing percentage of joining users who proofread
//$lplot = new LinePlot ($data3y);
//$lplot->SetColour("blue");
//$lplot->SetWeight(2);
//$lplot->SetLegend(_("% of Newly Joined Users who Proofread"));

//$graph->AddY2($lplot);



// Setup the title
$graph->title->Set(_("Number of New Users By Month"));


$graph->title->SetFont($jpgraph_FF,$jpgraph_FS);
$graph->yaxis->title->SetFont($jpgraph_FF,$jpgraph_FS);
$graph->xaxis->title->SetFont($jpgraph_FF,$jpgraph_FS);

$graph->legend->Pos(0.15,0.1,"left" ,"top"); //Align the legend

add_graph_timestamp($graph);

// Display the graph
$graph->Stroke();

// vim: sw=4 ts=4 expandtab