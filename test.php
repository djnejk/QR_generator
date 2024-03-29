<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Canvas to Image</title>
</head>
<body>
  <canvas id="myCanvas" width="400" height="200" style="border:1px solid #000;"></canvas>
  <div id="content"></div>

  <script>
    function draw() {
      var canvas = document.getElementById('myCanvas');
      if (canvas.getContext) {
        var ctx = canvas.getContext('2d');

        ctx.fillStyle = 'green';
        ctx.fillRect(10, 10, 100, 100);

        ctx.fillStyle = 'red';
        ctx.fillRect(150, 10, 100, 100);

        ctx.fillStyle = 'blue';
        ctx.fillRect(290, 10, 100, 100);
      }
    }

    function saveAsImage() {
      draw(); // Vykreslí na plátno

      var canvas = document.getElementById('myCanvas');
      var dataURL = canvas.toDataURL(); // Konvertuje plátno na data URL

      var image = new Image();
      image.src = dataURL;
      image.onload = function() {
        document.body.appendChild(image); // Přidá obrázek do těla dokumentu až poté, co je plně načtený
      };
    }

    saveAsImage(); // Zavolá funkci saveAsImage() při načtení stránky
  </script>
</body>
</html>
