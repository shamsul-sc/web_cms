@component('mail::message')
    <p>Hello {{ $user->name }}</p>
    <p>We understand it happens.</p>
    @component('mail::button', ['url' => url('reset-password/' . $user->remember_token)])
        Reset Your Password
    @endcomponent
    <p>In case have issues recovering your password, please contact us.</p>
    Thanks <br>
    {{ Config('app.name') }}
@endcomponent
