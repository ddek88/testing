@extends('posts')

@section('header')
<link rel="canonical" href="{{url('/')}}">
@isset($identity->keyword)
    <meta name="keywords" content="{{$identity->keyword}}">
    @endisset
    @isset($identity->deskripsi)
    <meta name="description" content="{{$identity->deskripsi}}">
    @endisset
    @isset($identity->custom)
        {!!$identity->custom!!}
    @endisset
<meta name="geo.placename" content="{{$identity->nama_web}}">
<meta name="author" content="{{$identity->nama_web}}">
<meta name="publisher" content="{{$identity->nama_web}}">
<meta property="og:title" content="{{$identity->nama_web}}">
    <meta property="og:description" content="{{$identity->deskripsi}}">
    <meta property="og:url" content="{{url('/')}}">
    <meta property="og:site_name" content="{{$identity->nama_web}}">
    <meta property="og:image" content="{{url('/')}}/{{$imagenav->image}}">
    <meta property="og:image:secure_url" content="{{url('/')}}/{{$imagenav->image}}">
@endsection
@section('content')

{!!$html!!}

{{-- content --}}
{!!$body!!}
{{-- end content --}}
{!!$footer!!}
@endsection