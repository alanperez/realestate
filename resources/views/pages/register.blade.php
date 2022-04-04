@extends ('layouts.main')
@section('page-title', 'Register - Realtors')

@section('content')
    <div class="auth-page auth-page--register">
        <form class="auth-page__form" action=""method="POST">

            <h3>Register</h3>
            <div class="auth-page__form-group">

                <Label class="auth-page__form-label" for="email">Email</Label>
                <input class="auth-page__form-input" type="email" name="email">
            </div>
            <div class="auth-page__form-group">
                <Label class="auth-page__form-label" for="password">Password</Label>
                <input class="auth-page__form-input" type="password" name="password">
            </div>
            <div class="auth-page__form-group">
                <button class="auth-page__form-button" type="submit">Register</button>
            </div>
        </form>
    </div>
@endsection