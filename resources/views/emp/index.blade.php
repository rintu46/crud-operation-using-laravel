@extends('layout')
@section('title','All Emp')
@section('content')

<div class="card mb-4 mt-5">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Emp info
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Phone_no</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>F_Name</th>
                    <th>M_Name</th>
                    <th>Present_Address</th>
                    <th>Permanent_Addres</th>
                    <th>NID</th>
                    <th>Bank_Name</th>
                    <th>Ac_No</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Phone_no</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>F_Name</th>
                    <th>M_Name</th>
                    <th>Present_Address</th>
                    <th>Permanent_Addres</th>
                    <th>NID</th>
                    <th>Bank_Name</th>
                    <th>Ac_No</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @if($data)
                    @foreach($data as $d)
                        <tr>
                              <td>{{$d->id}}</td>
                              <td>{{$d->Name}}</td>
                              <td>{{$d->Position}}</td>
                              <td>{{$d->Phone_no}}</td>
                              <td>{{$d->Email}}</td>
                              <td>{{$d->DOB}}</td>
                              <td>{{$d->F_Name}}</td>
                              <td>{{$d->M_Name}}</td>
                              <td>{{$d->Present_Address}}</td>
                              <td>{{$d->Permanent_Addres}}</td>
                              <td>{{$d->NID}}</td>
                              <td>{{$d->Bank_Name}}</td>
                              <td>{{$d->Ac_No}}</td>
                              <td>{{$d->Status}}</td>
                              <td>
                                <a href="{{url('emp/'.$d->id)}}" class="btn btn-warning btn-sm">Show</a>
                                <a href="{{url('emp/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
                                <a href="{{url('emp/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
                              </td>
                        </tr>
                     @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>


@endsection