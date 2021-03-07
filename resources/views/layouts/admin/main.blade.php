<div class="dashboard">
    <div class="dashboard_row">
        {{-- lista --}}
        <div class="dashboard_list col-xs-12 col-md-2 col-lg-2">
            <ul>
                <li class="{{ Route::currentRouteName() === 'admin.index' ? 'active' : '' }}"><a href="{{ route('admin.index') }}"> <i class="fas fa-tachometer-alt fa-lg fa-fw"></i> Dashboard </a></li>
                <li class="{{ Route::currentRouteName() === 'admin.comics.index' ? 'active' : '' }}"><a href="{{ route('admin.comics.index') }}" > <i class="fas fa-book fa-lg fa-fw"></i> Comics </a></li>
                <li class="{{ Route::currentRouteName() === 'admin.collections.index' ? 'active' : '' }}"><a href="{{ route('admin.collections.index') }}" > <i class="fas fa-folder-open fa-lg fa-fw"></i> Series </a></li>
                <li><a href="#"> <i class="fas fa-tag fa-lg fa-fw"></i> Tags </a></li>
            </ul>
        </div>
        {{-- main --}}
        <main id="main_content" class="col-xs-12 col-md-10 col-lg-10">
            @yield('content')
        </main>
    </div>
</div>
