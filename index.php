
<?php
// เบอร์ Promptpay
$phone = "0987654321";
// จำนวนเงิน
$amount = 10;
require 'qr.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QR PaymentPromptPay - Iamohmx</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="container">

        <h1 class="text-center py-5 g-4">QR PromptPay By <b>Iamohmx</b></h1>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-3">
            <div class="card text-bg-light">
                <img src="https://secure1.zimple.cloud/images/thai_qr_payment.png" class="card-img-top" alt="https://secure1.zimple.cloud/images/thai_qr_payment.png">
                    <div class="card-body text-center">
                      <img src="<?php echo $qrcode ?>" alt="">
                    </div>
                    <div class="card-footer">
                      <div class="d-flex justify-content-between">
                          <div class="p-2">นายพชร เดชโค้น </div>
                          <div class="p-2">จำนวน <?php echo $amount; ?> บาท</div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html> 
