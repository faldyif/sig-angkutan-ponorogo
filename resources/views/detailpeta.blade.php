@extends('layouts.visitor')

@section('content')
<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                <h2 class="brand-before">
                    <small>Selamat datang di</small>
                </h2>
                <h1 class="brand-name">WebGIS Angkutan Cerdas Sekolah</h1>
                <hr class="tagline-divider" style="padding-bottom:20px">
                <div class="row">
                  <div class="col-md-8">
                    <div id="map"></div>                  
                  </div>
                  <div class="col-md-4" style="background: #d3d3d3">
                    <h4>Legenda</h4>
                    @foreach($route as $key)
                    <div class="checkbox">
                      <label><input type="checkbox" id="trayek-{{ $key->id }}" name="trayek-{{ $key->id }}" checked>{{ $key->nama }}</label>
                    </div>
                    @endforeach
                  </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('script')
<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
    interval: 5000 //changes the speed
})

// maps initialization
var map;
@foreach($route as $key)
var trayek_{{ $key->id }};
@endforeach
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -7.871388, lng: 111.475024},
    zoom: 13
  });
  @foreach($route as $key)
  trayek_{{ $key->id }} = new google.maps.KmlLayer({
    url: '{{ url('storage/app/public/kml/trayek') }}/{{ $key->path_kml }}?time='+new Date().getTime(),
    map: map
  });
  @endforeach
  @foreach($school as $key)
  new google.maps.Marker({
    position: {lat: {{ $key->latitude }}, lng: {{ $key->longitude }}},
    map: map,
    title: {{ $key->nama_sekolah }}
  });
  @endforeach
  @foreach($departure as $key)
  new google.maps.Marker({
    position: {lat: {{ $key->latitude }}, lng: {{ $key->longitude }}},
    map: map,
    title: {{ $key->nama_titik }}
  });
  @endforeach
}
document.addEventListener('DOMContentLoaded', function () {
  @foreach($route as $key)
  document.querySelector('#trayek-{{ $key->id }}').addEventListener('change', changeHandler{{ $key->id }});
  @endforeach
});
@foreach($route as $key)
function changeHandler{{ $key->id }}(e){ 
  if(e.target.checked) {
    // store kml as obj
    trayek_{{ $key->id }}.setMap(map);
  } else { 
    trayek_{{ $key->id }}.setMap(null);
  } 
}
@endforeach
</script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAV3xjY97KWGTIdxlINKahlsNnZDKJM6rA&callback=initMap">
</script>
@endsection
