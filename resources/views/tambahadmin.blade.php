@extends('index')
    @section('extraheader')
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">User</a></li>
                    <li><a href="#">Tambah User</a></li>
                </ol>
            </div>
    @endsection
@section('content')
    <div class="content">
                <div class="animated fadeIn">
                    <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Tambah Admin</div>
                        <div class="card-body card-block">
                            <form action="/user/registuser" method="post">
                                {{csrf_field()}}
                                    <input type="role" class="form-control" hidden>
                                    <input type="remember_token" class="form-control" hidden>  
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">Username</div>
                                            <input type="text" name="name" class="form-control" placeholde="Username">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">Email</div>
                                            <input type="email" name="email" class="form-control" placeholde="Email">
                                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">Password</div>
                                            <input type="password" name="password" class="form-control" placeholde="password">
                                            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-actions form-group">
                                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection