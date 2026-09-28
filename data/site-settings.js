/**
 * Store Configuration and Product Catalog
 */
var STORE_CONFIG = {
  iphonePrice: 79900,
  upiId: "yourupi@bank",
  merchantName: "Your Store"
};

var PRODUCTS = [
  {
    id: "iphone-16-pro",
    title: "Apple iPhone 16 Pro Max (Desert Titanium, 256 GB)",
    name: "iPhone 16 Pro Max",
    price: 144900,
    mrp: 159900,
    discount: "9% off",
    rating: "4.8",
    reviews: "3,842",
    image: "https://rukminim2.flixcart.com/image/312/312/xif0q/mobile/n/q/h/-resized-original-imahgfmzjj8gtqbc.jpeg",
    highlights: [
      "256 GB ROM",
      "17.53 cm (6.9 inch) Super Retina XDR Display",
      "48MP + 48MP + 12MP Rear Camera | 12MP Front Camera",
      "A18 Pro Chip, 6 Core Processor",
      "Grade 5 Titanium with textured matte-glass back"
    ]
  },
  {
    id: "iphone-16",
    title: "Apple iPhone 16 (Ultramarine, 128 GB)",
    name: "iPhone 16",
    price: 79900,
    mrp: 89900,
    discount: "11% off",
    rating: "4.7",
    reviews: "7,421",
    image: "https://rukminim2.flixcart.com/image/312/312/xif0q/mobile/g/l/q/-original-imahgfmzdbnzzjjg.jpeg",
    highlights: [
      "128 GB ROM",
      "15.49 cm (6.1 inch) Super Retina XDR Display",
      "48MP + 12MP Rear Camera | 12MP Front Camera",
      "A18 Chip, 6 Core Processor",
      "Camera Control button, Action button"
    ]
  },
  {
    id: "iphone-15",
    title: "Apple iPhone 15 (Black, 128 GB)",
    name: "iPhone 15",
    price: 64999,
    mrp: 79900,
    discount: "18% off",
    rating: "4.7",
    reviews: "2,41,892",
    image: "https://rukminim2.flixcart.com/image/312/312/xif0q/mobile/c/v/v/-resized-original-imahgfmypevfehpc.jpeg",
    highlights: [
      "128 GB ROM",
      "15.49 cm (6.1 inch) Super Retina XDR Display",
      "48MP + 12MP Dual Rear Camera | 12MP Front Camera",
      "A16 Bionic Chip, 6 Core Processor",
      "Dynamic Island, Ceramic Shield front"
    ]
  },
  {
    id: "airpods-pro-2",
    title: "Apple AirPods Pro (2nd Gen) with MagSafe Case (USB-C)",
    name: "AirPods Pro 2",
    price: 18999,
    mrp: 24900,
    discount: "23% off",
    rating: "4.8",
    reviews: "34,120",
    image: "https://rukminim2.flixcart.com/image/612/612/xif0q/headphone/w/0/b/-original-imahr2nygh5mzuvz.jpeg",
    highlights: [
      "With MagSafe Case (USB-C)",
      "Active Noise Cancellation with Adaptive Audio",
      "Transparency Mode & Personalized Spatial Audio",
      "Up to 30 Hours Battery Life with Case",
      "Dust, Sweat & Water Resistant (IP54)"
    ]
  },
  {
    id: "airpods-4",
    title: "Apple AirPods 4 with Active Noise Cancellation",
    name: "AirPods 4",
    price: 12999,
    mrp: 17900,
    discount: "27% off",
    rating: "4.7",
    reviews: "12,450",
    image: "https://rukminim2.flixcart.com/image/612/612/xif0q/headphone/3/b/c/-original-imahftffyzcx5ksy.jpeg",
    highlights: [
      "Active Noise Cancellation & Transparency Mode",
      "H2 Chip with Voice Isolation",
      "Personalized Spatial Audio with Dynamic Head Tracking",
      "Up to 30 Hours Total Listening Time",
      "USB-C Charging Case with Built-in Speaker"
    ]
  }
];

window.STORE_CONFIG = STORE_CONFIG;
window.PRODUCTS = PRODUCTS;
