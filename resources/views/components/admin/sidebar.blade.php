<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.index')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active @if(request()->is('admin')) active @endif ">
                <a class="nav-link" href="{{ route('admin.index')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Админка</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Новости
            </div>


            <li class="nav-item @if(request()->routeIs('news')) active @endif">
                <a class="nav-link" href="{{ route('news') }}" >
                <i class="fas fa-fw fa-list"></i>
                    <span>Главная(просмотр новостей)</span>
                </a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item  @if(request()->routeIs('admin.categories.*')) active @endif">
                <a class="nav-link" href="{{ route('admin.categories.index') }}" >
                <i class="fas fa-fw fa-list"></i>
                    <span>Категории</span>
                </a>
            </li>
            <li class="nav-item @if(request()->routeIs('admin.news.*')) active @endif">
                <a class="nav-link" href="{{ route('admin.news.index') }}" >
                <i class="fas fa-fw fa-list"></i>
                    <span>Новости</span>
                </a>
            </li>
            <li class="nav-item @if(request()->routeIs('admin.contact')) active @endif">
                <a class="nav-link" href="{{ route('admin.contact') }}" >
                <i class="fas fa-fw fa-list"></i>
                    <span>Контакты</span>
                </a>
            </li>
            <li class="nav-item @if(request()->routeIs('admin.source')) active @endif">
                <a class="nav-link" href="{{ route('admin.source') }}" >
                <i class="fas fa-fw fa-list"></i>
                    <span>Источники</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

</ul>