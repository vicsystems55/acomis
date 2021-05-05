@extends('layouts.app')

@section('content')

            <div style="min-height: 440px;" class="container ">
            
            <div class="card mt-3">
                <div class="card-body">
                <remedial-action-component cbo_email="{{Auth::user()->email}}"></remedial-action-component>
                </div>
            </div>
           
            </div>
@endsection