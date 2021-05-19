<?php 
	ob_start("ob_gzhandler");
	$path = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	if($path == "rtpdemo.com/mped1/")
	{
		require "views/index.view.php";
	}

	else if($path == "temp.rtpdemo.com/newptforms/mped/")
	{
		require "views/index.view.php";
	}
	else if($path == "localhost/mped/")
	{
		require "views/index.view.php";
	}

	else if($_GET["page_url"] == "blogs")
	{
		require "views/blog.view.php";
	}
	
?>