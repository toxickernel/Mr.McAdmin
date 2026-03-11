<?php
define('serverhome', '/home/anthony/mc');
function human_filesze($filename) {
$bytes = filesize($filename); // The filesize() function is an official PHP function
$megabytes = $bytes / 1048576;
return number_format($megabytes, 2);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html><head>
		<title>Mr. MC Admin V1.0</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<style type="text/css">
			body {
				background-color: #eceff1;
				color: #000;
				font-size: 0.9em;
				font-family: sans-serif,helvetica;
				margin: 0;
				padding: 0;
			}
			:link {
				color: #0000FF;
				text-decoration:none;
			}
			:visited {
				color: #0000FF;
			}
			a:hover {
				color: #0000FF;
			}
			h1 {
				text-align: center;
				margin: 0;
				padding: 0.6em 2em 0.4em;
				background-color: #2D4760;
				color: #ffffff;
				font-weight: normal;
				font-size: 1.75em;
				border-bottom: 2px solid #000;
			}
			h1 strong {
				font-weight: bold;
			}
			h2 {
				font-size: 1.1em;
				font-weight: bold;
			}
			.content {
				padding: 1em 5em;
			}
			.content-columns {
				/* Setting relative positioning allows for
				absolute positioning for sub-classes */
				position: relative;
				padding-top: 1em;
			}
			.content-column-left {
				/* Value for IE/Win; will be overwritten for other browsers */
				width: 47%;
				padding-right: 3%;
				float: left;
				padding-bottom: 2em;
			}
			.content-column-right {
				/* Values for IE/Win; will be overwritten for other browsers */
				width: 47%;
				padding-left: 3%;
				float: left;
				padding-bottom: 2em;
			}
			.content-columns>.content-column-left, .content-columns>.content-column-right {
				/* Non-IE/Win */
			}
			img {
				border: 2px solid #fff;
				padding: 2px;
				margin: 2px;
			}
			a:hover img {
				border: 2px solid #3399FF;
			}
			.button {
            display: inline-block;
			padding: 10px 20px;
			background-color: #007bff;
			color: white;
			text-decoration: none;
			border-radius: 5px;
			cursor: pointer;
			border: 1px solid #0056b3;
			text-align: center;
}

.button:hover {
  background-color: #0056b3;
  color: white;
}
		</style>
	</head>

	<body>
	</a><h1>Mr. MC Admin V1.0<br><font size="-1"><strong></h1>
		<div class="content">
			<div class="content-middle">
			<center><a href="/admin" class="button">Home</a> <a href="/admin?action=stop" class="button">Stop Server</a> <a href="/admin?action=backup" class="button">Backup Server</a> <a href="/admin?action=restore" class="button">Restore Server</a> <a href="/admin?action=start" class="button">Start Server</a> <a href="/admin?action=console" class="button">View Console</a></center>
			</div>
<hr>
<?php
if($_GET['action']=='backup'){
    $output = shell_exec(serverhome . '/backup.bash');
echo "<pre>$output</pre>";
echo '<a href="/admin"><- Back</a>';
}
if($_GET['action']=='stop'){
    $output = shell_exec(serverhome . '/stop.bash');
echo "<pre>$output</pre>";
echo "<p>Server will restart in 60 seconds ...</p>";
echo '<a href="/admin"><- Back</a>';
}
if($_GET['action']=='start'){
    $output = shell_exec(serverhome . '/start.bash');
echo "<pre>$output</pre>";
echo '<a href="/admin"><- Back</a>';
}
if($_GET['action']=='restore'){
    $output = shell_exec(serverhome . '/restore.bash');
echo "<pre>$output</pre>";
echo '<a href="/admin"><- Back</a>';
}
if($_GET['action']=='console'){
echo '<textarea name="comment" rows="30" cols="100">';
echo readfile(serverhome . '/logs/latest.log') . '</textarea>';
echo '<br /><a href="/admin"><- Back</a>';
}
if(!$_GET['action']){
    echo 'World Size: ' . human_filesze(serverhome . '/world.zip') . ' MB';
}
?>
			<div class="content-columns">
				<div class="content-column-left">
				</div>

				<div class="content-column-right">
				</div>
			</div>
                </div>
                <div class="content">

		</div>
</hr>
<hr></hr>

</body></html>
