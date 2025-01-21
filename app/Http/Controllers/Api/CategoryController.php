<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => 200,
            'message' => 'Welcome to Laravel API Development!',
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return response()->json([
            'form_requests' => $request->all(),
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
