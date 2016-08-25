<?php // libe.php
function sanitizeHTMLString($var) {
  $var = stripslashes($var);
  //$var = strip_tags($var);
  $var = htmlentities($var);
  return $var;
}

function o_header($title) {
echo <<<_END
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
        <title>$title</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" id="oriana.css" href="oriana.css">
        <link rel="shortcut icon" href="images/clef.ico">
</head>
<body>
  <div id="header-wrapper">
    <div id="header">
      <img src="images/WebLogo.png" class="LetterHead" />
    </div>
_END;

// menu: links for pages other than this one
$MenuItems = array('Home','Who We Are','Upcoming Concerts','Program Notes','Contact','Links');
$MenuKeys = array("index.php","WhoWeAre.php","ComingUp.php","ProgramNotes.php","Contact.php","Links.php");
echo "<div id=\"nav\"><ul id=\"navbar\">";
$mi=0;
foreach ($MenuKeys as $mk) {
  if (stripos(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH), $mk))
    echo "<li>$MenuItems[$mi]</li>";
  else
    echo "<li><a href=\"$mk\">$MenuItems[$mi]</a></li>";
  $mi++;
}
echo "</ul></div></div>";
}

function o_footer() {
echo <<<_END
</body>
</html>
_END;
}

function display_id_message($p_first, $p_last, $p_email, $p_message) {
  $nofirst = empty($p_first);
  $nolast = empty($p_last);

  $msg = $nofirst ? '' : $p_first . ' ';
  $msg .= $nolast ? '' : $p_last . ', ';
  $msg .= "email: " . $p_email . ' ' . $p_message . '.';
  return $msg;
}

?>
