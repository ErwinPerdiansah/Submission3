<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RepositoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $repositories = Repository::all();
        $data = [
            'repositories' => $repositories
        ]; 

        return view('repository.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('repository.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => ['required'],
            "descriptions" => ['required'],
            "year"  => ['required', 'numeric', 'min:2021', 'max:2025'],
            "author"  => ['required'],
        ]);

        Repository::create($request->all());
        return redirect()->route('repository.index')->with('success', $new->title . "berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = repository::where('nim',$id)->first();
        return view('repository.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        repository::where('nim',$id)->delete();
        return redirect()->to('repository')->with('success','Berhasil mendelete data');
    }
}
