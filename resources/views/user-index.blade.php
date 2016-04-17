@extends('layouts.app')

@section('content')

<!-- Current Users -->
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Users
                </div>

                <div class="panel-body">
                    @if (count($users) > 0)
                    <table class="table table-striped user-table">
                        <thead>
                            <th>User</th>
                            <th>&nbsp;</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="table-text" style="vertical-align: middle;">
                                        <div>
                                            <a href="{{ route('user.show', ['id' => $user->id]) }}">
                                                {{ $user->name }}
                                            </a>
                                        </div></td>

                                    <td>
                                        <!-- User Edit Button -->
                                        <a type="button" href="{{ route('user.edit', $user->id) }}" class="btn btn-default">
                                            <i class="fa fa-btn fa-edit"></i>Edit
                                        </a>
                                        
                                        <!-- User Delete Button -->
                                        <a type="button" class="btn btn-danger delete-btn" data-toggle="modal" data-target="#deleteModal" data-uid="{{ $user->id }}" data-uname="{{ $user->name }}">
                                            <i class="fa fa-btn fa-trash"></i>Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <p>No users found!</p>
                    @endif
                    <a href="{{ route('user.create') }}" type="submit" class="btn btn-success">
                        <i class="fa fa-btn fa-plus"></i>Add a User
                    </a>
                </div>
            </div>
    </div>
</div>

@endsection