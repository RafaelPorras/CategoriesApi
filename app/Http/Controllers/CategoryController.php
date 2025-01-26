<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Models\Category;


class CategoryController extends Controller
{
    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {


    }

    /**
     * Return a list of categories
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //Get all the categories
        $categories = Category::all();

        return $this->successResponse($categories);
    }

    /**
     * Create a new instance of categories
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        //Rules for creating a Category
        $rules = [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ];

        //validate the request
        $this->validate($request,$rules);

        //Create a new category
        $category = Category::create($request->all());

        //return the new category
        return $this->successResponse($category);

    }

    /**
     * Return a specific instance of categories
     * @param int $category The ID the Category to retrieve
     * @return \Illuminate\Http\Response
     */
    public function show($category){

        //Find a specific category
        $category = Category::findOrFail($category);

        //Return a specific category
        return $this->successResponse($category);

    }

    /**
     * Update a specific instance of categories
     * @param int $category The ID the Category to retrieve
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$category){
        //rules for updating a category
        $rules = [
            'name' => 'max:255',
            'description' => 'max:255',
        ];

        //Validate the request
        $this->validate($request,$rules);


        //Find a specific category
        $category = Category::findOrFail($category);

         //Update the category
         $category->fill($request->all());

        //Check if category has changed
        if($category->isClean()){
            return $this->errorResponse('At least one value must change',Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        //save the category
        $category->save();

        //Return the category
        return $this->successResponse($category);
    }


    /**
     * Delete a specific instance of categories
     * @param int $category The ID the Category to retrieve
     * @return \Illumnate\Http\Response
     */
    public function destroy($category){
        //find a specific category
        $category = Category::findOrFail($category);

        //Delete the finded category
        $category->delete();

        //return the deleted category
        return $this->successResponse($category);

    }


}
