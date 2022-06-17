@extends("layouts.layout") <!--/ THIS MEANS layouts/layout.blade.php /-->

@section("content") <!--/ THE CHUCK OF CODE IN HERE WILL PUT IT IN layouts/layout.blade.php IN @yield("content") /-->
<div class="flex-center position-ref full-height">
    

    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

        <p>Hello {{ $name }}, your age is {{ $age }}</p>

        <!--/ @for ($i = 0; $i < count($pizza); $i++)
            <p>{{ $pizza[$i]["type"] }} - {{ $pizza[$i]["base"] }}</p>
        @endfor /-->

        @foreach ($pizza as $p)
            <div>
                <!--/ {{ ($loop-> index) +1 }}.) {{ $p["type"] }} - {{ $p["base"] }}
                @if ($loop->first)
                    <span> - First in the loop</span>
                @endif
                
                @if ($loop->last)
                    <span> - Last in the loop</span>
                @endif /-->

                <!--/ THE THREE BELOW WAS THE COLUMN IN THE DATABASE pizzas /-->
                {{ $p->name }} | {{ $p->type }} | {{ $p->base }}
            </div>
        @endforeach
    </div>
</div>
@endsection