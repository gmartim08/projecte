<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presupost;
use Validator;
use App\User;
use Auth;

class PresupostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$presupost;
        if(Auth::user()->rol == 1){
            $presupost=Presupost::leftJoin('users', 'presuposts.customer_name', '=', 'users.id')
            ->select('presuposts.*', 'users.name')->Paginate(4); // uneix la taula usuaris amb la de presupost relacionat amb un camp en comu(customername=idusuari) 
        }else{
            $presupost=Presupost::where('customer_name', '=', Auth::user()->id)->leftJoin('users', 'presuposts.customer_name', '=', 'users.id')->select('presuposts.*', 'users.name')
                ->Paginate(4);
        }    
        return view('presupost',compact('presupost'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::where('rol', '<>', 1)->get();
        return view('presupost_create',compact('users'));
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
            return redirect('presupost/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $presupost= new Presupost();
        $presupost->id=$request->get('id');
        $presupost->customer_name=$request->get('customer_name');
        $presupost->customer_identity=$request->get('customer_identity');
        $presupost->customer_identity_type=$request->get('customer_identity_type');
        $presupost->serial=$request->get('serial');
        $presupost->number=$request->get('number');
        $presupost->date=$request->get('date');
        $presupost->total_net_amount=$request->get('total_net_amount');
        $presupost->total_amount=$request->get('total_amount');
        $presupost->included_vat=$request->get('included_vat');
        $presupost->observations=$request->get('observations');
        $presupost->lines=$request->get('lines');
        $presupost->send=$request->get('send');
        $presupost->save();
        
        return redirect('presupost')->with('success', 'Information has been added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $presupost = Presupost::where("presuposts.id",$id)->leftJoin('users', 'presuposts.customer_name', '=', 'users.id')->select('presuposts.*', 'users.name')->get();
        return view('presupost_detail',compact('presupost','id'));
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
        $presupost = Presupost::find($id);
        return view('presupost_detail',compact('presupost','id'));
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