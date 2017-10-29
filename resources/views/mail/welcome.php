@component('mail::message')
# Introduction

Welcome bij Games Getten. {{ $user->name }}

@component('mail::button', ['url' => 'localhost:8000'])
Naar de site!!
@endcomponent

@component('mail::panel', ['url' => ''])
random ass text,just ignor it please and move on.
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent
