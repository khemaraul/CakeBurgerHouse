@extends('layouts.app')

@section('content')

            <div class="container_cake">
                <img class="cake_img" src="/img/cakehouse.jpg" alt="cake house logo">
                <center><h1>The East's Best Cakes...</h1></center>
                <center><p class="mssg">{{ session('mssg') }}</p></center>
                <center><a href="{{ route('cakes.create') }}">Order a cake</a></center>
            </div>


        </div>
@endsection
