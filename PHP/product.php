<?php
function read_product() {
  $file = fopen('products.csv', 'r');
  $data = fgetcsv($file);
  $products = [];
  while ($row = fgetcsv($file)) {
    $i = 0;
    $product = [];
    foreach ($data as $column) {
      $product[$column] =  $row[$i];
      $i++;
    }
    $products[] = $product;
  }
  return $products;
}
 function date_comparison($a, $b)
{
	$t1 = strtotime($a['created_time']);
    $t2 = strtotime($b['created_time']);
    return $t2 - $t1;
}

	
function read_store(){
	$file = fopen('stores.csv','r');
	$data = fgetcsv($file);
	$stores=[];
	while ($row = fgetcsv($file)){
		$i=0;
		$store=[];
		foreach ($data as $column){
			$store[$column] = $row[$i];
			$i++;
		}
	$stores[]=$store;
	}
	return $stores;
	}

