<html>
<head>

</head>
<title>f-small</title>
<body>

<h2>WAN simulation f-small (<a href=../>../UP</a>)</h2>

<a href=f-small.png><img src=f-small.png></a>
<a href=f-small-detail.png><img src=f-small-detail.png></a>
<a href=f-small-before.png><img src=f-small-before.png></a>
<a href=f-small-net.png><img src=f-small-net.png></a>
<br />

<a href=f-small.eps>download f-small.eps</a>, 
<a href=f-small.emf>download f-small.emf</a>
<a href=f-small-before.eps>download f-small-before.eps</a>
<a href=f-small-net.eps>download f-small-net.eps</a>
<br />
<a href=f-small.tar>download all (f-small.png, f-small.dat, f-small.p)</a>
<br />

<a href=f-small.dat>f-small.dat (data file)</a>
<?php
$str = file_get_contents("f-small.dat");
echo "<pre>$str</pre>";
?>

<a href=f-small.dstat>f-small.dstat (network raw data file)</a>, 
<a href=f-small-net.dat>f-small-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("f-small.dstat");
echo "<pre>$str</pre>";
?>

<a href=f-small.log>f-small-r*.log (log files)</a>

<a href=f-small.net>f-small.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("f-small.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

