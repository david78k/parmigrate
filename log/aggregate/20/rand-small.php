<html>
<head>

</head>
<title>rand-small</title>
<body>

<h2>WAN simulation rand-small (<a href=../>../UP</a>)</h2>

<a href=rand-small.png><img src=rand-small.png></a>
<a href=rand-small-detail.png><img src=rand-small-detail.png></a>
<a href=rand-small-before.png><img src=rand-small-before.png></a>
<a href=rand-small-net.png><img src=rand-small-net.png></a>
<br />

<a href=rand-small.eps>download rand-small.eps</a>, 
<a href=rand-small.emf>download rand-small.emf</a>
<a href=rand-small-before.eps>download rand-small-before.eps</a>
<a href=rand-small-net.eps>download rand-small-net.eps</a>
<br />
<a href=rand-small.tar>download all (rand-small.png, rand-small.dat, rand-small.p)</a>
<br />

<a href=rand-small.dat>rand-small.dat (data file)</a>
<?php
$str = file_get_contents("rand-small.dat");
echo "<pre>$str</pre>";
?>

<a href=rand-small.dstat>rand-small.dstat (network raw data file)</a>, 
<a href=rand-small-net.dat>rand-small-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("rand-small.dstat");
echo "<pre>$str</pre>";
?>

<a href=rand-small.log>rand-small-r*.log (log files)</a>

<a href=rand-small.net>rand-small.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("rand-small.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

