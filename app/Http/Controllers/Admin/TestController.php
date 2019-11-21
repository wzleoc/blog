<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//class TestController extends Controller
//{

class Train implements TrafficTool
{

	public function go()
	{
		echo "train....";
	}
}

class Leg implements TrafficTool
{
	public function go()
	{
		echo "leg..";
	}
}

class Traveller
{
	/**
	 * @var Leg|null|Train
	 * 旅行工具
	 */
	protected $_trafficTool;

	public function __construct(TrafficTool $trafficTool)
	{
		$this->_trafficTool = $trafficTool;
	}

	public function visitTibet()
	{
		$this->_trafficTool->go();
	}
}

