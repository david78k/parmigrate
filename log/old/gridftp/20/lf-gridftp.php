<html>
<head>

</head>
<title>lf-gridftp</title>
<body>

<h2>WAN simulation lf-gridftp (<a href=../>../UP</a>)</h2>

<a href=lf-gridftp.png><img src=lf-gridftp.png></a>
<a href=lf-gridftp-detail.png><img src=lf-gridftp-detail.png></a>
<a href=lf-gridftp-before.png><img src=lf-gridftp-before.png></a>
<a href=lf-gridftp-net.png><img src=lf-gridftp-net.png></a>
<br />

<a href=lf-gridftp.eps>download lf-gridftp.eps</a>, 
<a href=lf-gridftp.emf>download lf-gridftp.emf</a>
<a href=lf-gridftp-before.eps>download lf-gridftp-before.eps</a>
<a href=lf-gridftp-net.eps>download lf-gridftp-net.eps</a>
<br />
<a href=lf-gridftp.tar>download all (lf-gridftp.png, lf-gridftp.dat, lf-gridftp.p)</a>
<br />

<a href=lf-gridftp.dat>lf-gridftp.dat (data file)</a>
<?php
$str = file_get_contents("lf-gridftp.dat");
echo "<pre>$str</pre>";
?>

<a href=lf-gridftp.dstat>lf-gridftp.dstat (network raw data file)</a>, 
<a href=lf-gridftp-net.dat>lf-gridftp-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("lf-gridftp.dstat");
echo "<pre>$str</pre>";
?>

<a href=lf-gridftp.log>lf-gridftp-r*.log (log files)</a>

<a href=lf-gridftp.net>lf-gridftp.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("lf-gridftp.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

