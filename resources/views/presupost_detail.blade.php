@extends('layouts.app')
    <head>
      <style type="text/css">
        
      .full-height {
      height: 100vh;
      }

      h2{
          position: absolute;
          right: 700px;
          top: 70px;
      }

      .top-right {
          position: absolute;
          right: 10px;
          top: 80px;
      }

      .content {
          text-align: center;
      }

      .title {
          font-size: 84px;
      }

      .links > a {
          color: #636b6f;
          padding: 0 25px;
          font-size: 12px;
          font-weight: 600;
          letter-spacing: .1rem;
          text-decoration: none;
          text-transform: uppercase;
      }

      .m-b-md {
          margin-bottom: 30px;
      }

      </style>
    </head>
    @section('content')
    @if (Route::has('login'))
    <div class="flex-center position-ref full-height">
      <div class="top-right links">              
        <a href="{{ route('presupost.index') }}">Back</a>              
      </div><br/>
    <div class="container">

    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    
    <table class="table table-striped">
      @foreach($presupost as $presupostos)
      <thead>      
      <tr>
        <th colspan="2">Dades del Client</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>customer_name</th>
        <td>{{$presupostos['name']}}</td>
      </tr>
      <tr>
        <th>customer_identity</th>
        <td>{{$presupostos['customer_identity']}}</td>
      </tr>
      <tr>
        <th>customer_identity_type</th>
        <td>{{$presupostos['customer_identity_type']}}</td>
      </tr>
    </tbody>      
  </table><br/><br/><br/>  
  <table class="table table-striped">
      <thead>      
      <tr>
        <th colspan="2">Factura</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>serial</th>
        <td>{{$presupostos['serial']}}</td>
      </tr>
      <tr>
        <th>number</th>
        <td>{{$presupostos['number']}}</td>
      </tr>
      <tr>
        <th>date</th>
        <td>{{$presupostos['date']}}</td>
      </tr>
      <tr>
        <th>total_net_amount</th>
        <td>{{$presupostos['total_net_amount']}}</td>
      </tr>
      <tr>
        <th>total_amount</th>
        <td>{{$presupostos['total_amount']}}</td>
      </tr>
      <tr>
        <th>included_vat</th>
        <td>{{$presupostos['included_vat']}}</td>
      </tr>
      <tr>
        <th>observations</th>
        <td>{{$presupostos['observations']}}</td>
      </tr>
      <tr>
        <th>lines</th>
        <td>{{$presupostos['lines']}}</td>
      </tr>
      <tr>
        <th>send</th>
        <td>{{$presupostos['send']}}</td>     
      </tr>
    </tbody>
      @endforeach
  </table>

  </div>
  @else
      No tens permisos.
  @endif
  @endsection