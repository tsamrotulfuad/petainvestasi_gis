<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
        <link rel="stylesheet" href="{{ asset('gis/css/leaflet.css') }}">
        <link rel="stylesheet" href="{{ asset('gis/css/qgis2web.css') }}">
        <link rel="stylesheet" href="{{ asset('gis/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('gis/css/leaflet-control-geocoder.Geocoder.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
         <!-- favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('logo/favicon.png') }}">
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            min-height: 10rem;
            padding-top: 2rem;
        }

        main > .container {
            padding: 20px 15px 0;
        }
        </style>
        <title>Si Oni | Peta Potensi</title>
    </head>
    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-md fixed-top bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img class="mt-0" src="{{ asset('logo/kotapasuruan_dpmptsp.png') }}" alt="" height="45">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarsExample01">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Peta Potensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/batiklist">Info Potensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/petastatis">Peta Investasi</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        <!-- /navbar -->
        <div id="map">
        </div>
        <script src="{{ asset('gis/js/qgis2web_expressions.js')}}"></script>
        <script src="{{ asset('gis/js/leaflet.js')}}"></script>
        <script src="{{ asset('gis/js/leaflet.rotatedMarker.js')}}"></script>
        <script src="{{ asset('gis/js/leaflet.pattern.js')}}"></script>
        <script src="{{ asset('gis/js/leaflet-hash.js')}}"></script>
        <script src="{{ asset('gis/js/Autolinker.min.js')}}"></script>
        <script src="{{ asset('gis/js/rbush.min.js')}}"></script>
        <script src="{{ asset('gis/js/labelgun.min.js')}}"></script>
        <script src="{{ asset('gis/js/labels.js')}}"></script>
        <script src="{{ asset('gis/js/leaflet-control-geocoder.Geocoder.js')}}"></script>
        <script src="{{ asset('gis/data/ADMINISTRASI_AR_KECAMATAN_1.js')}}"></script>
        <script src="{{ asset('gis/data/Batik_2.js')}}"></script>
        <script src="{{ asset('gis/data/Pelabuhan_3.js')}}"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-7.690670586436849,112.86869774751719],[-7.641528758268818,112.9436736767886]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_GoogleSatellite_0');
        map.getPane('pane_GoogleSatellite_0').style.zIndex = 400;
        var layer_GoogleSatellite_0 = L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            pane: 'pane_GoogleSatellite_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_GoogleSatellite_0;
        map.addLayer(layer_GoogleSatellite_0);
        function pop_ADMINISTRASI_AR_KECAMATAN_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Shape_Leng'] !== null ? autolinker.link(feature.properties['Shape_Leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Shape_Area'] !== null ? autolinker.link(feature.properties['Shape_Area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_ADMINISTRASI_AR_KECAMATAN_1_0(feature) {
            switch(String(feature.properties['Kecamatan'])) {
                case 'Kec. Bugul Kidul':
                    return {
                pane: 'pane_ADMINISTRASI_AR_KECAMATAN_1',
                opacity: 1,
                color: 'rgba(42,65,215,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 4.0,
                fillOpacity: 0,
                interactive: true,
            }
                    break;
                case 'Kec. Gadingrejo':
                    return {
                pane: 'pane_ADMINISTRASI_AR_KECAMATAN_1',
                opacity: 1,
                color: 'rgba(136,219,33,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 4.0,
                fillOpacity: 0,
                interactive: true,
            }
                    break;
                case 'Kec. Panggungrejo':
                    return {
                pane: 'pane_ADMINISTRASI_AR_KECAMATAN_1',
                opacity: 1,
                color: 'rgba(117,216,181,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 4.0,
                fillOpacity: 0,
                interactive: true,
            }
                    break;
                case 'Kec. Purworejo':
                    return {
                pane: 'pane_ADMINISTRASI_AR_KECAMATAN_1',
                opacity: 1,
                color: 'rgba(209,25,200,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 4.0,
                fillOpacity: 0,
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_ADMINISTRASI_AR_KECAMATAN_1');
        map.getPane('pane_ADMINISTRASI_AR_KECAMATAN_1').style.zIndex = 401;
        map.getPane('pane_ADMINISTRASI_AR_KECAMATAN_1').style['mix-blend-mode'] = 'normal';
        var layer_ADMINISTRASI_AR_KECAMATAN_1 = new L.geoJson(json_ADMINISTRASI_AR_KECAMATAN_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_ADMINISTRASI_AR_KECAMATAN_1',
            layerName: 'layer_ADMINISTRASI_AR_KECAMATAN_1',
            pane: 'pane_ADMINISTRASI_AR_KECAMATAN_1',
            onEachFeature: pop_ADMINISTRASI_AR_KECAMATAN_1,
            style: style_ADMINISTRASI_AR_KECAMATAN_1_0,
        });
        bounds_group.addLayer(layer_ADMINISTRASI_AR_KECAMATAN_1);
        map.addLayer(layer_ADMINISTRASI_AR_KECAMATAN_1);
        function pop_Batik_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['nama'] !== null ? autolinker.link(feature.properties['nama'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <div class="d-grid gap-2"><a class="btn btn-primary btn-sm" href="'+ feature.properties['web'].toLocaleString() +'" role="button" style="color:white;">Detail</a></div></td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Batik_2_0() {
            return {
                pane: 'pane_Batik_2',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: '{{ asset("gis/markers/blue-marker.svg")}}',
            iconSize: [38.0, 38.0]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_Batik_2');
        map.getPane('pane_Batik_2').style.zIndex = 402;
        map.getPane('pane_Batik_2').style['mix-blend-mode'] = 'normal';
        var layer_Batik_2 = new L.geoJson(json_Batik_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Batik_2',
            layerName: 'layer_Batik_2',
            pane: 'pane_Batik_2',
            onEachFeature: pop_Batik_2,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_Batik_2_0(feature));
            },
        });
        function pop_Pelabuhan_3(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['nama'] !== null ? autolinker.link(feature.properties['nama'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['web'] !== null ? autolinker.link(feature.properties['web'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Pelabuhan_3_0() {
            return {
                pane: 'pane_Pelabuhan_3',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: '{{ asset("gis/markers/red-marker.svg") }}',
            iconSize: [38.0, 38.0]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_Pelabuhan_3');
        map.getPane('pane_Pelabuhan_3').style.zIndex = 403;
        map.getPane('pane_Pelabuhan_3').style['mix-blend-mode'] = 'normal';
        var layer_Pelabuhan_3 = new L.geoJson(json_Pelabuhan_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Pelabuhan_3',
            layerName: 'layer_Pelabuhan_3',
            pane: 'pane_Pelabuhan_3',
            onEachFeature: pop_Pelabuhan_3,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_Pelabuhan_3_0(feature));
            },
        });
        bounds_group.addLayer(layer_Pelabuhan_3);
        map.addLayer(layer_Pelabuhan_3);
        bounds_group.addLayer(layer_Batik_2);
        map.addLayer(layer_Batik_2);
        var osmGeocoder = new L.Control.Geocoder({
            collapsed: true,
            position: 'topleft',
            text: 'Search',
            title: 'Testing'
        }).addTo(map);
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .className += ' fa fa-search';
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .title += 'Search for a place';
        var baseMaps = {};
        L.control.layers(baseMaps,{'<img src="{{ asset("gis/legend/Pelabuhan_3.png")}}" /> Pelabuhan': layer_Pelabuhan_3, '<img src="{{ asset("gis/legend/Batik_2.png")}}" /> Batik': layer_Batik_2,'ADMINISTRASI_AR_KECAMATAN<br /><table><tr><td style="text-align: center;"><img src="{{ asset("gis/legend/ADMINISTRASI_AR_KECAMATAN_1_KecBugulKidul0.png")}}" /></td><td>Kec. Bugul Kidul</td></tr><tr><td style="text-align: center;"><img src="{{ asset("gis/legend/ADMINISTRASI_AR_KECAMATAN_1_KecGadingrejo1.png")}}" /></td><td>Kec. Gadingrejo</td></tr><tr><td style="text-align: center;"><img src="{{ asset("gis/legend/ADMINISTRASI_AR_KECAMATAN_1_KecPanggungrejo2.png")}}" /></td><td>Kec. Panggungrejo</td></tr><tr><td style="text-align: center;"><img src="{{ asset("gis/legend/ADMINISTRASI_AR_KECAMATAN_1_KecPurworejo3.png")}}" /></td><td>Kec. Purworejo</td></tr></table>': layer_ADMINISTRASI_AR_KECAMATAN_1,"Google Satellite": layer_GoogleSatellite_0,},{collapsed:false}).addTo(map);
        setBounds();
        var i = 0;
        layer_ADMINISTRASI_AR_KECAMATAN_1.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['Kecamatan'] !== null?String('<div style="color: #ffffff; font-size: 10pt; font-family: \'Liberation Sans\', sans-serif;">' + layer.feature.properties['Kecamatan']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_ADMINISTRASI_AR_KECAMATAN_1'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        resetLabels([layer_ADMINISTRASI_AR_KECAMATAN_1]);
        map.on("zoomend", function(){
            resetLabels([layer_ADMINISTRASI_AR_KECAMATAN_1]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_ADMINISTRASI_AR_KECAMATAN_1]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_ADMINISTRASI_AR_KECAMATAN_1]);
        });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
</html>
