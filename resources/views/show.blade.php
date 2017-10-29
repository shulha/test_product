@extends('layout.main')

@section('content')
    <h1 class="show_product">"{{$product->name}}"</h1>
    <hr>

    <div class="container">
        <div class="show_product">
            Modified: {{$product->updated_at}}
        </div>
        <div class="show_product">
            {{$product->programId}}: {{$product->programName}}
        </div>
    @if(!empty($product->image))
        <div class="row">
            <div class="col-md-12">
                <img class="img-thumbnail" width=200 src="{{$product->image}}">
            </div>
        </div>
    @endif
    <br>
    <div class="show_product">
        EAN: {{$product->ean}}
    </div>
    <div class="show_product">
        Manufacturer: {{$product->manufacturer}}
    </div>
    <br>
    <div class="panel panel-default">
        <div class="panel-heading"><h5>Description:</h5></div>
        <div class="panel-body">
            {{$product->description}}
        </div>
    </div>
    <br>
    <div class="">Merchant's Category: {{$product->merchantCategory}}</div>
    <div class="">Merchant's Email: {{$product->merchantEmail}}</div>
    <br>
    <h5 class="show_product">Old Price: {{$product->priceOld}} {{$product->currency}}</h5>
    <h3 class="text-success">Price: {{$product->price}} {{$product->currency}}</h3>
    <h4>Shipping's Costs: {{$product->shippingCosts}} {{$product->currency}}</h4>
    </div>
@stop