$(document).on("keydown", "form", function (event) {
    return event.key != "Enter";
});

let map; //map
let shape; //shape on map
let markers = [];
let container;

async function initMap(form_selector, form_type) {

    container = form_selector;

    if (form_type == 'edit') {
        let loc1 = document.querySelector(container + " .GPS0").value.split(",");
        let loc2 = document.querySelector(container + " .GPS1").value.split(",");
        let loc3 = document.querySelector(container + " .GPS2").value.split(",");
        let loc4 = document.querySelector(container + " .GPS3").value.split(",");
        coordinates = [{
            lat: Number(loc1[0]),
            lng: Number(loc1[1])
        },
        {
            lat: Number(loc2[0]),
            lng: Number(loc2[1])
        },
        {
            lat: Number(loc3[0]),
            lng: Number(loc3[1])
        },
        {
            lat: Number(loc4[0]),
            lng: Number(loc4[1])
        }

        ];
    } else {
        coordinates = await getLocation();
        console.log("coordinates based on geolocation");
        console.log(coordinates);
    }

    // intialize map
    map = new google.maps.Map(document.querySelector(container + " .googleMap"), {
        zoom: 18,
        center: {
            lat: coordinates[0].lat,
            lng: coordinates[0].lng
        },
        mapTypeId: 'terrain'
    });


    shape = new google.maps.Polygon({
        paths: coordinates,
        strokeColor: '#ff5b06',
        strokeOpacity: 1,
        strokeWeight: 3,
        fillColor: '#000000',
        fillOpacity: 0.6,
        draggable: true,
        geodesic: true,

    });
    shape.addListener("dragend", function (event) {

        updateMap();
    });


    //add serach box on map
    const input = document.querySelector(container + " .pac-input");

    const searchBox = new google.maps.places.SearchBox(input);

    map.addListener("bounds_changed", () => {
        searchBox.setBounds(map.getBounds());
    });

    searchBox.addListener("places_changed", () => {


        let place = searchBox.getPlaces()[0];
        //generate four locations around founded place
        let locations = genarateLocationsArround(place.geometry.location);
        //overide paths for shape
        shape.setPath(locations);
        //update map
        updateMap();

    });


    updateMap();

}



//draw shape on map
function updateMap() {
    //remove old markers
    removeMarkers();
    //draw shap on map
    shape.setMap(map);

    // Use bindTo to allow dynamic drag of markers to refresh poly.
    shape.binder = new MVCArrayBinder(shape.getPath());
    //draw shape markers on map 
    for (var j = 0; j < shape.getPath().getLength(); j++) {
        var mark = new google.maps.Marker({
            position: shape.getPath().getAt(),
            map: map,
            draggable: true
        });
        mark.bindTo('position', shape.binder, (j).toString());

        markers.push(mark);


    }
    console.log("object path");
    console.log(shape.getPath().getArray());

    map.setCenter(shape.getPath().getAt(0));
    //update form setting with new locations
    fillSettingForm(shape.getPath().getArray());

}

//Fill Setting Form With New Locations
function fillSettingForm(coordinates) {

    coordinates.forEach(function (val, key) {

        document.querySelector(container + " .GPS" + key).value = val.lat() + "," + val.lng();;
        // document.getElementById("GPS" + key).value = val.lat() + "," + val.lng();

    });
}

//remove markers on map
function removeMarkers() {
    markers.forEach(function (marker) {
        marker.setMap(null);

    });
    markers = [];
}





//MvcArrayBinder To Bind locations 

function MVCArrayBinder(mvcArray) {
    this.array_ = mvcArray;
}

MVCArrayBinder.prototype = new google.maps.MVCObject();
MVCArrayBinder.prototype.get = function (key) {
    if (!isNaN(parseInt(key))) {
        return this.array_.getAt(parseInt(key));
    } else {
        this.array_.get(key);
    }
}
MVCArrayBinder.prototype.set = function (key, val) {
    if (!isNaN(parseInt(key))) {
        this.array_.setAt(parseInt(key), val);

        document.querySelector(container + " .GPS" + key).value = val.lat() + "," + val.lng();

        // document.getElementById("GPS" + key).value = val.lat() + "," + val.lng();

    } else {
        this.array_.set(key, val);
    }
}





//generate custom locations arround specified location
function genarateLocationsArround(location) {
    locations = [];
    lat = location.lat();
    lng = location.lng();

    prUp = {
        lat: -0.00065099999,
        lng: -0.000011
    }
    prDw = {
        lat: 0.000601,
        lng: 0.00008599999
    }
    prRi = {
        lat: -0.00004599999,
        lng: -0.00094
    }
    prLe = {
        lat: -0.00008799999,
        lng: 0.000816
    }

    locations.push(
        new google.maps.LatLng(lat + prUp.lat, lng + prUp.lng),
        new google.maps.LatLng(lat + prRi.lat, lng + prRi.lng),
        new google.maps.LatLng(lat + prDw.lat, lng + prDw.lng),
        new google.maps.LatLng(lat + prLe.lat, lng + prLe.lng),
    );


    return locations;

}

async function getLocation() {
    let myPromise = new Promise(function (myResolve, myReject) {

        var lat1 = 30.54968300001;
        var lng1 = 31.0106231;
        var lat2 = 30.55028800001;
        var lng2 = 31.0096941;
        var lat3 = 30.550935;
        var lng3 = 31.01072009999;
        var lat4 = 30.55024600001;
        var lng4 = 31.0114501;


        let coordinates = [
            { lat: lat1, lng: lng1 },
            { lat: lat2, lng: lng2 },
            { lat: lat3, lng: lng3 },
            { lat: lat4, lng: lng4 },
        ];


        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition((postion) => {

                let location = new google.maps.LatLng(postion.coords.latitude, postion.coords.longitude);


                coordinates = genarateLocationsArround(location);
                myResolve(coordinates);

                console.log("in" +
                    coordinates);
            }, function (error) {

                myResolve(coordinates);

            });
        }



    });

    return await myPromise;





}



// function showError(error) {
//     switch (error.code) {
//         case error.PERMISSION_DENIED:
//             x.innerHTML = "User denied the request for Geolocation."

//         case error.POSITION_UNAVAILABLE:
//             x.innerHTML = "Location information is unavailable."
//             break;
//         case error.TIMEOUT:
//             x.innerHTML = "The request to get user location timed out."
//             break;
//         case error.UNKNOWN_ERROR:
//             x.innerHTML = "An unknown error occurred."
//             break;
//     }
// }