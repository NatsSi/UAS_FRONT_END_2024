@extends('layouts.app')

@section('content')
<div class="container" ng-controller="MainController">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p>Welcome</p>
            <div class="card">
                <p>{{ pesan }}</p>
                <div ng-view>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection