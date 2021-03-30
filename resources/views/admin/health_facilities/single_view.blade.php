@extends('layouts.app')



@section('content')

    <div style="min-height: 320px;" class="col-md-12 mx-auto">



        <div class="container pt-3">

            <div class="card col-md-12">
                <div class="card-body">
             
                           <p >
                           <h6>Name:</h6><h3  id="name" class=" display-4">{{$health_facility->Facility}}</h3>
                         
                           </p>

                           <p class="">
                                <input id="name2" class="form-control d-none" style="font-size: 23pt" type="text" value="{{$health_facility->Facility}}">
                           </p>

                         

                           <script>

                            function editMe(id) {
                            
                              document.getElementById(id).classList.toggle("d-none");
                              document.getElementById(id +"2").classList.toggle("d-none");
                            }

                           </script>

                          

                           <a onclick="editMe('name')" class="border-bottom">Edit</a>

                            <p>
                                <h6>CBO</h6>
                               <span id="cbo" class=""> {{$health_facility->CBO}}</span>
                            </p>

                            <p>
                                
                                <input id="cbo2" class="form-control d-none" type="text" value="{{$health_facility->CBO}}">
                            </p>

                            <a  onclick="editMe('cbo')" class="border-bottom">Edit</a>

                            


                            <p>
                                <h6>CBO Email:</h6>
                                <span id="cbo_email">{{$health_facility->CBO_Email}}</span>
                            </p>

                            <p>
                                
                                <input id="cbo_email2" class="form-control d-none" type="text" value="{{$health_facility->CBO_Email}}">
                            </p>

                            <script>

                            function editMe(id) {

                                document.getElementById(id).classList.toggle("d-none");
                                document.getElementById(id +"2").classList.toggle("d-none");

                            }

                            </script>

                            <a  onclick="editMe('cbo_email')" class="border-bottom">Edit</a>

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