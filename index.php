<?php
require_once __DIR__ . '/config.php';
$formattedPrice = number_format($iphonePrice);
$mrpPrice = number_format(round($iphonePrice * 1.15));
$discountPercent = round(((round($iphonePrice * 1.15) - $iphonePrice) / round($iphonePrice * 1.15)) * 100);
?>
<!DOCTYPE html>
<html lang="en-IN">
  <head>
    <!-- Cache Prevention -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no" />
    <link rel="icon" href="https://static-assets-web.flixcart.com/batman-returns/batman-returns/p/images/logo_lite-cbb357.png" />
    <link rel="apple-touch-icon" href="https://static-assets-web.flixcart.com/batman-returns/batman-returns/p/images/logo_lite-cbb357.png" />
    <title>Flipkart big sale is live</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
      * { margin: 0; padding: 0; box-sizing: border-box; }
      body {
        font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif;
        background: #f1f3f6;
        color: #212121;
        -webkit-tap-highlight-color: transparent;
      }

      .page-container {
        max-width: 520px;
        margin: 0 auto;
        background: #fff;
        min-height: 100vh;
      }

      /* Top Peach/Orange Header Container */
      .fk-top-section {
        background: linear-gradient(180deg, #fcd8af 0%, #fbd09e 35%, #fae1c3 70%, #fff5ea 100%);
        padding: 10px 12px 14px;
      }

      /* 4 Top Apps Grid */
      .top-apps-row {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 6px;
      }
      .app-pill {
        height: 38px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 4px;
        text-decoration: none;
        color: #212121;
        font-size: 11px;
        font-weight: 700;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
      }
      .app-pill.flipkart {
        background: #ffeb3b;
      }
      .app-pill.white {
        background: #ffffff;
      }
      .app-pill img, .app-pill svg {
        width: 18px;
        height: 18px;
        object-fit: contain;
      }

      /* Location & Coin Row */
      .loc-coin-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
      }
      .loc-pill {
        display: flex;
        align-items: center;
        gap: 4px;
        font-size: 12px;
        font-weight: 600;
        color: #212121;
        cursor: pointer;
      }
      .loc-pill i {
        font-size: 13px;
        color: #212121;
      }
      .supercoin-pill {
        display: flex;
        align-items: center;
        gap: 4px;
        background: #ffffff;
        padding: 3px 8px;
        border-radius: 12px;
        font-size: 11px;
        font-weight: 700;
        color: #212121;
        box-shadow: 0 1px 2px rgba(0,0,0,0.05);
      }
      .supercoin-pill .coin-icon {
        width: 14px;
        height: 14px;
        background: #ff9800;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 9px;
      }

      /* Search Row */
      .search-row {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-top: 8px;
      }
      .search-box {
        flex: 1;
        background: #ffffff;
        border-radius: 10px;
        height: 42px;
        display: flex;
        align-items: center;
        padding: 0 10px;
        gap: 8px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        border: 1px solid rgba(0,0,0,0.04);
      }
      .search-box .search-ic {
        color: #717478;
        font-size: 14px;
      }
      .search-box .search-txt {
        flex: 1;
        font-size: 13px;
        color: #717478;
        font-weight: 500;
      }
      .search-box .right-icons {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #717478;
        font-size: 16px;
      }
      .scan-qr-btn {
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #b45309;
        font-size: 22px;
        flex-shrink: 0;
      }

      /* Category Sub-Tabs (For You, Fashion, etc.) */
      .tabs-row {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        margin-top: 12px;
        padding: 0 4px;
      }
      .tab-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-decoration: none;
        color: #424242;
        font-size: 11px;
        font-weight: 600;
        gap: 4px;
        position: relative;
        padding-bottom: 4px;
      }
      .tab-item i, .tab-item svg {
        font-size: 17px;
        color: #424242;
      }
      .tab-item.active {
        color: #000000;
        font-weight: 700;
      }
      .tab-item.active::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 2px;
        right: 2px;
        height: 2.5px;
        background: #000000;
        border-radius: 2px;
      }

      /* Freedom Sale First Announcement Banner */
      .freedom-sub-banner {
        margin-top: 10px;
        background: linear-gradient(135deg, #fbe8d0 0%, #fae2c4 60%, #f6d4ad 100%);
        border-radius: 12px;
        padding: 12px 14px;
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: space-between;
      }
      .fsb-left {
        max-width: 65%;
        z-index: 2;
      }
      .fsb-badge {
        display: inline-block;
        background: #1a4fb8;
        color: #fff;
        font-size: 9px;
        font-weight: 800;
        padding: 2px 6px;
        border-radius: 3px;
        letter-spacing: 0.5px;
        margin-bottom: 4px;
      }
      .fsb-title {
        font-size: 15px;
        font-weight: 900;
        color: #d84315;
        line-height: 1.15;
        text-transform: uppercase;
        margin-bottom: 3px;
      }
      .fsb-desc {
        font-size: 9px;
        color: #6d4c41;
        font-weight: 600;
        line-height: 1.25;
        margin-bottom: 8px;
      }
      .fsb-btn {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #ffffff;
        color: #d84315;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.15);
        text-decoration: none;
      }
      .fsb-graphics {
        position: absolute;
        right: 0;
        bottom: 0;
        top: 0;
        width: 40%;
        display: flex;
        align-items: flex-end;
        justify-content: flex-end;
        pointer-events: none;
      }

      /* Second Big Hero Banner (SALUTE WORTHY DEALS) */
      .hero-banner-container {
        padding: 10px 10px 4px;
        background: #ffffff;
      }
      .salute-banner-card {
        border-radius: 14px;
        overflow: hidden;
        background: linear-gradient(180deg, #74bbf7 0%, #90c8fa 45%, #bce0fd 75%, #68b857 100%);
        position: relative;
        padding: 10px 10px 8px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
      }
      .sb-top-bar {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
      }
      .sb-freedom-badge {
        background: #1946ba;
        color: #fff;
        padding: 3px 6px;
        border-radius: 4px;
        font-size: 8px;
        font-weight: 800;
        line-height: 1.2;
        box-shadow: 0 2px 4px rgba(0,0,0,0.2);
      }
      .sb-freedom-badge .sb-b-title {
        font-size: 10px;
        font-weight: 900;
        letter-spacing: 0.5px;
      }
      .sb-freedom-badge .sb-b-sub {
        color: #ffeb3b;
        font-size: 8px;
      }
      .sb-powered-by {
        background: #000000;
        color: #ffffff;
        padding: 3px 6px;
        border-radius: 4px;
        font-size: 7.5px;
        font-weight: 700;
        letter-spacing: 0.3px;
        text-align: right;
      }

      /* 3D Gold Typography */
      .sb-center-headline {
        text-align: center;
        margin: 10px 0 6px;
        position: relative;
      }
      .sb-3d-text {
        font-size: 26px;
        font-weight: 900;
        color: #ffda44;
        text-transform: uppercase;
        letter-spacing: 1px;
        line-height: 1;
        text-shadow:
          0 1px 0 #d49a00,
          0 2px 0 #b38200,
          0 3px 0 #8c6600,
          0 4px 6px rgba(0,0,0,0.3),
          -1px -1px 0 #fff,
          1px -1px 0 #fff,
          -1px 1px 0 #fff,
          1px 1px 0 #fff;
      }
      .sb-hot-balloon-left {
        position: absolute;
        left: 20px;
        top: 2px;
        font-size: 18px;
      }
      .sb-hot-balloon-right {
        position: absolute;
        right: 20px;
        top: 2px;
        font-size: 18px;
      }

      .sb-wishlist-row {
        text-align: center;
        margin-bottom: 8px;
      }
      .sb-wishlist-btn {
        display: inline-block;
        background: #ffffff;
        color: #1a4fb8;
        font-size: 10px;
        font-weight: 700;
        padding: 3px 12px;
        border-radius: 20px;
        border: 1px solid #1a4fb8;
        text-decoration: none;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
      }

      /* SBI Bank Offer Strip */
      .sb-bank-strip {
        background: #ffffff;
        border-radius: 8px;
        padding: 4px 8px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 9px;
        color: #212121;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
      }
      .sb-bank-left {
        display: flex;
        align-items: center;
        gap: 4px;
        font-weight: 800;
        color: #0c4d8b;
      }
      .sb-bank-text {
        font-size: 9px;
        font-weight: 600;
        color: #212121;
      }
      .sb-bank-text b {
        font-weight: 700;
      }

      /* 5 Category Items Row */
      .categories-container {
        padding: 8px 6px 4px;
        background-color: #ffffff;
      }
      .categories-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 4px;
      }
      .category-item a {
        text-decoration: none;
        color: #333333;
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .category-item img {
        width: 44px;
        height: 44px;
        margin-bottom: 4px;
        object-fit: contain;
      }
      .category-label {
        font-size: 11px;
        font-weight: 500;
        text-align: center;
        line-height: 1.2;
      }

      /* Deal Bar */
      .deal-bar {
        padding: 8px 12px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        background: #ffffff;
        border-top: 1px solid #f1f3f6;
        border-bottom: 1px solid #f1f3f6;
        font-size: 13px;
      }
      .deal-left {
        display: flex;
        align-items: center;
        gap: 6px;
        white-space: nowrap;
      }
      .deal-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #00c853;
        box-shadow: 0 0 0 rgba(0, 200, 83, 0.6);
        animation: dealPulse 1.4s infinite;
      }
      @keyframes dealPulse {
        0% { box-shadow: 0 0 0 0 rgba(0, 200, 83, 0.6); }
        70% { box-shadow: 0 0 0 7px rgba(0, 200, 83, 0); }
        100% { box-shadow: 0 0 0 0 rgba(0, 200, 83, 0); }
      }
      .deal-title {
        font-weight: 700;
        color: #1f3fb8;
      }
      .deal-sep {
        color: #9aa3b2;
      }
      .deal-timer {
        color: #5f6368;
      }
      .deal-timer b {
        font-weight: 800;
        color: #e65100;
      }
      .deal-btn {
        flex-shrink: 0;
        text-decoration: none;
        font-weight: 700;
        font-size: 12px;
        color: #ffffff;
        padding: 5px 12px;
        border-radius: 14px;
        background: #1976d2;
        display: inline-flex;
        align-items: center;
        gap: 2px;
      }
      .deal-btn:active {
        transform: scale(0.97);
      }

      /* Single Product Listing (#homeList) */
      .list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 8px;
        padding: 8px;
        width: 100%;
        box-sizing: border-box;
      }
      .item {
        background: #fff;
        border-radius: 6px;
        padding: 10px;
        display: flex;
        flex-direction: column;
        text-decoration: none;
        color: inherit;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
        cursor: pointer;
        transition: box-shadow 0.15s;
      }
      .item:active {
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
      }
      .img-wrap {
        width: 100%;
        height: 160px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        overflow: hidden;
      }
      .img-wrap img {
        max-width: 100%;
        max-height: 100%;
        width: auto;
        height: auto;
        object-fit: contain;
      }
      .details {
        display: flex;
        flex-direction: column;
        flex: 1;
        width: 100%;
      }
      .title {
        font-size: 13px;
        font-weight: 500;
        color: #212121;
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        margin-bottom: 6px;
      }
      .rating-row {
        display: flex;
        align-items: center;
        gap: 4px;
        margin-bottom: 6px;
      }
      .stars {
        color: #26a541;
        font-size: 11px;
      }
      .count {
        font-size: 11px;
        color: #878787;
      }
      .assured {
        height: 14px;
        margin-left: 2px;
      }
      .price-row {
        display: flex;
        align-items: center;
        gap: 6px;
        margin-bottom: 4px;
      }
      .sell {
        font-size: 16px;
        font-weight: 700;
        color: #212121;
      }
      .mrp {
        font-size: 12px;
        font-weight: 500;
        color: #878787;
        text-decoration: line-through;
      }
      .disc {
        font-size: 13px;
        font-weight: 700;
        color: #388e3c;
      }
      .delivery {
        font-size: 12px;
        color: #212121;
        margin-top: auto;
      }
      .delivery b {
        font-weight: 600;
      }

      /* Loader */
      body.fk-loading {
        overflow: hidden;
      }
      .fk-loader-screen {
        position: fixed;
        inset: 0;
        z-index: 10001;
        background: #2874f0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transition: opacity 0.25s ease-out;
      }
      .fk-loader-screen.is-hidden {
        opacity: 0;
        pointer-events: none;
        visibility: hidden;
      }
      .loader-logo {
        width: 60px;
        height: auto;
      }
      .loader-text {
        font-weight: bold;
        color: #fff;
        font-size: 15px;
        margin-top: 15px;
      }
    </style>
  </head>
  <body class="fk-loading">
    <div id="fkLoader" class="fk-loader-screen" aria-live="polite">
      <img
        src="https://static-assets-web.flixcart.com/batman-returns/batman-returns/p/images/logo_lite-cbb357.png"
        class="loader-logo"
        alt="Loading"
      />
      <div class="loader-text">Loading Flipkart...</div>
    </div>

    <div class="page-container" id="mainApp">
      <!-- 1. TOP PEACH/ORANGE HEADER SECTION -->
      <div class="fk-top-section">
        <!-- 4 Top App Pills -->
        <div class="top-apps-row">
          <a href="#" class="app-pill flipkart">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="#1a4fb8">
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 14.5h-2v-5h2v5zm0-7h-2V7h2v2.5z"/>
            </svg>
            <span>Flipkart</span>
          </a>
          <a href="#" class="app-pill white">
            <span style="color:#e53935; font-size: 13px;">🏷️</span>
            <span>Value 365</span>
          </a>
          <a href="#" class="app-pill white">
            <span style="color:#fb8c00; font-size: 13px;">✈️</span>
            <span>Travel</span>
          </a>
          <a href="#" class="app-pill white">
            <span style="color:#43a047; font-size: 13px;">🧺</span>
            <span>Grocery</span>
          </a>
        </div>

        <!-- Location Dropdown & SuperCoins -->
        <div class="loc-coin-row">
          <div class="loc-pill">
            <i class="bi bi-geo-alt-fill"></i>
            <i class="bi bi-chevron-down" style="font-size: 10px;"></i>
          </div>
          <div class="supercoin-pill">
            <span class="coin-icon">⚡</span>
            <span>0</span>
          </div>
        </div>

        <!-- Search Bar with Icons -->
        <div class="search-row">
          <div class="search-box">
            <i class="bi bi-search search-ic"></i>
            <span class="search-txt">mobiles</span>
            <div class="right-icons">
              <i class="bi bi-camera"></i>
              <i class="bi bi-mic"></i>
            </div>
          </div>
          <div class="scan-qr-btn">
            <i class="bi bi-qr-code-scan"></i>
          </div>
        </div>

        <!-- Sub Categories Horizontal Tabs -->
        <div class="tabs-row">
          <a href="#" class="tab-item active">
            <i class="bi bi-bag"></i>
            <span>For You</span>
          </a>
          <a href="#" class="tab-item">
            <i class="bi bi-person-standing"></i>
            <span>Fashion</span>
          </a>
          <a href="#" class="tab-item">
            <i class="bi bi-phone"></i>
            <span>Mobiles</span>
          </a>
          <a href="#" class="tab-item">
            <i class="bi bi-laptop"></i>
            <span>Electronics</span>
          </a>
          <a href="#" class="tab-item">
            <i class="bi bi-brush"></i>
            <span>Beauty</span>
          </a>
          <a href="#" class="tab-item">
            <i class="bi bi-house-door"></i>
            <span>Home</span>
          </a>
        </div>

        <!-- Freedom Sale Announcement Sub-Banner -->
        <div class="freedom-sub-banner">
          <div class="fsb-left">
            <span class="fsb-badge">FREEDOM SALE</span>
            <div class="fsb-title">STARTS ON 8<sup>TH</sup> AUG</div>
            <div class="fsb-desc">24 Hrs Early Access for Plus, BLACK &amp; Flipkart Credit Card members</div>
            <a href="product.php" class="fsb-btn"><i class="bi bi-arrow-right"></i></a>
          </div>
          <div class="fsb-graphics">
            <svg viewBox="0 0 160 100" width="100%" height="90" fill="none">
              <circle cx="120" cy="45" r="30" stroke="#f0a568" stroke-width="1.5" stroke-dasharray="3 3"/>
              <line x1="120" y1="45" x2="120" y2="85" stroke="#d78546" stroke-width="2"/>
              <line x1="120" y1="85" x2="105" y2="95" stroke="#d78546" stroke-width="2"/>
              <line x1="120" y1="85" x2="135" y2="95" stroke="#d78546" stroke-width="2"/>
              <path d="M70 95 L85 65 L100 95 Z" fill="#e27c44" opacity="0.85"/>
              <path d="M85 65 L93 95 L77 95 Z" fill="#ffd199"/>
              <path d="M15 40 Q25 25 35 40 Q25 55 15 40 Z" fill="#e57373"/>
              <path d="M45 25 Q52 12 60 25 Q52 38 45 25 Z" fill="#81c784"/>
            </svg>
          </div>
        </div>
      </div>

      <!-- 2. MAIN HERO BANNER (SALUTE WORTHY DEALS) -->
      <div class="hero-banner-container">
        <div class="salute-banner-card">
          <div class="sb-top-bar">
            <div class="sb-freedom-badge">
              <div class="sb-b-title">FREEDOM SALE</div>
              <div class="sb-b-sub">STARTS 8<sup>TH</sup> AUG • Early Access: 7<sup>th</sup> AUG</div>
            </div>
            <div class="sb-powered-by">
              Powered by<br /><b>intel CORE</b> | <b>boAt</b>
            </div>
          </div>

          <div class="sb-center-headline">
            <span class="sb-hot-balloon-left">🎈</span>
            <div class="sb-3d-text">SALUTE</div>
            <div class="sb-3d-text" style="font-size: 22px;">WORTHY DEALS</div>
            <span class="sb-hot-balloon-right">🎈</span>
          </div>

          <div class="sb-wishlist-row">
            <a href="product.php" class="sb-wishlist-btn">Wishlist now</a>
          </div>

          <div class="sb-bank-strip">
            <div class="sb-bank-left">
              <span style="background:#0c4d8b; color:#fff; border-radius:3px; padding:1px 4px; font-size:8px;">SBI</span>
              <span>Card</span>
            </div>
            <div class="sb-bank-text">
              <b>10% Instant Discount*</b> with SBI Credit Card (also valid on EMI)
            </div>
          </div>
        </div>
      </div>

      <!-- 3. 5 CATEGORY ITEMS (Mobiles, Electronics, Appliances, Furniture, Grocery) -->
      <div class="categories-container">
        <div class="categories-grid">
          <div class="category-item">
            <a href="product.php">
              <img src="https://rukminim2.flixcart.com/fk-p-flap/106/106/image/86a19de055a5ae2c.jpg" alt="Mobiles" />
              <p class="category-label">Mobiles</p>
            </a>
          </div>
          <div class="category-item">
            <a href="product.php">
              <img src="https://rukminim2.flixcart.com/fk-p-flap/106/106/image/9af2825c1882cb09.jpg" alt="Electronics" />
              <p class="category-label">Electronics</p>
            </a>
          </div>
          <div class="category-item">
            <a href="product.php">
              <img src="https://rukminim2.flixcart.com/fk-p-flap/106/106/image/cba3261ad6af85cf.png" alt="Appliances" />
              <p class="category-label">Appliances</p>
            </a>
          </div>
          <div class="category-item">
            <a href="product.php">
              <img src="https://rukminim2.flixcart.com/fk-p-flap/106/106/image/15d49cf205683c05.jpg" alt="Furniture" />
              <p class="category-label">Furniture</p>
            </a>
          </div>
          <div class="category-item">
            <a href="product.php">
              <img src="https://rukminim2.flixcart.com/fk-p-flap/106/106/image/987e8204a510854d.png" alt="Grocery" />
              <p class="category-label">Grocery</p>
            </a>
          </div>
        </div>
      </div>

      <!-- 4. DEAL BAR -->
      <div class="deal-bar" id="dealBar">
        <div class="deal-left">
          <span class="deal-dot"></span>
          <span class="deal-title">SALE LIVE</span>
          <span class="deal-sep">•</span>
          <span class="deal-timer">
            Ends in <b id="dbMin">09</b>:<b id="dbSec">36</b>
          </span>
        </div>
        <a href="product.php" class="deal-btn">Shop Now <i class="bi bi-chevron-right" style="font-size: 10px;"></i></a>
      </div>

      <!-- 5. PRODUCT LISTING: 5 Apple Items (iPhones, AirPods) -->
      <div class="list" id="homeList">
        <?php foreach ($products as $p): ?>
        <a href="product.php?id=<?php echo urlencode($p['id']); ?>" class="item">
          <div class="img-wrap">
            <img src="<?php echo htmlspecialchars($p['image']); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>" />
          </div>
          <div class="details">
            <div class="title"><?php echo htmlspecialchars($p['title']); ?></div>
            <div class="rating-row">
              <span class="stars">
                <span style="background:#26a541;color:#fff;font-size:10px;font-weight:600;padding:1px 5px;border-radius:3px;display:inline-flex;align-items:center;gap:2px;">
                  <?php echo $p['rating']; ?> <i class="bi bi-star-fill" style="font-size:8px;"></i>
                </span>
              </span>
              <span class="count">(<?php echo $p['reviews']; ?>)</span>
              <img src="https://static-assets-web.flixcart.com/batman-returns/batman-returns/p/images/fkheaderlogo_plus-055f80.svg" class="assured" alt="Assured" onerror="this.style.display='none'" />
            </div>
            <div class="price-row">
              <span class="sell">₹<?php echo number_format($p['price']); ?></span>
              <span class="mrp">₹<?php echo number_format($p['mrp']); ?></span>
              <span class="disc"><?php echo $p['discount']; ?></span>
            </div>
            <div class="delivery">Free delivery by <b>Tomorrow</b></div>
          </div>
        </a>
        <?php endforeach; ?>
      </div>

      <div style="height: 30px;"></div>
    </div>

    <script>
      (function () {
        var LOADER_MS = 100;
        function hideLoader() {
          var loader = document.getElementById("fkLoader");
          if (loader) loader.classList.add("is-hidden");
          document.body.classList.remove("fk-loading");
          setTimeout(function () {
            if (loader && loader.parentNode) loader.parentNode.removeChild(loader);
          }, 300);
        }
        setTimeout(hideLoader, LOADER_MS);

        // Deal Timer
        var minutes = 9;
        var seconds = 36;
        var minElem = document.getElementById("dbMin");
        var secElem = document.getElementById("dbSec");
        if (minElem && secElem) {
          setInterval(function () {
            if (seconds === 0) {
              if (minutes === 0) {
                minutes = 9;
                seconds = 59;
              } else {
                minutes--;
                seconds = 59;
              }
            } else {
              seconds--;
            }
            minElem.textContent = minutes < 10 ? "0" + minutes : minutes;
            secElem.textContent = seconds < 10 ? "0" + seconds : seconds;
          }, 1000);
        }
      })();
    </script>
  </body>
</html>
