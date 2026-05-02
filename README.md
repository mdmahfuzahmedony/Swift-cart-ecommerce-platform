# 🛒 SwiftCart - Modern & Dynamic E-Commerce Solution

**SwiftCart** is a high-end, full-stack e-commerce management system and frontend platform. It is specifically designed for premium retail businesses like fashion apparel, footwear, luxury watches, and perfumes. It features a powerful dynamic administrative dashboard and a sleek, interactive user experience.

---

## ✨ Key Features

### 🛠 Powerful Admin Dashboard
- **Dynamic Product Management:** Intelligent input fields that change automatically based on the selected category (e.g., Fabric/Fit for Dresses, Heel type for Shoes, Movement for Watches).
- **Advanced Order System (Manual POS):** Create orders manually for phone/social media sales with a built-in address system (Division > District > Upazila).
- **Customer CRM & Segmentation:** Track VIP customers, analyze purchase history, and manage user reviews in one place.
- **Real-time Analytics:** Visualized data insights using ApexCharts, including Revenue Growth, Top Selling Products, and Payment Method analytics.
- **Smart Coupon Engine:** Create coupons with usage limits, minimum spend rules, and a real-time activation toggle.
- **Third-Party Integrations:** Ready-to-connect modules for bKash, Stripe, Pathao, Steadfast, and Mailchimp.

### 🎨 Unique Frontend Experience
- **Interactive Hero Slider:** A stylish, overlapping double-image slider with smooth Alpine.js animations and auto-play features.
- **Modern UI/UX:** Clean, minimalist design powered by Tailwind CSS and Google Fonts (Plus Jakarta Sans).
- **Seamless Authentication:** Secure Login/Register system integrated with Socialite for **Google One-Tap Login**.

---

## 🚀 Category-Specific Intelligence
Unlike standard shops, SwiftCart captures deep data for better filtering:
- **Apparel:** Fit Type, Sleeve length, Work/Design type, and Dupatta details.
- **Footwear:** Heel height, Toe style, Sole material, and Closure type.
- **Watches:** Movement type, Glass material (Sapphire/Mineral), and Warranty tracking.
- **Perfumes:** Concentration (EDP/EDT), Longevity, and Fragrance family.

---

## 💻 Tech Stack

*   **Backend:** Laravel 11 (PHP 8.2+)
*   **Frontend UI:** Tailwind CSS
*   **Interactivity:** Alpine.js
*   **Charts:** ApexCharts.js
*   **Icons:** Font Awesome 6 Pro
*   **Database:** MySQL (Configurable for MongoDB)
*   **Auth:** Laravel Breeze + Socialite (Google)

---

## 🛠 Installation Guide

1.  **Clone the repository:**
    ```bash
    git clone https://github.com/your-username/swift-cart.git
    cd swift-cart
    ```

2.  **Install dependencies:**
    ```bash
    composer install
    npm install && npm run dev
    ```

3.  **Environment Setup:**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  **Database Migration:**
    ```bash
    php artisan migrate --seed
    ```

5.  **Run the application:**
    ```bash
    php artisan serve
    ```

---

## 📈 Roadmap
- [ ] AI-Powered Product Recommendations.
- [ ] Multi-vendor multivendor support.
- [ ] Mobile App API Integration.
- [ ] Automated PDF Invoice Generation.

## 🤝 Contributing
Contributions, issues, and feature requests are welcome! Feel free to check the [issues page].

## 📝 License
This project is licensed under the MIT License.

---
Built with ❤️ by **Mahfuz Ahmed**
