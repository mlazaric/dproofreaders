<?php


$browser_title                = _("Greek Transliteration Quiz");
$intro_title                  = sprintf(_("Greek Transliteration Quiz, page %d"), 1);
$initial_instructions         = $initial_instructions__greek;
$initial_text                 = "as panis siccus, dry bread; or, (if\nthe learned reader thinks it will\ntaste better in Greek,) aproc &sect;rjpoe";
$solutions                    = array("as panis siccus, dry bread; or, (if\nthe learned reader thinks it will\ntaste better in Greek,) [Greek: artos xêros]");
$parting_message              = "<h3>" . _("Handy Tip") . "</h3>\n" .
                                    "<p>" . _("If you come across some Greek while proofreading and you don't feel confident in your transliteration, feel free to post in the project discussion and mention the page number.  Other site volunteers can check your transliteration and let you know if you need to make any changes.") . "</p>";


// error messages

$messages["x_z"] = array(
    "message_title" => _("Commonly confused letters"),
    "message_body" => _("There is a '<tt>z</tt>' in your transliteration that should be an '<tt>x</tt>'.  The Greek letter zeta (transliterated '<tt>z</tt>') looks like &zeta;, while the Greek letter xi (transliterated '<tt>x</tt>') looks like &xi;."),
);


// error checks

$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("<i>", "</i>"), "case_sensitive" => FALSE, "error" => "P_italmarkup");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("&#945;", "&#959;", "&#961;"), "case_sensitive" => TRUE, "error" => "G_unicode");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("aproc", "§rjpoe"), "case_sensitive" => TRUE, "error" => "G_nochange");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("greek"), "case_sensitive" => TRUE, "error" => "G_lcgreek");
$tests[] = array("type" => "expectedtext", "searchtext" =>  array("[Greek:"), "case_sensitive" => TRUE, "error" => "G_nomarkup");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("[Greek:\n"), "case_sensitive" => TRUE, "error" => "G_markupline");
$tests[] = array("type" => "expectedtext", "searchtext" =>  array("[Greek: "), "case_sensitive" => TRUE, "error" => "G_markupspace");
$tests[] = array("type" => "expectedtext", "searchtext" =>  array("]"), "case_sensitive" => TRUE, "error" => "G_endbracket");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("\n]"), "case_sensitive" => TRUE, "error" => "G_markupline2");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("zêr"), "case_sensitive" => TRUE, "error" => "x_z");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("ero"), "case_sensitive" => TRUE, "error" => "G_missingcirc");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("apto", "pos"), "case_sensitive" => TRUE, "error" => "G_r_p");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("toc"), "case_sensitive" => TRUE, "error" => "G_s_c");

// vim: sw=4 ts=4 expandtab
