<?php

namespace App\Http\Controllers\Biz;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class CreateNewBusinessController extends Controller
{
    public function create(){
        return view('business.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'industry' => ['required', 'string', 'max:50']
        ]);

        Auth::user()->businesses()->create($data);

        return to_route('business.index');
    }
}
