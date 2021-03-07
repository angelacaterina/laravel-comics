<div class="dashboard py-4">
    <div class="row">
        {{-- lista --}}
        <div class="col-xs-12 col-md-2 col-lg-2">
            <ul class="list-unstyled">
                <li><a href="{{ route('admin.index') }}"> <i class="fas fa-tachometer-alt fa-lg fa-fw"></i> Dashboard </a></li>
                <li><a href="{{ route('admin.comics.index') }}"> <i class="fas fa-book fa-lg fa-fw"></i> Comics </a></li>
                <li><a href="{{ route('admin.collections.index') }}"> <i class="fas fa-folder-open fa-lg fa-fw"></i> Series </a></li>
                <li><a href="#"> <i class="fas fa-tag fa-lg fa-fw"></i> Tags </a></li>
            </ul>
        </div>
        {{-- main --}}
        <main class="col-xs-12 col-md-10 col-lg-10">
            @yield('content')
        </main>
    </div>
</div>