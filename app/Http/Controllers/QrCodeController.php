<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }
    public function generate(Request $request)
    {
        $text = $request->input('text', 'Default Text'); // Get the text from the request, default to 'Default Text'
        
        $qrCode = QrCode::size(200)->color(0, 0, 0)->generate($text);

        return view('qrcode', compact('qrCode'));
    }
}
