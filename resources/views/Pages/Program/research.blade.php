@extends('welcome')

@section('title', 'Research & Publications - MTAWADA Programs')

@section('content')
<!-- Hero Section -->
<section class="research-hero" style="margin-top: 90px; position: relative; overflow: hidden; background: linear-gradient(135deg, #1a237e 0%, #283593 100%);">
    <div class="hero-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        <div class="bg-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6); z-index: 1;"></div>
        <div class="bg-image" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('/images/research-hero.jpg'); background-size: cover; background-position: center; z-index: 0; filter: grayscale(0.3);"></div>

        <!-- Animated scientific elements -->
        <div class="floating-data" style="position: absolute; top: 20%; left: 10%; font-size: 40px; opacity: 0.1; color: white; animation: float 20s infinite linear;">📊</div>
        <div class="floating-chart" style="position: absolute; bottom: 30%; right: 15%; font-size: 50px; opacity: 0.1; color: white; animation: float 25s infinite linear reverse;">📈</div>
        <div class="floating-book" style="position: absolute; top: 40%; right: 20%; font-size: 45px; opacity: 0.1; color: white; animation: float 18s infinite ease-in-out;">📚</div>
    </div>

    <div class="container" style="position: relative; z-index: 3; min-height: 500px; display: flex; align-items: center;">
        <div class="hero-content" style="max-width: 800px; padding: 100px 0;">
            <div style="display: inline-block; background: rgba(255, 152, 0, 0.2); color: #FF9800; padding: 8px 20px; border-radius: 20px; font-size: 14px; font-weight: 600; margin-bottom: 20px;">
                <i class="fas fa-microscope"></i> DATA-DRIVEN ADVOCACY
            </div>

            <h1 style="font-size: 56px; font-weight: 800; color: white; margin-bottom: 20px; line-height: 1.2; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);">
                Research & <span style="color: #FFC107;">Evidence</span> Building
            </h1>

            <p style="font-size: 24px; color: rgba(255, 255, 255, 0.9); margin-bottom: 30px; line-height: 1.6;">
                Generating knowledge, documenting realities, and building evidence to advance waste pickers' rights
            </p>

            <div class="hero-stats" style="display: flex; gap: 40px; flex-wrap: wrap; margin-top: 40px;">
                <div class="stat" style="text-align: center; background: rgba(255, 255, 255, 0.1); padding: 20px; border-radius: 15px; backdrop-filter: blur(10px);">
                    <div style="font-size: 36px; font-weight: 700; color: #FFC107; margin-bottom: 5px;">15+</div>
                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.9);">Research Studies</div>
                </div>
                <div class="stat" style="text-align: center; background: rgba(255, 255, 255, 0.1); padding: 20px; border-radius: 15px; backdrop-filter: blur(10px);">
                    <div style="font-size: 36px; font-weight: 700; color: #FFC107; margin-bottom: 5px;">850+</div>
                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.9);">Data Points Collected</div>
                </div>
                <div class="stat" style="text-align: center; background: rgba(255, 255, 255, 0.1); padding: 20px; border-radius: 15px; backdrop-filter: blur(10px);">
                    <div style="font-size: 36px; font-weight: 700; color: #FFC107; margin-bottom: 5px;">12</div>
                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.9);">Policy Briefs</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator" style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); color: white; z-index: 3; text-align: center;">
        <div style="font-size: 14px; letter-spacing: 2px; margin-bottom: 10px; opacity: 0.8;">EXPLORE RESEARCH</div>
        <i class="fas fa-chevron-down" style="font-size: 20px; animation: bounce 2s infinite;"></i>
    </div>
</section>

<!-- Research Approach -->
<section class="research-approach" style="padding: 100px 0; background: #F5F7FA;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #1a237e;">
                Our Research Methodology
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #1a237e, #5c6bc0); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                We employ participatory, community-based research methods that center waste pickers' voices and experiences
            </p>
        </div>

        <div class="methodology-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <!-- Method 1 -->
            <div class="method-card" style="background: white; border-radius: 15px; padding: 30px; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05); transition: all 0.3s ease; border-left: 4px solid #FF9800;">
                <div class="method-number" style="display: inline-block; background: #FF9800; color: white; width: 40px; height: 40px; border-radius: 50%; text-align: center; line-height: 40px; font-weight: 700; margin-bottom: 20px;">1</div>
                <h3 style="color: #1a237e; margin-bottom: 15px; font-size: 20px;">Participatory Action Research</h3>
                <p style="color: #666666; line-height: 1.6; font-size: 15px;">
                    Waste pickers are co-researchers in identifying problems, collecting data, and developing solutions.
                </p>
            </div>

            <!-- Method 2 -->
            <div class="method-card" style="background: white; border-radius: 15px; padding: 30px; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05); transition: all 0.3s ease; border-left: 4px solid #2196F3;">
                <div class="method-number" style="display: inline-block; background: #2196F3; color: white; width: 40px; height: 40px; border-radius: 50%; text-align: center; line-height: 40px; font-weight: 700; margin-bottom: 20px;">2</div>
                <h3 style="color: #1a237e; margin-bottom: 15px; font-size: 20px;">Mixed Methods Approach</h3>
                <p style="color: #666666; line-height: 1.6; font-size: 15px;">
                    Combining quantitative surveys with qualitative interviews, focus groups, and ethnographic observations.
                </p>
            </div>

            <!-- Method 3 -->
            <div class="method-card" style="background: white; border-radius: 15px; padding: 30px; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05); transition: all 0.3s ease; border-left: 4px solid #4CAF50;">
                <div class="method-number" style="display: inline-block; background: #4CAF50; color: white; width: 40px; height: 40px; border-radius: 50%; text-align: center; line-height: 40px; font-weight: 700; margin-bottom: 20px;">3</div>
                <h3 style="color: #1a237e; margin-bottom: 15px; font-size: 20px;">Longitudinal Studies</h3>
                <p style="color: #666666; line-height: 1.6; font-size: 15px;">
                    Tracking changes over time to understand trends, impacts, and the effectiveness of interventions.
                </p>
            </div>

            <!-- Method 4 -->
            <div class="method-card" style="background: white; border-radius: 15px; padding: 30px; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05); transition: all 0.3s ease; border-left: 4px solid #9C27B0;">
                <div class="method-number" style="display: inline-block; background: #9C27B0; color: white; width: 40px; height: 40px; border-radius: 50%; text-align: center; line-height: 40px; font-weight: 700; margin-bottom: 20px;">4</div>
                <h3 style="color: #1a237e; margin-bottom: 15px; font-size: 20px;">Policy Impact Analysis</h3>
                <p style="color: #666666; line-height: 1.6; font-size: 15px;">
                    Assessing how policies affect waste pickers and identifying opportunities for advocacy.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Studies -->
<section class="featured-studies" style="padding: 100px 0; background: white;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #1a237e;">
                Featured Research Studies
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #1a237e, #5c6bc0); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Groundbreaking research that has shaped policies and improved waste pickers' lives
            </p>
        </div>

        <div class="studies-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px;">
            <!-- Study 1 -->
            <div class="study-card" style="background: #F8FAFC; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); transition: all 0.4s ease;">
                <div class="study-header" style="background: linear-gradient(135deg, #FF9800 0%, #FFB74D 100%); padding: 30px; color: white;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                        <div>
                            <div style="font-size: 12px; opacity: 0.9; margin-bottom: 10px; letter-spacing: 1px;">PUBLISHED: 2023</div>
                            <h3 style="font-size: 22px; margin: 0; line-height: 1.3;">Economic Contributions of Waste Pickers in Dar es Salaam</h3>
                        </div>
                        <div style="font-size: 40px; opacity: 0.3;"><i class="fas fa-chart-line"></i></div>
                    </div>
                </div>

                <div class="study-content" style="padding: 30px;">
                    <p style="color: #666666; line-height: 1.6; margin-bottom: 25px;">
                        A comprehensive analysis of the economic value created by waste pickers through informal recycling in Dar es Salaam's urban economy.
                    </p>

                    <div class="study-metrics" style="display: flex; gap: 20px; margin-bottom: 25px;">
                        <div class="metric" style="text-align: center;">
                            <div style="font-size: 24px; font-weight: 700; color: #FF9800;">850</div>
                            <div style="font-size: 12px; color: #666666;">Participants</div>
                        </div>
                        <div class="metric" style="text-align: center;">
                            <div style="font-size: 24px; font-weight: 700; color: #FF9800;">12</div>
                            <div style="font-size: 12px; color: #666666;">Wards Covered</div>
                        </div>
                        <div class="metric" style="text-align: center;">
                            <div style="font-size: 24px; font-weight: 700; color: #FF9800;">6</div>
                            <div style="font-size: 12px; color: #666666;">Months</div>
                        </div>
                    </div>

                    <div class="study-tags" style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 25px;">
                        <span style="background: rgba(255, 152, 0, 0.1); color: #FF9800; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: 600;">Economic Analysis</span>
                        <span style="background: rgba(76, 175, 80, 0.1); color: #4CAF50; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: 600;">Circular Economy</span>
                        <span style="background: rgba(33, 150, 243, 0.1); color: #2196F3; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: 600;">Livelihoods</span>
                    </div>

                    <a href="#" class="study-link" style="display: inline-flex; align-items: center; gap: 10px; color: #1a237e; text-decoration: none; font-weight: 600; font-size: 15px;">
                        <i class="fas fa-download"></i> Download Full Report
                    </a>
                </div>
            </div>

            <!-- Study 2 -->
            <div class="study-card" style="background: #F8FAFC; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); transition: all 0.4s ease;">
                <div class="study-header" style="background: linear-gradient(135deg, #2196F3 0%, #64B5F6 100%); padding: 30px; color: white;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                        <div>
                            <div style="font-size: 12px; opacity: 0.9; margin-bottom: 10px; letter-spacing: 1px;">PUBLISHED: 2022</div>
                            <h3 style="font-size: 22px; margin: 0; line-height: 1.3;">Health & Safety Risks in Informal Waste Collection</h3>
                        </div>
                        <div style="font-size: 40px; opacity: 0.3;"><i class="fas fa-shield-alt"></i></div>
                    </div>
                </div>

                <div class="study-content" style="padding: 30px;">
                    <p style="color: #666666; line-height: 1.6; margin-bottom: 25px;">
                        An investigation into occupational hazards, health impacts, and safety challenges faced by waste pickers in Dar es Salaam.
                    </p>

                    <div class="study-metrics" style="display: flex; gap: 20px; margin-bottom: 25px;">
                        <div class="metric" style="text-align: center;">
                            <div style="font-size: 24px; font-weight: 700; color: #2196F3;">650</div>
                            <div style="font-size: 12px; color: #666666;">Health Surveys</div>
                        </div>
                        <div class="metric" style="text-align: center;">
                            <div style="font-size: 24px; font-weight: 700; color: #2196F3;">15</div>
                            <div style="font-size: 12px; color: #666666;">Risk Factors</div>
                        </div>
                        <div class="metric" style="text-align: center;">
                            <div style="font-size: 24px; font-weight: 700; color: #2196F3;">8</div>
                            <div style="font-size: 12px; color: #666666;">Months</div>
                        </div>
                    </div>

                    <div class="study-tags" style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 25px;">
                        <span style="background: rgba(244, 67, 54, 0.1); color: #F44336; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: 600;">Health & Safety</span>
                        <span style="background: rgba(156, 39, 176, 0.1); color: #9C27B0; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: 600;">Occupational Health</span>
                        <span style="background: rgba(33, 150, 243, 0.1); color: #2196F3; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: 600;">Risk Assessment</span>
                    </div>

                    <a href="#" class="study-link" style="display: inline-flex; align-items: center; gap: 10px; color: #1a237e; text-decoration: none; font-weight: 600; font-size: 15px;">
                        <i class="fas fa-download"></i> Download Full Report
                    </a>
                </div>
            </div>

            <!-- Study 3 -->
            <div class="study-card" style="background: #F8FAFC; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); transition: all 0.4s ease;">
                <div class="study-header" style="background: linear-gradient(135deg, #4CAF50 0%, #81C784 100%); padding: 30px; color: white;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                        <div>
                            <div style="font-size: 12px; opacity: 0.9; margin-bottom: 10px; letter-spacing: 1px;">PUBLISHED: 2021</div>
                            <h3 style="font-size: 22px; margin: 0; line-height: 1.3;">Gender Dynamics in Waste Picking Communities</h3>
                        </div>
                        <div style="font-size: 40px; opacity: 0.3;"><i class="fas fa-venus-mars"></i></div>
                    </div>
                </div>

                <div class="study-content" style="padding: 30px;">
                    <p style="color: #666666; line-height: 1.6; margin-bottom: 25px;">
                        Exploring gender roles, inequalities, and empowerment strategies within waste picking communities in Dar es Salaam.
                    </p>

                    <div class="study-metrics" style="display: flex; gap: 20px; margin-bottom: 25px;">
                        <div class="metric" style="text-align: center;">
                            <div style="font-size: 24px; font-weight: 700; color: #4CAF50;">42%</div>
                            <div style="font-size: 12px; color: #666666;">Women Participants</div>
                        </div>
                        <div class="metric" style="text-align: center;">
                            <div style="font-size: 24px; font-weight: 700; color: #4CAF50;">24</div>
                            <div style="font-size: 12px; color: #666666;">Focus Groups</div>
                        </div>
                        <div class="metric" style="text-align: center;">
                            <div style="font-size: 24px; font-weight: 700; color: #4CAF50;">10</div>
                            <div style="font-size: 12px; color: #666666;">Months</div>
                        </div>
                    </div>

                    <div class="study-tags" style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 25px;">
                        <span style="background: rgba(233, 30, 99, 0.1); color: #E91E63; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: 600;">Gender Studies</span>
                        <span style="background: rgba(76, 175, 80, 0.1); color: #4CAF50; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: 600;">Social Equity</span>
                        <span style="background: rgba(255, 152, 0, 0.1); color: #FF9800; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: 600;">Empowerment</span>
                    </div>

                    <a href="#" class="study-link" style="display: inline-flex; align-items: center; gap: 10px; color: #1a237e; text-decoration: none; font-weight: 600; font-size: 15px;">
                        <i class="fas fa-download"></i> Download Full Report
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Publications Library -->
<section class="publications-library" style="padding: 100px 0; background: #F5F7FA;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #1a237e;">
                Publications Library
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #1a237e, #5c6bc0); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Access our complete collection of research papers, policy briefs, and advocacy materials
            </p>
        </div>

        <div class="publications-filter" style="display: flex; justify-content: center; gap: 15px; margin-bottom: 40px; flex-wrap: wrap;">
            <button class="filter-btn active" style="background: #1a237e; color: white; border: none; padding: 10px 25px; border-radius: 25px; font-weight: 600; cursor: pointer; transition: all 0.3s;">All Publications</button>
            <button class="filter-btn" style="background: white; color: #666; border: 2px solid #ddd; padding: 10px 25px; border-radius: 25px; font-weight: 600; cursor: pointer; transition: all 0.3s;">Research Papers</button>
            <button class="filter-btn" style="background: white; color: #666; border: 2px solid #ddd; padding: 10px 25px; border-radius: 25px; font-weight: 600; cursor: pointer; transition: all 0.3s;">Policy Briefs</button>
            <button class="filter-btn" style="background: white; color: #666; border: 2px solid #ddd; padding: 10px 25px; border-radius: 25px; font-weight: 600; cursor: pointer; transition: all 0.3s;">Case Studies</button>
            <button class="filter-btn" style="background: white; color: #666; border: 2px solid #ddd; padding: 10px 25px; border-radius: 25px; font-weight: 600; cursor: pointer; transition: all 0.3s;">Annual Reports</button>
        </div>

        <div class="publications-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
            <!-- Publication 1 -->
            <div class="publication-card" style="background: white; border-radius: 15px; padding: 25px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;">
                <div class="pub-type" style="display: flex; align-items: center; gap: 10px; margin-bottom: 15px;">
                    <span style="background: #FF9800; color: white; padding: 3px 12px; border-radius: 15px; font-size: 11px; font-weight: 600;">POLICY BRIEF</span>
                    <span style="font-size: 12px; color: #999;">2023</span>
                </div>
                <h3 style="color: #1a237e; margin-bottom: 15px; font-size: 18px; line-height: 1.4;">Integrating Waste Pickers into Dar es Salaam's Solid Waste Management</h3>
                <p style="color: #666; font-size: 14px; line-height: 1.6; margin-bottom: 20px;">
                    Policy recommendations for formal recognition and integration of waste pickers in municipal waste management systems.
                </p>
                <div class="pub-footer" style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
                    <span style="color: #1a237e; font-size: 14px; font-weight: 600;">
                        <i class="fas fa-file-pdf" style="margin-right: 5px;"></i> PDF, 2.4 MB
                    </span>
                    <a href="#" style="color: #1a237e; text-decoration: none; font-weight: 600; font-size: 14px;">
                        Download <i class="fas fa-arrow-right" style="margin-left: 5px;"></i>
                    </a>
                </div>
            </div>

            <!-- Publication 2 -->
            <div class="publication-card" style="background: white; border-radius: 15px; padding: 25px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;">
                <div class="pub-type" style="display: flex; align-items: center; gap: 10px; margin-bottom: 15px;">
                    <span style="background: #2196F3; color: white; padding: 3px 12px; border-radius: 15px; font-size: 11px; font-weight: 600;">RESEARCH PAPER</span>
                    <span style="font-size: 12px; color: #999;">2022</span>
                </div>
                <h3 style="color: #1a237e; margin-bottom: 15px; font-size: 18px; line-height: 1.4;">Social Protection for Informal Waste Workers: A Comparative Study</h3>
                <p style="color: #666; font-size: 14px; line-height: 1.6; margin-bottom: 20px;">
                    Examining social protection models for informal waste workers across East Africa and implications for Tanzania.
                </p>
                <div class="pub-footer" style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
                    <span style="color: #1a237e; font-size: 14px; font-weight: 600;">
                        <i class="fas fa-file-pdf" style="margin-right: 5px;"></i> PDF, 3.1 MB
                    </span>
                    <a href="#" style="color: #1a237e; text-decoration: none; font-weight: 600; font-size: 14px;">
                        Download <i class="fas fa-arrow-right" style="margin-left: 5px;"></i>
                    </a>
                </div>
            </div>

            <!-- Publication 3 -->
            <div class="publication-card" style="background: white; border-radius: 15px; padding: 25px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;">
                <div class="pub-type" style="display: flex; align-items: center; gap: 10px; margin-bottom: 15px;">
                    <span style="background: #4CAF50; color: white; padding: 3px 12px; border-radius: 15px; font-size: 11px; font-weight: 600;">CASE STUDY</span>
                    <span style="font-size: 12px; color: #999;">2022</span>
                </div>
                <h3 style="color: #1a237e; margin-bottom: 15px; font-size: 18px; line-height: 1.4;">Successful Cooperative Models in Waste Management</h3>
                <p style="color: #666; font-size: 14px; line-height: 1.6; margin-bottom: 20px;">
                    Case studies of successful waste picker cooperatives in Brazil, India, and South Africa with lessons for Tanzania.
                </p>
                <div class="pub-footer" style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
                    <span style="color: #1a237e; font-size: 14px; font-weight: 600;">
                        <i class="fas fa-file-pdf" style="margin-right: 5px;"></i> PDF, 1.8 MB
                    </span>
                    <a href="#" style="color: #1a237e; text-decoration: none; font-weight: 600; font-size: 14px;">
                        Download <i class="fas fa-arrow-right" style="margin-left: 5px;"></i>
                    </a>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 50px;">
            <a href="#" class="view-all-btn" style="display: inline-flex; align-items: center; gap: 10px; background: white; color: #1a237e; padding: 15px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; border: 2px solid #1a237e; transition: all 0.3s;">
                <i class="fas fa-book-open"></i> View All Publications
            </a>
        </div>
    </div>
</section>

<!-- Research Impact -->
<section class="research-impact" style="padding: 100px 0; background: white;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #1a237e;">
                Research Impact
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #1a237e, #5c6bc0); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                How our research is making a difference in policy, practice, and people's lives
            </p>
        </div>

        <div class="impact-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; margin-bottom: 60px;">
            <div class="impact-stat" style="text-align: center;">
                <div style="font-size: 48px; font-weight: 800; color: #1a237e; margin-bottom: 10px;">3</div>
                <div style="font-size: 16px; color: #666;">Policy Changes Influenced</div>
            </div>
            <div class="impact-stat" style="text-align: center;">
                <div style="font-size: 48px; font-weight: 800; color: #1a237e; margin-bottom: 10px;">15+</div>
                <div style="font-size: 16px; color: #666;">Media Features</div>
            </div>
            <div class="impact-stat" style="text-align: center;">
                <div style="font-size: 48px; font-weight: 800; color: #1a237e; margin-bottom: 10px;">850+</div>
                <div style="font-size: 16px; color: #666;">Lives Directly Impacted</div>
            </div>
            <div class="impact-stat" style="text-align: center;">
                <div style="font-size: 48px; font-weight: 800; color: #1a237e; margin-bottom: 10px;">6</div>
                <div style="font-size: 16px; color: #666;">Academic Citations</div>
            </div>
        </div>

        <div class="impact-stories" style="background: #F8FAFC; border-radius: 20px; padding: 50px; margin-top: 40px;">
            <h3 style="color: #1a237e; margin-bottom: 30px; font-size: 24px; text-align: center;">Success Stories</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <div class="story" style="background: white; padding: 25px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                    <div style="color: #FF9800; font-size: 40px; margin-bottom: 15px;">🎯</div>
                    <h4 style="color: #1a237e; margin-bottom: 10px; font-size: 18px;">Policy Influence</h4>
                    <p style="color: #666; font-size: 14px; line-height: 1.6;">
                        Our 2021 economic analysis study directly influenced Dar es Salaam City Council's decision to include waste pickers in the 2023 Solid Waste Management Strategy.
                    </p>
                </div>
                <div class="story" style="background: white; padding: 25px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                    <div style="color: #4CAF50; font-size: 40px; margin-bottom: 15px;">👥</div>
                    <h4 style="color: #1a237e; margin-bottom: 10px; font-size: 18px;">Community Empowerment</h4>
                    <p style="color: #666; font-size: 14px; line-height: 1.6;">
                        Health and safety research led to the distribution of 500+ personal protective equipment kits and training for waste pickers across 8 municipalities.
                    </p>
                </div>
                <div class="story" style="background: white; padding: 25px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                    <div style="color: #2196F3; font-size: 40px; margin-bottom: 15px;">🤝</div>
                    <h4 style="color: #1a237e; margin-bottom: 10px; font-size: 18px;">Partnership Building</h4>
                    <p style="color: #666; font-size: 14px; line-height: 1.6;">
                        Research findings facilitated partnerships with 3 international NGOs and 2 academic institutions for collaborative projects.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="research-cta" style="padding: 120px 0; background: linear-gradient(135deg, #1a237e 0%, #283593 100%);">
    <div class="container">
        <div class="cta-content" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <div style="background: rgba(255, 255, 255, 0.1); display: inline-block; padding: 15px 30px; border-radius: 30px; margin-bottom: 30px;">
                <i class="fas fa-hands-helping" style="color: #FFC107; margin-right: 10px;"></i>
                <span style="color: white; font-weight: 600;">RESEARCH PARTNERSHIPS</span>
            </div>

            <h2 style="font-size: 42px; color: white; margin-bottom: 20px; font-weight: 800;">
                Collaborate With Our Research Team
            </h2>

            <p style="font-size: 18px; color: rgba(255, 255, 255, 0.9); margin-bottom: 40px; line-height: 1.7;">
                Interested in partnering on research, accessing our data, or commissioning a study? We welcome collaborations with academic institutions, NGOs, and policymakers.
            </p>

            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="/contact" class="btn-primary" style="background: #FFC107; color: #1a237e; padding: 16px 40px; border-radius: 30px; text-decoration: none; font-weight: 700; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s; border: none;">
                    <i class="fas fa-handshake"></i> Partner With Us
                </a>
                <a href="/data-request" class="btn-secondary" style="background: transparent; color: white; padding: 16px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; border: 2px solid white; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s;">
                    <i class="fas fa-database"></i> Request Data Access
                </a>
                <a href="mailto:research@mtawada.org" class="btn-tertiary" style="background: rgba(255, 255, 255, 0.1); color: white; padding: 16px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s;">
                    <i class="fas fa-envelope"></i> Contact Research Team
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    /* Animations */
    @keyframes float {
        0% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(5deg); }
        100% { transform: translateY(0px) rotate(0deg); }
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
    .research-hero {
        animation: fadeInUp 1s ease-out;
    }

    /* Card Hover Effects */
    .method-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
    }

    .study-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
    }

    .publication-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
    }

    /* Button Hover Effects */
    .btn-primary:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 15px 30px rgba(255, 193, 7, 0.4);
        background: #FFB300 !important;
    }

    .btn-secondary:hover {
        background: white !important;
        color: #1a237e !important;
        transform: translateY(-3px);
    }

    .btn-tertiary:hover {
        background: rgba(255, 255, 255, 0.2) !important;
        transform: translateY(-3px);
    }

    .view-all-btn:hover {
        background: #1a237e !important;
        color: white !important;
        transform: translateY(-3px);
    }

    .study-link:hover {
        color: #FF9800 !important;
        gap: 15px !important;
    }

    /* Filter Button Active State */
    .filter-btn.active {
        box-shadow: 0 5px 15px rgba(26, 35, 126, 0.3);
    }

    .filter-btn:not(.active):hover {
        background: #f5f5f5 !important;
        transform: translateY(-2px);
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .studies-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }

    @media (max-width: 992px) {
        .research-hero h1 {
            font-size: 42px !important;
        }

        .research-hero p {
            font-size: 20px !important;
        }

        .studies-grid {
            grid-template-columns: 1fr !important;
        }

        .methodology-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        .impact-stats {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }

    @media (max-width: 768px) {
        .research-hero h1 {
            font-size: 36px !important;
        }

        .research-hero p {
            font-size: 18px !important;
        }

        .section-header h2 {
            font-size: 36px !important;
        }

        .methodology-grid {
            grid-template-columns: 1fr !important;
        }

        .publications-filter {
            gap: 10px !important;
        }

        .filter-btn {
            padding: 8px 20px !important;
            font-size: 14px;
        }

        .cta-content .btn-primary,
        .cta-content .btn-secondary,
        .cta-content .btn-tertiary {
            width: 100%;
            justify-content: center;
        }

        .hero-stats {
            justify-content: center;
            gap: 20px !important;
        }

        .stat {
            padding: 15px !important;
        }
    }

    @media (max-width: 576px) {
        section {
            padding: 60px 0 !important;
        }

        .research-hero h1 {
            font-size: 28px !important;
        }

        .impact-stats {
            grid-template-columns: 1fr !important;
        }

        .impact-stat {
            margin-bottom: 20px;
        }

        .impact-stories {
            padding: 30px 20px !important;
        }

        .publications-grid {
            grid-template-columns: 1fr !important;
        }
    }

    /* Print Styles */
    @media print {
        .research-hero {
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

        .btn-primary,
        .btn-secondary,
        .btn-tertiary {
            display: none !important;
        }

        .floating-data,
        .floating-chart,
        .floating-book {
            display: none !important;
        }
    }
</style>

<script>
    // Filter functionality for publications
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));

                // Add active class to clicked button
                this.classList.add('active');

                // Get filter value
                const filterValue = this.textContent.trim();

                // Filter publications (this would be connected to actual data in a real implementation)
                console.log(`Filtering by: ${filterValue}`);
                // Implement actual filtering logic here
            });
        });

        // Study card hover effects
        const studyCards = document.querySelectorAll('.study-card');
        studyCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-15px)';
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
