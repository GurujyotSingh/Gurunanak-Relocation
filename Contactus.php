<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Gurunanak Relocation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="head.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #ff6300;
            --primary-light: rgba(255, 99, 0, 0.15);
            --secondary: #5c0fd9;
            --secondary-light: rgba(92, 15, 217, 0.15);
            --dark: #1a1a1a;
            --darker: #111;
            --light: #f8f9fa;
            --lighter: #fff;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 15px 50px rgba(0, 0, 0, 0.15);
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
            --border-radius: 16px;
            --border-radius-lg: 24px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            
        }
          body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light);
            color: var(--dark);
            overflow-x: hidden;
            line-height: 1.6;
        }
header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1rem 0;
            z-index: 1000;
            transition: var(--transition);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.85);
            box-shadow: var(--shadow);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        header.scrolled {
            padding: 1rem 0;
            background: rgba(255, 255, 255, 0.95);
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .logo:hover {
            transform: translateY(-3px);
        }
        
        .logo-image {
            height: 70px;
            width: auto;
            object-fit: contain;
            image-rendering: -webkit-optimize-contrast;
        }
        
        .logo-text {
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            line-height: 1;
        }
        
        nav ul {
            display: flex;
            list-style: none;
            gap: 2.5rem;
        }
        
        
        nav a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            position: relative;
            padding: 0.5rem 0;
            transition: var(--transition);
        }
        
        nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            transition: var(--transition);
        }
        
        nav a:hover {
            color: var(--primary);
        }
        
        nav a:hover::after {
            width: 100%;
        }
        
        .cta-button {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: var(--shadow);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            opacity: 0;
            transition: var(--transition);
            z-index: -1;
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }
        
        .cta-button:hover::before {
            opacity: 1;
        }
        
        .mobile-menu {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark);
        }
        
       
        

        /* Glass Morphism Header */
        
        /* 3D Contact Hero */
        .contact-hero {
            height: 70vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            background: linear-gradient(145deg, var(--darker), var(--dark));
        }

        .hero-bg-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, var(--primary-light) 0%, transparent 20%),
                radial-gradient(circle at 80% 70%, var(--secondary-light) 0%, transparent 20%);
            opacity: 0.4;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
            width: 100%;
            transform-style: preserve-3d;
        }

        .hero-text {
            max-width: 700px;
            transform: translateZ(40px);
        }

        .hero-text h1 {
            font-size: 4rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            color: var(--lighter);
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .hero-text p {
            font-size: 1.3rem;
            margin-bottom: 2.5rem;
            color: rgba(255, 255, 255, 0.85);
            max-width: 600px;
        }

        .hero-buttons {
            display: flex;
            gap: 1.5rem;
        }

        .cta-button {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border: none;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: var(--shadow);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            opacity: 0;
            transition: var(--transition);
            z-index: -1;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .cta-button:hover::before {
            opacity: 1;
        }

        .secondary-button {
            background: transparent;
            color: white;
            border: 2px solid white;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            backdrop-filter: blur(5px);
        }

        .secondary-button:hover {
            background: white;
            color: var(--dark);
            transform: translateY(-3px);
            box-shadow: var(--shadow);
        }

        /* Floating Contact Elements */
        .floating-contact {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 1;
        }

        .floating-element {
            position: absolute;
            border-radius: 50%;
            filter: blur(40px);
            opacity: 0.3;
            animation: float 15s infinite linear;
        }

        .element-1 {
            width: 300px;
            height: 300px;
            background: var(--primary);
            top: 20%;
            left: 10%;
            animation-delay: 0s;
            animation-duration: 20s;
        }

        .element-2 {
            width: 400px;
            height: 400px;
            background: var(--secondary);
            bottom: 15%;
            right: 10%;
            animation-delay: 2s;
            animation-duration: 25s;
        }

        @keyframes float {
            0% {
                transform: translate(0, 0) rotate(0deg);
            }
            50% {
                transform: translate(50px, 50px) rotate(180deg);
            }
            100% {
                transform: translate(0, 0) rotate(360deg);
            }
        }

        /* Modern Contact Grid */
        .contact-section {
            padding: 6rem 2rem;
            position: relative;
            z-index: 2;
            background: var(--lighter);
        }

        .contact-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
        }

        /* Glass Contact Card */
        .contact-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: var(--border-radius-lg);
            padding: 3rem;
            box-shadow: var(--shadow);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .contact-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary), var(--secondary));
        }

        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .card-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 2rem;
            color: var(--dark);
            position: relative;
            display: inline-block;
        }

        .card-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border-radius: 2px;
        }

        /* Contact Form */
        .form-group {
            margin-bottom: 1.8rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.8rem;
            font-weight: 500;
            color: var(--dark);
        }

        .form-control {
            width: 100%;
            padding: 1.2rem 1.5rem;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(5px);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px var(--primary-light);
            background: var(--lighter);
        }

        textarea.form-control {
            min-height: 180px;
            resize: vertical;
        }

        /* Contact Info */
        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 2.5rem;
        }

        .info-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-right: 1.5rem;
            flex-shrink: 0;
            box-shadow: var(--shadow);
        }

        .info-content h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }

        .info-content p, .info-content a {
            color: #555;
            text-decoration: none;
            transition: var(--transition);
        }

        .info-content a:hover {
            color: var(--primary);
        }

        /* Business Hours */
        .business-hours {
            margin-top: 3rem;
        }

        .hours-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1.5rem;
        }

        .hours-table tr {
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .hours-table tr:last-child {
            border-bottom: none;
        }

        .hours-table td {
            padding: 1rem 0;
            color: #555;
        }

        .hours-table td:last-child {
            text-align: right;
            font-weight: 500;
            color: var(--dark);
        }

        /* Interactive Map */
        .map-section {
            padding: 0 2rem 6rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .map-container {
            height: 500px;
            border-radius: var(--border-radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            transition: var(--transition);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .map-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Footer */
        footer {
            background: linear-gradient(145deg, var(--darker), var(--dark));
            color: white;
            padding: 6rem 2rem 3rem;
            position: relative;
            overflow: hidden;
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            position: relative;
            z-index: 2;
        }

        .footer-logo {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            display: inline-block;
            background: linear-gradient(to right, var(--lighter), #f0f0f0);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .footer-about p {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 2rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-links a {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }
  /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: var(--light);
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, var(--primary), var(--secondary));
            border-radius: 10px;
        }
        .social-links a:hover {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            transform: translateY(-3px);
        }

        .footer-links h3 {
            font-size: 1.4rem;
            margin-bottom: 1.5rem;
            color: var(--lighter);
            position: relative;
            padding-bottom: 10px;
        }

        .footer-links h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 1rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
            display: inline-block;
        }

        .footer-links a:hover {
            color: var(--primary);
            transform: translateX(5px);
        }

        .footer-contact p {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 1.5rem;
            color: rgba(255, 255, 255, 0.7);
        }

        .footer-contact i {
            color: var(--primary);
            font-size: 1.2rem;
            width: 25px;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 4rem;
            margin-top: 4rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
            position: relative;
            z-index: 2;
        }

        .footer-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, var(--primary-light) 0%, transparent 25%),
                radial-gradient(circle at 80% 70%, var(--secondary-light) 0%, transparent 25%);
            opacity: 0.3;
            z-index: 1;
        }

        /* Responsive Styles */
        @media (max-width: 1200px) {
            .hero-text h1 {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 992px) {
            .contact-hero {
                height: 60vh;
                min-height: 500px;
            }
            
            .hero-text h1 {
                font-size: 3rem;
            }
        }

        @media (max-width: 768px) {
            .contact-hero {
                height: 50vh;
                min-height: 400px;
            }
            
            .hero-text h1 {
                font-size: 2.5rem;
            }
            
            .hero-text p {
                font-size: 1.1rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                gap: 1rem;
            }
            
            .contact-card {
                padding: 2rem;
            }
        }

        @media (max-width: 576px) {
            .contact-hero {
                height: 70vh;
            }
            
            .hero-text h1 {
                font-size: 2.2rem;
            }
            
            .map-section {
                padding: 0 1rem 4rem;
            }
            
            .map-container {
                height: 350px;
            }
        }
    </style>
</head>
<body>
    <header id="header">
        <div class="header-container">
            <a href="#" class="logo">
                <img src="logo.svg" alt="Gurunanak Relocation Logo" class="logo-image">
              
            </a>
            <nav id="nav">
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="Contactus.php">Contact</a></li>
                </ul>
            </nav>
            <button class="cta-button pulse">Get a Quote</button>
            <div class="mobile-menu" id="mobileMenu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>
   
    <!-- 3D Contact Hero Section -->
    <section class="contact-hero">
        <div class="hero-bg-pattern"></div>
        <div class="floating-contact">
            <div class="floating-element element-1"></div>
            <div class="floating-element element-2"></div>
        </div>
        <div class="hero-content">
            <div class="hero-text">
                <h1>Let's Move Together</h1>
                <p>Our team is ready to assist you with all your relocation needs. Reach out for a seamless moving experience.</p>
                <div class="hero-buttons">
                    <a href="#contact-form" class="cta-button">Send Message</a>
                    <a href="tel:+919876543210" class="secondary-button">Call Now</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Modern Contact Grid -->
    <section class="contact-section">
        <div class="contact-container">
            <!-- Contact Form Card -->
            <div class="contact-card">
                <h2 class="card-title">Get In Touch</h2>
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" id="phone" class="form-control" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <label for="service" class="form-label">Service Needed</label>
                        <select id="service" class="form-control">
                            <option value="">Select a service</option>
                            <option value="residential">Residential Moving</option>
                            <option value="commercial">Commercial Moving</option>
                            <option value="packing">Packing Services</option>
                            <option value="storage">Storage Solutions</option>
                            <option value="international">International Relocation</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea id="message" class="form-control" placeholder="Tell us about your moving needs" required></textarea>
                    </div>
                    <button type="submit" class="cta-button" style="width: 100%; margin-top: 1rem;">Send Message</button>
                </form>
            </div>
            
            <!-- Contact Info Card -->
            <div class="contact-card">
                <h2 class="card-title">Contact Info</h2>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-content">
                        <h3>Our Headquarters</h3>
                        <p>B/09, First Floor, Hari Darshan Shopping Center, Mony Hotel Road, Isanpur, Ahmedabad, Gujarat 382405, INDIA</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h3>Phone Numbers</h3>
                        <p><a href="tel:+917574941313">+91 75 7494 1313</a></p>                        
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h3>Email Addresses</h3>
                        <p><a href="mailto:info@gurunanakrelocation.com">info@gurunanakrelocation.com</a></p>
                        <p><a href="mailto:support@gurunanakrelocation.com">support@gurunanakrelocation.com</a></p>
                    </div>
                </div>
                
                <div class="business-hours">
                    <h3>Business Hours</h3>
                    <table class="hours-table">
                        <tr>
                            <td>Monday - Friday</td>
                            <td>8:00 AM - 8:00 PM</td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td>9:00 AM - 6:00 PM</td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td>10:00 AM - 4:00 PM</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Interactive Map Section -->
    <section class="map-section">
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7346.831904210413!2d72.5941584388501!3d22.971727066837197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8f59717eca7d%3A0xff509f3104dc1776!2sHari%20Darshan%20Shopping%20Center!5e0!3m2!1sen!2sin!4v1749192481981!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    
    <!-- Footer with Gradient Pattern -->
    <footer>
        <div class="footer-pattern"></div>
        <div class="footer-container">
            <div class="footer-about">
                <div class="footer-logo">Gurunanak Relocation</div>
                <p>Your trusted partner for seamless relocations across India since 2010. We make moving effortless.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="quote.html">Get a Quote</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>Our Services</h3>
                <ul>
                    <li><a href="residential-moving.html">Residential Moving</a></li>
                    <li><a href="commercial-moving.html">Commercial Moving</a></li>
                    <li><a href="packing-services.html">Packing Services</a></li>
                    <li><a href="storage-solutions.html">Storage Solutions</a></li>
                    <li><a href="international-moving.html">International Moving</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Contact Info</h3>
                <p><i class="fas fa-map-marker-alt"></i> 123 Relocation Avenue, Mumbai, India</p>
                <p><i class="fas fa-phone"></i> +91 98765 43210</p>
                <p><i class="fas fa-envelope"></i> info@gurunanakrelocation.com</p>
                <p><i class="fas fa-clock"></i> Mon-Sun: 8:00 AM - 8:00 PM</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 Gurunanak Relocation. All Rights Reserved. | <a href="privacy.html">Privacy Policy</a> | <a href="terms.html">Terms of Service</a></p>
        </div>
    </footer>

    <script>
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const service = document.getElementById('service').value;
            const message = document.getElementById('message').value;
            
            // Here you would typically send this data to your server
            // For demo purposes, we'll just show an alert
            alert(`Thank you, ${name}! Your message has been received. We'll contact you soon at ${email} or ${phone}.`);
            
            // Reset form
            this.reset();
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>