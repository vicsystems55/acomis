@extends('layouts.app')



@section('content')

    <div style="min-height: 320px;" class="col-md-12 mx-auto">



        <div class="container pt-3">

            <div class="card col-md-12">
                <div class="card-body">
                            <h6>Name:</h6><h3 class="display-4">{{$health_facility->Facility}}</h3>

                            <p>
                                <h6>CBO</h6>
                                {{$health_facility->CBO}}
                            </p>
                            <p>
                                <h6>CBO Email:</h6>
                                {{$health_facility->CBO_Email}}
                            </p>

                            <p>
                                <h6>SPO</h6>
                                {{$health_facility->SPO}}
                            </p>
                            <p>
                                <h6>CBO Email:</h6>
                                {{$health_facility->SPO_Email}}
                            </p>

                </div>
            </div>


            <div class="card mt-2">

                    <div class="card-body">
                        <example-component></example-component>

                    </div>

                 

            </div>

            
        </div>


       

      



    </div>


@endsection