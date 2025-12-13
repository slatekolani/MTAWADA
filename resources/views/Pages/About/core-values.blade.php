@extends('welcome')

@section('title', 'Core Values - MTAWADA')

@section('content')
<!-- Hero Section -->
<section class="values-hero" style="margin-top: 90px; position: relative; overflow: hidden;">
    <div class="hero-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 70%;">
        <div class="bg-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 150%; background: linear-gradient(rgba(27, 94, 32, 0.4), rgba(46, 125, 50, 0.3)); z-index: 1;"></div>
        <div class="bg-image" style="position: absolute; top: 0; left: 0; width: 100%; height: 180%; background-image: url('/images/Speaking1.jpg'); background-size: cover; background-position: center; z-index: 0; filter: brightness(0.7);"></div>
    </div>

    <!-- Floating Elements -->
    <div class="floating-element" style="position: absolute; top: 20%; left: 10%; font-size: 60px; opacity: 0.1; color: white; animation: float 15s infinite ease-in-out; z-index: 2;">❤️</div>
    <div class="floating-element" style="position: absolute; bottom: 30%; right: 15%; font-size: 50px; opacity: 0.1; color: white; animation: float 20s infinite ease-in-out reverse; z-index: 2;">⚖️</div>

    <div class="container" style="position: relative; z-index: 3; min-height: 500px; display: flex; align-items: center;">
        <div class="hero-content" style="max-width: 800px; padding: 100px 0;">
            <h1 style="font-size: 56px; font-weight: 800; color: white; margin-bottom: 20px; line-height: 1.2; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);">
                Our <span style="color: #66BB6A;">Guiding</span> Principles
            </h1>
            <p style="font-size: 24px; color: rgba(255, 255, 255, 0.9); margin-bottom: 30px; line-height: 1.6;">
                The five core values that shape our actions, decisions, and relationships
            </p>
            <div class="hero-stats" style="display: flex; gap: 30px; flex-wrap: wrap; margin-top: 40px;">
                <div class="stat" style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #66BB6A; margin-bottom: 5px;">5</div>
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

<!-- Introduction -->
<section class="values-intro" style="padding: 100px 0; background: white;">
    <div class="container">
        <div class="intro-content" style="max-width: 900px; margin: 0 auto; text-align: center;">
            <div class="intro-icon" style="width: 100px; height: 100px; background: #1B5E20; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 40px; color: white; font-size: 40px;">
                <i class="fas fa-heart"></i>
            </div>

            <h2 style="font-size: 42px; color: #1B5E20; margin-bottom: 25px; font-weight: 800;">
                Our Moral Compass
            </h2>

            <p style="font-size: 20px; color: #666666; line-height: 1.7; margin-bottom: 30px;">
                At MTAWADA, our core values are more than just words—they are the foundation of everything we do. They guide our decisions, shape our relationships, and drive our commitment to creating a better future for waste pickers in Dar es Salaam.
            </p>

            <div style="background: rgba(27, 94, 32, 0.1); padding: 30px; border-radius: 20px; border-left: 4px solid #1B5E20;">
                <p style="font-size: 18px; color: #1B5E20; font-style: italic; margin: 0;">
                    "Our values define who we are, guide what we do, and determine how we treat each other. They are the bedrock of our movement for justice and dignity."
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values Grid -->
<section class="values-grid-section" style="padding: 100px 0; background: #F8FAFC;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #1B5E20;">
                The Five Pillars of MTAWADA
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #1B5E20, #2E7D32); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                These principles guide our actions, shape our decisions, and define our relationships
            </p>
        </div>

        <div class="values-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Value 1: Equality & Non-Discrimination -->
            <div class="value-card" style="background: white; border-radius: 20px; padding: 40px; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08); transition: all 0.4s ease; border-top: 5px solid #1B5E20; position: relative; overflow: hidden;">
                <div class="value-number" style="position: absolute; top: 20px; right: 20px; font-size: 60px; font-weight: 800; color: rgba(27, 94, 32, 0.1);">A</div>

                <div class="value-icon" style="width: 70px; height: 70px; background: rgba(27, 94, 32, 0.1); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: #1B5E20; font-size: 30px;">
                    <i class="fas fa-equals"></i>
                </div>

                <h3 style="color: #1B5E20; margin-bottom: 20px; font-size: 24px; line-height: 1.3;">
                    Equality & Non-Discrimination
                </h3>

                <p style="color: #666666; line-height: 1.7; margin-bottom: 25px;">
                    We are governed by equality and non-discrimination principles for all members in all matters, including leadership and decision-making.
                </p>

                <div class="value-practices" style="background: rgba(27, 94, 32, 0.05); padding: 20px; border-radius: 15px;">
                    <h4 style="color: #1B5E20; margin-bottom: 15px; font-size: 16px; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-check-circle"></i> In Practice
                    </h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="color: #666666; padding: 8px 0; border-bottom: 1px solid rgba(27, 94, 32, 0.1); display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-check" style="color: #1B5E20; font-size: 12px;"></i>
                            <span>Equal participation in decision-making</span>
                        </li>
                        <li style="color: #666666; padding: 8px 0; border-bottom: 1px solid rgba(27, 94, 32, 0.1); display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-check" style="color: #1B5E20; font-size: 12px;"></i>
                            <span>Non-discriminatory leadership opportunities</span>
                        </li>
                        <li style="color: #666666; padding: 8px 0; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-check" style="color: #1B5E20; font-size: 12px;"></i>
                            <span>Fair treatment for all members</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Value 2: Transformative Advocacy -->
            <div class="value-card" style="background: white; border-radius: 20px; padding: 40px; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08); transition: all 0.4s ease; border-top: 5px solid #2E7D32; position: relative; overflow: hidden;">
                <div class="value-number" style="position: absolute; top: 20px; right: 20px; font-size: 60px; font-weight: 800; color: rgba(46, 125, 50, 0.1);">B</div>

                <div class="value-icon" style="width: 70px; height: 70px; background: rgba(46, 125, 50, 0.1); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: #2E7D32; font-size: 30px;">
                    <i class="fas fa-fist-raised"></i>
                </div>

                <h3 style="color: #2E7D32; margin-bottom: 20px; font-size: 24px; line-height: 1.3;">
                    Transformative Advocacy
                </h3>

                <p style="color: #666666; line-height: 1.7; margin-bottom: 25px;">
                    We believe that we have the potential to organize and influence advocacy for transformative change, which includes resisting oppressive and exploitative practices within our sector.
                </p>

                <div class="value-practices" style="background: rgba(46, 125, 50, 0.05); padding: 20px; border-radius: 15px;">
                    <h4 style="color: #2E7D32; margin-bottom: 15px; font-size: 16px; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-check-circle"></i> In Practice
                    </h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="color: #666666; padding: 8px 0; border-bottom: 1px solid rgba(46, 125, 50, 0.1); display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-check" style="color: #2E7D32; font-size: 12px;"></i>
                            <span>Organizing against exploitative practices</span>
                        </li>
                        <li style="color: #666666; padding: 8px 0; border-bottom: 1px solid rgba(46, 125, 50, 0.1); display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-check" style="color: #2E7D32; font-size: 12px;"></i>
                            <span>Advocating for policy changes</span>
                        </li>
                        <li style="color: #666666; padding: 8px 0; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-check" style="color: #2E7D32; font-size: 12px;"></i>
                            <span>Resisting oppression collectively</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Value 3: Environmental Stewardship -->
            <div class="value-card" style="background: white; border-radius: 20px; padding: 40px; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08); transition: all 0.4s ease; border-top: 5px solid #4CAF50; position: relative; overflow: hidden;">
                <div class="value-number" style="position: absolute; top: 20px; right: 20px; font-size: 60px; font-weight: 800; color: rgba(76, 175, 80, 0.1);">C</div>

                <div class="value-icon" style="width: 70px; height: 70px; background: rgba(76, 175, 80, 0.1); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: #388E3C; font-size: 30px;">
                    <i class="fas fa-leaf"></i>
                </div>

                <h3 style="color: #388E3C; margin-bottom: 20px; font-size: 24px; line-height: 1.3;">
                    Environmental Stewardship
                </h3>

                <p style="color: #666666; line-height: 1.7; margin-bottom: 25px;">
                    We believe that we are crucial pillars of the circular economy sector and environmental stewards in Tanzania; we therefore deserve respect and value for our contribution.
                </p>

                <div class="value-practices" style="background: rgba(76, 175, 80, 0.05); padding: 20px; border-radius: 15px;">
                    <h4 style="color: #388E3C; margin-bottom: 15px; font-size: 16px; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-check-circle"></i> In Practice
                    </h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="color: #666666; padding: 8px 0; border-bottom: 1px solid rgba(76, 175, 80, 0.1); display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-check" style="color: #388E3C; font-size: 12px;"></i>
                            <span>Promoting circular economy practices</span>
                        </li>
                        <li style="color: #666666; padding: 8px 0; border-bottom: 1px solid rgba(76, 175, 80, 0.1); display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-check" style="color: #388E3C; font-size: 12px;"></i>
                            <span>Environmental conservation initiatives</span>
                        </li>
                        <li style="color: #666666; padding: 8px 0; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-check" style="color: #388E3C; font-size: 12px;"></i>
                            <span>Waste reduction and recycling advocacy</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Value 4: Collaboration -->
            <div class="value-card" style="background: white; border-radius: 20px; padding: 40px; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08); transition: all 0.4s ease; border-top: 5px solid #66BB6A; position: relative; overflow: hidden;">
                <div class="value-number" style="position: absolute; top: 20px; right: 20px; font-size: 60px; font-weight: 800; color: rgba(102, 187, 106, 0.1);">D</div>

                <div class="value-icon" style="width: 70px; height: 70px; background: rgba(102, 187, 106, 0.1); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: #2E7D32; font-size: 30px;">
                    <i class="fas fa-handshake"></i>
                </div>

                <h3 style="color: #2E7D32; margin-bottom: 20px; font-size: 24px; line-height: 1.3;">
                    Collaboration
                </h3>

                <p style="color: #666666; line-height: 1.7; margin-bottom: 25px;">
                    We believe in the power of collaboration with various representatives of the public and private sectors to address various environmental issues and challenges.
                </p>

                <div class="value-practices" style="background: rgba(102, 187, 106, 0.05); padding: 20px; border-radius: 15px;">
                    <h4 style="color: #2E7D32; margin-bottom: 15px; font-size: 16px; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-check-circle"></i> In Practice
                    </h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="color: #666666; padding: 8px 0; border-bottom: 1px solid rgba(102, 187, 106, 0.1); display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-check" style="color: #2E7D32; font-size: 12px;"></i>
                            <span>Multi-stakeholder partnerships</span>
                        </li>
                        <li style="color: #666666; padding: 8px 0; border-bottom: 1px solid rgba(102, 187, 106, 0.1); display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-check" style="color: #2E7D32; font-size: 12px;"></i>
                            <span>Public-private sector engagement</span>
                        </li>
                        <li style="color: #666666; padding: 8px 0; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-check" style="color: #2E7D32; font-size: 12px;"></i>
                            <span>Community-based solutions</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Value 5: Unity & Solidarity -->
            <div class="value-card" style="background: white; border-radius: 20px; padding: 40px; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08); transition: all 0.4s ease; border-top: 5px solid #81C784; position: relative; overflow: hidden;">
                <div class="value-number" style="position: absolute; top: 20px; right: 20px; font-size: 60px; font-weight: 800; color: rgba(129, 199, 132, 0.1);">E</div>

                <div class="value-icon" style="width: 70px; height: 70px; background: rgba(129, 199, 132, 0.1); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: #388E3C; font-size: 30px;">
                    <i class="fas fa-users"></i>
                </div>

                <h3 style="color: #388E3C; margin-bottom: 20px; font-size: 24px; line-height: 1.3;">
                    Unity & Solidarity
                </h3>

                <p style="color: #666666; line-height: 1.7; margin-bottom: 25px;">
                    We believe in unity and solidarity for all members of MTAWADA, making our community a safe space to address our social, security and economic challenges.
                </p>

                <div class="value-practices" style="background: rgba(129, 199, 132, 0.05); padding: 20px; border-radius: 15px;">
                    <h4 style="color: #388E3C; margin-bottom: 15px; font-size: 16px; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-check-circle"></i> In Practice
                    </h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="color: #666666; padding: 8px 0; border-bottom: 1px solid rgba(129, 199, 132, 0.1); display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-check" style="color: #388E3C; font-size: 12px;"></i>
                            <span>Creating safe community spaces</span>
                        </li>
                        <li style="color: #666666; padding: 8px 0; border-bottom: 1px solid rgba(129, 199, 132, 0.1); display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-check" style="color: #388E3C; font-size: 12px;"></i>
                            <span>Mutual support systems</span>
                        </li>
                        <li style="color: #666666; padding: 8px 0; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-check" style="color: #388E3C; font-size: 12px;"></i>
                            <span>Collective problem-solving</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How We Live Our Values -->
<section class="values-implementation" style="padding: 100px 0; background: white;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #1B5E20;">
                Living Our Values
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #1B5E20, #2E7D32); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                How our core values translate into real-world actions and impact
            </p>
        </div>

        <div class="implementation-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
            <!-- Daily Operations -->
            <div class="implementation-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; text-align: center; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);">
                <div class="card-icon" style="width: 80px; height: 80px; background: #1B5E20; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: white; font-size: 36px;">
                    <i class="fas fa-cogs"></i>
                </div>
                <h3 style="color: #1B5E20; margin-bottom: 20px; font-size: 22px;">Daily Operations</h3>
                <p style="color: #666666; line-height: 1.7;">
                    Our values guide every meeting, decision, and interaction within MTAWADA, ensuring consistency and integrity in all our operations.
                </p>
            </div>

            <!-- Community Engagement -->
            <div class="implementation-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; text-align: center; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);">
                <div class="card-icon" style="width: 80px; height: 80px; background: #2E7D32; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: white; font-size: 36px;">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3 style="color: #2E7D32; margin-bottom: 20px; font-size: 22px;">Community Engagement</h3>
                <p style="color: #666666; line-height: 1.7;">
                    We apply our values when working with waste pickers, communities, and stakeholders to build trust and meaningful relationships.
                </p>
            </div>

            <!-- Advocacy Work -->
            <div class="implementation-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; text-align: center; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);">
                <div class="card-icon" style="width: 80px; height: 80px; background: #4CAF50; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: white; font-size: 36px;">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <h3 style="color: #4CAF50; margin-bottom: 20px; font-size: 22px;">Advocacy Work</h3>
                <p style="color: #666666; line-height: 1.7;">
                    Our values shape how we advocate for waste pickers' rights, ensuring our approach is principled, respectful, and effective.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="values-cta" style="padding: 120px 0; background: linear-gradient(135deg, #1B5E20 0%, #2E7D32 100%); position: relative; overflow: hidden;">
    <div class="floating-element" style="position: absolute; top: 20%; left: 5%; font-size: 60px; opacity: 0.1; color: white; animation: float 20s infinite ease-in-out;">❤️</div>
    <div class="floating-element" style="position: absolute; bottom: 30%; right: 5%; font-size: 60px; opacity: 0.1; color: white; animation: float 25s infinite ease-in-out reverse;">⚖️</div>

    <div class="container">
        <div class="cta-content" style="text-align: center; max-width: 800px; margin: 0 auto; position: relative; z-index: 2;">
            <h2 style="font-size: 42px; color: white; margin-bottom: 20px; font-weight: 800;">Share Our Values?</h2>
            <p style="font-size: 18px; color: rgba(255, 255, 255, 0.9); margin-bottom: 40px; line-height: 1.7;">
                If our values resonate with you, join us in building a movement grounded in equality, solidarity, and environmental stewardship.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="{{route('mtawada.contact')}}" class="btn-primary" style="background: #66BB6A; color: white; padding: 16px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s; border: none;">
                    <i class="fas fa-handshake"></i> Join Our Network
                </a>
                <a href="{{route('mtawada.contact')}}" class="btn-secondary" style="background: transparent; color: white; padding: 16px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; border: 2px solid white; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s;">
                    <i class="fas fa-envelope"></i> Partner With Us
                </a>
            </div>

            <div style="margin-top: 40px; padding-top: 40px; border-top: 1px solid rgba(255, 255, 255, 0.2);">
                <p style="color: rgba(255, 255, 255, 0.8); font-size: 14px;">
                    <i class="fas fa-quote-left" style="margin-right: 10px; opacity: 0.7;"></i>
                    "Values are like fingerprints. Nobody's are the same, but you leave 'em all over everything you do." – Elvis Presley
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
    .values-hero {
        animation: fadeInUp 1s ease-out;
    }

    /* Scroll Indicator Animation */
    .scroll-indicator i {
        animation: bounce 2s infinite;
    }

    /* Card Hover Effects */
    .value-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15) !important;
    }

    .implementation-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1) !important;
    }

    .btn-primary:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 12px 30px rgba(102, 187, 106, 0.4) !important;
        background: #4CAF50 !important;
    }

    .btn-secondary:hover {
        background: white !important;
        color: #1B5E20 !important;
        transform: translateY(-3px);
    }

    /* Value Card Animations */
    .value-card {
        animation: fadeInUp 0.8s ease forwards;
        opacity: 0;
        transform: translateY(30px);
    }

    .value-card:nth-child(1) { animation-delay: 0.1s; }
    .value-card:nth-child(2) { animation-delay: 0.2s; }
    .value-card:nth-child(3) { animation-delay: 0.3s; }
    .value-card:nth-child(4) { animation-delay: 0.4s; }
    .value-card:nth-child(5) { animation-delay: 0.5s; }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .values-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }

    @media (max-width: 992px) {
        .values-hero h1 {
            font-size: 42px !important;
        }

        .values-hero p {
            font-size: 20px !important;
        }

        .values-grid {
            grid-template-columns: 1fr !important;
        }

        .implementation-grid {
            grid-template-columns: 1fr !important;
            gap: 30px !important;
        }
    }

    @media (max-width: 768px) {
        .values-hero h1 {
            font-size: 36px !important;
        }

        .values-hero p {
            font-size: 18px !important;
        }

        .value-card {
            padding: 30px 25px !important;
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
            justify-content: center;
        }
    }

    @media (max-width: 576px) {
        section {
            padding: 60px 0 !important;
        }

        .value-card {
            padding: 25px 20px !important;
        }

        .value-icon {
            width: 60px !important;
            height: 60px !important;
            font-size: 24px !important;
        }

        .values-hero h1 {
            font-size: 32px !important;
        }
    }
</style>

@endsection
