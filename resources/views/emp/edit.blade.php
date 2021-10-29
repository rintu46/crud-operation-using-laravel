@extends('layout')
@section('title','Update Emp')
@section('content')
<div class="card mb-4 mt-5">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Update Emp  
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
                        <input type="text" value="{{$data->Name}}" name="Name" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <th>Position</th>
                    <td>
                        <input type="text" value="{{$data->Position}}" name="Position" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <th>Phone_no</th>
                    <td>
                        <input type="text" value="{{$data->Phone_no}}" name="Phone_no" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        <input type="text" value="{{$data->Email}}" name="Email" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <th>DOB</th>
                    <td>
                        <input type="text" value="{{$data->DOB}}" name="DOB" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <th>F_Name</th>
                    <td>
                        <input type="text" value="{{$data->F_Name}}" name="F_Name" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <th>M_Name</th>
                    <td>
                        <input type="text" value="{{$data->M_Name}}" name="M_Name" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <th>Present_Address</th>
                    <td>
                        <input type="text" value="{{$data->Present_Address}}" name="Present_Address" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <th>Permanent_Addres</th>
                    <td>
                        <input type="text" value="{{$data->Permanent_Addres}}" name="Permanent_Addres" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <th>NID</th>
                    <td>
                        <input type="text" value="{{$data->NID}}" name="NID" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <th>Bank_Name</th>
                    <td>
                        <input type="text" value="{{$data->Bank_Name}}" name="Bank_Name" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <th>Ac_No</th>
                    <td>
                        <input type="text" value="{{$data->Ac_No}}" name="Ac_No" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        Activate <input @if($data->Status==1) checked @endif type="radio" name="Status" value="1"/>
                        <br/>
                        Deactivate <input @if($data->Status==0) checked @endif type="radio" name="Status" value="0"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-primary" value="Submit"/>
                    </td>
                </tr>
             </table>
        </form>
    </div>
</div>

@endsection