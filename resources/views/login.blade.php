@extends('base')

@section('content')

<div class="card shadow-lg p-2 mb-3 bg-white rounded" style=" margin-top: 30px;">

<div class="row mt-5">
    <div class="col-md-4 offset-md-4">
     <h1> User Login</h1>
       {!! Form::open(['url'=>'/login','method'=>'post']) !!}
   <div class="mb-3">
       {!! Form::label("email","Email") !!}
       {!! Form::email("email",null, ['class'=>'form-control']) !!}
   </div>
   <div class="mb-3">
       {!! Form::label("password","Password") !!}
       {!! Form::password("password",['class'=>'form-control']) !!}
   </div>
   
   <div class="mb-3">
      <button class="btn btn-primary" submit="submit"> LOGIN</button>
   </div>

{!! Form::close() !!}
    </div>
</div>
</div>


@endsection

