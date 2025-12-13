@extends('welcome')

@section('title', 'Home - MTAWADA')

@section('content')
<!-- Scroll Progress Indicator -->
<div class="scroll-progress"></div>

<!-- Hero Carousel -->
<section class="hero">
    <div class="hero-particles"></div>

    <!-- Floating Elements -->
    <div class="floating-element floating-1">♻️</div>
    <div class="floating-element floating-2">👷</div>
    <div class="floating-element floating-3">🏙️</div>

    <div class="carousel">
        <!-- Slides will be loaded via JavaScript -->
        <div class="carousel-slide active">
            <div class="slide-bg"></div>
            <div class="slide-overlay"></div>
            <div class="carousel-content"></div>
        </div>

        <div class="carousel-slide">
            <div class="slide-bg"></div>
            <div class="slide-overlay"></div>
            <div class="carousel-content"></div>
        </div>

        <div class="carousel-slide">
            <div class="slide-bg"></div>
            <div class="slide-overlay"></div>
            <div class="carousel-content"></div>
        </div>

        <div class="carousel-slide">
            <div class="slide-bg"></div>
            <div class="slide-overlay"></div>
            <div class="carousel-content"></div>
        </div>

        <!-- Carousel Navigation -->
        <div class="carousel-nav">
            <button class="carousel-prev"><i class="fas fa-chevron-left"></i></button>
            <button class="carousel-next"><i class="fas fa-chevron-right"></i></button>
        </div>

        <!-- Indicators -->
        <div class="carousel-indicators">
            <div class="indicator active"></div>
            <div class="indicator"></div>
            <div class="indicator"></div>
            <div class="indicator"></div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="scroll-indicator">
            <span>SCROLL DOWN</span>
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>
</section>

<!-- Impact Statistics -->
<section class="parallax-section" style="padding: 120px 0; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Impact So Far</h2>
            <div class="section-divider"></div>
            <p class="section-subtitle">Transforming waste management and empowering waste pickers across Dar es Salaam</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card fade-in">
                <div class="stat-icon">👥</div>
                <div class="stat-number" data-count="1359">0</div>
                <div class="stat-label">Waste Pickers United</div>
            </div>

            <div class="stat-card fade-in">
                <div class="stat-icon">🏙️</div>
                <div class="stat-number" data-count="5">0</div>
                <div class="stat-label">Municipalities Covered</div>
                <div class="stat-trend">Ubungo, Temeke, Kinondoni, Ilala, Kigamboni</div>
            </div>

            <div class="stat-card fade-in">
                <div class="stat-icon">♻️</div>
                <div class="stat-number" data-count="900">0</div>
                <div class="stat-label">Tons of Waste Diverted Monthly</div>
                <div class="stat-trend">From landfills & waterways</div>
            </div>

            <div class="stat-card fade-in">
                <div class="stat-icon">⚖️</div>
                <div class="stat-number" data-count="180">0</div>
                <div class="stat-label">Exploitation Cases Reported</div>
                <div class="stat-trend">And resolved through advocacy</div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="parallax-section" style="padding: 120px 0; position: relative;">
    <div class="parallax-bg" style="background-image: url('/images/Field work.jpg');"></div>
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Purpose</h2>
            <div class="section-divider"></div>
            <p class="section-subtitle">Driven by our mission and guided by our vision</p>
        </div>

        <div class="mission-vision-grid">
            <div class="mission-card fade-in">
                <div class="mission-icon">
                    <i class="fas fa-fist-raised"></i>
                </div>
                <h3>Our Mission</h3>
                <p>"To combat all oppressive systems that hinder the well-being of waste pickers and the entire waste management sector."</p>
            </div>

            <div class="vision-card fade-in">
                <div class="vision-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Our Vision</h3>
                <p>"To be a solid organization in advocating for our interests as Waste Pickers, to forge alliances with other groups regardless of religious, tribal, or political affiliations to claim our rights and requirements for our social, economic and cultural development."</p>
            </div>
        </div>
    </div>
</section>

<!-- What We Do -->
<section style="padding: 120px 0; background: var(--paper-white);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Core Activities</h2>
            <div class="section-divider"></div>
            <p class="section-subtitle">Creating change through direct action and advocacy</p>
        </div>

        <div class="features-grid">
            <div class="feature-card fade-in">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Membership Growth</h3>
                <p>Building our network across all five municipalities of Dar es Salaam to create a united front for waste pickers' rights.</p>
            </div>

            <div class="feature-card fade-in">
                <div class="feature-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3>Rights Protection</h3>
                <p>Fighting against exploitation, distorted weights, unfair payments, and social stigma faced by waste pickers.</p>
            </div>

            <div class="feature-card fade-in">
                <div class="feature-icon">
                    <i class="fas fa-recycle"></i>
                </div>
                <h3>Environmental Advocacy</h3>
                <p>Promoting circular economy and sustainable waste management practices for environmental conservation.</p>
            </div>

            <div class="feature-card fade-in">
                <div class="feature-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Education & Training</h3>
                <p>Providing struggle-based education against exploitation and training for sustainable waste management.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Structure -->
<section class="parallax-section" style="padding: 120px 0; background: linear-gradient(135deg, #1B5E20 0%, #2E7D32 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title" style="color: white;">Grassroots Democracy</h2>
            <div class="section-divider" style="background: linear-gradient(135deg, #66BB6A, #81C784);"></div>
            <p class="section-subtitle" style="color: rgba(255, 255, 255, 0.9);">Three-tier decision making structure from streets to region</p>
        </div>

        <div class="structure-timeline">
            <div class="timeline-step fade-in" style="text-align: center; margin-bottom: 40px;">
                <div style="display: inline-block; background: rgba(255, 255, 255, 0.2); padding: 30px; border-radius: 20px; backdrop-filter: blur(10px);">
                    <div style="font-size: 48px; margin-bottom: 20px;">👥</div>
                    <h3 style="margin-bottom: 15px; color: white;">Street Level Democracy</h3>
                    <p style="color: rgba(255, 255, 255, 0.9);">Direct participation in general assembly as highest decision-making body</p>
                </div>
            </div>

            <div class="timeline-step fade-in" style="text-align: center; margin-bottom: 40px;">
                <div style="display: inline-block; background: rgba(255, 255, 255, 0.2); padding: 30px; border-radius: 20px; backdrop-filter: blur(10px);">
                    <div style="font-size: 48px; margin-bottom: 20px;">🏢</div>
                    <h3 style="margin-bottom: 15px; color: white;">District Representation</h3>
                    <p style="color: rgba(255, 255, 255, 0.9);">Delegates and chairpersons from street levels coordinate district activities</p>
                </div>
            </div>

            <div class="timeline-step fade-in" style="text-align: center;">
                <div style="display: inline-block; background: rgba(255, 255, 255, 0.2); padding: 30px; border-radius: 20px; backdrop-filter: blur(10px);">
                    <div style="font-size: 48px; margin-bottom: 20px;">🗺️</div>
                    <h3 style="margin-bottom: 15px; color: white;">Regional Coordination</h3>
                    <p style="color: rgba(255, 255, 255, 0.9);">Representatives from all five municipalities meet for regional strategy</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section style="padding: 120px 0; background: var(--paper-white);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Guiding Principles</h2>
            <div class="section-divider"></div>
            <p class="section-subtitle">The foundation of everything we do</p>
        </div>

        <div class="values-timeline">
            <div class="value-item">
                <div class="value-letter">A</div>
                <div class="value-content">
                    <h4>Equality & Non-Discrimination</h4>
                    <p>Governed by equality principles for all members in all matters, including leadership and decision-making.</p>
                </div>
            </div>

            <div class="value-item">
                <div class="value-letter">B</div>
                <div class="value-content">
                    <h4>Transformative Advocacy</h4>
                    <p>We believe in our potential to organize and influence advocacy for transformative change, resisting oppressive and exploitative practices.</p>
                </div>
            </div>

            <div class="value-item">
                <div class="value-letter">C</div>
                <div class="value-content">
                    <h4>Environmental Stewardship</h4>
                    <p>We are crucial pillars of the circular economy sector and environmental stewards in Tanzania; we therefore deserve respect and value for our contribution.</p>
                </div>
            </div>

            <div class="value-item">
                <div class="value-letter">D</div>
                <div class="value-content">
                    <h4>Collaboration</h4>
                    <p>We believe in the power of collaboration with various representatives of the public and private sectors to address various environmental issues and challenges.</p>
                </div>
            </div>

            <div class="value-item">
                <div class="value-letter">E</div>
                <div class="value-content">
                    <h4>Unity & Solidarity</h4>
                    <p>We believe in unity and solidarity for all members of MTAWADA, making our community a safe space to address our social, security and economic challenges.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section style="padding: 150px 0; background: linear-gradient(135deg, #1B5E20 0%, #2E7D32 100%); position: relative; overflow: hidden;">
    <div class="floating-element floating-1" style="opacity: 0.2;">🤝</div>
    <div class="floating-element floating-2" style="opacity: 0.2;">♻️</div>

    <div class="container">
        <div class="section-header">
            <h2 class="section-title" style="color: white;">Ready to Make a Difference?</h2>
            <div class="section-divider" style="background: linear-gradient(135deg, #66BB6A, #81C784);"></div>
            <p class="section-subtitle" style="max-width: 600px; color: rgba(255, 255, 255, 0.9);">
                Join over 1359 waste pickers fighting for recognition, rights, and environmental sustainability in Dar es Salaam.
            </p>
        </div>

        <div style="text-align: center; margin-top: 50px;">
            <div class="hero-buttons">
                <a href="{{route('mtawada.contact')}}" class="btn-secondary" style="background: white; color: #1B5E20; border-color: white;">
                    <i class="fas fa-envelope"></i> Contact Us Today
                </a>
            </div>

            <p style="color: white; margin-top: 30px; font-size: 14px;">
                <i class="fas fa-phone"></i> Call us: +255 793543206 |
                <i class="fas fa-envelope"></i> Email: info@mtawada.or.tz
            </p>
        </div>
    </div>
</section>

<style>
    .timeline-step {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease;
    }

    .timeline-step.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .structure-timeline {
        position: relative;
        max-width: 800px;
        margin: 60px auto 0;
    }

    .structure-timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 3px;
        background: rgba(255, 255, 255, 0.3);
        transform: translateX(-50%);
    }

    @media (max-width: 768px) {
        .structure-timeline::before {
            display: none;
        }
    }
</style>

<script>
    // Additional scroll animations for timeline
    document.addEventListener('DOMContentLoaded', function() {
        const timelineSteps = document.querySelectorAll('.timeline-step');

        function checkTimeline() {
            timelineSteps.forEach(step => {
                const stepTop = step.getBoundingClientRect().top;
                if (stepTop < window.innerHeight - 100) {
                    step.classList.add('visible');
                }
            });
        }

        window.addEventListener('scroll', checkTimeline);
        checkTimeline(); // Initial check
    });
</script>
@endsection
