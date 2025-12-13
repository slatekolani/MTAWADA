@extends('welcome')

@section('title', 'Donate - Support Waste Pickers | MTAWADA')

@section('content')
<!-- Hero Section -->
<section class="donate-hero" style="margin-top: 90px; position: relative; overflow: hidden;">
    <div class="hero-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        <div class="bg-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(27, 94, 32, 0.4), rgba(46, 125, 50, 0.3)); z-index: 1;"></div>
        <div class="bg-image" style="position: absolute; top: 0; left: 0; width: 100%; height: 160%; background-image: url('/images/Education5.jpg'); background-size: cover; background-position: center; z-index: 0; animation: zoomEffect 20s infinite alternate;"></div>
    </div>

    <!-- Floating Elements -->
    <div class="floating-element" style="position: absolute; top: 20%; left: 15%; font-size: 60px; opacity: 0.15; color: white; animation: float 15s infinite ease-in-out; z-index: 2;">💚</div>
    <div class="floating-element" style="position: absolute; bottom: 30%; right: 10%; font-size: 50px; opacity: 0.15; color: white; animation: float 20s infinite ease-in-out reverse; z-index: 2;">🤝</div>

    <div class="container" style="position: relative; z-index: 3; min-height: 500px; display: flex; align-items: center;">
        <div class="hero-content" style="max-width: 800px; padding: 100px 0;">
            <h1 style="font-size: 56px; font-weight: 800; color: white; margin-bottom: 20px; line-height: 1.2; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);">
                Support <span style="color: #66BB6A;">Waste Pickers</span> &
                <span style="color: #66BB6A;">Environmental Justice</span>
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
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #1B5E20;">
                Your Donation Makes a Difference
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #1B5E20, #2E7D32); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Every contribution supports our work in these critical areas
            </p>
        </div>

        <div class="impact-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <div class="impact-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-top: 4px solid #1B5E20;">
                <div class="impact-icon" style="width: 80px; height: 80px; background: rgba(27, 94, 32, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: #1B5E20; font-size: 36px;">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 style="color: #1B5E20; margin-bottom: 15px; font-size: 22px; text-align: center;">Rights Protection</h3>
                <p style="color: #666666; line-height: 1.7; text-align: center;">
                    Funding legal advocacy to protect waste pickers from exploitation and ensure fair treatment
                </p>

            </div>

            <div class="impact-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-top: 4px solid #2E7D32;">
                <div class="impact-icon" style="width: 80px; height: 80px; background: rgba(46, 125, 50, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: #2E7D32; font-size: 36px;">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3 style="color: #2E7D32; margin-bottom: 15px; font-size: 22px; text-align: center;">Education & Training</h3>
                <p style="color: #666666; line-height: 1.7; text-align: center;">
                    Providing workshops on safety, rights, and sustainable waste management practices
                </p>

            </div>

            <div class="impact-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-top: 4px solid #4CAF50;">
                <div class="impact-icon" style="width: 80px; height: 80px; background: rgba(76, 175, 80, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: #4CAF50; font-size: 36px;">
                    <i class="fas fa-tools"></i>
                </div>
                <h3 style="color: #4CAF50; margin-bottom: 15px; font-size: 22px; text-align: center;">Equipment & Safety Gear</h3>
                <p style="color: #666666; line-height: 1.7; text-align: center;">
                    Providing gloves, boots, protective clothing, and collection tools for safe work
                </p>

            </div>
        </div>
    </div>
</section>

<!-- Donation Form Section -->
<section class="donation-form-section" style="padding: 100px 0; background: #F8FAFC;" id="donation-form">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #1B5E20;">
                Make Your Donation
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #1B5E20, #2E7D32); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Fill out the form below to support MTAWADA's mission
            </p>
        </div>

        <div class="form-wrapper" style="max-width: 900px; margin: 0 auto;">
            <div style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);">

                <!-- Form Header -->
                <div class="form-header" style="background: linear-gradient(135deg, #1B5E20 0%, #2E7D32 100%); padding: 50px; color: white; text-align: center;">
                    <div style="width: 80px; height: 80px; background: rgba(255, 255, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; font-size: 36px;">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 style="font-size: 32px; margin-bottom: 15px; font-weight: 700;">Support Our Mission</h3>
                    <p style="font-size: 16px; opacity: 0.9; max-width: 600px; margin: 0 auto;">
                        Your generous donation helps us advocate for waste pickers' rights and environmental sustainability
                    </p>
                </div>

                <!-- Donation Form -->
                <div class="form-body" style="padding: 50px;">
                    <form id="donationForm">
                        <!-- Donation Amount Selection -->
                        <div class="form-section" style="margin-bottom: 40px;">



                            <div class="custom-amount" style="background: #F8FAFC; padding: 20px; border-radius: 15px;">
                                <label style="display: block; color: #1B5E20; font-weight: 600; margin-bottom: 10px; font-size: 16px;">
                                 Enter Custom Amount
                                </label>
                                <div style="display: flex; gap: 10px;">
                                    <input type="number" id="custom-amount" name="amount" placeholder="Enter amount in TZS" required style="flex: 1; padding: 15px; border: 2px solid #ddd; border-radius: 10px; font-size: 16px; outline: none;">
                                    <select name="currency" style="padding: 15px; border: 2px solid #ddd; border-radius: 10px; font-size: 16px; outline: none; background: white;">
                                        <option value="TZS">TZS</option>
                                        <option value="USD">USD</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Donor Information -->
                        <div class="form-section" style="margin-bottom: 40px;">
                            <h4 style="color: #1B5E20; margin-bottom: 20px; font-size: 20px; font-weight: 600;">Your Information</h4>

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                                <div class="form-group">
                                    <label style="display: block; color: #1B5E20; font-weight: 600; margin-bottom: 8px; font-size: 14px;">
                                        First Name <span style="color: #4CAF50;">*</span>
                                    </label>
                                    <input type="text" name="first_name" required style="width: 100%; padding: 12px 15px; border: 2px solid #ddd; border-radius: 10px; font-size: 16px; outline: none;">
                                </div>

                                <div class="form-group">
                                    <label style="display: block; color: #1B5E20; font-weight: 600; margin-bottom: 8px; font-size: 14px;">
                                        Last Name <span style="color: #4CAF50;">*</span>
                                    </label>
                                    <input type="text" name="last_name" required style="width: 100%; padding: 12px 15px; border: 2px solid #ddd; border-radius: 10px; font-size: 16px; outline: none;">
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom: 20px;">
                                <label style="display: block; color: #1B5E20; font-weight: 600; margin-bottom: 8px; font-size: 14px;">
                                    Email Address <span style="color: #4CAF50;">*</span>
                                </label>
                                <input type="email" name="email" required style="width: 100%; padding: 12px 15px; border: 2px solid #ddd; border-radius: 10px; font-size: 16px; outline: none;">
                            </div>

                            <div class="form-group" style="margin-bottom: 20px;">
                                <label style="display: block; color: #1B5E20; font-weight: 600; margin-bottom: 8px; font-size: 14px;">
                                    Phone Number <span style="color: #4CAF50;">*</span>
                                </label>
                                <input type="tel" name="phone" required style="width: 100%; padding: 12px 15px; border: 2px solid #ddd; border-radius: 10px; font-size: 16px; outline: none;">
                            </div>

                            <div class="form-group">
                                <label style="display: block; color: #1B5E20; font-weight: 600; margin-bottom: 8px; font-size: 14px;">
                                    Country
                                </label>
                                <input type="text" name="country" style="width: 100%; padding: 12px 15px; border: 2px solid #ddd; border-radius: 10px; font-size: 16px; outline: none;">
                            </div>
                        </div>

                        <!-- Donation Type -->
                        <div class="form-section" style="margin-bottom: 40px;">
                            <h4 style="color: #1B5E20; margin-bottom: 20px; font-size: 20px; font-weight: 600;">Donation Type</h4>

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                                <label class="donation-type-option" style="background: #F8FAFC; border: 2px solid #E8F5E9; padding: 20px; border-radius: 15px; cursor: pointer; display: flex; align-items: center; gap: 15px; transition: all 0.3s;">
                                    <input type="radio" name="donation_type" value="one-time" checked style="width: 20px; height: 20px; accent-color: #1B5E20;">
                                    <div>
                                        <div style="font-weight: 600; color: #1B5E20; margin-bottom: 5px;">One-Time Donation</div>
                                        <div style="font-size: 14px; color: #666666;">Make a single contribution</div>
                                    </div>
                                </label>

                                <label class="donation-type-option" style="background: #F8FAFC; border: 2px solid #E8F5E9; padding: 20px; border-radius: 15px; cursor: pointer; display: flex; align-items: center; gap: 15px; transition: all 0.3s;">
                                    <input type="radio" name="donation_type" value="monthly" style="width: 20px; height: 20px; accent-color: #1B5E20;">
                                    <div>
                                        <div style="font-weight: 600; color: #1B5E20; margin-bottom: 5px;">Monthly Donation</div>
                                        <div style="font-size: 14px; color: #666666;">Support us every month</div>
                                    </div>
                                </label>
                            </div>
                        </div>



                        <!-- Additional Comments -->
                        <div class="form-section" style="margin-bottom: 40px;">
                            <h4 style="color: #1B5E20; margin-bottom: 20px; font-size: 20px; font-weight: 600;">Additional Comments</h4>
                            <textarea name="comments" rows="4" placeholder="Any special instructions or messages for MTAWADA..." style="width: 100%; padding: 15px; border: 2px solid #ddd; border-radius: 10px; font-size: 16px; outline: none; resize: vertical;"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" style="width: 100%; background: linear-gradient(135deg, #1B5E20 0%, #2E7D32 100%); color: white; padding: 18px; border: none; border-radius: 15px; font-size: 18px; font-weight: 700; cursor: pointer; transition: all 0.3s; display: flex; align-items: center; justify-content: center; gap: 12px;">
                            <i class="fas fa-heart"></i> Submit Donation Request
                        </button>

                        <p style="text-align: center; color: #666666; font-size: 14px; margin-top: 20px;">
                            After submitting, our team will contact you with payment instructions
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust Indicators -->
<section class="trust-section" style="padding: 80px 0; background: white;">
    <div class="container">
        <div style="text-align: center; max-width: 1000px; margin: 0 auto;">
            <h3 style="color: #1B5E20; font-size: 28px; margin-bottom: 40px; font-weight: 700;">Why Donate to MTAWADA?</h3>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px;">
                <div style="text-align: center;">
                    <div style="width: 80px; height: 80px; background: rgba(27, 94, 32, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: #1B5E20; font-size: 36px;">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h4 style="color: #1B5E20; margin-bottom: 10px; font-size: 18px;">Officially Registered</h4>
                    <p style="color: #666666; font-size: 14px; line-height: 1.6;">
                        Registered with the Ministry of Home Affairs under The Societies Act
                    </p>
                </div>

                <div style="text-align: center;">
                    <div style="width: 80px; height: 80px; background: rgba(46, 125, 50, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: #2E7D32; font-size: 36px;">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4 style="color: #2E7D32; margin-bottom: 10px; font-size: 18px;">Transparent Reporting</h4>
                    <p style="color: #666666; font-size: 14px; line-height: 1.6;">
                        Regular financial reports and impact updates to all donors
                    </p>
                </div>

                <div style="text-align: center;">
                    <div style="width: 80px; height: 80px; background: rgba(76, 175, 80, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: #4CAF50; font-size: 36px;">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h4 style="color: #4CAF50; margin-bottom: 10px; font-size: 18px;">Direct Impact</h4>
                    <p style="color: #666666; font-size: 14px; line-height: 1.6;">
                        100% of donations go directly to programs supporting waste pickers
                    </p>
                </div>

                <div style="text-align: center;">
                    <div style="width: 80px; height: 80px; background: rgba(102, 187, 106, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: #66BB6A; font-size: 36px;">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 style="color: #66BB6A; margin-bottom: 10px; font-size: 18px;">Secure Donations</h4>
                    <p style="color: #666666; font-size: 14px; line-height: 1.6;">
                        Your information is protected and handled with utmost confidentiality
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="donate-cta" style="padding: 120px 0; background: linear-gradient(135deg, #1B5E20 0%, #2E7D32 100%); position: relative; overflow: hidden;">
    <div class="floating-element" style="position: absolute; top: 20%; left: 5%; font-size: 60px; opacity: 0.1; color: white; animation: float 20s infinite ease-in-out;">🌍</div>
    <div class="floating-element" style="position: absolute; bottom: 30%; right: 5%; font-size: 60px; opacity: 0.1; color: white; animation: float 25s infinite ease-in-out reverse;">🤝</div>

    <div class="container">
        <div class="cta-content" style="text-align: center; max-width: 800px; margin: 0 auto; position: relative; z-index: 2;">
            <h2 style="font-size: 42px; color: white; margin-bottom: 20px; font-weight: 800;">Ready to Make an Impact?</h2>
            <p style="font-size: 18px; color: rgba(255, 255, 255, 0.95); margin-bottom: 40px; line-height: 1.7;">
                Your donation directly supports waste pickers in Dar es Salaam, helping them gain recognition, protection, and fair treatment while contributing to environmental sustainability.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="#donation-form" class="btn-primary donate-scroll" style="background: #66BB6A; color: white; padding: 18px 45px; border-radius: 30px; text-decoration: none; font-weight: 700; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s; border: none; font-size: 16px;">
                    <i class="fas fa-donate"></i> Donate Now
                </a>
                <a href="{{ route('mtawada.contact') }}" class="btn-secondary" style="background: transparent; color: white; padding: 18px 45px; border-radius: 30px; text-decoration: none; font-weight: 700; border: 2px solid white; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s; font-size: 16px;">
                    <i class="fas fa-question-circle"></i> Questions?
                </a>
            </div>

            <div style="margin-top: 50px; padding-top: 50px; border-top: 1px solid rgba(255, 255, 255, 0.2);">
                <div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">
                    <div style="text-align: center;">
                        <div style="font-size: 36px; font-weight: 800; color: #66BB6A; margin-bottom: 5px;">Registered</div>
                        <div style="color: rgba(255, 255, 255, 0.9); font-size: 14px;">Ministry of Home Affairs</div>
                    </div>
                    <div style="text-align: center;">
                        <div style="font-size: 36px; font-weight: 800; color: #66BB6A; margin-bottom: 5px;">Transparent</div>
                        <div style="color: rgba(255, 255, 255, 0.9); font-size: 14px;">Financial Reporting</div>
                    </div>
                    <div style="text-align: center;">
                        <div style="font-size: 36px; font-weight: 800; color: #66BB6A; margin-bottom: 5px;">Accountable</div>
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

    /* Card Hover Effects */
    .impact-card:hover {
        transform: translateY(-10px);
        transition: transform 0.3s ease;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15) !important;
    }

    .amount-btn:hover {
        background: #E8F5E9 !important;
        border-color: #1B5E20 !important;
        transform: translateY(-5px);
    }

    .amount-btn.active {
        background: #E8F5E9 !important;
        border-color: #1B5E20 !important;
    }

    .donation-type-option:hover {
        border-color: #1B5E20 !important;
        background: #E8F5E9 !important;
    }

    /* Button Hover Effects */
    .btn-primary:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 15px 35px rgba(102, 187, 106, 0.4) !important;
        background: #4CAF50 !important;
    }

    .btn-secondary:hover {
        background: white !important;
        color: #1B5E20 !important;
        transform: translateY(-3px);
    }

    /* Form Input Focus */
    input:focus, textarea:focus, select:focus {
        border-color: #1B5E20 !important;
        box-shadow: 0 0 0 3px rgba(27, 94, 32, 0.1) !important;
    }

    button[type="submit"]:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(27, 94, 32, 0.4) !important;
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .impact-grid {
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

        .form-body {
            padding: 30px 20px !important;
        }

        .form-header {
            padding: 30px 20px !important;
        }

        .impact-grid {
            grid-template-columns: 1fr !important;
        }

        .amount-options {
            grid-template-columns: 1fr !important;
        }

        .form-body > form > div:nth-child(2) > div {
            grid-template-columns: 1fr !important;
        }

        .form-section > div:nth-child(2) {
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

        .cta-content .btn-primary,
        .cta-content .btn-secondary {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Amount Button Selection
    const amountBtns = document.querySelectorAll('.amount-btn');
    const customAmountInput = document.getElementById('custom-amount');

    amountBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const amount = this.getAttribute('data-amount');

            // Remove active state from all buttons
            amountBtns.forEach(b => {
                b.classList.remove('active');
                b.style.background = 'white';
                b.style.borderColor = '#E8F5E9';
            });

            // Set active state for clicked button
            this.classList.add('active');
            this.style.background = '#E8F5E9';
            this.style.borderColor = '#1B5E20';

            // Set custom amount input value
            customAmountInput.value = amount;
        });
    });

    // Custom amount input - remove button selection when user types
    customAmountInput.addEventListener('input', function() {
        amountBtns.forEach(b => {
            b.classList.remove('active');
            b.style.background = 'white';
            b.style.borderColor = '#E8F5E9';
        });
    });

    // Dedication Toggle
    const dedicationToggle = document.getElementById('dedication-toggle');
    const dedicationFields = document.getElementById('dedication-fields');

    dedicationToggle.addEventListener('change', function() {
        if (this.checked) {
            dedicationFields.style.display = 'block';
        } else {
            dedicationFields.style.display = 'none';
        }
    });

    // Form Submission
    const donationForm = document.getElementById('donationForm');

    donationForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Get form data
        const formData = new FormData(this);
        const amount = formData.get('amount');
        const firstName = formData.get('first_name');
        const lastName = formData.get('last_name');
        const email = formData.get('email');

        // Simple validation
        let isValid = true;
        const requiredFields = this.querySelectorAll('[required]');

        requiredFields.forEach(field => {
            if (!field.value.trim() && field.type !== 'checkbox') {
                field.style.borderColor = '#4CAF50';
                isValid = false;
            } else if (field.type === 'checkbox' && !field.checked) {
                isValid = false;
                alert('Please agree to the privacy policy to continue.');
            } else {
                field.style.borderColor = '#ddd';
            }
        });

        if (!amount || amount <= 0) {
            customAmountInput.style.borderColor = '#4CAF50';
            alert('Please enter a valid donation amount.');
            isValid = false;
        }

        if (isValid) {
            // In a real implementation, you would send this to your server
            alert(`Thank you ${firstName} ${lastName} for your generous donation of ${formData.get('currency')} ${amount}!\n\nOur team will contact you at ${email} with payment instructions within 24 hours.`);

            // Reset form
            this.reset();
            amountBtns.forEach(b => {
                b.classList.remove('active');
                b.style.background = 'white';
                b.style.borderColor = '#E8F5E9';
            });
            dedicationFields.style.display = 'none';

            // Scroll to top
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        } else {
            alert('Please fill in all required fields marked with *.');
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
    document.querySelectorAll('.impact-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });
});
</script>
@endsection
