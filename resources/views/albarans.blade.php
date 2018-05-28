@extends('layouts.app')
    <head>
      <style type="text/css">
        
      .full-height {
      height: 100vh;
      }

      .flex-center {
          align-items: center;
          display: flex;
          justify-content: center;
      }

      .position-ref {
          position: relative;
      }

      .top-right {
          position: absolute;
          right: 10px;
          top: 18px;
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
           @if (Route::has('login') && Auth::user()['rol']=='1')
          <div class="top-right links">
              
            <a href="{{ route('albarans.create') }}">Create</a>
              
          </div>
          @endif
    <div class="container">

    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>customer_name</th>
        <th>customer_identity</th>
        <th>number</th>
        <th>date</th>
        <th>total_net_amount</th>
        <th>total_amount</th>
        <th>observations</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($albarans as $albara)
      
      <tr>
        <td>{{$albara['id']}}</td>
        <td>{{$albara['name']}}</td>
        <td>{{$albara['customer_identity']}}</td>
        <td>{{$albara['number']}}</td>
        <td>{{$albara['date']}}</td>
        <td>{{$albara['total_net_amount']}}</td>
        <td>{{$albara['total_amount']}}</td>
        <td>{{$albara['observations']}}</td>
        <td><a href="{{action('AlbaransController@show', $albara['id'])}}" class="btn btn-warning">Details</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$albarans->links()}}
  </div>
  @else
      No tens permisos.
  @endif
  @endsection