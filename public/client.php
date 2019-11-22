<?php
//链接swoole tcp服务
$client = new swoole_clinet(SWOOLE_SOCK_TCP);

if(!$client->connect('127.0.0.1',9501,0.5)){

	die('connect fail');
}

//像服务器发送数据
$data = 'i am client1 request string';

if(!$client->send($data)){
	die('send fali');
}

//从服务器接受数据
$get = $client->recv();

if(!$get){
	die('get response fail');
}

echo $get;

//关闭连接
$client->close();