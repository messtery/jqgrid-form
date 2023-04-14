<?php

header('Access-Control-Allow-Origin: *');

echo json_encode([
    [
        'id' => 1, 'name' => "test 1", 'debt_amount' => 10_000
    ],
    [
        'id' => 2, 'name' => "test 2", 'debt_amount' => 20_000
    ],
    [
        'id' => 3, 'name' => "test 3", 'debt_amount' => 30_000
    ],
    [
        'id' => 4, 'name' => "test 4", 'debt_amount' => 40_000
    ],
    [
        'id' => 5, 'name' => "test 5", 'debt_amount' => 50_000
    ],
]);
