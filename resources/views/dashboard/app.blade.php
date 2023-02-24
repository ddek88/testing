<!DOCTYPE html>

<html lang="en">
  @include('dashboard.partials.head')
  @yield('header')
  <body>


    <div class="toast-container position-fixed top-0 end-0 p-3">
      <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <strong class="me-auto">Web amp</strong>
          <small>Now</small>
          <button type="button" class="btn-close" data-coreui-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
       
        </div>
      </div>
    </div>
    <div class="toast-container position-fixed top-0 end-0 p-3" id="ttttt">

    </div>


   {{-- sidebar --}}
   @include('dashboard.partials.sidebar')
   {{-- end sidebar --}}
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="{{url('/')}}/webui/dist/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
          </button><a class="header-brand d-md-none" href="{{url('/')}}/home">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="{{url('/')}}/webui/dist/assets/brand/coreui.svg#full"></use>
            </svg></a>
          <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="{{url('/')}}/home">Dashboard</a></li>
            {{-- <li class="nav-item"><a class="nav-link" href="#">Users</a></li> --}}
            {{-- <li class="nav-item"><a class="nav-link" href="#">Settings</a></li> --}}
          </ul>
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="{{url('/')}}/home">
                <svg class="icon icon-lg">
                  <use xlink:href="{{url('/')}}/webui/dist/vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                </svg></a></li>
            {{-- {{-- <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="{{url('/')}}/webui/dist/vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                </svg></a></li> --}}
            <li class="nav-item">
              <form action="{{route('logout')}}" method="post">
                @csrf
                <button class="nav-link" style="border: none; background: none">
                  <svg class="icon icon-lg">
                    <use xlink:href="{{url('/')}}/webui/dist/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                  </svg>
                </button>
             </form>
              </li> 
          </ul>
          
        </div>
        <div class="header-divider"></div>
        
      </header>
      
      <div class="body flex-grow-1">
        <div class="container-lg">
          <div class="row">
          {{-- content --}}
          @yield('content')
          
          {{-- end content --}}
          </div>
         
        </div>
      </div>
      @include('dashboard.partials.footer')
    </div>
    
    <!-- CoreUI and necessary plugins-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{url('/')}}/webui/dist/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="{{url('/')}}/webui/dist/vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{url('/')}}/webui/dist/vendors/chart.js/js/chart.min.js"></script>
    <script src="{{url('/')}}/webui/dist/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="{{url('/')}}/webui/dist/vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="{{url('/')}}/webui/dist/js/main.js"></script>
    <!-- Memuat library jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Memuat library Bootstrap JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.min.js"></script>

    @if(session('success'))
    <script>
        $(document).ready(function() {
            // Munculkan toast
            var toast = $('<div class="toast" role="alert" aria-live="assertive" aria-atomic="true"> \
                <div class="toast-header"> \
                    <strong class="me-auto text-success">Success</strong> \
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button> \
                </div> \
                <div class="toast-body"> \
                    {{ session('success') }} \
                </div> \
            </div>');
            $('#ttttt').append(toast);
            toast.toast('show');
        });
    </script>
    
 
@endif

  </body>
</html>