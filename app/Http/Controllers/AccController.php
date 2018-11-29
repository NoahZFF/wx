<?php

namespace App\Http\Controllers;


class AccController extends Controller
{
	public function hook(){
		echo exec('cd /home/wwwroot/wx.feifeifly.cn/wx/');
		echo exec('git pull origin master');

	}
    public function info()
	{
		
		echo "这个是第一个界面";
		// return 111;
		echo json_encode(['a'=>1,'b'=>2]);
	}
}
