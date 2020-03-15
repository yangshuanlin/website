<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\AesCrypt;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    protected $data;
    public function __construct(Request $request)
    {
    }
}
