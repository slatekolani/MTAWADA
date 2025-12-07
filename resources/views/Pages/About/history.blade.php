@extends('welcome')

@section('title', 'Our History - MTAWADA')

@section('content')
<!-- Hero Section -->
<section class="history-hero" style="margin-top: 90px; position: relative; overflow: hidden;">
    <div class="hero-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        <div class="bg-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(46, 125, 50, 0.4), rgba(76, 175, 80, 0.3)); z-index: 1;"></div>
        <div class="bg-image" style="position: absolute; top: 0; left: 0; width: 100%; height: 200%; background-image: url('/images/Scripting.jpg'); background-size: cover; background-position: center; z-index: 0; filter: brightness(0.7);"></div>
    </div>

    <!-- Floating Elements -->
    <div class="floating-element" style="position: absolute; top: 20%; left: 10%; font-size: 60px; opacity: 0.1; color: white; animation: float 15s infinite ease-in-out; z-index: 2;">📜</div>
    <div class="floating-element" style="position: absolute; bottom: 30%; right: 15%; font-size: 50px; opacity: 0.1; color: white; animation: float 20s infinite ease-in-out reverse; z-index: 2;">🌱</div>

    <div class="container" style="position: relative; z-index: 3; min-height: 500px; display: flex; align-items: center;">
        <div class="hero-content" style="max-width: 800px; padding: 100px 0;">
            <h1 style="font-size: 56px; font-weight: 800; color: white; margin-bottom: 20px; line-height: 1.2; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);">
                Our <span style="color: #FFC107;">Journey</span>
            </h1>
            <p style="font-size: 24px; color: rgba(255, 255, 255, 0.9); margin-bottom: 30px; line-height: 1.6;">
                From grassroots advocacy to a registered network of waste pickers
            </p>
            <div class="hero-stats" style="display: flex; gap: 30px; flex-wrap: wrap; margin-top: 40px;">
                <div class="stat" style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #FFC107; margin-bottom: 5px;">2024</div>
                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.8);">Officially Registered</div>
                </div>
                <div class="stat" style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #FFC107; margin-bottom: 5px;">5</div>
                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.8);">Municipalities Covered</div>
                </div>
                <div class="stat" style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #FFC107; margin-bottom: 5px;">1359+</div>
                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.8);">Waste Pickers United</div>
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

<!-- Origin Story -->
<section class="history-origin" style="padding: 100px 0; background: white;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #2E7D32;">
                The Beginning of Our Story
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #2E7D32, #4CAF50); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                How a simple advocacy project grew into a powerful movement for waste pickers' rights
            </p>
        </div>

        <div class="origin-content" style="max-width: 900px; margin: 0 auto;">
            <div class="origin-card" style="background: #F8FAFC; border-radius: 20px; padding: 60px; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08); border-left: 5px solid #2E7D32;">
                <div class="origin-icon" style="width: 80px; height: 80px; background: #2E7D32; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 40px; color: white; font-size: 36px;">
                    <i class="fas fa-lightbulb"></i>
                </div>

                <h3 style="color: #2E7D32; font-size: 28px; margin-bottom: 25px; text-align: center;">Origins in EPR Advocacy</h3>

                <div class="origin-text" style="font-size: 18px; line-height: 1.8; color: #666666;">
                    <p style="margin-bottom: 25px;">
                        The establishment of the Dar es Salaam Waste Pickers Network (MTAWADA) originates from an advocacy project focused on implementing an <strong>Extended Producer Responsibility (EPR)</strong> scheme for plastic waste management in Tanzania.
                    </p>

                    <div style="background: rgba(46, 125, 50, 0.1); padding: 25px; border-radius: 15px; margin: 30px 0; border-left: 4px solid #2E7D32;">
                        <h4 style="color: #2E7D32; margin-bottom: 15px; font-size: 20px;">
                            <i class="fas fa-recycle" style="margin-right: 10px;"></i>
                            What is EPR?
                        </h4>
                        <p style="color: #666666; margin: 0;">
                            The EPR scheme holds producers accountable for managing their products' waste after consumption. Such initiatives are vital for fostering a <strong>circular economy</strong>, where waste pickers and collectors, alongside consumers, play a crucial role in preventing waste from polluting water bodies, clogging infrastructure, and contaminating land and air.
                        </p>
                    </div>

                    <p style="margin-bottom: 25px;">
                        Human Dignity and Environmental Care Foundation (HUDEFO), the implementing organization for the EPR project 2023-2024, collaborated with the <strong>Department of Political Science and Public Administration at the University of Dar es Salaam</strong>.
                    </p>

                    <p>
                        Together, they developed a methodology to engage directly with waste pickers at their work sites aimed to understand their experiences, knowledge, hopes, and expectations regarding waste management.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="history-timeline" style="padding: 100px 0; background: #F8FAFC;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #2E7D32;">
                Our Timeline
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #2E7D32, #4CAF50); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Key milestones in the formation and growth of MTAWADA
            </p>
        </div>

        <div class="timeline-container" style="position: relative; max-width: 1000px; margin: 0 auto;">
            <!-- Timeline Line -->
            <div class="timeline-line" style="position: absolute; left: 50%; top: 0; bottom: 0; width: 3px; background: linear-gradient(to bottom, #2E7D32, #4CAF50, #FF9800); transform: translateX(-50%);"></div>

            <!-- Timeline Item 1 -->
            <div class="timeline-item" style="display: flex; justify-content: flex-end; margin-bottom: 80px; position: relative;">
                <div class="timeline-content" style="width: 45%; padding: 40px; background: white; border-radius: 20px; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1); border-right: 5px solid #2E7D32;">
                    <div class="timeline-icon" style="width: 60px; height: 60px; background: #2E7D32; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; margin-bottom: 20px;">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 style="color: #2E7D32; margin-bottom: 15px; font-size: 22px;">Research & Identification</h3>
                    <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                        Field officers worked directly in the streets where waste pickers used to collect and sell recyclable materials and conducted the identification and registration process in consultation with neighbourhood (mtaa) government leaders.
                    </p>
                    <div class="timeline-details" style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <span style="display: flex; align-items: center; gap: 8px; color: #2E7D32; font-size: 14px;">
                            <i class="fas fa-map-marker-alt"></i> 5 Municipalities
                        </span>
                        <span style="display: flex; align-items: center; gap: 8px; color: #2E7D32; font-size: 14px;">
                            <i class="fas fa-users"></i> Street-level Research
                        </span>
                    </div>
                </div>
                <div class="timeline-dot" style="position: absolute; left: 50%; top: 50%; width: 20px; height: 20px; background: #2E7D32; border-radius: 50%; transform: translate(-50%, -50%); border: 4px solid #F8FAFC; box-shadow: 0 0 0 3px #2E7D32;"></div>
                <div class="timeline-date" style="position: absolute; left: calc(50% + 30px); top: 50%; transform: translateY(-50%); background: #2E7D32; color: white; padding: 8px 20px; border-radius: 20px; font-size: 14px; font-weight: 600; white-space: nowrap;">
                    2023
                </div>
            </div>

            <!-- Timeline Item 2 -->
            <div class="timeline-item" style="display: flex; justify-content: flex-start; margin-bottom: 80px; position: relative;">
                <div class="timeline-content" style="width: 45%; padding: 40px; background: white; border-radius: 20px; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1); border-left: 5px solid #4CAF50;">
                    <div class="timeline-icon" style="width: 60px; height: 60px; background: #4CAF50; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; margin-bottom: 20px;">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 style="color: #4CAF50; margin-bottom: 15px; font-size: 22px;">Collaborative Constitution Development</h3>
                    <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                        The network's constitution was drafted collaboratively by incorporating inputs from the waste pickers themselves through various exchange sessions that involved representatives of waste pickers around Dar es Salaam region.
                    </p>
                    <div class="timeline-details" style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <span style="display: flex; align-items: center; gap: 8px; color: #4CAF50; font-size: 14px;">
                            <i class="fas fa-file-contract"></i> Constitutional Drafting
                        </span>
                        <span style="display: flex; align-items: center; gap: 8px; color: #4CAF50; font-size: 14px;">
                            <i class="fas fa-comments"></i> Exchange Sessions
                        </span>
                    </div>
                </div>
                <div class="timeline-dot" style="position: absolute; left: 50%; top: 50%; width: 20px; height: 20px; background: #4CAF50; border-radius: 50%; transform: translate(-50%, -50%); border: 4px solid #F8FAFC; box-shadow: 0 0 0 3px #4CAF50;"></div>
                <div class="timeline-date" style="position: absolute; right: calc(50% + 30px); top: 50%; transform: translateY(-50%); background: #4CAF50; color: white; padding: 8px 20px; border-radius: 20px; font-size: 14px; font-weight: 600; white-space: nowrap;">
                    Early 2024
                </div>
            </div>

            <!-- Timeline Item 3 -->
            <div class="timeline-item" style="display: flex; justify-content: flex-end; position: relative;">
                <div class="timeline-content" style="width: 45%; padding: 40px; background: white; border-radius: 20px; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1); border-right: 5px solid #FF9800;">
                    <div class="timeline-icon" style="width: 60px; height: 60px; background: #FF9800; border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; margin-bottom: 20px;">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 style="color: #FF9800; margin-bottom: 15px; font-size: 22px;">Official Registration</h3>
                    <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                        As a finale of these efforts, Mtandao wa Waokota Taka Rejeshi Dar es Salaam – MTAWADA (Dar es Salaam Waste Pickers Network) was officially registered in April 2024 with the Ministry of Home Affairs (MOHA) under The Societies Act (CAP.337 R.E.2002).
                    </p>
                    <div class="timeline-details" style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <span style="display: flex; align-items: center; gap: 8px; color: #FF9800; font-size: 14px;">
                            <i class="fas fa-certificate"></i> MOHA Registered
                        </span>
                        <span style="display: flex; align-items: center; gap: 8px; color: #FF9800; font-size: 14px;">
                            <i class="fas fa-calendar-check"></i> April 2024
                        </span>
                    </div>
                </div>
                <div class="timeline-dot" style="position: absolute; left: 50%; top: 50%; width: 20px; height: 20px; background: #FF9800; border-radius: 50%; transform: translate(-50%, -50%); border: 4px solid #F8FAFC; box-shadow: 0 0 0 3px #FF9800;"></div>
                <div class="timeline-date" style="position: absolute; left: calc(50% + 30px); top: 50%; transform: translateY(-50%); background: #FF9800; color: white; padding: 8px 20px; border-radius: 20px; font-size: 14px; font-weight: 600; white-space: nowrap;">
                    April 2024
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Municipal Coverage -->
<section class="history-municipalities" style="padding: 100px 0; background: white;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #2E7D32;">
                Municipalities We Cover
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #2E7D32, #4CAF50); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Operating are uniformly conducted across all municipalities within Dar es Salaam. In all these Municipalities, we exercise grassroot membership activities for MTAWADA.
            </p>
        </div>

        <div class="municipal-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px;">
            <div class="municipal-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px 30px; text-align: center; transition: all 0.3s ease; border: 2px solid transparent;">
                <div class="municipal-icon" style="font-size: 48px; margin-bottom: 20px; color: #2E7D32;">🏙️</div>
                <h3 style="color: #2E7D32; margin-bottom: 10px; font-size: 22px;">Ubungo</h3>
                <p style="color: #666666; font-size: 14px;">Northern hub of waste management innovation</p>
            </div>

            <div class="municipal-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px 30px; text-align: center; transition: all 0.3s ease; border: 2px solid transparent;">
                <div class="municipal-icon" style="font-size: 48px; margin-bottom: 20px; color: #4CAF50;">🌊</div>
                <h3 style="color: #4CAF50; margin-bottom: 10px; font-size: 22px;">Temeke</h3>
                <p style="color: #666666; font-size: 14px;">Coastal waste management and recycling initiatives</p>
            </div>

            <div class="municipal-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px 30px; text-align: center; transition: all 0.3s ease; border: 2px solid transparent;">
                <div class="municipal-icon" style="font-size: 48px; margin-bottom: 20px; color: #2E7D32;">🏢</div>
                <h3 style="color: #2E7D32; margin-bottom: 10px; font-size: 22px;">Kinondoni</h3>
                <p style="color: #666666; font-size: 14px;">Urban waste collection and community programs</p>
            </div>

            <div class="municipal-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px 30px; text-align: center; transition: all 0.3s ease; border: 2px solid transparent;">
                <div class="municipal-icon" style="font-size: 48px; margin-bottom: 20px; color: #4CAF50;">🎯</div>
                <h3 style="color: #4CAF50; margin-bottom: 10px; font-size: 22px;">Ilala</h3>
                <p style="color: #666666; font-size: 14px;">Central advocacy and policy engagement</p>
            </div>

            <div class="municipal-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px 30px; text-align: center; transition: all 0.3s ease; border: 2px solid transparent;">
                <div class="municipal-icon" style="font-size: 48px; margin-bottom: 20px; color: #2E7D32;">🌉</div>
                <h3 style="color: #2E7D32; margin-bottom: 10px; font-size: 22px;">Kigamboni</h3>
                <p style="color: #666666; font-size: 14px;">Cross-water environmental conservation efforts</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Structure -->
<section class="history-structure" style="padding: 100px 0; background: #F8FAFC;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #2E7D32;">
                Our Democratic Structure
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #2E7D32, #4CAF50); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Organized from the grassroots with three levels of democratic decision-making
            </p>
        </div>

        <div class="structure-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 50px;">
            <!-- Level 1 -->
            <div class="structure-card" style="background: white; border-radius: 20px; padding: 40px; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08); text-align: center; border-top: 5px solid #2E7D32;">
                <div class="structure-icon" style="width: 80px; height: 80px; background: #2E7D32; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: white; font-size: 36px;">
                    <i class="fas fa-users"></i>
                </div>
                <div class="structure-level" style="font-size: 14px; color: #2E7D32; font-weight: 600; letter-spacing: 2px; margin-bottom: 15px; text-transform: uppercase;">
                    LEVEL 01
                </div>
                <h3 style="color: #2E7D32; margin-bottom: 20px; font-size: 22px;">Street Level Democracy</h3>
                <p style="color: #666666; line-height: 1.7; margin-bottom: 25px;">
                    Members of MTAWADA participate in the general assembly as the highest decision-making body, exercising direct democracy at the street level.
                </p>
                <div class="structure-features">
                    <span style="display: inline-block; background: rgba(46, 125, 50, 0.1); color: #2E7D32; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 500; margin: 5px;">
                        <i class="fas fa-vote-yea"></i> Direct Voting
                    </span>
                    <span style="display: inline-block; background: rgba(46, 125, 50, 0.1); color: #2E7D32; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 500; margin: 5px;">
                        <i class="fas fa-hand-paper"></i> Community Led
                    </span>
                </div>
            </div>

            <!-- Level 2 -->
            <div class="structure-card" style="background: white; border-radius: 20px; padding: 40px; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08); text-align: center; border-top: 5px solid #4CAF50;">
                <div class="structure-icon" style="width: 80px; height: 80px; background: #4CAF50; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: white; font-size: 36px;">
                    <i class="fas fa-sitemap"></i>
                </div>
                <div class="structure-level" style="font-size: 14px; color: #4CAF50; font-weight: 600; letter-spacing: 2px; margin-bottom: 15px; text-transform: uppercase;">
                    LEVEL 02
                </div>
                <h3 style="color: #4CAF50; margin-bottom: 20px; font-size: 22px;">District Representation</h3>
                <p style="color: #666666; line-height: 1.7; margin-bottom: 25px;">
                    The second, aggregated level composed of representatives from street levels (district delegates and chairpersons) coordinating activities across districts.
                </p>
                <div class="structure-features">
                    <span style="display: inline-block; background: rgba(76, 175, 80, 0.1); color: #4CAF50; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 500; margin: 5px;">
                        <i class="fas fa-user-tie"></i> Elected Delegates
                    </span>
                    <span style="display: inline-block; background: rgba(76, 175, 80, 0.1); color: #4CAF50; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 500; margin: 5px;">
                        <i class="fas fa-map-marked"></i> District Coordination
                    </span>
                </div>
            </div>

            <!-- Level 3 -->
            <div class="structure-card" style="background: white; border-radius: 20px; padding: 40px; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08); text-align: center; border-top: 5px solid #FF9800;">
                <div class="structure-icon" style="width: 80px; height: 80px; background: #FF9800; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: white; font-size: 36px;">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="structure-level" style="font-size: 14px; color: #FF9800; font-weight: 600; letter-spacing: 2px; margin-bottom: 15px; text-transform: uppercase;">
                    LEVEL 03
                </div>
                <h3 style="color: #FF9800; margin-bottom: 20px; font-size: 22px;">Regional Coordination</h3>
                <p style="color: #666666; line-height: 1.7; margin-bottom: 25px;">
                    Representatives from all five municipalities in Dar es Salaam meet at the regional level to develop strategies, share best practices, and advocate for policy changes.
                </p>
                <div class="structure-features">
                    <span style="display: inline-block; background: rgba(255, 152, 0, 0.1); color: #FF9800; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 500; margin: 5px;">
                        <i class="fas fa-city"></i> Municipal Representation
                    </span>
                    <span style="display: inline-block; background: rgba(255, 152, 0, 0.1); color: #FF9800; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 500; margin: 5px;">
                        <i class="fas fa-bullhorn"></i> Regional Advocacy
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="history-cta" style="padding: 120px 0; background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%); position: relative; overflow: hidden;">
    <div class="floating-element" style="position: absolute; top: 20%; left: 5%; font-size: 60px; opacity: 0.1; color: white; animation: float 20s infinite ease-in-out;">📜</div>
    <div class="floating-element" style="position: absolute; bottom: 30%; right: 5%; font-size: 60px; opacity: 0.1; color: white; animation: float 25s infinite ease-in-out reverse;">🌱</div>

    <div class="container">
        <div class="cta-content" style="text-align: center; max-width: 800px; margin: 0 auto; position: relative; z-index: 2;">
            <h2 style="font-size: 42px; color: white; margin-bottom: 20px; font-weight: 800;">Be Part of Our History</h2>
            <p style="font-size: 18px; color: rgba(255, 255, 255, 0.9); margin-bottom: 40px; line-height: 1.7;">
                From grassroots beginnings to becoming a registered network, our journey continues. Join us as we write the next chapter in waste pickers' rights and environmental justice.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="{{route('mtawada.contact')}}" class="btn-primary" style="background: #FFC107; color: #333333; padding: 16px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s; border: none;">
                    <i class="fas fa-user-plus"></i> Join Our Network
                </a>
                <a href="{{route('mtawada.contact')}}" class="btn-secondary" style="background: transparent; color: white; padding: 16px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; border: 2px solid white; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s;">
                    <i class="fas fa-envelope"></i> Learn More
                </a>
            </div>

            <div style="margin-top: 40px; padding-top: 40px; border-top: 1px solid rgba(255, 255, 255, 0.2);">
                <p style="color: rgba(255, 255, 255, 0.8); font-size: 14px;">
                    <i class="fas fa-quote-left" style="margin-right: 10px; opacity: 0.7;"></i>
                    "The journey of a thousand miles begins with a single step." – Lao Tzu
                    <i class="fas fa-quote-right" style="margin-left: 10px; opacity: 0.7;"></i>
                </p>
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
    .history-hero {
        animation: fadeInUp 1s ease-out;
    }

    /* Scroll Indicator Animation */
    .scroll-indicator i {
        animation: bounce 2s infinite;
    }

    /* Card Hover Effects */
    .municipal-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.12) !important;
        border-color: #2E7D32 !important;
    }

    .structure-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15) !important;
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

    /* Timeline Item Hover */
    .timeline-content:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease;
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .timeline-item {
            justify-content: center !important;
            margin-bottom: 60px !important;
        }

        .timeline-content {
            width: 90% !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .timeline-line {
            left: 30px !important;
        }

        .timeline-dot {
            left: 30px !important;
        }

        .timeline-date {
            position: relative !important;
            left: auto !important;
            right: auto !important;
            top: auto !important;
            transform: none !important;
            margin-top: 15px !important;
            display: inline-block !important;
        }

        .structure-grid {
            grid-template-columns: 1fr !important;
            gap: 40px !important;
        }
    }

    @media (max-width: 768px) {
        .history-hero h1 {
            font-size: 42px !important;
        }

        .history-hero p {
            font-size: 20px !important;
        }

        .municipal-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        .origin-card {
            padding: 40px 30px !important;
        }

        .timeline-content {
            padding: 30px 20px !important;
        }
    }

    @media (max-width: 576px) {
        .history-hero h1 {
            font-size: 36px !important;
        }

        .history-hero p {
            font-size: 18px !important;
        }

        .municipal-grid {
            grid-template-columns: 1fr !important;
        }

        .section-header h2 {
            font-size: 36px !important;
        }

        .cta-content .btn-primary,
        .cta-content .btn-secondary {
            width: 100%;
            justify-content: center;
        }

        .hero-stats {
            justify-content: center !important;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Scroll animations for timeline items
    function animateOnScroll() {
        const timelineItems = document.querySelectorAll('.timeline-item');
        const structureCards = document.querySelectorAll('.structure-card');
        const municipalCards = document.querySelectorAll('.municipal-card');

        timelineItems.forEach(item => {
            const elementTop = item.getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementTop < window.innerHeight - elementVisible) {
                item.style.opacity = '1';
                item.style.transform = 'translateX(0)';
            }
        });

        structureCards.forEach(card => {
            const elementTop = card.getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementTop < window.innerHeight - elementVisible) {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }
        });

        municipalCards.forEach(card => {
            const elementTop = card.getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementTop < window.innerHeight - elementVisible) {
                card.style.opacity = '1';
                card.style.transform = 'scale(1)';
            }
        });
    }

    // Initialize opacity and transform for animations
    const timelineItems = document.querySelectorAll('.timeline-item');
    const structureCards = document.querySelectorAll('.structure-card');
    const municipalCards = document.querySelectorAll('.municipal-card');

    timelineItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateX(50px)';
        item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    });

    structureCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    });

    municipalCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'scale(0.9)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    });

    // Initialize scroll animations
    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll(); // Initial check

    // Hover effects for structure cards
    structureCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // Hover effects for municipal cards
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
