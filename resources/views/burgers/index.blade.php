@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
    @foreach($burgers as $burger)
        <div class="cake-item">
            <img src="/img/burger_image.jpg" alt="burger icon" class="img_index_cake">
            <h4 class="h4_index_cake"><a href="/burgers/{{ $burger->id }}" class="a_index_cake">{{ $burger->name }}</a></h4>
        </div>
    @endforeach
</div>
@endsection
