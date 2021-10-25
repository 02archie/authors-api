<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
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
     * Create on instance of authors
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all(); 
        return $this->successResponse($authors);
    }


    /**
     * Update the information of an existing author 
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'gender' => 'required|max:255|in:male,female',
            'country' => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $author = Author::create($request->all());

        return $this->successResponse($author);
    }

    /**
     * Return an authora especific
     * @return Illuminate\Http\Response
     */
    public function show($author_id)
    {
    }

    /**
     * Update the information of an existing author 
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author_id)
    {
    }

    /**
     * Remove an existing author 
     * @return Illuminate\Http\Response
     */
    public function destroy($author_id)
    {
    }
}
