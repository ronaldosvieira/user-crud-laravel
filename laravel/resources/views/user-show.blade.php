@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Show User
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New User Form -->
                    <form action="" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- User Name -->
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Name</label>

                            <div class="col-sm-6">
                                <label class="control-label">{{ $user->name }}</label>
                            </div>
                        </div>
                        
                        <!-- User Email -->
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">E-mail</label>

                            <div class="col-sm-6">
                                <label class="control-label">{{ $user->email }}</label>
                            </div>
                        </div>
                        
                        <!-- User Birthday -->
                        <div class="form-group">
                            <label for="birthday" class="col-sm-3 control-label">Birthday</label>

                            <div class="col-sm-6">
                                <div class='input-group date' class='datepicker'>
                                    <label class="control-label">{{ $user->birthday }}</label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- User Occupation -->
                        <div class="form-group">
                            <label for="occupation" class="col-sm-3 control-label">Occupation</label>

                            <div class="col-sm-6">
                                <label class="control-label">{{ $user->occupation }}</label>
                            </div>
                        </div>
                        
                        <!-- User Notes -->
                        <div class="form-group">
                            <label for="notes" class="col-sm-3 control-label">Notes</label>

                            <div class="col-sm-6">
                                <label class="control-label">{{ $user->notes }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <!-- Add Edit Button -->
                                <a class="btn btn-default" href="{{ route('user.edit', [ 'id' => $user->id]) }}">
                                    <i class="fa fa-btn fa-edit"></i>Edit
                                </a>
                                <!-- User Delete Button -->
                                <a type="button" class="btn btn-danger delete-btn" data-toggle="modal" data-target="#deleteModal" data-uid="{{ $user->id }}" data-uname="{{ $user->name }}">
                                    <i class="fa fa-btn fa-trash"></i>Delete
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection