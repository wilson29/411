<?
include('simple_html_dom.php'); 
$url_part1 = 'http://www.walmart.com/browse/Games/_/N-91cgZ1z0po3e?tab_value=All&catNavId=972119&pref_store=1734&depts=&ref=4294296122+421648&ic=60_0';
$html = new simple_html_dom(); 
for($i=0; $i<=240; $i+=60){
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
