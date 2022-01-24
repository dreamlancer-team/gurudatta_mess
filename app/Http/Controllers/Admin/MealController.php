<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Meal;
use App\Http\Requests\Admin\StoreMealRequest;
use App\Http\Requests\Admin\UpdateMealRequest;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::all();
        return view('admin.meal.index', compact('meals'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\StoreMealRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMealRequest $request)
    {
        if ($request->validated()) {
            Meal::create([
                'name' => $request->name,
                'slug' => slug($request->name)
            ]);
        }

        return back()->with('success', 'Meal created successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\UpdateMealRequest  $request
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMealRequest $request, Meal $meal)
    {
        if ($request->validated()) {
            $meal->update([
                'name' => $request->name,
                'slug' => slug($request->name)
            ]);
        }

        return back()->with('success', 'Meal updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        try {
            $meal->delete();

            return back()->with('success', 'Meal deleted successfully');
        } catch (\Illuminate\Database\QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->with('error', 'Meal can\'t be deleted because it was used in Package');
            }
        }
    }
}
