<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ApiController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return $product->name;
    }

    /**
     * Store a newly created resource in storage.
     * @return \Illuminate\Http\Response
     * @internal param \Illuminate\Http\Request $request
     */
    public function store()
    {
        $rules = [
            "name" => "required",
            "programId" => "integer",
            "price" => "required|numeric|max:999999.99",
            "currency" => ["required", Rule::in(['EUR', 'USD', 'UAH'])],
            "manufacturer" => "required",
            "ean" => "integer",
            "image" => "active_url",
            "merchantEmail" => "required|email"
        ];

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Response::json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()

            ), 400);
        }

        Product::create(Input::all());

        return Response::json(array('success' => true), 200);
    }
}
