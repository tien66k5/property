<?php

namespace Modules\Property\App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('property::index');
    }

    // Other methods can be added here as needed
    public function create()
    {
        // Logic for creating a property can be added here
    }
    public function store(Request $request)
    {
        // Logic for storing a new property can be added here
    }
    public function show($id)
    {
        return view('property::components.show', ['id' => $id]);
    }
    public function edit($id)
    {
        // Logic for editing a specific property can be added here
    }
    public function update(Request $request, $id)
    {
        // Logic for updating a specific property can be added here
    }
    public function destroy($id)
    {
        // Logic for deleting a specific property can be added here
    }
    public function chothue(){
        return view('property::components.cho-thue');
    }
    public function duan(){
        return view('property::components.du-an');
    }
    
}
