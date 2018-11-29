<?php

namespace App\Http\Controllers;


class AccController extends Controller
{
    public function info(){
		echo json_encode(['a'=>1,'2'=>2]);
	}
}
