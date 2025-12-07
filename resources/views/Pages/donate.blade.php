@extends('welcome')

@section('title', 'Donate - Support Waste Pickers | MTAWADA')

@section('content')
<!-- Hero Section -->
<section class="donate-hero" style="margin-top: 90px; position: relative; overflow: hidden;">
    <div class="hero-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        <div class="bg-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(46, 125, 50, 0.4), rgba(76, 175, 80, 0.3)); z-index: 1;"></div>
        <div class="bg-image" style="position: absolute; top: 0; left: 0; width: 100%; height: 160%; background-image: url('/images/Education5.jpg'); background-size: cover; background-position: center; z-index: 0; animation: zoomEffect 20s infinite alternate;"></div>
    </div>

    <!-- Floating Elements -->
    <div class="floating-element" style="position: absolute; top: 20%; left: 15%; font-size: 60px; opacity: 0.15; color: white; animation: float 15s infinite ease-in-out; z-index: 2;">💚</div>
    <div class="floating-element" style="position: absolute; bottom: 30%; right: 10%; font-size: 50px; opacity: 0.15; color: white; animation: float 20s infinite ease-in-out reverse; z-index: 2;">🤝</div>

    <div class="container" style="position: relative; z-index: 3; min-height: 500px; display: flex; align-items: center;">
        <div class="hero-content" style="max-width: 800px; padding: 100px 0;">
            <h1 style="font-size: 56px; font-weight: 800; color: white; margin-bottom: 20px; line-height: 1.2; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);">
                Support <span style="color: #FFC107;">Waste Pickers</span> &
                <span style="color: #FFC107;">Environmental Justice</span>
            </h1>
            <p style="font-size: 24px; color: rgba(255, 255, 255, 0.95); margin-bottom: 30px; line-height: 1.6;">
                Your donation helps waste pickers in Dar es Salaam fight for recognition, rights, and a cleaner environment
            </p>

        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator" style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); color: white; z-index: 3; text-align: center;">
        <div style="font-size: 14px; letter-spacing: 2px; margin-bottom: 10px; opacity: 0.9;">SCROLL TO DONATE</div>
        <i class="fas fa-chevron-down" style="font-size: 20px; animation: bounce 2s infinite;"></i>
    </div>
</section>

<!-- Impact Stories -->
<section class="impact-stories" style="padding: 100px 0; background: white;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #2E7D32;">
                Your Donation Makes a Difference
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #2E7D32, #4CAF50); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Every contribution supports our work in these critical areas
            </p>
        </div>

        <div class="impact-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <div class="impact-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-top: 4px solid #2E7D32;">
                <div class="impact-icon" style="width: 80px; height: 80px; background: rgba(46, 125, 50, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: #2E7D32; font-size: 36px;">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 style="color: #2E7D32; margin-bottom: 15px; font-size: 22px; text-align: center;">Rights Protection</h3>
                <p style="color: #666666; line-height: 1.7; text-align: center;">
                    Funding legal advocacy to protect waste pickers from exploitation and ensure fair treatment
                </p>

            </div>

            <div class="impact-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-top: 4px solid #4CAF50;">
                <div class="impact-icon" style="width: 80px; height: 80px; background: rgba(76, 175, 80, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: #4CAF50; font-size: 36px;">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3 style="color: #4CAF50; margin-bottom: 15px; font-size: 22px; text-align: center;">Education & Training</h3>
                <p style="color: #666666; line-height: 1.7; text-align: center;">
                    Providing workshops on safety, rights, and sustainable waste management practices
                </p>

            </div>

            <div class="impact-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-top: 4px solid #FF9800;">
                <div class="impact-icon" style="width: 80px; height: 80px; background: rgba(255, 152, 0, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: #FF9800; font-size: 36px;">
                    <i class="fas fa-tools"></i>
                </div>
                <h3 style="color: #FF9800; margin-bottom: 15px; font-size: 22px; text-align: center;">Equipment & Safety Gear</h3>
                <p style="color: #666666; line-height: 1.7; text-align: center;">
                    Providing gloves, boots, protective clothing, and collection tools for safe work
                </p>

            </div>
        </div>
    </div>
</section>

<!-- Donation Options -->
<section class="donation-options" style="padding: 100px 0; background: #F8FAFC;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #2E7D32;">
                Choose Your Donation Method
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #2E7D32, #4CAF50); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Support MTAWADA through bank transfer, mobile money, or international transfer
            </p>
        </div>

        <div class="donation-tabs" style="max-width: 1000px; margin: 0 auto;">
            <!-- Tab Navigation -->
            <div class="tab-nav" style="display: flex; justify-content: center; margin-bottom: 40px; flex-wrap: wrap; gap: 10px;">
                <button class="tab-btn active" data-tab="bank-transfer" style="background: #2E7D32; color: white; border: none; padding: 15px 30px; border-radius: 30px; font-weight: 600; cursor: pointer; transition: all 0.3s;">
                    <i class="fas fa-university"></i> Bank Transfer
                </button>
                <button class="tab-btn" data-tab="mobile-money" style="background: #4CAF50; color: white; border: none; padding: 15px 30px; border-radius: 30px; font-weight: 600; cursor: pointer; transition: all 0.3s;">
                    <i class="fas fa-mobile-alt"></i> Mobile Money
                </button>
                <button class="tab-btn" data-tab="international" style="background: #FF9800; color: white; border: none; padding: 15px 30px; border-radius: 30px; font-weight: 600; cursor: pointer; transition: all 0.3s;">
                    <i class="fas fa-globe"></i> International Transfer
                </button>
            </div>

            <!-- Tab Contents -->
            <div class="tab-content active" id="bank-transfer" style="background: white; border-radius: 20px; padding: 50px; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);">
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 40px;">
                    <div style="width: 80px; height: 80px; background: rgba(46, 125, 50, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #2E7D32; font-size: 36px;">
                        <i class="fas fa-university"></i>
                    </div>
                    <div>
                        <h3 style="color: #2E7D32; font-size: 28px; margin-bottom: 10px;">Bank Transfer Details</h3>
                        <p style="color: #666666;">Transfer directly to MTAWADA's official bank account</p>
                    </div>
                </div>

                <div class="bank-details" style="background: #F8FAFC; border-radius: 15px; padding: 40px;">
                    <div class="detail-row" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-bottom: 30px;">
                        <div>
                            <h4 style="color: #2E7D32; margin-bottom: 10px; font-size: 16px;">Account Name</h4>
                            <div style="background: white; padding: 15px; border-radius: 10px; border: 1px solid #E8F5E9;">
                                <p style="color: #333333; font-size: 18px; font-weight: 600; margin: 0;">Mtandao wa Waokota Taka Rejeshi Dar es Salaam (MTAWADA)</p>
                            </div>
                        </div>
                        <div>
                            <h4 style="color: #2E7D32; margin-bottom: 10px; font-size: 16px;">Bank Name</h4>
                            <div style="background: white; padding: 15px; border-radius: 10px; border: 1px solid #E8F5E9;">
                                <p style="color: #333333; font-size: 18px; font-weight: 600; margin: 0;">CRDB Bank PLC</p>
                            </div>
                        </div>
                    </div>

                    <div class="detail-row" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-bottom: 30px;">
                        <div>
                            <h4 style="color: #2E7D32; margin-bottom: 10px; font-size: 16px;">Account Number</h4>
                            <div style="background: white; padding: 15px; border-radius: 10px; border: 1px solid #E8F5E9;">
                                <p style="color: #333333; font-size: 24px; font-weight: 700; margin: 0; letter-spacing: 2px;">0151036714800</p>
                            </div>
                        </div>
                        <div>
                            <h4 style="color: #2E7D32; margin-bottom: 10px; font-size: 16px;">SWIFT Code</h4>
                            <div style="background: white; padding: 15px; border-radius: 10px; border: 1px solid #E8F5E9;">
                                <p style="color: #333333; font-size: 18px; font-weight: 600; margin: 0;">CORUTZTZ</p>
                            </div>
                        </div>
                    </div>

                    <div class="detail-row" style="display: grid; grid-template-columns: 1fr; gap: 30px;">
                        <div>
                            <h4 style="color: #2E7D32; margin-bottom: 10px; font-size: 16px;">Bank Branch</h4>
                            <div style="background: white; padding: 15px; border-radius: 10px; border: 1px solid #E8F5E9;">
                                <p style="color: #333333; font-size: 18px; font-weight: 600; margin: 0;">Ubungo Branch, Dar es Salaam, Tanzania</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="mobile-money" style="background: white; border-radius: 20px; padding: 50px; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1); display: none;">
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 40px;">
                    <div style="width: 80px; height: 80px; background: rgba(76, 175, 80, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #4CAF50; font-size: 36px;">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div>
                        <h3 style="color: #4CAF50; font-size: 28px; margin-bottom: 10px;">Mobile Money Payment</h3>
                        <p style="color: #666666;">Quick and secure donation via mobile money services</p>
                    </div>
                </div>

                <div class="mobile-money-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                    <div class="mobile-option" style="background: #F8FAFC; border-radius: 15px; padding: 30px; border: 2px solid #E8F5E9;">
                        <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                            <div style="width: 60px; height: 60px; background: #FF5722; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px;">
                                T
                            </div>
                            <div>
                                <h4 style="color: #2E7D32; margin-bottom: 5px; font-size: 20px;">Tigo Pesa</h4>
                                <p style="color: #666666; font-size: 14px;">Send to our registered number</p>
                            </div>
                        </div>
                        <div style="background: white; padding: 15px; border-radius: 10px; text-align: center;">
                            <p style="color: #333333; font-size: 24px; font-weight: 700; margin: 0; letter-spacing: 1px;">+255 793 543 206</p>
                            <p style="color: #666666; font-size: 14px; margin-top: 5px;">Registered to MTAWADA</p>
                        </div>
                    </div>

                    <div class="mobile-option" style="background: #F8FAFC; border-radius: 15px; padding: 30px; border: 2px solid #E8F5E9;">
                        <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                            <div style="width: 60px; height: 60px; background: #FFC107; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #333333; font-size: 24px; font-weight: bold;">
                                M
                            </div>
                            <div>
                                <h4 style="color: #2E7D32; margin-bottom: 5px; font-size: 20px;">M-Pesa</h4>
                                <p style="color: #666666; font-size: 14px;">Vodacom M-Pesa service</p>
                            </div>
                        </div>
                        <div style="background: white; padding: 15px; border-radius: 10px; text-align: center;">
                            <p style="color: #333333; font-size: 24px; font-weight: 700; margin: 0; letter-spacing: 1px;">+255 793 543 206</p>
                            <p style="color: #666666; font-size: 14px; margin-top: 5px;">Registered to MTAWADA</p>
                        </div>
                    </div>

                    <div class="mobile-option" style="background: #F8FAFC; border-radius: 15px; padding: 30px; border: 2px solid #E8F5E9;">
                        <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                            <div style="width: 60px; height: 60px; background: #2196F3; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px;">
                                A
                            </div>
                            <div>
                                <h4 style="color: #2E7D32; margin-bottom: 5px; font-size: 20px;">Airtel Money</h4>
                                <p style="color: #666666; font-size: 14px;">Airtel mobile money service</p>
                            </div>
                        </div>
                        <div style="background: white; padding: 15px; border-radius: 10px; text-align: center;">
                            <p style="color: #333333; font-size: 24px; font-weight: 700; margin: 0; letter-spacing: 1px;">+255 793 543 206</p>
                            <p style="color: #666666; font-size: 14px; margin-top: 5px;">Registered to MTAWADA</p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="tab-content" id="international" style="background: white; border-radius: 20px; padding: 50px; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1); display: none;">
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 40px;">
                    <div style="width: 80px; height: 80px; background: rgba(255, 152, 0, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #FF9800; font-size: 36px;">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div>
                        <h3 style="color: #FF9800; font-size: 28px; margin-bottom: 10px;">International Donations</h3>
                        <p style="color: #666666;">Support MTAWADA from anywhere in the world</p>
                    </div>
                </div>

                <div style="background: #F8FAFC; border-radius: 15px; padding: 40px;">
                    <h4 style="color: #2E7D32; margin-bottom: 20px; font-size: 22px;">For International Wire Transfers:</h4>

                    <div class="transfer-details" style="background: white; border-radius: 10px; padding: 30px; margin-bottom: 30px;">
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                            <div>
                                <h5 style="color: #666666; margin-bottom: 8px; font-size: 14px;">BENEFICIARY NAME</h5>
                                <p style="color: #333333; font-size: 18px; font-weight: 600; margin: 0;">Mtandao wa Waokota Taka Rejeshi Dar es Salaam (MTAWADA)</p>
                            </div>
                            <div>
                                <h5 style="color: #666666; margin-bottom: 8px; font-size: 14px;">BENEFICIARY ACCOUNT</h5>
                                <p style="color: #333333; font-size: 18px; font-weight: 600; margin: 0;">0151036714800</p>
                            </div>
                        </div>

                        <div style="height: 1px; background: #E8F5E9; margin: 25px 0;"></div>

                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                            <div>
                                <h5 style="color: #666666; margin-bottom: 8px; font-size: 14px;">BANK NAME</h5>
                                <p style="color: #333333; font-size: 18px; font-weight: 600; margin: 0;">CRDB Bank PLC</p>
                            </div>
                            <div>
                                <h5 style="color: #666666; margin-bottom: 8px; font-size: 14px;">SWIFT/BIC CODE</h5>
                                <p style="color: #333333; font-size: 18px; font-weight: 600; margin: 0;">CORUTZTZ</p>
                            </div>
                        </div>

                        <div style="height: 1px; background: #E8F5E9; margin: 25px 0;"></div>

                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                            <div>
                                <h5 style="color: #666666; margin-bottom: 8px; font-size: 14px;">BANK ADDRESS</h5>
                                <p style="color: #333333; font-size: 16px; margin: 0;">Ubungo Branch, Sam Nujoma Road,<br>Dar es Salaam, Tanzania</p>
                            </div>
                            <div>
                                <h5 style="color: #666666; margin-bottom: 8px; font-size: 14px;">CURRENCY</h5>
                                <p style="color: #333333; font-size: 18px; font-weight: 600; margin: 0;">Tanzanian Shillings (TZS) or US Dollars (USD)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Final CTA -->
<section class="donate-cta" style="padding: 120px 0; background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%); position: relative; overflow: hidden;">
    <div class="floating-element" style="position: absolute; top: 20%; left: 5%; font-size: 60px; opacity: 0.1; color: white; animation: float 20s infinite ease-in-out;">🌍</div>
    <div class="floating-element" style="position: absolute; bottom: 30%; right: 5%; font-size: 60px; opacity: 0.1; color: white; animation: float 25s infinite ease-in-out reverse;">🤝</div>

    <div class="container">
        <div class="cta-content" style="text-align: center; max-width: 800px; margin: 0 auto; position: relative; z-index: 2;">
            <h2 style="font-size: 42px; color: white; margin-bottom: 20px; font-weight: 800;">Ready to Make an Impact?</h2>
            <p style="font-size: 18px; color: rgba(255, 255, 255, 0.95); margin-bottom: 40px; line-height: 1.7;">
                Your donation directly supports waste pickers in Dar es Salaam, helping them gain recognition, protection, and fair treatment while contributing to environmental sustainability.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="#bank-transfer" class="btn-primary donate-scroll" style="background: #FFC107; color: #333333; padding: 18px 45px; border-radius: 30px; text-decoration: none; font-weight: 700; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s; border: none; font-size: 16px;">
                    <i class="fas fa-donate"></i> Donate Now
                </a>
                <a href="{{ route('mtawada.contact') }}" class="btn-secondary" style="background: transparent; color: white; padding: 18px 45px; border-radius: 30px; text-decoration: none; font-weight: 700; border: 2px solid white; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s; font-size: 16px;">
                    <i class="fas fa-question-circle"></i> Questions?
                </a>
            </div>

            <div style="margin-top: 50px; padding-top: 50px; border-top: 1px solid rgba(255, 255, 255, 0.2);">
                <div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">
                    <div style="text-align: center;">
                        <div style="font-size: 36px; font-weight: 800; color: #FFC107; margin-bottom: 5px;">Registered</div>
                        <div style="color: rgba(255, 255, 255, 0.9); font-size: 14px;">Ministry of Home Affairs</div>
                    </div>
                    <div style="text-align: center;">
                        <div style="font-size: 36px; font-weight: 800; color: #FFC107; margin-bottom: 5px;">Transparent</div>
                        <div style="color: rgba(255, 255, 255, 0.9); font-size: 14px;">Financial Reporting</div>
                    </div>
                    <div style="text-align: center;">
                        <div style="font-size: 36px; font-weight: 800; color: #FFC107; margin-bottom: 5px;">Accountable</div>
                        <div style="color: rgba(255, 255, 255, 0.9); font-size: 14px;">To Our Members</div>
                    </div>
                </div>
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

    /* Tab Active State */
    .tab-btn.active {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2) !important;
    }

    /* Card Hover Effects */
    .impact-card:hover, .promise-card:hover {
        transform: translateY(-10px);
        transition: transform 0.3s ease;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15) !important;
    }

    .amount-btn:hover {
        background: #E8F5E9 !important;
        border-color: #2E7D32 !important;
        transform: translateY(-5px);
    }

    .mobile-option:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease;
    }

    /* Button Hover Effects */
    .btn-primary:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 15px 35px rgba(255, 193, 7, 0.4) !important;
        background: #FFB300 !important;
    }

    .btn-secondary:hover {
        background: white !important;
        color: #2E7D32 !important;
        transform: translateY(-3px);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .impact-grid, .promise-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        .amount-options {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }

    @media (max-width: 768px) {
        .donate-hero h1 {
            font-size: 42px !important;
        }

        .donate-hero p {
            font-size: 20px !important;
        }

        .tab-nav {
            flex-direction: column;
            align-items: center;
        }

        .tab-btn {
            width: 100%;
            max-width: 300px;
        }

        .bank-details, .transfer-details {
            padding: 20px !important;
        }

        .impact-grid, .promise-grid {
            grid-template-columns: 1fr !important;
        }

        .mobile-money-grid {
            grid-template-columns: 1fr !important;
        }
    }

    @media (max-width: 576px) {
        .donate-hero h1 {
            font-size: 36px !important;
        }

        .donate-hero p {
            font-size: 18px !important;
        }

        .amount-options {
            grid-template-columns: 1fr !important;
        }

        .detail-row {
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
    // Tab Switching Functionality
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const tabId = this.getAttribute('data-tab');

            // Remove active class from all buttons and contents
            tabBtns.forEach(b => b.classList.remove('active'));
            tabContents.forEach(c => {
                c.classList.remove('active');
                c.style.display = 'none';
            });

            // Add active class to clicked button and show corresponding content
            this.classList.add('active');
            const activeContent = document.getElementById(tabId);
            if (activeContent) {
                activeContent.classList.add('active');
                activeContent.style.display = 'block';
            }
        });
    });

    // Quick Donation Amount Buttons
    const amountBtns = document.querySelectorAll('.amount-btn');
    const customAmountInput = document.getElementById('custom-amount');
    const customDonateBtn = document.getElementById('custom-donate-btn');

    amountBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const amount = this.getAttribute('data-amount');

            // Remove active state from all buttons
            amountBtns.forEach(b => {
                b.style.background = 'white';
                b.style.borderColor = '#E8F5E9';
            });

            // Set active state for clicked button
            this.style.background = '#E8F5E9';
            this.style.borderColor = '#2E7D32';

            // Set custom amount input value
            customAmountInput.value = amount;

            // Scroll to bank transfer section
            document.querySelector('.donate-scroll').click();
        });
    });

    // Custom Donation Button
    customDonateBtn.addEventListener('click', function() {
        const amount = customAmountInput.value;
        if (amount && amount > 0) {
            // Scroll to bank transfer section
            document.querySelector('.donate-scroll').click();

            // Show confirmation message
            setTimeout(() => {
                alert(`Thank you for choosing to donate $${amount}! Please use the bank details above to complete your donation.`);
            }, 500);
        } else {
            alert('Please enter a valid donation amount.');
            customAmountInput.focus();
        }
    });

    // Smooth scrolling for donation CTA
    document.querySelectorAll('.donate-scroll').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Copy Bank Details Functionality
    const bankDetails = document.querySelectorAll('.bank-details p, .transfer-details p');
    bankDetails.forEach(detail => {
        detail.addEventListener('click', function() {
            const textToCopy = this.textContent.trim();
            navigator.clipboard.writeText(textToCopy)
                .then(() => {
                    // Show copied notification
                    const originalText = this.textContent;
                    this.textContent = 'Copied!';
                    this.style.color = '#2E7D32';
                    this.style.fontWeight = 'bold';

                    setTimeout(() => {
                        this.textContent = originalText;
                        this.style.color = '';
                        this.style.fontWeight = '';
                    }, 2000);
                })
                .catch(err => console.error('Failed to copy:', err));
        });
    });

    // Animation on scroll for impact cards
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

    // Observe all cards for animation
    document.querySelectorAll('.impact-card, .promise-card, .mobile-option').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });
});
</script>
@endsection
