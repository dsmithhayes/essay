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

include("functions.php");
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
		padding: 15px 25px 15px 25px;
		margin: 0 auto 25px auto;
		border: 1px solid #ccc;
		background-color: #eee;
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

getPosts();

?>
<div style="margin-top:50px" align="center">
	<a href="http://wtfpl.net/" target="_blank">
		<img src="wtfpl_badge.png" alt="Licensed Under the WTFPL" />
	</a>
</div>
</body>
</html>
