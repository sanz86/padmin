<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ItemsController extends Controller
{
    //
    public function news()
    {
    		$title = ['tit'=>'Great news','con'=>['name'=>'sanjib','id'=>2]];
    	return view('items/item',$title );
    }
}
