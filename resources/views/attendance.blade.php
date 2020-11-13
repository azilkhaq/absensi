@extends('layouts.layouts')
@section('content')
<section class="content-header">
    <h1>
        Attendance
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <!-- <button type="button" data-toggle="modal" data-target="#checkin"
                        class="btn btn-success btn-sm">Check In <i class="fa fa-calendar-check-o"></i>
                    </button>&nbsp;
                    <button type="button" data-toggle="modal" data-target="#modal-user"
                        class="btn btn-primary btn-sm">Check Out <i class="fa fa-calendar-times-o"></i>
                    </button>&nbsp; -->
                    <button type="button" data-toggle="modal" data-target="#absence"
                        class="btn btn-danger btn-sm">Absence <i class="fa fa-calendar-minus-o"></i>
                    </button>
                </div>
                <div class="box-body">
                    <table id="user" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Absent From</th>
                                <th>Absent To</th>
                                <th>Cutoff</th>
                                <th>Attachment</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($attendances as $row)
                            <tr>
                                <td>{{ $row->absent_from }}</td>
                                <td>{{ $row->absent_to }}</td>
                                <td>{{ $row->cutoff }}</td>
                                <td>{{ $row->attachment }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Absent From</th>
                                <th>Absent To</th>
                                <th>Cutoff</th>
                                <th>Attachment</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="modal fade" id="absence">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Form CheckIn</h3>
                                </div>
                                <form role="form" action="/postAttendance" method="post">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>
                                        <div class="form-group">
                                            <label for="Absent From">Absent From</label>
                                            <input type="date" name="absent_from" class="form-control" required
                                                autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="Absent To">Absent To</label>
                                            <input type="date" name="absent_to" class="form-control" required
                                                autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="Cutoff">Cutoff</label>
                                            <select class="form-control" name="cutoff">
                                                <option value=""></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
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
