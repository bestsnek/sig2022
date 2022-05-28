@extends("layouts.main")

@section("content")
   <body>
      <div class="container text-center">
         <div id = "map" style = "width: 900px; height: 580px"></div>
      </div>
      <script>
         // Creating map options
         var mapOptions = {
            center: [-0.06042609452074314, 109.34487746784743],
            zoom: 17
         }
         // Creating a map object
         var map = new L.map('map', mapOptions);
         
         // Creating a Layer object
         var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
         
         // Adding layer to the map
         map.addLayer(layer);
         
         // Creating latlng object
         @foreach ($coords as $coord)   
         var latlang = [
              
              [ {{$coord->coordinate1}} ],[{{$coord->coordinate2}}], [{{$coord->coordinate3}}],[{{$coord->coordinate4}} ],
            ];
              // Creating poly line options
              var PolylineOptions = {color:'red'};
              
              // Creating multi poly-lines
              var polyline = L.polyline(latlang , PolylineOptions);
              
              // Adding multi poly-line to map
              polyline.addTo(map).bindPopup(' {{$coord->keterangan}} ').addTo(map);

            @endforeach
      </script>
   </body>
   
@endsection