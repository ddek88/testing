@extends('dashboard.app')

@section('header')
 <style>
    @media (max-width: 768px)
    {
        #mobile{
            display: none
        }
    }
 </style>   
@endsection
@section('content')
<div class="col-12">
    <div class="card mb-4">
      <div class="card-header"><strong>Draft Posts</strong></div>
      <div class="card-body">
        <div class="example">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-719" role="tab">
                <svg class="icon me-2">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                </svg>Preview</a></li>
          </ul>
          
          <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview">
                <table class="table caption-top">
                    <caption>Posts of draft</caption>
                    <thead>
                      <tr>
                        <th scope="col">judul</th>
                        <th id="mobile" scope="col">slug</th>
                        <th scope="col">actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @isset($post)
                        @foreach($post as $items)
                        <tr>
                            <td>{{$items->judul}}</td>
                            <td id="mobile">{{url('/')}}/artikels/{{$items->slug}}</td>
                            <td>
                                <a id="edit" class="btn btn-primary btn-sm mb-1" href="{{url('/')}}/dashboard/draft/{{$items->id}}">Edit</a>
                                <a id="publish" class="btn btn-success btn-sm text-white mb-1" href="">Publish</a>
                                <a id="hapus" class="btn btn-danger btn-sm text-white mb-1" href="{{url('/')}}/dashboard/draft/{{$items->id}}/hapus">Hapus</a>
                            </td>
                          </tr>
                        @endforeach
                        @endisset
                     
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
        $('#hapus').click(function(event) {
    // Mencegah tindakan default dari tautan
    event.preventDefault();

    // Tampilkan pesan konfirmasi
    var konfirmasi = confirm("Anda yakin ingin menghapus data ini?");

    // Jika pengguna mengkonfirmasi, alihkan ke tautan yang diinginkan
    if (konfirmasi) {
      var link = $(this).attr("href");
      window.location.href = link;
    }
  });
    });
    </script>
@endsection