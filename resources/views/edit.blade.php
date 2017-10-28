@extends('layout.main')

@section('content')
    <h1>Edit product</h1>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" enctype="multipart/form-data" action="{{route('update_product', ['id' => $product->id])}}">
        <div class="row">
            <div class="col-md-8">
                <hr>
                <div class="form-group">
                    <label class="control-label" for="name" >Name of product</label>
                    <input required class="form-control" type="text" id="name"
                           name="name" value="{{$product->name}}"/>
                </div>
                <div class="form-group">
                    <label class="control-label" for="programId">ProgramId</label>
                    <input required class="form-control" type="number" min="0" id="programId"
                           name="programId" value="{{$product->programId}}"/>
                </div>
                <div class="form-group">
                    <label class="control-label" for="programName">ProgramName</label>
                    <input required class="form-control" type="text" id="programName"
                           name="programName" value="{{$product->programName}}"/>
                </div>
                <div class="form-group">
                    <label class="control-label" for="price">Price</label>
                    <input required class="form-control" type="number" min="0.00" max="9999.99" step="0.01" id="price"
                           name="price" value="{{$product->price}}"/>
                </div>
                <div class="form-group">
                    <select required class="custom-select" id="currency" name="currency">
                        <option selected >{{$product->currency}}</option>
                        <option value="EUR">EUR</option>
                        <option value="USD">USD</option>
                        <option value="UAH">UAH</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="description">Description</label>
                    <textarea required class="form-control" rows="4" id="description"
                              name="description" >{{$product->description}}</textarea>
                </div>
                <div class="form-group">
                    <label class="control-label" for="manufacturer">Manufacturer</label>
                    <input class="form-control" type="text" id="manufacturer"
                           name="manufacturer" value="{{$product->manufacturer}}"/>
                </div>
                <div class="form-group">
                    <label class="control-label" for="ean">ean</label>
                    <input required class="form-control" type="number" min="0" id="ean"
                           name="ean" value="{{$product->ean}}"/>
                </div>
                <div class="form-group">
                    <label class="control-label" for="image">URL of image</label>
                    <input required class="form-control" type="url" id="image"
                           name="image" value="{{$product->image}}"/>
                </div>
                <div class="form-group">
                    <label class="control-label" for="priceOld">PriceOld</label>
                    <input required class="form-control" type="number" min="0.00" max="9999.99" step="0.01" id="priceOld"
                           name="priceOld" value="{{$product->priceOld}}"/>
                </div>
                <div class="form-group">
                    <label class="control-label" for="shippingCosts">ShippingCosts</label>
                    <input required class="form-control" type="number" min="0.00" max="9999.99" step="0.01" id="shippingCosts"
                           name="shippingCosts" value="{{$product->shippingCosts}}"/>
                </div>
                <div class="form-group">
                    <label class="control-label" for="merchantCategory">MerchantCategory</label>
                    <input required class="form-control" type="text" id="merchantCategory"
                           name="merchantCategory" value="{{$product->merchantCategory}}"/>
                </div>
                <div class="form-group">
                    <label class="control-label" for="merchantEmail">MerchantEmail</label>
                    <input required class="form-control" type="email" id="name"
                           name="merchantEmail" value="{{$product->merchantEmail}}"/>
                </div>
            </div>
        </div>
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button class="btn btn-default btn-lg save_item" type="submit">Submit</button>
    </form>
@endsection