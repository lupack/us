<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    //
    public function fh(Request $request){
   			$req = $request->oid;
   			dd($req);
    }
}
