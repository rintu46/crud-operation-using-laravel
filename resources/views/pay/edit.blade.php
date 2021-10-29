@extends('layout')
@section('title','Update pay')
@section('content')
<div class="card mb-4 mt-5">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Update pay  
        <a href="{{url('pay')}}" class="float-end">view all</a>
    </div>
    <div class="card-body">
        {{-- @if($errors->any())
            @foreach($errors->all() as $error)
	            <p class="text-danger"> {{$error)}}</p>
            @endforeach
        @endif

        @if(session::has('msg'))
        <p class="text-success">{{sessoin('msg')}}</p>
        @endif  --}}
        <form method="post" action="{{url('pay/'.$data->id)}}">
            @method('put')
            @csrf 
            <table class="table table-bordered">
                <tr>
                    <th>Title</th>
                    <td>
                        <input type="text" value="{{$data->title}}" name="title" class="form-control"/>
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

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('public')}}/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('public')}}/js/datatables-simple-demo.js"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>

@endsection