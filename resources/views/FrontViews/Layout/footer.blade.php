<!-- Footer-->
<footer class="border-top">

    <div class="container px-4 px-lg-5">

        <div class="row gx-4 gx-lg-5 justify-content-center">

            <div class="col-md-10 col-lg-8 col-xl-10">

                <ul class="list-inline text-center">

                    @if($footer->is_visible_twitter)

                        <li class="list-inline-item">

                            <a target="_blank" href="{{$footer->twitter}}">

                                    <span class="fa-stack fa-lg">

                                        <i class="fas fa-circle fa-stack-2x"></i>

                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>

                                    </span>

                            </a>

                        </li>

                    @endif

                    @if($footer->is_visible_facebook)

                        <li class="list-inline-item">

                            <a target="_blank" href="{{$footer->facebook}}">

                                    <span class="fa-stack fa-lg">

                                        <i class="fas fa-circle fa-stack-2x"></i>

                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>

                                    </span>

                            </a>

                        </li>

                    @endif

                    @if($footer->is_visible_github)

                        <li class="list-inline-item">

                            <a target="_blank" href="{{$footer->github}}">

                                    <span class="fa-stack fa-lg">

                                        <i class="fas fa-circle fa-stack-2x"></i>

                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>

                                    </span>

                            </a>

                        </li>

                    @endif

                    @if($footer->is_visible_linkedin)

                        <li class="list-inline-item">

                            <a target="_blank" href="{{$footer->linkedin}}">

                                    <span class='fa-stack fa-lg'>

                                        <i class='fas fa-circle fa-stack-2x'></i>

                                        <i class='fab fa-linkedin-in fa-stack-1x fa-inverse'></i>

                                    </span>

                            </a>

                        </li>

                    @endif

                    @if($footer->is_visible_youtube)

                        <li class="list-inline-item">

                            <a target="_blank" href="{{$footer->youtube}}">

                                    <span class='fa-stack fa-lg'>

                                        <i class='fas fa-circle fa-stack-2x'></i>

                                        <i class='fab fa-youtube fa-stack-1x fa-inverse'></i>

                                    </span>

                            </a>

                        </li>

                    @endif

                </ul>

                <div class="small text-center text-muted fst-italic">@include('global.components.footer-text')</div>

            </div>

        </div>

    </div>

</footer>
