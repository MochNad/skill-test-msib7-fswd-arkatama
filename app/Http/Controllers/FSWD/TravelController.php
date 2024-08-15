<?php

namespace App\Http\Controllers\FSWD;

use App\DataTables\FSWD\TravelDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    protected $modules = ['travel'];
    
    public function index(TravelDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.fswd.travel.index');
    }
}
