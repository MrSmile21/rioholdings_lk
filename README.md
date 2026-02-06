# Rio Holdings (Pvt) Ltd - Official Website

![Project Status](https://img.shields.io/badge/Status-Completed-success)
![License](https://img.shields.io/badge/License-Proprietary-blue)
![Tech Stack](https://img.shields.io/badge/PHP-8.2-purple)

A professional, responsive business website built for **Rio Holdings (Pvt) Ltd**, a premier supplier of printer consumables, machinery rentals, and maintenance services in Sri Lanka.

## 🚀 Features

- **Modern Corporate Theme**: Custom-designed vibrant "Blue & Pink" gradient theme (`.bg-gradient-primary`).
- **Responsive Design**: Fully mobile-responsive layout using CSS Flexbox and Grid.
- **Product Catalog**: Dynamic-looking product grid with filtering capabilities (JS-based).
- **Service Listings**: Detailed pages for Rentals, Maintenance, and Bulk Supply.
- **Contact Integration**: 
  - Functional Contact Form (PHP-ready).
  - Floating WhatsApp Button for instant communication.
  - Google Maps Custom Embed.
- **SEO Optimized**: Clean URLs via `.htaccess` and semantic HTML5 structure.

## 🛠️ Tech Stack

- **Backend**: PHP 8.x
- **Frontend**: HTML5, CSS3 (Custom Variables & Gradients), JavaScript (Vanilla)
- **Icons**: FontAwesome 6
- **Fonts**: Google Fonts (Inter, Roboto)
- **Server**: Apache (XAMPP/WAMP compatible)

## 📂 Project Structure

```
/rio_hol
├── css/
│   └── style.css       # Main stylesheet (Variables, Gradients, Layout)
├── includes/
│   ├── header.php      # Navigation & Logo
│   └── footer.php      # Footer links & Script calls
├── js/
│   └── script.js       # UI interactions (Mobile menu, etc.)
├── images/             # Optimized assets
├── index.php           # Home Page
├── about.php           # Company Profile
├── products.php        # Product Catalog
├── services.php        # Service Details
├── contact.php         # Contact Page
└── .htaccess           # URL Rewriting & Security
```

## ⚙️ Installation & Setup

1. **Clone the Repository**
   ```bash
   git clone https://github.com/yourusername/rio-holdings-website.git
   ```

2. **Deploy to Server**
   - Copy the `rio_hol` folder to your local server directory (e.g., `C:\xampp\htdocs\` or `/var/www/html/`).

3. **Configure Environment**
   - Ensure an Apache server with `mod_rewrite` enabled is running.
   - The `.htaccess` file handles clean URLs (e.g., `/about` instead of `/about.php`).

4. **Run the Project**
   - Open your browser and navigate to:
     ```
     http://localhost/rio_hol
     ```

## 🎨 Theme Customization

The site uses CSS variables for easy theming. You can adjust the core colors in `css/style.css`:

```css
:root {
    --primary-blue: #2962FF;  /* Main Brand Color */
    --secondary-blue: #F50057; /* Accent Pink */
    --dark-grey: #263238;     /* Text Color */
}
```

## 📞 Contact

**Rio Holdings (Pvt) Ltd**  
Sri Jayawardenepura Kotte, Sri Lanka  
📧 info@rioholdings.lk  
☎️ 077 710 0729

---
*© 2026 Rio Holdings (Pvt) Ltd. All Rights Reserved.*
