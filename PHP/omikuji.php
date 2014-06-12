<?php 
      $omikuji = array('小吉','大吉','凶','末吉','onemore!');

      $result = $omikuji[mt_rand(0,count($omikuji)-1];
?>

<!DOCTYPE html >
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>omikuji</title>
</head>
<body>
	<h1>omikuji</h1>
	<p>today lucky is <?php echo $result; ?> !</p>
	<p><a href="<?php echo $_SERVER["SCRIPT_NAME"]; ?>"</p>
</body>
</html>