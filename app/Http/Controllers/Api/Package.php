<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Package as ModelsPackage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Package extends Controller
{

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //
        $package = ModelsPackage::all();

        $resp = [
            'status' => 'ok',
            'message' => '',
            'data' => $package
        ];

        return response()->json($resp, 200, []);
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $package = new ModelsPackage;

        try {
            $package->transaction_id =  $request->transaction_id;
            $package->customer_name =  $request->customer_name;
            $package->customer_code = $request->customer_code;
            $package->transaction_amount = $request->transaction_amount;
            $package->transaction_discount = $request->transaction_discount;
            $package->transaction_additional_field =  $request->transaction_additional_field;
            $package->transaction_payment_type = $request->transaction_payment_type;
            $package->transaction_state = $request->transaction_state;
            $package->transaction_code = $request->transaction_code;
            $package->transaction_order = $request->transaction_order;
            $package->location_id = $request->location_id;
            $package->organization_id = $request->organization_id;
            $package->created_at = $request->created_at;
            $package->updated_at = $request->updated_at;
            $package->transaction_payment_type_name = $request->transaction_payment_type_name;
            $package->transaction_cash_amount = $request->transaction_cash_amount;
            $package->transaction_cash_change = $request->transaction_cash_change;
            $package->customer_attribute = $request->customer_attribute;
            $package->connote = $request->connote;
            $package->connote_id = $request->connote_id;
            $package->origin_data = $request->origin_data;
            $package->destination_data = $request->destination_data;
            $package->koli_data = $request->koli_data;
            $package->custom_field = $request->custom_field;
            $package->currentLocation = $request->currentLocation;
            $package->save();

            $resp = [
                'status' => 'ok',
                'message' => 'data has been created',
                'data' => $request->all()
            ];
            return response()->json($resp, 201, []);
        } catch (\Throwable $e) {

            $resp = [
                'status' => 'error',
                'message' => $e,
                'data' => ''
            ];
            return response()->json($resp, 400, []);
        }
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {

        $package = ModelsPackage::find($id);

        $resp = [
            'status' => 'ok',
            'message' => '',
            'data' => $package
        ];

        return response()->json($resp, 200, []);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //
        $package = ModelsPackage::find($id);


        try {
            $package->transaction_id =  $request->transaction_id;
            $package->customer_name =  $request->customer_name;
            $package->customer_code = $request->customer_code;
            $package->transaction_amount = $request->transaction_amount;
            $package->transaction_discount = $request->transaction_discount;
            $package->transaction_additional_field =  $request->transaction_additional_field;
            $package->transaction_payment_type = $request->transaction_payment_type;
            $package->transaction_state = $request->transaction_state;
            $package->transaction_code = $request->transaction_code;
            $package->transaction_order = $request->transaction_order;
            $package->location_id = $request->location_id;
            $package->organization_id = $request->organization_id;
            $package->created_at = $request->created_at;
            $package->updated_at = $request->updated_at;
            $package->transaction_payment_type_name = $request->transaction_payment_type_name;
            $package->transaction_cash_amount = $request->transaction_cash_amount;
            $package->transaction_cash_change = $request->transaction_cash_change;
            $package->customer_attribute = $request->customer_attribute;
            $package->connote = $request->connote;
            $package->connote_id = $request->connote_id;
            $package->origin_data = $request->origin_data;
            $package->destination_data = $request->destination_data;
            $package->koli_data = $request->koli_data;
            $package->custom_field = $request->custom_field;
            $package->currentLocation = $request->currentLocation;
            $package->save();

            $resp = [
                'status' => 'ok',
                'message' => 'data has been created',
                'data' => $request->all()
            ];
            return response()->json($resp, 201, []);
        } catch (\Throwable $e) {

            $resp = [
                'status' => 'error',
                'message' => $e,
                'data' => ''
            ];
            return response()->json($resp, 400, []);
        }
    }


    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        //
        $package = ModelsPackage::find($id);

        try {
            $package->delete();

            $resp = [
                'status' => 'ok',
                'message' => 'data has been created',
                'data' => ''
            ];

            return response()->json($resp, 200, []);
        } catch (\Throwable $th) {
            $resp = [
                'status' => 'error',
                'message' => $th,
                'data' => ''
            ];
            return response()->json($resp, 400, []);
        }
    }
}
