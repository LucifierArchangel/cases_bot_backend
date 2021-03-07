<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BotUsers;

class BotUserController extends Controller
{
    public function index () {
        $bot_users = BotUsers::get();

        return response()->json([
            'error' => false,
            'data' => $bot_users
        ], 200);
    }

    public function byID ( $id ) {
        $bot_user = BotUsers::where('id', $id)->get();

        if ( is_null($bot_user) ) {
            return response()->json([
                'error' => true,
                'message' => 'User not found'
            ], 404);
        }

        return response()->json([
            'error' => false,
            'data' => $bot_user
        ], 200);
    }

    public function byUserID ( $user_id ) {
        $bot_user = BotUsers::where('user_id', $user_id)->get();

        if ( is_null($bot_user) ) {
            return response()->json([
                'error' => true,
                'message' => 'User not found'
            ], 404);
        }

        return response()->json([
            'error' => false,
            'data' => $bot_user
        ], 200);
    }

    public function byReferID ( $user_id ) {
        $bot_users = BotUsers::where('refer_id', $user_id)->get();

        if ( is_null($bot_users) ) {
            return response()->json([
                'error' => true,
                'message' => 'User not found'
            ], 404);
        }

        return response()->json([
            'error' => false,
            'data' => $bot_users
        ], 200);
    }

    public function store ( Request $request) {
        $bot_user = BotUsers::create($request->all());

        if ( is_null($bot_user) ) {
            return response()->json([
                'error' => true,
                'message' => 'Can not create user'
            ], 404);
        }

        return response()->json([
            'error' => false,
            'data' => $bot_user
        ], 200);
    }

    public function update ( Request $request, $id ) {
        $bot_user = BotUsers::find($id);

        if ( is_null($bot_user) ) {
            return response()->json([
                'error' => true,
                'message' => 'User not found'
            ], 404);
        }

        $bot_user->update($request->all());

        return response()->json([
            'error' => false,
            'data' => $bot_user
        ], 200);
    }

    public function delete ( $id ) {
        $bot_user = BotUsers::find($id);

        if ( is_null($bot_user) ) {
            return response()->json([
                'error' => true,
                'message' => 'User not found'
            ], 404);
        }

        $bot_user->delete();

        return response()->json([
            'error' => false,
            'data' => 'User has been deleted'
        ], 200);
    }
}
