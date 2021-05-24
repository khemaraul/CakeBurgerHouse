@extends('layouts.app')

@section('content')
<div class="wrapper create-cake">
    <h1>Create a New Cake</h1>
    <form action="/cakes" method="POST">
    @csrf
        <label for="name" class="label_create_cake">Your name</label>
        <input type="text" id="name" name="name">
        <label for="type" class="label_create_cake">Choose cake type:</label>
        <select name="type" id="type" class="select_create_cake">
            <option value="veg">veg</option>
            <option value="veg-sugarfree">veg-sugarfree</option>
            <option value="non-veg">non-veg</option>
            <option value="veg">veg</option>
        </select>
        <label for="flavour" class="label_create_cake">Choose cake flavour:</label>
        <select name="flavour" id="flavour" class="select_create_cake">
            <option value="red-velvet">red-velvet</option>
            <option value="chocolate-truffle">chocolate-truffle</option>
            <option value="white-house">white-house</option>
            <option value="pineapple">pineapple</option>
        </select>
        <fieldset class="fieldset_create_cake">
            <label class="label_cake">Extra Items</label>
            <input type="checkbox" name="extras[]" value="ballons" class="checkbox_create_cake">Ballons<br />
            <input type="checkbox" name="extras[]" value="golden_foil_ballons" class="checkbox_create_cake">Golden_Foil_Ballons<br />
            <input type="checkbox" name="extras[]" value="candles" class="checkbox_create_cake">Candles<br />
            <input type="checkbox" name="extras[]" value="number_candles" class="checkbox_create_cake">Number_Ballons<br />
        </fieldset>
        <input type="submit" value="Order cake" class="submit_create_cake">
    </form>
</div>
@endsection
