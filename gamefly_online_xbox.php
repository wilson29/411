<?
include('simple_html_dom.php'); 
$url_part1 = 'http://www.gamefly.com/buy-games/Browse/?pf=1070&cat=SeeAll&sort=Bestselling&page=';
$url_part2 = '&pageSize=78';
$html = new simple_html_dom(); 
for($i=1; $i<=3; $i++){
  $html->load_file($url_part1.$i.$url_part2);
  $games = $html->find('div[class=product-wrapper]'); 
  foreach($games as $game) {
    print_r($game->plaintext."<br>");
  }
}
?>
