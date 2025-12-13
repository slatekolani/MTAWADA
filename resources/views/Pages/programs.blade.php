@extends('welcome')

@section('title', 'Our Programs - MTAWADA')

@section('content')
<!-- Hero Section -->
<section class="programs-hero" style="margin-top: 90px; position: relative; overflow: hidden;">
    <div class="hero-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        <div class="bg-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(27, 94, 32, 0.4), rgba(46, 125, 50, 0.3)); z-index: 1;"></div>
        <div class="bg-image" style="position: absolute; top: 0; left: 0; width: 100%; height: 160%; background-image: url('/images/Education.jpg'); background-size: cover; background-position: center; z-index: 0; animation: zoomEffect 20s infinite alternate;"></div>
    </div>

    <!-- Floating Elements -->
    <div class="floating-element" style="position: absolute; top: 20%; left: 15%; font-size: 60px; opacity: 0.1; color: white; animation: float 15s infinite ease-in-out; z-index: 2;">📊</div>
    <div class="floating-element" style="position: absolute; bottom: 30%; right: 10%; font-size: 50px; opacity: 0.1; color: white; animation: float 20s infinite ease-in-out reverse; z-index: 2;">🌍</div>

    <div class="container" style="position: relative; z-index: 3; min-height: 500px; display: flex; align-items: center;">
        <div class="hero-content" style="max-width: 800px; padding: 100px 0;">
            <h1 style="font-size: 56px; font-weight: 800; color: white; margin-bottom: 20px; line-height: 1.2; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);">
                Our <span style="color: #66BB6A;">Programs</span> &
                <span style="color: #66BB6A;">Activities</span>
            </h1>
            <p style="font-size: 24px; color: rgba(255, 255, 255, 0.9); margin-bottom: 30px; line-height: 1.6;">
                Driving change through research, resources, advocacy, and community engagement
            </p>
            <div class="hero-stats" style="display: flex; gap: 30px; flex-wrap: wrap; margin-top: 40px;">
                <div class="stat" style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #66BB6A; margin-bottom: 5px;">4</div>
                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.8);">Core Programs</div>
                </div>
                <div class="stat" style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #66BB6A; margin-bottom: 5px;">5</div>
                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.8);">Action Areas</div>
                </div>
                <div class="stat" style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #66BB6A; margin-bottom: 5px;">1359+</div>
                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.8);">Members Impacted</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator" style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); color: white; z-index: 3; text-align: center;">
        <div style="font-size: 14px; letter-spacing: 2px; margin-bottom: 10px; opacity: 0.8;">SCROLL TO EXPLORE</div>
        <i class="fas fa-chevron-down" style="font-size: 20px; animation: bounce 2s infinite;"></i>
    </div>
</section>

<!-- Research Program -->
<section id="research" class="program-section" style="padding: 100px 0; background: white;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <div class="program-icon" style="width: 100px; height: 100px; background: #1B5E20; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: white; font-size: 40px;">
                <i class="fas fa-search"></i>
            </div>
            <h2 style="font-size: 42px; color: #1B5E20; margin-bottom: 20px; font-weight: 800;">Research</h2>
            <div class="program-tagline" style="width: 80px; height: 4px; background: #66BB6A; margin: 0 auto; border-radius: 2px;"></div>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Evidence-based advocacy through comprehensive research on waste management, circular economy, and waste picker livelihoods
            </p>
        </div>

        <div class="research-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <div class="research-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-left: 5px solid #1B5E20;">
                <div class="research-number" style="width: 50px; height: 50px; background: #1B5E20; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px; margin-bottom: 25px;">1</div>
                <h3 style="color: #1B5E20; margin-bottom: 15px; font-size: 22px;">Waste Management Studies</h3>
                <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                    Comprehensive research on waste collection, recycling systems, and the role of waste pickers in Tanzania's circular economy
                </p>
            </div>

            <div class="research-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-left: 5px solid #2E7D32;">
                <div class="research-number" style="width: 50px; height: 50px; background: #2E7D32; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px; margin-bottom: 25px;">2</div>
                <h3 style="color: #2E7D32; margin-bottom: 15px; font-size: 22px;">Policy Analysis</h3>
                <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                    Analyzing existing policies and advocating for inclusive waste management frameworks that recognize waste pickers' contributions
                </p>
            </div>

            <div class="research-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-left: 5px solid #4CAF50;">
                <div class="research-number" style="width: 50px; height: 50px; background: #4CAF50; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px; margin-bottom: 25px;">3</div>
                <h3 style="color: #4CAF50; margin-bottom: 15px; font-size: 22px;">Livelihood Research</h3>
                <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                    Studying the socio-economic conditions of waste pickers to develop targeted support programs and advocacy campaigns
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Resource Centre -->
<section id="resource-centre" class="program-section" style="padding: 100px 0; background: #F8FAFC;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <div class="program-icon" style="width: 100px; height: 100px; background: #2E7D32; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: white; font-size: 40px;">
                <i class="fas fa-book"></i>
            </div>
            <h2 style="font-size: 42px; color: #1B5E20; margin-bottom: 20px; font-weight: 800;">Resource Centre</h2>
            <div class="program-tagline" style="width: 80px; height: 4px; background: #66BB6A; margin: 0 auto; border-radius: 2px;"></div>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                A knowledge hub providing training materials, policy documents, and educational resources for waste pickers and stakeholders
            </p>
        </div>

        {{-- <div class="resource-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <div class="resource-card" style="background: white; border-radius: 15px; padding: 30px; text-align: center; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);">
                <div class="resource-icon" style="width: 70px; height: 70px; background: rgba(27, 94, 32, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: #1B5E20; font-size: 30px;">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h4 style="color: #1B5E20; margin-bottom: 10px;">Policy Documents</h4>
                <p style="color: #666666; font-size: 14px;">National and local waste management policies</p>
            </div>

            <div class="resource-card" style="background: white; border-radius: 15px; padding: 30px; text-align: center; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);">
                <div class="resource-icon" style="width: 70px; height: 70px; background: rgba(46, 125, 50, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: #2E7D32; font-size: 30px;">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h4 style="color: #2E7D32; margin-bottom: 10px;">Training Manuals</h4>
                <p style="color: #666666; font-size: 14px;">Skills development and capacity building</p>
            </div>

            <div class="resource-card" style="background: white; border-radius: 15px; padding: 30px; text-align: center; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);">
                <div class="resource-icon" style="width: 70px; height: 70px; background: rgba(76, 175, 80, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: #4CAF50; font-size: 30px;">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <h4 style="color: #4CAF50; margin-bottom: 10px;">Research Reports</h4>
                <p style="color: #666666; font-size: 14px;">Data and analysis on waste management</p>
            </div>

            <div class="resource-card" style="background: white; border-radius: 15px; padding: 30px; text-align: center; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);">
                <div class="resource-icon" style="width: 70px; height: 70px; background: rgba(102, 187, 106, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: #66BB6A; font-size: 30px;">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h4 style="color: #66BB6A; margin-bottom: 10px;">Advocacy Tools</h4>
                <p style="color: #666666; font-size: 14px;">Materials for rights-based advocacy</p>
            </div>
        </div> --}}
    </div>
</section>

<!-- News & Events -->
<section id="news-events" class="program-section" style="padding: 100px 0; background: white;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <div class="program-icon" style="width: 100px; height: 100px; background: #4CAF50; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: white; font-size: 40px;">
                <i class="fas fa-calendar-alt"></i>
            </div>
            <h2 style="font-size: 42px; color: #1B5E20; margin-bottom: 20px; font-weight: 800;">News & Events</h2>
            <div class="program-tagline" style="width: 80px; height: 4px; background: #66BB6A; margin: 0 auto; border-radius: 2px;"></div>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Stay updated with our latest activities, exchange sessions, seminars, conferences, and commemorations
            </p>
        </div>

        {{-- <div class="events-timeline" style="max-width: 900px; margin: 0 auto;">
            <div class="event-item" style="background: #F8FAFC; border-radius: 20px; padding: 40px; margin-bottom: 30px; border-left: 5px solid #2E7D32;">
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 20px;">
                    <div style="width: 60px; height: 60px; background: #2E7D32; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px;">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <div>
                        <h3 style="color: #1B5E20; margin-bottom: 5px; font-size: 24px;">Exchange Sessions</h3>
                        <p style="color: #666666; font-size: 16px;">Regular meetings where waste pickers share experiences and strategies</p>
                    </div>
                </div>
            </div>

            <div class="event-item" style="background: #F8FAFC; border-radius: 20px; padding: 40px; margin-bottom: 30px; border-left: 5px solid #4CAF50;">
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 20px;">
                    <div style="width: 60px; height: 60px; background: #4CAF50; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px;">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div>
                        <h3 style="color: #1B5E20; margin-bottom: 5px; font-size: 24px;">Seminars & Conferences</h3>
                        <p style="color: #666666; font-size: 16px;">Educational events on waste management, rights, and circular economy</p>
                    </div>
                </div>
            </div>

            <div class="event-item" style="background: #F8FAFC; border-radius: 20px; padding: 40px; border-left: 5px solid #66BB6A;">
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 20px;">
                    <div style="width: 60px; height: 60px; background: #66BB6A; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px;">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <div>
                        <h3 style="color: #1B5E20; margin-bottom: 5px; font-size: 24px;">Commemorations</h3>
                        <p style="color: #666666; font-size: 16px;">Special events marking important dates in waste pickers' movement</p>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>


<!-- What We Do -->
<section id="what-we-do" class="program-section" style="padding: 100px 0; background: #F8FAFC;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <div class="program-icon" style="width: 100px; height: 100px; background: #66BB6A; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: white; font-size: 40px;">
                <i class="fas fa-tasks"></i>
            </div>
            <h2 style="font-size: 42px; color: #1B5E20; margin-bottom: 20px; font-weight: 800;">What We Do</h2>
            <div class="program-tagline" style="width: 80px; height: 4px; background: #66BB6A; margin: 0 auto; border-radius: 2px;"></div>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Our comprehensive action areas to support waste pickers and advance environmental justice
            </p>
        </div>

        <div class="activities-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <div class="activity-card" style="background: white; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-top: 5px solid #1B5E20;">
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                    <div class="activity-letter" style="width: 50px; height: 50px; background: #1B5E20; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px;">A</div>
                    <h3 style="color: #1B5E20; font-size: 22px; margin: 0;">Expansion & Membership Growth</h3>
                </div>
                <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                    Building membership and expanding administrative reach across Dar es Salaam to create a united front for waste pickers.
                </p>
            </div>

            <div class="activity-card" style="background: white; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-top: 5px solid #2E7D32;">
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                    <div class="activity-letter" style="width: 50px; height: 50px; background: #2E7D32; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px;">B</div>
                    <h3 style="color: #2E7D32; font-size: 22px; margin: 0;">Education and Advocacy</h3>
                </div>
                <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                    Providing education on the importance of waste pickers and advocating for environmental conservation and circular economy.
                </p>
            </div>

            <div class="activity-card" style="background: white; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-top: 5px solid #4CAF50;">
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                    <div class="activity-letter" style="width: 50px; height: 50px; background: #4CAF50; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px;">C</div>
                    <h3 style="color: #4CAF50; font-size: 22px; margin: 0;">Support & Rights Protection</h3>
                </div>
                <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                    Advocating for social, economic and political rights while fighting against exploitation and unfair treatment.
                </p>
            </div>

            <div class="activity-card" style="background: white; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-top: 5px solid #66BB6A;">
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                    <div class="activity-letter" style="width: 50px; height: 50px; background: #66BB6A; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px;">D</div>
                    <h3 style="color: #66BB6A; font-size: 22px; margin: 0;">Advocacy & Voice Amplification</h3>
                </div>
                <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                    Building unity to increase strength, amplify voices, and fight against challenges like distorted weights and social stigma.
                </p>
            </div>

            <div class="activity-card" style="background: white; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-top: 5px solid #81C784;">
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                    <div class="activity-letter" style="width: 50px; height: 50px; background: #81C784; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px;">E</div>
                    <h3 style="color: #81C784; font-size: 22px; margin: 0;">Struggle-Based Education</h3>
                </div>
                <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                    Providing education for waste pickers against all forms of exploitation, empowering them with knowledge for their rights.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="programs-cta" style="padding: 120px 0; background: linear-gradient(135deg, #1B5E20 0%, #2E7D32 100%); position: relative; overflow: hidden;">
    <div class="floating-element" style="position: absolute; top: 20%; left: 5%; font-size: 60px; opacity: 0.1; color: white; animation: float 20s infinite ease-in-out;">🤝</div>
    <div class="floating-element" style="position: absolute; bottom: 30%; right: 5%; font-size: 60px; opacity: 0.1; color: white; animation: float 25s infinite ease-in-out reverse;">🌱</div>

    <div class="container">
        <div class="cta-content" style="text-align: center; max-width: 800px; margin: 0 auto; position: relative; z-index: 2;">
            <h2 style="font-size: 42px; color: white; margin-bottom: 20px; font-weight: 800;">Want to Get Involved?</h2>
            <p style="font-size: 18px; color: rgba(255, 255, 255, 0.9); margin-bottom: 40px; line-height: 1.7;">
                Our programs depend on collaboration, research partnerships, and community support. Join us in advancing waste pickers' rights and environmental sustainability.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="{{ route('mtawada.contact') }}" class="btn-primary" style="background: #66BB6A; color: white; padding: 16px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s; border: none;">
                    <i class="fas fa-handshake"></i> Partner With Us
                </a>
                <a href="{{ route('mtawada.contact') }}" class="btn-secondary" style="background: transparent; color: white; padding: 16px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; border: 2px solid white; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s;">
                    <i class="fas fa-envelope"></i> Contact Our Team
                </a>
            </div>

            <div style="margin-top: 40px; padding-top: 40px; border-top: 1px solid rgba(255, 255, 255, 0.2);">
                <p style="color: rgba(255, 255, 255, 0.8); font-size: 14px;">
                    <i class="fas fa-quote-left" style="margin-right: 10px; opacity: 0.7;"></i>
                    "The power of community to create health is far greater than any physician, clinic, or hospital." – Mark Hyman
                    <i class="fas fa-quote-right" style="margin-left: 10px; opacity: 0.7;"></i>
                </p>
            </div>
        </div>
    </div>
</section>

<style>
    /* Reuse your existing animations */
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }

    @keyframes bounce {
        0%, 100% { transform: translateX(-50%) translateY(0); }
        50% { transform: translateX(-50%) translateY(-10px); }
    }

    @keyframes zoomEffect {
        0% { transform: scale(1); }
        100% { transform: scale(1.1); }
    }

    /* Card Hover Effects */
    .research-card:hover, .resource-card:hover, .gallery-item:hover, .activity-card:hover {
        transform: translateY(-10px);
        transition: transform 0.3s ease;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
    }

    .event-item:hover {
        transform: translateX(10px);
        transition: transform 0.3s ease;
    }

    /* Button Hover Effects */
    .btn-primary:hover {
        background: #4CAF50 !important;
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(102, 187, 106, 0.4);
    }

    .btn-secondary:hover {
        background: white !important;
        color: #1B5E20 !important;
        transform: translateY(-3px);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .research-grid, .activities-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        .gallery-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }

    @media (max-width: 768px) {
        .programs-hero h1 {
            font-size: 42px !important;
        }

        .programs-hero p {
            font-size: 20px !important;
        }

        .research-grid, .activities-grid, .gallery-grid {
            grid-template-columns: 1fr !important;
        }

        .resource-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }

    @media (max-width: 576px) {
        .programs-hero h1 {
            font-size: 36px !important;
        }

        .programs-hero p {
            font-size: 18px !important;
        }

        .resource-grid {
            grid-template-columns: 1fr !important;
        }

        .cta-content .btn-primary,
        .cta-content .btn-secondary {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;

            if (href.startsWith('#') && !href.startsWith('#!')) {
                e.preventDefault();
                const targetId = href.substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // Animation on scroll for program sections
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe all program cards and sections
    document.querySelectorAll('.research-card, .resource-card, .event-item, .gallery-item, .activity-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });
});
</script>
@endsection
