<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reason;
use App\Http\Requests\Admin\StoreReasonRequest;
use App\Http\Requests\Admin\UpdateReasonRequest;

class ReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reasons = Reason::latest()->get();
        return view('admin.reason.index', compact('reasons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\StoreReasonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReasonRequest $request)
    {
        if ($request->validated()) {
            Reason::create([
                'name' => $request->name,
                'slug' => slug($request->name)
            ]);
        }

        return back()->with('success', 'Reason created successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\UpdateReasonRequest  $request
     * @param  \App\Models\Reason  $reason
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReasonRequest $request, Reason $reason)
    {
        if ($request->validated()) {
            $reason->update([
                'name' => $request->name,
                'slug' => slug($request->name)
            ]);
        }

        return back()->with('success', 'Reason updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reason  $reason
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reason $reason)
    {
        $reason->delete();

        return back()->with('success', 'Reason deleted successfully');
    }
}
