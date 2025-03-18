<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PurePort Exporters - Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            overflow-x: hidden;
        }
        
        .section {
            min-height: 60vh;
            padding: 60px 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            width: 85%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        /* Header Styles */
        header {
            position: fixed;
            width: 100%;
            background-color: rgba(255, 255, 255, 0);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 700;
            color: #ffffff;
        }
        
        .logo span {
            color: #2ecc71;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 30px;
        }
        
        nav ul li a {
            text-decoration: none;
            color: #fafbfc;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        nav ul li a:hover {
            color: #2ecc71;
        }
        
        /* Hero Section */
        #products-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('bg2.png') center/cover no-repeat;
            color: white;
            text-align: center;
            min-height: 50vh;
        }
        
        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
        }
        
        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .cta-button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #2ecc71;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .cta-button:hover {
            background-color: #27ae60;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(46, 204, 113, 0.3);
        }
        
        /* Category Navigation */
        .category-nav {
            background-color: #f9f9f9;
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            position: sticky;
            top: 70px;
            z-index: 900;
            margin-bottom: 30px;
        }
        
        .category-list {
            display: flex;
            overflow-x: auto;
            padding: 10px 0;
            scrollbar-width: thin;
            scrollbar-color: #2ecc71 #f1f1f1;
        }
        
        .category-list::-webkit-scrollbar {
            height: 5px;
        }
        
        .category-list::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        .category-list::-webkit-scrollbar-thumb {
            background: #2ecc71;
            border-radius: 10px;
        }
        
        .category-item {
            flex: 0 0 auto;
            padding: 8px 20px;
            margin: 0 10px;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            color: #333;
            font-weight: 500;
            white-space: nowrap;
        }
        
        .category-item:hover,
        .category-item.active {
            background-color: #2ecc71;
            color: white;
            transform: translateY(-2px);
        }
        
        /* Product Section Styles */
        .product-section {
            padding: 30px 0;
            scroll-margin-top: 150px;
        }
        
        .section-header {
            margin-bottom: 30px;
            position: relative;
            padding-left: 15px;
        }
        
        .section-header h2 {
            font-size: 2rem;
            color: #1a5276;
        }
        
        .section-header:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 5px;
            background-color: #2ecc71;
            border-radius: 5px;
        }
        
        /* Products Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .product-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .product-image {
            height: 200px;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .product-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            height: 200px; 
        }
        
        .product-title {
            font-size: 1.2rem;
            color: #1a5276;
            margin-bottom: 10px;
        }
        
        .product-description {
            flex-grow: 1; 
            color: #7f8c8d;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        
        .product-button {
            display: inline-block;
            align-self: flex-start;
            padding: 8px 20px;
            background-color: #2ecc71;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .product-button:hover {
            background-color: #27ae60;
        }
        
        .see-all {
            display: block;
            text-align: right;
            margin-top: 10px;
            color: #2ecc71;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .see-all:hover {
            color: #27ae60;
            text-decoration: underline;
        }
        
        /* Popup Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            width: 90%;
            max-width: 600px;
            position: relative;
            animation: modalOpen 0.3s ease;
        }

        .modal-close {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 1.5rem;
            cursor: pointer;
            color: #1a5276;
        }

        .modal-close:hover {
            color: #2ecc71;
        }

        .modal-image {
            width: 100%;
            height: 200px;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .modal-title {
            font-size: 1.5rem;
            color: #1a5276;
            margin-bottom: 15px;
        }

        .modal-description {
            color: #7f8c8d;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-bottom: 20px;
        }

        .info-item {
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
        }

        .info-item span {
            font-weight: 600;
            color: #1a5276;
        }

        .modal-buttons {
            display: flex;
            gap: 10px;
        }

        .modal-button {
            flex: 1;
            padding: 10px 20px;
            background-color: #2ecc71;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            text-decoration: none;
        }

        .modal-button:hover {
            background-color: #27ae60;
        }

        .secondary-button {
            background-color: #3498db;
        }

        .secondary-button:hover {
            background-color: #2980b9;
        }

        @keyframes modalOpen {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        /* Footer */
        footer {
            background-color: #1a5276;
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .footer-column {
            flex: 1;
            min-width: 200px;
        }
        
        .footer-column h4 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-column h4::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 30px;
            height: 2px;
            background-color: #2ecc71;
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column ul li {
            margin-bottom: 10px;
        }
        
        .footer-column ul li a {
            color: #ecf0f1;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-column ul li a:hover {
            color: #2ecc71;
            padding-left: 5px;
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #bdc3c7;
            font-size: 0.9rem;
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .nav-container {
                flex-direction: column;
            }
            
            nav ul {
                margin-top: 20px;
            }
            
            nav ul li {
                margin: 0 10px;
            }
            
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .modal-content {
                padding: 20px;
            }
            
            .info-grid {
                grid-template-columns: 1fr;
            }
            
            .modal-buttons {
                flex-direction: column;
            }
        }
        
        /* WhatsApp Button Styles */
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            background-color: #25d366;
            border-radius: 50%;
            padding: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        .whatsapp-button:hover {
            background-color: #128c7e;
            transform: scale(1.1);
        }

        .whatsapp-logo {
            width: 35px;
            height: 35px;
            display: block;
        }
        
        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #2ecc71;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
        }
        
        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background-color: #27ae60;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container nav-container">
            <div class="logo">Pure<span>Port</span> Exporters</div>
            <nav>
                <ul>
                    <li><a href="p.php#hero">Home</a></li>
                    <li><a href="p.php#about">About</a></li>
                    <li><a href="certificates.html">Certificates</a></li>
                    <li><a href="p.php#services">Services</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="p.php#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="products-hero" class="section">
        <div class="container hero-content">
            <h1>Our Premium Products</h1>
            <p>Explore our wide range of high-quality products sourced from trusted producers around the world.</p>
        </div>
    </section>

    <!-- Category Navigation -->
    <div class="category-nav">
        <div class="container">
            <div class="category-list">
                <a href="#fruits" class="category-item">Fruits</a>
                <a href="#vegetables" class="category-item">Vegetables</a>
                <a href="#dairy" class="category-item">Dairy Products</a>
                <a href="#spices" class="category-item">Spices</a>
                <a href="#clothing" class="category-item">Clothing</a>
                <a href="p.php#contact" class="category-item">Request Custom Export</a>
            </div>
        </div>
    </div>

    <!-- Fruits Section -->
    <section id="fruits" class="product-section">
        <div class="container">
            <div class="section-header">
                <h2>Premium Fruits</h2>
            </div>
            
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?mango')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Organic Mangoes</h3>
                        <p class="product-description">Premium Alphonso mangoes grown without pesticides. Known for their sweet taste and vibrant color.</p>
                        <button class="product-button know-more" data-product="mangoes">Know More</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?apple')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Premium Apples</h3>
                        <p class="product-description">Farm-fresh apples available in multiple varieties including Royal Gala, Fuji, and Red Delicious.</p>
                        <button class="product-button know-more" data-product="apples">Know More</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?banana')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Organic Bananas</h3>
                        <p class="product-description">Sustainably grown bananas with excellent shelf life and consistent quality.</p>
                        <button class="product-button know-more" data-product="bananas">Know More</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?grapes')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Premium Grapes</h3>
                        <p class="product-description">Sweet and juicy grapes available in green, red, and black varieties.</p>
                        <button class="product-button know-more" data-product="grapes">Know More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vegetables Section -->
    <section id="vegetables" class="product-section">
        <div class="container">
            <div class="section-header">
                <h2>Fresh Vegetables</h2>
            </div>
            
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?tomato')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Organic Tomatoes</h3>
                        <p class="product-description">Vine-ripened tomatoes with rich flavor, perfect for sauces and salads.</p>
                        <button class="product-button know-more" data-product="tomatoes">Know More</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?potato')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Premium Potatoes</h3>
                        <p class="product-description">High-quality potatoes available in different varieties suitable for various culinary uses.</p>
                        <button class="product-button know-more" data-product="potatoes">Know More</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?onion')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Export-Grade Onions</h3>
                        <p class="product-description">Premium quality onions with excellent shelf life and consistent size.</p>
                        <button class="product-button know-more" data-product="onions">Know More</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?carrot')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Organic Carrots</h3>
                        <p class="product-description">Sweet and crunchy carrots grown using sustainable farming practices.</p>
                        <button class="product-button know-more" data-product="carrots">Know More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dairy Products Section -->
    <section id="dairy" class="product-section">
        <div class="container">
            <div class="section-header">
                <h2>Premium Dairy Products</h2>
            </div>
            
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?cheese')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Artisanal Cheese</h3>
                        <p class="product-description">Handcrafted cheese available in multiple varieties from traditional recipes.</p>
                        <button class="product-button know-more" data-product="cheese">Know More</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?butter')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Premium Butter</h3>
                        <p class="product-description">Rich, creamy butter made from milk of grass-fed cows.</p>
                        <button class="product-button know-more" data-product="butter">Know More</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?yogurt')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Organic Yogurt</h3>
                        <p class="product-description">Probiotic-rich yogurt made from organic milk, available in various flavors.</p>
                        <button class="product-button know-more" data-product="yogurt">Know More</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?milk')"></div>
                    <div class="product-content">
                        <h3 class="product-title">UHT Milk</h3>
                        <p class="product-description">Long-shelf-life milk processed using ultra-high temperature treatment.</p>
                        <button class="product-button know-more" data-product="milk">Know More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Spices Section -->
    <section id="spices" class="product-section">
        <div class="container">
            <div class="section-header">
                <h2>Premium Spices</h2>
            </div>
            
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?cardamom')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Cardamom</h3>
                        <p class="product-description">Premium green cardamom known for its distinctive aroma and flavor.</p>
                        <button class="product-button know-more" data-product="cardamom">Know More</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?turmeric')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Organic Turmeric</h3>
                        <p class="product-description">High-curcumin turmeric powder from sustainably grown sources.</p>
                        <button class="product-button know-more" data-product="turmeric">Know More</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?pepper')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Black Pepper</h3>
                        <p class="product-description">Premium black pepper with strong aroma and robust flavor.</p>
                        <button class="product-button know-more" data-product="pepper">Know More</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?cinnamon')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Ceylon Cinnamon</h3>
                        <p class="product-description">Authentic Ceylon cinnamon sticks and powder with sweet, delicate flavor.</p>
                        <button class="product-button know-more" data-product="cinnamon">Know More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clothing Section -->
    <section id="clothing" class="product-section">
        <div class="container">
            <div class="section-header">
                <h2>Premium Textiles & Clothing</h2>
            </div>
            
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?cotton,fabric')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Organic Cotton</h3>
                        <p class="product-description">Sustainably grown organic cotton fiber and fabrics for eco-friendly textiles.</p>
                        <button class="product-button know-more" data-product="cotton">Know More</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?silk')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Pure Silk</h3>
                        <p class="product-description">Luxurious silk fabrics and garments from traditional silk-producing regions.</p>
                        <button class="product-button know-more" data-product="silk">Know More</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?denim')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Premium Denim</h3>
                        <p class="product-description">High-quality denim fabric and garments for fashion industry.</p>
                        <button class="product-button know-more" data-product="denim">Know More</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?wool')"></div>
                    <div class="product-content">
                        <h3 class="product-title">Fine Wool</h3>
                        <p class="product-description">Premium wool from select breeds, perfect for luxury garments and textiles.</p>
                        <button class="product-button know-more" data-product="wool">Know More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="p.php#hero">Home</a></li>
                        <li><a href="p.php#about">About Us</a></li>
                        <li><a href="p.php#services">Services</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="certificates.html">Certificates</a></li>
                        <li><a href="p.php#contact">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4>Products</h4>
                    <ul>
                        <li><a href="#fruits">Fruits</a></li>
                        <li><a href="#vegetables">Vegetables</a></li>
                        <li><a href="#dairy">Dairy Products</a></li>
                        <li><a href="#spices">Spices</a></li>
                        <li><a href="#clothing">Clothing</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4>Contact Us</h4>
                    <ul>
                        <li>Email: info@pureport.com</li>
                        <li>Phone: +1 (123) 456-7890</li>
                        <li>Address: 123 Export Avenue, Business District, Country</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                &copy; 2023 PurePort Exporters. All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/1234567890" class="whatsapp-button" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/767px-WhatsApp.svg.png" alt="WhatsApp" class="whatsapp-logo">
    </a>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <!-- Modal for Product Details -->
    <div class="modal" id="productModal">
        <div class="modal-content">
            <span class="modal-close">&times;</span>
            <div class="modal-image" id="modalImage"></div>
            <h2 class="modal-title" id="modalTitle">Product Title</h2>
            <p class="modal-description" id="modalDescription">Product description goes here.</p>
            
            <div class="modal-info">
                <h4>Product Details</h4>
                <div class="info-grid" id="modalInfo">
                    <!-- Info items will be added dynamically -->
                </div>
            </div>
            
            <div class="modal-buttons">
                <a href="p.php#contact" class="modal-button">Request Quote</a>
                <a href="https://wa.me/1234567890" class="modal-button secondary-button" target="_blank">Contact via WhatsApp</a>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Header background change on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            const logo = document.querySelector('.logo');
            const navLinks = document.querySelectorAll('nav ul li a');

            if (window.scrollY > 100) {
                header.style.backgroundColor = 'rgba(255, 255, 255, 0.9)';
                logo.style.color = '#1a5276';
                navLinks.forEach(link => {
                    link.style.color = '#1a5276';
                });
            } else {
                header.style.backgroundColor = 'rgba(255, 255, 255, 0)';
                logo.style.color = '#ffffff';
                navLinks.forEach(link => {
                    link.style.color = '#fafbfc';
                });
            }
        });

        // Back to top button
        const backToTopButton = document.querySelector('.back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopButton.classList.add('visible');
            } else {
                backToTopButton.classList.remove('visible');
            }
        });
        
        backToTopButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Modal functionality
        const modal = document.getElementById('productModal');
        const modalClose = document.querySelector('.modal-close');
        const knowMoreButtons = document.querySelectorAll('.know-more');
        
        // Product details
        const productDetails = {
            mangoes: {
                title: "Organic Alphonso Mangoes",
                description: "Our premium Alphonso mangoes are grown without the use of chemical pesticides or fertilizers. Known for their sweet taste, vibrant color, and rich flavor, these mangoes are harvested at the peak of ripeness to ensure the best quality.",
                image: "https://source.unsplash.com/800x400/?mango",
                info: [
                    { label: "Origin", value: "India" },
                    { label: "Variety", value: "Alphonso" },
                    { label: "Season", value: "April to June" },
                    { label: "Packaging", value: "4kg & 8kg boxes" },
                    { label: "Certification", value: "Organic" },
                    { label: "Shelf Life", value: "10-14 days at room temperature" }
                ],
                export: [
                    { label: "Export Volume", value: "500 tonnes annually" },
                    { label: "Main Markets", value: "Middle East, Europe, Southeast Asia" },
                    { label: "Minimum Order", value: "1 container (20ft)" },
                    { label: "Price Range", value: "Contact for pricing" },
                    { label: "Shipping", value: "Air freight & sea freight available" }
                ]
            },
            apples: {
                title: "Premium Farm Fresh Apples",
                description: "Our premium apples are sourced from selected orchards known for their exceptional quality. Available in multiple varieties including Royal Gala, Fuji, and Red Delicious, these apples are crisp, juicy, and perfect for direct consumption or processing.",
                image: "https://source.unsplash.com/800x400/?apple",
                info: [
                    { label: "Origin", value: "Multiple Sources" },
                    { label: "Varieties", value: "Royal Gala, Fuji, Red Delicious" },
                    { label: "Season", value: "Year-round" },
                    { label: "Packaging", value: "10kg & 20kg boxes" },
                    { label: "Certification", value: "GlobalG.A.P." },
                    { label: "Shelf Life", value: "3-4 weeks under refrigeration" }
                ],
                export: [
                    { label: "Export Volume", value: "1200 tonnes annually" },
                    { label: "Main Markets", value: "Europe, North America, Asia" },
                    { label: "Minimum Order", value: "1 container (20ft)" },
                    { label: "Price Range", value: "Contact for pricing" },
                    { label: "Shipping", value: "Air freight & sea freight available" }
                ]
            },
            bananas: {
                title: "Organic Cavendish Bananas",
                description: "Our organically grown Cavendish bananas are known for their excellent shelf life and consistent quality. Each bunch is carefully selected to ensure uniform ripening and optimal flavor development.",
                image: "https://source.unsplash.com/800x400/?banana",
                info: [
                    { label: "Origin", value: "Ecuador" },
                    { label: "Variety", value: "Cavendish" },
                    { label: "Season", value: "Year-round" },
                    { label: "Packaging", value: "13kg boxes" },
                    { label: "Certification", value: "Organic, Fair Trade" },
                    { label: "Shelf Life", value: "Green: 14 days, Ripened: 5-7 days" }
                ],
                export: [
                    { label: "Export Volume", value: "800 tonnes annually" },
                    { label: "Main Markets", value: "Europe, North America, Asia" },
                    { label: "Minimum Order", value: "1 container (20ft)" },
                    { label: "Price Range", value: "Contact for pricing" },
                    { label: "Shipping", value: "Air freight & sea freight available" }
                ]
            },
            grapes: {
                title: "Premium Table Grapes",
                description: "Sweet and juicy grapes available in green, red, and black varieties. Our grapes are cultivated using sustainable practices to ensure the highest quality and taste.",
                image: "https://source.unsplash.com/800x400/?grapes",
                info: [
                    { label: "Origin", value: "Chile, South Africa, India" },
                    { label: "Varieties", value: "Thompson Seedless, Crimson, Black Seedless" },
                    { label: "Season", value: "Year-round (rotating origins)" },
                    { label: "Packaging", value: "4.5kg & 9kg boxes" },
                    { label: "Certification", value: "GlobalG.A.P." },
                    { label: "Shelf Life", value: "2-3 weeks under refrigeration" }
                ],
                export: [
                    { label: "Export Volume", value: "700 tonnes annually" },
                    { label: "Main Markets", value: "Europe, North America, Asia" },
                    { label: "Minimum Order", value: "1 container (20ft)" },
                    { label: "Price Range", value: "Contact for pricing" },
                    { label: "Shipping", value: "Air freight & sea freight available" }
                ]
            }
        };
        
        // Open modal when "Know More" button is clicked
        knowMoreButtons.forEach(button => {
            button.addEventListener('click', () => {
                const productId = button.getAttribute('data-product');
                const product = productDetails[productId];

                if (product) {
                    document.getElementById('modalTitle').textContent = product.title;
                    document.getElementById('modalDescription').textContent = product.description;
                    document.getElementById('modalImage').style.backgroundImage = `url('${product.image}')`;

                    const infoGrid = document.getElementById('modalInfo');
                    infoGrid.innerHTML = ''; // Clear previous info

                    // Add product info
                    product.info.forEach(item => {
                        const infoItem = document.createElement('div');
                        infoItem.className = 'info-item';
                        infoItem.innerHTML = `<span>${item.label}:</span> ${item.value}`;
                        infoGrid.appendChild(infoItem);
                    });

                    // Add export info
                    if (product.export) {
                        const exportSection = document.createElement('div');
                        exportSection.className = 'modal-info';
                        exportSection.innerHTML = '<h4>Export Information</h4>';

                        const exportGrid = document.createElement('div');
                        exportGrid.className = 'info-grid';

                        product.export.forEach(item => {
                            const exportItem = document.createElement('div');
                            exportItem.className = 'info-item';
                            exportItem.innerHTML = `<span>${item.label}:</span> ${item.value}`;
                            exportGrid.appendChild(exportItem);
                        });

                        exportSection.appendChild(exportGrid);
                        modalContent.insertBefore(exportSection, document.querySelector('.modal-buttons'));
                    }

                    // Show modal
                    modal.style.display = 'flex';
                }
            });
        });

        // Close modal when close button is clicked
        modalClose.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        // Close modal when clicking outside the modal content
        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });

        // Highlight active category in navigation
        const categoryItems = document.querySelectorAll('.category-item');
        categoryItems.forEach(item => {
            item.addEventListener('click', () => {
                categoryItems.forEach(cat => cat.classList.remove('active'));
                item.classList.add('active');
            });
        });

        // Activate category based on scroll position
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('.product-section');
            let currentSection = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (pageYOffset >= (sectionTop - 200)) {
                    currentSection = section.getAttribute('id');
                }
            });
            
            categoryItems.forEach(item => {
                item.classList.remove('active');
                const href = item.getAttribute('href');
                if (href && href.includes(currentSection)) {
                    item.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>