@extends('layouts.app')



@section('content')

<div style="min-height: 420px;" class="c h-100">


<div class="container pt-3">
        <div class="card">
            <div class="card-body pt-5">


                <spo-monthly-report-component spo_email="{{Auth::user()->email}}"></spo-monthly-report-component>

            
            </div>
        </div>
    </div>
</div>


@endsection