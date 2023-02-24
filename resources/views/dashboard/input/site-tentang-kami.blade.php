@extends('dashboard.app')

@section('content')
<div class="col-12">
    <div class="card mb-4">
      <div class="card-header"><strong>Tentang Kami</strong></div>
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
               <form action="{{route('tentang-store')}}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Tentang Kami</label>
                  <textarea class="form-control" name="tentang" id="exampleFormControlTextarea1" rows="3" required>@isset($tentang){{$tentang->body}}@endisset</textarea>
                </div>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection