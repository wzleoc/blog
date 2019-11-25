<?php
$http = new Swoole\Http\Server("0.0.0.0", 8811);
$http->set([
	'enable_static_handler'=>true,
	'document_root'=>'./'
]);
$http->on('request', function ($request, $response) {

	$response->end(111111111);
});
$http->start();
