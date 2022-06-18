@extends("layouts.layout") <!--/ THIS MEANS layouts/layout.blade.php /-->

@section("content") <!--/ THE CHUCK OF CODE IN HERE WILL PUT IT IN layouts/layout.blade.php IN @yield("content") /-->
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="/image/pizza-house.png" alt="pizza house logo">
        <div class="title m-b-md">
            The North's Best Pizzas
        </div>
        <a href="/pizzas/create">Order a Pizza</a>
    </div>
</div>
@endsection