<?
include('simple_html_dom.php'); 
$url_part1 = 'http://www.walmart.com/browse/Games/_/N-91cgZ1yzttzlZaq90Zaqce/Ne-aq7g?tab_value=All&path=0%3a2636%3a413799&pref_store=5455&depts=&ref=125866.421648+500524.4292810769&ic=660_0';
$html = new simple_html_dom(); 
for($i=0; $i<=660; $i+=60){
  $url = $url_part1.$i; 
  $html->load_file($url);
  $games = $html->find('div[class=prodInfoBox]'); 
  foreach($games as $game) {
    $ret = $game->find('.VGRating');
    if(sizeof($ret) > 0){
      print($game->children(0)->plaintext);
      print("is rated: ");
      $rating = explode(" ", ($game->children(3)->plaintext));
      //  hack for Everyone 10+  
      if(sizeof($rating) > 3){
        print_r($rating[2]." ".$rating[3]);
      }       
      else{
        print_r($rating[2]);
      }
       print("<br>");
      }
  }
}
?>
