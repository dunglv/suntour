 <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand admin-brand" href="{{ route('ui.home') }}">
                    <img src="{{url('/')}}/images/ui/logo.png" alt="Admin Sun tour">
                </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i> {{ trans('ui_admin.lang_label.'.app()->getLocale()) }} <b class="caret"> </b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="{{ route('ad.lang.set', ['lang' => 'en']) }}" value="en">{{ trans('ui_admin.lang_label.en') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('ad.lang.set', ['lang' => 'ja']) }}" value="ja">{{ trans('ui_admin.lang_label.ja') }}</a>
                        </li>
                        
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="{{ route('ad.home') }}"><i class="fa fa-fw fa-dashboard"></i> {{ trans('ui_admin.menu.dashboard') }}</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#dra"><i class="fa fa-cube"></i> {{ trans('ui_admin.menu.article') }} <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="dra" class="collapse">
                            <li>
                                <a href="{{ route('ad.a.index') }}"><i class="fa fa-home"></i> {{ trans('ui_admin.menu.article.index') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('ad.a.create') }}"><i class="fa fa-plus"></i> {{ trans('ui_admin.menu.article.create') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('ad.a.locked') }}"><i class="fa fa-lock"></i> {{ trans('ui_admin.menu.article.locked') }}</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#drlc"><i class="fa fa-map-marker"></i> {{ trans('ui_admin.menu.locate') }} <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="drlc" class="collapse">
                            <li>
                                <a href="{{ route('ad.a.index') }}"><i class="fa fa-home"></i> {{ trans('ui_admin.menu.locate.index') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('ad.a.create') }}"><i class="fa fa-plus"></i> {{ trans('ui_admin.menu.locate.create') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('ad.a.locked') }}"><i class="fa fa-lock"></i> {{ trans('ui_admin.menu.locate.locked') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#drs"><i class="fa fa-deaf"></i> {{ trans('ui_admin.menu.slider') }} <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="drs" class="collapse">
                            <li>
                                <a href="{{ route('ad.a.index') }}"><i class="fa fa-home"></i> {{ trans('ui_admin.menu.slider.index') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('ad.a.create') }}"><i class="fa fa-plus"></i> {{ trans('ui_admin.menu.slider.create') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('ad.a.locked') }}"><i class="fa fa-lock"></i> {{ trans('ui_admin.menu.slider.locked') }}</a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li> --}}
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
