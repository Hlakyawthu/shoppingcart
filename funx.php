<?php
require_once "Item.php";
?>
<?php
/**
 * 商品の配列を生成する。
 * @return array Itemクラスのインスタンスを要素とする配列
 */
function createItems():array {
	$items = array(
		new Item("Head First PHP & MySQL", 4650),
		new Item("リーダブルコード", 2600), 
		new Item("Head First デザインパターン", 5060),
		new Item("PHPによるデザインパターン入門", 2400),
		new Item("The Net", 500),
		new Item("Star Wars: force Awakens", 2800),
		new Item("Out break", 900)
	);	
}
?>