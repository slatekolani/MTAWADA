@extends('welcome')

@section('title', 'About Us - MTAWADA')

@section('content')
<!-- Hero Section with Image -->
<section class="about-hero" style="margin-top: 90px; position: relative; overflow: hidden;">
    <div class="hero-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        <div class="bg-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(46, 125, 50, 0.4), rgba(76, 175, 80, 0.3)); z-index: 1;"></div>
        <div class="bg-image" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('/images/Management.jpg'); background-size: cover; background-position: center; z-index: 0; filter: brightness(0.7);"></div>
    </div>

    <!-- Floating Elements -->
    <div class="floating-element" style="position: absolute; top: 20%; left: 10%; font-size: 60px; opacity: 0.1; color: white; animation: float 15s infinite ease-in-out; z-index: 2;">♻️</div>
    <div class="floating-element" style="position: absolute; bottom: 30%; right: 15%; font-size: 50px; opacity: 0.1; color: white; animation: float 20s infinite ease-in-out reverse; z-index: 2;">👥</div>

    <div class="container" style="position: relative; z-index: 3; min-height: 500px; display: flex; align-items: center;">
        <div class="hero-content" style="max-width: 700px; padding: 100px 0;">
            <h1 style="font-size: 56px; font-weight: 800; color: white; margin-bottom: 20px; line-height: 1.2; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);">
                About <span style="color: #FFC107;">MTAWADA</span>
            </h1>
            <p style="font-size: 24px; color: rgba(255, 255, 255, 0.9); margin-bottom: 30px; line-height: 1.6;">
                Mtandao wa Waokota Taka Rejeshi Dar es Salaam
                <br>
                <em style="font-size: 18px; opacity: 0.8;">Uniting Waste Pickers for Environmental Justice</em>
            </p>
            <div class="hero-stats" style="display: flex; gap: 30px; flex-wrap: wrap; margin-top: 40px;">
                <div class="stat" style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #FFC107; margin-bottom: 5px;">1359+</div>
                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.8);">Members United</div>
                </div>
                <div class="stat" style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #FFC107; margin-bottom: 5px;">5</div>
                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.8);">Municipalities</div>
                </div>
                <div class="stat" style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #FFC107; margin-bottom: 5px;">2024</div>
                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.8);">Established</div>
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

<!-- Our Identity -->
<section class="about-identity" style="padding: 100px 0; background: #F8FAFC;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; color: #2E7D32;">
                Who We Are
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #2E7D32, #4CAF50); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                A grassroots movement transforming waste management and empowering communities
            </p>
        </div>

        <div class="identity-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            <div class="identity-text">
                <div class="identity-highlight" style="margin-bottom: 30px; padding: 25px; background: linear-gradient(135deg, rgba(46, 125, 50, 0.1), rgba(76, 175, 80, 0.1)); border-radius: 15px; border-left: 4px solid #2E7D32;">
                    <h3 style="color: #2E7D32; margin-bottom: 15px; font-size: 24px;">
                        <i class="fas fa-bullhorn" style="margin-right: 10px;"></i>
                        Our Identity
                    </h3>
                    <p style="font-size: 18px; line-height: 1.7; color: #333333;">
                        <strong>MTAWADA stands for Mtandao wa Waokota Taka Rejeshi Dar es Salaam (Dar es Salaam Waste Pickers Network).</strong> We are a non-governmental organization registered with the Ministry of Home Affairs of Tanzania in April 2024 under The Societies Act (CAP.337 R.E.2002).
                    </p>
                </div>

                <div class="identity-mission" style="margin-top: 30px;">
                    <h4 style="color: #333333; margin-bottom: 20px; font-size: 20px;">
                        <i class="fas fa-handshake" style="color: #2E7D32; margin-right: 10px;"></i>
                        Our Purpose
                    </h4>
                    <p style="font-size: 16px; line-height: 1.7; color: #666666; margin-bottom: 20px;">
                        MTAWADA was initiated to <strong>unite waste pickers, build unity and solidarity, amplify our voices, and become a stakeholder in the public and private sectors in waste management.</strong>
                    </p>
                    <p style="font-size: 16px; line-height: 1.7; color: #666666;">
                        We are a network organization <strong>of waste pickers, by waste pickers and for waste pickers</strong> - creating a forum for those who used to work in isolation to forge a community that stands for our rights and environmental well-being.
                    </p>
                </div>
            </div>

            <div class="identity-visual">
                <div class="visual-card" style="position: relative; overflow: hidden; border-radius: 20px; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);">
                    <div class="card-bg" style="height: 300px; background: linear-gradient(135deg, #2E7D32, #4CAF50); position: relative; display: flex; align-items: center; justify-content: center;">
                        <div style="text-align: center; color: white; padding: 40px;">
                            <div style="font-size: 80px; margin-bottom: 20px;">👥</div>
                            <h3 style="font-size: 24px; margin-bottom: 10px;">United We Stand</h3>
                            <p style="opacity: 0.9;">For rights, recognition, and environmental justice</p>
                        </div>
                    </div>
                    <div class="card-stats" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; padding: 30px; background: white;">
                        <div style="text-align: center;">
                            <div style="font-size: 28px; font-weight: 700; color: #2E7D32;">100%</div>
                            <div style="font-size: 14px; color: #666666;">Grassroots Led</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 28px; font-weight: 700; color: #4CAF50;">5/5</div>
                            <div style="font-size: 14px; color: #666666;">Municipalities Covered</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Structure -->
<section class="about-structure" style="padding: 100px 0; background: white;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; color: #2E7D32;">
                Our Democratic Structure
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #2E7D32, #4CAF50); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Organized from the grassroots with three levels of democratic decision-making
            </p>
        </div>

        <div class="structure-timeline">
            <!-- Level 1 -->
            <div class="timeline-item" style="display: grid; grid-template-columns: 1fr 2fr; gap: 40px; align-items: center; margin-bottom: 60px; opacity: 0; transform: translateX(-50px); transition: all 0.8s ease;">
                <div class="timeline-visual" style="text-align: center;">
                    <div class="level-circle" style="width: 120px; height: 120px; background: linear-gradient(135deg, #2E7D32, #4CAF50); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 40px; box-shadow: 0 15px 30px rgba(46, 125, 50, 0.3);">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="level-number" style="font-size: 14px; color: #2E7D32; font-weight: 600; letter-spacing: 2px; margin-top: 10px;">
                        LEVEL 01
                    </div>
                </div>
                <div class="timeline-content" style="padding: 40px; background: #F8FAFC; border-radius: 20px; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1); border-left: 5px solid #2E7D32;">
                    <h3 style="color: #2E7D32; margin-bottom: 15px; font-size: 24px;">Street Level Democracy</h3>
                    <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                        Members of MTAWADA participate in the general assembly as the highest decision-making body, exercising direct democracy at the street level.
                    </p>
                    <div class="level-features" style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <span style="background: rgba(46, 125, 50, 0.1); color: #2E7D32; padding: 8px 16px; border-radius: 20px; font-size: 14px; font-weight: 500;">
                            <i class="fas fa-vote-yea"></i> Direct Voting
                        </span>
                        <span style="background: rgba(46, 125, 50, 0.1); color: #2E7D32; padding: 8px 16px; border-radius: 20px; font-size: 14px; font-weight: 500;">
                            <i class="fas fa-hand-paper"></i> Community Led
                        </span>
                    </div>
                </div>
            </div>

            <!-- Level 2 -->
            <div class="timeline-item" style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px; align-items: center; margin-bottom: 60px; opacity: 0; transform: translateX(50px); transition: all 0.8s ease;">
                <div class="timeline-content" style="padding: 40px; background: #F8FAFC; border-radius: 20px; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1); border-right: 5px solid #4CAF50; order: 1;">
                    <h3 style="color: #4CAF50; margin-bottom: 15px; font-size: 24px;">District Representation</h3>
                    <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                        The second, aggregated level composed of representatives from street levels (district delegates and chairpersons) coordinating activities across districts.
                    </p>
                    <div class="level-features" style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <span style="background: rgba(76, 175, 80, 0.1); color: #4CAF50; padding: 8px 16px; border-radius: 20px; font-size: 14px; font-weight: 500;">
                            <i class="fas fa-user-tie"></i> Elected Delegates
                        </span>
                        <span style="background: rgba(76, 175, 80, 0.1); color: #4CAF50; padding: 8px 16px; border-radius: 20px; font-size: 14px; font-weight: 500;">
                            <i class="fas fa-map-marked"></i> District Coordination
                        </span>
                    </div>
                </div>
                <div class="timeline-visual" style="text-align: center; order: 2;">
                    <div class="level-circle" style="width: 120px; height: 120px; background: linear-gradient(135deg, #4CAF50, #81C784); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 40px; box-shadow: 0 15px 30px rgba(76, 175, 80, 0.3);">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <div class="level-number" style="font-size: 14px; color: #4CAF50; font-weight: 600; letter-spacing: 2px; margin-top: 10px;">
                        LEVEL 02
                    </div>
                </div>
            </div>

            <!-- Level 3 -->
            <div class="timeline-item" style="display: grid; grid-template-columns: 1fr 2fr; gap: 40px; align-items: center; opacity: 0; transform: translateX(-50px); transition: all 0.8s ease;">
                <div class="timeline-visual" style="text-align: center;">
                    <div class="level-circle" style="width: 120px; height: 120px; background: linear-gradient(135deg, #FFC107, #FF9800); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 40px; box-shadow: 0 15px 30px rgba(255, 152, 0, 0.3);">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="level-number" style="font-size: 14px; color: #FF9800; font-weight: 600; letter-spacing: 2px; margin-top: 10px;">
                        LEVEL 03
                    </div>
                </div>
                <div class="timeline-content" style="padding: 40px; background: #F8FAFC; border-radius: 20px; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1); border-left: 5px solid #FF9800;">
                    <h3 style="color: #FF9800; margin-bottom: 15px; font-size: 24px;">Regional Coordination</h3>
                    <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                        Representatives from all five municipalities in Dar es Salaam meet at the regional level to develop strategies, share best practices, and advocate for policy changes.
                    </p>
                    <div class="level-features" style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <span style="background: rgba(255, 152, 0, 0.1); color: #FF9800; padding: 8px 16px; border-radius: 20px; font-size: 14px; font-weight: 500;">
                            <i class="fas fa-city"></i> Municipal Representation
                        </span>
                        <span style="background: rgba(255, 152, 0, 0.1); color: #FF9800; padding: 8px 16px; border-radius: 20px; font-size: 14px; font-weight: 500;">
                            <i class="fas fa-bullhorn"></i> Regional Advocacy
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Journey -->
<section class="about-journey" style="padding: 100px 0; background: #F8FAFC;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; color: #2E7D32;">
                Our Journey
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #2E7D32, #4CAF50); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                From grassroots advocacy to a registered network of waste pickers
            </p>
        </div>

        <div class="journey-timeline" style="position: relative; max-width: 1000px; margin: 0 auto;">
            <!-- Timeline Line -->
            <div class="timeline-line" style="position: absolute; left: 50%; top: 0; bottom: 0; width: 3px; background: linear-gradient(to bottom, #2E7D32, #4CAF50, #FF9800); transform: translateX(-50%);"></div>

            <!-- Timeline Items -->
            <div class="journey-item left" style="display: flex; justify-content: flex-end; margin-bottom: 80px; position: relative;">
                <div class="item-content" style="width: 45%; padding: 40px; background: white; border-radius: 20px; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1); border-right: 5px solid #2E7D32;">
                    <div class="item-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, #2E7D32, #4CAF50); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; margin-bottom: 20px;">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 style="color: #2E7D32; margin-bottom: 15px; font-size: 22px;">The Beginning</h3>
                    <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                        MTAWADA originated from an Extended Producer Responsibility (EPR) advocacy project for plastic waste management in Tanzania, aiming to hold producers accountable for post-consumption waste.
                    </p>
                    <div class="item-year" style="font-size: 14px; color: #2E7D32; font-weight: 600; display: flex; align-items: center; gap: 8px;">
                        <i class="far fa-calendar"></i> 2023
                    </div>
                </div>
                <div class="timeline-dot" style="position: absolute; left: 50%; top: 50%; width: 20px; height: 20px; background: #2E7D32; border-radius: 50%; transform: translate(-50%, -50%); border: 4px solid white; box-shadow: 0 0 0 3px #2E7D32;"></div>
            </div>

            <div class="journey-item right" style="display: flex; justify-content: flex-start; margin-bottom: 80px; position: relative;">
                <div class="item-content" style="width: 45%; padding: 40px; background: white; border-radius: 20px; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1); border-left: 5px solid #4CAF50;">
                    <div class="item-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, #4CAF50, #81C784); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; margin-bottom: 20px;">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 style="color: #4CAF50; margin-bottom: 15px; font-size: 22px;">Collaboration & Research</h3>
                    <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                        Partnered with HUDEFO and the University of Dar es Salaam to understand waste pickers' experiences through direct engagement at work sites across all five municipalities.
                    </p>
                    <div class="item-year" style="font-size: 14px; color: #4CAF50; font-weight: 600; display: flex; align-items: center; gap: 8px;">
                        <i class="far fa-calendar"></i> 2023-2024
                    </div>
                </div>
                <div class="timeline-dot" style="position: absolute; left: 50%; top: 50%; width: 20px; height: 20px; background: #4CAF50; border-radius: 50%; transform: translate(-50%, -50%); border: 4px solid white; box-shadow: 0 0 0 3px #4CAF50;"></div>
            </div>

            <div class="journey-item left" style="display: flex; justify-content: flex-end; margin-bottom: 80px; position: relative;">
                <div class="item-content" style="width: 45%; padding: 40px; background: white; border-radius: 20px; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1); border-right: 5px solid #FF9800;">
                    <div class="item-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, #FFC107, #FF9800); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; margin-bottom: 20px;">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3 style="color: #FF9800; margin-bottom: 15px; font-size: 22px;">Constitutional Development</h3>
                    <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                        Developed our constitution through collaborative exchange sessions with waste picker representatives, ensuring our governance structure reflects our members' needs and aspirations.
                    </p>
                    <div class="item-year" style="font-size: 14px; color: #FF9800; font-weight: 600; display: flex; align-items: center; gap: 8px;">
                        <i class="far fa-calendar"></i> Early 2024
                    </div>
                </div>
                <div class="timeline-dot" style="position: absolute; left: 50%; top: 50%; width: 20px; height: 20px; background: #FF9800; border-radius: 50%; transform: translate(-50%, -50%); border: 4px solid white; box-shadow: 0 0 0 3px #FF9800;"></div>
            </div>

            <div class="journey-item right" style="display: flex; justify-content: flex-start; position: relative;">
                <div class="item-content" style="width: 45%; padding: 40px; background: white; border-radius: 20px; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1); border-left: 5px solid #81C784;">
                    <div class="item-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, #81C784, #66BB6A); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; margin-bottom: 20px;">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 style="color: #388E3C; margin-bottom: 15px; font-size: 22px;">Official Registration</h3>
                    <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                        Successfully registered with the Ministry of Home Affairs of Tanzania under The Societies Act (CAP.337 R.E.2002) in April 2024, marking our official establishment as a waste pickers network.
                    </p>
                    <div class="item-year" style="font-size: 14px; color: #388E3C; font-weight: 600; display: flex; align-items: center; gap: 8px;">
                        <i class="far fa-calendar"></i> April 2024
                    </div>
                </div>
                <div class="timeline-dot" style="position: absolute; left: 50%; top: 50%; width: 20px; height: 20px; background: #81C784; border-radius: 50%; transform: translate(-50%, -50%); border: 4px solid white; box-shadow: 0 0 0 3px #81C784;"></div>
            </div>
        </div>
    </div>
</section>

<!-- Municipal Coverage -->
<section class="about-municipalities" style="padding: 100px 0; background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%); position: relative;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; color: white;">
                Municipalities We Serve
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: white; border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: rgba(255, 255, 255, 0.9); line-height: 1.7;">
                Operating are uniformly conducted across all municipalities within Dar es Salaam. In all these Municipalities, we exercise grassroot membership activities for MTAWADA.
            </p>
        </div>

        <div class="municipal-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 25px;">
            <div class="municipal-card" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); padding: 40px 30px; border-radius: 20px; text-align: center; transition: all 0.3s ease;">
                <div class="municipal-icon" style="font-size: 48px; margin-bottom: 20px; color: white;">🏙️</div>
                <h3 style="color: white; margin-bottom: 10px; font-size: 22px;">Ubungo</h3>
                <p style="color: rgba(255, 255, 255, 0.8); font-size: 14px;">Northern hub of waste management innovation</p>
            </div>
            <div class="municipal-card" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); padding: 40px 30px; border-radius: 20px; text-align: center; transition: all 0.3s ease;">
                <div class="municipal-icon" style="font-size: 48px; margin-bottom: 20px; color: white;">🌊</div>
                <h3 style="color: white; margin-bottom: 10px; font-size: 22px;">Temeke</h3>
                <p style="color: rgba(255, 255, 255, 0.8); font-size: 14px;">Coastal waste management and recycling initiatives</p>
            </div>
            <div class="municipal-card" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); padding: 40px 30px; border-radius: 20px; text-align: center; transition: all 0.3s ease;">
                <div class="municipal-icon" style="font-size: 48px; margin-bottom: 20px; color: white;">🏢</div>
                <h3 style="color: white; margin-bottom: 10px; font-size: 22px;">Kinondoni</h3>
                <p style="color: rgba(255, 255, 255, 0.8); font-size: 14px;">Urban waste collection and community programs</p>
            </div>
            <div class="municipal-card" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); padding: 40px 30px; border-radius: 20px; text-align: center; transition: all 0.3s ease;">
                <div class="municipal-icon" style="font-size: 48px; margin-bottom: 20px; color: white;">🎯</div>
                <h3 style="color: white; margin-bottom: 10px; font-size: 22px;">Ilala</h3>
                <p style="color: rgba(255, 255, 255, 0.8); font-size: 14px;">Central advocacy and policy engagement</p>
            </div>
            <div class="municipal-card" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); padding: 40px 30px; border-radius: 20px; text-align: center; transition: all 0.3s ease;">
                <div class="municipal-icon" style="font-size: 48px; margin-bottom: 20px; color: white;">🌉</div>
                <h3 style="color: white; margin-bottom: 10px; font-size: 22px;">Kigamboni</h3>
                <p style="color: rgba(255, 255, 255, 0.8); font-size: 14px;">Cross-water environmental conservation efforts</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="about-cta" style="padding: 120px 0; background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%); position: relative; overflow: hidden;">
    <div class="floating-element" style="position: absolute; top: 20%; left: 5%; font-size: 60px; opacity: 0.1; color: white; animation: float 20s infinite ease-in-out;">♻️</div>
    <div class="floating-element" style="position: absolute; bottom: 30%; right: 5%; font-size: 60px; opacity: 0.1; color: white; animation: float 25s infinite ease-in-out reverse;">👥</div>

    <div class="container">
        <div class="cta-content" style="text-align: center; max-width: 800px; margin: 0 auto; position: relative; z-index: 2;">
            <h2 style="font-size: 42px; color: white; margin-bottom: 20px; font-weight: 800;">Join Our Movement</h2>
            <p style="font-size: 18px; color: rgba(255, 255, 255, 0.9); margin-bottom: 40px; line-height: 1.7;">
                Are you a waste picker in Dar es Salaam? Join over 1359+ members fighting for recognition, fair treatment,
                and environmental sustainability. Together, we can build a stronger voice for waste pickers' rights.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
              
                <a href="{{route('mtawada.contact')}}" class="btn-secondary" style="background: transparent; color: white; padding: 16px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; border: 2px solid white; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s;">
                    <i class="fas fa-envelope"></i> Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    /* Animations */
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
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

    /* Hero Section */
    .about-hero {
        animation: fadeInUp 1s ease-out;
    }

    /* Scroll Indicator Animation */
    .scroll-indicator i {
        animation: bounce 2s infinite;
    }

    /* Hover Effects */
    .municipal-card:hover {
        transform: translateY(-10px) !important;
        background: rgba(255, 255, 255, 0.15) !important;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2) !important;
    }

    .btn-primary:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 12px 30px rgba(255, 193, 7, 0.4) !important;
        background: #FFB300 !important;
    }

    .btn-secondary:hover {
        background: white !important;
        color: #2E7D32 !important;
        transform: translateY(-3px);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .identity-grid {
            grid-template-columns: 1fr !important;
            gap: 40px !important;
        }

        .structure-timeline .timeline-item {
            grid-template-columns: 1fr !important;
            gap: 30px !important;
        }

        .structure-timeline .timeline-visual {
            order: -1 !important;
        }

        .journey-item {
            justify-content: center !important;
        }

        .journey-item .item-content {
            width: 90% !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .timeline-line {
            left: 30px !important;
        }

        .journey-item.left .timeline-dot,
        .journey-item.right .timeline-dot {
            left: 30px !important;
        }
    }

    @media (max-width: 768px) {
        .about-hero h1 {
            font-size: 42px !important;
        }

        .about-hero p {
            font-size: 20px !important;
        }

        .hero-stats {
            justify-content: center !important;
        }

        .municipal-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        .timeline-content,
        .item-content {
            padding: 30px 20px !important;
        }
    }

    @media (max-width: 576px) {
        .about-hero h1 {
            font-size: 36px !important;
        }

        .about-hero p {
            font-size: 18px !important;
        }

        .municipal-grid {
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
    // Scroll animations for timeline items
    function animateOnScroll() {
        const timelineItems = document.querySelectorAll('.timeline-item, .journey-item');

        timelineItems.forEach(item => {
            const elementTop = item.getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementTop < window.innerHeight - elementVisible) {
                item.style.opacity = '1';
                item.style.transform = 'translateX(0)';
            }
        });
    }

    // Initialize scroll animations
    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll(); // Initial check

    // Hover effects for municipal cards
    const municipalCards = document.querySelectorAll('.municipal-card');
    municipalCards.forEach(card => {
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
</script>
@endsection
