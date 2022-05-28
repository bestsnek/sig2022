@extends("layouts.main")

@section("content")
   <body>
       
      <div class="container text-center">
         <div id = "map" style = "width: 900px; height: 580px"></div>
      </div>
      {{-- <script>
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


         var marker = L.marker([-0.056968499494514845, 109.34639388946952]).addTo(map);

         var popup = marker.bindPopup('<b>Hello world!</b><br />I am a popup.');
         marker.addTo(map);
      </script> --}}

      <script>
        // Creating map options
        var map = L.map('map',{
    center: [-0.05726893709874161, 109.34732189718065],
    zoom: 17
    });

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map); 

    @foreach ($coords as $coord)   
    var marker = L.marker([{{$coord->coordinate1}}],) 
    .bindPopup(' {{$coord->keterangan}} ').addTo(map);
    @endforeach
     </script>

     
   </body>
   
@endsection