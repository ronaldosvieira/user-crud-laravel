@extends('layouts.app')

@section('content')

<!-- Current Users -->
<div class="container">
        <div class="col-sm-offset-2 col-sm-8">
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
                                        <td class="table-text">
                                            <div>
                                                <a href="{{ route('user.show', ['id' => $user->id]) }}">
                                                    {{ $user->name }}
                                                </a>
                                            </div></td>

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