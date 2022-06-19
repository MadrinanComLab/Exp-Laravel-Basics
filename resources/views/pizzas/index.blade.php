@extends("layouts.app") <!--/ THIS MEANS layouts/app.blade.php /-->

@section("content") <!--/ THE CHUCK OF CODE IN HERE WILL PUT IT IN layouts/layout.blade.php IN @yield("content") /-->    
    <div class="wrapper pizza-index">
        <h1>Pizza Order</h1>

        @foreach ($pizza as $p)
            <div class="pizza-item">
                <!--/ {{ ($loop-> index) +1 }}.) {{ $p["type"] }} - {{ $p["base"] }}
                @if ($loop->first)
                    <span> - First in the loop</span>
                @endif
                
                @if ($loop->last)
                    <span> - Last in the loop</span>
                @endif /-->

                <!--/ THE THREE BELOW WAS THE COLUMN IN THE DATABASE pizzas /-->
                <!--/ <p onclick="window.location = '/pizzas/{{ $p->id }}'">{{ $p->name }} | {{ $p->type }} | {{ $p->base }}</p> /-->
                <img src="/image/pizza.png" alt="pizza icon">
                <h4><a href="/pizzas/{{ $p->id }}">{{ $p->name }}</a></h4>
            </div>
        @endforeach
    </div>
@endsection