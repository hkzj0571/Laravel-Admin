@extends('admin.index')

@section('wrapper')
    <section class="panel">
        <header class="panel-heading">
            <h5>Routers</h5>
            @can('admin.routers.create')
                <a href="{{ route('admin.routers.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus" aria-hidden="true"></i> Create
                </a>
            @endcan
        </header>
        <div class="panel-body">
            <table class="table table-no-more table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Icon</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Weight</th>
                    <th>Created Time</th>
                    <th>Updated Time</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($routers as $router)
                    <tr>
                        <td>{{ $router->id }}</td>
                        <td><i class="fa {{ $router->icon }}"></i></td>
                        <td>{{ $router->name }}</td>
                        <td>{{ $router->slug }}</td>
                        <td>{{ $router->weight }}</td>
                        <td>{{ $router->created_at }}</td>
                        <td>{{ $router->updated_at }}</td>
                        <td>
                            @can('admin.routers.show')
                                <a href="{{ route('admin.routers.show',['router' => $router->id]) }}"
                                   class="btn btn-info">
                                    <i class="fa fa-eye"></i>
                                    show
                                </a>
                            @endcan

                            @can('admin.routers.edit')
                                <a href="{{ route('admin.routers.edit',['router' => $router->id]) }}"
                                   class="btn btn-primary">
                                    <i class="fa fa-pencil-square-o"></i>
                                    edit
                                </a>
                            @endcan

                            @can('admin.routers.destroy')
                                <form action="{{ route('admin.routers.destroy',['router' => $router->id]) }}"
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
                    {{ $routers->links() }}
                </div>
            </div>
        </div>
    </section>
@stop