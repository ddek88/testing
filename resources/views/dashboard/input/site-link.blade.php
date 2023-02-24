@extends('dashboard.app')

@section('content')
<div class="col-12">
    <div class="card mb-4">
      <div class="card-header"><strong>Site Link</strong></div>
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
              @if(isset($link))
                <form action="{{route('link-update')}}" method="post">
                  @csrf
                      <div class="mb-3">
                          <label class="form-label" for="exampleFormControlInput1">Navbar Login Link</label>
                          <input class="form-control" value="{{$link->navbar_login}}" name="navlogin" id="exampleFormControlInput1" type="text" required>
                      </div>
                      <div class="mb-3">
                          <label class="form-label" for="exampleFormControlInput1">Sidebar Daftar Link </label>
                          <input class="form-control" value="{{$link->sidebar_daftar}}" name="sidereg" id="exampleFormControlInput1" type="text" required>
                      </div>
                      <div class="mb-3">
                          <label class="form-label" for="exampleFormControlInput1">Sidebar Login Link </label>
                          <input class="form-control" value="{{$link->sidebar_login}}" name="sidelogin" id="exampleFormControlInput1" type="text" required>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Footer Tanggung Jawab Bermain Link</label>
                        <input class="form-control" value="{{$link->tanggung_jawab}}" name="tanggung" id="exampleFormControlInput1" type="text" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Footer Dukungan Browser Link</label>
                        <input class="form-control" value="{{$link->dukungan_browser}}" name="dukungan" id="exampleFormControlInput1" type="text" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Referral Link</label>
                        <input class="form-control" value="{{$link->refferal}}" name="refferal" id="exampleFormControlInput1" type="text" required>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="exampleFormControlInput1">Posts Link</label>
                      <input class="form-control"  value="{{$link->postslink}}" name="postslink" id="exampleFormControlInput1" type="text" required>
                  </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Livechat Link</label>
                        <input class="form-control" value="{{$link->livechat}}" name="livechat" id="exampleFormControlInput1" type="text" required>
                    </div>
                          <button type="submit" class="btn btn-success btn-sm text-white">Update</button>
                </form>
              @else
              <form action="{{route('link-store')}}" method="post">
               @csrf
                   <div class="mb-3">
                       <label class="form-label" for="exampleFormControlInput1">Navbar Login Link</label>
                       <input class="form-control" name="navlogin" id="exampleFormControlInput1" type="text" required>
                   </div>
                   <div class="mb-3">
                       <label class="form-label" for="exampleFormControlInput1">Sidebar Daftar Link </label>
                       <input class="form-control" name="sidereg" id="exampleFormControlInput1" type="text" required>
                   </div>
                   <div class="mb-3">
                       <label class="form-label" for="exampleFormControlInput1">Sidebar Login Link </label>
                       <input class="form-control" name="sidelogin" id="exampleFormControlInput1" type="text" required>
                   </div>
                   <div class="mb-3">
                     <label class="form-label" for="exampleFormControlInput1">Footer Tanggung Jawab Bermain Link</label>
                     <input class="form-control" name="tanggung" id="exampleFormControlInput1" type="text" required>
                 </div>
                 <div class="mb-3">
                     <label class="form-label" for="exampleFormControlInput1">Footer Dukungan Browser Link</label>
                     <input class="form-control" name="dukungan" id="exampleFormControlInput1" type="text" required>
                 </div>
                 <div class="mb-3">
                     <label class="form-label" for="exampleFormControlInput1">Referral Link</label>
                     <input class="form-control" name="refferal" id="exampleFormControlInput1" type="text" required>
                 </div>
                 <div class="mb-3">
                     <label class="form-label" for="exampleFormControlInput1">Posts Link</label>
                     <input class="form-control" name="postslink" id="exampleFormControlInput1" type="text" required>
                 </div>
                 <div class="mb-3">
                     <label class="form-label" for="exampleFormControlInput1">Livechat Link</label>
                     <input class="form-control" name="livechat" id="exampleFormControlInput1" type="text" required>
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