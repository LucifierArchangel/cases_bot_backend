<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaymentSystems;

class PaymentSystemsController extends Controller {
    public function index () {
        $payment_systems = PaymentSystems::get();

        if ( is_null($payment_systems) ) {
            return response()->json([
                'error' => true,
                'message' => 'Payment systems not found!!!'
            ], 404);
        }

        return response()->json([
            'error' => false,
            'data' => $payment_systems
        ], 200);
    }

    public function store ( Request $request ) {
        $payment_system = PaymentSystems::create($request->all());

        if ( is_null($payment_system) ) {
            return response()->json([
                'error' => true,
                'message' => 'Can not create!!!'
            ], 404);
        }

        return response()->json([
            'error' => false,
            'data' => $payment_system
        ], 200);
    }

    public function update ( Request $request, $id ) {
        $payment_system = PaymentSystems::find($id);

        if ( is_null($payment_system) ) {
            return response()->json([
                'error' => true,
                'message' => 'Can not create!!!'
            ], 404);
        }

        $payment_system->update($request->all());

        return response()->json([
            'error' => false,
            'data' => $payment_system
        ], 200);
    }

    public function delete ( $id ) {
        $payment_system = PaymentSystems::find($id);

        if ( is_null($payment_system) ) {
            return response()->json([
                'error' => true,
                'message' => 'Can not create!!!'
            ], 404);
        }

        $payment_system->delete();

        return response()->json([
            'error' => false,
            'data' => 'Payment system has been deleted'
        ], 200);
    }
}
