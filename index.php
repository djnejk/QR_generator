<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Generátor QR kódu</title>
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/darkly/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/3.4.0/css/bootstrap-colorpicker.min.css">
  <script type="text/javascript" src="https://unpkg.com/qr-code-styling@1.5.0/lib/qr-code-styling.js"></script>

</head>

<body>

  <div class="container mt-5">
    <h1>Generátor QR kódu</h1>
    <form id="qrForm" action="gen.php" method="post">
      <div class="form-group">
        <label for="odkaz">Odkaz:</label>
        <select class="form-control" id="odkaz" name="odkaz">
          <option value="https://qr.runfp.cz/plakat">https://qr.runfp.cz/plakat (Použití na plakát)</option>
          <option value="https://qr.runfp.cz/plakat-misto">https://qr.runfp.cz/plakat-misto (Použití na plakát na místě události)</option>
          <option value="https://qr.runfp.cz/fb">https://qr.runfp.cz/fb (Použití na Facebook)</option>
          <option value="https://qr.runfp.cz/ig">https://qr.runfp.cz/ig (Použití na Instagram)</option>
          <option value="custom">Jiný odkaz</option>
        </select>
        <input type="text" class="form-control mt-2" id="customLink" name="customLink" placeholder="Zadejte vlastní odkaz" style="display: none;">
      </div>
      <div class="form-group">
        <label>Logo:</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="logo" id="noLogo" value="none">
          <label class="form-check-label" for="noLogo">Žádné</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="logo" id="RFPLogo" value="img/logo_RFP.png" checked>
          <label class="form-check-label" for="RFPLogo">
            <img src="img/logo_RFP.png" alt="RFP Logo" width="30">
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="logo" id="FPPLogo" value="img/logo_FPP.png">
          <label class="form-check-label" for="FPPLogo">
            <img src="img/logo_FPP.png" alt="FPP Logo" width="30">
          </label>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="barva1">Barva QR primární:</label>
          <input type="text" class="form-control" id="barva1" name="barva1" value="#000000">
        </div>
        <div class="form-group col-md-6">
          <label for="barva2">Barva QR sekundární:</label>
          <input type="text" class="form-control" id="barva2" name="barva2" value="#000000">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="barva3">Barva pozadí primární:</label>
          <input type="text" class="form-control" id="barva3" name="barva3" value="#ffffff">
        </div>
        <div class="form-group col-md-6">
          <label for="barva4">Barva pozadí sekundární:</label>
          <input type="text" class="form-control" id="barva4" name="barva4" value="#ffffff">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Vygenerovat QR</button>
    </form>

    <div id="qrCodeContainer" class="mt-5"></div>
  </div>

  <div id="canvas"></div>


  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/3.4.0/js/bootstrap-colorpicker.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#odkaz').change(function() {
        if ($(this).val() == 'custom') {
          $('#customLink').show();
        } else {
          $('#customLink').hide();
        }
      });

      $('#barva1, #barva2, #barva3, #barva4').colorpicker().on('changeColor', function(event) {
        $(this).val(event.color.toHex());
      });



    });
  </script>

</body>

</html>