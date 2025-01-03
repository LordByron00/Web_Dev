@extends('doctors.layout')
@section('content')
<div class="row">

    <div class="col-lg-15 margin-tb">
    <div class="pull-left">
        <h2 style="text-align: center;"> Edit doctor Record</h2>
</div>
     <div class="pull-right">
     <a class="btn btn-primary" href="{{ route('doctors.index')}}">Back </a>
</div>
</div>
</div>
@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops</strong> There were some problems with your input. <br> <br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error}}</li>
        @endforeach
</ul>
</div>
@endif
<form action="{{route('doctors.update',$doctor->id)}}" method="POST">
    @csrf 
    @method('PUT')
    <div class="row">
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>FirstName: </strong>
            <input type="text" name="FirstName" value="{{$doctor->FirstName}}" class="form-control" placeholder="FirstName">
       </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>MiddleName: </strong>
            <input type="text" name="MiddleName" value="{{$doctor->MiddleName}}"class="form-control" placeholder="Middle Name">
       </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last Name: </strong>
            <input type="text" name="LastName" value="{{$doctor->LastName}}"class="form-control" placeholder="Last Name">
       </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Sex: </strong>
            <input type="text" name="sex" value="{{$doctor->sex}}" class="form-control" placeholder="Sex">
       </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Birth Date: </strong>
            <input type="text" name="BirthDate" value="{{$doctor->BirthDate}}"class="form-control" placeholder="Birth Date">
       </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Address: </strong>
            <input type="text" name="Address" value="{{$doctor->Address}}"class="form-control" placeholder="Address">
       </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Contact Number: </strong>
            <input type="text" name="ContactNumber" value="{{$doctor->ContactNumber}}"class="form-control" placeholder="Contact Number">
       </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
       
            
            <button type="submit" class="btn btn-primary">Submit</button>
       </div>
    </div>
</form>
@endsection