//Nav Script
$('.navTrigger').click(function() {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});

//Map Scripts
// Initialize and add the map
function initMap() {
    // The location of Current
    var CurrentVapor = {
        lat: 40.6214996,
        lng: -111.8895805
    };
    // The map, centered at Current Vapor
    var map = new google.maps.Map(
        document.getElementById('map'), {
            zoom: 15,
            center: CurrentVapor
        });
    // The marker, positioned at Current
    var marker = new google.maps.Marker({
        position: CurrentVapor,
        map: map
    });
}