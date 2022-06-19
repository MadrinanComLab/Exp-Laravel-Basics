@extends("layouts.app") <!--/ THIS MEANS layouts/layout.blade.php /-->

@section("content") <!--/ THE CHUCK OF CODE IN HERE WILL PUT IT IN layouts/layout.blade.php IN @yield("content") /-->
<div class="wrapper pizza-details">
    <h1>Order for {{ $pizza->name }}</h1>
    <p class="type">Type - {{ $pizza->type }}</p>
    <p class="base">Base - {{ $pizza->base }}</p>

    <p class="toppings">Extra toppings:</p>
    <ul>
        @foreach ($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
    </ul>

    <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST"><!--/ method="DELETE" BROWSERS DON'T USUALLY UNDERSTAND THIS, SO WE'LL FAKE IT AND USE POST /-->
        @csrf
        @method("DELETE") <!--/ THIS WILL TELL LARAVEL THAT WE'RE TRYING TO USE DELETE REQUEST METHOD /-->
        <button>Complete Order</button>
    </form>
</div>

<a href="/pizzas" class="back"><- Back to all pizzas</a>
@endsection