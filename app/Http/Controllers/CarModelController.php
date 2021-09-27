<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use App\Service\Settings\CarModelService;
use App\Http\Requests\CarModelValidationRequest;

class CarModelController extends Controller
{
    protected $carModel;

    public function __construct(CarModelService $carModel)
    {
        $this->carModel = $carModel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->carModel->all();
        return view('settings.carModels.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings.carModels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CarModelValidationRequest $request)
    {
        $this->carModel->store($request->all());
        return redirect()->route('car-models.index')->with('success','Car Model created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->carModel->edit($id);
        return view('settings.carModels.edit',compact('data'));
    }

//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Product  $product
//     * @return \Illuminate\Http\Response
//     */
    public function update(CarModelValidationRequest $request, $id)
    {
        $this->carModel->update($request->all(),$id);
        return redirect()->route('car-models.index')->with('success','Car Model updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $bank = $this->carModel->delete($id);
        return redirect()->back()->with('success','Car Model deleted Successfully');

    }

}
