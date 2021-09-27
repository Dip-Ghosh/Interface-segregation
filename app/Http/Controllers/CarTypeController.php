<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarTypeValidationRequest;
use App\Models\CarType;
use App\Service\Settings\CarTypeService;


class CarTypeController extends Controller
{

    protected $carType;

    public function __construct(CarTypeService  $carType)
    {
        $this->carType = $carType;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->carType->all();
        return view('settings.carTypes.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings.carTypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CarTypeValidationRequest $request)
    {
        $this->carType->store($request->all());
        return redirect()->route('car-types.index')->with('success','Car Type created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->carType->edit($id);
        return view('settings.carTypes.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(CarTypeValidationRequest $request, $id)
    {
        $this->carType->update($request->all(),$id);
        return redirect()->route('car-types.index')->with('success','Car type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->carType->delete($id);
        return redirect()->back()->with('success','Car Type deleted Successfully');


    }
}
