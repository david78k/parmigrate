<html>
<head>

</head>
<title>sf-gridftp</title>
<body>

<h2>WAN simulation sf-gridftp (<a href=../>../UP</a>)</h2>

<a href=sf-gridftp.png><img src=sf-gridftp.png></a>
<a href=sf-gridftp-detail.png><img src=sf-gridftp-detail.png></a>
<a href=sf-gridftp-before.png><img src=sf-gridftp-before.png></a>
<a href=sf-gridftp-net.png><img src=sf-gridftp-net.png></a>
<br />

<a href=sf-gridftp.eps>download sf-gridftp.eps</a>, 
<a href=sf-gridftp.emf>download sf-gridftp.emf</a>
<a href=sf-gridftp-before.eps>download sf-gridftp-before.eps</a>
<a href=sf-gridftp-net.eps>download sf-gridftp-net.eps</a>
<br />
<a href=sf-gridftp.tar>download all (sf-gridftp.png, sf-gridftp.dat, sf-gridftp.p)</a>
<br />

<a href=sf-gridftp.dat>sf-gridftp.dat (data file)</a>
<?php
$str = file_get_contents("sf-gridftp.dat");
echo "<pre>$str</pre>";
?>

<a href=sf-gridftp.dstat>sf-gridftp.dstat (network raw data file)</a>, 
<a href=sf-gridftp-net.dat>sf-gridftp-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("sf-gridftp.dstat");
echo "<pre>$str</pre>";
?>

<a href=sf-gridftp.log>sf-gridftp-r*.log (log files)</a>

<a href=sf-gridftp.net>sf-gridftp.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("sf-gridftp.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

