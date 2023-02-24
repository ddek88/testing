@extends('dashboard.app')

@section('content')
<div class="col-12">
    <div class="card mb-4">
      <div class="card-header"><strong>Sitebar Mobile</strong></div>
      <div class="card-body">
        <div class="example">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-719" role="tab">
                <svg class="icon me-2">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                </svg>Preview</a></li>
          </ul>
          
          <div class="tab-content rounded-bottom">
            <form action="{{route('sidebar-store')}}" method="POST">
          @csrf
            <div class="tab-pane p-3 active preview">
              <div class="mb-5 mt-3">
                <picture>
                  <source srcset="" type="image/svg+xml">
                  <img id="showimageupload" style="background-color: black; max-width: 200px; max-heigth: 100px;" src="
                  @if(isset($image->image)) {{url('/')}}/{{$image->image}} @else {{url('/')}}/logo.png @endif" class="img-fluid img-thumbnail" alt="" width="200" height="100">
              
                  <a id="imageupload" class="btn btn-secondary btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                      <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                      <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                    </svg>
                  </a>
                  <input id="image" type="file" name="image" style="display: none;">
                  <input type="text" id="juk" name="itsss" style="display: none">
                </picture>
                <small id="namaimage"></small>
              </div>
              @if(isset($navbar))
                @foreach($navbar as $key)
                <div class="mb-3 col-4 itsmobile" data-menu-ids="{{$key->id}}">
                  <div class="head d-flex justify-content-between">
                    <div class="head-left" id="head-left"><b>{{$key->label}}</b></div>
                    <div class="head-right">
                      <small>custom link</small>
                      <a style="cursor: pointer;" class="showbody" id="showbody" data-menu-ids="{{$key->id}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                          <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <div class="body" style="display: none" data-menu-ids="{{$key->id}}" >
                    <div class="mb-2">
                      <label for="url">URL</label>
                      <input type="text" name="upr{{$key->id}}" value="{{$key->url}}" required>
                    </div>
                    <div class="mb-2">
                      <label for="navigation-label">Navigation Label</label>
                      <input class="inputtops" data-menu-id="{{$key->id}}" type="text" name="upl{{$key->id}}" value="{{$key->label}}" required>
                    </div>
                    <div class="remove">
                      <a href="{{url('/')}}/dashboards/{{$key->id}}/remove" style="color:red" class="remove-menu">Remove</a>
                      <span>|</span>
                      <a href="#" style="color:rgb(50, 16, 152)" class="remove-menu saved" data-menu-id="{{$key->id}}">Saved</a>
                    </div>
                  </div>
                </div>
                @endforeach
              @endif
                <div id="cloudmenus"></div>
                    <div class="mt-3 mb-5">
                      <a id="addmenus" class="btn btn-secondary btn-sm ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>Add to menu</a>
                    </div>
                    
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
              </form>
            </div>
          </div>
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

  $("a.showbody").click(function(){
    $("div.body[data-menu-ids='" + $(this).data("menu-ids") + "']").toggle();
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
    url: '{{url("/")}}/dashboards/'+ menuId +'/save',
    type: 'POST',
    data: {
      url: url,
      label: label
    },
    success: function(response) {
      console.log('success:', response);
      toast.find('.toast-body').html('<b style="color:green;">Success</b>, Berhasil mengupdate data');
      toast.toast('show');
    },
    error: function(error) {
      console.log('Error:', error);
    }
  });
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
          $('#juk').attr('value', 'images/' + data.message);
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
  var i = 0;

  // ketika tombol "addmenus" diklik
  $("#addmenus").click(function(e) {
    e.preventDefault();
    
    i++;
    
    // membuat elemen menu baru
    var newMenu = $('<div class="mb-3 col-4 itsmobile" id="menu' + i + '">' +
                      '<div class="head d-flex justify-content-between">' +
                        '<div class="head-left" id="head-left' + i + '"><b>Menu</b></div>' +
                        '<div class="head-right">' +
                          '<small>custom link</small>' +
                          '<a style="cursor: pointer;" class="showbody" data-menu-id="' + i + '">' +
                            '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">' +
                              '<path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>' +
                            '</svg>' +
                          '</a>' +
                        '</div>' +
                      '</div>' +
                      '<div class="body" style="display: none">' +
                        '<div class="mb-2">' +
                          '<label for="url">URL</label>' +
                          '<input id="url' + i + '" name="url' + i + '" type="text" required>' +
                        '</div>' +
                        '<div class="mb-2">' +
                          '<label for="navigation-label">Navigation Label</label>' +
                          '<input id="navigation-label' + i + '" name="label' + i + '" type="text" required>' +
                        '</div>' +
                        '<div class="remove">' +
                          '<a href="#" style="color:red" class="remove-menu" data-menu-id="' + i + '">Remove</a>' +
                        '</div>' +
                      '</div>' +
                    '</div>');

    // menambahkan elemen menu baru ke dalam #cloudmenus
    $("#cloudmenus").append(newMenu);

    // ketika tombol "Remove" pada menu diklik
    $(".remove-menu").click(function(e) {
      e.preventDefault();
      
      var menuId = $(this).data("menu-id");
      $("#menu" + menuId).remove();
    });

    // ketika tombol "showbody" pada menu diklik
    $(".showbody").click(function(e) {
      e.preventDefault();
      
      var menuId = $(this).data("menu-id");
      $("#menu" + menuId + " .body").toggle();
    });
  

    // ketika input "navigation-label" pada menu diubah
    $("#navigation-label" + i).on("input", function() {
      var menuId = $(this).attr("id").replace("navigation-label", "");
      var label = $(this).val();
      $("#head-left" + menuId + " b").text(label);
    });
  });
});


  </script>
@endsection