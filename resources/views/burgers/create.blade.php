@extends('layouts.app')

@section('content')
<div class="wrapper create-cake">
    <h1>Create a New Burger</h1>
    <form action="/burgers" method="POST">
    @csrf
        <label for="name" class="label_create_cake">Your name</label>
        <input type="text" id="cust_name" name="cust_name">
        <label for="type" class="label_create_cake">Choose burger type:</label>
        <select name="type" id="type" class="select_create_cake">
            <option value="veg">veg</option>
            <option value="non-veg">non-veg</option>
        </select>
        <label for="name" class="label_create_cake">Choose Burger name:</label>
        <select name="name" id="name" class="select_create_cake">
            <option value="Mexican-Burger">Mexican-Burger</option>
            <option value="Chicken-Cripsy-Burger">Chicken-Cripsy-Burger</option>
            <option value="Extra-Cheese">Extra-Cheese</option>
            <option value="Corn-Butter">Corn-Butter</option>
        </select>
        <fieldset class="fieldset_create_cake">
            <label class="label_cake">Extra Items</label>
            <input type="checkbox" name="extras[]" value="French-Fries" class="checkbox_create_cake">French-Fries<br />
            <input type="checkbox" name="extras[]" value="Coke" class="checkbox_create_cake">Coke<br />
            <input type="checkbox" name="extras[]" value="Moktail" class="checkbox_create_cake">Moktail<br />
            <input type="checkbox" name="extras[]" value="Ice-Cream(Softy IceCream)" class="checkbox_create_cake">Ice-Cream(Softy IceCream)<br />
        </fieldset>
        <input type="submit" value="Order Burger" class="submit_create_cake">
    </form>
</div>
@endsection
