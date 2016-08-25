<?php
include "libe.php";
o_header('Contact');

$first = $last = $email = "";

$subscribe = isset($_POST['subscribe']);
$unsubscribe = isset($_POST['unsubscribe']);
$EMailError = "";

if($subscribe || $unsubscribe) {
  if (!empty($_POST['first'])) {
    $first = sanitizeHTMLString($_POST['first']);
  }
  if (!empty($_POST['last']))  {
    $last = sanitizeHTMLString($_POST['last']);
  }
  if (!empty($_POST['email'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  }
  if (($subscribe || $unsubscribe) &&  (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))) {
    $EMailError = "E-mail is required";
  }

  if (empty($EMailError)) {
    // don't do anything if they haven't submitted yet, or if e-mail is invalid
    if ($subscribe) {
      mail('info@orianasingersvt.org','subscribe',$first.' '.$last.' '.$email);
      $msg = display_id_message($first, $last, $email, 'is signed up');
    }
    else if ($unsubscribe) {
      mail('info@orianasingersvt.org','unsubscribe',$first.' '.$last.' '.$email);
      $msg = display_id_message($first, $last, $email, 'is unsubscribed');
    }
  }
}
else {
  $msg = 'Or <a href="mailto:info@orianasingersvt.org">e-mail us</a> at info@orianasingersvt.org';
}

echo <<<_END
  <div id="content-wrapper">
  <div id="content">
  <br>
  <table cellspacing="20">
  <tr><td>
  <p style="text-align: center; font-weight: bold;">Join Oriana Singers Mailing List</p>
  <form method="post" action="Contact.php">
  <table cellspacing="20">
  <tr>
  <td class="label"><label for="first">First Name</label></td>
      <td class="ConcertDate"><input type="text" name="first" value="$first" autofocus></td>
  </tr>
  <tr>
  <td class="label"><label for="last">Last Name</label></td>
      <td class="ConcertDate"><input type="text" name="last" value="$last"></td>
  </tr>
  <tr>
  <td class="label"><label for="email">E-mail Address</label></td>
      <td class="ConcertDate"><input type="text" name="email" value="$email"></td>
      <td class="error">$EMailError</td>
  </tr>
  </table>
  <table cellspacing="20">
  <tr>
  <td class="button"><input type="submit" value="Subscribe" name="subscribe"/></td>
  <td class="button"><input type="submit" value="Unsubscribe" name="unsubscribe"/></td>
  <td class="button"><input type="submit" value="Clear Form" name="clear"/></td>
  </tr>
  </table>
  </form>
  </td></tr>
  <tr><td>
  <p style="text-align: center; font-weight: bold;">$msg</p>
  </td></tr>
  </table>
  </div></div>
_END;

o_footer();
?>
