<html>
<head>

</head>
<title>rand-gridftp</title>
<body>

<h2>WAN simulation rand-gridftp (<a href=../>../UP</a>)</h2>

<a href=rand-gridftp.png><img src=rand-gridftp.png></a>
<a href=rand-gridftp-detail.png><img src=rand-gridftp-detail.png></a>
<a href=rand-gridftp-before.png><img src=rand-gridftp-before.png></a>
<a href=rand-gridftp-net.png><img src=rand-gridftp-net.png></a>
<br />

<a href=rand-gridftp.eps>download rand-gridftp.eps</a>, 
<a href=rand-gridftp.emf>download rand-gridftp.emf</a>
<a href=rand-gridftp-before.eps>download rand-gridftp-before.eps</a>
<a href=rand-gridftp-net.eps>download rand-gridftp-net.eps</a>
<br />
<a href=rand-gridftp.tar>download all (rand-gridftp.png, rand-gridftp.dat, rand-gridftp.p)</a>
<br />

<a href=rand-gridftp.dat>rand-gridftp.dat (data file)</a>
<?php
$str = file_get_contents("rand-gridftp.dat");
echo "<pre>$str</pre>";
?>

<a href=rand-gridftp.dstat>rand-gridftp.dstat (network raw data file)</a>, 
<a href=rand-gridftp-net.dat>rand-gridftp-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("rand-gridftp.dstat");
echo "<pre>$str</pre>";
?>

<a href=rand-gridftp.log>rand-gridftp-r*.log (log files)</a>

<a href=rand-gridftp.net>rand-gridftp.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("rand-gridftp.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

