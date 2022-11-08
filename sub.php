<?php

$l = $_GET['l'];
if (isset($l)) {
	$u = urldecode($l);
	$ua = $_SERVER['HTTP_USER_AGENT'];
	$addr = $_SERVER['REMOTE_ADDR'];
	$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR'])? $_SERVER['HTTP_X_FORWARDED_FOR'] :  $addr;
	$ipinfo = '<a href="https://ipinfo.io/' . $ip . '">' . $ip . '</a>';
	$anchor = '<a href="' . $u . '">' . $u . '</a>';

	$data = '<tr>
    	<td class="tg-ye1f">' . date("l jS \of F Y h:i:s A") . '</td>
	<td class="tg-ye1f">' . $ipinfo . '</td>
	<td class="tg-ye1f">' . $ua . '</td>
	<td class="tg-x5s5">' . $anchor . '</td>
	</tr>';

	file_put_contents('subs.html', $data, FILE_APPEND);
	header('content-type: text/plan');
	echo 'OK';
} else {
	  header('location: https://google.com');
}
?>
