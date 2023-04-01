<?php

namespace Rish0593\Testing\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Rish0593\Testing\Models\Testing;

class TestingController extends Controller
{
    public function index(Request $request)
    {
        $lists = Testing::get();

        return view('testing::index', compact('lists'));
    }
}
