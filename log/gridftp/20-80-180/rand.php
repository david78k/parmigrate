<html>
<head>

</head>
<title>rand</title>
<body>

<h2>WAN simulation rand (<a href=../>../UP</a>)</h2>

<a href=rand.png><img src=rand.png></a>
<a href=rand-detail.png><img src=rand-detail.png></a>
<a href=rand-before.png><img src=rand-before.png></a>
<a href=rand-net.png><img src=rand-net.png></a>
<br />

<a href=rand.eps>download rand.eps</a>, 
<a href=rand.emf>download rand.emf</a>
<a href=rand-before.eps>download rand-before.eps</a>
<a href=rand-net.eps>download rand-net.eps</a>
<br />
<a href=rand.tar>download all (rand.png, rand.dat, rand.p)</a>
<br />

<a href=rand.dat>rand.dat (data file)</a>
<?php
$str = file_get_contents("rand.dat");
echo "<pre>$str</pre>";
?>

<a href=rand.dstat>rand.dstat (network raw data file)</a>, 
<a href=rand-net.dat>rand-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("rand.dstat");
echo "<pre>$str</pre>";
?>

<a href=rand.log>rand-r*.log (log files)</a>

<a href=rand.net>rand.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("rand.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

