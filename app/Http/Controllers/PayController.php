<?php

namespace App\Http\Controllers;
use App\Models\Emp;
use App\Models\Pay;

use Illuminate\Http\Request;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Pay::orderByDesc('id')->get();
        return view('pay.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pay.create');
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
            'id'=>'required',
            'Name'=>'required',
            'Email'=>'required',
            'Join_date'=>'required',
            'Position'=>'required',
            'Salary'=>'required',
            'Payslip'=>'required'
        ]);
        $data=new Pay();
        $data->id=$request->emp;
        $data->Name=$request->emp;
        $data->Email=$request->Email;
        $data->Join_date=$request->Join_date;
        $data->Position=$request->Position;
        $data->Salary=$request->Salary;
        $data->Payslip=$request->Payslip;
        $data->save();

        return redirect('pay/create')->with('msg','data submitted'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pay  $pay
     * @return \Illuminate\Http\Response
     */
    public function show(Pay $pay)
    {
        $eps=Emp::orderByDesc('id')->get();
        $data=Pay::find($pay);
        return view('pay.show',['eps'=>$eps,'data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pay  $pay
     * @return \Illuminate\Http\Response
     */
    public function edit(Pay $pay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pay  $pay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pay $pay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pay  $pay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pay $pay)
    {
        Pay::where('id',$pay)->delete();
        return redirect('pay');
    }
}
