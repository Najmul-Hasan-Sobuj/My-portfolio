<!-- Main navigation -->
<div class="sidebar-section">
    <ul class="nav nav-sidebar" data-nav-type="accordion">

        <!-- Main -->
        <li class="nav-item-header">
            <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i>
        </li>
        <li class="nav-item">
            <a href="{{ route('dashboard') }}"
                class="{{ request()->is('dashboard*') ? 'nav-link active' : 'nav-link' }}">
                <i class="mi-dashboard"></i>
                <span>
                    Dashboard
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home.index') }}"
                class="{{ request()->is('home*') ? 'nav-link active' : 'nav-link' }}">
                <i class="icon-home4"></i>
                <span>
                    Home
                </span>
            </a>
        </li>
        <li class="nav-item nav-item-submenu">
            <a href="#" class="nav-link"><i class="icon-color-sampler"></i>
                <span>Themes</span></a>

            <ul class="nav nav-group-sub" data-submenu-title="Themes">
                <li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>
                <li class="nav-item"><a href="../../../LTR/material/full/index.html"
                        class="nav-link">Material</a></li>
                <li class="nav-item"><a href="../../../LTR/dark/full/index.html" class="nav-link">Dark</a>
                </li>
                <li class="nav-item"><a href="../../../LTR/clean/full/index.html" class="nav-link disabled">Clean
                        <span class="badge bg-transparent align-self-center ml-auto">Coming
                            soon</span></a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="changelog.html" class="nav-link">
                <i class="icon-list-unordered"></i>
                <span>Changelog</span>
                <span class="badge badge-primary align-self-center ml-auto">3.0</span>
            </a>
        </li>
        <!-- /main -->
    </ul>
</div>
<!-- /main navigation -->
