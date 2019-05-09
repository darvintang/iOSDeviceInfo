<?php 
  $xml = $_GET["params"];
  $decoded = rawurldecode($xml);
  $matches = array();
  preg_match('/>UDID<\/key>\s+<string>(.+)</', $decoded, $matches);
  $udid = $matches[1];
  preg_match('/>IMEI<\/key>\s+<string>(.+)</', $decoded, $matches);
  $imei = $matches[1];
  preg_match('/>PRODUCT<\/key>\s+<string>(.+)</', $decoded, $matches);
  $product = $matches[1];
  preg_match('/>MAC_ADDRESS_EN0<\/key>\s+<string>(.+)</', $decoded, $matches);
  $macaddress = $matches[1];
  preg_match('/>VERSION<\/key>\s+<string>(.+)</', $decoded, $matches);
  $version = $matches[1];
?>

<html>
<head>
<title>设备信息</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
body {
    font-family: Monaco,Consolas,STKaiti,SimHei,KaiTi,STKaitiSC-Regular sans-serif;
    background-color: #e5e5e5;
}
#main {
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
    width:80%;
}
</style>
</head>
<body>
<div id="main">
	<div style="text-align: center;"><h1>恭喜您，获取设备信息成功</h1></div>
	<?php
		echo '<h2>PRODUCT: '.$product.'</h2>';
		echo '<h2>VERSION: '.$version.'</h2>';
		echo '<h2>IMEI: '.$imei.'</h2>';
		echo '<h2>UDID: '.$udid.'</h2>';
	?>
</div>
</body>
</html>
