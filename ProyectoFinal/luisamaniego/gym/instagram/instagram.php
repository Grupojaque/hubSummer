
<?php include "../php/cabecera.php" ?>

<br>
<br>
<br>
<section id="instagram">

<?php

$YOUR_CLIENT_ID = "c4ff6d29d89b4ab98583b3fba6dff2d7";
$YOUR_CLIENT_SECRET ="d23cbe2102474048a0812955b9426357";
$YOUR_REDIRECT_URL ="http://localhost/gym/instagram/instagram.php";



$url1 = $_SERVER['REQUEST_URI'];
$token = $_GET['code'];
$user_id = 1443425250;
$count=2;
//echo $token;
//echo "<br>";
//echo $url1;
//echo "<br>";

$Link1 = "http://localhost".$url1;

//echo $Link1;

$url = "https://api.instagram.com/oauth/access_token";
$access_token_parameters = array(
	'client_id'			=>     $YOUR_CLIENT_ID,
	'client_secret'		=>     $YOUR_CLIENT_SECRET,
	'grant_type'		=>     'authorization_code',
	'redirect_uri'		=>     $YOUR_REDIRECT_URL,
	'code'				=>     $_GET["code"],
);

$curl = curl_init($url);
curl_setopt($curl,CURLOPT_POST,true);
curl_setopt($curl,CURLOPT_POSTFIELDS,$access_token_parameters);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);

/*echo "<pre>";
print_r(json_decode($result));
echo "</pre>";*/

//echo 'Peticion De Mis Fotos';

$at=json_decode($result)->access_token;

//echo $at;

$Link = 'https://api.instagram.com/v1/users/'.$user_id.'/media/recent/?access_token='.$at.'&'.$count;


//echo $Link;

Function conex($a1){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $a1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$isle = curl_exec($ch);
	curl_close($ch);
	return $isle;
}

$veri = conex($Link);
$conta=0;


if($veri){

	foreach (json_decode($veri)->data as $a1){

		$datos = $a1->images->low_resolution->url;
		$conta=$conta+1;
		echo '<article id="imagenh"><img src="'.$datos.'" alt=""/><br></article>'; //"'.$conta.'" para el conteo en
	}

echo $datos[0];
//echo '<article id=imagen"'.$conta.'"><img src="'.$datos.'" alt=""/><br></article>';
}

/*
$Link2="https://api.instagram.com/v1/media/popular?access_token=".$at;

$veri = conex($Link2);
$contar=0;
echo '<br>Peticion De Fotos Populares';

if($veri){

	foreach (json_decode($veri)->data as $a1){

		$datos = $a1->images->low_resolution->url;
		$contar=$contar+1;
		echo '<article id=imagex"'.$conta.'"><img src="'.$datos.'" alt=""/><br></article>';
		

	}
}

*/

?>
</section>
<script type="text/javascript">
	var json =  <?php echo $veri ?>;
	console.log(json.data[0].link);
</script>
<?php include "../php/pie.php" ?>