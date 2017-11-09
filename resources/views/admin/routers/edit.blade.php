@extends('admin.index')

@section('wrapper')
    <section class="panel">
        <header class="panel-heading">
            <h5>
                <a href="{{ route('admin.routers.index') }}" class="top-back">
                    <i class="fa fa-arrow-circle-left"></i>
                </a>
                Edit for：<strong>{{ $router->name }}</strong>
            </h5>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <form class="form-horizontal tasi-form" id="Task">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-muted">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="{{ $router->name }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-muted">Slug</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="slug" value="{{ $router->slug }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-muted">Icon</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="icon" value="{{ $router->icon }}">
                                <p class="help-block">Please use <a href="http://www.fontawesome.com.cn/icons-ui/" target="_blank">Font-Awesome</a> the icon</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-muted">Weight</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="weight" value="{{ $router->weight }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-muted">Parent</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="parent_id">
                                    <option value="0" {{ $router->parent_id == 0 ? 'selected' : '' }}>This is top router</option>
                                    @foreach($routers as $route)
                                        <option value="{{ $route->id }}" {{ $router->parent_id == $route->id ? 'selected' : '' }}>{{ $route->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="btn btn-sm btn-primary">
                                    <i class="fa fa-floppy-o"></i> Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('#Task').on('submit', event => {
            event.preventDefault()
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.routers.update',['router' => $router->id]) }}',
                data: $('#Task').serialize(),
                success: respond => {
                    return respond.status
                        ? succeed('Update router successful！', event => {
                            to('{{ route('admin.routers.index') }}')
                        })
                        : errored(respond.message)
                }
            })
        })
    </script>
@stop