<html>
<head>

</head>
<title>lf-small</title>
<body>

<h2>WAN simulation lf-small (<a href=../>../UP</a>)</h2>

<a href=lf-small.png><img src=lf-small.png></a>
<a href=lf-small-detail.png><img src=lf-small-detail.png></a>
<a href=lf-small-before.png><img src=lf-small-before.png></a>
<a href=lf-small-net.png><img src=lf-small-net.png></a>
<br />

<a href=lf-small.eps>download lf-small.eps</a>, 
<a href=lf-small.emf>download lf-small.emf</a>
<a href=lf-small-before.eps>download lf-small-before.eps</a>
<a href=lf-small-net.eps>download lf-small-net.eps</a>
<br />
<a href=lf-small.tar>download all (lf-small.png, lf-small.dat, lf-small.p)</a>
<br />

<a href=lf-small.dat>lf-small.dat (data file)</a>
<?php
$str = file_get_contents("lf-small.dat");
echo "<pre>$str</pre>";
?>

<a href=lf-small.dstat>lf-small.dstat (network raw data file)</a>, 
<a href=lf-small-net.dat>lf-small-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("lf-small.dstat");
echo "<pre>$str</pre>";
?>

<a href=lf-small.log>lf-small-r*.log (log files)</a>

<a href=lf-small.net>lf-small.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("lf-small.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

