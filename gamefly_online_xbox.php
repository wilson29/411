<?
include('simple_html_dom.php'); 
$url_part1 = 'http://www.gamefly.com/buy-games/Browse/?pf=1070&cat=SeeAll&sort=Bestselling&page=1&pageSize=78';
$html = new simple_html_dom(); 
$html->load_file($url_part1);
$games = $html->find('div[class=product-wrapper]'); 
foreach($games as $game) {
  print_r($game->plaintext."<br>");
}

?>
