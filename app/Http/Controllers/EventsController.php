<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
	function show($id){
		return view('events.show')->with('id', $id)->with('name', 'Laravel Hacking and Coffee');
	}
	
	function category($category, $subcategory='all'){
		dd("Category: {$category} Subcategory: {$subcategory}");
	}
	
	function showS($id){
		$name = "Hilton Head Beach House";
		$date = date('Y-m-d');
		return view('events.show', compact($name, $id, $date));
	}
	function index(){
		$events = [
//			'Laravel Hacking and Coffee.',
//			'IoT with Raspberry Pi.',
//			'Free Vue.js Lessons.'
		];		

		return view('events.index')->with('events', $events); 
	}
}
