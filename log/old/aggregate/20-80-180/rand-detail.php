<html>
<head>

</head>
<title>rand-detail</title>
<body>

<h2>WAN simulation rand-detail (<a href=../>../UP</a>)</h2>

<a href=rand-detail.png><img src=rand-detail.png></a>
<a href=rand-detail-detail.png><img src=rand-detail-detail.png></a>
<a href=rand-detail-before.png><img src=rand-detail-before.png></a>
<a href=rand-detail-net.png><img src=rand-detail-net.png></a>
<br />

<a href=rand-detail.eps>download rand-detail.eps</a>, 
<a href=rand-detail.emf>download rand-detail.emf</a>
<a href=rand-detail-before.eps>download rand-detail-before.eps</a>
<a href=rand-detail-net.eps>download rand-detail-net.eps</a>
<br />
<a href=rand-detail.tar>download all (rand-detail.png, rand-detail.dat, rand-detail.p)</a>
<br />

<a href=rand-detail.dat>rand-detail.dat (data file)</a>
<?php
$str = file_get_contents("rand-detail.dat");
echo "<pre>$str</pre>";
?>

<a href=rand-detail.dstat>rand-detail.dstat (network raw data file)</a>, 
<a href=rand-detail-net.dat>rand-detail-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("rand-detail.dstat");
echo "<pre>$str</pre>";
?>

<a href=rand-detail.log>rand-detail-r*.log (log files)</a>

<a href=rand-detail.net>rand-detail.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("rand-detail.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

