@extends('layouts.layouts')
@section('content')
<section class="content-header">
    <h1>
        Users
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <button type="button" data-toggle="modal" data-target="#modal-user"
                        class="btn btn-primary btn-sm">Tambah <i class="fa fa-plus"></i>
                    </button>
                </div>
                <div class="box-body">
                    <table id="user" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Phone</th>
                                <th>Adress</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->role }}</td>
                                <td>{{ $row->phone }}</td>
                                <td>{{ $row->address }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Phone</th>
                                <th>Adress</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="modal fade" id="modal-user">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Form Tambah Users</h3>
                                </div>
                                <form role="form" action="/usersCreate" method="post">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="Name">Name</label>
                                            <input type="text" name="name" class="form-control" required
                                                autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input type="email" name="email" class="form-control" required
                                                autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="Password">Password</label>
                                            <input type="password" name="password" class="form-control" required
                                                autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="Role">Role</label>
                                            <select class="form-control" name="role">
                                                <option value=""></option>
                                                <option value="user">User</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="Phone">Phone</label>
                                            <input type="text" name="phone" class="form-control" required
                                                autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Adress</label>
                                            <textarea class="form-control" name="address"></textarea>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
