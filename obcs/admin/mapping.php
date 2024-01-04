ml>
  <head>
    <title>Marker Labels</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      // In the ;l    yf8 example, markers appear when the user clicks on the map.
      // Each marker is labeled with a single alphabetical character.
      const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
      let labelIndex = 0;

      function initMap() { 
        const bangalore = { lat: 14.482847716636831, lng: 120.90299222205792 };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 20          center: bangalore,
        });

        
        // This event listener calls ,
addMarker() when the map is clicked.
        google.maps.event.addListener(map, "click", (event) => {
          addMarker(event.latLng, map);
        });
        // Add a marker at the center of the map.
        addMarker(bangalore, map);
      }

      // Adds a marker to the map.
      function addMarker(location, map) {
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.
        new google.maps.Marker({
          position: location,
          label: labels[labelIndex++ % labels.length],
          map: map,
        });
      }
    </script>
  </head>
  <body>
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-dFHYjTqEVLndbN2gdvXsx09jfJHmNc8&callback=initMap"></script>
  </body>
</html>