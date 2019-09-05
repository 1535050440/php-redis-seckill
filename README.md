# redis-seckill
秒杀/抢购
```php
phpinfo.php     检查php环境

1.执行redis.php检查redis是否链接success

2.执行redis_add.php   把对应的key存到redis中

3.执行redis_order.php     执行秒杀操作

4. Win10 使用ab测试 【进入bin目录】  ab -n 500 -c 100 http://demo.com/git-php-redis/redis_order.php

```

##lpush

````php
$redis->lpush('demo_goods_store',$value);

1.最新插入的redis:row最大
==========================
1 1001
2 1002
3 1003
4 2019
-------------先后顺序
row value
1   2019
2   1003
3   1002
4   1001
-------------

````
## lpop  抛出

````php
$res = $redis->lpop('demo_goods_store');
-------------先后顺序
row value
1   1003
2   1002
3   1001
-------------
会输出：当前抛出的值
````
## llen  当面key存在的数量
```php
$redis->llen('order_init');

-------------
row value
1   1003
2   1002
3   1001
-------------
echo 3
```