<h3>Καινούργιο μύνημα απο το Contact Form του {{ env('APP_NAME')}}</h3>

<div>
	{{-- {{ $data['subject'] }} --}}
    {{ $subject }}
</div>
{{ $bodyMessage }}

<p>Sent via {{ $email }}</p>
