@extends('welcome')

@section('title', 'Mission & Vision - MTAWADA')

@section('content')
<!-- Hero Section -->
<section class="mission-hero" style="margin-top: 90px; position: relative; overflow: hidden;">
    <div class="hero-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        <div class="bg-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(46, 125, 50, 0.7), rgba(76, 175, 80, 0.6)); z-index: 1;"></div>
        <div class="bg-image" style="position: absolute; top: 0; left: 0; width: 100%; height: 160%; background-image: url('/images/Education2.jpg'); background-size: cover; background-position: center; z-index: 0; animation: zoomEffect 20s infinite alternate;"></div>
    </div>

    <!-- Floating Elements -->
    <div class="floating-element" style="position: absolute; top: 20%; left: 15%; font-size: 60px; opacity: 0.1; color: white; animation: float 15s infinite ease-in-out; z-index: 2;">🎯</div>
    <div class="floating-element" style="position: absolute; bottom: 30%; right: 10%; font-size: 50px; opacity: 0.1; color: white; animation: float 20s infinite ease-in-out reverse; z-index: 2;">🌟</div>

    <div class="container" style="position: relative; z-index: 3; min-height: 500px; display: flex; align-items: center;">
        <div class="hero-content" style="max-width: 800px; padding: 100px 0;">
            <h1 style="font-size: 56px; font-weight: 800; color: white; margin-bottom: 20px; line-height: 1.2; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);">
                Our <span style="color: #FFC107;">Purpose</span> &
                <span style="color: #FFC107;">Aspiration</span>
            </h1>
            <p style="font-size: 24px; color: rgba(255, 255, 255, 0.9); margin-bottom: 30px; line-height: 1.6;">
                Driving transformation in waste management through clear mission and visionary leadership
            </p>
            <div class="hero-stats" style="display: flex; gap: 30px; flex-wrap: wrap; margin-top: 40px;">
                <div class="stat" style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #FFC107; margin-bottom: 5px;">1</div>
                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.8);">Clear Mission</div>
                </div>
                <div class="stat" style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #FFC107; margin-bottom: 5px;">1</div>
                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.8);">Unified Vision</div>
                </div>
                <div class="stat" style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #FFC107; margin-bottom: 5px;">5</div>
                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.8);">Core Values</div>
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

<!-- Mission Statement -->
<section class="mission-statement" style="padding: 100px 0; background: white; position: relative;">
    <div class="container">
        <div class="mission-content" style="max-width: 900px; margin: 0 auto; position: relative; z-index: 2;">
            <div class="mission-header" style="text-align: center; margin-bottom: 60px;">
                <div class="mission-icon" style="width: 100px; height: 100px; background: #2E7D32; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: white; font-size: 40px;">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h2 style="font-size: 42px; color: #2E7D32; margin-bottom: 20px; font-weight: 800;">Our Mission</h2>
                <div class="mission-tagline" style="width: 80px; height: 4px; background: #FFC107; margin: 0 auto; border-radius: 2px;"></div>
            </div>

            <div class="mission-card" style="background: #F8FAFC; border: 2px solid #E8F5E9; padding: 60px; border-radius: 30px; position: relative; overflow: hidden;">
                <div class="quote-icon" style="position: absolute; top: 30px; left: 40px; font-size: 80px; color: rgba(46, 125, 50, 0.1); font-family: serif;">"</div>

                <div class="mission-text" style="text-align: center; position: relative; z-index: 2;">
                    <p style="font-size: 28px; color: #2E7D32; line-height: 1.6; margin-bottom: 30px; font-style: italic; font-weight: 500;">
                        To combat all oppressive systems that hinder the well-being of waste pickers and the entire waste management sector.
                    </p>

                    <div class="mission-breakdown" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-top: 50px; padding-top: 50px; border-top: 1px solid #E8F5E9;">
                        <div class="breakdown-item" style="text-align: center;">
                            <div class="item-icon" style="width: 60px; height: 60px; background: rgba(46, 125, 50, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: #2E7D32; font-size: 24px;">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4 style="color: #2E7D32; margin-bottom: 10px; font-size: 18px;">Protection</h4>
                            <p style="color: #666666; font-size: 14px; line-height: 1.6;">Safeguarding waste pickers from exploitation and abuse</p>
                        </div>

                        <div class="breakdown-item" style="text-align: center;">
                            <div class="item-icon" style="width: 60px; height: 60px; background: rgba(255, 193, 7, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: #FF9800; font-size: 24px;">
                                <i class="fas fa-fist-raised"></i>
                            </div>
                            <h4 style="color: #2E7D32; margin-bottom: 10px; font-size: 18px;">Advocacy</h4>
                            <p style="color: #666666; font-size: 14px; line-height: 1.6;">Fighting against oppressive systems and practices</p>
                        </div>

                        <div class="breakdown-item" style="text-align: center;">
                            <div class="item-icon" style="width: 60px; height: 60px; background: rgba(76, 175, 80, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: #4CAF50; font-size: 24px;">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h4 style="color: #2E7D32; margin-bottom: 10px; font-size: 18px;">Well-being</h4>
                            <p style="color: #666666; font-size: 14px; line-height: 1.6;">Ensuring dignity and quality of life for all workers</p>
                        </div>
                    </div>
                </div>

                <div class="quote-icon" style="position: absolute; bottom: 30px; right: 40px; font-size: 80px; color: rgba(46, 125, 50, 0.1); font-family: serif; transform: rotate(180deg);">"</div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Statement -->
<section class="vision-statement" style="padding: 100px 0; background: #F8FAFC;">
    <div class="container">
        <div class="vision-content" style="max-width: 900px; margin: 0 auto; position: relative; z-index: 2;">
            <div class="vision-header" style="text-align: center; margin-bottom: 60px;">
                <div class="vision-icon" style="width: 100px; height: 100px; background: #2E7D32; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: white; font-size: 40px;">
                    <i class="fas fa-eye"></i>
                </div>
                <h2 style="font-size: 42px; color: #2E7D32; margin-bottom: 20px; font-weight: 800;">Our Vision</h2>
                <div class="vision-tagline" style="width: 80px; height: 4px; background: #FFC107; margin: 0 auto; border-radius: 2px;"></div>
            </div>

            <div class="vision-card" style="background: white; border: 2px solid #E8F5E9; padding: 60px; border-radius: 30px; position: relative; overflow: hidden;">
                <div class="quote-icon" style="position: absolute; top: 30px; left: 40px; font-size: 80px; color: rgba(46, 125, 50, 0.1); font-family: serif;">"</div>

                <div class="vision-text" style="text-align: center; position: relative; z-index: 2;">
                    <p style="font-size: 24px; color: #2E7D32; line-height: 1.6; margin-bottom: 30px; font-style: italic; font-weight: 500;">
                        To be a solid organization in advocating for our interests as Waste Pickers, to forge alliances with other groups regardless of religious, tribal, or political affiliations to claim our rights and requirements for our social, economic and cultural development.
                    </p>

                    <div class="vision-pillars" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 25px; margin-top: 50px;">
                        <div class="pillar-item" style="text-align: center;">
                            <div class="pillar-number" style="width: 40px; height: 40px; background: #2E7D32; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; color: white; font-weight: 700; font-size: 18px;">1</div>
                            <h4 style="color: #2E7D32; margin-bottom: 10px; font-size: 16px;">Solid Organization</h4>
                            <p style="color: #666666; font-size: 13px; line-height: 1.5;">Building institutional strength and capacity</p>
                        </div>

                        <div class="pillar-item" style="text-align: center;">
                            <div class="pillar-number" style="width: 40px; height: 40px; background: #4CAF50; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; color: white; font-weight: 700; font-size: 18px;">2</div>
                            <h4 style="color: #2E7D32; margin-bottom: 10px; font-size: 16px;">Inclusive Alliances</h4>
                            <p style="color: #666666; font-size: 13px; line-height: 1.5;">Cross-cutting partnerships beyond divisions</p>
                        </div>

                        <div class="pillar-item" style="text-align: center;">
                            <div class="pillar-number" style="width: 40px; height: 40px; background: #FFC107; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; color: #333333; font-weight: 700; font-size: 18px;">3</div>
                            <h4 style="color: #2E7D32; margin-bottom: 10px; font-size: 16px;">Rights Advocacy</h4>
                            <p style="color: #666666; font-size: 13px; line-height: 1.5;">Claiming our rightful place in society</p>
                        </div>

                        <div class="pillar-item" style="text-align: center;">
                            <div class="pillar-number" style="width: 40px; height: 40px; background: #FF9800; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; color: white; font-weight: 700; font-size: 18px;">4</div>
                            <h4 style="color: #2E7D32; margin-bottom: 10px; font-size: 16px;">Holistic Development</h4>
                            <p style="color: #666666; font-size: 13px; line-height: 1.5;">Social, economic & cultural advancement</p>
                        </div>
                    </div>
                </div>

                <div class="quote-icon" style="position: absolute; bottom: 30px; right: 40px; font-size: 80px; color: rgba(46, 125, 50, 0.1); font-family: serif; transform: rotate(180deg);">"</div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="core-values" style="padding: 100px 0; background: white;">
    <div class="container">
        <div class="values-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #2E7D32;">
                Our Guiding Principles
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #2E7D32, #4CAF50); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Five core values that shape our actions, decisions, and relationships
            </p>
        </div>

        <div class="values-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Value 1 -->
            <div class="value-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); transition: all 0.4s ease; border-top: 4px solid #2E7D32;">
                <div class="value-header" style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                    <div class="value-letter" style="width: 50px; height: 50px; background: #2E7D32; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px;">A</div>
                    <h3 style="color: #2E7D32; font-size: 22px; margin: 0;">Equality & Non-Discrimination</h3>
                </div>
                <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                    We are governed by equality and non-discrimination principles for all members in all matters, including leadership and decision-making.
                </p>
                <div class="value-tags">
                    <span style="background: rgba(46, 125, 50, 0.1); color: #2E7D32; padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: 500; margin-right: 8px;">
                        <i class="fas fa-equals"></i> Equal Opportunity
                    </span>
                    <span style="background: rgba(46, 125, 50, 0.1); color: #2E7D32; padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: 500;">
                        <i class="fas fa-handshake"></i> Fair Treatment
                    </span>
                </div>
            </div>

            <!-- Value 2 -->
            <div class="value-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); transition: all 0.4s ease; border-top: 4px solid #4CAF50;">
                <div class="value-header" style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                    <div class="value-letter" style="width: 50px; height: 50px; background: #4CAF50; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px;">B</div>
                    <h3 style="color: #4CAF50; font-size: 22px; margin: 0;">Transformative Advocacy</h3>
                </div>
                <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                    We believe that we have the potential to organize and influence advocacy for transformative change, which includes resisting oppressive and exploitative practices within our sector.
                </p>
                <div class="value-tags">
                    <span style="background: rgba(76, 175, 80, 0.1); color: #4CAF50; padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: 500; margin-right: 8px;">
                        <i class="fas fa-fist-raised"></i> Resistance
                    </span>
                    <span style="background: rgba(76, 175, 80, 0.1); color: #4CAF50; padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: 500;">
                        <i class="fas fa-sync-alt"></i> Transformation
                    </span>
                </div>
            </div>

            <!-- Value 3 -->
            <div class="value-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); transition: all 0.4s ease; border-top: 4px solid #81C784;">
                <div class="value-header" style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                    <div class="value-letter" style="width: 50px; height: 50px; background: #81C784; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px;">C</div>
                    <h3 style="color: #388E3C; font-size: 22px; margin: 0;">Environmental Stewardship</h3>
                </div>
                <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                    We believe that we are crucial pillars of the circular economy sector and environmental stewards in Tanzania; we therefore deserve respect and value for our contribution.
                </p>
                <div class="value-tags">
                    <span style="background: rgba(129, 199, 132, 0.2); color: #388E3C; padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: 500; margin-right: 8px;">
                        <i class="fas fa-leaf"></i> Conservation
                    </span>
                    <span style="background: rgba(129, 199, 132, 0.2); color: #388E3C; padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: 500;">
                        <i class="fas fa-recycle"></i> Circular Economy
                    </span>
                </div>
            </div>

            <!-- Value 4 -->
            <div class="value-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); transition: all 0.4s ease; border-top: 4px solid #66BB6A;">
                <div class="value-header" style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                    <div class="value-letter" style="width: 50px; height: 50px; background: #66BB6A; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px;">D</div>
                    <h3 style="color: #2E7D32; font-size: 22px; margin: 0;">Collaboration</h3>
                </div>
                <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                    We believe in the power of collaboration with various representatives of the public and private sectors to address various environmental issues and challenges.
                </p>
                <div class="value-tags">
                    <span style="background: rgba(102, 187, 106, 0.1); color: #2E7D32; padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: 500; margin-right: 8px;">
                        <i class="fas fa-handshake"></i> Partnership
                    </span>
                    <span style="background: rgba(102, 187, 106, 0.1); color: #2E7D32; padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: 500;">
                        <i class="fas fa-users"></i> Multi-stakeholder
                    </span>
                </div>
            </div>

            <!-- Value 5 -->
            <div class="value-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); transition: all 0.4s ease; border-top: 4px solid #FF9800;">
                <div class="value-header" style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                    <div class="value-letter" style="width: 50px; height: 50px; background: #FF9800; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px;">E</div>
                    <h3 style="color: #FF9800; font-size: 22px; margin: 0;">Unity & Solidarity</h3>
                </div>
                <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                    We believe in unity and solidarity for all members of MTAWADA, making our community a safe space to address our social, security and economic challenges.
                </p>
                <div class="value-tags">
                    <span style="background: rgba(255, 152, 0, 0.1); color: #FF9800; padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: 500; margin-right: 8px;">
                        <i class="fas fa-users"></i> Community
                    </span>
                    <span style="background: rgba(255, 152, 0, 0.1); color: #FF9800; padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: 500;">
                        <i class="fas fa-shield-alt"></i> Safe Space
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Do -->
<section class="what-we-do" style="padding: 100px 0; background: #F8FAFC;">
    <div class="container">
        <div class="activities-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #2E7D32;">
                Our Action Areas
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #2E7D32, #4CAF50); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Concrete actions we take to fulfill our mission and achieve our vision
            </p>
        </div>

        <div class="activities-timeline" style="position: relative; max-width: 800px; margin: 0 auto;">
            <div class="timeline-line" style="position: absolute; left: 30px; top: 0; bottom: 0; width: 3px; background: linear-gradient(to bottom, #2E7D32, #4CAF50, #FF9800);"></div>

            <!-- Activity A -->
            <div class="activity-item" style="display: flex; gap: 30px; margin-bottom: 50px; position: relative;">
                <div class="activity-marker" style="width: 60px; flex-shrink: 0; text-align: center;">
                    <div class="marker-circle" style="width: 60px; height: 60px; background: #2E7D32; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 24px; position: relative; z-index: 2;">A</div>
                </div>
                <div class="activity-content" style="flex: 1; background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-left: 4px solid #2E7D32;">
                    <h3 style="color: #2E7D32; margin-bottom: 15px; font-size: 24px;">Expansion & Membership Growth</h3>
                    <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                        We are building membership and expanding administrative reach across Dar es Salaam to create a united front for waste pickers' rights and representation.
                    </p>
                    <div class="activity-stats" style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <span style="display: flex; align-items: center; gap: 8px; color: #2E7D32; font-size: 14px;">
                            <i class="fas fa-users"></i> 850+ Members
                        </span>
                        <span style="display: flex; align-items: center; gap: 8px; color: #2E7D32; font-size: 14px;">
                            <i class="fas fa-map-marker-alt"></i> 5 Municipalities
                        </span>
                    </div>
                </div>
            </div>

            <!-- Activity B -->
            <div class="activity-item" style="display: flex; gap: 30px; margin-bottom: 50px; position: relative;">
                <div class="activity-marker" style="width: 60px; flex-shrink: 0; text-align: center;">
                    <div class="marker-circle" style="width: 60px; height: 60px; background: #4CAF50; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 24px; position: relative; z-index: 2;">B</div>
                </div>
                <div class="activity-content" style="flex: 1; background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-left: 4px solid #4CAF50;">
                    <h3 style="color: #4CAF50; margin-bottom: 15px; font-size: 24px;">Education and Advocacy</h3>
                    <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                        We provide education to the community on the importance of waste pickers, our contribution to environmental conservation, waste management, climate change mitigation, and development of the circular economy.
                    </p>
                    <div class="activity-stats" style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <span style="display: flex; align-items: center; gap: 8px; color: #4CAF50; font-size: 14px;">
                            <i class="fas fa-graduation-cap"></i> Community Education
                        </span>
                        <span style="display: flex; align-items: center; gap: 8px; color: #4CAF50; font-size: 14px;">
                            <i class="fas fa-bullhorn"></i> Public Awareness
                        </span>
                    </div>
                </div>
            </div>

            <!-- Activity C -->
            <div class="activity-item" style="display: flex; gap: 30px; margin-bottom: 50px; position: relative;">
                <div class="activity-marker" style="width: 60px; flex-shrink: 0; text-align: center;">
                    <div class="marker-circle" style="width: 60px; height: 60px; background: #81C784; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 24px; position: relative; z-index: 2;">C</div>
                </div>
                <div class="activity-content" style="flex: 1; background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-left: 4px solid #81C784;">
                    <h3 style="color: #388E3C; margin-bottom: 15px; font-size: 24px;">Support & Rights Protection</h3>
                    <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                        We advocate for social, economic and political rights to contribute meaningfully to developments within the waste sector and our day-to-day activities, fighting against exploitation and unfair treatment.
                    </p>
                    <div class="activity-stats" style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <span style="display: flex; align-items: center; gap: 8px; color: #388E3C; font-size: 14px;">
                            <i class="fas fa-gavel"></i> Rights Protection
                        </span>
                        <span style="display: flex; align-items: center; gap: 8px; color: #388E3C; font-size: 14px;">
                            <i class="fas fa-balance-scale"></i> Legal Advocacy
                        </span>
                    </div>
                </div>
            </div>

            <!-- Activity D -->
            <div class="activity-item" style="display: flex; gap: 30px; margin-bottom: 50px; position: relative;">
                <div class="activity-marker" style="width: 60px; flex-shrink: 0; text-align: center;">
                    <div class="marker-circle" style="width: 60px; height: 60px; background: #66BB6A; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 24px; position: relative; z-index: 2;">D</div>
                </div>
                <div class="activity-content" style="flex: 1; background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-left: 4px solid #66BB6A;">
                    <h3 style="color: #2E7D32; margin-bottom: 15px; font-size: 24px;">Advocacy & Rights Protection</h3>
                    <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                        We build unity to increase our strength, to amplify our voices and fight against the challenges we are facing, including issues of distorted weights and measures often used by agents and the stigma we encounter in our work.
                    </p>
                    <div class="activity-stats" style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <span style="display: flex; align-items: center; gap: 8px; color: #2E7D32; font-size: 14px;">
                            <i class="fas fa-bullhorn"></i> Voice Amplification
                        </span>
                        <span style="display: flex; align-items: center; gap: 8px; color: #2E7D32; font-size: 14px;">
                            <i class="fas fa-fist-raised"></i> Fighting Stigma
                        </span>
                    </div>
                </div>
            </div>

            <!-- Activity E -->
            <div class="activity-item" style="display: flex; gap: 30px; position: relative;">
                <div class="activity-marker" style="width: 60px; flex-shrink: 0; text-align: center;">
                    <div class="marker-circle" style="width: 60px; height: 60px; background: #FF9800; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 24px; position: relative; z-index: 2;">E</div>
                </div>
                <div class="activity-content" style="flex: 1; background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-left: 4px solid #FF9800;">
                    <h3 style="color: #FF9800; margin-bottom: 15px; font-size: 24px;">Struggle-Based Education</h3>
                    <p style="color: #666666; line-height: 1.7; margin-bottom: 20px;">
                        We provide struggle-based education for waste pickers against all forms of exploitation, empowering them with knowledge to fight for their rights and dignity in their daily work.
                    </p>
                    <div class="activity-stats" style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <span style="display: flex; align-items: center; gap: 8px; color: #FF9800; font-size: 14px;">
                            <i class="fas fa-book-open"></i> Empowerment
                        </span>
                        <span style="display: flex; align-items: center; gap: 8px; color: #FF9800; font-size: 14px;">
                            <i class="fas fa-shield-alt"></i> Anti-exploitation
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="mission-cta" style="padding: 120px 0; background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%); position: relative; overflow: hidden;">
    <div class="floating-element" style="position: absolute; top: 20%; left: 5%; font-size: 60px; opacity: 0.1; color: white; animation: float 20s infinite ease-in-out;">🤝</div>
    <div class="floating-element" style="position: absolute; bottom: 30%; right: 5%; font-size: 60px; opacity: 0.1; color: white; animation: float 25s infinite ease-in-out reverse;">🎯</div>

    <div class="container">
        <div class="cta-content" style="text-align: center; max-width: 800px; margin: 0 auto; position: relative; z-index: 2;">
            <h2 style="font-size: 42px; color: white; margin-bottom: 20px; font-weight: 800;">Aligned with Our Purpose?</h2>
            <p style="font-size: 18px; color: rgba(255, 255, 255, 0.9); margin-bottom: 40px; line-height: 1.7;">
                Our mission and vision guide everything we do. If you share our commitment to waste pickers' rights and environmental justice, join us in building a more equitable and sustainable future.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="{{route('mtawada.contact')}}" class="btn-primary" style="background: #FFC107; color: #333333; padding: 16px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s; border: none;">
                    <i class="fas fa-handshake"></i> Partner With Us
                </a>
                <a href="{{route('mtawada.contact')}}" class="btn-secondary" style="background: transparent; color: white; padding: 16px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; border: 2px solid white; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s;">
                    <i class="fas fa-envelope"></i> Get Involved
                </a>
            </div>

            <div style="margin-top: 40px; padding-top: 40px; border-top: 1px solid rgba(255, 255, 255, 0.2);">
                <p style="color: rgba(255, 255, 255, 0.8); font-size: 14px;">
                    <i class="fas fa-quote-left" style="margin-right: 10px; opacity: 0.7;"></i>
                    "Alone we can do so little; together we can do so much." – Helen Keller
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

    @keyframes zoomEffect {
        0% { transform: scale(1); }
        100% { transform: scale(1.1); }
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
    .mission-hero {
        animation: fadeInUp 1s ease-out;
    }

    /* Scroll Indicator Animation */
    .scroll-indicator i {
        animation: bounce 2s infinite;
    }

    /* Card Hover Effects */
    .value-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.12) !important;
    }

    .activity-content:hover {
        transform: translateX(10px);
        transition: transform 0.3s ease;
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

    /* Mission/Vision Card Effects */
    .mission-card:hover, .vision-card:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1) !important;
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .mission-text p, .vision-text p {
            font-size: 22px !important;
        }

        .mission-breakdown, .vision-pillars {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        .values-grid {
            grid-template-columns: 1fr !important;
        }
    }

    @media (max-width: 768px) {
        .mission-hero h1 {
            font-size: 42px !important;
        }

        .mission-hero p {
            font-size: 20px !important;
        }

        .mission-card, .vision-card {
            padding: 40px 30px !important;
        }

        .mission-text p, .vision-text p {
            font-size: 20px !important;
        }

        .mission-breakdown, .vision-pillars {
            grid-template-columns: 1fr !important;
        }

        .activity-item {
            flex-direction: column;
            gap: 20px !important;
        }

        .activity-marker {
            width: 100% !important;
            display: flex;
            justify-content: center;
        }

        .timeline-line {
            left: 50% !important;
            transform: translateX(-50%);
        }
    }

    @media (max-width: 576px) {
        .mission-hero h1 {
            font-size: 36px !important;
        }

        .mission-hero p {
            font-size: 18px !important;
        }

        .mission-card, .vision-card {
            padding: 30px 20px !important;
        }

        .mission-text p, .vision-text p {
            font-size: 18px !important;
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
    // Scroll animations for value cards
    function animateOnScroll() {
        const valueCards = document.querySelectorAll('.value-card');
        const activityItems = document.querySelectorAll('.activity-item');

        valueCards.forEach(card => {
            const elementTop = card.getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementTop < window.innerHeight - elementVisible) {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }
        });

        activityItems.forEach(item => {
            const elementTop = item.getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementTop < window.innerHeight - elementVisible) {
                item.style.opacity = '1';
                item.style.transform = 'translateX(0)';
            }
        });
    }

    // Initialize opacity and transform for animations
    const valueCards = document.querySelectorAll('.value-card');
    const activityItems = document.querySelectorAll('.activity-item');

    valueCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    });

    activityItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateX(-30px)';
        item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    });

    // Initialize scroll animations
    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll(); // Initial check

    // Hover effects for value cards
    valueCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // Hover effects for activity items
    activityItems.forEach(item => {
        const content = item.querySelector('.activity-content');

        content.addEventListener('mouseenter', function() {
            this.style.transform = 'translateX(10px)';
        });

        content.addEventListener('mouseleave', function() {
            this.style.transform = 'translateX(0)';
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
