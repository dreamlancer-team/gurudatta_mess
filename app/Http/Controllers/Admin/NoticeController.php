<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Http\Requests\Admin\StoreNoticeRequest;
use App\Models\User;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::latest()->get();

        return view('admin.notice.index', compact('notices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\StoreNoticeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNoticeRequest $request)
    {

        $image = null;
        if ($request->hasFile('image')) {
            $request->image->store('notice', 'public');
            $image = $request->image->hashName();
        }

        $notice = Notice::create([
            'title' => $request->title,
            'message' => $request->message,
            'image' => $image,
        ]);

        $notice->users()->sync(getActiveUsersIds());

        return back()->with('success', 'Notice send');
    }
}
