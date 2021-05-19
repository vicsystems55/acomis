@extends('layouts.app')

@section('content')

<style>

    .widget:hover{
        cursor: pointer;
    }

</style>

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
       
        <div class="col-md-3 p-3">
            <div class="widget widget-table-one">
                <div class="widget-heading">
                    <h5 class="">LOCATION</h5>
                </div>

                <div class="widget-content">
          

                    <div class="transactions-list">
                        <div class="t-itm">
                            <div class="t-company-name">
                 
                                <div class="t-name text-center">
                                <h3>{{$active_states}}</h3>
                                    <p class=" h6">ACTIVE STATES</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    
                    <div class="transactions-list">
                        <div class="t-itm">
                            <div class="t-company-name">
                 
                                <div class="t-name text-center">
                                <h3>{{$active_lgas}}</h3>
                                    <p class=" h6">ACTIVE LGAS</p>
                                </div>
                            </div>

                        </div>
                    </div>




                </div>
            </div>
        </div>
        
        <div class="col-md-3 p-3">
            <div class="widget widget-table-one">
                <div class="widget-heading">
                    <h5 class="">FACILITIES</h5>
                </div>

                <div class="widget-content">
          

                    <div class="transactions-list">
                        <div class="t-itm">
                            <div class="t-company-name">
                 
                                <div class="t-name text-center">
                                <h3>{{$active_wards}}</h3>
                                    <p class=" h6">ACTIVE WARDS</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    
                    <div class="transactions-list">
                        <div class="t-itm">
                            <div class="t-company-name">
                 
                                <div class="t-name text-center">
                                <h3>{{$active_health_facilities}}</h3>
                                    <p class=" h6">ACTIVE HEALTH FACILITIES</p>
                                </div>
                            </div>

                        </div>
                    </div>




                </div>
            </div>
        </div>

        <div class="col-md-3 p-3">
            <div class="widget widget-table-one">
                <div class="widget-heading">
                    <h5 class="">DEPARTMENTS</h5>
                </div>

                <div class="widget-content">
          

                    <div class="transactions-list">
                        <div class="t-itm">
                            <div class="t-company-name">
                 
                                <div class="t-name text-center">
                                <h3>{{$active_spos}}</h3>
                                    <p class=" h6">ACTIVE SPO</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    
                    <div class="transactions-list">
                        <div class="t-itm">
                            <div class="t-company-name">
                 
                                <div class="t-name text-center">
                                <h3>{{$active_cbos}}</h3>
                                    <p class=" h6">ACTIVE CBOS</p>
                                </div>
                            </div>

                        </div>
                    </div>




                </div>
            </div>
        </div>
        
        <div class="col-md-3 p-3">
            <div class="widget widget-table-one">
                <div class="widget-heading">
                    <h5 class="">QUESTIONAIRES</h5>
                </div>

                <div class="widget-content">
          

                    <div class="transactions-list">
                        <div class="t-itm">
                            <div class="t-company-name">
                 
                                <div class="t-name text-center">
                                <h3>{{$questionaires}}</h3>
                                    <p class=" h6">CLIENT EXITS</p>
                                </div>
                            </div>

                        </div>
                    </div>

    




                </div>
            </div>
        </div>

        <div class="col-md-3 p-3">
            <div class="widget widget-table-one">
                <div class="widget-heading">
                    <h5 class="">REPORTS</h5>
                </div>

                <div class="widget-content">
          

                    <div class="transactions-list">
                        <div class="t-itm">
                            <div class="t-company-name">
                 
                                <div class="t-name text-center">
                                <h3>{{$tested_malaria}}</h3>
                                    <p class=" h6">TEST FOR MALARIA</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    
                    <div class="transactions-list">
                        <div class="t-itm">
                            <div class="t-company-name">
                 
                                <div class="t-name text-center">
                                <h3>0</h3>
                                    <p class=" h6">TESTED POSITIVE</p>
                                </div>
                            </div>

                        </div>
                    </div>




                </div>
            </div>
        </div>
        
        <div class="col-md-3 p-3">
            <div class="widget widget-table-one">
                <div class="widget-heading">
                    <h5 class="">REPORTS</h5>
                </div>

                <div class="widget-content">
          

                    <div class="transactions-list">
                        <div class="t-itm">
                            <div class="t-company-name">
                 
                                <div class="t-name text-center">
                                <h3>{{$llin_receipients}}</h3>
                                    <p class=" h6">LLIN RECIPIENTS</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    
                    <div class="transactions-list">
                        <div class="t-itm">
                            <div class="t-company-name">
                 
                                <div class="t-name text-center">
                                <h3>{{$act_receipients}}</h3>
                                    <p class=" h6">ACT RECIPIENTS</p>
                                </div>
                            </div>

                        </div>
                    </div>




                </div>
            </div>
        </div>

        <div class="col-md-3 p-3">
            <div class="widget widget-table-one">
                <div class="widget-heading">
                    <h5 class="">REPORTS</h5>
                </div>

                <div class="widget-content">
          

                    <div class="transactions-list">
                        <div class="t-itm">
                            <div class="t-company-name">
                 
                                <div class="t-name text-center">
                                <h3>{{$ipt_receipients}}</h3>
                                    <p class=" h6">IPT RECIPIENTS</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    
                    <div class="transactions-list">
                        <div class="t-itm">
                            <div class="t-company-name">
                 
                                <div class="t-name text-center">
                                <h3>{{$sp_receipients}}</h3>
                                    <p class=" h6">SP RECIPIENTS</p>
                                </div>
                            </div>

                        </div>
                    </div>




                </div>
            </div>
        </div>
        
        <div class="col-md-3 p-3">
            <div class="widget widget-table-one">
                <div class="widget-heading">
                    <h5 class="">REPORT</h5>
                </div>

                <div class="widget-content">
          

                    <div class="transactions-list">
                        <div class="t-itm">
                            <div class="t-company-name">
                 
                                <div class="t-name text-center">
                                <h3>{{$pregnant_women}}</h3>
                                    <p class=" h6">PREGNANT WOMEN TESTED</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    



                </div>
            </div>
        </div>
 


     

      
    </div>

    <div class="row layout-top-spacing">

        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                <div class="widget-heading">
                    <h5 class="">Impact</h5>
                    <ul class="tabs tab-pills">
                        <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">Monthlykk</a></li>
                    </ul>
                </div>

                <div class="widget-content">
                    <div class="tabs tab-content">
                        <div id="content_1" class="tabcontent"> 
                            <div id="revenueMonthly"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            
            <div class="widget widget-activity-four">

                <div class="widget-heading">
                    <h5 class="">Recent Activities</h5>
                </div>

                <div class="widget-content">

                    <div class="mt-container mx-auto">
                        <div class="timeline-line">

                            @forelse($notifications as $notify)

                            <div class="item-timeline timeline-primary">
                                <div class="t-dot" data-original-title="" title="">
                                </div>
                                <div class="t-text">
                                    <p><span>{{$notify->title}}</span>
                                    <br>
                                        {{$notify->body}}
                                    </p>
                                    <span class="badge badge-danger">Pending</span>
                                    <p class="t-time">{{$notify->created_at->diffForHumans()}}</p>
                                </div>
                            </div>

                            @empty

                            <div class="item-timeline timeline-primary">
                                <div class="t-dot" data-original-title="" title="">
                                </div>
                                <div class="t-text">
                                    <p><span>No notifications yet..</span></p>
                                    <span class="badge badge-danger"></span>
                                  
                                </div>
                            </div>



                            @endforelse
                            



                        </div>                                    
                    </div>

                    <div class="tm-action-btn">
                        <button class="btn">View All <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-two">
                <div class="widget-heading">
                    <h5 class="">CBO Reports</h5>
                </div>
                <div class="widget-content">
                    <div id="chart-2" class=""></div>
                </div>
            </div>
        </div>

       


 

    </div>

</div>
    
@endsection  