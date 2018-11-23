@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                @yield('left-column')
            </div>

            <div class="col-xs-12 col-md-4">
               @yield('right-column')
            </div>
        </div>
    </div>
@endsection

