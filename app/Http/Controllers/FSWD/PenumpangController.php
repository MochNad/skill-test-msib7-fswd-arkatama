<?php

namespace App\Http\Controllers\FSWD;

use App\DataTables\FSWD\PenumpangDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenumpangController extends Controller
{
    protected $modules = ['penumpang'];

    public function index(PenumpangDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.fswd.penumpang.index');
    }
}
