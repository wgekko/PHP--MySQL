<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>
<body>
<?php
$file = "https://www.clarin.com/rss/tecnologia/";
$data = simplexml_load_file($file); 

foreach ($data->channel->item as $item){ 
//	echo $item->title.'<br/>';	
//	echo $item->link.'<br />';
//	echo $item->description.'<br />';
//	echo $item->pubDate.'<br/>';
//	echo $item->enclosure->attributes();
		

	echo '<a href='.$item->link.'>'.$item->title.'</a><br />';
	echo $item->pubDate.'<br />';
	echo $item->description.'<br /><br/>';
	if ($item->enclosure){
		echo '<a href="'.$item->enclosure->attributes().'">Ver imagen</a><br />';	
		echo '<img src="'.$item->enclosure->attributes().' "/><br /><br/>';		
}

	
//	echo '<a href='.$item->enclosure->attributes().'>Ver imagen'.'</a><br/>';
//	echo '<img src="'.$item->enclosure->attributes().' "/><br /><br/>';
	
}
?>
	        				                        
</body>
</html>

<?php
