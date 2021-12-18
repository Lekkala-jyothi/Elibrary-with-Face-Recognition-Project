<head>
   <link rel="stylesheet" href="./css/style.css">
</head>
<main>
   <div class="camera" id="capture"></div>
   <div id="results"></div>
   <input type='button' class="verify" value="Verify" onClick="take_snapshot()">
   <p id="result"></p>
</main>
<script type="text/javascript" src="./js/webcam.min.js"></script>
<script language="JavaScript">
   Webcam.set({
      width: 320,
      height: 240,
      image_format: 'jpeg',
      jpeg_quality: 90
   });
   Webcam.attach('#capture');

   function take_snapshot() {
      Webcam.snap(function(data_uri) {
         Webcam.upload(data_uri, 'verify.php', function(code, text, Name) {
            alert(text);
            res = JSON.parse(text)
            if (res.detection == 'true') {
               document.getElementById('capture').style.display = 'none';
            } else {
               // document.getElementById('capture').style.display = 'none';
            }
            document.querySelector('p#result').innerHTML = res.detection;
            document.getElementById('results').innerHTML = '' + '<img src="' + data_uri + '"class="result">';
         });
      });
   }
 </script>