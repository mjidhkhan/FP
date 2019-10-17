@component('mail::message')

#Thank you for your message


<strong> Name: </strong> {{ $data['name'] }}
<small> Email: </small> {{ $data['email'] }}

<strong>Message: </strong> {{ $data['message'] }}

@endcomponent
