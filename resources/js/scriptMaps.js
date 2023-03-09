// Load google API
function initialize() {
    var options = {
    center:new google.maps.LatLng(-7.784738,110.378561), // longitude latitude Babarsari
    zoom:11.8,
    mapTypeId:google.maps.MapTypeId.ROADMAP // Tipe ROADMAP
    };
    var babarsari = {lat: -7.783100, lng: 110.414575};
    var simanjuntak = {lat: -7.776405, lng: 110.374672};
    var supeno = {lat: -7.816300, lng: 110.379890};
    var palagan = {lat: -7.714180, lng: 110.385400};
    var godean = {lat: -7.780933, lng: 110.349869};
    var imogiri = {lat: -7.830640, lng: 110.389950};
    var pelemsewu = {lat: -7.841415, lng: 110.359617};
    var diro = {lat: -7.861783, lng: 110.339864};
    var minomartani = {lat: -7.740418, lng: 110.408455};
    var peralatan = {lat: -7.776677, lng: 110.374239};
    // create map object
    var map=new google.maps.Map(document.getElementById("googleMap"),options);
    var contentString1 =
    '<link href="resources/css/button.css" rel="stylesheet" />' +
    '<div class="row gx-8 gx-lg-10 p-2">'+
        '<div class="col-lg-4 col-md-4">' +
            '<img class="img ps-1 pt-1 text-center" src="public/maintenance/UM3.png" width="90%" alt="..." title="">' +
        '</div>'+
        '<div class="col-lg-8 col-md-10">' +
            '<h6 class="text-start">Mirota Kampus Babarsari</h6>' +
            '<div class="text-start">Jl. Raya Solo - Yogyakarta Jl. Babarsari No.KM. 7, Janti, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</div>' +
            '<br>' +
            '<a href="1"><button id="button"><span>Selengkapnya </span></button></a>' +
        '</div>'+
    '</div>';

    var contentString2 =
    '<link href="resources/css/button.css" rel="stylesheet" />' +
    '<div class="row gx-8 gx-lg-10 p-2">'+
        '<div class="col-lg-4 col-md-4">' +
            '<img class="img ps-1 pt-1" src="public/maintenance/UM3.png" width="90%" alt="..." title="">' +
        '</div>'+
        '<div class="col-lg-8 col-md-10">' +
            '<h6 class="text-start">Manna Kampus C. Simanjuntak</h6>' +
            '<div class="text-start">Jl. C. Simanjuntak No.70, Terban, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55223</div>' +
            '<br>' +
            '<a href="2"><button id="button"><span>Selengkapnya </span></button></a>' +
        '</div>'+
    '</div>';

    var contentString3 =
    '<link href="resources/css/button.css" rel="stylesheet" />' +
    '<div class="row gx-8 gx-lg-10 p-2">'+
        '<div class="col-lg-4 col-md-4">' +
            '<img class="img ps-1 pt-1" src="public/maintenance/UM3.png" width="90%" alt="..." title="">' +
        '</div>'+
        '<div class="col-lg-8 col-md-10">' +
            '<h6 class="text-start">Manna Kampus M. Supeno</h6>' +
            '<div class="text-start">Jl. Menteri Supeno No.38, Sorosutan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55162</div>' +
            '<br>' +
            '<a href="3"><button id="button"><span>Selengkapnya </span></button></a>' +
        '</div>'+
    '</div>';


    var contentString4 =
    '<link href="resources/css/button.css" rel="stylesheet" />' +
    '<div class="row gx-8 gx-lg-10 p-2">'+
        '<div class="col-lg-4 col-md-4">' +
            '<img class="img ps-1 pt-1" src="public/maintenance/UM3.png" width="90%" alt="..." title="">' +
        '</div>'+
        '<div class="col-lg-8 col-md-10">' +
            '<h6 class="text-start">Manna Kampus Palagan</h6>' +
            '<div class="text-start">Jl. Palagan Tentara Pelajar No.31, Mudal, Sariharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581</div>' +
            '<br>' +
            '<a href="4"><button id="button"><span>Selengkapnya </span></button></a>' +
        '</div>'+
    '</div>';


    var contentString5 =
    '<link href="resources/css/button.css" rel="stylesheet" />' +
    '<div class="row gx-8 gx-lg-10 p-2">'+
        '<div class="col-lg-4 col-md-4">' +
            '<img class="img ps-1 pt-1" src="public/maintenance/UM3.png" width="90%" alt="..." title="">' +
        '</div>'+
        '<div class="col-lg-8 col-md-10">' +
            '<h6 class="text-start">Manna Kampus Godean</h6>' +
            '<div class="text-start">Jl. Godean No.KM. 2.8, Ngestiharjo, Kec. Kasihan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55184</div>' +
            '<br>' +
            '<a href="5"><button id="button"><span>Selengkapnya </span></button></a>' +
        '</div>'+
    '</div>';

    var contentString6 =
    '<link href="resources/css/button.css" rel="stylesheet" />' +
    '<div class="row gx-8 gx-lg-10 p-2">'+
        '<div class="col-lg-4 col-md-4">' +
            '<img class="img ps-1 pt-1" src="public/maintenance/UM3.png" width="90%" alt="..." title="">' +
        '</div>'+
        '<div class="col-lg-8 col-md-10">' +
            '<h6 class="text-start">Manna Kampus Imogiri</h6>' +
            '<div class="text-start">Jl. Imogiri Tim. No.KM. 7, Grojogan, Wirokerten, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55194</div>' +
            '<br>' +
            '<a href="6"><button id="button"><span>Selengkapnya </span></button></a>' +
        '</div>'+
    '</div>';

    var contentString7 =
    '<link href="resources/css/button.css" rel="stylesheet" />' +
    '<div class="row gx-8 gx-lg-10 p-2">'+
        '<div class="col-lg-4 col-md-4">' +
            '<img class="img ps-1 pt-1" src="public/maintenance/UM3.png" width="90%" alt="..." title="">' +
        '</div>'+
        '<div class="col-lg-8 col-md-10">' +
            '<h6 class="text-start">Manna Kampus Mini Pelemsewu</h6>' +
            '<div class="text-start">Jl. Pelemsewu No.C 1, Pandes, Panggungharjo, Kec. Sewon, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55188</div>' +
            '<br>' +
            '<a href="7"><button id="button"><span>Selengkapnya </span></button></a>' +
        '</div>'+
    '</div>';

    var contentString8 =
    '<link href="resources/css/button.css" rel="stylesheet" />' +
    '<div class="row gx-8 gx-lg-10 p-2">'+
        '<div class="col-lg-4 col-md-4">' +
            '<img class="img ps-1 pt-1" src="public/maintenance/UM3.png" width="90%" alt="..." title="">' +
        '</div>'+
        '<div class="col-lg-8 col-md-10">' +
            '<h6 class="text-start">Manna Kampus Mini Diro</h6>' +
            '<div class="text-start">Jl. Bantul No.8, Diro, Pendowoharjo, Kec. Sewon, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55186</div>' +
            '<br>' +
            '<a href="8"><button id="button"><span>Selengkapnya </span></button></a>' +
        '</div>'+
    '</div>';

    var contentString9 =
    '<link href="resources/css/button.css" rel="stylesheet" />' +
    '<div class="row gx-8 gx-lg-10 p-2">'+
        '<div class="col-lg-4 col-md-4">' +
            '<img class="img ps-1 pt-1" src="public/maintenance/UM3.png" width="90%" alt="..." title="">' +
        '</div>'+
        '<div class="col-lg-8 col-md-10">' +
            '<h6 class="text-start">Manna Kampus Mini Minomartani</h6>' +
            '<div class="text-start">Jl. Kakap Raya, RT.019/RW.004, Mladangan, Minomartani, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581</div>' +
            '<br>' +
            '<a href="9"><button id="button"><span>Selengkapnya </span></button></a>' +
        '</div>'+
    '</div>';

    var contentString10 = '<link href="resources/css/button.css" rel="stylesheet" />' +
    '<div class="row gx-8 gx-lg-10 p-2">'+
        '<div class="col-lg-4 col-md-4">' +
            '<img class="img ps-1 pt-1" src="public/maintenance/UM3.png" width="90%" alt="..." title="">' +
        '</div>'+
        '<div class="col-lg-8 col-md-10">' +
            '<h6 class="text-start">Manna Kampus Peralatan Rumah Tangga</h6>' +
            '<div class="text-start">Jl. C. Simanjuntak no. 64, Terban, Gondokusuman, Yogyakarta 55223</div>' +
            '<br>' +
            '<a href="10"><button id="button"><span>Selengkapnya </span></button></a>' +
        '</div>'+
    '</div>';

    // membuat objek info window
    var infowindow1 = new google.maps.InfoWindow({
        content: contentString1,
        maxWidth: 350,
        position: babarsari,
    });

    var infowindow2 = new google.maps.InfoWindow({
        content: contentString2,
        maxWidth: 350,
        position: simanjuntak,
    });

    var infowindow3 = new google.maps.InfoWindow({
        content: contentString3,
        maxWidth: 350,
        position: supeno,
    });
    var infowindow4 = new google.maps.InfoWindow({
        content: contentString4,
        maxWidth: 350,
        position: palagan,
    });
    var infowindow5 = new google.maps.InfoWindow({
        content: contentString5,
        maxWidth: 350,
        position: godean,
    });
    var infowindow6 = new google.maps.InfoWindow({
        content: contentString6,
        maxWidth: 350,
        position: imogiri,
    });
    var infowindow7 = new google.maps.InfoWindow({
        content: contentString7,
        maxWidth: 350,
        position: pelemsewu,
    });
    var infowindow8 = new google.maps.InfoWindow({
        content: contentString8,
        maxWidth: 350,
        position: diro,
    });
    var infowindow9 = new google.maps.InfoWindow({
        content: contentString9,
        maxWidth: 350,
        position: minomartani,
    });
    var infowindow10 = new google.maps.InfoWindow({
        content: contentString10,
        maxWidth: 350,
        position: peralatan,
    });


    // membuat marker
    var marker1 = new google.maps.Marker({
        position: babarsari,
        map: map,
        title: 'Mirota Kampus Babarsari'
    });
    var marker2 = new google.maps.Marker({
        position: simanjuntak,
        map: map,
        title: 'Mirota Kampus C. Simanjuntak'
    });
    var marker3 = new google.maps.Marker({
        position: supeno,
        map: map,
        title: 'Mirota Kampus M. Supeno'
    });
    var marker4 = new google.maps.Marker({
        position: palagan,
        map: map,
        title: 'Mirota Kampus Palagan'
    });
    var marker5 = new google.maps.Marker({
        position: godean,
        map: map,
        title: 'Mirota Kampus Godean'
    });
    var marker6 = new google.maps.Marker({
        position: imogiri,
        map: map,
        title: 'Mirota Kampus Imogiri'
    });
    var marker7 = new google.maps.Marker({
        position: pelemsewu,
        map: map,
        title: 'Mirota Kampus Mini Pelemsewu'
    });
    var marker8 = new google.maps.Marker({
        position: diro,
        map: map,
        title: 'Mirota Kampus Mini Diro'
    });
    var marker9 = new google.maps.Marker({
        position: minomartani,
        map: map,
        title: 'Mirota Kampus Mini Minomartani'
    });
    var marker10 = new google.maps.Marker({
        position: peralatan,
        map: map,
        title: 'Mirota Kampus Peralatan Rumah Tangga'
    });

    // membuat button click
    marker1.addListener('click', function() {
        // tampilkan info window di atas marker
        infowindow1.open(map, marker1);
        infowindow2.close();
        infowindow3.close();
        infowindow4.close();
        infowindow5.close();
        infowindow6.close();
        infowindow7.close();
        infowindow8.close();
        infowindow9.close();
        infowindow10.close();
    });
    marker2.addListener('click', function() {
        // tampilkan info window di atas marker
        infowindow1.close();
        infowindow2.open(map, marker2);
        infowindow3.close();
        infowindow4.close();
        infowindow5.close();
        infowindow6.close();
        infowindow7.close();
        infowindow8.close();
        infowindow9.close();
        infowindow10.close();
    });
    marker3.addListener('click', function() {
        // tampilkan info window di atas marker
        infowindow1.close();
        infowindow2.close();
        infowindow3.open(map, marker3);
        infowindow4.close();
        infowindow5.close();
        infowindow6.close();
        infowindow7.close();
        infowindow8.close();
        infowindow9.close();
        infowindow10.close();
    });
    marker4.addListener('click', function() {
        // tampilkan info window di atas marker
        infowindow1.close();
        infowindow2.close();
        infowindow3.close();
        infowindow4.open(map, marker4);
        infowindow5.close();
        infowindow6.close();
        infowindow7.close();
        infowindow8.close();
        infowindow9.close();
        infowindow10.close();
    });
    marker5.addListener('click', function() {
        // tampilkan info window di atas marker
        infowindow1.close();
        infowindow2.close();
        infowindow3.close();
        infowindow4.close();
        infowindow5.open(map, marker5);
        infowindow6.close();
        infowindow7.close();
        infowindow8.close();
        infowindow9.close();
        infowindow10.close();
    });
    marker6.addListener('click', function() {
        // tampilkan info window di atas marker
        infowindow1.close();
        infowindow2.close();
        infowindow3.close();
        infowindow4.close();
        infowindow5.close();
        infowindow6.open(map, marker6);
        infowindow7.close();
        infowindow8.close();
        infowindow9.close();
        infowindow10.close();
    });
    marker7.addListener('click', function() {
        // tampilkan info window di atas marker
        infowindow1.close();
        infowindow2.close();
        infowindow3.close();
        infowindow4.close();
        infowindow5.close();
        infowindow6.close();
        infowindow7.open(map, marker7);
        infowindow8.close();
        infowindow9.close();
        infowindow10.close();
    });
    marker8.addListener('click', function() {
        // tampilkan info window di atas marker
        infowindow1.close();
        infowindow2.close();
        infowindow3.close();
        infowindow4.close();
        infowindow5.close();
        infowindow6.close();
        infowindow7.close();
        infowindow8.open(map, marker8);
        infowindow9.close();
        infowindow10.close();
    });
    marker9.addListener('click', function() {
        // tampilkan info window di atas marker
        infowindow1.close();
        infowindow2.close();
        infowindow3.close();
        infowindow4.close();
        infowindow5.close();
        infowindow6.close();
        infowindow7.close();
        infowindow8.close();
        infowindow9.open(map, marker9);
        infowindow10.close();
    });
    marker10.addListener('click', function() {
        // tampilkan info window di atas marker
        infowindow1.close();
        infowindow2.close();
        infowindow3.close();
        infowindow4.close();
        infowindow5.close();
        infowindow6.close();
        infowindow7.close();
        infowindow8.close();
        infowindow9.close();
        infowindow10.open(map, marker10);
    });

}
// membuat Event Listener untuk memanggil fungsi initialize pada saat halaman selesai di load
google.maps.event.addDomListener(window, 'load', initialize);
