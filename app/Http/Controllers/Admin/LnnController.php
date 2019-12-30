<?php
namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LnnController extends Controller
{
    public function index(){

	   $lnn = User::where('id','1')->first()->toArray();
	   dd($lnn);
    }
}
