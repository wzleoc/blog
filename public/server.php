<?php
//创建Server对象，监听 127.0.0.1:9501端口
$serv = new Swoole\Server("0.0.0.0", 9501);

$serv->set(
	[
		'worker_num'=>8,//worker进程数
		'max_request'=>10000,
	]
);
//监听连接进入事件
//$fd 客户端连接的唯一标识  $reactor_id  线程id
$serv->on('Connect', function ($serv, $fd,$reactor_id) {
	echo "Client: {$fd} - {$reactor_id}.\n";
});

//监听数据接收事件
$serv->on('Receive', function ($serv, $fd, $reactor_id, $data) {
	echo "get from client:".$data;
	$serv->send($fd, "from Server: -".'<-'.$reactor_id.'->'.'----->'.$data);
});

//监听连接关闭事件
$serv->on('Close', function ($serv, $fd) {
	echo "Client: $fd Close.\n";
});

//启动服务器
$serv->start();