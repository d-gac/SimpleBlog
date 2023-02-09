@if(Route::has('register'))
    <div class="card-footer text-center py-3">
        <div class="small"><a href="{{route('register')}}">Nie masz konta? Zarejestruj się teraz!</a></div>
    </div>
@endif
