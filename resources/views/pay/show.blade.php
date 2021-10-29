@extends('layout')
@section('title','View Pay')
@section('content')
<div class="card mb-4 mt-5">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        View Pay  
        <a href="{{url('pay')}}" class="float-end">view all</a>
    </div>
    <div class="card-body">
        <form method="post" action="{{url('pay/'.$data->pay)}}" enctype="multipart/form-data">
            @method('put')
            @csrf 
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <td>
                        {{$data->id}}
                    </td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>
                        {{$data->Name}}
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        {{$data->Email}}
                    </td>
                </tr>
                <tr>
                    <th>Join_date</th>
                    <td>
                        {{$data->Join_date}}
                    </td>
                </tr>
                <tr>
                    <th>Position</th>
                    <td>
                        {{$data->Position}}
                    </td>
                </tr>
                <tr>
                    <th>Salary</th>
                    <td>
                        {{$data->Salary}}
                    </td>
                </tr>
                <tr>
                    <th>Payslip</th>
                    <td>
                        {{$data->Payslip}}
                    </td>
                </tr>
                 
             </table>
        </form>
    </div>
</div>

@endsection