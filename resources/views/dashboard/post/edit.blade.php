@extends('dashboard.app')
@section('header')
    <style>
        @media(min-width: 992px)
        {
            .pc{
                display: flex;
            }
            .right{
                width: 40%;
                margin-left: 8%;
            }
            .left{
                width: 50%;
            }
        }
        span.ck-file-dialog-button {
            display: none;
        }
    </style>
@endsection
@section('content')

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<div class="col-12">
    <div class="card mb-4">
      <div class="card-header"><strong>Edit Artikel</strong></div>
      <div class="card-body">
        <div class="example">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-719" role="tab">
                <svg class="icon me-2">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                </svg>Preview</a></li>
          </ul>
          <form action="{{route('update')}}" method="post">
          <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview">
               
                @csrf
                <div class="pc">
                    <div class="left">
                <label for="showimageupload">Background image</label>
                <div class="mb-5 mt-3">
                  <picture>
                    <source srcset="" type="image/svg+xml">
                    <img id="showimageupload" style="background-color: black; max-width: 200px; max-heigth: 100px;" src="
                    @if(isset($post->background)) {{url('/')}}/{{$post->background}} @else {{url('/')}}/logo.png @endif" class="img-fluid img-thumbnail" alt="" width="200" height="100">
                
                    <a id="imageupload" class="btn btn-secondary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                        <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                        <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                      </svg>
                    </a>
                    <input id="image" type="file" name="image" style="display: none;">
                    <input type="text" id="juk" name="itsss" value="{{$post->background}}" style="display: none">
                  </picture>
                  <small id="namaimage"></small>
                </div>
  
                <label for="showimageuploads">Thumnail image</label>
                <div class="mb-5 mt-3">
                  <picture>
                    <source srcset="" type="image/svg+xml">
                    <img id="showimageuploads" style="background-color: black; max-width: 200px; max-heigth: 100px;" src="
                    @if(isset($post->thumnail)) {{url('/')}}/{{$post->thumnail}} @else {{url('/')}}/logo.png @endif" class="img-fluid img-thumbnail" alt="" width="200" height="100">
                
                    <a id="imageuploads" class="btn btn-secondary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                        <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                        <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                      </svg>
                    </a>
                    <input id="images" type="file" name="image" style="display: none;">
                    <input type="text" id="juks" name="itsssv" value="{{$post->thumnail}}" style="display: none">
                  </picture>
                  <small id="namaimages"></small>
                    <div class="mb-3 mt-4">
                        <label for="judul" class="form-label">Judul</label>
                        @error('judul')
                        <br>
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                        <input type="text" name="judul" value="{{$post->judul}}" class="form-control @error('judul')is-invalid @enderror" id="judul">
                      </div>
                <label for="basic-url" class="form-label">Slug URL</label>
                @error('slug')
                        <br>
                        <small class="text-danger">{{$message}}</small>
                 @enderror
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon3">{{url('/')}}/artikels/</span>
                  <input type="text" name="slug" value="{{$post->slug}}" class="form-control  @error('slug')is-invalid @enderror" id="basic-url" aria-describedby="basic-addon3">
                  
                </div>
                <div class="mb-3">
                  <label for="editor" class="form-label"> Artikel</label>
                  @error('artikel')
                        <br>
                        <small class="text-danger">{{$message}}</small>
                  @enderror
                  <textarea class="form-control" name="artikel" id="editor" rows="30">{!! $post->body !!}</textarea>
                </div>
                        
                    </div>
                  <input type="hidden" name="id" value="{{$post->id}}">
                    
                </div>
                <div class="right">
                    <div class="mb-3">
                        <label for="keyword" class="form-label">Keyword</label>
                        <textarea class="form-control" name="keyword"  id="keyword" rows="6">{{$post->keyword}}</textarea>
                      </div>
                      <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi"  id="deskripsi" rows="6">{{$post->deskripsi}}</textarea>
                      </div>
                      <div class="mb-3">
                        <label for="custom" class="form-label">Custom Meta</label>
                        <textarea class="form-control" name="custom"  id="custom" rows="15">{{$post->custom}}</textarea>
                      </div>
                </div>
             
            </div>
            <button type="submit" name="draft" class="btn btn-primary btn-sm">Draft</button>
            <button type="submit" name="publish" class="btn btn-success text-white btn-sm">Publish</button>
          </div>
        </form>
        </div>
        
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
$(document).ready(function() {
  $("#imageupload").click(function() {
    $("#image").trigger('click');
  });

  $("#image").change(function() {
    $("#namaimage").html($(this).val().split("\\").pop());
  });
  $("#imageuploads").click(function() {
    $("#images").trigger('click');
  });

  $("#images").change(function() {
    $("#namaimages").html($(this).val().split("\\").pop());
  });

  // Fungsi untuk mengubah string menjadi slug
  function string_to_slug(str) {
    str = str.toLowerCase().replace(/\s+/g, '-');
    return str;
  }

  // Tangkap peristiwa pengeditan pada input judul
  $('#judul').on('input', function() {
    // Ambil nilai input judul
    var judul = $(this).val();

    // Buat slug dari nilai input judul
    var slug = string_to_slug(judul);

    // Masukkan slug ke dalam input slug
    $('#basic-url').val(slug);
  });




  var token = $('meta[name="csrf-token"]').attr('content');

    // Mengatur header permintaan dengan nilai token
    $.ajaxSetup({
      headers: {
        'X-CSRF-Token': token
      }
    });

    $('.saved').click(function(event) {
  event.preventDefault();

  var menuId = $(this).data('menu-id');
  var url = $('div.body[data-menu-ids="'+ menuId +'"] input[name="upr'+ menuId +'"]').val();
  var label = $('div.body[data-menu-ids="'+ menuId +'"] input[name="upl'+ menuId +'"]').val();
  var toast = $('#liveToast');
  $.ajax({
    url: '{{url("/")}}/dashboard/'+ menuId +'/save',
    type: 'POST',
    data: {
      url: url,
      label: label
    },
    success: function(response) {
      toast.find('.toast-body').html('<b style="color:green;">Success</b>, Berhasil mengupdate data');
      toast.toast('show');
    },
    error: function(error) {
      console.log('Error:', error);
    }
  });
});





    // Mengunggah file ke server
    $('#images').change(function() {
      var formData = new FormData();
      formData.append('file', $('#images')[0].files[0]);

      $.ajax({
        url: '/upload',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
          $('#juks').attr('value', 'images'+ '/' + data.message);
          console.log(data.message);
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
        }
      });
    });
    $('#images').change(function() {
    var input = $(this)[0];
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#showimageuploads').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  });

    // Mengunggah file ke server
    $('#image').change(function() {
      var formData = new FormData();
      formData.append('file', $('#image')[0].files[0]);

      $.ajax({
        url: '/upload',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
          $('#juk').attr('value', 'images'+ '/' + data.message);
          console.log(data.message);
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
        }
      });
    });
    $('#image').change(function() {
    var input = $(this)[0];
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#showimageupload').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  });

});


  </script>
<script>
  ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
          console.error( error );
      } );
</script>

@endsection