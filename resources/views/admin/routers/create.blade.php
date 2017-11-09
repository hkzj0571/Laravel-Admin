@extends('admin.index')

@section('wrapper')
    <section class="panel">
        <header class="panel-heading">
            <h5>
                <a href="{{ route('admin.routers.index') }}" class="top-back">
                    <i class="fa fa-arrow-circle-left"></i>
                </a>
                Create Router
            </h5>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <form class="form-horizontal tasi-form" id="Task">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-muted">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-muted">Slug</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="slug">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-muted">Icon</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="icon">
                                <p class="help-block">Please use <a href="http://www.fontawesome.com.cn/icons-ui/" target="_blank">Font-Awesome</a> the icon</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-muted">Weight</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="weight" value="0">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-muted">Parent</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="parent_id">
                                    <option value="0">This is top router</option>
                                    @foreach($routers as $router)
                                        <option value="{{ $router->id }}">{{ $router->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
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
                url: '{{ route('admin.routers.store') }}',
                data: $('#Task').serialize(),
                success: respond => {
                    return respond.status
                        ? succeed('Create router successful！', event => {
                            to('{{ route('admin.routers.index') }}')
                        })
                        : errored(respond.message)
                }
            })
        })
    </script>
@stop