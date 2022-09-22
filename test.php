<?php

$db = new \PDO('mysql:host=127.0.0.1;dbname=test;charset=utf8', 'test_user', 'testing123');

while(true) {
    echo '------------------------START------------------------' . PHP_EOL;
    try {
        $db->query('INSERT INTO test (date_input) VALUES (NOW())')->execute();
        $data = $db->query('SELECT * FROM test ORDER BY id DESC LIMIT 5')->fetchAll(\PDO::FETCH_ASSOC);
        var_dump($data);
    } catch (\Throwable $throwable) {
        echo $throwable->getMessage() . PHP_EOL;
    }
    echo '------------------------END--------------------------' . PHP_EOL;
    sleep(1);
}