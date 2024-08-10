{{-- Header --}}
<nav class="navbar navbar-expand-lg navbar-light bg-header @if (env('APP_NAME') == 'Rasya Mandiri Tranz') bg-header2 @endif">
    <div class="container-fluid">
        {{-- <div class="logo">Plesir</div> --}}
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ Storage::disk('s3')->url($dataSeo['image']) }}" width="auto" alt>
            <span>{{ $dataSeo['site_title'] }}</span>
        </a>
        <button type="button" id="sidebarleftbutton" class="btn">
            <i class="fas fa-align-right"></i>
        </button>
        {{-- <button type="button" id="sidebarrightbutton" class="btn">
      <div class="notif">
          <i class="fas fa-bell"></i>
          <i class="fas fa-circle "></i>
      </div>
      </button> --}}
    </div>
</nav>
