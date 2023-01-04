<?php

namespace App\Http\Controllers;

use App\DataTables\CategoriesDataTable;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param CategoriesDataTable $dataTable
     * @return Response
     */
    public function index(CategoriesDataTable $dataTable)
    {
        return $dataTable->render('categories.index');
    }
}
