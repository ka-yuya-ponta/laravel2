<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Person;

class PersonController extends Controller
{
    public function index()
    {
        return '建物です';
    }
    public function room($room)
    {
        return '部屋番号は'.$room.'です';
    }
}
