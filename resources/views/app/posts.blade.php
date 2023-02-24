@extends('posts')
@section('header')
<link rel="shortcut icon" href="https://i.postimg.cc/Vkfn31Zf/icone-slot138.webp" sizes="16x16">
<link href="{{url('/')}}/{{$posts->slug}}" rel="dns-prefetch">
<link rel="canonical" href="{{url('/')}}/{{$posts->slug}}">

    @isset($posts->keyword)
    <meta name="keywords" content="{{$posts->keyword}}">
    @endisset
    @isset($posts->deskripsi)
    <meta name="description" content="{{$posts->deskripsi}}">
    @endisset
    @isset($posts->custom)
        {!!$posts->custom!!}
    @endisset
    <meta name="geo.placename" content="{{$identity->nama_web}}">
    <meta name="author" content="{{$identity->nama_web}}">
    <meta name="publisher" content="{{$identity->nama_web}}">
    <meta property="og:title" content="{{$identity->nama_web}}: {{$posts->judul}}">
    <meta property="og:description" content="{{$posts->deskripsi}}">
    <meta property="og:url" content="{{url('/')}}/{{$posts->slug}}">
    <meta property="og:site_name" content="{{$identity->nama_web}}">
    <meta property="og:image" content="{{url('/')}}/{{$posts->background}}">
    <meta property="og:image:secure_url" content="{{url('/')}}/{{$posts->thumnail}}">
@endsection
@section('content')
{!!$headers!!}
{{-- content --}}
{!!$body!!}
{{-- end content --}}
{!!$footer!!}
<script>
 var judul = "{{$posts->judul}}"; // Ambil judul dari variabel PHP $posts->judul
var kata = judul.split(' '); // Pisahkan judul menjadi array kata-kata
var judulBaru = ''; // Inisialisasi judul baru

// Loop melalui setiap kata dan tambahkan tag "br" setiap 3 kata
for (var i = 0; i < kata.length; i++) {
  if ((i+1) % 3 === 0) {
    judulBaru += kata[i] + '<br>';
  } else {
    judulBaru += kata[i] + ' ';
  }
}

// Masukkan judul baru ke dalam elemen dengan ID "judul"
document.getElementById("judul").innerHTML = judulBaru;

 var juduls = "{{$posts->deskripsi}}"; // Ambil judul dari variabel PHP $posts->judul
var katas = juduls.split(' '); // Pisahkan judul menjadi array kata-kata
var judulBarus = ''; // Inisialisasi judul baru

// Loop melalui setiap kata dan tambahkan tag "br" setiap 3 kata
for (var is = 0; is < katas.length; is++) {
  if ((is+1) % 9 === 0) {
    judulBarus += katas[is] + '<br>';
  } else {
    judulBarus += katas[is] + ' ';
  }
}

// Masukkan judul baru ke dalam elemen dengan ID "judul"
document.getElementById("deskripsi").innerHTML = judulBarus;
</script>
@endsection