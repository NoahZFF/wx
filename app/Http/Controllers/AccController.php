<?php

namespace App\Http\Controllers;


class AccController extends Controller
{
	
    public function info()
	{
		
		echo "这个是第一个界面";
		// return 111;
		echo json_encode(['a'=>1,'b'=>2]);
	}
}
