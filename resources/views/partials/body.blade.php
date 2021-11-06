@extends('brackets/admin-ui::admin.layout.master')

@section('header')
    @include('partials.header')
@endsection

@section('content')

    <div class="app-body">
        <main class="main @guest main-guest @endguest">
            <div class="container-fluid" id="app" :class="{'loading': loading}">
                @yield('body')
            </div>
        </main>
    </div>
@endsection

@section('bottom-scripts')
    @parent
@endsection
