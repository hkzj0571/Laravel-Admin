@extends('admin.index')

@section('wrapper')
    <section class="panel">
        <header class="panel-heading">
            <h5>
                <a href="{{ route('admin.roles.index') }}" class="top-back">
                    <i class="fa fa-arrow-circle-left"></i>
                </a>
                Edit for：<strong>{{ $role->name }}</strong>
            </h5>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <form class="form-horizontal tasi-form" id="Task">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-muted">Alias</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $role->alias }}" name="alias" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-muted">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $role->name }}" name="name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-muted">Permissions</label>
                            <div class="col-sm-9">
                                @foreach($permissions as $permission)
                                    <label>
                                        <input type="checkbox" name="permissions[]" value="{{ $permission->name }}" {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }} class="form-control">
                                        {{ $permission->alias }}
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="btn btn-sm btn-primary">
                                    <i class="fa fa-floppy-o"></i> Update
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
                url: '{{ route('admin.roles.update',['role' => $role->id]) }}',
                data: $('#Task').serialize(),
                success: respond => {
                    return respond.status
                        ? succeed('Update role successful！', event => {
                            to('{{ route('admin.roles.index') }}')
                        })
                        : errored(respond.message)
                }
            })
        })
    </script>
@stop