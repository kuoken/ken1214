<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Headlines;

class MainController extends Controller
{
	function index() {
    	$titles = Headlines::all();
    	return view("index", compact('titles'));
    }

	function insert(Request $req) {
	if ($req->isMethod('post')) {
		$title = $req->input('title');
	    if (empty($title))
           return "年輕不要留白";
        else
    	   $data = new Headlines;
    	   $data->title = $title;
		  $data->save();
		}
		  return redirect("/");
	}
	
	function delete($id) {
		Headlines::where('id', $id)->delete();
		return redirect("/");
		}

	function logout() {
    	Auth::logout();
    	return redirect("/");	
    }
}