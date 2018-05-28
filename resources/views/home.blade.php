@extends('layouts.app')
@section('script')
@endsection
@section('css')
    <link href="{{ asset('css/button.css') }}" rel="stylesheet">
       
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Benvingut, {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                    <img src="{{ asset('img/factures.png') }}" alt="factures" style="width:70%">
                    <a href="{{ URL::route('factures.index') }}" class="btn btn-default"> Factures </a>
                    </div>
                    <div class="container">
                    <img src="{{ asset('img/presupost.png') }}" alt="factures" style="width:50%">
                    <a href="{{ URL::route('presupost.index') }}" class="btn btn-default"> Presupostos </a>
                    </div>
                    <div class="container">
                    <img src="{{ asset('img/albaranes.png') }}" alt="factures" style="width:70%">
                    <a href="{{ URL::route('albarans.index') }}" class="btn btn-default"> Albarans </a>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
