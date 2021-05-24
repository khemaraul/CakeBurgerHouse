@extends('layouts.app')

@section('content')
<div class="wrapper cake-details">
    <h1>Order for {{ $cake->name }}</h1>
    <p class="type">Type - {{ $cake->type }}</p>
    <p class="type">Flavor - {{ $cake->flavour }}</p>
    <p class="extras">Extra Items</p>
    <ul>
        @foreach($cake->extras as $extra)
            <li>{{ $extra }}</li>
        @endforeach
    </ul>
    <form action="{{ route('cakes.destroy', $cake->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
    </form>
</div>
<a href="/cakes" class="back"><- Back to all cakes</a>
@endsection
