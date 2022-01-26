@extends('admin.layout.app')

@push('main')
    <h1>Dashboard</h1>

    <div class="col-md-12 mt-10">
        <div class="row">
            <div class="col-xl-3">
                <x-widget.stat bg='primary' icon='users' count='{{$customers}}' title='Total Users'></x-widget.stat>
            </div>
            <div class="col-xl-3">
                <x-widget.stat bg='success' icon='users' count='{{$active}}' title='Active Users'></x-widget.stat>
            </div>
            <div class="col-xl-3">
                <x-widget.stat bg='danger' icon='users' count='{{$deactive}}' title='Deactive Users'></x-widget.stat>
            </div>
            <div class="col-xl-3">
                <x-widget.stat bg='warning' icon='users' count='{{$delivery_boys}}' title='Delievery Boy'></x-widget.stat>
            </div>
        </div>
    </div>
    
@endpush