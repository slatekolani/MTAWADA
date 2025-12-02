@extends('welcome')

@section('title', 'News & Updates - MTAWADA')

@section('content')
<!-- Hero Section -->
<section class="news-hero" style="margin-top: 90px; position: relative; overflow: hidden; background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%);">
    <div class="hero-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        <div class="bg-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(46, 125, 50, 0.9), rgba(76, 175, 80, 0.8)); z-index: 1;"></div>
        <div class="bg-image" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('/images/news-hero.jpg'); background-size: cover; background-position: center; z-index: 0;"></div>

        <!-- Animated news elements -->
        <div class="floating-news" style="position: absolute; top: 20%; left: 10%; font-size: 50px; opacity: 0.2; color: #FFC107; animation: float 15s infinite ease-in-out;">📰</div>
        <div class="floating-megaphone" style="position: absolute; bottom: 30%; right: 15%; font-size: 60px; opacity: 0.2; color: #FFC107; animation: float 20s infinite ease-in-out reverse;">📢</div>
        <div class="floating-camera" style="position: absolute; top: 40%; right: 20%; font-size: 45px; opacity: 0.2; color: #FFC107; animation: float 18s infinite ease-in-out;">📸</div>
    </div>

    <div class="container" style="position: relative; z-index: 3; min-height: 500px; display: flex; align-items: center;">
        <div class="hero-content" style="max-width: 800px; padding: 100px 0;">
            <div style="display: inline-block; background: rgba(255, 193, 7, 0.2); color: #FFC107; padding: 10px 25px; border-radius: 25px; font-size: 14px; font-weight: 600; margin-bottom: 25px;">
                <i class="fas fa-newspaper"></i> STAY INFORMED
            </div>

            <h1 style="font-size: 56px; font-weight: 800; color: white; margin-bottom: 20px; line-height: 1.2; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);">
                News & <span style="color: #FFC107;">Updates</span>
            </h1>

            <p style="font-size: 24px; color: rgba(255, 255, 255, 0.9); margin-bottom: 30px; line-height: 1.6;">
                Latest stories, updates, and media coverage from the MTAWADA community
            </p>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator" style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); color: white; z-index: 3; text-align: center;">
        <div style="font-size: 14px; letter-spacing: 2px; margin-bottom: 10px; opacity: 0.8;">EXPLORE NEWS</div>
        <i class="fas fa-chevron-down" style="font-size: 20px; animation: bounce 2s infinite;"></i>
    </div>
</section>

<!-- Featured News -->
<section class="featured-news" style="padding: 100px 0; background: white;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #2E7D32;">
                Featured Stories
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #2E7D32, #4CAF50); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Spotlight on the most important news and stories from our community
            </p>
        </div>

        <!-- Main Featured Article -->
        {{-- <div class="main-featured" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 60px; background: #F8FAFC; border-radius: 20px; overflow: hidden; box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);">
            <div class="featured-image" style="position: relative; min-height: 400px;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%);">
                    <!-- This would be an image in real implementation -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: white; font-size: 100px; opacity: 0.3;">
                        <i class="fas fa-newspaper"></i>
                    </div>
                </div>
                <div style="position: absolute; top: 30px; left: 30px; background: #FFC107; color: #333; padding: 8px 20px; border-radius: 20px; font-size: 12px; font-weight: 700; letter-spacing: 1px;">
                    FEATURED STORY
                </div>
            </div>

            <div class="featured-content" style="padding: 50px 40px 50px 20px;">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                    <div style="color: #2E7D32; font-weight: 700; font-size: 14px;">
                        <i class="fas fa-calendar-alt"></i> March 15, 2024
                    </div>
                    <div style="background: rgba(46, 125, 50, 0.1); color: #2E7D32; padding: 4px 12px; border-radius: 15px; font-size: 12px; font-weight: 600;">
                        ADVOCACY
                    </div>
                </div>

                <h2 style="color: #2E7D32; font-size: 32px; margin-bottom: 20px; line-height: 1.3;">
                    MTAWADA Wins National Environmental Award for Community-Led Waste Management
                </h2>

                <p style="color: #666666; line-height: 1.7; margin-bottom: 30px; font-size: 16px;">
                    Dar es Salaam – MTAWADA has been recognized with the prestigious Tanzania Environmental Excellence Award for its innovative community-led approach to waste management and circular economy solutions...
                </p>

                <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 40px;">
                    <a href="/news/mtawada-wins-national-award" style="display: inline-flex; align-items: center; gap: 10px; background: #2E7D32; color: white; padding: 12px 30px; border-radius: 30px; text-decoration: none; font-weight: 600; transition: all 0.3s;">
                        Read Full Story <i class="fas fa-arrow-right"></i>
                    </a>
                    <div style="color: #666666; font-size: 14px;">
                        <i class="fas fa-clock"></i> 5 min read
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Secondary Featured Articles -->
        {{-- <div class="secondary-featured" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Article 1 -->
            <div class="featured-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: all 0.3s ease; border-top: 4px solid #2E7D32;">
                <div class="article-image" style="height: 200px; background: linear-gradient(135deg, #4CAF50 0%, #81C784 100%); position: relative;">
                    <div style="position: absolute; top: 20px; left: 20px; background: #FFC107; color: #333; padding: 5px 15px; border-radius: 15px; font-size: 11px; font-weight: 700;">
                        NEW PARTNERSHIP
                    </div>
                </div>

                <div class="article-content" style="padding: 25px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                        <div style="color: #666666; font-size: 12px;">
                            <i class="fas fa-calendar-alt"></i> March 10, 2024
                        </div>
                        <div style="background: rgba(76, 175, 80, 0.1); color: #4CAF50; padding: 3px 10px; border-radius: 12px; font-size: 11px; font-weight: 600;">
                            PARTNERSHIP
                        </div>
                    </div>

                    <h3 style="color: #2E7D32; margin-bottom: 15px; font-size: 18px; line-height: 1.4;">
                        Collaboration with Dar es Salaam City Council Launches New Recycling Initiative
                    </h3>

                    <p style="color: #666666; font-size: 14px; line-height: 1.6; margin-bottom: 20px;">
                        MTAWADA partners with city authorities to launch comprehensive recycling program across 8 municipalities...
                    </p>

                    <a href="/news/city-council-partnership" style="color: #2E7D32; text-decoration: none; font-weight: 600; font-size: 14px; display: inline-flex; align-items: center; gap: 8px;">
                        Read More <i class="fas fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="featured-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: all 0.3s ease; border-top: 4px solid #FF9800;">
                <div class="article-image" style="height: 200px; background: linear-gradient(135deg, #FF9800 0%, #FFB74D 100%); position: relative;">
                    <div style="position: absolute; top: 20px; left: 20px; background: white; color: #FF9800; padding: 5px 15px; border-radius: 15px; font-size: 11px; font-weight: 700;">
                        TRAINING PROGRAM
                    </div>
                </div>

                <div class="article-content" style="padding: 25px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                        <div style="color: #666666; font-size: 12px;">
                            <i class="fas fa-calendar-alt"></i> March 5, 2024
                        </div>
                        <div style="background: rgba(255, 152, 0, 0.1); color: #FF9800; padding: 3px 10px; border-radius: 12px; font-size: 11px; font-weight: 600;">
                            CAPACITY BUILDING
                        </div>
                    </div>

                    <h3 style="color: #2E7D32; margin-bottom: 15px; font-size: 18px; line-height: 1.4;">
                        New Vocational Training Program Empowers 150 Waste Pickers with Digital Skills
                    </h3>

                    <p style="color: #666666; font-size: 14px; line-height: 1.6; margin-bottom: 20px;">
                        MTAWADA launches innovative digital literacy program to enhance waste pickers' business and advocacy capabilities...
                    </p>

                    <a href="/news/digital-skills-training" style="color: #2E7D32; text-decoration: none; font-weight: 600; font-size: 14px; display: inline-flex; align-items: center; gap: 8px;">
                        Read More <i class="fas fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="featured-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: all 0.3s ease; border-top: 4px solid #2196F3;">
                <div class="article-image" style="height: 200px; background: linear-gradient(135deg, #2196F3 0%, #64B5F6 100%); position: relative;">
                    <div style="position: absolute; top: 20px; left: 20px; background: white; color: #2196F3; padding: 5px 15px; border-radius: 15px; font-size: 11px; font-weight: 700;">
                        RESEARCH
                    </div>
                </div>

                <div class="article-content" style="padding: 25px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                        <div style="color: #666666; font-size: 12px;">
                            <i class="fas fa-calendar-alt"></i> February 28, 2024
                        </div>
                        <div style="background: rgba(33, 150, 243, 0.1); color: #2196F3; padding: 3px 10px; border-radius: 12px; font-size: 11px; font-weight: 600;">
                            RESEARCH PUBLICATION
                        </div>
                    </div>

                    <h3 style="color: #2E7D32; margin-bottom: 15px; font-size: 18px; line-height: 1.4;">
                        New Study Reveals Waste Pickers Contribute $2M Annually to Dar es Salaam Economy
                    </h3>

                    <p style="color: #666666; font-size: 14px; line-height: 1.6; margin-bottom: 20px;">
                        Groundbreaking research highlights significant economic contributions of informal waste workers to urban sustainability...
                    </p>

                    <a href="/news/economic-impact-study" style="color: #2E7D32; text-decoration: none; font-weight: 600; font-size: 14px; display: inline-flex; align-items: center; gap: 8px;">
                        Read More <i class="fas fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>
            </div>
        </div> --}}
    </div>
</section>

<style>
    /* Animations */
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(5deg); }
    }

    @keyframes bounce {
        0%, 100% { transform: translateX(-50%) translateY(0); }
        50% { transform: translateX(-50%) translateY(-10px); }
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

    /* Hero Animation */
    .news-hero {
        animation: fadeInUp 1s ease-out;
    }

    /* Card Hover Effects */
    .featured-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1) !important;
    }

    .blog-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
    }

    .media-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
        border-color: #2E7D32 !important;
    }

    .archive-year:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
    }

    /* Button Hover Effects */
    .view-all-btn:hover {
        background: #2E7D32 !important;
        color: white !important;
        transform: translateY(-3px);
    }

    a[href*="/news/"], a[href*="/blog/"] {
        transition: all 0.3s;
    }

    a[href*="/news/"]:hover, a[href*="/blog/"]:hover {
        color: #FFC107 !important;
        gap: 12px !important;
    }

    .newsletter-form input:focus {
        border-color: #2E7D32 !important;
        box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.1);
    }

    .newsletter-form button:hover {
        background: #1B5E20 !important;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(46, 125, 50, 0.3);
    }

    /* Filter Button Active State */
    .filter-btn.active {
        box-shadow: 0 5px 15px rgba(46, 125, 50, 0.3);
    }

    .filter-btn:not(.active):hover {
        background: #f5f5f5 !important;
        transform: translateY(-2px);
    }

    /* Main Featured Article Hover */
    .main-featured:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15) !important;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .main-featured {
            grid-template-columns: 1fr !important;
        }

        .featured-image {
            min-height: 300px !important;
        }
    }

    @media (max-width: 992px) {
        .news-hero h1 {
            font-size: 42px !important;
        }

        .news-hero p {
            font-size: 20px !important;
        }

        .secondary-featured {
            grid-template-columns: 1fr !important;
        }

        .blog-grid {
            grid-template-columns: 1fr !important;
        }

        .media-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        .archives-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        .section-header h2 {
            font-size: 36px !important;
        }
    }

    @media (max-width: 768px) {
        .news-hero h1 {
            font-size: 36px !important;
        }

        .news-hero p {
            font-size: 18px !important;
        }

        .hero-stats {
            justify-content: center;
            gap: 20px !important;
        }

        .stat {
            padding: 15px !important;
            min-width: 150px;
        }

        .media-grid {
            grid-template-columns: 1fr !important;
        }

        .archives-grid {
            grid-template-columns: 1fr !important;
        }

        .blog-filters {
            gap: 10px !important;
        }

        .filter-btn {
            padding: 8px 20px !important;
            font-size: 14px;
        }

        .newsletter-form {
            flex-direction: column;
        }

        .newsletter-form input,
        .newsletter-form button {
            width: 100%;
            min-width: auto !important;
        }

        .newsletter-content {
            padding: 40px 20px !important;
        }

        .featured-content {
            padding: 30px 20px !important;
        }
    }

    @media (max-width: 576px) {
        section {
            padding: 60px 0 !important;
        }

        .news-hero h1 {
            font-size: 28px !important;
        }

        .section-header h2 {
            font-size: 32px !important;
        }

        .floating-news,
        .floating-megaphone,
        .floating-camera {
            display: none !important;
        }

        .main-featured h2 {
            font-size: 24px !important;
        }

        .featured-card h3,
        .blog-card h3 {
            font-size: 16px !important;
        }
    }

    /* Print Styles */
    @media print {
        .news-hero {
            background: white !important;
            color: black !important;
            margin-top: 0 !important;
        }

        .hero-bg {
            display: none !important;
        }

        .scroll-indicator {
            display: none !important;
        }

        .newsletter-form,
        .blog-filters {
            display: none !important;
        }

        .floating-news,
        .floating-megaphone,
        .floating-camera {
            display: none !important;
        }

        .featured-card,
        .blog-card,
        .media-card {
            break-inside: avoid;
            page-break-inside: avoid;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Filter functionality for blog posts
        const filterButtons = document.querySelectorAll('.filter-btn');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));

                // Add active class to clicked button
                this.classList.add('active');

                // Get filter value
                const filterValue = this.textContent.trim();

                // Filter blog posts (this would be connected to actual data in a real implementation)
                console.log(`Filtering by: ${filterValue}`);
                // Implement actual filtering logic here
            });
        });

        // Newsletter form submission
        const newsletterForm = document.querySelector('.newsletter-form');
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const email = this.querySelector('input[type="email"]').value;

                if (email) {
                    // In a real implementation, you would send this to your server
                    alert(`Thank you for subscribing with: ${email}`);
                    this.reset();
                }
            });
        }

        // Add hover effects to cards
        const cards = document.querySelectorAll('.featured-card, .blog-card, .media-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

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
    });
</script>

@endsection
