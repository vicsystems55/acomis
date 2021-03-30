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

                         


                            <button id="name_save" onclick="save(this.id)"  class="btn btn-sm btn-primary d-none">Save</button>         

                           <a  onclick="editMe('name')" class="border-bottom">Edit</a>

                           
          


                            <p>
                                <h6>CBO</h6>
                               <span id="cbo" class=""> {{$health_facility->CBO}}</span>
                            </p>

                            <p>
                                
                                <input id="cbo2" class="form-control d-none" type="text" value="{{$health_facility->CBO}}">
                            </p>
                            <button id="cbo_save" onclick="save(this.id)"  class="btn btn-sm btn-primary d-none">Save</button>   
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

                                var field = document.getElementById(id).classList.toggle("d-none");

                                document.getElementById(id +"2").classList.toggle("d-none");

                                document.getElementById(id +"_save").classList.toggle("d-none");

                                document.getElementById(id +"_edit").classList.toggle("d-none");

                        

                            }

                            function save(i) {



                                const health_facility = $('#health_faciity').val();

                                id  = i.replace('_save', '')
                              
                                var field = document.getElementById(id +"2").value;

                                $.ajax({
                                  type: "POST",
                                  url: '/update_health_facility',
                                  data: {
                                    health_facility: health_facility,
                                   
                                },
                                  success: function (response) {
                                    console.log(response)
                                },
                                  dataType: 'json'
                                });


                                alert(field);
                            }

                            </script>
                            <button id="cbo_email_save" onclick="save(this.id)"  class="btn btn-sm btn-primary d-none">Save</button>  
                            <a  onclick="editMe('cbo_email')" class="border-bottom">Edit</a>

                            <p>
                                <h6>SPO</h6>
                                <span id="spo" class="">{{$health_facility->SPO}}</span>
                            </p>
                            <p>
                                
                                <input id="spo2" class="form-control d-none" type="text" value="{{$health_facility->SPO}}">
                            </p>

                            <button id="spo_save" onclick="save(this.id)"  class="btn btn-sm btn-primary d-none">Save</button>  
                            <a  onclick="editMe('spo')" class="border-bottom">Edit</a>


                            <p>
                                <h6>SPO Email:</h6>
                                <span id="spo_email" class="">{{$health_facility->SPO_Email}}</span>
                            </p>
                            <p>
                                
                                <input id="spo_email2" class="form-control d-none" type="text" value="{{$health_facility->SPO_Email}}">
                            </p>

                            <button id="spo_email_save" onclick="save(this.id)"  class="btn btn-sm btn-primary d-none">Save</button>  
                            <a  onclick="editMe('spo_email')" class="border-bottom">Edit</a>

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