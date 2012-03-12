<?
include('simple_html_dom.php'); 
$url_part1 = 'http://www.walmart.com/browse/Games/_/N-91cgZ1z0gls9Zaq90Zaqce/Ne-aq7g?tab_value=Online&catNavId=482412&pref_store=1734&depts=&ref=125866.421648+500524.4293873225&ic=60_';
$html = new simple_html_dom(); 
for($i=0; $i<=660; $i+=60){
  $url = $url_part1.$i; 
  $html->load_file($url);
  $games = $html->find('div[class=prodInfoBox]'); 
  foreach($games as $game) {
    $ret = $game->find('.VGRating');
    if(sizeof($ret) > 0){
      print($game->children(0)->plaintext); //title
      print("is rated: ");
      $rating = explode(" ", ($game->children(3)->plaintext));
      //  hack for Everyone 10+  
      if(sizeof($rating) > 3){
        print_r($rating[2]." ".$rating[3]); //rating
      }       
      else{
        print_r($rating[2]); //rating
      }
      $price = $game->children(2)->children(1)->first_child()->first_child()->plaintext; //price
      print(" and it costs: ");      
      print_r($price);
      print("<br>");
      }
  }
}
?>
