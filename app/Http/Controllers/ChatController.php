<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('pusher/form');
    }

    public function notifikasi()
    {
        return view('pusher/notifikasi');
    }

    public function kirim(Request $request)
    {
        $message = $request->input('pesan');

        // broadcast(new MessageSent($message))->toOthers();
        $data = [
            'id' => 1,
            'status' => $message,
        ];
        MessageSent::dispatch($data);

        return redirect()->route('pusher');
    }
}
