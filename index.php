<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Your Partner for Machinery & Printer Solutions</h1>
        <p>Rio Holdings provides top-quality printer consumables, machinery rentals, and expert maintenance services for
            businesses in Sri Lanka.</p>
        <a href="contact.php" class="btn btn-secondary">Get a Quote</a>
        <a href="products.php" class="btn btn-primary" style="margin-left: 10px;">View Products</a>
    </div>
</section>

<!-- Services Overview -->
<section style="padding: 80px 0; background-color: white;">
    <div class="container">
        <h2 class="section-title">Our Services</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Service 1 -->
            <div class="card-box" style="text-align: center;">
                <i class="fas fa-print" style="font-size: 3rem; color: var(--secondary-blue); margin-bottom: 20px;"></i>
                <h3>Printer Hiring & Rentals</h3>
                <p>Flexible rental plans for corporate offices and events. Save on capital costs with our reliable
                    rental services.</p>
                <a href="services.php"
                    style="color: var(--primary-blue); font-weight: 500; margin-top: 15px; display: inline-block;">Learn
                    More &rarr;</a>
            </div>
            <!-- Service 2 -->
            <div class="card-box" style="text-align: center;">
                <i class="fas fa-tools" style="font-size: 3rem; color: var(--secondary-blue); margin-bottom: 20px;"></i>
                <h3>Maintenance & Repair</h3>
                <p>Expert repair services for all printer models. Regular maintenance contracts to keep your business
                    running smoothly.</p>
                <a href="services.php"
                    style="color: var(--primary-blue); font-weight: 500; margin-top: 15px; display: inline-block;">Learn
                    More &rarr;</a>
            </div>
            <!-- Service 3 -->
            <div class="card-box" style="text-align: center;">
                <i class="fas fa-boxes" style="font-size: 3rem; color: var(--secondary-blue); margin-bottom: 20px;"></i>
                <h3>Bulk Supply</h3>
                <p>Wholesale supply of printer ribbons, cartridges, and accessories for retailers and large
                    institutions.</p>
                <a href="services.php"
                    style="color: var(--primary-blue); font-weight: 500; margin-top: 15px; display: inline-block;">Learn
                    More &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- About Preview -->
<section class="bg-light" style="padding: 80px 0;">
    <div class="container" style="display: flex; flex-wrap: wrap; align-items: center; gap: 50px;">
        <div style="flex: 1; min-width: 300px;">
            <h2 style="margin-bottom: 20px;">Why Choose Rio Holdings?</h2>
            <p style="margin-bottom: 20px;">Established in Sri Jayawardenepura Kotte, Rio Holdings (Pvt) Ltd has grown
                to become a trusted name in the machinery and printer consumables industry. We bridge the gap between
                quality and affordability.</p>
            <ul style="margin-bottom: 30px;">
                <li style="margin-bottom: 10px;"><i class="fas fa-check-circle"
                        style="color: var(--secondary-blue); margin-right: 10px;"></i> Island-wide delivery</li>
                <li style="margin-bottom: 10px;"><i class="fas fa-check-circle"
                        style="color: var(--secondary-blue); margin-right: 10px;"></i> Genuine & Compatible Products
                </li>
                <li style="margin-bottom: 10px;"><i class="fas fa-check-circle"
                        style="color: var(--secondary-blue); margin-right: 10px;"></i> Dedicated Support Team</li>
            </ul>
            <a href="about.php" class="btn btn-primary">More About Us</a>
        </div>
        <div
            style="flex: 1; min-width: 300px; height: 300px; background-color: #ddd; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
            <div class="about-image-container">
                <img src="images/home.jpg" alt="About Us" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <!-- Placeholder for Company Image -->
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="bg-gradient-primary" style="padding: 60px 0; text-align: center;">
    <div class="container">
        <h2 style="color: white; margin-bottom: 20px;">Ready to Optimize Your Printing Costs?</h2>
        <p style="margin-bottom: 30px; font-size: 1.1rem; color: #ddd;">Get in touch with us today for a custom quote or
            consultation.</p>
        <a href="contact.php" class="btn btn-secondary">Contact Us Now</a>
        <a href="tel:+94777100729" class="btn"
            style="background-color: white; color: var(--primary-blue); margin-left: 10px;"><i class="fas fa-phone"></i>
            077 710 0729</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>