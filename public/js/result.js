var map;
var marker;
var infoWindow;
var lc = L.control.locate(option).addTo(map);
lc.start();
function initMap() {
    if (!navigator.geolocation) {
        alert('Geolocation APIに対応していません');
        return false;
    }
 
    // 現在地の取得
    navigator.geolocation.getCurrentPosition(function(position) {
        // 緯度経度の取得
        latLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
 
        // 地図の作成
        map = new google.maps.Map(document.getElementById('map'), {
            center: latLng,
            zoom: 20
        });
 
        // マーカーの追加
        marker = new google.maps.Marker({
            position: latLng,
            map: map
        });
        
        infoWindow = new google.maps.InfoWindow({ // 吹き出しの追加
        content: '<img src="/storage/image.jpg">' // 吹き出しに表示する内容
        });
        marker.addListener('click', function() { // マーカーをクリックしたとき
        infoWindow.open(map, marker); // 吹き出しの表示
        });
    }, function() {
        alert('位置情報取得に失敗しました');
    });
}