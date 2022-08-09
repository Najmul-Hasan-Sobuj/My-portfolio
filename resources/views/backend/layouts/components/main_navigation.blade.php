<!-- Main navigation -->
<div class="sidebar-section">
    <ul class="nav nav-sidebar" data-nav-type="accordion">

        <!-- Main -->
        <li class="nav-item-header">
            <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i>
        </li>
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard*') ? 'nav-link active' : 'nav-link' }}">
                <i class="mi-dashboard"></i>
                <span>
                    Dashboard
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('employee.index') }}"
                class="{{ request()->is('employee*') ? 'nav-link active' : 'nav-link' }}">
                <i class="icon-user"></i>
                <span>
                    Employee
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home.index') }}" class="{{ request()->is('home*') ? 'nav-link active' : 'nav-link' }}">
                <i class="icon-home"></i>
                <span>
                    Home
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('service.index') }}"
                class="{{ request()->is('service*') ? 'nav-link active' : 'nav-link' }}">
                <i class="icon-wrench3"></i>
                <span>
                    Service
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('icon.index') }}" class="{{ request()->is('icon*') ? 'nav-link active' : 'nav-link' }}">
                <i class="icon-select2"></i>
                <span>
                    Pick Icon
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('experience.index') }}"
                class="{{ request()->is('experience*') ? 'nav-link active' : 'nav-link' }}">
                <i class="fas fa-level-up-alt"></i>
                <span>
                    Experience
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('testimonial.index') }}"
                class="{{ request()->is('testimonial*') ? 'nav-link active' : 'nav-link' }}">
                <i class="fas fa-quote-right"></i>
                <span>
                    Testimonial
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('about.index') }}"
                class="{{ request()->is('about*') ? 'nav-link active' : 'nav-link' }}">
                <i class="fas fa-info"></i>
                <span>
                    About Us
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('contact.index') }}"
                class="{{ request()->is('contact*') ? 'nav-link active' : 'nav-link' }}">
                <i class="fas fa-address-book"></i>
                <span>
                    Contact Us
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('category.index') }}"
                class="{{ request()->is('category*') ? 'nav-link active' : 'nav-link' }}">
                <i class="fas fa-list-alt"></i>
                <span>
                    Category
                </span>
            </a>
        </li>
        <!-- /main -->
    </ul>
</div>
<!-- /main navigation -->
