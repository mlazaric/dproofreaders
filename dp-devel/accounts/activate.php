<?php
$relPath="./../pinc/";
include_once($relPath.'site_vars.php');
include_once($relPath.'new_user_mails.inc');
include_once($relPath.'connect.inc');
$db_Connection=new dbConnect();
$db_link=$db_Connection->db_lk;
include_once($relPath.'theme.inc');

// A newly registered user has clicked the link in the welcoming e-mail and has thus
// proved that the e-mail is working. It is time to 'activate' the account, i.e.
// create a record in the users table, create a profile, stats data, etc.
// and send a welcome mail.

theme(_('Activate account'), 'header');

$ID = $_GET['id'];

$result = mysql_query("SELECT * FROM non_activated_users WHERE id='$ID'");

if (mysql_num_rows($result) == 0) {
    echo "<p>\n";
    echo sprintf(
        _("There is no account with the id '%s' waiting to be activated."),
        stripslashes($ID)
    );

    $res2 = mysql_query("
        SELECT id FROM users WHERE id='$ID'
    ") or die(mysql_error());
    if ( mysql_num_rows($res2) > 0 ) {
        echo "\n";
        echo _("It appears that the account has already been activated.");
        echo "\n";
        echo _("(Probably you just clicked the activation link more than once.)");
        echo "\n";
        echo _("There should be an introductory email message on its way to you.");
        echo "\n";
        echo _("Please enter your username and password in the fields above to login to your account.");
        echo "\n";
    }
    else
    {
        echo "\n";
        $mailto_url = "mailto:$general_help_email_addr";
        echo sprintf(
            _("For assistance, please contact <a href='%s'>%s</a>."),
            $mailto_url, $general_help_email_addr );
        echo "\n";
    }
    echo "</p>\n";

    theme('', 'footer');
    exit;
}

$user = mysql_fetch_assoc($result);
$real_name = $user['real_name'];
$username = $user['username'];
$email = $user['email'];
$date_created = $user['date_created'];
$email_updates = $user['email_updates'];
$u_intlang = $user['u_intlang'];
$passwd = $user['user_password'];

// Delete record in non_activated_users.
mysql_query("DELETE FROM non_activated_users WHERE id='$ID'");

// Insert into 'real' table -- users
$query = sprintf("INSERT INTO users (id, real_name, username, email, manager, date_created, email_updates, u_plist, u_top10, u_neigh, u_intlang) VALUES ('%s', '%s', '%s', '%s', 'no', $date_created, $email_updates, 3, 1, 10, '%s')", mysql_real_escape_string($ID), mysql_real_escape_string($real_name), mysql_real_escape_string($username), mysql_real_escape_string($email), mysql_real_escape_string($u_intlang));

$result = mysql_query ($query) or die(mysql_error());
$u_id = mysql_insert_id($db_link); // auto-incremented users.u_id

// create profile
$profileString="INSERT INTO user_profiles SET u_ref=$u_id";
$makeProfile=mysql_query($profileString);
$profile_id = mysql_insert_id($db_link); // auto-incremented user_profiles.id

// add ref to profile
$refString=sprintf("UPDATE users SET u_profile=$profile_id WHERE id='%s' AND username='%s'", mysql_real_escape_string($ID), mysql_real_escape_string($username));
$makeRef=mysql_query($refString);

//code from php forums bb_register.php
$sql = "SELECT max(user_id) AS total FROM phpbb_users";
if(!$r = mysql_query($sql))
    die("Error connecting to the database.");
list($total) = mysql_fetch_array($r);
mysql_free_result($r);
$currtime = time();

$total += 1;
$sql = sprintf("INSERT INTO phpbb_users (user_id, username, user_regdate, user_timezone, user_lang, user_email, user_password, user_viewemail) VALUES ($total, '%s', $currtime, -8.00, '%s', '%s', '%s', 0)", mysql_real_escape_string($username), (phpbb_lang()?phpbb_lang():"english"), mysql_real_escape_string($email), mysql_real_escape_string($passwd));
$result = mysql_query($sql);

// Send them an introduction e-mail
maybe_welcome_mail($email, $real_name, $username);

echo sprintf(
        _("User %s activated successfully. Please check the e-mail being sent to you for further information about %s."),
        $username, $site_name);
echo "<center>";
echo "<br><font size=+1>"._("Enter your password below to sign in and start proofreading!!");
echo "<form action='login.php' method='post'><input type='hidden' name='userNM' value='".$username."'><input type='password' name='userPW'><input type='submit' value='"._("Sign In")."'></form>";

theme("", "footer");

// vim: sw=4 ts=4 expandtab
?>
