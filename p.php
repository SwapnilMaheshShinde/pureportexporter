<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PurePort Exporters</title>
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
            min-height: 100vh;
            padding: 80px 0;
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
        #hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('bg2.png') center/cover no-repeat;
            color: white;
            text-align: center;
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
        
        /* About Section */
        #about {
            background-color: #f9f9f9;
        }
        
        .section-title {
            font-size: 2.5rem;
            color: #1a5276;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .section-subtitle {
            font-size: 1.2rem;
            color: #7f8c8d;
            margin-bottom: 50px;
            text-align: center;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .about-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 30px;
        }
        
        .about-text {
            flex: 1;
            min-width: 300px;
        }
        
        .about-text p {
            line-height: 1.8;
            margin-bottom: 20px;
            color: #34495e;
        }
        
        .about-image {
            flex: 1;
            min-width: 300px;
            height: 400px;
            background: url('bg1.jpg') center/cover no-repeat;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        /* Services Section */
        #services {
            background-color: white;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .service-icon {
            font-size: 40px;
            color: #2ecc71;
            margin-bottom: 20px;
        }
        
        .service-title {
            font-size: 1.5rem;
            color: #1a5276;
            margin-bottom: 15px;
        }
        
        .service-description {
            color: #7f8c8d;
            line-height: 1.6;
        }
        
        /* Products Section */
        #products {
            background-color: #f9f9f9;
        }
        
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
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
            background: url('https://source.unsplash.com/400x200/?organic,food') center/cover no-repeat;
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
        }
        
        .product-button:hover {
            background-color:rgb(24, 97, 54);
        }
        
        /* Contact Section */
        #contact {
            background-color: white;
        }
        
        .contact-content {
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
        }
        
        .contact-info {
            flex: 1;
            min-width: 300px;
        }
        
        .contact-info h3 {
            font-size: 1.8rem;
            color: #1a5276;
            margin-bottom: 20px;
        }
        
        .contact-info p {
            color: #34495e;
            line-height: 1.8;
            margin-bottom: 20px;
        }
        
        .contact-info div {
            margin-bottom: 15px;
        }
        
        .contact-info span {
            color: #1a5276;
            font-weight: 600;
            margin-right: 10px;
        }
        
        .contact-form {
            flex: 1;
            min-width: 300px;
        }
        
        .contact-form h3 {
            font-size: 1.8rem;
            color: #1a5276;
            margin-bottom: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-control {
            width: 100%;
            padding: 15px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #2ecc71;
            box-shadow: 0 0 5px rgba(46, 204, 113, 0.3);
        }
        
        textarea.form-control {
            height: 150px;
            resize: none;
        }
        
        .submit-button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #2ecc71;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .submit-button:hover {
            background-color: #27ae60;
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
            border-radius: 15px;
            width: 90%;
            max-width: 600px;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            animation: modalOpen 0.4s ease;
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
            background: url('https://source.unsplash.com/600x400/?product') center/cover no-repeat;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        
        .modal-title {
            color: #2ecc71;
            font-size: 2rem;
            margin-bottom: 15px;
            border-bottom: 2px solid #2ecc71;
            padding-bottom: 10px;
        }
        
        .modal-description {
            color: #7f8c8d;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .modal-form .form-group {
            margin-bottom: 15px;
        }
        
        .modal-form input,
        .modal-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        .modal-form textarea {
            height: 100px;
            resize: none;
        }
        
        .modal-form button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2ecc71;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .modal-form button:hover {
            background-color: #27ae60;
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
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container nav-container">
            <div class="logo">Pure<span>Port</span> Exporters</div>
            <nav>
    <ul>
        <li><a href="#hero">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="certificates.html">Certificates</a></li> <!-- Added Certificates Link -->
        <li><a href="#services">Services</a></li>
        <li><a href="#products">Products</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="section">
        <div class="container hero-content">
            <h1>Global Export Solutions</h1>
            <p>PurePort Exporters delivers premium products to international markets with efficiency, reliability, and exceptional service.</p>
            <a href="#contact" class="cta-button">Get in Touch</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title">About PurePort</h2>
            <p class="section-subtitle">Your trusted partner in global trade since 2005</p>
            
            <div class="about-content">
                <div class="about-text">
                    <p>PurePort Exporters is a leading export company specializing in connecting quality producers with international markets. With over two decades of experience, we've built a reputation for reliability, integrity, and excellence in global trade.</p>
                    <p>Our extensive network spans across Asia, Europe, Africa, and the Americas, allowing us to facilitate seamless export operations for our clients. We pride ourselves on our deep understanding of international trade regulations, customs procedures, and market dynamics.</p>
                    <p>At PurePort, we believe in building lasting relationships with both our suppliers and international buyers, creating sustainable value chains that benefit all parties involved.</p>
                </div>
                <div class="about-image"></div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle">Comprehensive export solutions tailored to your needs</p>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">📦</div>
                    <h3 class="service-title">Export Management</h3>
                    <p class="service-description">From documentation to logistics, we handle the entire export process so you can focus on your core business operations.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">🌐</div>
                    <h3 class="service-title">Market Entry Strategy</h3>
                    <p class="service-description">Our market research and strategic planning services help you identify and penetrate the most promising international markets.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📋</div>
                    <h3 class="service-title">Compliance & Documentation</h3>
                    <p class="service-description">We ensure all your exports meet international standards and regulations with proper documentation and certification.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">🚢</div>
                    <h3 class="service-title">Shipping & Logistics</h3>
                    <p class="service-description">Our global logistics network ensures your products reach their destination safely, on time, and at competitive rates.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="section">
        <div class="container">
            <h2 class="section-title">Our Products</h2>
            <p class="section-subtitle">Premium quality products for global markets</p>
            
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?organic,food');"></div>
                    <div class="product-content">
                        <h3 class="product-title">Organic Foods</h3>
                        <p class="product-description">Certified organic products including grains, fruits, and specialty foods.</p>
                        <button class="product-button know-more">Know More</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?textile,apparel');"></div>
                    <div class="product-content">
                        <h3 class="product-title">Textiles & Apparel</h3>
                        <p class="product-description">High-quality fabrics, garments, and textile products from established manufacturers.</p>
                        <button class="product-button know-more">Know More</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?handmade,craft');"></div>
                    <div class="product-content">
                        <h3 class="product-title">Artisanal Crafts</h3>
                        <p class="product-description">Handcrafted products showcasing traditional skills and cultural heritage.</p>
                        <button class="product-button know-more">Know More</button>
                    </div>
                </div>
                
                
                
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://source.unsplash.com/400x200/?pharmaceutical,medicine');"></div>
                    <div class="product-content">
                        <h3 class="product-title">Pharmaceuticals</h3>
                        <p class="product-description">Quality pharmaceutical products meeting international health standards.</p>
                        <button class="product-button know-more">Know More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="text-align: center; margin-top: 30px;">
    <a href="products.php" class="cta-button">Explore More Products</a>
</div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-title">Get in Touch</h2>
            <p class="section-subtitle">Ready to expand your global reach? Contact us today.</p>
            
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p>Have questions or ready to start exporting? Our team is here to help you navigate the global marketplace.</p>
                    
                    <div><span>Address:</span> 123 Trade Center, Business District, New York, NY 10001</div>
                    <div><span>Phone:</span> +1 (555) 123-4567</div>
                    <div><span>Email:</span> info@pureportexporters.com</div>
                    <div><span>Hours:</span> Monday - Friday: 9:00 AM - 5:00 PM EST</div>
                </div>
                
                <div class="contact-form">
    <h3>Send us a Message</h3>
    <form action="submit_contact.php" method="post">
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>
        <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="Subject">
        </div>

        <!-- Country Typing Field with Auto-Suggestions -->
        <div class="form-group">
            <input list="countries" name="country" class="form-control" placeholder="Your Country" required>
            <datalist id="countries">
                <option value="Afghanistan">
                <option value="Albania">
                <option value="Algeria">
                <option value="Andorra">
                <option value="Angola">
                <option value="Argentina">
                <option value="Armenia">
                <option value="Australia">
                <option value="Austria">
                <option value="Azerbaijan">
                <option value="Bahamas">
                <option value="Bahrain">
                <option value="Bangladesh">
                <option value="Barbados">
                <option value="Belarus">
                <option value="Belgium">
                <option value="Belize">
                <option value="Benin">
                <option value="Bhutan">
                <option value="Bolivia">
                <option value="Bosnia and Herzegovina">
                <option value="Botswana">
                <option value="Brazil">
                <option value="Brunei">
                <option value="Bulgaria">
                <option value="Burkina Faso">
                <option value="Burundi">
                <option value="Cambodia">
                <option value="Cameroon">
                <option value="Canada">
                <option value="Central African Republic">
                <option value="Chad">
                <option value="Chile">
                <option value="China">
                <option value="Colombia">
                <option value="Comoros">
                <option value="Congo">
                <option value="Costa Rica">
                <option value="Croatia">
                <option value="Cuba">
                <option value="Cyprus">
                <option value="Czech Republic">
                <option value="Denmark">
                <option value="Djibouti">
                <option value="Dominica">
                <option value="Dominican Republic">
                <option value="Ecuador">
                <option value="Egypt">
                <option value="El Salvador">
                <option value="Equatorial Guinea">
                <option value="Eritrea">
                <option value="Estonia">
                <option value="Eswatini">
                <option value="Ethiopia">
                <option value="Fiji">
                <option value="Finland">
                <option value="France">
                <option value="Gabon">
                <option value="Gambia">
                <option value="Georgia">
                <option value="Germany">
                <option value="Ghana">
                <option value="Greece">
                <option value="Grenada">
                <option value="Guatemala">
                <option value="Guinea">
                <option value="Guyana">
                <option value="Haiti">
                <option value="Honduras">
                <option value="Hungary">
                <option value="Iceland">
                <option value="India">
                <option value="Indonesia">
                <option value="Iran">
                <option value="Iraq">
                <option value="Ireland">
                <option value="Israel">
                <option value="Italy">
                <option value="Jamaica">
                <option value="Japan">
                <option value="Jordan">
                <option value="Kazakhstan">
                <option value="Kenya">
                <option value="Kuwait">
                <option value="Lebanon">
                <option value="Malaysia">
                <option value="Mexico">
                <option value="Nepal">
                <option value="Netherlands">
                <option value="New Zealand">
                <option value="Nigeria">
                <option value="Norway">
                <option value="Pakistan">
                <option value="Philippines">
                <option value="Poland">
                <option value="Portugal">
                <option value="Qatar">
                <option value="Romania">
                <option value="Russia">
                <option value="Saudi Arabia">
                <option value="South Africa">
                <option value="Spain">
                <option value="Sri Lanka">
                <option value="Sweden">
                <option value="Switzerland">
                <option value="Thailand">
                <option value="Turkey">
                <option value="United Arab Emirates">
                <option value="United Kingdom">
                <option value="United States">
                <option value="Vietnam">
                <option value="Other">
            </datalist>
        </div>

        <!-- Interested Product Field -->
        <div class="form-group">
            <input type="text" name="interested_product" class="form-control" placeholder="Interested Product" required>
        </div>

        <div class="form-group">
            <textarea name="message" class="form-control" placeholder="Your Message" required></textarea>
        </div>

        <button type="submit" class="submit-button">Send Message</button>
    </form>
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
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#services">Export Management</a></li>
                        <li><a href="#services">Market Entry Strategy</a></li>
                        <li><a href="#services">Compliance & Documentation</a></li>
                        <li><a href="#services">Shipping & Logistics</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4>Products</h4>
                    <ul>
                        <li><a href="#products">Organic Foods</a></li>
                        <li><a href="#products">Textiles & Apparel</a></li>
                        <li><a href="#products">Artisanal Crafts</a></li>
                        <li><a href="#products">Industrial Materials</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4>Connect With Us</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">LinkedIn</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                &copy; 2025 PurePort Exporters. All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- Popup Modal -->
    <div class="modal" id="productModal">
        <div class="modal-content">
            <span class="modal-close">&times;</span>
            <div class="modal-image"></div>
            <h3 class="modal-title">Product Title</h3>
            <p class="modal-description">Product description goes here.</p>
            <form class="modal-form">
                <div class="form-group">
                    <input type="text" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <textarea placeholder="Your Message" required></textarea>
                </div>
                <button type="submit">Get Quote</button>
            </form>
        </div>
    </div>

    <script>
        // Add this to your existing script section at the bottom of the page
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('header');
    const logo = document.querySelector('.logo');
    const navLinks = document.querySelectorAll('nav ul li a');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            // When scrolled down
            header.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
            header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
            logo.style.color = '#1a5276';
            navLinks.forEach(link => {
                link.style.color = '#1a5276';
            });
        } else {
            // When at the top (hero section)
            header.style.backgroundColor = 'rgba(255, 255, 255, 0)';
            header.style.boxShadow = 'none';
            logo.style.color = '#ffffff';
            navLinks.forEach(link => {
                link.style.color = '#fafbfc';
            });
        }
    });
    
    // Trigger the scroll event on page load to set the initial state
    window.dispatchEvent(new Event('scroll'));
});
        // JavaScript for Modal
        const modal = document.getElementById('productModal');
        const knowMoreButtons = document.querySelectorAll('.know-more');
        const modalClose = document.querySelector('.modal-close');

        // Replace the existing know-more button event listener
        knowMoreButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Get the product title from the parent card
                const productTitle = button.closest('.product-card').querySelector('.product-title').textContent;
                
                // Show modal with just product info, no form
                document.querySelector('.modal-title').textContent = productTitle;
                document.querySelector('.modal-description').textContent = `Interested in our ${productTitle}? Contact us now!`;
                
                // Replace form with a button that links to contact section
                const formArea = document.querySelector('.modal-form');
                formArea.innerHTML = '<a href="#contact" class="submit-button" onclick="closeModal()">Contact Us</a>';
                
                modal.style.display = 'flex';
            });
        });

        function closeModal() {
            modal.style.display = 'none';
        }
    </script>
    <!-- WhatsApp Chat Button -->
        <a href="https://wa.me/9579119759" class="whatsapp-button" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Logo" class="whatsapp-logo">
        </a>
</body>
</html>