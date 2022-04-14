@extends("layouts.main")
@section("content")

<style>
    #peta { height: 50vh; }
    #peta2 {height: 50vh;}
</style>

<div class="container-fluid py-2 row">
    <div class="row py-1">
        <div id="peta"></div>
    </div>
    <div class="row py-1">
        <div id="peta2"></div>
    </div>
</div>

<script>
    // you want to get it of the window global
    const providerOSM = new GeoSearch.OpenStreetMapProvider

    //leaflet map
    var leafletMap = L.map('peta', {
        fullscreenControl: true,

        // OR
        fullscreenControl: {pseudoFullscreen: false // if true, fullscreen to page width and height
        },
        minZoom: 2
    }).setView([0,0], 2);

    L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a&gt; contributors' }).addTo(leafletMap);


    const search = new GeoSearch.GeoSearchControl({
        provider: providerOSM,
        style: 'icon',
        searchLabel: 'Klik Pencarian Lokasi',
    });
    leafletMap.addControl(search);

</script>

<script>

    // you want to get it of the window global
    const providerOSM2 = new GeoSearch.OpenStreetMapProvider

    //leaflet map
    var leafletMap = L.map('peta2', {
        fullscreenControl: true,

        // OR
        fullscreenControl: {pseudoFullscreen: false // if true, fullscreen to page width and height
        },
        minZoom: 2
    }).setView([0,0], 2);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a&gt; contributors' }).addTo(leafletMap);

        const search2 = new GeoSearch.GeoSearchControl({
        provider: providerOSM,
        style: 'icon',
        searchLabel: 'Klik Pencarian Lokasi',
    });
    leafletMap.addControl(search2);


    //     var map = L.map('peta').setView([-0.02715507088436879, 109.33669706860317], 13);

    //     var tiles = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
    //  maxZoom: 18,
    //  attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a&gt; contributors, ' +
    //      'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>&#39;,
    //  id: 'mapbox/streets-v11',
    //  tileSize: 512,
    //  zoomOffset: -1
    // }).addTo(map);

</script>


@endsection