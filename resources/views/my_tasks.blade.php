@extends("layouts.master")


@section("content")


@foreach($tasks as $task)
<ul>
<li>{{$task->title}}</li>
<li>{{$task->description}}</li>
<a href="{{URL('delete')}}/{{$task->id}}" class="btn btn-danger">Delete</a> 
<a href="{{URL('edit')}}/{{$task->id}}" class="btn btn-info">Edit</a> 
</ul>
@endforeach

</div>


<div  class="col-md-4 col-md-offset-4 ">
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="" method="post" novalidate >
{{ csrf_field() }}
<h4>Add Task</h4>
<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}">  -->
<label class="form-group">Task Name</label> <br>
<input type="text" name="TaskName" placeholder="Add Your Task Name" class="form-group"><br>
<label class="form-group">Task Description</label> <br>
<input type="text" name="TaskDescription" placeholder="Add Your Task Description" class="form-group">
<br></<b><b></b>
<button type="submit" name="btn" class = "btn btn-primary form-group"> Add Task</button>
<br>

<!-- {{isset($tt) ? $tt: ''}} -->

</form>

</div>


@stop


