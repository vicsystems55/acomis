@if ($page_name != 'coming_soon' && $page_name != 'contact_us' && $page_name != 'error404' && $page_name != 'error500' && $page_name != 'error503' && $page_name != 'faq' && $page_name != 'helpdesk' && $page_name != 'maintenence' && $page_name != 'privacy' && $page_name != 'auth_boxed' && $page_name != 'auth_default')

    <!--  BEGIN TOPBAR  -->
    <div class="topbar-nav header navbar" role="banner">
        <nav id="topbar">
            <ul class="navbar-nav theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="index.html">
                        <img src="{{asset('public/storage/img/logo2.sv')}}" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a href="index.html" class="nav-link"> ACOMIS </a>
                </li>
            </ul>

            <ul class="list-unstyled menu-categories" id="topAccordion">
                
                @if ($page_name != 'alt_menu' && $page_name != 'blank_page' && $page_name != 'boxed' && $page_name != 'breadcrumb' )

                <li class="menu single-menu  ">
                    <a href="hboard" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span>Dashboard</span>
                        </div>
                    </a>
                    
                </li>

                 <li class="menu single-menu  ">
                    <a href="{{route('health_facilities')}}"  aria-expanded="false" class="dropdown-toggle autodroprown">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span>Health Facilities</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    
                </li>

                <li class="menu single-menu  ">
                    <a href="#departments" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span>Departments</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>

                    <ul class="collapse submenu list-unstyled" id="departments" data-parent="#topAccordion">
                        <li class="{{ ($page_name === 'analytics') ? 'active' : '' }}">
                            <a href="{{route('cbos')}}"> CBO </a>
                        </li>
                        <li class="{{ ($page_name === 'sales') ? 'active' : '' }}">
                            <a href="{{route('spos')}}"> SPO </a>
                        </li>
                        <li class="{{ ($page_name === 'sales') ? 'active' : '' }}">
                            <a href="{{route('mes')}}"> Monitoring and Evaluation </a>
                        </li>
                       
                    </ul>

                    
                </li>


                <li class="menu single-menu  ">
                    <a href="#reports" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span>Reports</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>

                    <ul class="collapse submenu list-unstyled" id="reports" data-parent="#topAccordion">
                        <li class="{{ ($page_name === 'analytics') ? 'active' : '' }}">
                            <a href="{{route('cbo_reports')}}"> CBO Minutes </a>
                        </li>
                        <li class="{{ ($page_name === 'sales') ? 'active' : '' }}">
                            <a href="{{route('spo_reports')}}"> SPO Monthly Minutes </a>
                        </li>
                        <li class="{{ ($page_name === 'sales') ? 'active' : '' }}">
                            <a href="{{route('remedial_feedbacks')}}"> Remedial Feedback </a>
                        </li>
                        <li class="{{ ($page_name === 'sales') ? 'active' : '' }}">
                            <a href="{{route('state_level_feedbacks')}}">State Level Advocacy </a>
                        </li>
                        <li class="{{ ($page_name === 'sales') ? 'active' : '' }}">
                            <a href="{{route('exit_feedback_reports')}}"> Client Exit </a>
                        </li>
                    </ul>

                    
                    
                </li>

                <!-- <li class="menu single-menu  ">
                    <a href="hboard" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span>Staff Management</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    
                </li> -->

 


                <li class="menu single-menu  ">
                    <a href="hboard" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span>Notifications</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    
                </li>

                <li class="menu single-menu  ">
                    <a href="#settings" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span>Settings</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>

                    <ul class="collapse submenu list-unstyled" id="settings" data-parent="#topAccordion">
                        <li class="{{ ($page_name === 'analytics') ? 'active' : '' }}">
                            <a href="/analytics"> States and LGA Settings </a>
                        </li>
                        <li class="{{ ($page_name === 'sales') ? 'active' : '' }}">
                            <a href="/sales"> Account Profile </a>
                        </li>
                    </ul>
                    
                </li>


                <!-- <li class="menu single-menu">
                    <a href="#menu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span>Menu 1</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="menu1" data-parent="#topAccordion">
                        <li>
                            <a href="javascript:void(0);"> Submenu 1 </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"> Submenu 2 </a>
                        </li>
                    </ul>
                </li>


             

                <li class="menu single-menu active">
                    <a href="#starter-kit" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                            <span>Starter Kit</span>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="starter-kit" data-parent="#topAccordion">
                        <li class="{{ ($category_name === 'blank_page') ? 'active' : '' }}">
                            <a href="/starter-kit/blank_page"> Blank Page </a>
                        </li>
                        <li class="{{ ($category_name === 'breadcrumbs') ? 'active' : '' }}">
                            <a href="/starter-kit/breadcrumbs"> Breadcrumb </a>
                        </li>
                    </ul>
                </li> -->

               

                @else

                <li class="menu single-menu">
                    <a href="#menu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle autodroprown">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span>Menu 1</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="menu1" data-parent="#topAccordion">
                        <li>
                            <a href="javascript:void(0);"> Submenu 1 </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"> Submenu 2 </a>
                        </li>
                    </ul>
                </li>


             

                <li class="menu single-menu active">
                    <a href="#starter-kit" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                            <span>Starter Kit</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="starter-kit" data-parent="#topAccordion">
                        <li class="{{ ($category_name === 'blank_page') ? 'active' : '' }}">
                            <a href="/starter-kit/blank_page"> Blank Page </a>
                        </li>
                        <li class="{{ ($category_name === 'breadcrumbs') ? 'active' : '' }}">
                            <a href="/starter-kit/breadcrumbs"> Breadcrumb </a>
                        </li>
                    </ul>
                </li>
                
                @endif
            </ul>
        </nav>
    </div>
    <!--  END TOPBAR  -->

@endif