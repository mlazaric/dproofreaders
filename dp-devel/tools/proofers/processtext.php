<?
$relPath="./../../pinc/";
include($relPath.'dp_main.inc');
/* $_POST $imagefile, $fileid, $prooflevel, $button1, $button2, $button3, $button4,
          $projectname, $text_data, $orient, $lang, $js, $button1_x, $button2_x,
          $button3_x, $button4_x, $editone, $saved */

if ($userP['i_type']==1)
{$isChg=0;
if ($userP['i_layout']==1)
{
if ($userP['v_fntf']!=$fntFace)
{$userP['v_fntf']=$fntFace;$isChg=1;}
if($userP['v_fnts']!=$fntSize)
{$userP['v_fnts']=$fntSize;$isChg=1;}
if ($userP['v_zoom']!=$zmSize)
{$userP['v_zoom']=$zmSize;$isChg=1;}
}
else {
if ($userP['h_fntf']!=$fntFace)
{$userP['h_fntf']=$fntFace;$isChg=1;}
if($userP['h_fnts']!=$fntSize)
{$userP['h_fnts']=$fntSize;$isChg=1;}
if ($userP['h_zoom']!=$zmSize)
{$userP['h_zoom']=$zmSize;$isChg=1;}
}
$userP['prefschanged']=$isChg;
$cookieC->setTempPrefs($userP,$pguser);
}

$project = $projectname;
$text_data = strip_tags($text_data, '<i>');


function addUserCount($project,$prooflevel,$imagefile,$pguser,$fileid)
{
$sql = "SELECT state FROM $project WHERE image='$imagefile' AND fileid='$fileid'";
$result=dquery($sql);
$rows=nrows($result);
  if ($rows !=0)
  {
  $curState=dresult($result,0,'state');
    if (($prooflevel==0 && $curState==5) || ($prooflevel==2 && $curState==15))
    {
    // add to user page count
    $sql = "UPDATE users SET pagescompleted = pagescompleted+1 WHERE username = '$pguser'";
    $result = mysql_query($sql);
    }
  }
}

function isProjectDone($project,$prooflevel)
{
$sql = "SELECT * FROM $project WHERE state='";
$sql.=$prooflevel==0? "2'":"12'";
$sql.=" OR state='";
$sql.=$prooflevel==0? "5'":"15'";
$sql.=" LIMIT 1";
$result = dquery($sql);
$rows=nrows($result);
  if ($rows == 0)
  {
  if ($prooflevel == 0) { $newstate = 8; } else { $newstate = 18; }
  $result = dquery("UPDATE projects SET state = '$newstate' WHERE projectid = '$project'");
  }
}

function savePage($project,$prooflevel,$imagefile,$text_data,$pguser,$fileid)
{
$timestamp = time();
$dbQuery="UPDATE $project SET ";
  if ($prooflevel==2)
  {$dbQuery.="round2_text='$text_data', round2_time='$timestamp', round2_user='$pguser'";}
  else {$dbQuery.="round1_text='$text_data', round1_time='$timestamp', round1_user='$pguser'";}
$dbQuery.=" WHERE image='$imagefile' AND fileid='$fileid'";
$result = dquery($dbQuery);
}

function setSaveComplete($project,$prooflevel,$imagefile,$pguser,$fileid)
{
addUserCount($project,$prooflevel,$imagefile,$pguser,$fileid);
$timestamp = time();
$dbQuery="UPDATE $project SET state='";
  if ($prooflevel==2)
  {$dbQuery.="19', round2_time='$timestamp', round2_user='$pguser'";}
  else {$dbQuery.="9', round1_time='$timestamp', round1_user='$pguser'";}
$dbQuery.=" WHERE image='$imagefile' AND fileid='$fileid'";
$result = dquery($dbQuery);
isProjectDone($project,$prooflevel);
}

function isOpenProject($project,$prooflevel)
{
$result = dquery("SELECT state FROM projects WHERE projectid = '$project'");
$curState=dresult($result,0,'state');
  if (($prooflevel ==0 && $curState < 9) || ($prooflevel ==2 && $curState < 19))
  {return 1;}
  else {return 0;}
}

// see if project is still in an open state for proofing level
$isOpen=isOpenProject($project,$prooflevel);
if (!$isOpen)
{
  if ($userP['i_type']==0)
  {
  $body="No more files available for proofing for this round of the project.<BR> You will be taken back to the project page in 4 seconds.";
  metarefresh(4,"proof_per.php\" TARGET=\"_top\"",'Project Round Complete',$body);
  exit;}
  else {
  include($relPath.'doctype.inc');
  echo "$docType\r\n<HTML><HEAD><TITLE>Project Round Complete</TITLE></HEAD><BODY>";
  echo "No more files available for proofing in this round of the project.<BR>";
  echo "Please <A HREF=\"#\" onclick=\"window.close()\">click here</A> to close the proofing window.";
  echo "</BODY></HTML>";
  exit;}
}
// see which button they pressed
// buttons which save
if (isset($button1) || isset($button2) || isset($button1_x) || isset($button2_x) || isset($button4_x) || isset($button4) || isset($button5_x) || isset($button5))
{
savePage($project,$prooflevel,$imagefile,$text_data,$pguser,$fileid);
} // end save page


// save and restore image to edit view
if (isset($button1) || isset($button1_x) || isset($button4_x) || isset($button4))
{
$project = 'project='.$project;
$fileid = '&fileid='.$fileid;
$imagefile = '&imagefile='.$imagefile;
$prooflevel = '&prooflevel='.$prooflevel;
$lang='&lang='.$lang;
$saved='&saved=1';
  if (@$button4 != "" || isset($button4_x))
  {
$userP['i_layout']=$userP['i_layout']==1? 0:1;
$userP['prefschanged']=1;
$cookieC->setTempPrefs($userP, $pguser);
  } // end change layout button 4
$frame1 = 'proof.php?'.$project.$fileid.$imagefile.$prooflevel.$lang.$saved;
if (isset($editone)){$frame1=$frame1."&editone=1";}
metarefresh(0,$frame1,' ',' ');
} // end save and continue same page button 1 & button 4

// save and do another send back to proof.php for a new page
if (isset($button2) || isset($button2_x))
{
setSaveComplete($project,$prooflevel,$imagefile,$pguser,$fileid);
$project = 'project='.$project;
$prooflevel = '&prooflevel='.$prooflevel;
$lang='&lang='.$lang;
$frame1 = 'proof.php?'.$project.$prooflevel.$lang;
if (isset($editone)){$frame1=$frame1."&editone=1";}
metarefresh(0,$frame1,' ',' ');
} // end save and do another button 2

// if quit without saving send back to projects page
if (isset($button3) || isset($button3_x))
{
if (!isset($saved))
  {$dbQuery="UPDATE $project SET state='";
  $dbQuery.=$prooflevel==2?"12":"2";
  $dbQuery.="' WHERE image = '$imagefile' AND fileid='$fileid'";
  $result = mysql_query($dbQuery);}
else {setSaveComplete($project,$prooflevel,$imagefile,$pguser,$fileid);}
if ($userP['i_newwin']==0)
  {metarefresh(0,'proof_per.php',' ',' ');}
  else {
  include($relPath.'doctype.inc');
  echo "$docType\r\n<HTML><HEAD><TITLE>Quit</TITLE></HEAD><BODY>";
?><SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">window.opener.location.href="proof_per.php";window.close();</SCRIPT><?PHP
  echo "Please <A HREF=\"#\" onclick=\"window.close()\">click here</A> to close the proofing window.";
  echo "</BODY></HTML>";}
} // end button 3 quit

// if save and quit send back to projects page
if (isset($button5) || isset($button5_x))
{
setSaveComplete($project,$prooflevel,$imagefile,$pguser,$fileid);
if ($userP['i_newwin']==0)
  {metarefresh(0,'proof_per.php',' ',' ');}
  else {
  include($relPath.'doctype.inc');
  echo "$docType\r\n<HTML><HEAD><TITLE>Quit</TITLE></HEAD><BODY>";
?><SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">window.opener.location.href="proof_per.php";window.close();</SCRIPT><?PHP
  echo "Please <A HREF=\"#\" onclick=\"window.close()\">click here</A> to close the proofing window.";
  echo "</BODY></HTML>";}
} // end button 5 quit

?>