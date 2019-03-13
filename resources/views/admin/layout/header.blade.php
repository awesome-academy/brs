<nav class="navbar navbar-default navbar-static-top" role="navigation"">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">@lang('content.admin')</a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i>@lang('content.profile')</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i>@lang('content.setting')</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="dropdown-item">
                        @lang('content.logout')
                    </a>
                </li>
            </ul>
        </li>
    </ul>

    @include('admin.layout.menu')
</nav>
