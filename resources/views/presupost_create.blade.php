@extends('layouts.app')
@section('script')     
        
@endsection
@include("error")

    @section('content')
    @if (Route::has('login') && Auth::user()['rol']=='1')
  <body>
    <div class="container">
      <h2>Crear un Presupost</h2><br/>
      <form method="post" action="{{url('presupost')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="customer_name">customer_name:</label>
            <select name="customer_name">
                  @foreach($users as $user)
                  <option value="{{$user->id}}">{{$user->name}}</option>

                  @endforeach
                </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="customer_identity">customer_identity:</label>
              <input type="text" class="form-control" name="customer_identity">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable>customer_identity_type</lable>
                <select name="customer_identity_type">
                  <option value="NIF">NIF</option>
                  <option value="NIE">NIE</option>
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="serial">serial:</label>
              <input type="text" class="form-control" name="serial">
            </div>
          </div>  
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">number:</label>
              <input type="text" class="form-control" name="number">
            </div>
        </div>        
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="date">date:</label>
              <input type="text" class="form-control" name="date">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="total_net_amount">total_net_amount:</label>
              <input type="text" class="form-control" name="total_net_amount">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="total_amount">total_amount:</label>
              <input type="text" class="form-control" name="total_amount">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="included_vat">included_vat:</label>
              <input type="text" class="form-control" name="included_vat">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="observations">observations:</label>
              <input type="text" class="form-control" name="observations">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="lines">lines:</label>
              <input type="text" class="form-control" name="lines">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="send">send:</label>
              <input type="text" class="form-control" name="send">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Crear</button>
          </div>
        </div>
      </form>      
    </div>      
  </body>
@endif
@endsection