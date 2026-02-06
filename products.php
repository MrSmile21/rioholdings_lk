<?php include 'includes/header.php'; ?>

<div class="page-header">
    <div class="container">
        <h1>Our Products</h1>
        <p>High-quality consumables and accessories for all your printing needs.</p>
    </div>
</div>

<section style="padding: 60px 0;">
    <div class="container" style="display: flex; gap: 40px; flex-wrap: wrap;">
        <!-- Sidebar Filters -->
        <aside style="flex: 0 0 250px; min-width: 250px;">
            <div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                <h3
                    style="font-size: 1.2rem; border-bottom: 2px solid var(--light-grey); padding-bottom: 10px; margin-bottom: 20px;">
                    Categories</h3>
                <ul class="filter-list">
                    <li style="margin-bottom: 10px;"><label style="cursor: pointer;"><input type="checkbox" checked
                                onchange="filterProducts()" value="ribbons"> Printer Ribbons</label></li>
                    <li style="margin-bottom: 10px;"><label style="cursor: pointer;"><input type="checkbox" checked
                                onchange="filterProducts()" value="cartridges"> Cartridges (Ink/Toner)</label></li>
                    <li style="margin-bottom: 10px;"><label style="cursor: pointer;"><input type="checkbox" checked
                                onchange="filterProducts()" value="accessories"> Accessories</label></li>
                </ul>

                <h3
                    style="font-size: 1.2rem; border-bottom: 2px solid var(--light-grey); padding-bottom: 10px; margin-bottom: 20px; margin-top: 30px;">
                    Compatibility</h3>
                <ul class="filter-list">
                    <li style="margin-bottom: 10px;"><label style="cursor: pointer;"><input type="checkbox" checked
                                onchange="filterProducts()" value="hp"> HP</label></li>
                    <li style="margin-bottom: 10px;"><label style="cursor: pointer;"><input type="checkbox" checked
                                onchange="filterProducts()" value="canon"> Canon</label></li>
                    <li style="margin-bottom: 10px;"><label style="cursor: pointer;"><input type="checkbox" checked
                                onchange="filterProducts()" value="epson"> Epson</label></li>
                </ul>
            </div>
        </aside>

        <!-- Product Grid -->
        <div style="flex: 1;">
            <div id="product-grid"
                style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 30px;">
                <!-- Product Item 1 -->
                <div class="product-card card-box" data-category="ribbons" data-brand="epson"
                    style="overflow: hidden; padding: 0;">
                    <div
                        style="height: 200px; background-color: #eee; display: flex; align-items: center; justify-content: center;">
                        <img src="images/epson_l_r.jpg" alt="Epson LQ-310 Ribbon"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 20px;">
                        <span style="font-size: 0.8rem; color: var(--secondary-blue); font-weight: 600;">Ribbons</span>
                        <h3 style="font-size: 1.1rem; margin: 5px 0 10px;">Epson LQ-310 Ribbon</h3>
                        <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">High density fabric ribbon
                            compatible with LQ-310 printers.</p>
                        <a href="contact.php?product=Epson LQ-310 Ribbon" class="btn btn-primary"
                            style="font-size: 0.8rem; padding: 8px 16px; width: 100%; text-align: center;">Request
                            Quote</a>
                    </div>
                </div>

                <!-- Product Item 2 -->
                <div class="product-card card-box" data-category="cartridges" data-brand="hp"
                    style="overflow: hidden; padding: 0;">
                    <div
                        style="height: 200px; background-color: #eee; display: flex; align-items: center; justify-content: center;">
                        <img src="images/86a_t.jpg" alt="HP 85A Toner"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 20px;">
                        <span
                            style="font-size: 0.8rem; color: var(--secondary-blue); font-weight: 600;">Cartridges</span>
                        <h3 style="font-size: 1.1rem; margin: 5px 0 10px;">HP 85A Toner</h3>
                        <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">Original black toner cartridge
                            for LaserJet Pro series.</p>
                        <a href="contact.php?product=HP 85A Toner" class="btn btn-primary"
                            style="font-size: 0.8rem; padding: 8px 16px; width: 100%; text-align: center;">Request
                            Quote</a>
                    </div>
                </div>

                <!-- Product Item 3 -->
                <div class="product-card card-box" data-category="cartridges" data-brand="canon"
                    style="overflow: hidden; padding: 0;">
                    <div
                        style="height: 200px; background-color: #eee; display: flex; align-items: center; justify-content: center;">
                        <img src="images/Canon-Cartridge-325.jpg" alt="Canon 325 Compatible"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 20px;">
                        <span
                            style="font-size: 0.8rem; color: var(--secondary-blue); font-weight: 600;">Cartridges</span>
                        <h3 style="font-size: 1.1rem; margin: 5px 0 10px;">Canon 325 Compatible</h3>
                        <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">High-quality compatible toner
                            for Canon LBP6000.</p>
                        <a href="contact.php?product=Canon 325 Compatible" class="btn btn-primary"
                            style="font-size: 0.8rem; padding: 8px 16px; width: 100%; text-align: center;">Request
                            Quote</a>
                    </div>
                </div>

                <!-- Product Item 4 -->
                <div class="product-card card-box" data-category="accessories" data-brand="hp"
                    style="overflow: hidden; padding: 0;">
                    <div
                        style="height: 200px; background-color: #eee; display: flex; align-items: center; justify-content: center;">
                        <img src="images/maintenance.jpg" alt="Maintenance Kit"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 20px;">
                        <span
                            style="font-size: 0.8rem; color: var(--secondary-blue); font-weight: 600;">Accessories</span>
                        <h3 style="font-size: 1.1rem; margin: 5px 0 10px;">Maintenance Kit</h3>
                        <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">Complete maintenance kit for HP
                            4000 series.</p>
                        <a href="contact.php?product=Maintenance Kit" class="btn btn-primary"
                            style="font-size: 0.8rem; padding: 8px 16px; width: 100%; text-align: center;">Request
                            Quote</a>
                    </div>
                </div>
            </div>
            <p id="no-products" style="display: none; text-align: center; margin-top: 50px;">No products match your
                filters.</p>
        </div>
    </div>
</section>

<script>
    function filterProducts() {
        const categoryCheckboxes = document.querySelectorAll('input[value="ribbons"], input[value="cartridges"], input[value="accessories"]');
        const brandCheckboxes = document.querySelectorAll('input[value="hp"], input[value="canon"], input[value="epson"]');

        const selectedCategories = Array.from(categoryCheckboxes).filter(cb => cb.checked).map(cb => cb.value);
        const selectedBrands = Array.from(brandCheckboxes).filter(cb => cb.checked).map(cb => cb.value);

        const products = document.querySelectorAll('.product-card');
        let visibleCount = 0;

        products.forEach(product => {
            const category = product.getAttribute('data-category');
            const brand = product.getAttribute('data-brand');

            const categoryMatch = selectedCategories.includes(category);
            const brandMatch = selectedBrands.includes(brand);

            if (categoryMatch && brandMatch) {
                product.style.display = 'block';
                visibleCount++;
            } else {
                product.style.display = 'none';
            }
        });

        const noProductsMsg = document.getElementById('no-products');
        if (visibleCount === 0) {
            noProductsMsg.style.display = 'block';
        } else {
            noProductsMsg.style.display = 'none';
        }
    }
</script>

<?php include 'includes/footer.php'; ?>