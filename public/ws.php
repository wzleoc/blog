<?php
$ws = new Swoole\WebSocket\Server('0.0.0.0',9503);
//$ws->set([
//	'enable_static_handler'=>true,
//	'document_root'=>'./'
//]);
$ws->on('open',function(Swoole\WebSocket\Server $ws,$request){

	echo "server:handshake success with fd{$request->fd}\n";
});

$ws->on('message',function(Swoole\WebSocket\Server $ws,$frame){
	echo "receive from {$frame->fd}:{$frame->data},opcode:{$frame->opcode},fin:{$frame->finish}\n";
	$ws->push($frame->fd, "from server de response\n");
});

$ws->on('close',function($ws,$fd){
	echo "client < -$fd- > closed\n";
});
$ws->start();