<?php
function read_all_products() {
    $file_name = 'products.csv';
    $fp = fopen($file_name, 'r');
    $first = fgetcsv($fp);
    $products = [];
    while ($row = fgetcsv($fp)) {
        $i = 0;
        $product = [];
        foreach ($first as $col_name) {
            $product[$col_name] =  $row[$i];
            $i++;
            }
        $products[] = $product;
        }
        return $products;
      }
    
$products = read_all_products();

function date_sorting($a, $b) {
    return strtotime($a['created_time']) - strtotime($b['created_time']);
}

?>