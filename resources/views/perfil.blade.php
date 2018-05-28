@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Benvingut, {{ Auth::user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                      <h2>Dades Personals</h2><br  />
                        <form method="post" action="{{action('PerfilController@update', Auth::user()->id)}}">
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                              <label for="email">Email</label>
                              <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}">
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                              <label for="number">Password:</label>
                              <input type="password" class="form-control" name="password">
                            </div>
                          </div>
                          <div class="row">
                          <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                              <input type="hidden" class="form-control" name="rol" value="{{Auth::user()->rol}}">
                            </div>
                          </div>                        
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-4" style="margin-top:60px">
                            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
                          </div>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
