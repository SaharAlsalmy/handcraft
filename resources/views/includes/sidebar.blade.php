<!-- Main sidebar -->

<style>
    .sidebar-dark .nav-sidebar>.nav-item-open>.nav-link:not(.disabled), .sidebar-dark .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light .card[class*=bg-]:not(.bg-light):not(.bg-white):not(.bg-transparent) .nav-sidebar>.nav-item-open>.nav-link:not(.disabled), .sidebar-light .card[class*=bg-]:not(.bg-light):not(.bg-white):not(.bg-transparent) .nav-sidebar>.nav-item>.nav-link.active {
        background-color: #ffffff;
        color: #858aca;
    }
    .menu-link:active{
        background-color: #ffffff;
    }
    .font-size-lg  nav-link  nav-link active {
        transition: color 0.2s ease, background-color 0.2s ease;
        background-color: rgb(248, 93, 93);
        color: #7a2c2c;
    }
    .aside-dark .menu .menu-item .menu-link.active .menu-title {
        color: #c90000;
    }
    .aside-dark .menu .menu-item .menu-link .menu-title {
        color: #bf0000;
    }
</style>
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md" style="background-color: #858aca">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-right8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content" style="background-color: #858aca">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img src="{{asset("global_assets/images/placeholders/placeholder.jpg")}}" width="38" height="38" class="rounded-circle" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold" style="color: #ffffff">{{ Auth::user()->name }}</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header"><div class="text-uppercase font-size-lg  line-height-xs">@lang('app.dashboard')</div> <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="{{route('home')}}" class=" font-size-lg  nav-link  {{request()->routeIs('home')?'nav-link active' :'' }}"  >
                        <i class="icon-home4"></i>
                        <span>@lang('app.dashboard')</span>
                    </a>
                </li>
                @can('control_notifications')
                <li class="nav-item" >
                    <a href="{{route('notifications.index')}}" class="font-size-lg  nav-link {{request()->routeIs('notifications.*')?'nav-link active' :'' }}"><i class="icon-bell2"></i><span>@lang('app.notifications')</span></a>
                </li>
                @endcan

                <li class="nav-item" >
                    <a href="{{route('vehicle.index')}}" class="font-size-lg  nav-link {{request()->routeIs('vehicle.*')?'nav-link active' :'' }}"><i class="icon-car2"></i><span>@lang('app.vehicle')</span></a>
                </li>
                <li class="nav-item" >
                    <a href="{{route('vehicleType.index')}}" class="font-size-lg  nav-link {{request()->routeIs('vehicleType.*')?'nav-link active' :'' }}"><i class="icon-car"></i><span>@lang('app.carType')</span></a>
                </li>
                <li class="nav-item" >
                    <a href="{{route('brands.index')}}" class="font-size-lg  nav-link {{request()->routeIs('brands.*')?'nav-link active' :'' }}"><i class="icon-starburst"></i><span>@lang('app.brand_vehicle')</span></a>
                </li>

                <li class="nav-item" >
                    <a href="{{route('reservations.index')}}" class="font-size-lg  nav-link {{request()->routeIs('reservations.*')?'nav-link active' :'' }}"><i class="icon-clapboard"></i><span>@lang('app.reservations')</span></a>
                </li>



                <li class="nav-item">
                    <a href="{{route('users.index')}}" class=" font-size-lg nav-link {{request()->routeIs('users.*')?'nav-link active' :'' }}"><i class="icon-user"></i> <span>@lang('app.users')</span></a>
                </li>

                <li class="nav-item">
                    <a href="{{route('customers.index')}}" class=" font-size-lg nav-link {{request()->routeIs('customers.*')?'nav-link active' :'' }}"><i class="icon-user"></i> <span>@lang('app.customers')</span></a>
                </li>


                <li class="nav-item">
                    <a href="{{route('roles.index')}}" class="font-size-lg  nav-link {{request()->routeIs('roles.*')?'nav-link active' :'' }}"><i class="icon-lock2"></i> <span>@lang('app.roles')</span></a>
                </li>


                <li class="nav-item">
                    <a href="{{route('cities.index')}}" class="font-size-lg  nav-link {{request()->routeIs('cities.*')?'nav-link active' :'' }}"><i class="icon-office"></i> <span>@lang('app.cities')</span></a>
                </li>
                <li class="nav-item" >
                    <a href="{{route('branch.index')}}" class="font-size-lg  nav-link {{request()->routeIs('branch.*')?'nav-link active' :'' }}"><i class="icon-git-branch"></i><span>@lang('app.branches')</span></a>
                </li>





                <li class="nav-item-header"><div class="text-uppercase font-size-lg  line-height-xs">@lang('app.reports')</div> <i class="icon-repo-forked" title="Main"></i></li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="font-size-lg  nav-link {{request()->routeIs('reports.*')?'nav-link active' :'' }}"><i class="icon-copy2"></i> <span>@lang('app.reports')</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="@lang('app.reports')" style="display: none;">

                        @can('control_slider')
                            <li class="nav-item">
                                <a href="{{route('reports.offers.index')}}" class="font-size-lg  nav-link  {{request()->routeIs('reports.offers.*')?'nav-link active' :'' }}">
                                    <i class="icon-list-ordered"></i> @lang('app.offers')
                                </a>
                            </li>
                                @endcan
                        @can('control_settigs')
                                <li class="font-size-lg  nav-item">
                                <a href="{{route('reports.shops.index')}}" class="nav-link {{request()->routeIs('reports.shops.*')?'nav-link active' :'' }}"><i class="icon-bag"></i>@lang('app.shops')</a>
                                </li>
                            @endcan
                    </ul>
                </li>




                <!-- /main -->
                <li class="nav-item-header"><div class="text-uppercase font-size-lg  line-height-xs">@lang('app.settings')</div> <i class="icon-menu" title="Main"></i></li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="font-size-lg  nav-link"><i class="icon-cog3"></i> <span>@lang('app.settings')</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="@lang('app.settings')" style="display: none;">

                        @can('control_slider')
                        <li class="nav-item"><a href="{{route('slider.index')}}" class="font-size-lg  nav-link {{request()->routeIs('slider.*')?'nav-link active' :'' }}"> <i class="icon-contrast"></i> @lang('app.sliders')</a></li>
                        @endcan
                            @can('control_slider')
                                <li class="nav-item"><a href="{{route('sliderCategory.index')}}" class="font-size-lg  nav-link {{request()->routeIs('slider.*')?'nav-link active' :'' }}"> <i class="icon-contrast"></i> @lang('app.sliders_categories')</a></li>
                            @endcan

                        <li class="nav-item"><a href="{{route('setting.edit',0)}}"  class="font-size-lg  nav-link  {{request()->routeIs('setting.*')?'nav-link active' :'' }}"><i class="icon-cogs"></i> @lang('app.application_data')</a></li>

                            @can('control_settigs')
                                <li class="nav-item"><a href="{{route('discountRate.index')}}"  class="font-size-lg  nav-link {{request()->routeIs('discountRate.*')?'nav-link active' :'' }}"><i class="icon-wallet"></i> @lang('app.discount_rates')</a></li>
                            @endcan
                            @can('control_settigs')
                                <li class="nav-item"><a href="{{route('advertising.index')}}"  class="font-size-lg  nav-link {{request()->routeIs('advertising.*')?'nav-link active' :'' }}"><i class="icon-megaphone"></i> @lang('app.advertisement')</a></li>
                            @endcan
                            @can('control_settigs')
                                <li class="nav-item"><a href="{{route('securityQuestion.index')}}"  class="font-size-lg  nav-link {{request()->routeIs('securityQuestion.*')?'nav-link active' :'' }}"><i class="icon-question3"></i> @lang('app.security_question')</a></li>
                            @endcan
                    </ul>
                </li>
                @can('control_telescope')
                <li class="nav-item" >
                    <a href="{{route('telescope_view')}}"
                       class="font-size-lg  nav-link  {{request()->routeIs('telescope_view*')?'nav-link active' :'' }}">
                        <i class="icon-eye"></i><span>@lang('app.telescope')</span>
                    </a>
                </li>
                @endcan

            @can('view_category')
                <li class="nav-item" hidden >
                    <a href="#" class="font-size-lg  nav-link"><i class="icon-phone2"></i> <span>@lang('app.contactus')</span></a>
                </li>
                    @endcan
            </ul>

        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>

<!-- /main sidebar -->
