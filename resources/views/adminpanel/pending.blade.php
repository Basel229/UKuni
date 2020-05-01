@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Account Status</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-danger" role="alert">
                    Hello {{ auth()->user()->name }}! Your Account status is  {{ auth()->user()->status}}. Please talk to your admin to approve your account in order to access your account.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
