@extends('welcome')

@section('title', 'Our Impact - MTAWADA')

@section('content')
<!-- Hero Section -->
<section class="impact-hero" style="margin-top: 90px; position: relative; overflow: hidden; background: linear-gradient(135deg, #1B5E20 0%, #2E7D32 100%);">
    <div class="hero-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 250%;">
        <div class="bg-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(27, 94, 32, 0.4), rgba(46, 125, 50, 0.3)); z-index: 1;"></div>
        <div class="bg-image" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('/images/Education3.jpg'); background-size: cover; background-position: center; z-index: 0;"></div>

        <!-- Animated impact elements -->
        <div class="floating-heart" style="position: absolute; top: 20%; left: 10%; font-size: 50px; opacity: 0.2; color: #66BB6A; animation: float 15s infinite ease-in-out;">❤️</div>
        <div class="floating-community" style="position: absolute; bottom: 30%; right: 15%; font-size: 60px; opacity: 0.2; color: #66BB6A; animation: float 20s infinite ease-in-out reverse;">👥</div>
        <div class="floating-earth" style="position: absolute; top: 40%; right: 20%; font-size: 45px; opacity: 0.2; color: #66BB6A; animation: float 18s infinite ease-in-out;">🌍</div>
    </div>

    <div class="container" style="position: relative; z-index: 3; min-height: 500px; display: flex; align-items: center;">
        <div class="hero-content" style="max-width: 800px; padding: 100px 0;">
            <div style="display: inline-block; background: rgba(102, 187, 106, 0.2); color: #66BB6A; padding: 10px 25px; border-radius: 25px; font-size: 14px; font-weight: 600; margin-bottom: 25px;">
                <i class="fas fa-chart-line"></i> MEASURABLE CHANGE
            </div>

            <h1 style="font-size: 56px; font-weight: 800; color: white; margin-bottom: 20px; line-height: 1.2; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);">
                Creating <span style="color: #66BB6A;">Lasting</span> Impact
            </h1>

            <p style="font-size: 24px; color: rgba(255, 255, 255, 0.9); margin-bottom: 30px; line-height: 1.6;">
                Transforming lives, strengthening communities, and building a sustainable future for waste pickers in Dar es Salaam
            </p>


        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator" style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); color: white; z-index: 3; text-align: center;">
        <div style="font-size: 14px; letter-spacing: 2px; margin-bottom: 10px; opacity: 0.8;">EXPLORE OUR IMPACT</div>
        <i class="fas fa-chevron-down" style="font-size: 20px; animation: bounce 2s infinite;"></i>
    </div>
</section>

<!-- Current Projects Section -->
<section class="current-projects" style="padding: 100px 0; background: white;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #1B5E20;">
                Current Projects
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #1B5E20, #2E7D32); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Active initiatives driving transformative change for waste pickers across Dar es Salaam
            </p>
        </div>

        <!-- Waste Pickers Union Building Project -->
        <div class="project-highlight" style="background: linear-gradient(135deg, #E8F5E9 0%, #F1F8E9 100%); border-radius: 20px; padding: 50px; margin-bottom: 40px; box-shadow: 0 20px 60px rgba(27, 94, 32, 0.1); border-left: 6px solid #1B5E20;">
            <div style="display: flex; align-items: start; gap: 30px; margin-bottom: 30px;">
                <div style="width: 80px; height: 80px; background: #1B5E20; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 36px; flex-shrink: 0;">
                    <i class="fas fa-fist-raised"></i>
                </div>
                <div style="flex: 1;">
                    <div style="display: inline-block; background: #1B5E20; color: white; padding: 6px 18px; border-radius: 20px; font-size: 12px; font-weight: 700; margin-bottom: 15px; letter-spacing: 1px;">
                        ONGOING PROJECT • 2025-2026
                    </div>
                    <h3 style="color: #1B5E20; font-size: 32px; margin-bottom: 15px; font-weight: 800;">Waste Pickers Union Building Project</h3>
                    <p style="color: #666666; font-size: 16px; line-height: 1.8; margin-bottom: 20px;">
                        Our core objective is to unite waste pickers, fostering unity and solidarity among them while simultaneously amplifying their voices regarding their rights and entitlements within the recycling and waste management sector.
                    </p>
                </div>
            </div>

            <div class="project-details" style="background: white; border-radius: 15px; padding: 40px; margin-bottom: 30px;">
                <h4 style="color: #1B5E20; font-size: 22px; margin-bottom: 25px; font-weight: 700;">
                    <i class="fas fa-bullseye" style="margin-right: 10px; color: #4CAF50;"></i>
                    Project Objectives
                </h4>
                <p style="color: #666666; line-height: 1.8; margin-bottom: 25px;">
                    To advance this struggle, it is imperative that the operational capacity of our leaders and members at the grassroot levels is strengthened. This one-year initiative focuses on capacitating MTAWADA members (both leaders and non-leaders) from all districts of Dar es Salaam to effectively implement both constitutional and organization's day-to-day activities.
                </p>

                <div style="background: #F8FAFC; border-left: 4px solid #2E7D32; padding: 20px; border-radius: 10px; margin-bottom: 25px;">
                    <h5 style="color: #2E7D32; font-size: 18px; margin-bottom: 15px; font-weight: 700;">
                        <i class="fas fa-handshake" style="margin-right: 10px;"></i>
                        Stakeholder Collaboration
                    </h5>
                    <p style="color: #666666; line-height: 1.7; margin: 0;">
                        The project has successfully brought together various key stakeholders, including local government authorities from Dar es Salaam, with the aim to catalyze cooperation between the local governments and MTAWADA, leading to the recognition of waste pickers and the protection of their rights and interests.
                    </p>
                </div>

                <div style="background: #F8FAFC; border-left: 4px solid #4CAF50; padding: 20px; border-radius: 10px;">
                    <h5 style="color: #4CAF50; font-size: 18px; margin-bottom: 15px; font-weight: 700;">
                        <i class="fas fa-certificate" style="margin-right: 10px;"></i>
                        Expected Outcomes
                    </h5>
                    <p style="color: #666666; line-height: 1.7; margin: 0;">
                        This collaboration will significantly support our plan for the formal recognition and regularization of waste pickers' operations in Tanzania, creating a sustainable framework for their integration into the formal waste management sector.
                    </p>
                </div>
            </div>

            <div class="project-footer" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
                <div style="display: flex; align-items: center; gap: 15px;">
                    <div style="width: 60px; height: 60px; background: white; border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);">
                        <i class="fas fa-globe" style="font-size: 28px; color: #1B5E20;"></i>
                    </div>
                    <div>
                        <div style="font-size: 12px; color: #666666; margin-bottom: 3px;">Funded by</div>
                        <div style="font-size: 16px; font-weight: 700; color: #1B5E20;">Partner Für Klima Und Natur Ggmbh</div>
                    </div>
                </div>

                <div style="display: flex; gap: 30px;">
                    <div style="text-align: center;">
                        <div style="font-size: 32px; font-weight: 800; color: #1B5E20; margin-bottom: 5px;">2025-2026</div>
                        <div style="font-size: 14px; color: #666666;">Project Duration</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Overview -->
<section class="impact-overview" style="padding: 100px 0; background: #F8FAFC;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #1B5E20;">
                Our Impact Journey
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #1B5E20, #2E7D32); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                From grassroots beginnings to transformative change, our journey of creating sustainable impact across Dar es Salaam
            </p>
        </div>

        <div class="impact-timeline" style="position: relative; max-width: 1000px; margin: 0 auto;">
            <!-- Timeline line -->
            <div style="position: absolute; left: 50%; top: 0; bottom: 0; width: 4px; background: linear-gradient(to bottom, #1B5E20, #2E7D32, #4CAF50, #66BB6A); transform: translateX(-50%); z-index: 1;"></div>

            <!-- Timeline Item 1 -->
            <div class="timeline-item" style="display: flex; justify-content: flex-end; margin-bottom: 80px; position: relative; z-index: 2;">
                <div style="width: 45%; padding-right: 60px;">
                    <div class="timeline-content" style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 10px 30px rgba(27, 94, 32, 0.1); border-left: 4px solid #1B5E20;">
                        <div class="timeline-date" style="color: #1B5E20; font-weight: 700; margin-bottom: 15px; font-size: 18px;">
                            <i class="fas fa-calendar-alt" style="margin-right: 10px;"></i> 2023 - Foundation
                        </div>
                        <h3 style="color: #1B5E20; margin-bottom: 15px; font-size: 22px;">Building the Movement</h3>
                        <p style="color: #666666; line-height: 1.6; margin-bottom: 20px;">
                            Established with 10 founding waste pickers from Ubungo and Kinondoni Municipalities.
                        </p>
                        <div class="impact-stats" style="display: flex; gap: 20px;">
                            <div style="text-align: center;">
                                <div style="font-size: 20px; font-weight: 700; color: #1B5E20;">10</div>
                                <div style="font-size: 12px; color: #666666;">Founding Members</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-dot" style="position: absolute; left: 50%; transform: translateX(-50%); width: 20px; height: 20px; background: #1B5E20; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px #1B5E20;"></div>
            </div>

            <!-- Timeline Item 2 -->
            <div class="timeline-item" style="display: flex; justify-content: flex-start; margin-bottom: 80px; position: relative; z-index: 2;">
                <div style="width: 45%; padding-left: 60px;">
                    <div class="timeline-content" style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 10px 30px rgba(46, 125, 50, 0.1); border-left: 4px solid #2E7D32;">
                        <div class="timeline-date" style="color: #2E7D32; font-weight: 700; margin-bottom: 15px; font-size: 18px;">
                            <i class="fas fa-calendar-alt" style="margin-right: 10px;"></i> 2024 - Growth Phase
                        </div>
                        <h3 style="color: #2E7D32; margin-bottom: 15px; font-size: 22px;">Expanding Reach</h3>
                        <p style="color: #666666; line-height: 1.6; margin-bottom: 20px;">
                            Expanded to 1359+ waste pickers in 2024 and 2025, constituting all waste pickers across the five districts of Dar es Salaam.
                        </p>
                        <div class="impact-stats" style="display: flex; gap: 20px;">
                            <div style="text-align: center;">
                                <div style="font-size: 20px; font-weight: 700; color: #2E7D32;">1359+</div>
                                <div style="font-size: 12px; color: #666666;">Members</div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="timeline-dot" style="position: absolute; left: 50%; transform: translateX(-50%); width: 20px; height: 20px; background: #2E7D32; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px #2E7D32;"></div>
            </div>

            <!-- Timeline Item 3 -->
            <div class="timeline-item" style="display: flex; justify-content: flex-end; margin-bottom: 80px; position: relative; z-index: 2;">
                <div style="width: 45%; padding-right: 60px;">
                    <div class="timeline-content" style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 10px 30px rgba(76, 175, 80, 0.1); border-left: 4px solid #4CAF50;">
                        <div class="timeline-date" style="color: #4CAF50; font-weight: 700; margin-bottom: 15px; font-size: 18px;">
                            <i class="fas fa-calendar-alt" style="margin-right: 10px;"></i> 2024
                        </div>
                        <h3 style="color: #4CAF50; margin-bottom: 15px; font-size: 22px;">Policy Influence</h3>
                        <p style="color: #666666; line-height: 1.6; margin-bottom: 20px;">
                            One policy initiative (Extended Producer Responsibility) currently under review by the vice president's office.
                        </p>
                        <div class="impact-stats" style="display: flex; gap: 20px;">
                            <div style="text-align: center;">
                                <div style="font-size: 20px; font-weight: 700; color: #4CAF50;">1</div>
                                <div style="font-size: 12px; color: #666666;">Policies Influenced</div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="timeline-dot" style="position: absolute; left: 50%; transform: translateX(-50%); width: 20px; height: 20px; background: #4CAF50; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px #4CAF50;"></div>
            </div>

            <!-- Timeline Item 4 -->
            <div class="timeline-item" style="display: flex; justify-content: flex-start; position: relative; z-index: 2;">
                <div style="width: 45%; padding-left: 60px;">
                    <div class="timeline-content" style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 10px 30px rgba(102, 187, 106, 0.1); border-left: 4px solid #66BB6A;">
                        <div class="timeline-date" style="color: #66BB6A; font-weight: 700; margin-bottom: 15px; font-size: 18px;">
                            <i class="fas fa-calendar-alt" style="margin-right: 10px;"></i> 2024 - Present
                        </div>
                        <h3 style="color: #66BB6A; margin-bottom: 15px; font-size: 22px;">Sustainable Transformation</h3>
                        <p style="color: #666666; line-height: 1.6; margin-bottom: 20px;">
                            Sustainable transformation with 1359+ members across the five districts of Dar es Salaam.
                        </p>
                        <div class="impact-stats" style="display: flex; gap: 20px;">
                            <div style="text-align: center;">
                                <div style="font-size: 20px; font-weight: 700; color: #66BB6A;">1359+</div>
                                <div style="font-size: 12px; color: #666666;">Members</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-dot" style="position: absolute; left: 50%; transform: translateX(-50%); width: 20px; height: 20px; background: #66BB6A; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px #66BB6A;"></div>
            </div>
        </div>
    </div>
</section>


<!-- Impact Metrics -->
<section class="impact-metrics-section" style="padding: 100px 0; background: linear-gradient(135deg, #1B5E20 0%, #2E7D32 100%);">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="color: white; font-size: 42px; margin-bottom: 20px;">By the Numbers</h2>
            <p style="color: rgba(255, 255, 255, 0.9); max-width: 800px; margin: 0 auto; font-size: 18px; line-height: 1.7;">
                Quantifying our impact through measurable outcomes and sustainable change
            </p>
        </div>

        <div class="metrics-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <div class="metric-box" style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); border-radius: 15px; padding: 40px 30px; text-align: center; border: 1px solid rgba(255, 255, 255, 0.2);">
                <div class="metric-icon" style="font-size: 40px; color: #66BB6A; margin-bottom: 20px;">
                    <i class="fas fa-user-friends"></i>
                </div>
                <div class="metric-number" style="font-size: 48px; font-weight: 800; color: white; margin-bottom: 10px;">1359+</div>
                <div class="metric-label" style="color: rgba(255, 255, 255, 0.9); font-size: 16px;">Waste Pickers Empowered</div>
            </div>



            <div class="metric-box" style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); border-radius: 15px; padding: 40px 30px; text-align: center; border: 1px solid rgba(255, 255, 255, 0.2);">
                <div class="metric-icon" style="font-size: 40px; color: #66BB6A; margin-bottom: 20px;">
                    <i class="fas fa-recycle"></i>
                </div>
                <div class="metric-number" style="font-size: 48px; font-weight: 800; color: white; margin-bottom: 10px;">10800+</div>
                <div class="metric-label" style="color: rgba(255, 255, 255, 0.9); font-size: 16px;">Tons Recycled Annually</div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="impact-cta" style="padding: 120px 0; background: #F8FAFC;">
    <div class="container">
        <div class="cta-content" style="text-align: center; max-width: 800px; margin: 0 auto; background: white; padding: 60px; border-radius: 20px; box-shadow: 0 20px 60px rgba(27, 94, 32, 0.1);">
            <div style="width: 80px; height: 80px; background: #1B5E20; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: white; font-size: 36px;">
                <i class="fas fa-handshake"></i>
            </div>

            <h2 style="font-size: 42px; color: #1B5E20; margin-bottom: 20px; font-weight: 800;">Be Part of Our Impact</h2>

            <p style="font-size: 18px; color: #666666; margin-bottom: 40px; line-height: 1.7;">
                Join us in creating sustainable change for waste pickers in Dar es Salaam. Together, we can build a future where every waste picker is recognized, respected, and rewarded for their vital environmental work.
            </p>

            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">

                <a href="{{route('mtawada.contact')}}" class="btn-secondary" style="background: transparent; color: #1B5E20; padding: 16px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; border: 2px solid #1B5E20; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s;">
                    <i class="fas fa-users"></i> Join Our Network
                </a>
                <a href="{{route('mtawada.contact')}}" class="btn-tertiary" style="background: #66BB6A; color: white; padding: 16px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s;">
                    <i class="fas fa-envelope"></i> Partner With Us
                </a>
            </div>

            <div style="margin-top: 50px; padding-top: 40px; border-top: 1px solid #eee;">
                <p style="color: #666666; font-size: 14px;">
                    <i class="fas fa-quote-left" style="margin-right: 10px; color: #1B5E20;"></i>
                    "The best way to predict the future is to create it." – Peter Drucker
                    <i class="fas fa-quote-right" style="margin-left: 10px; color: #1B5E20;"></i>
                </p>
            </div>
        </div>
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

    @keyframes countUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Hero Animation */
    .impact-hero {
        animation: fadeInUp 1s ease-out;
    }

    /* Card Hover Effects */
    .impact-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15) !important;
    }

    .story-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
    }

    .metric-box:hover {
        transform: translateY(-10px) scale(1.05);
        background: rgba(255, 255, 255, 0.2) !important;
        border-color: rgba(102, 187, 106, 0.5) !important;
    }

    .project-highlight:hover {
        transform: translateY(-5px);
        box-shadow: 0 30px 70px rgba(27, 94, 32, 0.15) !important;
    }

    /* Button Hover Effects */
    .btn-primary:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 15px 30px rgba(27, 94, 32, 0.4);
        background: #0D4A18 !important;
    }

    .btn-secondary:hover {
        background: #1B5E20 !important;
        color: white !important;
        transform: translateY(-3px);
        border-color: #1B5E20 !important;
    }

    .btn-tertiary:hover {
        background: #4CAF50 !important;
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(102, 187, 106, 0.3);
    }

    /* Timeline Item Animation */
    .timeline-content {
        animation: fadeInUp 0.6s ease forwards;
        opacity: 0;
        transform: translateY(20px);
    }

    .timeline-item:nth-child(1) .timeline-content { animation-delay: 0.1s; }
    .timeline-item:nth-child(2) .timeline-content { animation-delay: 0.3s; }
    .timeline-item:nth-child(3) .timeline-content { animation-delay: 0.5s; }
    .timeline-item:nth-child(4) .timeline-content { animation-delay: 0.7s; }

    /* Metric Number Animation */
    .metric-number {
        animation: countUp 1s ease-out forwards;
        opacity: 0;
    }

    .metric-box:nth-child(1) .metric-number { animation-delay: 0.1s; }
    .metric-box:nth-child(2) .metric-number { animation-delay: 0.3s; }
    .metric-box:nth-child(3) .metric-number { animation-delay: 0.5s; }
    .metric-box:nth-child(4) .metric-number { animation-delay: 0.7s; }

    /* Project Highlight Animation */
    .project-highlight {
        animation: fadeInUp 0.8s ease forwards;
        transition: all 0.3s ease;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .impact-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        .stories-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }

    @media (max-width: 992px) {
        .impact-hero h1 {
            font-size: 42px !important;
        }

        .impact-hero p {
            font-size: 20px !important;
        }

        /* Timeline adjustment for mobile */
        .timeline-item {
            flex-direction: column !important;
            align-items: center !important;
        }

        .timeline-item > div {
            width: 100% !important;
            padding: 0 !important;
            margin-bottom: 20px !important;
        }

        .timeline-dot {
            position: relative !important;
            left: 0 !important;
            transform: none !important;
            margin: 20px 0 !important;
        }

        .timeline-content {
            text-align: center !important;
        }

        .impact-grid {
            grid-template-columns: 1fr !important;
        }

        .stories-grid {
            grid-template-columns: 1fr !important;
        }

        .metrics-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        .section-header h2 {
            font-size: 36px !important;
        }

        .project-highlight {
            padding: 30px 20px !important;
        }

        .project-footer {
            flex-direction: column !important;
            align-items: flex-start !important;
        }
    }

    @media (max-width: 768px) {
        .impact-hero h1 {
            font-size: 36px !important;
        }

        .impact-hero p {
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

        .impact-metrics-section {
            padding: 60px 0 !important;
        }

        .metric-box {
            padding: 30px 20px !important;
        }

        .cta-content .btn-primary,
        .cta-content .btn-secondary,
        .cta-content .btn-tertiary {
            width: 100%;
            justify-content: center;
        }

        .cta-content {
            padding: 40px 20px !important;
        }

        .project-details {
            padding: 25px 20px !important;
        }
    }

    @media (max-width: 576px) {
        section {
            padding: 60px 0 !important;
        }

        .impact-hero h1 {
            font-size: 28px !important;
        }

        .section-header h2 {
            font-size: 32px !important;
        }

        .metrics-grid {
            grid-template-columns: 1fr !important;
        }

        .metric-box {
            margin-bottom: 20px;
        }

        .story-stats {
            flex-direction: column;
            gap: 10px !important;
        }

        .impact-metrics .metric {
            flex-direction: column;
            text-align: center;
            gap: 5px !important;
        }

        .floating-heart,
        .floating-community,
        .floating-earth {
            display: none !important;
        }

        .project-highlight > div:first-child {
            flex-direction: column !important;
        }
    }

    /* Print Styles */
    @media print {
        .impact-hero {
            background: white !important;
            color: black !important;
            margin-top: 0 !important;
        }

        .hero-bg {
            display: none !important;
            height:100%;
        }

        .scroll-indicator {
            display: none !important;
        }

        .btn-primary,
        .btn-secondary,
        .btn-tertiary {
            display: none !important;
        }

        .floating-heart,
        .floating-community,
        .floating-earth {
            display: none !important;
        }

        .impact-card,
        .story-card {
            break-inside: avoid;
            page-break-inside: avoid;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animate numbers on scroll
        function animateNumbers() {
            const numbers = document.querySelectorAll('.metric-number');
            numbers.forEach(number => {
                const rect = number.getBoundingClientRect();
                if (rect.top < window.innerHeight * 0.9) {
                    number.style.opacity = '1';
                    number.style.transform = 'translateY(0)';
                }
            });
        }

        // Add hover effects to impact cards
        const impactCards = document.querySelectorAll('.impact-card');
        impactCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-15px) scale(1.02)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Initialize animations
        animateNumbers();
        window.addEventListener('scroll', animateNumbers);

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
