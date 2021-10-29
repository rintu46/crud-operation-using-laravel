@extends('layout')
@section('title','View Emp')
@section('content')
<div class="card mb-4 mt-5">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        View Emp  
        <a href="{{url('emp')}}" class="float-end">view all</a>
    </div>
    <div class="card-body">
         
        <form method="post" action="{{url('emp/'.$data->id)}}" enctype="multipart/form-data">
            @method('put')
            @csrf 
            <table class="table table-bordered">
               
                <tr>
                    <th>Name</th>
                    <td>
                        {{$data->Name}}
                    </td>
                </tr>
                <tr>
                    <th>Position</th>
                    <td>
                        {{$data->Position}}
                    </td>
                </tr>
                <tr>
                    <th>Phone_no</th>
                    <td>
                        {{$data->Phone_no}}
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        {{$data->Email}}
                    </td>
                </tr>
                <tr>
                    <th>DOB</th>
                    <td>
                        {{$data->DOB}}
                    </td>
                </tr>
                <tr>
                    <th>F_Name</th>
                    <td>
                        {{$data->F_Name}}
                    </td>
                </tr>
                <tr>
                    <th>M_Name</th>
                    <td>
                        {{$data->M_Name}}
                    </td>
                </tr>
                <tr>
                    <th>Present_Address</th>
                    <td>
                        {{$data->Present_Address}}
                    </td>
                </tr>
                <tr>
                    <th>Permanent_Addres</th>
                    <td>
                        {{$data->Permanent_Addres}}
                    </td>
                </tr>
                <tr>
                    <th>NID</th>
                    <td>
                        {{$data->NID}}
                    </td>
                </tr>
                <tr>
                    <th>Bank_Name</th>
                    <td>
                        {{$data->Bank_Name}}
                    </td>
                </tr>
                <tr>
                    <th>Ac_No</th>
                    <td>
                        {{$data->Ac_No}}
                    </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                         @if($data->Status==1) Activated @else Deactivated @endif  
                        <br/>
                        
                    </td>
                </tr>
                
             </table>
        </form>
    </div>
</div>

@endsection