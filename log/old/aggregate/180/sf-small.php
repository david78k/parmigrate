<html>
<head>

</head>
<title>sf-small</title>
<body>

<h2>WAN simulation sf-small (<a href=../>../UP</a>)</h2>

<a href=sf-small.png><img src=sf-small.png></a>
<a href=sf-small-detail.png><img src=sf-small-detail.png></a>
<a href=sf-small-before.png><img src=sf-small-before.png></a>
<a href=sf-small-net.png><img src=sf-small-net.png></a>
<br />

<a href=sf-small.eps>download sf-small.eps</a>, 
<a href=sf-small.emf>download sf-small.emf</a>
<a href=sf-small-before.eps>download sf-small-before.eps</a>
<a href=sf-small-net.eps>download sf-small-net.eps</a>
<br />
<a href=sf-small.tar>download all (sf-small.png, sf-small.dat, sf-small.p)</a>
<br />

<a href=sf-small.dat>sf-small.dat (data file)</a>
<?php
$str = file_get_contents("sf-small.dat");
echo "<pre>$str</pre>";
?>

<a href=sf-small.dstat>sf-small.dstat (network raw data file)</a>, 
<a href=sf-small-net.dat>sf-small-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("sf-small.dstat");
echo "<pre>$str</pre>";
?>

<a href=sf-small.log>sf-small-r*.log (log files)</a>

<a href=sf-small.net>sf-small.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("sf-small.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

