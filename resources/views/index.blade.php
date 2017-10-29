@extends('layout.main')

@section('content')
    <div class="card-columns">
        @foreach($products as $product)
                <div class="card text-center item" id="product-{{$product->id}}">
                    <img class="card-img-top" src="{{$product->image}}" alt="">
                    <div class="card-block">
                        <h4 class="card-title">{{$product->name}}</h4>
                        <p class="card-text">Цена:<span class="price"> {{$product->price}}</span> {{$product->currency}}
                        </p>
                        <p><a href="{{ route('show_product', ['id' => $product->id]) }}" role="button" class="btn btn-primary">
                                Подробнее
                            </a>
                        <div class="btn-group">
                            <a href="{{ route('edit_product', ['id' => $product->id]) }}" class="btn btn-warning"
                               role="button">Редактировать</a>
                            <span class="btn btn-danger del_product" id="{{$product->id}}" role="button">Удалить</span>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
@endsection