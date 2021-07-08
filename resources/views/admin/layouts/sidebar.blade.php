<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active"><a href="{{ route('dashboard') }}">
<<<<<<< HEAD
                    <i class="fas fa-tachometer-alt"></i> :<span>{{ Auth::user()->username }} <br> Ρόλοι
                        {{ Auth::user()->getRoleNames() }} </span></a>
            </li>

            @hasanyrole('Super-Admin|Admin')
            <li class="text-center" style="color:white">
                <i class="fa fa-tasks" aria-hidden="true"></i>
                <span>Σύστημα</span>
            </li>
            <li><a href="{{ route('roles.index') }}">
                    <i class="fas fa-users-cog"></i> <span>Ρόλοι (Role)</span></a>
            </li>

            <li><a href="{{ route('permissions.index') }}">
                    <i class="fas fa-user-plus"></i> <span>Δυνατότητες (Permission)</span></a></li>
            @endhasanyrole

            @hasanyrole('Super-Admin|Admin|Blogger')
            <li>
                <a href="{{ route('users.index') }}">
                    <i class="fas fa-user"></i> <span>Χρήστες</span>(Users)
                </a>
            </li>
            <li class="text-center" style="color:white">
                <i class="fa fa-tasks" aria-hidden="true"></i>
                <span>Κατηγορίες</span>
            </li>
            <div class="divider"></div>
            <li><a href="{{ route('categories.index') }}">
                    <i class="fas fas fa-shopping-cart"></i> <span>Κύριες (Categories)</span></a>
            </li>

            <li><a href="{{ route('types.index') }}">
                    <i class="fas fas fa-shopping-bag"></i> <span>Ενδιάμεσες (Types)</span></a>
            </li>

            <li><a href="{{ route('subtypes.index') }}">
                    <i class="fas fas fa-shopping-bag"></i> <span>Τελικές (Subtypes)</span></a>
            </li>

            <li class="text-center" style="color:white">
                <i class="fa fa-tasks" aria-hidden="true"></i>
                <span>Blog</span>
            </li>

            <li><a href="{{ route('articles.index') }}">
                    <i class="fas fa-newspaper"></i> <span>Άρθρα (Articles)</span></a>
            </li>

            <li class="text-center" style="color:white">
                <i class="fa fa-tasks" aria-hidden="true"></i>
                <span>Partner</span>
            </li>

            <li><a href="{{ route('companies.index') }}">
                    <i class="fas fa-shopping-bag"></i>
                    <span>Καταστήματα(Companies)</span>
                </a>
            </li>


            <li>
                <a href="{{ route('products.index') }}">
                    <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                    <span>Λίστα Προϊόντων(Products)</span></a>
            </li>

            <li>
                <a href="{{ route('brands.index') }}">
                    <i class="fas fa-book"></i> <span>Μάρκες (Brands)</span>
                </a>
            </li>

            <li><a href="{{ route('colors.index') }}">
                    <i class="fas fas fa-shopping-bag"></i> <span> Λίστα Χρωμάτων(Colors)</span></a>
            </li>

            @endhasanyrole

            @hasrole('Partner')
            <li>
                <a href="{{ route('my.products.create') }}">
                    <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                    <span>Δημιουργία Προϊόντος</span>
                </a>
            </li>

            <li>
                <a href="{{ route('users.show', Auth::user()->id) }}">
                    <i class="fas fa-user"></i> <span>Προφίλ</span>
                </a>
            </li>
            <li>
                <a href="{{ route('my-brands.index') }}">
                    <i class="fas fa-book"></i> <span>Μάρκες(Brands)</span>
                </a>
            </li>

            <li><a href="{{ route('my-colors.index') }}">
                    <i class="fas fas fa-shopping-bag"></i> <span>Χρώματα(Color)</span></a>
            </li>
            {{-- <li><a href="{{ route('companies.create') }}">
                    <i class="fas fa-shopping-bag" aria-hidden="true"></i>
                    <span>Νέο Κατάστημα</span>
                </a>
            </li> --}}

=======
                    <i class="fas fa-tachometer-alt"></i> :<span>{{ Auth::user()->username  }} <br> Ρόλοι {{Auth::user()->getRoleNames()}} </span></a>
            </li>
            @hasanyrole('Super-Admin|Admin')
            <li><a href="{{ route('roles.index') }}">
                    <i class="fas fa-users-cog"></i> <span>Ρόλοι</span></a>
            </li>

            <li><a href="{{ route('permissions.index') }}">
                    <i class="fas fa-user-plus"></i> <span>Δυνατότητες</span></a></li>

            <li><a href="{{ route('users.index') }}">
                    <i class="fas fa-user"></i> <span>Χρήστες</span></a></li>
            @endhasanyrole
            @hasanyrole('Super-Admin|Admin|Blogger')
            <li><a href="{{ route('categories.index') }}">
                    <i class="fas fas fa-shopping-cart"></i> <span>Κύριες κατηγορίες</span></a>
            </li>

            <li><a href="{{ route('types.index') }}">
                    <i class="fas fas fa-shopping-bag"></i> <span>Ενδιάμεσες κατηγορίες</span></a>
            </li>

            <li><a href="{{ route('subtypes.index') }}">
                    <i class="fas fas fa-shopping-bag"></i> <span>Τελικές κατηγορίες</span></a>
            </li>

            <li><a href="{{ route('articles.index') }}">
                    <i class="fas fa-newspaper"></i> <span>Άρθρα</span></a>
            </li>

            <li><a href="{{ route('companies.index') }}">
                    <i class="fas fa-shopping-bag"></i> <span>Καταστήματα</span></a></li>

            <li><a href="{{ route('brands.index') }}"><i class="fas fa-book"></i> <span>Μάρκες</span></a></li>

            <li><a href="{{ route('products.index') }}">
                    <i class="fas fa-shopping-cart" aria-hidden="true"></i> <span>Προϊόντα</span></a></li>
            {{-- @can('view_products', App\Models\Product::class) --}}
            {{-- <li><a href="{{ route('fields.index') }}">
                    <i class="fas fa-shopping-cart" aria-hidden="true"></i> <span>Πεδία Προιόντων</span></a></li> --}}
            {{-- @endcan --}}
            @endhasanyrole
            @hasrole('Partner')
            <li><a href="{{ route('companies.create') }}">
                <i class="fas fa-shopping-bag" aria-hidden="true"></i> <span>Νέο Κατάστημα</span></a></li>
                <li><a href="{{ route('products.create') }}">
                    <i class="fas fa-shopping-cart" aria-hidden="true"></i> <span>Δημιουργία Προϊόντος</span></a></li>
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            @endhasrole

            {{-- @include('auth.sidebar') --}}

            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt" aria-hidden="true"></i> <span>{{ __('form.logout') }}</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
