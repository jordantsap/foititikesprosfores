<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active"><a href="{{ route('dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i> <span>{{ Auth::user()->username }} :
                        {{ Auth::user()->name }}</span></a>
            </li>

            <li><a href="{{ route('companies.index') }}">
                    <i class="fas fa-shopping-bag"></i> <span>Καταστήματα</span></a></li>

            <li><a href="{{ route('brands.index') }}"><i class="fas fa-book"></i> <span>Μάρκες</span></a></li>

            <li><a href="{{ route('products.index') }}">
                    <i class="fas fa-shopping-cart" aria-hidden="true"></i> <span>Προϊόντα</span></a></li>

            {{-- <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt" aria-hidden="true"></i> <span>{{ __('form.logout') }}</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li> --}}
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
