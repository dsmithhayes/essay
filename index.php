<?php
/*
 *	This is easyEssay 1.0
 * written by:
 *             Dave Smith-Hayes
 *             http://ds-h.me
 * 
 * This is free software 
 * licensed under the 
 *
 *        WTFPL
 *
 * in 2013 by
 *
 *   Dave Smith-Hayes
 *
 */
?>
<!DOCTYPE html>
<head>
	<title>ds-h.me - Essays</title>
	<style>
	*{
		font-family: sans-serif;
		color: #16161D;
	}

	a{
		color: #4d0d40;
	}
	a:hover{
		text-decoration: none;
	}

	.post{
		width: 600px;
		padding: 25px 50px 25px 50px;
		margin: 0 auto 25px auto;
		border: 1px solid #ccc;
		background-color: #faf2f6;
	}
	.post h1{
		margin: 0 0 15px 0;
		font-size: 20pt;
	}
	.post p{
		text-indent: 15px;
	}
	</style>
</head>
<body>
<?php
//Get the log file, this is used to 
$log = @fopen("posts.log", "r")
	or die("Error opening 'posts.log'");

//create the array called 'file'
if($log){
	$file = explode("\n", fread($log, filesize("posts.log")));
}

//reder the blog posts

for($j = count($file; $j >= 0; $j--){
	if(!$file[$i] == "." || !$file[$i] == ".."){
		echo '<div class="post">';
		include(".html/".$file[$j]);
		echo '</div>';
	}
}

?>
<div style="margin-top:50px" align="center">
	<a href="http://wtfpl.net/" target="_blank">
		<img src="wtfpl_badge.png" alt="Licensed Under the WTFPL" />
	</a>
</div>
</body>
</html>
