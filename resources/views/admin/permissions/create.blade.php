@extends('admin.index')

@section('wrapper')
    <section class="panel">
        <header class="panel-heading">
            <h5>
                <a href="{{ route('admin.permissions.index') }}" class="top-back">
                    <i class="fa fa-arrow-circle-left"></i>
                </a>
                Create Permission
            </h5>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <form class="form-horizontal tasi-form" id="Task">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-muted">Alias</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="alias" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-muted">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" required>
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
                url: '{{ route('admin.permissions.store') }}',
                data: $('#Task').serialize(),
                success: respond => {
                    return respond.status
                        ? succeed('Create permission successful！', event => {
                            to('{{ route('admin.permissions.index') }}')
                        })
                        : errored(respond.message)
                }
            })
        })
    </script>
@stop