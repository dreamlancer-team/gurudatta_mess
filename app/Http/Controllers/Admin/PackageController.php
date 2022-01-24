<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Http\Requests\Admin\StorePackageRequest;
use App\Http\Requests\Admin\UpdatePackageRequest;
use App\Models\Meal;
use App\Models\User;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::with('meal')->get();
        $meals = Meal::all('id', 'name');
        return view('admin.package.index', compact('packages', 'meals'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\StorePackageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePackageRequest $request)
    {
        if ($request->validated()) {
            Package::create([
                'name' => $request->name,
                'slug' => slug($request->name),
                'meal_id' => $request->meal,
                'type' => $request->type,
                'price' => $request->price,
            ]);
        }

        return back()->with('success', 'Package created successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\UpdatePackageRequest  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePackageRequest $request, Package $package)
    {
        $package->update([
            'name' => $request->name,
            'slug' => slug($request->name),
            'meal_id' => $request->meal,
            'type' => $request->type,
            'price' => $request->price,
        ]);

        return back()->with('success', 'Package updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        try {
            $package->delete();

            return back()->with('success', 'Package deleted successfully');
        } catch (\Illuminate\Database\QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->with('error', 'Package can\'t be deleted because it was assign to Customer');
            }
        }
    }
}
