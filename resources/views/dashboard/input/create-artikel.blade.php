@extends('dashboard.app')

@section('content')

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<div class="col-12">
    <div class="card mb-4">
      <div class="card-header"><strong>Artikel</strong></div>
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
               <form action="{{route('site-artikel')}}" method="post">
                @csrf
               
                <div class="mb-3">
                  <label for="editor" class="form-label">Home Artikel</label>
                  <textarea class="form-control" name="artikel" id="editor" rows="30">@isset($artikel){{$artikel->body}}@endisset</textarea>
                </div>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <script>
// Initialize CKEditor
CKEDITOR.replace('editor', {
    // Enable the "sourcearea" plugin
    extraPlugins: 'sourcearea',

    // Add the "Source" button to the toolbar
    toolbar: [
      { name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },
      { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
      { name: 'editing', items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
      { name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
      '/',
      { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
      { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
      { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
      { name: 'about', items: [ 'About' ] }
    ]
  });
   
  </script>

@endsection