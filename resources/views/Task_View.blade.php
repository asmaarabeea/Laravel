@extends("layouts.master")


@section("content")


<br>
<h4>Tasks</h4>

<ul>
@foreach($tasks as $key => $task)
<br>

<li> <a href="task/{{$key}}"> {{$task}} </a></li>

@endforeach
</ul>



@stop