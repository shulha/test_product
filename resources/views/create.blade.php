@extends('layout.main')

@section('content')
    <h1>Add product</h1>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" enctype="multipart/form-data" action="{{route('store_product')}}">
        {{--        <div class="row">
                    <div class="col-md-4">
                        <input type="file" name="image"/><br>
                    </div>
                    <div class="col-md-8">
                        <i class="glyphicon glyphicon-arrow-left"></i> Выберите миниатюру для товара.
                    </div>
                </div>--}}
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-8">
                <hr>
                <div class="form-group">
                    <label class="control-label" for="name">Name of product</label>
                    <input required class="form-control" type="text" id="name" name="name"/>
                </div>
                <div class="row">
                    <div class="col form-group">
                        <label class="control-label" for="programId">ProgramId</label>
                        <input required class="form-control" type="number" min="0" id="programId" name="programId"/>
                    </div>
                    <div class="col form-group">
                        <label class="control-label" for="programName">ProgramName</label>
                        <input required class="form-control" type="text" id="programName" name="programName"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-group">
                        <label class="control-label" for="priceOld">PriceOld</label>
                        <input required class="form-control" type="number" min="0.00" max="999999.99" step="0.01" id="priceOld"
                           name="priceOld"/>
                    </div>
                    <div class="col form-group">
                        <label class="control-label" for="price">Price</label>
                        <input required class="form-control" type="number" min="0.00" max="999999.99" step="0.01" id="price"
                               name="price"/>
                    </div>
                    <div class="col form-group">
                        <label class="control-label" for="currency">Currency</label>
                        <select required class="form-control custom-select" id="currency" name="currency">
                            <option selected>Choose</option>
                            <option value="EUR">EUR</option>
                            <option value="USD">USD</option>
                            <option value="UAH">UAH</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="description">Description</label>
                    <textarea required class="form-control" rows="4" id="description" name="description"></textarea>
                </div>
                <div class="row">
                    <div class="col form-group">
                        <label class="control-label" for="manufacturer">Manufacturer</label>
                        <input class="form-control" type="text" id="manufacturer" name="manufacturer"/>
                    </div>
                    <div class="col form-group">
                        <label class="control-label" for="ean">ean</label>
                        <input required class="form-control" type="number" min="0" id="ean" name="ean"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="image">URL of image</label>
                    <input required class="form-control" type="url" id="image" name="image"/>
                </div>
                <div class="row">
                    <div class="col form-group">
                        <label class="control-label" for="merchantCategory">MerchantCategory</label>
                        <input required class="form-control" type="text" id="merchantCategory" name="merchantCategory"/>
                    </div>
                    <div class="col form-group">
                        <label class="control-label" for="merchantEmail">MerchantEmail</label>
                        <input required class="form-control" type="email" id="merchantEmail" name="merchantEmail"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                    <label class="control-label" for="shippingCosts">ShippingCosts</label>
                    <input required class="form-control" type="number" min="0.00" max="999999.99" step="0.01" id="shippingCosts"
                           name="shippingCosts"/>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col form-group">
                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
            </div>
            <div class="col form-group">
                <span class="btn btn-warning btn-lg save_product">Submit over API</span>
            </div>
        </div>
    </form>
    <div id="my_div"></div>
@endsection