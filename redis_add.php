<?php

$redis = new Redis();
$redis->connect('127.0.0.1',6379);

$result = [];

//提前写入商品到队列
for($i=0;$i<10;$i++){
    $value = $i+1;
    $result[] = $redis->lpush('demo_goods_store',$value);
}
print_r($result);




