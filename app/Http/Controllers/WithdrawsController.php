<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Withdraws;

class WithdrawsController extends Controller
{
    public function index () {
        return response()->json([
            'error' => false,
            'data' => Withdraws::get()
        ], 200);
    }

    public function byUserID( $id ) {
        $withdraw = Withdraws::find($id);

        if ( is_null($withdraw) ) {
            return response()->json([
                'error' => true,
                'message' => 'Can not create withdraw'
            ], 500);
        }

        return response()->json([
            'error' => true,
            'data' => $withdraw
        ], 200);
    }

    public function store ( Request $request) {
        $withdraw = Withdraws::create($request->all());

        if ( is_null($withdraw) ) {
            return response()->json([
                'error' => true,
                'message' => 'Can not create withdraw'
            ], 500);
        }

        return response()->json([
            'error' => true,
            'data' => $withdraw
        ], 200);
    }

    public function update ( Request $request, $id ) {
        $withdraw = Withdraws::find($id);

        if ( is_null($withdraw) ) {
            return response()->json([
                'error' => true,
                'message' => 'Can not create withdraw'
            ], 500);
        }

        $withdraw->update($request->all());

        return response()->json([
            'error' => true,
            'data' => $withdraw
        ], 200);
    }

    public function delete ( $id ) {
            $withdraw = Withdraws::find($id);

            if ( is_null($withdraw) ) {
                return response()->json([
                    'error' => true,
                    'message' => 'Can not create withdraw'
                ], 500);
            }

            $withdraw->delete();

            return response()->json([
                'error' => true,
                'data' => 'withdraw has been deleted'
            ], 200);
    }
}
