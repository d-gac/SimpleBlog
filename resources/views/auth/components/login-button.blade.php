@if(Route::has('login'))
    <div class="card-footer text-center py-3">
        <div class="small"><a href="{{route('login')}}">Masz już konto? Przejdź do logowania</a></div>
    </div>
@endif
