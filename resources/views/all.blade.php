@extends("layouts.main")

@section("content")
   <body>
      <div class="container text-center">
         <div id = "map" style = "width: 900px; height: 580px"></div>
      </div>
      <script>
         // Creating map options
         var mapOptions = {
            center: [-0.05726893709874161, 109.34732189718065],
            zoom: 17
         }
         // Creating a map object
         var map = new L.map('map', mapOptions);
         
         // Creating a Layer object
         var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
         
         // Adding layer to the map
         map.addLayer(layer);
         
         //polygon

         // Creating latlng object
         @foreach ($coords_polygon as $coord)   
         var latlang = [
                  [[ {{$coord->coordinate1}} ],[{{$coord->coordinate2}}], [{{$coord->coordinate3}}],[{{$coord->coordinate4}} ]],      
               ];
               // Creating multi polygon options
               var PolygonOptions = {color:'red', weight:6};
               
               // Creating multi polygons
               var polygon = L.polygon(latlang , PolygonOptions);
               
               // Adding multi polygon to map
               polygon.addTo(map).bindPopup(' {{$coord->keterangan}} ').addTo(map);;
         @endforeach


         //polyline

         @foreach ($coords_polyline as $coord)   
         var latlang = [
              
              [ {{$coord->coordinate1}} ],[{{$coord->coordinate2}}], [{{$coord->coordinate3}}],[{{$coord->coordinate4}} ],
            ];
              // Creating poly line options
              var PolylineOptions = {color:'blue'};
              
              // Creating multi poly-lines
              var polyline = L.polyline(latlang , PolylineOptions);
              
              // Adding multi poly-line to map
              polyline.addTo(map).bindPopup(' {{$coord->keterangan}} ').addTo(map);

        @endforeach


         // Point

        @foreach ($coords_point as $coord)   
            var marker = L.marker([{{$coord->coordinate1}}],) 
            .bindPopup(' {{$coord->keterangan}} ').addTo(map);
        @endforeach
        
      </script>
   </body>
   
@endsection