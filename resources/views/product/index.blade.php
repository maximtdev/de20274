@extends('layout')

@section('title', 'Товары')

@section('content')
    <h2>Товары</h2>

    <div class="cards">
        @foreach($products as $product)
            <div class="card {{ $product->stocks->sum('quantity') <= 3 ? "small" : "" }}">
                <div class="image">
                     @if($product->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($product->image))
                         <img width="150px" alt="" src="{{ asset('storage/') }}/{{$product->image}}">
                    @else
                    <img width="150px" alt="" src="{{ asset('assets/images/picture.png') }}">
                    @endif
                </div>
                <div class="info">
                    <div class="production">{{ $product->production }} | {{ $product->name }}</div>
                    <div>Категория: {{ $product->category->name }}</div>
                    <div>Кол-во: {{ $product->stocks->sum('quantity') > 5 ? "Много" : "Мало" }}</div>
                    <div>Состав: {{ $product->composition }}</div>
                </div>
                <div class="price {{ $product->ordered_last_month ? "sell" : "" }}">
                    {{ $product->ordered_last_month ? $product->price * 0.75 : $product->price }} руб.
                </div>

            </div>
        @endforeach

    </div>




@endsection
