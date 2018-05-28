<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factures;
use App\Factures_lines;
use Validator;
use App\User;
use Auth;

class FacturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$factures;
        if(Auth::user()->rol == 1){
            $factures=Factures::leftJoin('users', 'factures.customer_name', '=', 'users.id')
            ->select('factures.*', 'users.name')->Paginate(4); // uneix la taula usuaris amb la de factures relacionat amb un camp en comu(customername=idusuari) 
        }else{
            $factures=Factures::where('customer_name', '=', Auth::user()->id)->leftJoin('users', 'factures.customer_name', '=', 'users.id')->select('factures.*', 'users.name')
                ->Paginate(4);
        }    
        return view('factures',compact('factures'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::where('rol', '<>', 1)->get();
        return view('factura_create',compact('users'));
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
            'customer_name'            => 'required|string|max:100',
            'customer_identity'        => 'required|string|max:100',
            'customer_identity_type'   => 'required|string|max:100',
            'serial'                   => 'required|string|max:100',
            'number'                   => 'required|string|max:100',
            'date'                     => 'required|string|max:100',
            'total_net_amount'         => 'required|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'total_amount'             => 'required|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'included_vat'             => 'required|integer',
            'observations'             => 'required|string|max:100',
            'lines'                    => 'required|string|max:100',
            'send'                     => 'required|integer|',           
        ]);
        if ($validator->fails()) {
            return redirect('factures/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $factures= new Factures();
        $factures->id=$request->get('id');
        $factures->customer_name=$request->get('customer_name');
        $factures->customer_identity=$request->get('customer_identity');
        $factures->customer_identity_type=$request->get('customer_identity_type');
        $factures->serial=$request->get('serial');
        $factures->number=$request->get('number');
        $factures->date=$request->get('date');
        $factures->total_net_amount=$request->get('total_net_amount');
        $factures->total_amount=$request->get('total_amount');
        $factures->included_vat=$request->get('included_vat');
        $factures->observations=$request->get('observations');
        $factures->lines=$request->get('lines');
        $factures->lines=$request->get('lines');
        //$factures->description=$request->get('description');

        for ($i=1; $i <=$factures->lines=$request->get('lines'); $i++) { 
            $lines = new Factures_lines();
            $lines->facturaID=$request->get('facturaID'.$i);
            $lines->description=$request->get('description'.$i);
            $lines->units=$request->get('units'.$i);
            $lines->unit_price=$request->get('unit_price'.$i);
            $lines->total_line=$request->get('total_line'.$i);
            $lines->taxa=$request->get('taxa'.$i);
            $lines->price_cost=$request->get('price_cost'.$i);
            $lines->linea=$request->get('linea'.$i);
            $lines->save();
        }
        $factures->send=$request->get('send');
        $factures->save();
        
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
        $factures = Factures::where("factures.id",$id)->leftJoin('users', 'factures.customer_name', '=', 'users.id')->select('factures.*', 'users.name')->get();
        $factures_lines = Factures_lines::where("factures.id",$id)->leftJoin('factures', 'factures_lines.facturaID', '=', 'factures.number')->select('factures_lines.*', 'factures.number')->get();
        return view('factures_detail',compact('factures', 'id' , 'factures_lines'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*
        $factures = Factures::find($id);
        return view('factures_detail',compact('factures','id'));
        */
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
