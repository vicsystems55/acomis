@extends('layouts.app')

@section('content')

<div class="layout-px-spacing">

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

 
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            
            <div class="widget widget-account-invoice-one">

                <div class="widget-heading">
                    <h5 class="">CBOs</h5>
                </div>

                <div class="widget-content">
                    <div class="invoice-box">
                        
                        <div class="acc-total-info">
                            <h5>Total CBOs</h5>
                            <h3 class="acc-amount">470</h3>
                        </div>

                       

                        <div class="inv-action">
                            <a href="" class="btn btn-dark">Add More</a>
                            <a href="" class="btn btn-danger">View Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            
            <div class="widget widget-account-invoice-one">

                <div class="widget-heading">
                    <h5 class="">Health Facilities</h5>
                </div>

                <div class="widget-content">
                    <div class="invoice-box">
                        
                        <div class="acc-total-info">
                            <h5>Total H.F</h5>
                            <p class="acc-amount">{{$health_facilities->count()?? 'No records yet..'}}</p>
                        </div>

                       

                        <div class="inv-action">
                            <a href="" class="btn btn-dark">Add More</a>
                            <a href="" class="btn btn-danger">Transfer</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            
            <div class="widget widget-account-invoice-one">

                <div class="widget-heading">
                    <h5 class="">SPO</h5>
                </div>

                <div class="widget-content">
                    <div class="invoice-box">
                        
                        <div class="acc-total-info">
                            <h5>Total SPOs</h5>
                            <p class="acc-amount">70</p>
                        </div>

                       

                        <div class="inv-action">
                            <a href="" class="btn btn-dark">Summary</a>
                            <a href="" class="btn btn-danger">Transfer</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            
            <div class="widget widget-account-invoice-one">

                <div class="widget-heading">
                    <h5 class="">States</h5>
                </div>

                <div class="widget-content">
                    <div class="invoice-box">
                        
                        <div class="acc-total-info">
                            <h5>Active States</h5>
                            <p class="acc-amount">70</p>
                        </div>

                       

                        <div class="inv-action">
                            <a href="" class="btn btn-dark">Summary</a>
                            <a href="" class="btn btn-danger">Transfer</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xl-5 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-table-one">
                <div class="widget-heading">
                    <h5 class="">Pending Reports</h5>
                </div>

                <div class="widget-content">
                    <div class="transactions-list">
                        <div class="t-item">
                            <div class="t-company-name">
                                <div class="t-icon">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                    </div>
                                </div>
                                <div class="t-name">
                                    <h4>Electricity Bill</h4>
                                    <p class="meta-date">4 Aug 1:00PM</p>
                                </div>

                            </div>
                            <div class="t-rate rate-dec">
                                <p><span>-$16.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                            </div>
                        </div>
                    </div>

                    <div class="transactions-list">
                        <div class="t-item">
                            <div class="t-company-name">
                                <div class="t-icon">
                                    <div class="avatar avatar-xl">
                                        <span class="avatar-title rounded-circle">SP</span>
                                    </div>
                                </div>
                                <div class="t-name">
                                    <h4>Shaun Park</h4>
                                    <p class="meta-date">4 Aug 1:00PM</p>
                                </div>
                            </div>
                            <div class="t-rate rate-inc">
                                <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                            </div>
                        </div>
                    </div>

                    <div class="transactions-list">
                        <div class="t-item">
                            <div class="t-company-name">
                                <div class="t-icon">
                                    <div class="avatar avatar-xl">
                                        <span class="avatar-title rounded-circle">AD</span>
                                    </div>
                                </div>
                                <div class="t-name">
                                    <h4>Amy Diaz</h4>
                                    <p class="meta-date">4 Aug 1:00PM</p>
                                </div>

                            </div>
                            <div class="t-rate rate-inc">
                                <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                            </div>
                        </div>
                    </div>

                    <div class="transactions-list">
                        <div class="t-item">
                            <div class="t-company-name">
                                <div class="t-icon">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                    </div>
                                </div>
                                <div class="t-name">
                                    <h4>Netflix</h4>
                                    <p class="meta-date">4 Aug 1:00PM</p>
                                </div>

                            </div>
                            <div class="t-rate rate-dec">
                                <p><span>-$32.00</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                            </div>
                        </div>
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