<?php
	header("Content-Type: text/html; charset=UTF-8");
	
	$url = $_GET['url'];								//获取用户输入的长链接
	$source = '1951156462';								//新浪微博APPKEY

	$content = file_get_contents("https://api.weibo.com/2/short_url/shorten.json?source=$source&url_long=$url");

	if($content == false) {
		echo '出现了错误！';
	}
	else{
		echo $content;
	}
?>