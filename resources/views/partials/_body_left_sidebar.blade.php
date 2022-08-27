<!-- Sidebar  -->
<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        {{-- <a href="{{ route('dashboard-1') }}"> --}}
        <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" alt="">
        <span>Sofbox</span>
        </a>
        <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
                <div class="line-menu half start"></div>
                <div class="line-menu"></div>
                <div class="line-menu half end"></div>
            </div>
        </div>
    </div>

    @php
        $MyNavBar = \Menu::make('MenuList', function ($menu) {
            $menu->raw('Main', ['class' => 'iq-menu-title'])->prepend('<i class="ri-separator"></i>');
        
            $menu
                ->add('<span>Dashboard</span>', ['class' => ''])
                ->prepend('<i class="ri-home-4-line"></i>')
                ->nickname('dashboard')
                ->link->attr(['class' => 'nav-link iq-waves-effect'])
                ->href('#dashboard');
        })->filter(function ($item) {
            return $item;
        });
    @endphp

    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                @include(config('laravel-menu.views.bootstrap-items'), ['items' => $MyNavBar->roots()])
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
