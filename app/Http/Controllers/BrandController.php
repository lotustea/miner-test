<?php

namespace App\Http\Controllers;

use App\DataTables\BrandsDataTable;
use App\DataTables\UsersDataTable;
use Illuminate\Http\Response;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param BrandsDataTable $dataTable
     * @return Response
     */
    public function index(BrandsDataTable $dataTable)
    {
        return $dataTable->render('brands.index');
    }
}
