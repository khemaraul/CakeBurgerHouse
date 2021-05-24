@extends('layouts.app')

@section('content')
<div class="wrapper cake-details">
    <h1>Order for {{ $burger->cust_name }}</h1>
    <p class="type">Type - {{ $burger->type }}</p>
    <p class="type">Name - {{ $burger->name }}</p>
    <p class="extras">Extra Items</p>
    <ul>
        @foreach($burger->extras as $extra)
            <li>{{ $extra }}</li>
        @endforeach
    </ul>
    <form action="{{ route('burgers.destroy', $burger->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
    </form>
</div>
<a href="/cakes" class="back"><- Back to all cakes</a>
@endsection
