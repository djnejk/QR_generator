<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>QR Code Styling</title>
  <script type="text/javascript" src="https://unpkg.com/qr-code-styling@1.5.0/lib/qr-code-styling.js"></script>
</head>

<body>
  <div id="canvas"></div>
  <script type="text/javascript">
    
    const qrCode = new QRCodeStyling({
      "width": 512,
      "height": 512,
      "data": "https://qr.runfp.cz/plakat",
      "margin": 0,
      "qrOptions": {
        "typeNumber": "0",
        "mode": "Byte",
        "errorCorrectionLevel": "Q"
      },
      "imageOptions": {
        "hideBackgroundDots": true,
        "imageSize": 0.4,
        "margin": 0
      },
      "dotsOptions": {
        "type": "extra-rounded",
        "gradient": {
          "type": "linear",
          "rotation": 0,
          "colorStops": [{
              "offset": 0,
              "color": "#707070"
            },
            {
              "offset": 1,
              "color": "#6a1a4c"
            }
          ]
        }
      },
      "backgroundOptions": {
        "color": "#ffffff"
      },
      "image": "",
      "dotsOptionsHelper": {
        "colorType": {
          "single": true,
          "gradient": false
        },
        "gradient": {
          "linear": true,
          "radial": false,
          "color1": "#6a1a4c",
          "color2": "#6a1a4c",
          "rotation": "0"
        }
      },
      "cornersSquareOptions": {
        "type": "extra-rounded",
        "color": "#000000"
      },
      "cornersSquareOptionsHelper": {
        "colorType": {
          "single": true,
          "gradient": false
        },
        "gradient": {
          "linear": true,
          "radial": false,
          "color1": "#000000",
          "color2": "#000000",
          "rotation": "0"
        }
      },
      "cornersDotOptions": {
        "type": "",
        "color": "#000000"
      },
      "cornersDotOptionsHelper": {
        "colorType": {
          "single": true,
          "gradient": false
        },
        "gradient": {
          "linear": true,
          "radial": false,
          "color1": "#000000",
          "color2": "#000000",
          "rotation": "0"
        }
      },
      "backgroundOptionsHelper": {
        "colorType": {
          "single": true,
          "gradient": false
        },
        "gradient": {
          "linear": true,
          "radial": false,
          "color1": "#ffffff",
          "color2": "#ffffff",
          "rotation": "0"
        }
      }
    });

    qrCode.append(document.getElementById("canvas"));


    // Access the canvas element created by QRCodeStyling
    var canvas = document.querySelector('#canvas canvas');

    // Wait for canvas to be fully rendered
    setTimeout(function() {
      // Convert the QR code canvas to a data URL
      var dataURL = canvas.toDataURL();

      // Create an image element and set its source to the data URL
      var image = new Image();
      image.src = dataURL;

      // Append the image to the body after it's fully loaded
      image.onload = function() {
        document.body.appendChild(image);
      };
    }, 1000); // Adjust the delay time as needed
  </script>
</body>

</html>
