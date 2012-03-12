<?
include('simple_html_dom.php'); 
$url_part1 = 'http://www.gamestop.com/browse/xbox-360/games?nav=2b12,1385-ffff2418';
$html = new simple_html_dom(); 
$html->load_file($url_part1);
$games = $html->find('div[class=grid_12]'); 
foreach($games as $game) {
  $title=$game->first_child()->plaintext;
  $publisher =$game->children(1)->plaintext;
  print_r($publisher."makes : ");
  print_r($title);
  $new_or_used_array = explode(" ",$game->parent()->class);
  $new_or_used = $new_or_used_array[1];  
  print_r("and it is ".$new_or_used);
  print("<br>");
}
//}
?>
