<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return a list of categories
     * @return Illuminate\Http\Response
     */
    public function index(){

    }

    /**
     * Create a new instance of categories
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){

    }

    /**
     * Return a specific instance of categories
     * @param int $category The ID the Category to retrieve
     * @return Illuminate\Http\Response
     */
    public function show($category){

    }

    /**
     * Update a specific instance of categories
     * @param int $category The ID the Category to retrieve
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function update(Request $request ,$category){

    }

    /**
     * Delete a specific instance of categories
     * @param int $category The ID the Category to retrieve
     * @return Illumnate\Http\Response
     */
    public function destroy($category){

    }


}
