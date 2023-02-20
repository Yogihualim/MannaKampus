<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maps</title>
</head>
<body>
    <div class="card p-4 m-4">
        <h2 class="fs-2">Lokasi Manna Kampus (Mirota Kampus)</h2>
        <hr>
        <h5 class="fw-normal fs-6 lh-sm">
        <div id="map"></div>
    </div>
</body>
</html>

{{-- Script Google Maps --}}
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async></script>
<script>
    let map, activeInfoWindow, markers = [];

    /* ----------------------------- Initialize Map ----------------------------- */
    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: {
                lat: 28.626137,
                lng: 79.821603,
            },
            zoom: 15
        });

        map.addListener("click", function(event) {
            mapClicked(event);
        });

        initMarkers();
    }

    /* --------------------------- Initialize Markers --------------------------- */
    function initMarkers() {
        const initialMarkers = <?php echo json_encode($initialMarkers); ?>;

        for (let index = 0; index < initialMarkers.length; index++) {

            const markerData = initialMarkers[index];
            const marker = new google.maps.Marker({
                position: markerData.position,
                label: markerData.label,
                draggable: markerData.draggable,
                map
            });
            markers.push(marker);

            const infowindow = new google.maps.InfoWindow({
                content: `<b>${markerData.position.lat}, ${markerData.position.lng}</b>`,
            });
            marker.addListener("click", (event) => {
                if(activeInfoWindow) {
                    activeInfoWindow.close();
                }
                infowindow.open({
                    anchor: marker,
                    shouldFocus: false,
                    map
                });
                activeInfoWindow = infowindow;
                markerClicked(marker, index);
            });

            marker.addListener("dragend", (event) => {
                markerDragEnd(event, index);
            });
        }
    }

    /* ------------------------- Handle Map Click Event ------------------------- */
    function mapClicked(event) {
        console.log(map);
        console.log(event.latLng.lat(), event.latLng.lng());
    }

    /* ------------------------ Handle Marker Click Event ----------------------- */
    function markerClicked(marker, index) {
        console.log(map);
        console.log(marker.position.lat());
        console.log(marker.position.lng());
    }

    /* ----------------------- Handle Marker DragEnd Event ---------------------- */
    function markerDragEnd(event, index) {
        console.log(map);
        console.log(event.latLng.lat());
        console.log(event.latLng.lng());
    }
</script>