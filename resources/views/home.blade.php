@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-danger" role="alert">
                    You are logged in "{{ auth()->user()->name }}" & your account status is {{ auth()->user()->status}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
