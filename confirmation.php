<?php
require_once __DIR__ . '/config.php';
$formattedPrice = number_format($iphonePrice);
$orderId = "OD" . mt_rand(1000000000, 9999999999);
$orderDate = date("d M Y, h:i A");
?>
<!DOCTYPE html>
<html lang="en-IN">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no" />
    <link rel="icon" href="https://static-assets-web.flixcart.com/batman-returns/batman-returns/p/images/logo_lite-cbb357.png" />
    <title>Order Placed - Flipkart</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
      * { margin: 0; padding: 0; box-sizing: border-box; }
      body {
        font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif;
        background: #f1f3f6;
        color: #212121;
        padding-bottom: 40px;
      }
      .confirm-wrap {
        max-width: 520px;
        margin: 0 auto;
        background: #f1f3f6;
      }
      .fk-header {
        background: #2874f0;
        color: #fff;
        padding: 12px 14px;
        display: flex;
        align-items: center;
        gap: 12px;
      }
      .fk-header a {
        color: #fff;
        font-size: 18px;
        text-decoration: none;
      }
      .fk-header-title {
        font-size: 15px;
        font-weight: 600;
        flex: 1;
      }
      .success-card {
        background: #fff;
        padding: 24px 16px;
        text-align: center;
        border-bottom: 1px solid #e0e0e0;
      }
      .success-icon {
        width: 60px;
        height: 60px;
        background: #26a541;
        color: #fff;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        margin-bottom: 12px;
        box-shadow: 0 4px 12px rgba(38, 165, 65, 0.3);
      }
      .success-title {
        font-size: 18px;
        font-weight: 700;
        color: #212121;
        margin-bottom: 6px;
      }
      .success-subtitle {
        font-size: 13px;
        color: #666;
      }
      .order-id-badge {
        display: inline-block;
        background: #f1f3f6;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        color: #2874f0;
        margin-top: 10px;
      }

      .details-card {
        background: #fff;
        margin-top: 10px;
        padding: 16px;
        box-shadow: 0 1px 2px rgba(0,0,0,0.05);
      }
      .card-heading {
        font-size: 13px;
        font-weight: 700;
        color: #878787;
        text-transform: uppercase;
        margin-bottom: 12px;
        border-bottom: 1px solid #f0f0f0;
        padding-bottom: 8px;
      }
      .detail-row {
        display: flex;
        justify-content: space-between;
        font-size: 13px;
        margin-bottom: 10px;
      }
      .detail-row .val {
        font-weight: 600;
        color: #212121;
      }

      .btn-home {
        background: #2874f0;
        color: #fff;
        border: none;
        padding: 12px 24px;
        font-size: 14px;
        font-weight: 700;
        border-radius: 4px;
        text-decoration: none;
        display: block;
        text-align: center;
        margin-top: 16px;
      }
      .btn-home:hover {
        background: #1f5cc0;
        color: #fff;
      }
    </style>
  </head>
  <body>
    <div class="confirm-wrap">
      <div class="fk-header">
        <a href="index.php"><i class="bi bi-arrow-left"></i></a>
        <div class="fk-header-title">Order Status</div>
      </div>

      <div class="success-card">
        <div class="success-icon"><i class="bi bi-check-lg"></i></div>
        <div class="success-title">Order Placed Successfully!</div>
        <div class="success-subtitle">Thank you for your purchase. Confirmation sent via SMS.</div>
        <div class="order-id-badge">Order ID: #<?php echo $orderId; ?></div>
      </div>

      <div class="details-card">
        <div class="card-heading">Order Details</div>
        <div class="detail-row">
          <span>Item</span>
          <span class="val">iPhone (128 GB, Black)</span>
        </div>
        <div class="detail-row">
          <span>Amount Paid</span>
          <span class="val" style="color: #26a541;">₹<?php echo $formattedPrice; ?></span>
        </div>
        <div class="detail-row">
          <span>Payment Mode</span>
          <span class="val">UPI Online Payment</span>
        </div>
        <div class="detail-row">
          <span>Merchant</span>
          <span class="val"><?php echo htmlspecialchars($merchantName); ?></span>
        </div>
        <div class="detail-row">
          <span>Date & Time</span>
          <span class="val"><?php echo $orderDate; ?></span>
        </div>
        <div class="detail-row">
          <span>Delivery Estimate</span>
          <span class="val" style="color: #2874f0;">Tomorrow by 8 PM</span>
        </div>

        <a href="index.php" class="btn-home">Continue Shopping</a>
      </div>
    </div>
  </body>
</html>
