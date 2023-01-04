<?php

namespace App\Http\Controllers;

use App\DataTables\BrandsDataTable;
use App\DataTables\ProductsDataTable;

use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param ProductsDataTable $dataTable
     * @return Response
     */
    public function index(ProductsDataTable $dataTable)
    {
        return $dataTable->render('products.index');
    }

}
