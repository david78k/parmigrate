<html>
<head>

</head>
<title>lf-detail</title>
<body>

<h2>WAN simulation lf-detail (<a href=../>../UP</a>)</h2>

<a href=lf-detail.png><img src=lf-detail.png></a>
<a href=lf-detail-detail.png><img src=lf-detail-detail.png></a>
<a href=lf-detail-before.png><img src=lf-detail-before.png></a>
<a href=lf-detail-net.png><img src=lf-detail-net.png></a>
<br />

<a href=lf-detail.eps>download lf-detail.eps</a>, 
<a href=lf-detail.emf>download lf-detail.emf</a>
<a href=lf-detail-before.eps>download lf-detail-before.eps</a>
<a href=lf-detail-net.eps>download lf-detail-net.eps</a>
<br />
<a href=lf-detail.tar>download all (lf-detail.png, lf-detail.dat, lf-detail.p)</a>
<br />

<a href=lf-detail.dat>lf-detail.dat (data file)</a>
<?php
$str = file_get_contents("lf-detail.dat");
echo "<pre>$str</pre>";
?>

<a href=lf-detail.dstat>lf-detail.dstat (network raw data file)</a>, 
<a href=lf-detail-net.dat>lf-detail-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("lf-detail.dstat");
echo "<pre>$str</pre>";
?>

<a href=lf-detail.log>lf-detail-r*.log (log files)</a>

<a href=lf-detail.net>lf-detail.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("lf-detail.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

