@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="orders">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Tambah User</strong>
                        </div>
                        <div class="card-body">
                        <form action="/user/create/save" method="post">
                        @csrf
                            <div class="form-group">
                                <label>User Name</label>
                                <input name="name" type="text" class="form-control" placeholder="User Name">
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input name="email" type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Agree the terms and policy
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection