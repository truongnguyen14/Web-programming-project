<?php

function read_all_stores() {
  $file_name = 'stores.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $stores = [];
  while ($row = fgetcsv($fp)) {
    $i = 0;
    $store = [];
    foreach ($first as $col_name) {
      $store[$col_name] =  $row[$i];
      $i++;
    }
    $stores[] = $store;
  }
  return $stores;
}


  function read_all_categories() {
    $file_name = 'categories.csv';
    $fp = fopen($file_name, 'r');
    $first = fgetcsv($fp);
    $categories = [];
    while ($row = fgetcsv($fp)) {
      $i = 0;
      $category = [];
      foreach ($first as $col_name) {
        $category[$col_name] =  $row[$i];
        $i++;
      }
      $categories[] = $category;
    }
    return $categories;
  }

  ?>