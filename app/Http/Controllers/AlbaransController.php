<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Albarans;
use Validator;
use App\User;
use Auth;

class AlbaransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$albarans;
        if(Auth::user()->rol == 1){
            $albarans=Albarans::leftJoin('users', 'albarans.customer_name', '=', 'users.id')
            ->select('albarans.*', 'users.name')->Paginate(4); // uneix la taula usuaris amb la de albarans relacionat amb un camp en comu(customername=idusuari) 
        }else{
            $albarans=Albarans::where('customer_name', '=', Auth::user()->id)->leftJoin('users', 'albarans.customer_name', '=', 'users.id')->select('albarans.*', 'users.name')
                ->Paginate(4);
        }    
        return view('albarans',compact('albarans'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::where('rol', '<>', 1)->get();
        return view('albarans_create',compact('users'));
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
            return redirect('albarans/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $albarans= new Albarans();
        $albarans->id=$request->get('id');
        $albarans->customer_name=$request->get('customer_name');
        $albarans->customer_identity=$request->get('customer_identity');
        $albarans->customer_identity_type=$request->get('customer_identity_type');
        $albarans->serial=$request->get('serial');
        $albarans->number=$request->get('number');
        $albarans->date=$request->get('date');
        $albarans->total_net_amount=$request->get('total_net_amount');
        $albarans->total_amount=$request->get('total_amount');
        $albarans->included_vat=$request->get('included_vat');
        $albarans->observations=$request->get('observations');
        $albarans->lines=$request->get('lines');
        $albarans->send=$request->get('send');
        $albarans->save();
        
        return redirect('albarans')->with('success', 'Information has been added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $albarans = Albarans::where("albarans.id",$id)->leftJoin('users', 'albarans.customer_name', '=', 'users.id')->select('albarans.*', 'users.name')->get();
        return view('albarans_detail',compact('albarans','id'));
    }
  
}