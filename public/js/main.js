// Preloader
document.addEventListener('DOMContentLoaded', function() {
    const preloader = document.querySelector('.preloader');

    // Simulate loading progress
    let progress = 0;
    const progressBar = document.querySelector('.loader-progress');
    const loadingInterval = setInterval(() => {
        progress += 1;
        progressBar.style.width = progress + '%';

        if (progress >= 100) {
            clearInterval(loadingInterval);
            setTimeout(() => {
                preloader.style.opacity = '0';
                preloader.style.visibility = 'hidden';
                document.body.style.overflow = 'auto';
            }, 500);
        }
    }, 20);

    // Mobile Navigation Toggle
    const mobileToggle = document.querySelector('.mobile-toggle');
    const navList = document.querySelector('.nav-list');
    const dropdowns = document.querySelectorAll('.dropdown');

    if (mobileToggle) {
        mobileToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            navList.classList.toggle('active');
            this.innerHTML = navList.classList.contains('active') ?
                '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });
    }

    // Dropdown toggle on mobile
    dropdowns.forEach(dropdown => {
        const link = dropdown.querySelector('.nav-link');
        link.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                dropdown.classList.toggle('active');
            }
        });
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.nav-menu') && navList.classList.contains('active')) {
            navList.classList.remove('active');
            mobileToggle.innerHTML = '<i class="fas fa-bars"></i>';
            dropdowns.forEach(dropdown => dropdown.classList.remove('active'));
        }
    });

    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');
    let lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        // Hide/show navbar on scroll
        if (scrollTop > lastScrollTop && scrollTop > 100) {
            navbar.classList.add('hidden');
        } else {
            navbar.classList.remove('hidden');
        }

        // Add scrolled class for background
        if (scrollTop > 50) {
            navbar.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.1)';
        } else {
            navbar.style.boxShadow = 'none';
        }

        lastScrollTop = scrollTop;

        // Update scroll progress
        updateScrollProgress();

        // Trigger animations on scroll
        animateOnScroll();
    });

    // Scroll progress indicator
    function updateScrollProgress() {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        document.querySelector('.scroll-progress').style.width = scrolled + '%';
    }

    // Scroll animations
    function animateOnScroll() {
        const elements = document.querySelectorAll('.fade-in, .value-item, .feature-card, .stat-card');

        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementTop < window.innerHeight - elementVisible) {
                element.classList.add('visible');
            }
        });
    }

    // Initialize scroll animations
    animateOnScroll();

    // Create floating particles in hero
    function createParticles() {
        const hero = document.querySelector('.hero-particles');
        if (!hero) return;

        for (let i = 0; i < 20; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';

            // Random properties
            const size = Math.random() * 10 + 5;
            const posX = Math.random() * 100;
            const posY = Math.random() * 100;
            const duration = Math.random() * 20 + 10;
            const delay = Math.random() * 5;

            particle.style.width = `${size}px`;
            particle.style.height = `${size}px`;
            particle.style.left = `${posX}%`;
            particle.style.top = `${posY}%`;
            particle.style.animationDuration = `${duration}s`;
            particle.style.animationDelay = `${delay}s`;
            particle.style.backgroundColor = `rgba(${Math.random() * 100}, ${Math.random() * 100 + 100}, ${Math.random() * 100}, 0.1)`;

            hero.appendChild(particle);
        }
    }

    // Create particles
    createParticles();

    // Carousel functionality
    const carouselSlides = document.querySelectorAll('.carousel-slide');
    const indicators = document.querySelectorAll('.indicator');
    const prevBtn = document.querySelector('.carousel-prev');
    const nextBtn = document.querySelector('.carousel-next');
    let currentSlide = 0;
    let slideInterval;

    // Labor & Waste Picking themed carousel data
    const carouselData = [
        {
            title: "United for <span class='highlight'>Waste Picker Rights</span>",
            description: "MTAWADA unites waste pickers across Dar es Salaam to fight for recognition, fair treatment, and dignified livelihoods in the waste management sector.",
            image: "Speaking 3.jpg",
            icon: "👥",
            button1: {text: "Join Our Movement", icon: "fas fa-handshake", link: "/mtawada/contact"},
            button2: {text: "Learn About Rights", icon: "fas fa-gavel", link: "/mtawada/about"}
        },
        {
            title: "Environmental <span class='highlight'>Stewardship</span> in Action",
            description: "We prevent thousands of tons of waste from polluting our environment while promoting circular economy practices for sustainable development.",
            image: "Field work.jpg",
            icon: "♻️",
            button1: {text: "Our Environmental Impact", icon: "fas fa-leaf", link: "/mtawada/impact"},
            button2: {text: "Partner With Us", icon: "fas fa-hands-helping", link: "/mtawada/contact"}
        },
        {
            title: "Combatting <span class='highlight'>Exploitation</span> & Oppression",
            description: "Fighting against distorted weights, unfair payments, beatings, and social stigma faced by waste pickers in their daily work.",
            image: "Education2.jpg",
            icon: "⚖️",
            button1: {text: "Report Exploitation", icon: "fas fa-exclamation-triangle", link: "/mtawada/contact"},
            button2: {text: "Know Your Rights", icon: "fas fa-book", link: "/mtawada/about"},
        },
        {
            title: "Building <span class='highlight'>Community</span> Power",
            description: "From street-level democracy to regional representation, we're creating a powerful network for collective bargaining and support.",
            image: "Outside gathering.jpg",
            icon: "🏘️",
            button1: {text: "News", icon: "fas fa-sitemap", link: "/mtawada/news"},
            button2: {text: "Our Gallery", icon: "fas fa-users", link: "/mtawada/gallery"}
        }
    ];

    // Initialize carousel
    function initializeCarousel() {
        carouselSlides.forEach((slide, index) => {
            if (carouselData[index]) {
                const bgDiv = slide.querySelector('.slide-bg');
                bgDiv.innerHTML = `<img src="/images/${carouselData[index].image}" alt="${carouselData[index].title.replace(/<[^>]*>/g, '')}">`;

                const contentDiv = slide.querySelector('.carousel-content');
                contentDiv.innerHTML = `
                    <div style="display: flex; align-items: center; justify-content: center; gap: 15px; margin-bottom: 20px;">
                        <span style="font-size: 40px;">${carouselData[index].icon}</span>
                        <h1>${carouselData[index].title}</h1>
                    </div>
                    <p>${carouselData[index].description}</p>
                    <div class="hero-buttons">
                        <a href="${carouselData[index].button1.link}" class="btn-primary">
                            <i class="${carouselData[index].button1.icon}"></i> ${carouselData[index].button1.text}
                        </a>
                        <a href="${carouselData[index].button2.link}" class="btn-secondary">
                            <i class="${carouselData[index].button2.icon}"></i> ${carouselData[index].button2.text}
                        </a>
                    </div>
                `;
            }
        });
    }

    // Show slide function
    function showSlide(n) {
        carouselSlides.forEach(slide => slide.classList.remove('active'));
        indicators.forEach(indicator => indicator.classList.remove('active'));

        currentSlide = (n + carouselSlides.length) % carouselSlides.length;

        carouselSlides[currentSlide].classList.add('active');
        indicators[currentSlide].classList.add('active');
    }

    // Next slide
    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    // Previous slide
    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    // Initialize carousel
    if (carouselSlides.length > 0) {
        initializeCarousel();

        // Set up event listeners
        if (prevBtn) prevBtn.addEventListener('click', prevSlide);
        if (nextBtn) nextBtn.addEventListener('click', nextSlide);

        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => showSlide(index));
        });

        // Auto advance slides
        function startCarousel() {
            slideInterval = setInterval(nextSlide, 6000);
        }

        function stopCarousel() {
            clearInterval(slideInterval);
        }

        // Start auto carousel
        startCarousel();

        // Pause on hover
        const carousel = document.querySelector('.carousel');
        carousel.addEventListener('mouseenter', stopCarousel);
        carousel.addEventListener('mouseleave', startCarousel);

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') prevSlide();
            if (e.key === 'ArrowRight') nextSlide();
        });
    }

    // Animated counters with realistic statistics
    const statNumbers = document.querySelectorAll('.stat-number');

    const animateCounter = (element) => {
        const target = parseInt(element.getAttribute('data-count'));
        const duration = 2000;
        const startTime = Date.now();

        function updateCounter() {
            const currentTime = Date.now();
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);

            // Easing function for smooth animation
            const easeOutQuart = 1 - Math.pow(1 - progress, 4);
            const currentValue = Math.floor(easeOutQuart * target);

            element.textContent = currentValue.toLocaleString();

            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target.toLocaleString();
            }
        }

        requestAnimationFrame(updateCounter);
    };

    // Intersection Observer for counter animation
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5, rootMargin: '0px 0px -100px 0px' });

    statNumbers.forEach(number => {
        observer.observe(number);
    });

    // Parallax effect on scroll
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.parallax-bg');

        parallaxElements.forEach(element => {
            const speed = 0.5;
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });

    // Form validation for contact page
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const name = this.querySelector('#name').value.trim();
            const email = this.querySelector('#email').value.trim();
            const message = this.querySelector('#message').value.trim();

            if (!name || !email || !message) {
                showNotification('Please fill in all required fields.', 'error');
                return;
            }

            if (!isValidEmail(email)) {
                showNotification('Please enter a valid email address.', 'error');
                return;
            }

            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;

            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;

            // Simulate API call
            setTimeout(() => {
                showNotification('Thank you for your message! We will get back to you soon.', 'success');
                this.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 1500);
        });
    }

    // Notification system
    function showNotification(message, type) {
        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        notification.innerHTML = `
            <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'}"></i>
            <span>${message}</span>
            <button class="notification-close"><i class="fas fa-times"></i></button>
        `;

        notification.style.cssText = `
            position: fixed;
            top: 100px;
            right: 20px;
            background: ${type === 'success' ? 'var(--labor-green)' : 'var(--dignity-orange)'};
            color: white;
            padding: 15px 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 9999;
            transform: translateX(100%);
            opacity: 0;
            transition: all 0.3s ease;
        `;

        document.body.appendChild(notification);

        // Animate in
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
            notification.style.opacity = '1';
        }, 100);

        // Close button functionality
        const closeBtn = notification.querySelector('.notification-close');
        closeBtn.addEventListener('click', () => {
            notification.style.transform = 'translateX(100%)';
            notification.style.opacity = '0';
            setTimeout(() => notification.remove(), 300);
        });

        // Auto remove after 5 seconds
        setTimeout(() => {
            if (notification.parentNode) {
                notification.style.transform = 'translateX(100%)';
                notification.style.opacity = '0';
                setTimeout(() => notification.remove(), 300);
            }
        }, 5000);
    }

    // Helper functions
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Initialize floating elements
    const floatingElements = document.querySelectorAll('.floating-element');
    floatingElements.forEach(element => {
        const delay = Math.random() * 5;
        element.style.animationDelay = `${delay}s`;
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
});

// Footer Back to Top Button
document.addEventListener('DOMContentLoaded', function() {
    const backToTopButton = document.querySelector('.back-to-top');

    // Show/hide back to top button
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            backToTopButton.classList.add('visible');
        } else {
            backToTopButton.classList.remove('visible');
        }
    });

    // Smooth scroll to top
    if (backToTopButton) {
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // Animate elements when they enter viewport
    const animateFooterElements = () => {
        const elements = document.querySelectorAll('.footer-column, .achievement, .program-item');

        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementTop < window.innerHeight - elementVisible) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    };

    // Set initial styles for animation
    const footerElements = document.querySelectorAll('.footer-column, .achievement, .program-item');
    footerElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    });

    // Trigger animation on scroll
    window.addEventListener('scroll', animateFooterElements);
    animateFooterElements(); // Initial check

    // Social link hover effects
    const socialLinks = document.querySelectorAll('.social-link');
    socialLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px) scale(1.1)';
        });

        link.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Program item hover effects
    const programItems = document.querySelectorAll('.program-item');
    programItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateX(5px)';
        });

        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateX(0)';
        });
    });

    // Achievement cards hover effects
    const achievements = document.querySelectorAll('.achievement');
    achievements.forEach(achievement => {
        achievement.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px)';
        });

        achievement.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
