<!-- resources/views/auth/password.blade.php -->

<form method="POST" action="/password/email">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        <button type="submit">
            Enviar link de recuperação
        </button>
    </div>
</form>