@extends('layout.main')

@section('content')
    <h1>"{{$product->name}}"</h1>
    <hr>

    <div class="container">
        @if(!empty($product->image))
            <div class="row">
                <div class="col-md-12">
                    <img class="img-thumbnail" width=150 src="{{$product->image}}">
                </div>
            </div>
        @endif
        <br>
        <div>
            Manufacturer: {{$product->manufacturer}}
        </div>
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">Description:</div>
            <div class="panel-body">
                {{$product->description}}
            </div>
        </div>
        <br>
        <div class="">Merchant's Email: {{$product->merchantEmail}}</div>
        <br>
        <h3 class="text-success">Price: {{$product->price}} {{$product->currency}}</h3>
        <h4>Shipping's Costs: {{$product->shippingCosts}} {{$product->currency}}</h4>
    </div>
@stop