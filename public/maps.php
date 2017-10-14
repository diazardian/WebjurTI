<!DOCTYPE html>
<html>

<body>

<div id="map" style="width:100%;height:500px"></div>

<script>
    function myMap() {
        var myLatLng = {lat: -7.3165519, lng: 112.7260529};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Jurusan Teknik Informatika'
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVfdVQqnx9wPueW_jzovNd4VusGeSCax0&callback=myMap"></script>
</body>
</html>
