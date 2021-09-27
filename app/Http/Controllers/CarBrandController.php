<?php

namespace App\Http\Controllers;

use App\Models\CarBrand;
use App\Repository\Setting\CarTypeInterface;
use Illuminate\Http\Request;
use App\Service\Settings\CarBrandService;
use App\Service\Settings\CarTypeService;
use App\Http\Requests\CarBrandValidationRequest;


class CarBrandController extends Controller
{
    private $carBrand;
    private $carType;

    public function __construct(CarBrandService $carBrand,CarTypeService $carType)
    {
        $this->carBrand = $carBrand;
        $this->carType = $carType;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->carBrand->all();
        return view('settings.carBrands.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $types = $this->carType->all();
        return view('settings.carBrands.create',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CarBrandValidationRequest $request)
    {
        $this->carBrand->store($request->all());
        return redirect()->route('car-brands.index')->with('success','Car brand created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->carBrand->edit($id);
        $types = $this->carType->all();
        return view('settings.carBrands.edit',compact('data','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CarBrandValidationRequest $request, $id)
    {
        $this->carBrand->update($request->all(),$id);
        return redirect()->route('car-brands.index')->with('success','Car brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->carBrand->delete($id);
        return redirect()->back()->with('success','Car brand deleted Successfully');


    }

    public function carBrandValue(Request $request){

        $carBrand = $this->carBrand->fetchCarTypeWiseCarBrand($request->car_type_id);

        return response()->json([
            'carBrand'=>$carBrand
        ]);
    }



}
