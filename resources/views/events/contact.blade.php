@extends('events.app')

@section('title', 'Contact - events')

@section('content')
    <p>
        Pour plus d'infos contactez nous par l'un des canaux suivants
    </p>
    <div id="contacts">
        <div class="contact-info">
            <img src="{{asset('images/logo-whatsapp.webp')}}" alt="Whatsapp">
            <p>+229 0123456789</p>
        </div>
        <div class="contact-info">
            <img src="{{asset('images/linkedin2.webp')}}" alt="LinkedIn">
            <code>https://linkedin.com</code>
        </div>
        <div class="contact-info">
            <img src="{{asset('images/mail.webp')}}" alt="Email">
            <p>memora@gmail.fr</p>
        </div>
        <div class="contact-info">
            <img src="{{asset('images/logo-whatsapp.webp')}}" alt="Telephone">
            <p>Appelez nous au +229 0123456789 - Disponible 24h/24</p>
        </div>
    </div>
@endsection    
