<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Task;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
	public function _construct(){
		$this->middleware("auth");
	}
	
	
	public function index(){
// 		$tasks = Task::all();
		$tasks = Task::where('UserId',Auth::id())->get();
		return view("my_tasks",compact('tasks')); 
		
	}
	
	public function GetTasks(Request $request){
		
		$this->validate($request,[
				"TaskName" => 'required|min:5|max:12',
				"TaskDescription" => 'required|min:20|max:120'
		]);
		
		$taskname = $request -> get("TaskName");
		$taskdesc = $request -> get("TaskDescription");
		
		$task = new Task();
		$task ->title = $taskname;
		$task ->description = $taskdesc;
		$task ->UserId = Auth::id();
		$task -> save();
// 		return back()->withInput();
// 		return redirect('my_task')->with('TaskName', 'TaskDescription');
  		return back();
	}
	
	public function Delete_Task($id){
	
		$taskDel = Task::find($id);
		$taskDel -> delete();
		return back();
		
	}
	
	
	public function Edit_Task($id){
		$taskEdit = Task::find($id);
		return view("Edit",compact('taskEdit'));
		
	}
	
	public function Save_Update(Request $request){
		$this->validate($request,[
				"TaskName" => 'required|min:5|max:12',
				"TaskDescription" => 'required|min:20|max:120'
		]);
		
		
		$tsk_edit = Task::find($request -> id);
		
		$tsk_edit -> title = $request ->TaskName;
		$tsk_edit -> description = $request ->TaskDescription;
		$tsk_edit -> save();
		return redirect("my_tasks");
	}
}
