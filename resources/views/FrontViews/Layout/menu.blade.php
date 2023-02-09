<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">

    <div class="container px-4 px-lg-5">

        <a class="navbar-brand" href="/">
            {{$header->is_visible_webTitle ? $header->webTitle : 'Blog name'}}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

            Menu

            <i class="fas fa-bars"></i>

        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ms-auto py-4 py-lg-0">

                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('homePage')}}">Strona
                        główna</a></li>

                @if($header->is_visible_about)
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('aboutPage')}}">O
                            nas</a></li>
                @endif

                @if($header->is_visible_contact)
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('contactPage')}}">Kontakt</a>
                    </li>
                @endif

            </ul>

        </div>

    </div>

</nav>

<!-- Page Header-->
<header class="masthead" style="background-image: url({{ $header->banner_photo ?? asset('/assets/img/home-bg.jpg') }})">

    <div class="container position-relative px-4 px-lg-5">

        <div class="row gx-4 gx-lg-5 justify-content-center">

            <div class="col-md-10 col-lg-8 col-xl-10">

                <div class="site-heading">

                    @if(Route::current()->getName() == 'homePage')

                        <h1>{{$header->banner_title ?? 'Tytuł baneru'}}</h1>
                        <span
                            class="subheading">{{$header->banner_paragraph ?? 'Zawartość baneru. Możlliwość edycji z panelu w zakładce \'Nagłówek\'.'}}</span>

                    @else

                        <h1>{{Route::current()->getName() == 'aboutPage' ? 'O nas' : 'Kontakt'}}</h1>
                        <span
                            class="subheading">&nbsp;</span>

                    @endif

                </div>

            </div>

        </div>

    </div>

</header>
