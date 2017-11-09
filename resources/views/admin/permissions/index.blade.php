@extends('admin.index')

@section('wrapper')
    <section class="panel">
        <header class="panel-heading">
            <h5>Permissions</h5>
            @can('admin.permissions.create')
                <a href="{{ route('admin.permissions.create') }}" class="btn btn-primary">
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
                @foreach($permissions as $permission)
                    <tr>
                        <td>{{ $permission->id }}</td>
                        <td>{{ $permission->alias }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->created_at }}</td>
                        <td>{{ $permission->updated_at }}</td>
                        <td>
                            @can('admin.permissions.edit')
                                <a href="{{ route('admin.permissions.edit',['permission' => $permission->id]) }}"
                                   class="btn btn-primary">
                                    <i class="fa fa-pencil-square-o"></i>
                                    edit
                                </a>
                            @endcan
                            @can('admin.permissions.destroy')
                                <form action="{{ route('admin.permissions.destroy',['permission' => $permission->id]) }}"
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
                    {{ $permissions->links() }}
                </div>
            </div>
        </div>
    </section>
@stop