@extends('welcome')

@section('title', 'Gallery - MTAWADA')

@section('content')

<section class="gallery-hero">
    <div class="hero-bg">
        <div class="bg-overlay"></div>
        <div class="bg-image"></div>

        <!-- Decorative Floating Elements -->
        <div class="floating-icon camera">📸</div>
        <div class="floating-icon images">🖼️</div>
        <div class="floating-icon video">🎥</div>
    </div>

    <div class="container hero-container">
        <div class="hero-content">
            <div class="hero-tag">
                <i class="fas fa-images"></i> VISUAL STORIES
            </div>

            <h1>
                Our <span>Visual</span> Journey
            </h1>

            <p>
                Capturing moments of transformation, community,
                and environmental impact
            </p>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator">
        <div>EXPLORE GALLERY</div>
        <i class="fas fa-chevron-down"></i>
    </div>
</section>



<section class="featured-gallery-section">
    <div class="container">

        <!-- Section Header -->
        <div class="section-header">
            <h2>Featured Gallery</h2>
            <div class="tag">HIGHLIGHTS</div>
            <p>A curated selection of our most impactful moments and stories</p>
        </div>

        <!-- Photo Grid -->
        <div class="photo-grid">

            <!-- Large Photo -->
            <div class="photo-item large">
                <div class="photo-card">
                    <img src="/images/Field work.jpg" alt="Community Clean Up" loading="lazy">
                    <div class="photo-overlay">
                        <div class="photo-content">
                            <i class="fas fa-hands-helping photo-icon"></i>
                            <h3 class="photo-title">Community Clean-Up Day</h3>
                            <p class="photo-desc">Waste pickers and community members working together</p>
                            <span class="photo-label"><i class="fas fa-camera"></i> Featured</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Small Photo 1 -->
            <div class="photo-item">
                <div class="photo-card">
                    <img src="/images/Scripting.jpg" alt="Sorting Center" loading="lazy">
                    <div class="photo-overlay">
                        <div class="photo-content">
                            <i class="fas fa-recycle photo-icon"></i>
                            <h4 class="photo-title">Field Work</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Small Photo 2 -->
            <div class="photo-item">
                <div class="photo-card">
                    <img src="/images/Speaking4.jpg" alt="Women's Cooperative" loading="lazy">
                    <div class="photo-overlay">
                        <div class="photo-content">
                            <i class="fas fa-users photo-icon"></i>
                            <h4 class="photo-title">Women's Cooperative</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Small Photo 3 -->
            <div class="photo-item">
                <div class="photo-card">
                    <img src="/images/Outside gathering.jpg" alt="Training Session" loading="lazy">
                    <div class="photo-overlay">
                        <div class="photo-content">
                            <i class="fas fa-graduation-cap photo-icon"></i>
                            <h4 class="photo-title">Training Session</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Small Photo 4 -->
            <div class="photo-item">
                <div class="photo-card">
                    <img src="/images/Speaking 3.jpg" alt="Meeting Discussion" loading="lazy">
                    <div class="photo-overlay">
                        <div class="photo-content">
                            <i class="fas fa-award photo-icon"></i>
                            <h4 class="photo-title">Meeting Discussion</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<style>


.gallery-hero {
    margin-top: 90px;
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #2E7D32, #4CAF50);
    animation: fadeInUp 1s ease-out;
    min-height: 500px;
}

.hero-bg {
    position: absolute;
    inset: 0;
}

.bg-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(rgba(46,125,50,0.9), rgba(76,175,80,0.8));
    z-index: 1;
}

.bg-image {
    position: absolute;
    inset: 0;
    background-image: url('/images/gallery-hero.jpg');
    background-size: cover;
    background-position: center;
    z-index: 0;
}

.floating-icon {
    position: absolute;
    font-size: 50px;
    color: #FFC107;
    opacity: 0.2;
    animation: float 15s infinite ease-in-out;
    z-index: 2;
}

.floating-icon.camera { top: 20%; left: 10%; }
.floating-icon.images { bottom: 30%; right: 15%; animation-duration: 20s; }
.floating-icon.video { top: 40%; right: 20%; animation-duration: 18s; }

.hero-container {
    position: relative;
    z-index: 3;
    display: flex;
    align-items: center;
    padding: 100px 0;
}

.hero-content {
    max-width: 800px;
}

.hero-content h1 {
    font-size: 56px;
    font-weight: 800;
    color: white;
    line-height: 1.2;
    margin-bottom: 20px;
    text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
}

.hero-content h1 span {
    color: #FFC107;
}

.hero-tag {
    background: rgba(255,193,7,0.2);
    color: #FFC107;
    padding: 10px 25px;
    border-radius: 25px;
    font-weight: 600;
    display: inline-block;
    margin-bottom: 25px;
    font-size: 14px;
}

.hero-content p {
    font-size: 24px;
    color: rgba(255,255,255,0.9);
    line-height: 1.6;
}

.scroll-indicator {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    color: white;
    z-index: 3;
}

.scroll-indicator div {
    font-size: 14px;
    letter-spacing: 2px;
    margin-bottom: 10px;
    opacity: 0.8;
}

.scroll-indicator i {
    font-size: 20px;
    animation: bounce 2s infinite;
}


.featured-gallery-section {
    padding: 100px 0;
    background: #F8FAFC;
}

.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-header h2 {
    font-size: 42px;
    color: #2E7D32;
    position: relative;
    display: inline-block;
    margin-bottom: 15px;
}

.section-header h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: linear-gradient(to right, #2E7D32, #4CAF50);
    border-radius: 2px;
}

.section-header .tag {
    margin: 25px 0;
    display: inline-block;
    background: #2E7D32;
    color: white;
    padding: 8px 20px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 600;
}

.section-header p {
    max-width: 800px;
    margin: 0 auto;
    font-size: 18px;
    color: #666666;
    line-height: 1.7;
}

/* ------------------------------ */
/* PHOTO GRID - PERFECTLY ALIGNED */
/* ------------------------------ */

.photo-grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-auto-rows: minmax(200px, auto);
    gap: 25px;
    margin-bottom: 40px;
}

/* Large photo spans 2 columns and 2 rows */
.photo-item.large {
    grid-column: span 8;
    grid-row: span 2;
}

/* Small photos - 2 per row on desktop */
.photo-item:not(.large) {
    grid-column: span 4;
    grid-row: span 1;
}

.photo-card {
    position: relative;
    overflow: hidden;
    border-radius: 18px;
    height: 100%;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    background: white;
    aspect-ratio: 1/1;
}

.photo-item.large .photo-card {
    aspect-ratio: 2/1;
}

.photo-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}

/* Overlay with perfect alignment */
.photo-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to top,
        rgba(46, 125, 50, 0.95) 0%,
        rgba(46, 125, 50, 0.7) 30%,
        rgba(46, 125, 50, 0.3) 70%,
        transparent 100%
    );
    opacity: 0;
    transition: opacity 0.4s ease;
    display: flex;
    align-items: flex-end;
    padding: 30px;
}

.photo-card:hover .photo-overlay {
    opacity: 1;
}

.photo-card:hover img {
    transform: scale(1.05);
}

.photo-content {
    width: 100%;
    color: white;
    transform: translateY(20px);
    transition: transform 0.4s ease;
}

.photo-card:hover .photo-content {
    transform: translateY(0);
}

.photo-icon {
    font-size: 40px;
    margin-bottom: 15px;
    display: block;
    color: #FFC107;
}

.photo-title {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 10px;
    line-height: 1.3;
}

.photo-item:not(.large) .photo-title {
    font-size: 18px;
}

.photo-desc {
    font-size: 14px;
    opacity: 0.9;
    line-height: 1.5;
    margin-bottom: 15px;
}

.photo-label {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    padding: 6px 15px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 600;
}

/* Hover Effects */
.photo-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow:
        0 25px 50px rgba(46, 125, 50, 0.2),
        0 0 0 1px rgba(255, 193, 7, 0.2);
}

/* ------------------------------ */
/* VIEW ALL BUTTON */
/* ------------------------------ */

.view-all-wrapper {
    text-align: center;
    margin-top: 50px;
}

.view-all-btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: #2E7D32;
    color: white;
    padding: 16px 40px;
    border-radius: 30px;
    font-size: 18px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.view-all-btn:hover {
    background: #1B5E20;
    transform: translateY(-3px);
    box-shadow: 0 15px 30px rgba(46, 125, 50, 0.3);
    border-color: #FFC107;
}

/* ------------------------------ */
/* ANIMATIONS */
/* ------------------------------ */

@keyframes float {
    0%, 100% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-20px) rotate(5deg);
    }
}

@keyframes bounce {
    0%, 100% {
        transform: translateX(-50%) translateY(0);
    }
    50% {
        transform: translateX(-50%) translateY(-10px);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Photo card entrance animation */
.photo-item {
    animation: fadeInUp 0.6s ease forwards;
    opacity: 0;
}

.photo-item:nth-child(1) { animation-delay: 0.1s; }
.photo-item:nth-child(2) { animation-delay: 0.2s; }
.photo-item:nth-child(3) { animation-delay: 0.3s; }
.photo-item:nth-child(4) { animation-delay: 0.4s; }
.photo-item:nth-child(5) { animation-delay: 0.5s; }

/* ------------------------------ */
/* RESPONSIVE DESIGN */
/* ------------------------------ */

/* Tablet */
@media (max-width: 1024px) {
    .photo-grid {
        grid-template-columns: repeat(6, 1fr);
        gap: 20px;
    }

    .photo-item.large {
        grid-column: span 6;
        grid-row: span 2;
    }

    .photo-item:not(.large) {
        grid-column: span 3;
        grid-row: span 1;
    }

    .photo-item.large .photo-card {
        aspect-ratio: 1/1;
    }

    .hero-content h1 {
        font-size: 42px;
    }

    .hero-content p {
        font-size: 20px;
    }

    .section-header h2 {
        font-size: 36px;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .photo-grid {
        grid-template-columns: repeat(1, 1fr);
        gap: 15px;
    }

    .photo-item.large {
        grid-column: span 1;
        grid-row: span 1;
    }

    .photo-item:not(.large) {
        grid-column: span 1;
        grid-row: span 1;
    }

    .photo-card {
        height: 300px;
    }

    .photo-item.large .photo-card {
        height: 350px;
    }

    .photo-overlay {
        padding: 20px;
    }

    .photo-title {
        font-size: 20px;
    }

    .photo-item:not(.large) .photo-title {
        font-size: 18px;
    }

    .photo-icon {
        font-size: 32px;
    }

    .hero-content h1 {
        font-size: 36px;
    }

    .hero-content p {
        font-size: 18px;
    }

    .section-header h2 {
        font-size: 32px;
    }

    .section-header p {
        font-size: 16px;
        padding: 0 15px;
    }

    .featured-gallery-section {
        padding: 60px 0;
    }

    .hero-container {
        padding: 80px 0;
    }
}

/* Small Mobile */
@media (max-width: 480px) {
    .photo-card {
        height: 250px;
    }

    .photo-item.large .photo-card {
        height: 300px;
    }

    .hero-content h1 {
        font-size: 28px;
    }

    .floating-icon {
        display: none;
    }

    .view-all-btn {
        padding: 14px 30px;
        font-size: 16px;
        width: 100%;
        max-width: 300px;
        justify-content: center;
    }
}

/* Accessibility */
@media (prefers-reduced-motion: reduce) {
    .photo-card,
    .photo-overlay,
    .photo-content,
    .view-all-btn,
    .floating-icon {
        animation: none !important;
        transition: none !important;
    }
}

/* Print Styles */
@media print {
    .photo-overlay {
        opacity: 1 !important;
        background: rgba(0, 0, 0, 0.7) !important;
    }

    .photo-card {
        break-inside: avoid;
        page-break-inside: avoid;
    }

    .floating-icon,
    .scroll-indicator,
    .view-all-btn:hover {
        display: none !important;
    }
}

</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Image lazy loading enhancement
    const images = document.querySelectorAll('img[loading="lazy"]');

    // Preload images for better UX
    images.forEach(img => {
        if (img.complete) {
            img.classList.add('loaded');
        } else {
            img.addEventListener('load', function() {
                this.classList.add('loaded');
            });
        }
    });

    // Add smooth hover effects
    const photoCards = document.querySelectorAll('.photo-card');
    photoCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.zIndex = '10';
        });

        card.addEventListener('mouseleave', function() {
            this.style.zIndex = '1';
        });
    });

    // Touch device optimization
    if ('ontouchstart' in window) {
        document.body.classList.add('touch-device');
        // Add touch feedback
        photoCards.forEach(card => {
            card.addEventListener('touchstart', function() {
                this.classList.add('touched');
            });

            card.addEventListener('touchend', function() {
                setTimeout(() => {
                    this.classList.remove('touched');
                }, 150);
            });
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if(targetId !== '#') {
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // Animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
            }
        });
    }, observerOptions);

    // Observe photo items
    document.querySelectorAll('.photo-item').forEach(item => {
        observer.observe(item);
    });
});

// Add CSS for loaded images
const style = document.createElement('style');
style.textContent = `
    img[loading="lazy"] {
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    img[loading="lazy"].loaded {
        opacity: 1;
    }

    .touch-device .photo-card {
        cursor: pointer;
    }

    .photo-card.touched {
        transform: scale(0.98);
    }

    .photo-item.in-view {
        animation-play-state: running;
    }
`;
document.head.appendChild(style);
</script>

@endsection
