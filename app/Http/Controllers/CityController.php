<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationValidationRequest;
use App\Models\Location;
use App\Service\Settings\LocationServiceInterface;
class CityController extends Controller
{

    protected $location;

    public function __construct(LocationServiceInterface $location)
    {
        $this->location = $location;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->location->all();
        return view('settings.locations.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings.locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LocationValidationRequest $request)
    {
        $this->location->store($request->all());
        return redirect()->route('locations.index')->with('success','Location created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->location->edit($id);
        return view('settings.locations.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(LocationValidationRequest $request, $id)
    {
        $this->location->update($request->all(),$id);
        return redirect()->route('locations.index')->with('success','Location updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->location->delete($id);
        return redirect()->back()->with('success','Location deleted Successfully');


    }
}
