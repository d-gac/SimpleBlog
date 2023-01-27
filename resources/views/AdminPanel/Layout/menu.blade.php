<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                <div class="sb-sidenav-menu-heading">Zarządzanie witryną</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages1"
                   aria-expanded="false" aria-controls="collapsePages1">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-paste"></i></div>
                    Treści
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages1" aria-labelledby="headingOne"
                     data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="{{route('post.index')}}">Wpisy</a>
                        <a class="nav-link collapsed" href="{{route('category.index')}}">Kategorie</a>
                        <a class="nav-link collapsed" href="{{route('tag.index')}}">Tagi</a>
                    </nav>
                </div>

                <div class="sb-sidenav-menu-heading">Ustawienia witryny</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages2"
                   aria-expanded="false" aria-controls="collapsePages2">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                    Ustawienia
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages2" aria-labelledby="headingTwo"
                     data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="{{route('footer.index')}}">Stopka</a>
                        <a class="nav-link collapsed" href="{{route('header.index')}}">Nagłówek</a>
                        <a class="nav-link collapsed" href="{{route('setting.index')}}">Podstrony</a>
                    </nav>
                </div>

                @if(!tenancy()->tenant)
                    <div class="sb-sidenav-menu-heading">Panel instancji</div>
                    <a class="nav-link" href="{{route('instance.index')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-bars"></i></div>
                        Instancje
                    </a>
                @endif

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Zalogowany jako:</div>
            {{ Auth::user()->name }}
        </div>
    </nav>
</div>
