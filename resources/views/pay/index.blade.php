@extends('layout')
@section('title','All pay')
@section('content')
<div class="card mb-4 mt-5">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Salary info
       
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Join_date</th>
                    <th>Position</th>
                    <th>Salary</th>
                    <th>Make Payslip</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Join_date</th>
                    <th>Position</th>
                    <th>Salary</th>
                     
                    <th>Make Action</th>
                </tr>
            </tfoot>
            <tbody>
                @if($data)
                    @foreach($data as $d)
                        <tr>
                              <td>{{$d->id}}</td>
                              <td>{{$d->Name}}</td>
                              <td>{{$d->Email}}</td>
                              <td>{{$d->Join_date}}</td>
                              <td>{{$d->Position}}</td>
                              <td>{{$d->Salary}}</td>
                              <td>
                                <a href="{{url('pay/'.$d->id)}}" class="btn btn-danger btn-sm">Generate</a>
                              </td>
                        </tr>
                     @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
 
@endsection