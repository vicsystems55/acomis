@extends('layouts.app')

@section('content')

    <div class="layout-px-spacing">

    <h3 class="display-4 p-5">Hi, {{Auth::user()->name}}</h3>

        <div class=" layout-top-spacing">

            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 layout-spacing mx-auto">
                    <div class="widget widget-one">
                        <div class="widget-heading">
                            <h6 class="">Statistics</h6>
                        </div>
                        <div class="w-chart">
                            <div class="w-chart-section">
                                <div class="w-detail">
                                    <p class="w-title">Health Facilities</p>
                                    <p class="w-stats">423,964</p>
                                </div>
                                <div class="w-chart-render-one">
                                    <div id="total-users"></div>
                                </div>
                            </div>

                            <div class="w-chart-section">
                                <div class="w-detail">
                                    <p class="w-title">CBOs</p>
                                    <p class="w-stats">7,929</p>
                                </div>
                                <div class="w-chart-render-one">
                                    <div id="paid-visits"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 layout-spacing mx-auto">
                    <div class="widget widget-card-four mb-2">
                        <div class="widget-content">
                            <div class="w-content">
                                <div class="w-info">
                                    <h6 class="value">41</h6>
                                    <p class="">Reports</p>
                                </div>
                                <div class="">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>

                    <div class="widget widget-card-four">
                        <div class="widget-content">
                            <div class="w-content">
                                <div class="w-info">
                                    <h6 class="value">141</h6>
                                    <p class="">Client Exit</p>
                                </div>
                                <div class="">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 layout-spacing mx-auto">
                    <div class="widget widget-card-four mb-2">
                        <div class="widget-content">
                            <div class="w-content">
                                <div class="w-info">
                                    <h6 class="value">41</h6>
                                    <p class="">Remedial Feedback</p>
                                </div>
                                <div class="">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>

                    <div class="widget widget-card-four">
                        <div class="widget-content">
                            <div class="w-content">
                                <div class="w-info">
                                    <h6 class="value">141</h6>
                                    <p class="">CAT</p>
                                </div>
                                <div class="">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
   
            </div>

            <div class="row">

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget widget-five">
                        <div class="widget-content">

                            <div class="header">
                                <div class="header-body">
                                    <h6>Pending Tasks</h6>
                                    <p class="meta-date">Nov 2019</p>
                                </div>
                                <div class="task-action">
                                
                                </div>
                            </div>

                            <div class="w-content">
                                <div class="">                                            
                                    <p class="task-left">0</p>
                                    <p class="task-completed"><span>0 Done</span></p>
                                    <p class="task-hight-priority"><span>0 Task</span> with High priotity</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-activity-three">

                        <div class="widget-heading">
                            <h5 class="">Notifications</h5>
                        </div>

                        <div class="widget-content">

                            <div class="mt-container mx-auto">
                                <div class="timeline-line">
                                    
                                    <div class="item-timeline timeline-new">
                                        <div class="t-dot">
                                            <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                                        </div>
                                        <div class="t-content">
                                            <div class="t-uppercontent">
                                                <h5>Report Submitted</h5>
                                                <span class="">27 Feb, 2020</span>
                                            </div>
                                            <p>Just submitted report</p>
                                            <div class="tags">
                                       
                                          
                                            </div>
                                        </div>
                                    </div>

                                     
                                </div>                                    
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>



 









    

        </div>

    </div>
    
@endsection