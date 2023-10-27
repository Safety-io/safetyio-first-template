@section('title', 'mail')
@component('mail::message')
    #i'm {{ $data['firstName'] }} {{ $data['lastName'] }}
    ##phone number
    *{{ $data['number'] }}
    ##email
    *{{ $data['email'] }}
    ##message
    *{{ $data['message'] }}
    #Thanks,{{ config('app.name') }}
@endcomponent

