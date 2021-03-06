<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bills;

class BillsController extends Controller
{
    public function index () {
        return response()->json([
            'error' => false,
            'data' => Bills::get()
        ], 200);
    }

    public function byUserID ( $user_id ) {
        $bill = Bills::where('user_id', $user_id)->get();

        if ( is_null($bill) ) {
            return response()->json([
                'error' => true,
                'message' => 'Bill not found'
            ], 404);
        }

        return response()->json([
            'error' => false,
            'data' => $bill
        ], 200);
    }

    public function store ( Request $request) {
        $bill = Bills::create($request->all());

        if ( is_null($bill) ) {
            return response()->json([
                'error' => true,
                'message' => 'Can not create bill'
            ], 404);
        }

        return response()->json([
            'error' => false,
            'data' => $bill
        ], 200);
    }

    public function update ( Request $request, $id ) {
        $bill = Bills::find($id);

        if ( is_null($bill) ) {
            return response()->json([
                'error' => true,
                'message' => 'Can not create bill'
            ], 404);
        }

        $bill->update($request->all());

        return response()->json([
            'error' => false,
            'data' => $bill
        ], 200);
    }

    public function delete ( $id ) {
        $bill = Bills::find($id);

        if ( is_null($bill) ) {
            return response()->json([
                'error' => true,
                'message' => 'Can not create bill'
            ], 404);
        }

        $bill->delete();

        return response()->json([
            'error' => false,
            'data' => 'Bill has been deleted'
        ], 200);
    }
}
