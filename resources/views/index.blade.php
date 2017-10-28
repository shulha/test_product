@extends('layout.main')

@section('content')
    <div class="row masonry" data-columns>
        @foreach($products as $product)
            <div class="col-md-3" id="item-{{$product->id}}">
                <div class="img-thumbnail">
                    <img height=200 src="{{$product->image}}" alt="">
                    <div class="caption">
                        <h3>{{$product->name}}</h3>
                        <p>Цена:<span class="price"> {{$product->price}}</span> {{$product->currency}}</p>
                        <p>
                            @if($product->selected)
                                <a href="#" class="btn btn-primary buy-btn" id="{{$product->id}}" role="button">Купить</a>
                            @endif
                            <a href="{{ route('show_product', ['id' => $product->id]) }}" class="btn btn-secondary" role="button">Подробнее</a>
                            <div class="btn-group">
                                <a href="{{ route('edit_product', ['id' => $product->id]) }}" class="btn btn-warning" role="button">Редактировать</a>
                                <span class="btn btn-danger del_product" id="{{$product->id}}" role="button">Удалить</span>
                            </div>
                            </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection