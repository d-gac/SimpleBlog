<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                {{--                <div class="sb-sidenav-menu-heading">Core</div>--}}
                {{--                <a class="nav-link" href="{{route('admin.dashboard')}}">--}}
                {{--                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>--}}
                {{--                    Dashboard--}}
                {{--                </a>--}}
                <div class="sb-sidenav-menu-heading">Zarządzanie treścią</div>
                <a class="nav-link" href="{{route('post.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard"></i></div>
                    Wpisy
                </a>

                <div class="sb-sidenav-menu-heading">Administrator</div>
                <a class="nav-link" href="{{route('category.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-star"></i></div>
                    Kategorie
                </a>
                <a class="nav-link" href="{{route('tag.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-hashtag"></i></div>
                    Tagi
                </a>

                <div class="sb-sidenav-menu-heading">Ustawienia witryny</div>
                <a class="nav-link" href="{{route('footer.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                    Stopka
                </a>
                <a class="nav-link" href="{{route('header.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                    Nagłówek
                </a>
                <a class="nav-link" href="{{route('setting.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                    Podstrony
                </a>
                {{--                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"--}}
                {{--                   aria-expanded="false" aria-controls="collapsePages">--}}
                {{--                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>--}}
                {{--                    Pages--}}
                {{--                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
                {{--                </a>--}}
                {{--                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"--}}
                {{--                     data-bs-parent="#sidenavAccordion">--}}
                {{--                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">--}}
                {{--                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"--}}
                {{--                           data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">--}}
                {{--                            Authentication--}}
                {{--                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
                {{--                        </a>--}}
                {{--                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"--}}
                {{--                             data-bs-parent="#sidenavAccordionPages">--}}
                {{--                            <nav class="sb-sidenav-menu-nested nav">--}}
                {{--                                <a class="nav-link" href="login.html">Login</a>--}}
                {{--                                <a class="nav-link" href="register.html">Register</a>--}}
                {{--                                <a class="nav-link" href="password.html">Forgot Password</a>--}}
                {{--                            </nav>--}}
                {{--                        </div>--}}
                {{--                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"--}}
                {{--                           data-bs-target="#pagesCollapseError" aria-expanded="false"--}}
                {{--                           aria-controls="pagesCollapseError">--}}
                {{--                            Error--}}
                {{--                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
                {{--                        </a>--}}
                {{--                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"--}}
                {{--                             data-bs-parent="#sidenavAccordionPages">--}}
                {{--                            <nav class="sb-sidenav-menu-nested nav">--}}
                {{--                                <a class="nav-link" href="401.html">401 Page</a>--}}
                {{--                                <a class="nav-link" href="404.html">404 Page</a>--}}
                {{--                                <a class="nav-link" href="500.html">500 Page</a>--}}
                {{--                            </nav>--}}
                {{--                        </div>--}}
                {{--                    </nav>--}}
                {{--                </div>--}}
                {{--                <div class="sb-sidenav-menu-heading">Addons</div>--}}
                {{--                <a class="nav-link" href="charts.html">--}}
                {{--                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>--}}
                {{--                    Charts--}}
                {{--                </a>--}}
                {{--                <a class="nav-link" href="tables.html">--}}
                {{--                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>--}}
                {{--                    Tables--}}
                {{--                </a>--}}
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Zalogowany jako:</div>
            {{ Auth::user()->name }}
        </div>
    </nav>
</div>
