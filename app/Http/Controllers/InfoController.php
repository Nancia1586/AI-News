<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;

// Route::get('/test', function () {
//     return view('myhome',
//         [
//             'id'=>'1'
//         ]);
// });

class InfoController extends Controller
{
    public function list(Request $request)
    {
        $info = Info::all();
        return view('front_office.liste',[
            'info' => $info
        ]);
    }
}
