<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </li>
            <li>
                <a href="#"><i class="fa fa-dashboard fa-fw"></i> @lang('content.dashbroad')</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> @lang('content.category')<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">@lang('content.list') @lang('content.category')</a>
                    </li>
                    <li>
                        <a href="#">@lang('content.add') @lang('content.category')</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-cube fa-fw"></i> @lang('content.book')<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">@lang('content.list') @lang('content.book')</a>
                    </li>
                    <li>
                        <a href="#">@lang('content.add') @lang('content.book')</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> @lang('content.user')<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">@lang('content.list') @lang('content.user')</a>
                    </li>
                    <li>
                        <a href="#">@lang('content.add') @lang('content.user')</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
