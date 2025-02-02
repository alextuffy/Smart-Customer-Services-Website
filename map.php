<!DOCTYPE html>

<head>
    <title>CPS630 Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CSS/nav.css">
    <link rel="stylesheet" href="./CSS/map.css">
</head>
<html>
  <?php include 'nav.php' ?> 
  <body>
    <div class="container m-4">
      <h1 style="font-size: 7vmin;">Invoice Summary</h1>
    </div>
    <div class="align-content-center container-fluid">
      <div class="row justify-content-evenly mb-3 mt-3">
        <div class="card col-5 bg-darkk shadow-lg rounded">
          <h2>Branch information</h2>
          <div class="card-body ">
            <h4 class="card-title branchName">Branch Name from DB</h4>
            <p class="card-text ">Branch Address Branch Address Branch Address Branch Address</p>
          </div>
        </div>
        <div class="card col-6 bg-darkk shadow-lg rounded">
          <h2>Recipient Delivery Information</h2>
          <div class="card-body ">
            <h4 class="card-title CustomerName">RecipientFullName from DB</h4>
            <p class="card-text CustomerAddress"><b>Address: </b>Address From DB</p>
            <p class="card-text CustomerPC"><b>Postal Code: </b>From DB</p>
            <p class="card-text CustomerDate"><b>Delivery Date: </b>From DB</p>
            <p class="card-text CustomerExtra"><b>Note: </b>From DB (default empty)</p>

          </div>
        </div>
      </div>
      <div class="row justify-content-evenly">
        <div class="card d-sm-none d-md-block col-6 p-2 bg-darkk shadow-lg rounded overflow-hidden">
          <h4 class="card-title"><b>Order ID:</b> theID</h4>
          <table>
            <tr>
              <th>Product Name</th>
              <th>Size/Color</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Tax</th>
              <th>Total</th>
            </tr>
            <tr>
              <td>Split Hem Sleeveless Dress Without Blouse</td>
              <td>L/Coffee Brown</td>
              <td>20.05</td>
              <td>1</td>
              <td>X</td>
              <td>20.05</td>
            </tr><tr>
              <td>Zip Back Houndstooth Skirt</td>
              <td>M/Multicolor</td>
              <td>12.99</td>
              <td>1</td>
              <td>X</td>
              <td>12.99</td>
            </tr><tr>
              <td>High Waist Wide Leg Jeans</td>
              <td>M/Black</td>
              <td>34.58</td>
              <td>1</td>
              <td>4.49</td>
              <td>39.07</td>
            </tr><tr>
              <td>High Waist Wide Leg Jeans</td>
              <td>M/Black</td>
              <td>34.58</td>
              <td>1</td>
              <td>4.49</td>
              <td>39.07</td>
            </tr><tr>
              <td>High Waist Wide Leg Jeans</td>
              <td>M/Black</td>
              <td>34.58</td>
              <td>1</td>
              <td>4.49</td>
              <td>39.07</td>
            </tr><tr>
              <td>High Waist Wide Leg Jeans</td>
              <td>M/Black</td>
              <td>34.58</td>
              <td>1</td>
              <td>4.49</td>
              <td>39.07</td>
            </tr><tr>
              <td>High Waist Wide Leg Jeans</td>
              <td>M/Black</td>
              <td>34.58</td>
              <td>1</td>
              <td>4.49</td>
              <td>39.07</td>
            </tr><tr>
              <td>High Waist Wide Leg Jeans</td>
              <td>M/Black</td>
              <td>34.58</td>
              <td>1</td>
              <td>4.49</td>
              <td>39.07</td>
            </tr>
          </table>
        </div>
        <div class="col-5 p-3 bg-darkk shadow-lg rounded total">
          <P><b>Net Total: </b> Amount</P>
          <hr class="rounded">
          <p><b>Online Service Charges: </b> Amount</p>
          <hr class="rounded">
          <p><b>Shipping Fees: </b> Amount</p>
          <hr class="rounded">
          <p><b>Shipping Tax: </b> Amount</p>
        </div>
      </div>
      <div class="row justify-content-evenly mt-3 overflow-hidden">
        <div class="card col-10 p-4 bg-darkk shadow-lg rounded align-items-center">
          <h2>The Delivery Route</h2>
          <div id="map"></div>
            <script>
                function initMap()
                {
                  var location = {lat: 43.7272, lng: -79.4121};
                  var location2 = {lat: 43.7575, lng: -79.3910};
                  var map = new google.maps.Map(document.getElementById("map"),
                      { zoom: 12, center: location});
                  var marker = new google.maps.Marker(
                      {position: location, map: map});    
                  var infoWindow = new google.maps.InfoWindow(
                      {content: "<h5> The Branch </h5>"});
                  marker.addListener("click", function()
                      {infoWindow.open(map, marker); });
                  var marker2 = new google.maps.Marker(
                      {position: location2, map: map});    
                  var infoWindow2 = new google.maps.InfoWindow(
                      {content: "<h5> Your Address </h5>"});
                  marker2.addListener("click", function()
                      {infoWindow2.open(map, marker2); });
                  } 

            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh2dqXcuimTN834D5gv8p8sPxOxLMMTXc&callback=initMap">
            </script>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
  