<?php
$http = new Swoole\Http\Server("0.0.0.0", 8811);
$http->on('request', function ($request, $response) {
	$aa = $request->get;
	$response->end(json_encode($aa));
});
$http->start();
