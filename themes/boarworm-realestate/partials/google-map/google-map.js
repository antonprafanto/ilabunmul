window.addEventListener('DOMContentLoaded', function () {
    window.initMap = function (id, lat, lng) {
        var latLng = { lat: lat, lng: lng };
        var map = new google.maps.Map(id, {
            zoom: 16,
            center: latLng
        });

        var marker = new google.maps.Marker({
            position: latLng,
            map: map,
        });
    }
});