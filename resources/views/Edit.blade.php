@extends("layouts.master")


@section("content")

<br>

<!-- <div  class="col-md-6 col-md-offset-3"> -->
<!-- {{$taskEdit}} -->
<!-- </div> -->


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

<form action="" method="post" >

{{ csrf_field() }}

<h4>Edit Task ->   {{$taskEdit->title}}</h4>
<input type="hidden" name="id" value="{{$taskEdit->id}}" >
<label class="form-group">Task Name</label> <br>
<input type="text" name="TaskName" value="{{$taskEdit->title}}" placeholder="Edit Your Task Name" class="form-group"><br>
<label class="form-group">Task Description</label> <br>
<input type="text" name="TaskDescription" value="{{$taskEdit->description}}" placeholder="Edit Your Task Description" class="form-group">
<br></<b><b></b>
<button type="submit" name="btn" class = "btn btn-success form-group"> Save </button> 
<br>


</form>

</div>

@stop