@extends('layouts.admin')

@section('title')
<title>Home</title>
@endsection

@section('content')
<div class="content-wrapper">
    @include('partials.content-header', ['name' => 'Home', 'key' => 'home'])

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    Trang chủ
                </div>
            </div>
        </div>
    </div>
</div>
@endsection