@extends ("layouts.default")

@section ("content")

<div class="jumbotron">
  <div class="container text-center">
    <h1>My Home page</h1>      
    <p>Some text that represents "Me"...</p>
  </div>
</div>
<?php // print_r($students);

?>


  
<div class="container-fluid bg-3 text-center">    
  <h3>Some of my Work</h3><br>
  <div class="row">
    <div class="col-sm-6">
      <ul>
        @foreach($students as $student)
        <ul>
        <li>{{$student->id}}</li>
        <li>{{$student->name}}</li>
        <li>{{$student->email}}</li>
        <li>{{$student->phone}}</li>
        </ul>
        @endforeach
      </ul>
    </div>
  

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br>

@endsection