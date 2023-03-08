<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('admin/images//icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="{{ route ('books.index')}}">
                                <i class="fas fa-chart-bar"></i>Data Buku</a>
                        </li>
                        <li>
                            <a href="{{ route ('books.create')}}">
                                <i class="fas fa-chart-bar"></i>Tambah Buku</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->