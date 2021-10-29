<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Dept;
use App\Models\Emp;

class EmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Emp::orderByDesc('id')->get();
        return view('emp.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Emp::orderByDesc('id')->get();
        return view('emp.create',['emp'=>$data]);
        //return view('emp.create',['dept'=>$data])
        //return view('emp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'Name'=>'required',
            'Position'=>'required',
            'Phone_no'=>'required',
            'Email'=>'required',
            'DOB'=>'required',
            'F_Name'=>'required',
            'M_Name'=>'required',
            'Present_Address'=>'required',
            'Permanent_Addres'=>'required',
            'NID'=>'required',
            'Bank_Name'=>'required',
            'Ac_No'=>'required',
            'Status'=>'required'
        ]);
        $data=Emp();
        $data->Name=$request->Name;
        $data->Position=$request->Position;
        $data->Phone_no=$request->Phone_no;
        $data->Email=$request->Email;
        $data->DOB=$request->DOB;
        $data->F_Name=$request->F_Name;
        $data->M_Name=$request->M_Name;
        $data->Present_Address=$request->Present_Address;
        $data->Permanent_Addres=$request->Permanent_Addres;
        $data->NID=$request->NID;
        $data->Bank_Name=$request->Bank_Name;
        $data->Ac_No=$request->Ac_No;
        $data->Status=$request->Status;




         
        $data->save();

        return redirect('emp')->with('msg','data submitted'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Emp::find($id);
        return view('emp.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $departs=Dept::orderByDesc('id')->get();
        // $data=Emp::find($id);
        // return view('emp.edit',['$departs'=>$departs,'data'=>$data]);

        $data=Emp::find($id);
        return view('emp.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        


        $request->validate([
            'Name'=>'required',
            'Position'=>'required',
            'Phone_no'=>'required',
            'Email'=>'required',
            'DOB'=>'required',
            'F_Name'=>'required',
            'M_Name'=>'required',
            'Present_Address'=>'required',
            'Permanent_Addres'=>'required',
            'NID'=>'required',
            'Bank_Name'=>'required',
            'Ac_No'=>'required',
            'Status'=>'required'
        ]);
        $data=Emp::find($id);
        $data->Name=$request->Name;
        $data->Position=$request->Position;
        $data->Phone_no=$request->Phone_no;
        $data->Email=$request->Email;
        $data->DOB=$request->DOB;
        $data->F_Name=$request->F_Name;
        $data->M_Name=$request->M_Name;
        $data->Present_Address=$request->Present_Address;
        $data->Permanent_Addres=$request->Permanent_Addres;
        $data->NID=$request->NID;
        $data->Bank_Name=$request->Bank_Name;
        $data->Ac_No=$request->Ac_No;
        $data->Status=$request->Status;


        $data->save();

        return redirect('emp')->with('msg','data updated'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      

        Emp::destroy(array('id',$id));

        return redirect('emp');
    }
    public function demo()
    {
        return view('demo');
    }
}
