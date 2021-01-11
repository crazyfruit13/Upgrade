<?php
$link = mysql_connect('localhost', 'root', '5b900b586bedf85dd74e9060d19433f006db6d75635c3103');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);

include("../include/header_1.inc");
echo"<title>KowskiCoin</title>";
include("../include/header_2.inc");
echo"
	<link href=../common/bakery.css type=text/css rel=stylesheet>
	<table id='KowskiCoin Database'>
		<tr>
			<td colspan='2' id='feedback_title'>KowskiCoin</td>
		</tr>
		<tr>
			<td class='labels'>Username:</td>
			<td>".$_COOKIE['Username']."</td>
		</tr>
		<tr>
			<td class='labels'>Coin Value:</td>
			<td>".$_COOKIE['coinval']."</td>
		</tr>
echo"
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				<input type='button' class='button' value='Return to Form' onclick=\"window.location.href='contact.php'\" />
				
				<input type='button' class='button' value='Submit Data' onclick=\"window.location.href='submit_data.php'\" />
			</td>
		</tr>
	</table>";

?>