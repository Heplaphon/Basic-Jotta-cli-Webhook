<head>
<title>Jotta-cli webhook</title>
</head>
<center>
<?php
$jesson =  file_get_contents('data.json');
$jesson = json_decode($jesson);
$titile = $jesson->text;
$titile = str_replace("\n","<br>", $titile);
echo $titile;
echo"<br>";
foreach($jesson->attachments as $uploads){
    if ($uploads->fields != null){
		echo "Current status <br>";
		echo $uploads->fields[0]->title;
		echo "<div style='height:13vh;width:13vw;background-color:".$uploads->color.";'></div>";
    }
}
?>
</center>
