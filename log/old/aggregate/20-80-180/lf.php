<html>
<head>

</head>
<title>lf</title>
<body>

<h2>WAN simulation lf (<a href=../>../UP</a>)</h2>

<a href=lf.png><img src=lf.png></a>
<a href=lf-detail.png><img src=lf-detail.png></a>
<a href=lf-before.png><img src=lf-before.png></a>
<a href=lf-net.png><img src=lf-net.png></a>
<br />

<a href=lf.eps>download lf.eps</a>, 
<a href=lf.emf>download lf.emf</a>
<a href=lf-before.eps>download lf-before.eps</a>
<a href=lf-net.eps>download lf-net.eps</a>
<br />
<a href=lf.tar>download all (lf.png, lf.dat, lf.p)</a>
<br />

<a href=lf.dat>lf.dat (data file)</a>
<?php
$str = file_get_contents("lf.dat");
echo "<pre>$str</pre>";
?>

<a href=lf.dstat>lf.dstat (network raw data file)</a>, 
<a href=lf-net.dat>lf-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("lf.dstat");
echo "<pre>$str</pre>";
?>

<a href=lf.log>lf-r*.log (log files)</a>

<a href=lf.net>lf.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("lf.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

