@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
    @foreach($cakes as $cake)
        <div class="cake-item">
            <img src="/img/cake_img.jpg" alt="cake icon" class="img_index_cake">
            <h4 class="h4_index_cake"><a href="/cakes/{{ $cake->id }}" class="a_index_cake">{{ $cake->name }}</a></h4>
        </div>
    @endforeach
</div>
@endsection
