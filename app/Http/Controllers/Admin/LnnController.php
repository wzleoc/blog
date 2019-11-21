<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LnnController extends Controller
{
    public function index(){
	    $serv = new Swoole\Server("127.0.0.1", 9501);
	    var_dump($serv);die;
    }
}
