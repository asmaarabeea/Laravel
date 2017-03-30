<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;


class My_Controller extends Controller
{
// 	public function display($name){
// 		return "Your name is" . $name;
// 	}
	public $Tasks=["task1","task2","task3","task4","task5","task6"];
	
	public function index(){
		return view("Task_View",['tasks'=> $this->Tasks]);
	}
	
	public function add(Request $request){
		$tsk = $request -> get("Task");
		return view("Add_Task",["tt" => $tsk]);
	}
	
	public function ShowFormTask(){
		return view("Add_Task");
	}
	
	public function showTask($id){
		return view("task", ["task"=> $this->Tasks[$id]]);
	}
	
}
