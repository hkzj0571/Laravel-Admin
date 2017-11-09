@extends('admin.index')

@section('wrapper')
    <section class="panel">
        <header class="panel-heading">
            <h5>
                <a href="{{ route('admin.users.index') }}" class="top-back">
                    <i class="fa fa-arrow-circle-left"></i>
                </a>
                Edit for：<strong>{{ $user->name }}</strong>
            </h5>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <form class="form-horizontal tasi-form" id="Task">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-muted">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $user->name }}" name="name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" value="{{ $user->email }}" name="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-muted">Roles</label>
                            <div class="col-sm-9">
                                @foreach($roles as $role)
                                    <label>
                                        <input type="checkbox" name="roles[]" value="{{ $role->name }}" {{ $user->hasRole($role) ? 'checked' : '' }} class="form-control">
                                        {{ $role->alias }}
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
                url: '{{ route('admin.users.update',['user' => $user->id]) }}',
                data: $('#Task').serialize(),
                success: respond => {
                    return respond.status
                        ? succeed('Update user successful！', event => {
                            to('{{ route('admin.users.index') }}')
                        })
                        : errored(respond.message)
                }
            })
        })
    </script>
@stop