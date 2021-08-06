function iniciarMap(){
  var coord = {lat:20.4890176 , lng:-99.2003404};
  var map = new google.maps.Map(document.getElementById('map'),{
    zoom:16,
    center: coord
  });
  var marker = new google.maps.Marker({
    position: coord,
    map: map,
    title: 'Hotel Sol y Luna'
  });
}