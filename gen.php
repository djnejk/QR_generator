<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>QR Code Styling</title>
  <script type="text/javascript" src="https://unpkg.com/qr-code-styling@1.5.0/lib/qr-code-styling.js"></script>
</head>

<body>
  <div id="canvas"></div>

  <button onclick="downloadQR('png')">Stáhnout PNG</button>
  <button onclick="downloadQR('jpg')">Stáhnout JPG</button>
  <button onclick="downloadQR('svg')">Stáhnout SVG</button>

<a href="/">Zpět na generaci</a>
  <script type="text/javascript">
    const qrCode = new QRCodeStyling({
      "width": 1024,
      "height": 1024,
      "data": "<?php echo (($_POST['odkaz'] == 'custom') ? $_POST['customLink'] : $_POST['odkaz']); ?>",
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
          "rotation": 0.75,
          "colorStops": [{
              "offset": 0,
              "color": "<?php echo $_POST['barva1']; ?>"
            },
            {
              "offset": 1,
              "color": "<?php echo $_POST['barva2']; ?>"
            }
          ]
        }
      },
      "backgroundOptions": {
        "gradient": {
          "type": "linear",
          "rotation": 0.75,
          "colorStops": [{
              "offset": 0,
              "color": "<?php echo $_POST['barva3']; ?>"
            },
            {
              "offset": 1,
              "color": "<?php echo $_POST['barva4']; ?>"
            }
          ]
        }
      },
      "image": <?php echo (($_POST['logo'] == 'none') ? 'null' : '"' . $_POST['logo'] . '"'); ?>,
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
          "color1": "<?php echo $_POST['barva3']; ?>",
          "color2": "<?php echo $_POST['barva4']; ?>",
          "rotation": "0"
        }
      }
    });

    qrCode.append(document.getElementById("canvas"));

    function downloadQR(extension) {
     

      // Stažení QR kódu se zvoleným typem souboru
      qrCode.download({
        name: 'qr',
        extension: extension
      });
    }
  </script>
</body>

</html>