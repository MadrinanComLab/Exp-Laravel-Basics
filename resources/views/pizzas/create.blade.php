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
            <option value="Margarita">Margarita</option>
            <option value="Hawaiian">Hawaiian</option>
            <option value="Veg Supreme">Veg Supreme</option>
            <option value="Volcano">Volcano</option>
        </select>
        
        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="Cheesy Crust">Cheesy Crust</option>
            <option value="Garlic Crust">Garlic Crust</option>
            <option value="Thin & Crispy">Thin & Crispy</option>
            <option value="Thick">Thick</option>
        </select>

        <fieldset>
            <label>Extra toppings:</label>
            <!--/ NOTE: NOTICE THAT toppings[] HAS SQUARE BRACKET. THAT IS BECAUSE WE WANT TO GET ARRAY VALUES AND SEND IT TO THE SERVER. | WITHOUT SQUARE BRACKET IT WILL ONLY GET THE LAST ONE YOU SELECTED /-->
            <input type="checkbox" name="toppings[]" value="Mushrooms">Mushrooms
            <input type="checkbox" name="toppings[]" value="Peppers">Peppers
            <input type="checkbox" name="toppings[]" value="Garlic">Garlic
            <input type="checkbox" name="toppings[]" value="Olives">Olives
        </fieldset>

        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection