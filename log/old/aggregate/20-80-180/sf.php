<html>
<head>

</head>
<title>sf</title>
<body>

<h2>WAN simulation sf (<a href=../>../UP</a>)</h2>

<a href=sf.png><img src=sf.png></a>
<a href=sf-detail.png><img src=sf-detail.png></a>
<a href=sf-before.png><img src=sf-before.png></a>
<a href=sf-net.png><img src=sf-net.png></a>
<br />

<a href=sf.eps>download sf.eps</a>, 
<a href=sf.emf>download sf.emf</a>
<a href=sf-before.eps>download sf-before.eps</a>
<a href=sf-net.eps>download sf-net.eps</a>
<br />
<a href=sf.tar>download all (sf.png, sf.dat, sf.p)</a>
<br />

<a href=sf.dat>sf.dat (data file)</a>
<?php
$str = file_get_contents("sf.dat");
echo "<pre>$str</pre>";
?>

<a href=sf.dstat>sf.dstat (network raw data file)</a>, 
<a href=sf-net.dat>sf-net.dat (network modified data file)</a>
<?php
$str = file_get_contents("sf.dstat");
echo "<pre>$str</pre>";
?>

<a href=sf.log>sf-r*.log (log files)</a>

<a href=sf.net>sf.net (dstat -cnm file)</a>
<?php
$str = file_get_contents("sf.net");
echo "<pre>$str</pre>";
?>

<br />

</body>
</html>

