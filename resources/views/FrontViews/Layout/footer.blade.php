<!-- Footer-->
<footer class="border-top">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <ul class="list-inline text-center">

                    @if($settings->is_visible_twitter)
                        <li class="list-inline-item">
                            <a href="{{$settings->twitter}}">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                            </a>
                        </li>
                    @endif

                    @if($settings->is_visible_facebook)
                        <li class="list-inline-item">
                            <a href="{{$settings->facebook}}">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                            </a>
                        </li>
                    @endif

                    @if($settings->is_visible_github)
                        <li class="list-inline-item">
                            <a href="{{$settings->github}}">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                            </a>
                        </li>
                    @endif

                    @if($settings->is_visible_linkedin)
                        <li class="list-inline-item">
                            <a href="{{$settings->linkedin}}">
                                    <span class='fa-stack fa-lg'>
                                        <i class='fas fa-circle fa-stack-2x'></i>
                                        <i class='fab fa-linkedin-in fa-stack-1x fa-inverse'></i>
                                    </span>
                            </a>
                        </li>
                    @endif

                    @if($settings->is_visible_youtube)
                        <li class="list-inline-item">
                            <a href="{{$settings->youtube}}">
                                    <span class='fa-stack fa-lg'>
                                        <i class='fas fa-circle fa-stack-2x'></i>
                                        <i class='fab fa-youtube fa-stack-1x fa-inverse'></i>
                                    </span>
                            </a>
                        </li>
                    @endif
                </ul>
                <div class="small text-center text-muted fst-italic">Copyright &copy; Dariusz Gac 2022</div>
            </div>
        </div>
    </div>
</footer>
