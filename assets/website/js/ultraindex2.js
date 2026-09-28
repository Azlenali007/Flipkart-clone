/**
 * UltraIndex2 - Flipkart Home Products Renderer
 */
(function () {
  function initHome() {
    var homeList = document.getElementById("homeList");
    if (!homeList) return;

    var cfg = window.STORE_CONFIG || { iphonePrice: 79999 };
    var price = cfg.iphonePrice || 79999;
    var mrp = Math.round(price * 1.15);
    var disc = Math.round(((mrp - price) / mrp) * 100);

    var fmt = function (num) {
      return Number(num).toLocaleString("en-IN");
    };

    var isPhp = window.location.pathname.indexOf(".php") !== -1;
    var targetUrl = isPhp ? "product.php" : "product.html";

    // Only render single product: iPhone
    homeList.innerHTML = [
      '<a href="' + targetUrl + '" class="item" id="iphoneItem">',
      '  <div class="img-wrap">',
      '    <img src="https://rukminim2.flixcart.com/image/312/312/xif0q/mobile/h/d/9/-original-imagtc2fz9spysyk.jpeg?q=70" alt="iPhone" />',
      "  </div>",
      '  <div class="details">',
      '    <div class="title">iPhone (128 GB, Black)</div>',
      '    <div class="rating-row">',
      '      <span class="stars">',
      '        <span style="background:#26a541;color:#fff;font-size:10px;font-weight:600;padding:1px 5px;border-radius:3px;display:inline-flex;align-items:center;gap:2px;">',
      '          4.7 <i class="bi bi-star-fill" style="font-size:8px;"></i>',
      "        </span>",
      "      </span>",
      '      <span class="count">(14,892)</span>',
      '      <img src="https://static-assets-web.flixcart.com/batman-returns/batman-returns/p/images/fkheaderlogo_plus-055f80.svg" class="assured" alt="Assured" onerror="this.style.display=\'none\'" />',
      "    </div>",
      '    <div class="price-row">',
      '      <span class="sell">₹' + fmt(price) + "</span>",
      '      <span class="mrp">₹' + fmt(mrp) + "</span>",
      '      <span class="disc">' + disc + "% off</span>",
      "    </div>",
      '    <div class="delivery">Free delivery by <b>Tomorrow</b></div>',
      "  </div>",
      "</a>"
    ].join("\n");

    // Deal Timer
    var minutes = 9;
    var seconds = 59;
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
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initHome);
  } else {
    initHome();
  }
})();
