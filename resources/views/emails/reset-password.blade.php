@component('mail::message')

{{-- Logo --}}
<div style="text-align: center;">
    <img src="{{ asset('images/logo.jpeg') }}" alt="Company Logo" style="max-width: 200px;">
</div>

{{-- Greeting --}}
# Reset Password Notification

You are receiving this email because we received a password reset request for your account.

@component('mail::button', ['url' => $url, 'color' => 'primary'])
Reset Password
@endcomponent

If you did not request a password reset, no further action is required.

Thanks,<br>
{{ config('app.name') }}

@endcomponent
