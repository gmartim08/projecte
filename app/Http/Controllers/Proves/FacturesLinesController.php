<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factures_lines;
use Validator;
use App\User;
use Auth;

class FacturesLinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('factures_lines',compact('factures_lines'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'facturaID'    => 'required|integer',
            'description'  => 'required|string|max:100',
            'units'        => 'required|integer',
            'unit_price'   => 'required|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'total_line'   => 'required|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'taxa'         => 'required|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'price_cost'   => 'required|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'linea'        => 'required|integer',      
        ]);
        if ($validator->fails()) {
            return redirect('factures/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $facturesLines= new Factures_lines();
        $facturesLines->id=$request->get('id');
        $facturesLines->facturaID=$request->get('facturaID');
        $facturesLines->description=$request->get('description');
        $facturesLines->units=$request->get('units');
        $facturesLines->unit_price=$request->get('unit_price');
        $facturesLines->total_line=$request->get('total_line');
        $facturesLines->taxa=$request->get('taxa');
        $facturesLines->price_cost=$request->get('price_cost');
        $facturesLines->linea=$request->get('linea');
        $facturesLines->save();
        
        return redirect('factures')->with('success', 'Information has been added');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
  
}
