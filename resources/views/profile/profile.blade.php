@extends('layouts.main')
@section('title')
    {{__('Profile')}}
@endsection
@section('content')
    <div class="container light-style flex-grow-1 container-p-y my-3">

        <h4 class="font-weight-bold py-3 mb-4">
            Account Details
        </h4>

        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Account Information</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">

                            <div class="container my-3">
                                <div class="main-body">
                                    <div class="row gutters-sm">
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex flex-column align-items-center text-center">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                                        <div class="mt-3">
                                                            <h4>{{$user->name}}</h4>
                                                            <p class="text-secondary mb-1">{{$user->email}}</p>
                                                            <p class="text-muted font-size-sm"><b>{{$user->is_admin=1?'Admin':'Customer'}}</b></p>
                                                        </div>
                                                    </div>
                                                    <a class="button" href="{{route('logout')}}"
                                                        onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                        <i class='bx bx-log-out-circle'></i>
                                                        <span>Sign Out</span>
                                                        </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <h1>Customer Invoices or Shopping section</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card my-3 mx-3">
                                <div class="card-body">
                                    <h1>More details about the account here</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
