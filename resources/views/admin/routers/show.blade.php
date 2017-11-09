@extends('admin.index')

@section('wrapper')
    <section class="panel">
        <header class="panel-heading">
            <h5>
                <a href="{{ route('admin.routers.index') }}" class="top-back">
                    <i class="fa fa-arrow-circle-left"></i>
                </a>
                Router childers the: <strong>{{ $router->name }}</strong>
            </h5>
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
                @foreach($childers as $childer)
                    <tr>
                        <td>{{ $childer->id }}</td>
                        <td><i class="fa {{ $childer->icon }}"></i></td>
                        <td>{{ $childer->name }}</td>
                        <td>{{ $childer->slug }}</td>
                        <td>{{ $childer->weight }}</td>
                        <td>{{ $childer->created_at }}</td>
                        <td>{{ $childer->updated_at }}</td>
                        <td>

                            @can('admin.routers.edit')
                                <a href="{{ route('admin.routers.edit',['router' => $childer->id]) }}"
                                   class="btn btn-primary">
                                    <i class="fa fa-pencil-square-o"></i>
                                    edit
                                </a>
                            @endcan

                            @can('admin.routers.destroy')
                                <form action="{{ route('admin.routers.destroy',['router' => $childer->id]) }}"
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
                    {{ $childers->links() }}
                </div>
            </div>
        </div>
    </section>
@stop