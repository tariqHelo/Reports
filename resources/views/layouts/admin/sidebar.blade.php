
</div>
    <div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    @can('Master')
                            <li class="nav-item start ">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">الإدارة العامة والفروع والإقسام</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                @can('publicAdministration_access')
                                    <li class="nav-item start ">
                                          <a href="{{route('publicAdministration.index')}}" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">الإدارة العامة </span>
                                        </a>
                                    </li>
                                @endcan
                                @can('Branches_access')
                                       <li class="nav-item start ">
                                        <a href="{{route('branches.index')}}" class="nav-link ">
                                            <i class="icon-bulb"></i>
                                            <span class="title">الفروع</span>
                                            <span class="badge badge-success">1</span>
                                        </a>
                                    </li> 
                                @endcan
                                @can('Administration_access')
                                    <li class="nav-item start ">
                                        <a href="{{route('administration.index')}}" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">الإدارة </span>
                                        </a>
                                    </li> 
                                @endcan
                                @can('Sections_access')
                                    <li class="nav-item start ">
                                        <a href="{{route('sections.index')}}" class="nav-link ">
                                            <i class="icon-graph"></i>
                                            <span class="title">الإقسام</span>
                                            <span class="badge badge-danger">5</span>
                                        </a>
                                    </li>
                                @endcan
                                </ul>
                            </li>  
                    @endcan
                    @can('user_access')
                        <li class="nav-item ">
                           <a href="{{route('users.index')}}" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">المستخدمين</span>
                                <span class="arrow"></span>
                            </a>
                        </li> 
                    @endcan
                    @can('role_access')
                        <li class="nav-item ">
                                <a href="{{route('roles.index')}}" class="nav-link ">
                                    <i class="icon-bulb"></i>
                                    <span class="title">الإدوار</span>
                                </a>
                        </li>    
                    @endcan
                    @can('permission_access')
                            <li class="nav-item ">
                            <a href="{{route('permissions.index')}}" class="nav-link nav-toggle">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">الصلاحيات</span>
                                    <span class="arrow"></span>
                            </a>  
                        </li>   
                     @endcan
                     @can('Tasks_Manger')
                       <li class="nav-item  ">
                          <a href="#" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">حالة ونوع المهام</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                @can('Taskstatus_access')
                                <li class="nav-item  ">
                                        <a href="{{route('taskstatus.index')}}" class="nav-link ">
                                            <span class="title">حالة المهام </span>
                                        </a>
                                    </li>   
                                @endcan
                                @can('Taskstype_access')
                                    <li class="nav-item  ">
                                        <a href="{{route('taskstype.index')}}" class="nav-link ">
                                            <span class="title">نوع المهام</span>
                                            <span class="badge badge-danger">2</span>
                                        </a>
                                    </li>   
                                @endcan  
                            </ul> 
                            
                        </li>  
                     @endcan
                     @can('Tasks_access')
                          <li class="nav-item">
                          <a href="{{route('tasks.index')}}" class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
                                <span class="title">المهام</span>
                                <span class="arrow"></span>
                            </a>
                        </li>  
                    @endcan
                    @can('Reports')
                        <li class="nav-item  ">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="icon-bulb"></i>
                                <span class="title">التقارير</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="elements_steps.html" class="nav-link ">
                                        <span class="title">Steps</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="elements_lists.html" class="nav-link ">
                                        <span class="title">تقرير 1</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="elements_ribbons.html" class="nav-link ">
                                        <span class="title">تقرير 2</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="elements_overlay.html" class="nav-link ">
                                        <span class="title">تقرير 3</span>
                                    </a>
                                </li>
                            </ul>
                        </li>  
                    @endcan
                    @can('Settings')
                        <li class="nav-item  ">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="icon-briefcase"></i>
                                <span class="title">الإعدادت</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="table_static_basic.html" class="nav-link ">
                                        <span class="title">إعدادت عامة </span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="table_static_responsive.html" class="nav-link ">
                                        <span class="title">إستيراد وتصدير</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="table_bootstrap.html" class="nav-link ">
                                        <span class="title">إعدادات SMPT</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="table_bootstrap.html" class="nav-link ">
                                        <span class="title">إعدادات SMS</span>
                                    </a>
                                </li>
                            </ul>
                        </li>   
                    @endcan
                    @can('Help')
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="icon-wallet"></i>
                                <span class="title">صفحة المساعدة</span>
                                <span class="arrow"></span>
                            </a> 
                        </li>
                    @endcan
                        
                        {{-- <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Charts</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="charts_amcharts.html" class="nav-link ">
                                        <span class="title">amChart</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="charts_flotcharts.html" class="nav-link ">
                                        <span class="title">Flot Charts</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="charts_flowchart.html" class="nav-link ">
                                        <span class="title">Flow Charts</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="charts_google.html" class="nav-link ">
                                        <span class="title">Google Charts</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="charts_echarts.html" class="nav-link ">
                                        <span class="title">eCharts</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="charts_morris.html" class="nav-link ">
                                        <span class="title">Morris Charts</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">HighCharts</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item ">
                                            <a href="charts_highcharts.html" class="nav-link "> HighCharts </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="charts_highstock.html" class="nav-link "> HighStock </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="charts_highmaps.html" class="nav-link "> HighMaps </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-pointer"></i>
                                <span class="title">Maps</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="maps_google.html" class="nav-link ">
                                        <span class="title">Google Maps</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="maps_vector.html" class="nav-link ">
                                        <span class="title">Vector Maps</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">Page Layouts</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="layout_blank_page.html" class="nav-link ">
                                        <span class="title">Blank Page</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_ajax_page.html" class="nav-link ">
                                        <span class="title">Ajax Content Layout</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_language_bar.html" class="nav-link ">
                                        <span class="title">Header Language Bar</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_footer_fixed.html" class="nav-link ">
                                        <span class="title">Fixed Footer</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_boxed_page.html" class="nav-link ">
                                        <span class="title">Boxed Page</span>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                      
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>