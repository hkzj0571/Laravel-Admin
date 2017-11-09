@extends('admin.index')

@section('wrapper')
    <section class="panel">
        <header class="panel-heading">
            <h5>Roles</h5>
            @can('admin.roles.create')
                <a href="{{ route('admin.roles.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus" aria-hidden="true"></i> Create
                </a>
            @endcan
        </header>
        <div class="panel-body">
            <table class="table table-no-more table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Alias</th>
                    <th>Name</th>
                    <th>Created Time</th>
                    <th>Updated Time</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->alias }}</td>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->created_at }}</td>
                        <td>{{ $role->updated_at }}</td>
                        <td>
                            @can('admin.roles.edit')
                                <a href="{{ route('admin.roles.edit',['role' => $role->id]) }}" class="btn btn-primary">
                                    <i class="fa fa-pencil-square-o"></i>
                                    edit
                                </a>
                            @endcan
                            @can('admin.roles.destroy')
                                <form action="{{ route('admin.roles.destroy',['role' => $role->id]) }}"
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
                    {{ $roles->links() }}
                </div>
            </div>
        </div>
    </section>
@stop