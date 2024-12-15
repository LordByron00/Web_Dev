@extends ('doctors.layout')
@section('content')
<div class="pull-left">
        <nav>
            <ul class="nav">
                <li> <a href="/patients">Patient</a></li>
                <li style="background-color: rgb(22 27 26);"><a href="/doctors">Doctors</a></li>
            </ul>
        </nav>
        <h2 style="text-align: center;">Doctor Record</h2> 
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('doctors.create') }}"> Create New Doctor Record </a>
        </div>
    </div>
</div>
@if($message=Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Sex</th>
        <th>BirthDate</th>
        <th>Address</th>
        <th>Contact Number</th>
        <th>Specialization</th>
        <th width="280px">Action</th>
    </tr>
@foreach($doctors as $doctor)                         
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $doctor->FirstName }}</td>
        <td>{{ $doctor->MiddleName }}</td>
        <td>{{ $doctor->LastName }}</td>
        <td>{{ $doctor->Sex }}</td>
        <td>{{ $doctor->BirthDate}}</td>
        <td>{{ $doctor->Address }}</td>
        <td>{{ $doctor->ContactNumber }}</td>
        <td>{{ $doctor->Specialization }}</td>
        <td>
            <form action="{{ route('doctors.destroy',$doctor->id)}}" method="POST">
                <a class="btn btn-info" href="{{ route('doctors.index',$doctor->id)}}">Show</a>
                <a class="btn btn-info" href="{{ route('doctors.edit',$doctor->id)}}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
</table>