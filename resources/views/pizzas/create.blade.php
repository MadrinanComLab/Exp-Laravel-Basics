@extends("layouts.layout") <!--/ THIS MEANS layouts/layout.blade.php /-->

@section("content") <!--/ THE CHUCK OF CODE IN HERE WILL PUT IT IN layouts/layout.blade.php IN @yield("content") /-->
<div class="wrapper create-pizza">
    <h1>Create a new Pizza</h1>

    <form action="/pizzas" method="POST">
        @csrf <!--/ CSRF = Cross-site request forgery | WITHOUT THIS; IF YOU SUBMIT THE FORM IT WILL THROW ERROR 419 WHICH IS BUILT IN IN LARAVEL TO PROTECT THE SITE FROM CSRF /-->
        <label for="name">Your name:</label>
        <input type="text" name="name" id="name">
        
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        
        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy/option>
            <option value="thick">Thick</option>
        </select>

        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection