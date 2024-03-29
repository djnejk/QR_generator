<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Generátor QR kódu</title>
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/darkly/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/3.4.0/css/bootstrap-colorpicker.min.css">
</head>
<body>

<div class="container mt-5">
  <h1>Generátor QR kódu</h1>
  <form id="qrForm" action="gen.php" method="post">
    <div class="form-group">
      <label for="odkaz">Odkaz:</label>
      <select class="form-control" id="odkaz" name="odkaz">
        <option value="https://qr.runfp.cz/plakat">https://qr.runfp.cz/plakat</option>
        <option value="https://qr.runfp.cz/fb">https://qr.runfp.cz/fb</option>
        <option value="https://qr.runfp.cz/ig">https://qr.runfp.cz/ig</option>
        <option value="custom">Jiné</option>
      </select>
      <input type="text" class="form-control mt-2" id="customLink" name="customLink" placeholder="Zadejte vlastní odkaz" style="display: none;">
    </div>
    <div class="form-group">
      <label>Logo:</label><br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="logo" id="noLogo" value="none" checked>
        <label class="form-check-label" for="noLogo">Žádné</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="logo" id="RFPLogo" value="RFP">
        <label class="form-check-label" for="RFPLogo">
          <img src="RFP_logo.png" alt="RFP Logo" width="30">
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="logo" id="FPPLogo" value="FPP">
        <label class="form-check-label" for="FPPLogo">
          <img src="FPP_logo.png" alt="FPP Logo" width="30">
        </label>
      </div>
    </div>
    <div class="form-group">
      <label for="barva">Barva:</label>
      <input type="text" class="form-control" id="barva" name="barva" value="#000000">
    </div>
    <button type="submit" class="btn btn-primary">Vygenerovat QR</button>
  </form>

  <div id="qrCodeContainer" class="mt-5"></div>
</div>

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

    $('#barva').colorpicker().on('changeColor', function(event) {
      $('#barva').val(event.color.toHex());
    });
  });
</script>

</body>
</html>