<?php
  include "libe.php";
  o_header('Coming Up');
?>

<div id="content-wrapper"><div id="content">
  <h3>Upcoming Concerts</h3>

  <table border="0" cellpadding="15px" width="99%">
    <tr>
    <td class="ConcertDate">Sunday December 11th, 2016 4:00 PM</td>
    <td class="ConcertDate">Frank Martin <em>Mass</em>, and Carols and Motets of the Season</td>
    <td class="ConcertDate">College Street Congregational Church, Burlington</td>
    </tr>
  </table>

  <p>To receive e-mail notification of upcoming concerts, please e-mail <a href="mailto:info@orianasingersvt.org">info@orianasingersvt.org</a></p>

  <a name="Map"><b>Concert and Ticket Locations</b></a>
    <ul class="link">
      <li><a href="http://www.stpaulscathedralvt.org/cathedral-arts">S - St. Paul's Cathedral, 2 Cherry St.</a></li>
      <li><a href="http://www.collegestreetchurch.org/">C - College Street Congregational, 265 College St.</a></li>
      <li><a href="http://www.flynntix.org/">F - Flynn Theater Box Office, 153 Main St.</a></li>
      <li>P - Public Parking lots</li>
    </ul>
  </p>
  <p><img src="http://maps.googleapis.com/maps/api/staticmap?
        &center=44.478322,-73.213615
        &zoom=16
        &size=640x512
        &maptype=roadmap
        &markers=color:red%7Clabel:S%7C2+Cherry+Street,Burlington,VT
        &markers=color:red%7Clabel:C%7C265+College+Street,Burlington,VT
        &markers=color:orange%7Clabel:F%7C44.47583,-73.213331
        &markers=color:blue%7Clabel:P%7C44.475601,-73.21111%7C44.476198,-73.210697
           %7C44.479066,-73.211828%7C44.478346,-73.211764
           %7C44.478882,-73.217086
           %7C44.478285,-73.215669%7C44.478989,-73.215133
        &sensor=false" /></p>
</div></div>

<?php
  o_footer();
?>
