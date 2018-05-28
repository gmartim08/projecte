<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=User::Paginate(4);
        return view('crud',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $users= new User();
        $users->name=$request->get('name');
        $users->email=$request->get('email');
        $users->password=$request->get('password');
        $users->rol=$request->get('rol');
        $users->save();
        
        return redirect('crud')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        /*perfil
        $user= User::find($id);
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        if($request['password']<>""){
            $user->password=Hash::make($request['password']);
        }        
        $user->rol=$request->get('rol');
        $user->save();
        return redirect('perfil');
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        return view('edit',compact('user','id'));
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
        //
        $user= User::find($id);
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        //if (Hash::check($request->get('password'), $user->password)) {
        //    $user->password='1234567';
        //}
        //$user->password=$request->get('password');
        if($request['password']<>""){
            $user->password=Hash::make($request['password']);
        }        
        $user->rol=$request->get('rol');
        $user->save();
        return redirect('crud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        $user->delete();
        return redirect('crud')->with('success','Information has been  deleted');
    }
  
}
