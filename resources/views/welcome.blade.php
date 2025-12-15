<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | MTAWADA - Waste Pickers Network</title>
    <meta name="description" content="Mtandao wa Waokota Taka Rejeshi Dar es Salaam - Uniting waste pickers for rights, recognition, and environmental conservation in Tanzania.">
    <meta name="keywords" content="MTAWADA, waste pickers, Dar es Salaam, Tanzania, environmental conservation, waste management, circular economy, workers rights">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/favicon_io/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/favicon_io/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/favicon_io/favicon-16x16.png')}}">
    <link rel="manifest" href="/site.webmanifest">

</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-content">
            <div class="preloader-icon">
                <i class="fas fa-recycle"></i>
            </div>
            <div class="preloader-text">
                <h2>MTAWADA</h2>
                <p>Mtandao wa Waokota Taka Rejeshi Dar es Salaam</p>
            </div>
            <div class="loader-bar">
                <div class="loader-progress"></div>
            </div>
        </div>
    </div>

    <!-- Scroll Progress -->
    <div class="scroll-progress"></div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container nav-container">
            <a href="/" class="logo">
                <img src="{{asset('/Logo/Mtawada Logo.jpg')}}" style="width:50%;height:50%"></img>
            </a>

            <div class="nav-menu">
                <ul class="nav-list">
                    <li><a href="{{route('mtawada.home')}}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                        <i class="fas fa-home"></i> Home
                    </a></li>

                    <!-- About Dropdown -->
                    <li class="dropdown">
                        <a href="#" class="nav-link">
                            <i class="fas fa-info-circle"></i> About <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('mtawada.about')}}"><i class="fas fa-users"></i> About Us</a></li>
                            <li><a href="{{route('mtawada.mission')}}"><i class="fas fa-bullseye"></i> Mission & Vision</a></li>
                            <li><a href="{{route('mtawada.history')}}"><i class="fas fa-history"></i> Our History</a></li>
                            <li><a href="{{route('mtawada.coreValues')}}"><i class="fas fa-heart"></i> Core Values</a></li>
                        </ul>
                    </li>

                    <!-- Programs Dropdown -->
                   <li class="dropdown">
                        <a href="#" class="nav-link">
                            <i class="fas fa-project-diagram"></i> Programs <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('mtawada.programs') }}#research"><i class="fas fa-search"></i> Research</a></li>
                            <li><a href="{{ route('mtawada.programs') }}#resource-centre"><i class="fas fa-book"></i> Resource Centre</a></li>
                            <li><a href="{{ route('mtawada.programs') }}#news-events"><i class="fas fa-calendar-alt"></i> News & Events</a></li>
                            <li><a href="{{ route('mtawada.programs') }}#what-we-do"><i class="fas fa-tasks"></i> What We Do</a></li>
                        </ul>
                    </li>

                    <li><a href="{{route('mtawada.impact')}}" class="nav-link {{ request()->is('impact') ? 'active' : '' }}">
                        <i class="fas fa-chart-line"></i> Impact
                    </a></li>
                    <li><a href="{{route('mtawada.donate')}}" class="nav-link {{ request()->is('news') ? 'active' : '' }}">
                        <i class="fas fa-money"></i> Donate
                    </a></li>
                    <li><a href="{{route('mtawada.gallery')}}" class="nav-link {{ request()->is('gallery') ? 'active' : '' }}">
                        <i class="fas fa-images"></i> Gallery
                    </a></li>
                    <li><a href="{{route('mtawada.contact')}}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">
                        <i class="fas fa-envelope"></i> Contact
                    </a></li>

                </ul>
                <button class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-wave">
                <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
                </svg>
            </div>

            <!-- Main Footer Content -->
            <div class="footer-content">
                <!-- Logo & Description -->
                <div class="footer-column footer-about">
                    <div class="footer-logo">
                        <div class="logo-icon" style="background: #1B5E20;">
                            <i class="fas fa-recycle" style="color: white;"></i>
                        </div>
                        <div class="logo-text">
                            <h3 style="color: white;">MTAWADA</h3>
                            <p style="color: #66BB6A;">Utu na Uhai wa Mazingira</p>
                        </div>
                    </div>
                    <p class="footer-description" style="color: rgba(255, 255, 255, 0.8);">
                        Uniting waste pickers across Dar es Salaam to fight for recognition, rights, and environmental sustainability through collective action and advocacy.
                    </p>
                    <div class="footer-achievements">
                        <div class="achievement">
                            <div class="achievement-icon" style="background: rgba(255, 255, 255, 0.2); color: white;">👥</div>
                            <div class="achievement-text">
                                <span class="achievement-number" style="color: #66BB6A;">1359+</span>
                                <span class="achievement-label" style="color: rgba(255, 255, 255, 0.8);">Members</span>
                            </div>
                        </div>
                        <div class="achievement">
                            <div class="achievement-icon" style="background: rgba(255, 255, 255, 0.2); color: white;">🏙️</div>
                            <div class="achievement-text">
                                <span class="achievement-number" style="color: #66BB6A;">5</span>
                                <span class="achievement-label" style="color: rgba(255, 255, 255, 0.8);">Municipalities</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-column footer-links">
                    <h4 class="footer-title" style="color: white;">Quick Links</h4>
                    <ul class="footer-menu">
                        <li>
                            <a href="{{route('mtawada.home')}}" class="footer-link" style="color: rgba(255, 255, 255, 0.8);">
                                <span class="link-icon" style="color: #66BB6A;">→</span>
                                <span>Home </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('mtawada.about')}}" class="footer-link" style="color: rgba(255, 255, 255, 0.8);">
                                <span class="link-icon" style="color: #66BB6A;">→</span>
                                <span>About Us</span>
                            </a>
                        </li>


                        <li>
                            <a href="{{route('mtawada.impact')}}" class="footer-link" style="color: rgba(255, 255, 255, 0.8);">
                                <span class="link-icon" style="color: #66BB6A;">→</span>
                                <span>Our Impact</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('mtawada.gallery')}}" class="footer-link" style="color: rgba(255, 255, 255, 0.8);">
                                <span class="link-icon" style="color: #66BB6A;">→</span>
                                <span>Photo Gallery</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('mtawada.contact')}}" class="footer-link" style="color: rgba(255, 255, 255, 0.8);">
                                <span class="link-icon" style="color: #66BB6A;">→</span>
                                <span>Contact Us</span>
                            </a>
                        </li>

                    </ul>
                </div>

                <!-- Programs -->
                <div class="footer-column footer-programs">
                    <h4 class="footer-title" style="color: white;">Our Programs</h4>
                    <ul class="program-list">
                        <li>
                                <div class="program-icon" style="background: rgba(255, 255, 255, 0.2); color: white;">🔍</div>
                                <div class="program-info">
                                    <span class="program-name" style="color: white;">Research</span>
                                    <span class="program-desc" style="color: rgba(255, 255, 255, 0.8);">Evidence-based advocacy</span>
                                </div>
                        </li>
                        <li>
                                <div class="program-icon" style="background: rgba(255, 255, 255, 0.2); color: white;">📚</div>
                                <div class="program-info">
                                    <span class="program-name" style="color: white;">Resource Centre</span>
                                    <span class="program-desc" style="color: rgba(255, 255, 255, 0.8);">Knowledge hub</span>
                                </div>
                        </li>
                        <li>
                                <div class="program-icon" style="background: rgba(255, 255, 255, 0.2); color: white;">📢</div>
                                <div class="program-info">
                                    <span class="program-name" style="color: white;">News & Events</span>
                                    <span class="program-desc" style="color: rgba(255, 255, 255, 0.8);">Community engagement</span>
                                </div>
                        </li>
                    </ul>
                </div>

                <!-- Contact & Newsletter -->
                <div class="footer-column footer-contact">
                    <h4 class="footer-title" style="color: white;">Get In Touch</h4>
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="contact-icon" style="background: rgba(255, 255, 255, 0.2); color: white;">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-details">
                                <span class="contact-label" style="color: rgba(255, 255, 255, 0.8);">Address</span>
                                <span class="contact-value" style="color: white;">P.O. Box 3560 NHC, Ubungo-Dar es Salaam</span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon" style="background: rgba(255, 255, 255, 0.2); color: white;">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-details">
                                <span class="contact-label" style="color: rgba(255, 255, 255, 0.8);">Phone</span>
                                <a href="tel:+255793543206" class="contact-value" style="color: white;">+255 793543206</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon" style="background: rgba(255, 255, 255, 0.2); color: white;">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <span class="contact-label" style="color: rgba(255, 255, 255, 0.8);">Email</span>
                                <a href="mailto:info@mtawada.or.tz" class="contact-value" style="color: white;">info@mtawada.or.tz</a>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="social-section">
                        <h5 class="social-title" style="color: white;">Follow Our Journey</h5>
                        <div class="social-links">
                            <a href="https://www.facebook.com/share/1AeuNwV5Sw/" class="social-link facebook" aria-label="Facebook" style="background: rgba(255, 255, 255, 0.2); color: white;">
                                <i class="fab fa-facebook-f"></i>
                                <span class="social-tooltip">Facebook</span>
                            </a>
                            <a href="https://x.com/Mtawada_tz" class="social-link x" aria-label="Twitter" style="background: rgba(255, 255, 255, 0.2); color: white;">
                                <i class="fab fa-twitter"></i>
                                <span class="social-tooltip">X</span>
                            </a>
                            <a href="https://www.instagram.com/mtawada_tz?igsh=MTYwaWhjdHQ3ajZuYQ==" class="social-link instagram" aria-label="Instagram" style="background: rgba(255, 255, 255, 0.2); color: white;">
                                <i class="fab fa-instagram"></i>
                                <span class="social-tooltip">Instagram</span>
                            </a>
                            <a href="https://www.youtube.com/@MTAWADA_tz" class="social-link youtube" aria-label="YouTube" style="background: rgba(255, 255, 255, 0.2); color: white;">
                                <i class="fab fa-youtube"></i>
                                <span class="social-tooltip">YouTube</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom" style="background: linear-gradient(to right, #1B5E20, #2E7D32);">
                <div class="footer-bottom-content">
                    <div class="copyright">
                        <p style="color: white;">&copy; 2025 <strong style="color: #66BB6A;">MTAWADA</strong> - Mtandao wa Waokota Taka Rejeshi Dar es Salaam. All rights reserved.</p>
                        <p class="registration" style="color: rgba(255, 255, 255, 0.8);">Registered with the Ministry of Home Affairs of Tanzania under The Societies Act (CAP.337 R.E.2002)</p>
                    </div>

                </div>

                <!-- Back to Top -->
                <button class="back-to-top" aria-label="Back to top" style="background: #66BB6A; color: white;">
                    <i class="fas fa-arrow-up"></i>
                </button>
            </div>
        </div>

        <!-- Animated Background Elements -->
        <div class="footer-bg-elements">
            <div class="bg-element element-1" style="color: rgba(255, 255, 255, 0.05);">♻️</div>
            <div class="bg-element element-2" style="color: rgba(255, 255, 255, 0.05);">👷</div>
            <div class="bg-element element-3" style="color: rgba(255, 255, 255, 0.05);">🌱</div>
            <div class="bg-element element-4" style="color: rgba(255, 255, 255, 0.05);">⚖️</div>
        </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
