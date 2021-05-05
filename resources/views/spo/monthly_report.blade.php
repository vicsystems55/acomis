@extends('layouts.app')

@section('content')

            <div style="min-height: 440px;" class="container ">
            
            <div class="card mt-3">
                <div class="card-body">
               
                <spo-monthly-report-component spo_email="{{Auth::user()->email}}"></spo-monthly-report-component>
                </div>
            </div>
           
            </div>
@endsection