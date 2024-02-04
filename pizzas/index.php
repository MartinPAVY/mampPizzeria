<?php

$baseUrl = 'http://localhost:8888/flutterApi/static/images/pizzas/';

$pizzas = array();
$pizzas[] = array(
    'id' => 1,
    'title' => 'Barbecue',
    'garniture' => 'La garniture',
    'image' => $baseUrl . "pizza-bbq.jpg",
    'price' => 6.5
);
$pizzas[] = array(
    'id' => 2,
    'title' => 'Hawaï',
    'garniture' => 'La garniture',
    'image' => $baseUrl . "pizza-hawai.jpg",
    'price' => 9.5
);
$pizzas[] = array(
    'id' => 3,
    'title' => 'Epinards',
    'garniture' => 'La garniture',
    'image' => $baseUrl . "pizza-spinach.jpg",
    'price' => 8.5
);
$pizzas[] = array(
    'id' => 4,
    'title' => 'Végétarienne',
    'garniture' => 'La garniture',
    'image' => $baseUrl . "pizza-vegetable.jpg",
    'price' => 10.5
);
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode($pizzas);
} else {
    http_response_code(403);
    echo json_encode(array('message' => 'Forbidden access'));
}