@extends('admin.index')

@section('wrapper')
    <section class="panel">
        <header class="panel-heading">
            <h5>Users</h5>
            @can('admin.users.create')
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus" aria-hidden="true"></i> Create
                </a>
            @endcan
        </header>
        <div class="panel-body">
            <table class="table table-no-more table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created Time</th>
                    <th>Updated Time</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td>
                            @can('admin.users.edit')
                                <a href="{{ route('admin.users.edit',['user' => $user->id]) }}" class="btn btn-primary">
                                    <i class="fa fa-pencil-square-o"></i>
                                    edit
                                </a>
                            @endcan

                            @can('admin.users.destroy')
                                <form action="{{ route('admin.users.destroy',['user' => $user->id]) }}"
                                      class="del_form">
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i>
                                        delete
                                    </button>
                                    {{ method_field('DELETE') }}
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-12 text-center">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </section>
@stop