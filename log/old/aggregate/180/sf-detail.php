<html>
<head>

</head>
<title>sf-detail</title>
<body>

<h2>WAN simulation sf-detail (<a href=../>../UP</a>)</h2>

<a href=sf-detail.png><img src=sf-detail.png></a>
<a href=sf-detail-detail.png><img src=sf-detail-detail.png></a>
<a href=sf-detail-before.png><img src=sf-detail-before.png></a>
<a href=sf-detail-net.png><img src=sf-detail-net.png></a>
<br />

<a href=sf-detail.eps>download sf-detail.eps</a>, 
<a href=sf-detail.emf>download sf-detail.emf</a>
<a href=sf-detail-before.eps>download sf-detail-before.eps</a>
<a href=sf-detail-net.eps>download sf-detail-net.eps</a>
<br />
<a href=sf-detail.tar>download all (sf-detail.png, sf-detail.dat, sf-detail.p)</a>
<br />

<a href=sf-detail.dat>sf-detail.dat (data file)</a>
<?php
$str = file_get_contents("sf-detail.dat");
echo "<pre>$str</pre>";
?>

<a href=sf-detail.dstat>sf-detail.dstat (network raw data file)</a>, 
<a href=sf-detail-net.dat>sf-detail-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("sf-detail.dstat");
echo "<pre>$str</pre>";
?>

<a href=sf-detail.log>sf-detail-r*.log (log files)</a>

<a href=sf-detail.net>sf-detail.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("sf-detail.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

