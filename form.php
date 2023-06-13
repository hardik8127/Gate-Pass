<!DOCTYPE html>
<html>

<head>
  <title>Appointment Form</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="logo-container">
    <img src="BHEL_logo.svg.png" alt="Logo">
  </div>

  <h2>Gate Pass</h2>
  <form action="#" method="POST">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="gender">Gender:</label><br>
    <select id="gender" name="gender" required>
      <option value="">Select Gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Phone number:</label><br>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="id">ID:</label><br>
    <input type="id" id="id" name="id" required><br><br>

    <label for="address">Address:</label><br>
    <textarea id="address" name="address" rows="4" cols="50" required></textarea><br><br>

    <label for="appointmentWith">Appointment with:</label><br>
    <input type="text" id="appointmentWith" name="appointmentWith" required><br><br>

    <label for="datetime">Date and time:</label><br>
    <input type="datetime-local" id="datetime" name="datetime" required><br><br>

    <label for="time">Checkout Time:</label><br>
    <input type="time" id="Checkouttime" name="Checkouttime"><br><br>

    <div id="webcamContainer">
      <video id="webcam" width="320" height="240" autoplay></video><br>
      <canvas id="canvas" style="display: none;"></canvas>
    </div>
    <div id="capture">
      <button id="Capture" onclick="take_snapshot()">Capture Image</button> <br> <br>
    </div>
    


    <input type="submit" value="Submit">
  </form>

  
</body>
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"
    integrity="sha512-dQIiHSl2hr3NWKKLycPndtpbh5iaHLo6MwrXm7F0FM5e+kL2U16oE9uIwPHUl6fQBeCthiEuV/rzP3MiAB8Vfw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    Webcam.set({
  width: 250,
  height: 250,
  image_format: 'jpeg',
  jpeg_quality: 90
}) 

Webcam.attach("#webcamContainer")

function take_snapshot(){
  Webcam.snap(function(data_uri){
    document.getElementById('webcamContainer').innerHTML = 
    '<img src="'+data_uri+'"/>';
  })

}
  </script>
    
</html>