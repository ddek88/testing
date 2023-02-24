@extends('dashboard.app')

@section('content')
<div class="col-12">
    <div class="card mb-4">
      <div class="card-header"><strong>Site identity</strong></div>
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
              @if(isset($identity))
              <form action="{{route('identity-update')}}" method="post">
                @csrf
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Nama Website</label>
                        <input class="form-control" value="{{$identity->nama_web}}" name="namaweb" id="exampleFormControlInput1" type="text" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Deskripsi Website</label>
                        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3" required>{{$identity->deskripsi}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Keyword Website</label>
                        <textarea class="form-control" name="keyword" id="exampleFormControlTextarea1" rows="3" required>{{$identity->keyword}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Custom META</label>
                        <textarea class="form-control" name="custom" id="exampleFormControlTextarea1" rows="3" required>{{$identity->custom}}</textarea>
                    </div>
                        <button type="submit" class="btn btn-success text-white btn-sm">Update</button>
              </form>
              @else
                <form action="{{route('identity-store')}}" method="post">
                @csrf
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Nama Website</label>
                        <input class="form-control" name="namaweb" id="exampleFormControlInput1" type="text" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Deskripsi Website</label>
                        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="exampleFormControlInput1">Keyword Website</label>
                      <textarea class="form-control" name="keyword" id="exampleFormControlTextarea1" rows="3" required></textarea>
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="exampleFormControlInput1">Custom META</label>
                      <textarea class="form-control" name="custom" id="exampleFormControlTextarea1" rows="3" required></textarea>
                  </div>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
              </form>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection