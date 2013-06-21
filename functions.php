<?php

function getPosts(){

	//Get the log file, this is used to 
	$log = @fopen("posts.log", "r")
		or die("Error opening 'posts.log'");

	//create the array called 'file'
	if($log){
		$file = explode("\n", fread($log, filesize("posts.log")));
	}

	//render the blog posts

	for($j = count($file); $j >= 0; $j--){
		echo '<div class="post">';
		include(".html/".$file[$j]);
		echo '</div>';
	}
}
?>
