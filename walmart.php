<?
include('simple_html_dom.php'); 
$url_part1 = 'http://www.walmart.com/browse/Games/_/N-91cgZ1z0gls9Zaq90Zaqce/Ne-aq7g?tab_value=Online&catNavId=482412&pref_store=1734&depts=&ref=125866.421648+500524.4293873225&ic=60_';
$html = new simple_html_dom();  
$html->load_file($url_part1."0");
$games = $html->find('div[class=prodInfoBox]'); 
print_r(sizeof($games));
foreach($games as $game) {
     $ret = $game->find('.VGRating');
     if(sizeof($ret) > 0){
       print($game->children(0)->plaintext);
       print("<br>");
     }
}
/*
for($i=0; $i<=660; $i+=60){
	$url = $url_part1.$i;
	$html = file_get_contents($url); 
	$pattern = '/<div class="prodInfo">.*<a class="prodLink ListItemLink".*;" >(.*)<\/a>.*<div class="VGRating BodyS"><span class="BodySBold">ESRB Rating:<\/span>(.*)<\/div>.*<\/div><!-- end prodInfo -->/msU';
	preg_match_all($pattern, $html, $matches);
	$j=0;
	print("games: ".sizeof($matches[1]));
	print("ratings: ".sizeof($matches[2]));
	print("<br>");
	$new_array = array_combine($matches[1], $matches[2]);
	foreach ($new_array as $key => $value){
                print($key."is rated: ".$value);
		echo("<br>");
                
	}
        break;*/
	//print_r($matches);
	//foreach($matches[1] as $array) {
	//foreach (combine($matches[1], $matches[2]) as $array){
		//print($array[0]);
		//print_r($matches[1][j]);
		//print(" is rated: ");
               // print_r($matches[2]);
		
		//print("<br>");
		//$j++;
	//}
//}	

?>
