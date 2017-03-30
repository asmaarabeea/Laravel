@extends("layouts.master")


@section("content")

<h4>Add Task</h4>
<form action="" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
<input type="text" name="Task" placeholder="Add Your Task">
<button type="submit" name="btn"> Add Task</button>
<br>
{{isset($tt) ? $tt: ''}}

</form>

@stop