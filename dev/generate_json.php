<?php

$icons = json_decode(file_get_contents("icons.json"), true);
$json = [];

foreach($icons as $icon => $data){
    $json[] = [
        'name' => $icon . "",
        'id' => $icon . "",
        'unicode' => $data['unicode'] . "",
        'styles' => $data['styles'],
        'search_terms' => $data['search']['terms']
    ];
}

$output = fopen("../data/fontawesome.json", "a+");
fwrite($output, json_encode($json));
fclose($output);