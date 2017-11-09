@extends('admin.auths._auth')


@section('form')
    <form class="form-signin" id="Task">
        <div class="login-wrap">
            <input type="text" class="form-control" name="email" placeholder="Please entry your email" autofocus>
            <input type="password" class="form-control" name="password" placeholder="Please entry your password">
            <button class="btn btn-block btn-primary" type="submit">Sign1</button>
        </div>
    </form>
    <script>
        $('#Task').on('submit', event => {
            event.preventDefault()
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.auth.login') }}',
                data: $('#Task').serialize(),
                success: respond => {
                    return respond.status
                        ? succeed(respond.message, event => {
                            to('{{ route('admin.index') }}')
                        })
                        : errored(respond.message)
                }
            })
        })
    </script>
@stop