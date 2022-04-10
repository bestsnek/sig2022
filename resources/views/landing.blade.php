@extends("layouts.main")
@section("content")

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize(){
        var propertiPeta={
            center:new google.maps.LatLng("-0.056213577565763055, 109.3454049618426"),
            zoom:10;
            mapTypeID:google.maps.mapTypeID.ROADMAP
        };
        var peta = new google.maps.Maps(document.getElementById(MapDasar), propertiPeta);
    }
    // google.maps.event.addDomListener(windows,'load',initialize)
</script>

<div class="container-fluid">
    <div class="col ">
        <div class="row align-content-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15959.265352067552!2d109.33641419784723!3d-0.05711479933650322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d5997490ab8af%3A0xb02b9eb4bf2f6b94!2sGedung%20Baru%20FMIPA%20Untan!5e0!3m2!1sen!2sid!4v1649623601016!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="MapDasar" style="height:400px; width:100% "> </div>
</div>
@endsection