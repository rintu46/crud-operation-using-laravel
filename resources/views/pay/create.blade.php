@extends('layout')
@section('title','Add pay')
@section('content')
<div class="card mb-4 mt-5">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        create Dept  
        <a href="{{url('pay')}}" class="float-end">view all</a>
    </div>
    <div class="card-body">
         
        <form method="post" action="{{url('pay')}}">
            @csrf 
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <td>
                        <input type="text" name="Name" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        <input type="text" name="Email" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <th>Join_date</th>
                    <td>
                        <input type="text" name="Join_date" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <th>Position</th>
                    <td>
                        <input type="text" name="Position" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <th>Salary</th>
                    <td>
                        <input type="text" name="Salary" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <th>Payslip</th>
                    <td>
                        <input type="text" name="Payslip" class="form-control"/>
                    </td>
                </tr>
                {{-- <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-primary" value="Submit"/>
                    </td>
                </tr> --}}
             </table>
        </form>
    </div>
</div>

@endsection