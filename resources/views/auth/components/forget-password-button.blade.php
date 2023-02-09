@if (Route::has('password.request'))
    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
        <a class="small" href="{{ route('password.request') }}">Zapomniałeś hasła?</a>
    </div>
@endif
