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
                                <input type="text" name="name" id="user-name" class="form-control" value="{{ old('name') }}" placeholder="e.g. Luke Skywalker">
                            </div>
                        </div>
                        
                        <!-- User Email -->
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">E-mail</label>

                            <div class="col-sm-6">
                                <input type="text" name="email" id="user-email" class="form-control" value="{{ old('email') }}" placeholder="e.g. luke@rebels.com">
                            </div>
                        </div>
                        
                        <!-- User Birthday -->
                        <div class="form-group">
                            <label for="birthday" class="col-sm-3 control-label">Birthday</label>

                            <div class="col-sm-6">
                                <div class='input-group date' class='datepicker'>
                                    <input type='text' data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-end-date="0d" name="birthday" id="user-birthday" class="form-control"  value="{{ old('birthday') }}" placeholder="e.g. 2012-12-21">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- User Occupation -->
                        <div class="form-group">
                            <label for="occupation" class="col-sm-3 control-label">Occupation</label>

                            <div class="col-sm-6">
                                <select name="occupation" class="form-control" id="user-occupation" value="{{ old('occupation') }}">
                                    @foreach ($occupations as $key => $val)
                                        @if (old('occupation') == $key)
                                              <option value="{{ $key }}" selected>{{ $val }}</option>
                                        @else
                                              <option value="{{ $key }}">{{ $val }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <!-- User Notes -->
                        <div class="form-group">
                            <label for="notes" class="col-sm-3 control-label">Notes</label>

                            <div class="col-sm-6">
                                <input type="text" name="notes" id="user-notes" class="form-control" value="{{ old('notes') }}" placeholder="(optional)">
                            </div>
                        </div>

                        <!-- Add User Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-plus"></i>Add User
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection