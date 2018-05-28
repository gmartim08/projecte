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
        <a href="{{ route('factures.index') }}">Back</a>              
      </div><br/>
    <div class="container">

    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    
    <table class="table table-striped">
      @foreach($factures as $factures)
      <thead>      
      <tr>
        <th colspan="2">Dades del Client</th>
        <th colspan="2">Dades de la Factura</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>customer_name</th>
        <td>{{$factures['name']}}</td>
        <th>serial</th>
        <td>{{$factures['serial']}}</td>
      </tr>
      <tr>
        <th>customer_identity</th>
        <td>{{$factures['customer_identity']}}</td>
        <th>number</th>
        <td>{{$factures['number']}}</td>
      </tr>      
      <tr>
        <th>customer_identity_type</th>
        <td>{{$factures['customer_identity_type']}}</td>
        <th>date</th>
        <td>{{$factures['date']}}</td>
      </tr>
      <tr>
        <th>observations</th>
        <td colspan="3">{{$factures['observations']}}</td>
      </tr>
    </tbody>      
  </table><br/>
  <table class="table table-striped">
        <thead>      
          <tr>
            <th colspan="5">Productes</th>
          </tr>
        </thead>        
        <tbody>                 
          <tr>
            <th>facturaID</th>
            <th>description</th>
            <th>units</th>
            <th>unit_price</th>
            <th>total_line</th>
          </tr>
          @foreach($factures_lines as $lines) 
          <tr>
            <td>{{$lines['facturaID']}}</td>
            <td>{{$lines['description']}}</td>
            <td>{{$lines['units']}}</td>
            <td>{{$lines['unit_price']}}</td>
            <td>{{$lines['total_line']}}</td>
          </tr>
          @endforeach
          @foreach($factures_lines as $lines)         
          <tr>
            <th colspan="3"></th>
            <th>taxa</th>
            <td>{{$lines['taxa']}}</td>
          </tr>
          <tr>
            <th colspan="3"></th>
            <th>price_cost</th>
            <td>{{$lines['price_cost']}}</td>
          </tr>
          <tr>
            <th colspan="3"></th>
            <th>linea</th>
            <td>{{$lines['linea']}}</td>
          </tr>  
          @endforeach        
        </tbody>        
  </table>
  <table class="table table-striped">
    
    <thead>      
      <tr>
        <th>total_net_amount</th>
        <th>total_amount</th>
        <th>included_vat</th>
        <th>lines</th>
        <th>send</th>
      </tr>
    </thead> 

    <tbody>
      
      <tr>
        <td>{{$factures['total_net_amount']}}</td>
        <td>{{$factures['total_amount']}}</td>
        <td>{{$factures['included_vat']}}</td>
        <td>{{$factures['lines']}}</td>
        <td>{{$factures['send']}}</td>     
      </tr>
    </tbody>
      @endforeach
  </table>

  </div>
  @else
      No tens permisos.
  @endif
  @endsection