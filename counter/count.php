<?php
$base_url = 'http://musicfamily.org/realm/counter/';
$default_style = 'NaW';
$default_ext = 'gif';
$count_unique = 1;
$unique_hours = 24;
$min_digits = 7;
header("Content-type: text/javascript");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
$page = preg_replace('/[^a-zA-Z0-9\-_\.]/','',$_GET['page']);
$style = isset($_GET['style']) ? preg_replace('/[^a-zA-Z0-9\-_\.]/','',$_GET['style']) : $default_style;
$ext   = isset($_GET['ext']) ? preg_replace('/[^a-zA-Z0-9\-_\.]/','',$_GET['ext']) : $default_ext;
$cname     = 'count_unique_'.$page;
$logfile   = 'logs/' . $page . '.txt';
$style_dir = 'styles/' . $style . '/';
if ( ! file_exists($logfile) )
{
	die( $page . '.txt');
}
if ($fp = @fopen($logfile, 'r+'))
{
	$locked = flock($fp, LOCK_EX);

	if ($locked)
	{
		$count = intval( trim( fread($fp, filesize($logfile) ) ) );
		if ( $count_unique == 0 || ! isset($_COOKIE[$cname]) )
		{
			$count = $count + 1;
			rewind($fp);
			fwrite($fp, $count);

			// Print the Cookie and P3P compact privacy policy
			header('P3P: CP="NOI NID"');
			setcookie($cname, 1, time()+60*60*$unique_hours);
		}
	}
	else
	{
		$count = 1;
	}

	flock($fp, LOCK_UN);
	fclose($fp);
}
else
{
	die("ERROR: Can't read/write to the log file ($logfile). Make sure this file is writable by PHP scripts. On UNIX servers, CHMOD the log file to 666 (rw-rw-rw-).");
}
if ($min_digits)
{
	$count = sprintf('%0'.$min_digits.'s', $count);
}
$len = strlen($count);
for ($i=0; $i<$len; $i++)
{
	echo 'document.write(\'<img src="'.$base_url . $style_dir . substr($count,$i,1) . '.' . $ext .'" border="0" />\');';
}

exit();
?>
