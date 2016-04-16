@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New User
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New User Form -->
                    <form action="/user" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- User Name -->
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="user-name" class="form-control" value="{{ old('user') }}">
                            </div>
                        </div>
                        
                        <!-- User Email -->
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">E-mail</label>

                            <div class="col-sm-6">
                                <input type="text" name="email" id="user-email" class="form-control" value="{{ old('user') }}">
                            </div>
                        </div>
                        
                        <!-- User Birthday -->
                        <div class="form-group">
                            <label for="birthday" class="col-sm-3 control-label">Birthday</label>

                            <div class="col-sm-6">
                                <input type="text" name="birthday" id="user-birthday" class="form-control" value="{{ old('user') }}">
                            </div>
                        </div>
                        
                        <!-- User Occupation -->
                        <div class="form-group">
                            <label for="occupation" class="col-sm-3 control-label">Occupation</label>

                            <div class="col-sm-6">
                                <input type="text" name="occupation" id="user-occupation" class="form-control" value="{{ old('user') }}">
                            </div>
                        </div>
                        
                        <!-- User Notes -->
                        <div class="form-group">
                            <label for="notes" class="col-sm-3 control-label">Notes</label>

                            <div class="col-sm-6">
                                <input type="text" name="notes" id="user-notes" class="form-control" value="{{ old('user') }}">
                            </div>
                        </div>

                        <!-- Add User Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add User
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current User -->
            @if (count($users) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Users
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped user-table">
                            <thead>
                                <th>User</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="table-text"><div>{{ $user->name }}</div></td>

                                        <!-- User Delete Button -->
                                        <td>
                                            <form action="/user/{{ $user->id }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection