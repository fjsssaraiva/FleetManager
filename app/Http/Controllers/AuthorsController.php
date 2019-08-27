<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAuthorRequest;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* no pagination
		$authors = Author::all();
        return view('authors.index', compact('authors'));
		*/
		$authors = Author::paginate(5);
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$this->authorize('create', Author::class);
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuthorRequest $request)
    {
		$this->authorize('create', Author::class);
        Author::create($request->all());
        //return redirect()->route('authors.index');
		return redirect()->route('authors.index')->with(['message' => 'Brand added successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		//console.log('show method');
		$author = Author::findOrFail(1);
        $vehiclemodels = $author->vehiclemodels;
		//$vehiclemodels = Author::find($id)->vehiclemodels;
		return view('authors.single', compact('author', 'vehiclemodels'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$this->authorize('update', Author::class);
        $author = Author::findOrFail($id);
		//$vehiclemodels = $author->vehiclemodels;
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$this->authorize('update', Author::class);
        $author = Author::findOrFail($id);
        $author->update($request->all());
        //return redirect()->route('authors.index');
		return redirect()->route('authors.index')->with(['message' => 'Brand updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$this->authorize('delete', Author::class);
        $author = Author::findOrFail($id);
        $author->delete();
        return redirect()->route('authors.index')->with(['message' => 'Brand deleted successfully']);
    }
}
