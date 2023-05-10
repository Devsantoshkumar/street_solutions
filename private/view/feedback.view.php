<?php 
    $this->view("includes/header");
    $this->view("includes/navigation");
?>
<?php 

if(count($errors)>0){
    show($errors);
}

?>

    <div class="container-fluid feedback">
        <div class="row d-flex justify-content-center align-items-center py-5">
            <div class="col-7">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-info border-0 p-4">
                        <h4 class="text-uppercase">Send Your Feedback</h4>
                    </div>
                    <div class="card-body p-5">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="input-group my-2">
                                <input type="text" name="title" class="form-control" id="title" placeholder="Write subject">
                            </div>
                            <div class="input-group my-2">
                                <textarea name="description" class="form-control" rows="5" placeholder="Breaf description"></textarea>
                            </div>
                            <div class="input-group my-2">
                                <div class="row">
                                    <div class="col">
                                        <label for="image" class="p-5 w-100 bg-light text-nowrap border rounded">Upload road image</label>
                                        <input type="file" name="image" class="d-none" id="image">
                                    </div>
                                    <div class="col">
                                        <label for="video" class="p-5 w-100 bg-light text-nowrap border rounded">Upload road video</label>
                                        <input type="file" name="video" class="d-none" id="video">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <?php 
                                      $depart = new Dapartment();
                                      $dep = $depart->findAll();
                                      if($dep):
                                    ?>
                                   <select name="department_id" class="form-control">
                                    <option selected disabled>Select Level of department</option>
                                    <?php foreach($dep as $row): ?>
                                    <option value="<?= $row->dapartments_id; ?>"><?= $row->dapartment; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                <?php endif; ?>
                                </div>
                            </div>
                            <br><br>


                            <div class="input-group my-2">
                                <textarea name="location" id="address" class="form-control" rows="3"></textarea>
                                <input type="hidden" class="form-control" name="latitude" id="latitude">
                                <input type="hidden" class="form-control" name="longitude" id="longitude">
                            </div>

                            <button class="btn btn-primary">Send Feedback</button>
                        </form>
                        <div id="map" class="my-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    

<?php  $this->view("includes/footer"); ?>



<script>

    let inputLat = document.getElementById("latitude");
    let inputLng = document.getElementById("longitude");
    let addr = document.getElementById("address");


    var map = L.map('map');
    

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);



    if(!navigator.geolocation){
        throw new Error("No geolocation available");
    }

    let marker, circle, zoomed;
    

    function success(pos){

        let lat = pos.coords.latitude;
        let lng = pos.coords.longitude;
        let accuracy = pos.coords.accuracy;

        inputLat.value = lat;
        inputLng.value = lng;

        map.setView([lat, lng], 13);

        if(marker){
            map.removeLayer(marker);
            map.removeLayer(circle);
        }

        marker = L.marker([lat, lng]).addTo(map);
        circle = L.circle([lat, lng], {
            // color: 'red',
            // fillColor: 'rgba(255, 0, 51, 0.685)',
            // fillOpacity: 0.2,
            radius: accuracy
        }).addTo(map);

        if(!zoomed){
            zoomed = map.fitBounds(circle.getBounds());
        }


    }

    function error(err){
         console.log(err)
         if(err.code === 1){
            alert("Please allow access to geolocation");
         }else{
            alert("Position unavalable");
         }
    }


    const options = {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
        
    }

    navigator.geolocation.watchPosition(success, error, options);


    var geocoder = L.Control.Geocoder.nominatim();


    function reverseGeocode() {
      var latitude = parseFloat(document.getElementById('latitude').value);
      var longitude = parseFloat(document.getElementById('longitude').value);
      var latlng = L.latLng(latitude, longitude);

      geocoder.reverse(latlng, map.options.crs.scale(map.getZoom()), function(results) {
        if (results.length > 0) {
          var address = results[0].name;
          addr.value = address;
        } else {
          alert('No results found');
        }
      });
    }


</script>
