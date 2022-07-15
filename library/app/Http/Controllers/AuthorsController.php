<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AuthorsController extends Controller
{
    public function index()
    {
        return view('authors', [
            'authors' => DB::table('books')->pluck('author')
        ]);
    }
}
