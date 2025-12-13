@extends('welcome')

@section('title', 'Contact Us - MTAWADA')

@section('content')
<!-- Hero Section -->
<section class="contact-hero" style="margin-top: 90px; position: relative; overflow: hidden; background: linear-gradient(135deg, #1B5E20 0%, #2E7D32 100%);">
    <div class="hero-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        <div class="bg-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(27, 94, 32, 0.9), rgba(46, 125, 50, 0.8)); z-index: 1;"></div>
        <div class="bg-image" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('/images/contact-hero.jpg'); background-size: cover; background-position: center; z-index: 0;"></div>

        <!-- Animated contact elements -->
        <div class="floating-phone" style="position: absolute; top: 20%; left: 10%; font-size: 50px; opacity: 0.2; color: #66BB6A; animation: float 15s infinite ease-in-out;">📞</div>
        <div class="floating-email" style="position: absolute; bottom: 30%; right: 15%; font-size: 60px; opacity: 0.2; color: #66BB6A; animation: float 20s infinite ease-in-out reverse;">✉️</div>
        <div class="floating-location" style="position: absolute; top: 40%; right: 20%; font-size: 45px; opacity: 0.2; color: #66BB6A; animation: float 18s infinite ease-in-out;">📍</div>
    </div>

    <div class="container" style="position: relative; z-index: 3; min-height: 500px; display: flex; align-items: center;">
        <div class="hero-content" style="max-width: 800px; padding: 100px 0;">
            <div style="display: inline-block; background: rgba(102, 187, 106, 0.2); color: #66BB6A; padding: 10px 25px; border-radius: 25px; font-size: 14px; font-weight: 600; margin-bottom: 25px;">
                <i class="fas fa-headset"></i> GET IN TOUCH
            </div>

            <h1 style="font-size: 56px; font-weight: 800; color: white; margin-bottom: 20px; line-height: 1.2; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);">
                Let's <span style="color: #66BB6A;">Connect</span>
            </h1>

            <p style="font-size: 24px; color: rgba(255, 255, 255, 0.9); margin-bottom: 30px; line-height: 1.6;">
                Reach out to us for partnerships, inquiries, or to join our movement for waste pickers' rights
            </p>

            <div class="hero-stats" style="display: flex; gap: 40px; flex-wrap: wrap; margin-top: 40px;">
                <div class="stat" style="text-align: center; background: rgba(255, 255, 255, 0.15); padding: 20px; border-radius: 15px; backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2);">
                    <div style="font-size: 36px; font-weight: 700; color: #66BB6A; margin-bottom: 5px;">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.9);">Mon - Fri: 8AM - 5PM</div>
                </div>
                <div class="stat" style="text-align: center; background: rgba(255, 255, 255, 0.15); padding: 20px; border-radius: 15px; backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2);">
                    <div style="font-size: 36px; font-weight: 700; color: #66BB6A; margin-bottom: 5px;">
                        <i class="fas fa-reply"></i>
                    </div>
                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.9);">24h Response Time</div>
                </div>
                <div class="stat" style="text-align: center; background: rgba(255, 255, 255, 0.15); padding: 20px; border-radius: 15px; backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2);">
                    <div style="font-size: 36px; font-weight: 700; color: #66BB6A; margin-bottom: 5px;">
                        <i class="fas fa-language"></i>
                    </div>
                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.9);">Swahili & English</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator" style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); color: white; z-index: 3; text-align: center;">
        <div style="font-size: 14px; letter-spacing: 2px; margin-bottom: 10px; opacity: 0.8;">GET IN TOUCH</div>
        <i class="fas fa-chevron-down" style="font-size: 20px; animation: bounce 2s infinite;"></i>
    </div>
</section>

<!-- Contact Options -->
<section class="contact-options" style="padding: 100px 0; background: white;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #1B5E20;">
                How to Reach Us
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #1B5E20, #2E7D32); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Choose your preferred method of communication. We're here to help!
            </p>
        </div>

        <div class="contact-methods" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Phone -->
            <div class="contact-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; text-align: center; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05); transition: all 0.3s ease; border-top: 5px solid #1B5E20;">
                <div class="contact-icon" style="width: 80px; height: 80px; background: rgba(27, 94, 32, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: #1B5E20; font-size: 36px;">
                    <i class="fas fa-phone-alt"></i>
                </div>

                <h3 style="color: #1B5E20; margin-bottom: 15px; font-size: 22px;">Call Us</h3>

                <p style="color: #666666; line-height: 1.6; margin-bottom: 25px;">
                    Speak directly with our team for immediate assistance
                </p>

                <div class="contact-details">
                    <div style="font-size: 24px; font-weight: 700; color: #1B5E20; margin-bottom: 10px;">
                        <a href="tel:+255793543206" style="color: inherit; text-decoration: none;">+255 793 543 206</a>
                    </div>
                    <div style="color: #666666; font-size: 14px;">
                        <i class="fas fa-clock"></i> Mon - Fri: 8:00 AM - 5:00 PM
                    </div>
                </div>

                <div style="margin-top: 30px;">
                    <a href="tel:+255793543206" style="display: inline-flex; align-items: center; gap: 10px; background: #1B5E20; color: white; padding: 12px 30px; border-radius: 30px; text-decoration: none; font-weight: 600; transition: all 0.3s;">
                        <i class="fas fa-phone"></i> Call Now
                    </a>
                </div>
            </div>

            <!-- Email -->
            <div class="contact-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; text-align: center; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05); transition: all 0.3s ease; border-top: 5px solid #2E7D32;">
                <div class="contact-icon" style="width: 80px; height: 80px; background: rgba(46, 125, 50, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: #2E7D32; font-size: 36px;">
                    <i class="fas fa-envelope"></i>
                </div>

                <h3 style="color: #2E7D32; margin-bottom: 15px; font-size: 22px;">Email Us</h3>

                <p style="color: #666666; line-height: 1.6; margin-bottom: 25px;">
                    Send us a detailed message and we'll respond within 24 hours
                </p>

                <div class="contact-details">
                    <div style="font-size: 18px; font-weight: 600; color: #2E7D32; margin-bottom: 10px;">
                        <a href="mailto:info@mtawada.or.tz" style="color: inherit; text-decoration: none;">info@mtawada.or.tz</a>
                    </div>

                </div>

                <div style="margin-top: 30px;">
                    <a href="#contact-form" style="display: inline-flex; align-items: center; gap: 10px; background: #2E7D32; color: white; padding: 12px 30px; border-radius: 30px; text-decoration: none; font-weight: 600; transition: all 0.3s;">
                        <i class="fas fa-paper-plane"></i> Send Email
                    </a>
                </div>
            </div>

            <!-- Visit -->
            <div class="contact-card" style="background: #F8FAFC; border-radius: 20px; padding: 40px; text-align: center; box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05); transition: all 0.3s ease; border-top: 5px solid #4CAF50;">
                <div class="contact-icon" style="width: 80px; height: 80px; background: rgba(76, 175, 80, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; color: #4CAF50; font-size: 36px;">
                    <i class="fas fa-map-marker-alt"></i>
                </div>

                <h3 style="color: #4CAF50; margin-bottom: 15px; font-size: 22px;">Visit Us</h3>

                <p style="color: #666666; line-height: 1.6; margin-bottom: 25px;">
                    Schedule a visit to our office or community centers
                </p>

                <div class="contact-details">
                    <div style="font-size: 16px; color: #666666; line-height: 1.5; margin-bottom: 15px;">
                      P.O. Box 3560 NHC, Ubungo-Dar es Salaam
                    </div>
                    <div style="color: #666666; font-size: 14px;">
                        <i class="fas fa-calendar-alt"></i> By appointment only
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="contact-form-section" style="padding: 100px 0; background: #F8FAFC;" id="contact-form">
    <div class="container">
        <div class="form-wrapper" style="max-width: 1000px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);">
                <!-- Form Side -->
                <div class="form-side" style="padding: 50px;">
                    <div class="form-header" style="margin-bottom: 40px;">
                        <h2 style="color: #1B5E20; font-size: 32px; margin-bottom: 10px;">Send Us a Message</h2>
                        <p style="color: #666666; font-size: 16px;">
                            Fill out the form below and we'll get back to you as soon as possible
                        </p>
                    </div>

                    <form id="contactForm" style="display: grid; gap: 20px;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            <div class="form-group">
                                <label style="display: block; color: #1B5E20; font-weight: 600; margin-bottom: 8px; font-size: 14px;">
                                    First Name <span style="color: #4CAF50;">*</span>
                                </label>
                                <input type="text" required style="width: 100%; padding: 12px 15px; border: 2px solid #ddd; border-radius: 10px; font-size: 16px; transition: all 0.3s; outline: none;">
                            </div>

                            <div class="form-group">
                                <label style="display: block; color: #1B5E20; font-weight: 600; margin-bottom: 8px; font-size: 14px;">
                                    Last Name <span style="color: #4CAF50;">*</span>
                                </label>
                                <input type="text" required style="width: 100%; padding: 12px 15px; border: 2px solid #ddd; border-radius: 10px; font-size: 16px; transition: all 0.3s; outline: none;">
                            </div>
                        </div>

                        <div class="form-group">
                            <label style="display: block; color: #1B5E20; font-weight: 600; margin-bottom: 8px; font-size: 14px;">
                                Email Address <span style="color: #4CAF50;">*</span>
                            </label>
                            <input type="email" required style="width: 100%; padding: 12px 15px; border: 2px solid #ddd; border-radius: 10px; font-size: 16px; transition: all 0.3s; outline: none;">
                        </div>

                        <div class="form-group">
                            <label style="display: block; color: #1B5E20; font-weight: 600; margin-bottom: 8px; font-size: 14px;">
                                Phone Number
                            </label>
                            <input type="tel" style="width: 100%; padding: 12px 15px; border: 2px solid #ddd; border-radius: 10px; font-size: 16px; transition: all 0.3s; outline: none;">
                        </div>

                        <div class="form-group">
                            <label style="display: block; color: #1B5E20; font-weight: 600; margin-bottom: 8px; font-size: 14px;">
                                Inquiry Type <span style="color: #4CAF50;">*</span>
                            </label>
                            <select required style="width: 100%; padding: 12px 15px; border: 2px solid #ddd; border-radius: 10px; font-size: 16px; transition: all 0.3s; outline: none; background: white;">
                                <option value="">Select inquiry type</option>
                                <option value="partnership">Partnership Inquiry</option>
                                <option value="membership">Membership Inquiry</option>
                                <option value="volunteer">Volunteer Opportunity</option>
                                <option value="donation">Donation Inquiry</option>
                                <option value="media">Media Inquiry</option>
                                <option value="general">General Inquiry</option>
                                <option value="complaint">Complaint/Suggestion</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label style="display: block; color: #1B5E20; font-weight: 600; margin-bottom: 8px; font-size: 14px;">
                                Message <span style="color: #4CAF50;">*</span>
                            </label>
                            <textarea required rows="6" style="width: 100%; padding: 12px 15px; border: 2px solid #ddd; border-radius: 10px; font-size: 16px; transition: all 0.3s; outline: none; resize: vertical;"></textarea>
                        </div>



                        <button type="submit" style="background: #1B5E20; color: white; padding: 15px 30px; border: none; border-radius: 10px; font-size: 16px; font-weight: 600; cursor: pointer; transition: all 0.3s; display: flex; align-items: center; justify-content: center; gap: 10px;">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>

                <!-- Info Side -->
                <div class="info-side" style="background: linear-gradient(135deg, #1B5E20 0%, #2E7D32 100%); padding: 50px; color: white;">
                    <div class="info-content" style="height: 100%; display: flex; flex-direction: column; justify-content: center;">
                        <h2 style="font-size: 32px; margin-bottom: 30px; font-weight: 700;">Why Contact Us?</h2>

                        <div class="info-list" style="margin-bottom: 40px;">
                            <div class="info-item" style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 25px;">
                                <div style="width: 40px; height: 40px; background: rgba(255, 255, 255, 0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 18px; margin-bottom: 5px; font-weight: 600;">Partnerships</h3>
                                    <p style="opacity: 0.9; font-size: 14px; line-height: 1.5;">
                                        Collaborate with us on projects, research, or community initiatives
                                    </p>
                                </div>
                            </div>

                            <div class="info-item" style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 25px;">
                                <div style="width: 40px; height: 40px; background: rgba(255, 255, 255, 0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 18px; margin-bottom: 5px; font-weight: 600;">Join Our Network</h3>
                                    <p style="opacity: 0.9; font-size: 14px; line-height: 1.5;">
                                        Become a member or volunteer to support waste pickers' rights
                                    </p>
                                </div>
                            </div>

                            <div class="info-item" style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 25px;">
                                <div style="width: 40px; height: 40px; background: rgba(255, 255, 255, 0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-question-circle"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 18px; margin-bottom: 5px; font-weight: 600;">Get Information</h3>
                                    <p style="opacity: 0.9; font-size: 14px; line-height: 1.5;">
                                        Request data, reports, or information about our work
                                    </p>
                                </div>
                            </div>

                            <div class="info-item" style="display: flex; align-items: flex-start; gap: 15px;">
                                <div style="width: 40px; height: 40px; background: rgba(255, 255, 255, 0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 18px; margin-bottom: 5px; font-weight: 600;">Media Inquiries</h3>
                                    <p style="opacity: 0.9; font-size: 14px; line-height: 1.5;">
                                        Contact us for interviews, features, or media collaborations
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="emergency-contact" style="background: rgba(255, 255, 255, 0.1); padding: 20px; border-radius: 10px; border-left: 4px solid #66BB6A;">
                            <h3 style="font-size: 16px; margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
                                <i class="fas fa-exclamation-triangle" style="color: #66BB6A;"></i>
                                Urgent Matters
                            </h3>
                            <p style="font-size: 14px; opacity: 0.9; margin: 0;">
                                For urgent matters, call our hotline:
                                <a href="tel:+255793543206" style="color: #66BB6A; font-weight: 600; text-decoration: none;">+255 793 543 206</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Office Location -->
<section class="office-location" style="padding: 100px 0; background: white;" id="location">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #1B5E20;">
                Our Locations
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #1B5E20, #2E7D32); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Find us at our main office and community centers across Dar es Salaam
            </p>
        </div>

        <div class="location-grid" style="display: row; grid-template-columns: 2fr 2fr; gap: 50px; margin-bottom: 50px;">
            <!-- Office Details -->
            <div class="office-details" style="background: #F8FAFC; border-radius: 15px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);">
                <h3 style="color: #1B5E20; margin-bottom: 30px; font-size: 24px; display: flex; align-items: center; gap: 15px;">
                    <i class="fas fa-building"></i> Headquarters
                </h3>

                <div class="address" style="margin-bottom: 30px;">
                    <h4 style="color: #2E7D32; margin-bottom: 15px; font-size: 18px; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-map-pin"></i> Address
                    </h4>
                    <p style="color: #666666; line-height: 1.6; margin-bottom: 10px;">
                       P.O. Box 3560 NHC, Ubungo-Dar es Salaam
                    </p>

                </div>

                <div class="office-hours" style="margin-bottom: 30px;">
                    <h4 style="color: #2E7D32; margin-bottom: 15px; font-size: 18px; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-clock"></i> Office Hours
                    </h4>
                    <div style="display: grid; gap: 10px;">
                        <div style="display: flex; justify-content: space-between; padding-bottom: 10px; border-bottom: 1px solid #eee;">
                            <span style="color: #666666;">Monday - Friday</span>
                            <span style="color: #1B5E20; font-weight: 600;">8:00 AM - 5:00 PM</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding-bottom: 10px; border-bottom: 1px solid #eee;">
                            <span style="color: #666666;">Saturday</span>
                            <span style="color: #1B5E20; font-weight: 600;">9:00 AM - 1:00 PM</span>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <span style="color: #666666;">Sunday</span>
                            <span style="color: #4CAF50; font-weight: 600;">Closed</span>
                        </div>
                    </div>
                </div>

                <div class="contact-info">
                    <h4 style="color: #2E7D32; margin-bottom: 15px; font-size: 18px; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-address-book"></i> Contact Information
                    </h4>
                    <div style="display: grid; gap: 10px;">
                        <div style="display: flex; align-items: center; gap: 10px; color: #666666;">
                            <i class="fas fa-phone" style="color: #1B5E20;"></i>
                            <a href="tel:+255793543206" style="color: inherit; text-decoration: none;">+255 793 543 206</a>
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px; color: #666666;">
                            <i class="fas fa-envelope" style="color: #1B5E20;"></i>
                            <a href="mailto:info@mtawada.or.tz" style="color: inherit; text-decoration: none;">info@mtawada.or.tz</a>
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px; color: #666666;">
                            <i class="fas fa-globe" style="color: #1B5E20;"></i>
                            <a href="https://www.mtawada.or.tz" style="color: inherit; text-decoration: none;">www.mtawada.or.tz</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- FAQ Section -->
<section class="contact-faq" style="padding: 100px 0; background: #F8FAFC;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="display: inline-block; position: relative; font-size: 42px; color: #1B5E20;">
                Frequently Asked Questions
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #1B5E20, #2E7D32); border-radius: 2px;"></span>
            </h2>
            <p style="max-width: 800px; margin: 30px auto 0; font-size: 18px; color: #666666; line-height: 1.7;">
                Quick answers to common questions about contacting and working with MTAWADA
            </p>
        </div>

        <div class="faq-grid" style="max-width: 800px; margin: 0 auto;">
            <!-- FAQ 1 -->
            <div class="faq-item" style="background: white; border-radius: 15px; margin-bottom: 20px; overflow: hidden; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                <button class="faq-question" style="width: 100%; padding: 25px; text-align: left; background: none; border: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-size: 18px; color: #1B5E20; font-weight: 600;">
                    <span>How can I become a member of MTAWADA?</span>
                    <i class="fas fa-chevron-down" style="transition: transform 0.3s;"></i>
                </button>
                <div class="faq-answer" style="padding: 0 25px; max-height: 0; overflow: hidden; transition: all 0.3s ease;">
                    <div style="padding: 0 0 25px 0; color: #666666; line-height: 1.6;">
                        To become a member, you can visit any of our community centers, fill out a membership application form, and attend an orientation session. You can also start the process online by contacting our membership team at membership@mtawada.org.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-item" style="background: white; border-radius: 15px; margin-bottom: 20px; overflow: hidden; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                <button class="faq-question" style="width: 100%; padding: 25px; text-align: left; background: none; border: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-size: 18px; color: #1B5E20; font-weight: 600;">
                    <span>What types of partnerships does MTAWADA seek?</span>
                    <i class="fas fa-chevron-down" style="transition: transform 0.3s;"></i>
                </button>
                <div class="faq-answer" style="padding: 0 25px; max-height: 0; overflow: hidden; transition: all 0.3s ease;">
                    <div style="padding: 0 0 25px 0; color: #666666; line-height: 1.6;">
                        We partner with NGOs, government agencies, academic institutions, private companies, and community organizations. Partnerships can include research collaborations, funding opportunities, capacity building programs, advocacy campaigns, and waste management initiatives.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item" style="background: white; border-radius: 15px; margin-bottom: 20px; overflow: hidden; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                <button class="faq-question" style="width: 100%; padding: 25px; text-align: left; background: none; border: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-size: 18px; color: #1B5E20; font-weight: 600;">
                    <span>How long does it take to get a response to my inquiry?</span>
                    <i class="fas fa-chevron-down" style="transition: transform 0.3s;"></i>
                </button>
                <div class="faq-answer" style="padding: 0 25px; max-height: 0; overflow: hidden; transition: all 0.3s ease;">
                    <div style="padding: 0 0 25px 0; color: #666666; line-height: 1.6;">
                        We aim to respond to all inquiries within 24 hours on business days. For urgent matters, please call our hotline at +255 793 543 206. Partnership and membership inquiries may take 2-3 business days for a comprehensive response.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="faq-item" style="background: white; border-radius: 15px; margin-bottom: 20px; overflow: hidden; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                <button class="faq-question" style="width: 100%; padding: 25px; text-align: left; background: none; border: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-size: 18px; color: #1B5E20; font-weight: 600;">
                    <span>Can I volunteer with MTAWADA?</span>
                    <i class="fas fa-chevron-down" style="transition: transform 0.3s;"></i>
                </button>
                <div class="faq-answer" style="padding: 0 25px; max-height: 0; overflow: hidden; transition: all 0.3s ease;">
                    <div style="padding: 0 0 25px 0; color: #666666; line-height: 1.6;">
                        Yes! We welcome volunteers in various capacities including community outreach, research assistance, event coordination, digital skills training, and administrative support. Please contact volunteers@mtawada.org or fill out our volunteer application form on the website.
                    </div>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="faq-item" style="background: white; border-radius: 15px; margin-bottom: 20px; overflow: hidden; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                <button class="faq-question" style="width: 100%; padding: 25px; text-align: left; background: none; border: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-size: 18px; color: #1B5E20; font-weight: 600;">
                    <span>Do you offer tours or site visits?</span>
                    <i class="fas fa-chevron-down" style="transition: transform 0.3s;"></i>
                </button>
                <div class="faq-answer" style="padding: 0 25px; max-height: 0; overflow: hidden; transition: all 0.3s ease;">
                    <div style="padding: 0 0 25px 0; color: #666666; line-height: 1.6;">
                        Yes, we offer guided tours of our community centers and waste management facilities for educational groups, potential partners, and interested stakeholders. Tours must be scheduled at least one week in advance. Please contact tours@mtawada.org to arrange a visit.
                    </div>
                </div>
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

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Hero Animation */
    .contact-hero {
        animation: fadeInUp 1s ease-out;
    }

    /* Card Hover Effects */
    .contact-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15) !important;
    }

    .social-card > div:hover {
        transform: translateY(-10px);
        border-color: #1B5E20 !important;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1) !important;
    }

    .center-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
    }

    /* Button Hover Effects */
    a[href^="tel:"]:hover, a[href^="mailto:"]:hover {
        color: #66BB6A !important;
    }

    button[type="submit"]:hover {
        background: #0D4A18 !important;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(27, 94, 32, 0.3);
    }

    .contact-card a:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .social-card > div:hover .fa-facebook-f { animation: pulse 1s infinite; }
    .social-card > div:hover .fa-twitter { animation: pulse 1s infinite; }
    .social-card > div:hover .fa-instagram { animation: pulse 1s infinite; }
    .social-card > div:hover .fa-linkedin-in { animation: pulse 1s infinite; }

    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.2); }
    }

    /* Form Input Focus Effects */
    input:focus, textarea:focus, select:focus {
        border-color: #1B5E20 !important;
        box-shadow: 0 0 0 3px rgba(27, 94, 32, 0.1) !important;
        outline: none;
    }

    /* FAQ Accordion Animation */
    .faq-item.active .faq-question i {
        transform: rotate(180deg);
    }

    .faq-item.active .faq-answer {
        max-height: 500px;
        padding-top: 25px;
    }

    /* Contact Card Animation */
    .contact-card {
        animation: fadeInUp 0.6s ease forwards;
        opacity: 0;
    }

    .contact-card:nth-child(1) { animation-delay: 0.1s; }
    .contact-card:nth-child(2) { animation-delay: 0.2s; }
    .contact-card:nth-child(3) { animation-delay: 0.3s; }

    /* Social Card Animation */
    .social-card > div {
        animation: slideIn 0.6s ease forwards;
        opacity: 0;
    }

    .social-card:nth-child(1) > div { animation-delay: 0.1s; }
    .social-card:nth-child(2) > div { animation-delay: 0.2s; }
    .social-card:nth-child(3) > div { animation-delay: 0.3s; }
    .social-card:nth-child(4) > div { animation-delay: 0.4s; }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .form-wrapper > div {
            grid-template-columns: 1fr !important;
        }

        .location-grid {
            grid-template-columns: 1fr !important;
        }
    }

    @media (max-width: 992px) {
        .contact-hero h1 {
            font-size: 42px !important;
        }

        .contact-hero p {
            font-size: 20px !important;
        }

        .contact-methods {
            grid-template-columns: 1fr !important;
        }

        .social-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        .section-header h2 {
            font-size: 36px !important;
        }
    }

    @media (max-width: 768px) {
        .contact-hero h1 {
            font-size: 36px !important;
        }

        .contact-hero p {
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

        .form-side {
            padding: 30px 20px !important;
        }

        .info-side {
            padding: 30px 20px !important;
        }

        .form-group div {
            grid-template-columns: 1fr !important;
            gap: 15px !important;
        }

        .social-grid {
            grid-template-columns: 1fr !important;
        }

        .community-centers > div {
            grid-template-columns: 1fr !important;
        }

        .faq-question {
            padding: 20px !important;
            font-size: 16px !important;
        }

        .office-details {
            padding: 30px 20px !important;
        }
    }

    @media (max-width: 576px) {
        section {
            padding: 60px 0 !important;
        }

        .contact-hero h1 {
            font-size: 28px !important;
        }

        .section-header h2 {
            font-size: 32px !important;
        }

        .floating-phone,
        .floating-email,
        .floating-location {
            display: none !important;
        }

        .contact-card {
            padding: 30px 20px !important;
        }

        .map-container > div {
            padding: 20px !important;
        }

        .center-card {
            padding: 20px 15px !important;
        }
    }

    /* Print Styles */
    @media print {
        .contact-hero {
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

        .contact-card a,
        .social-card,
        button[type="submit"] {
            display: none !important;
        }

        .floating-phone,
        .floating-email,
        .floating-location {
            display: none !important;
        }

        .contact-card,
        .center-card {
            break-inside: avoid;
            page-break-inside: avoid;
        }

        form {
            display: none !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form submission
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Get form data
                const formData = new FormData(this);
                const inquiryType = this.querySelector('select').value;

                // Simple validation
                let isValid = true;
                const requiredFields = this.querySelectorAll('[required]');
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        field.style.borderColor = '#4CAF50';
                        isValid = false;
                    } else {
                        field.style.borderColor = '#ddd';
                    }
                });

                if (isValid) {
                    // In a real implementation, you would send this to your server
                    alert('Thank you for your message! We will get back to you within 24 hours.');
                    this.reset();

                    // Scroll to thank you message (simulated)
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                } else {
                    alert('Please fill in all required fields marked with *.');
                }
            });

            // Input focus effects
            const inputs = contactForm.querySelectorAll('input, textarea, select');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.style.borderColor = '#1B5E20';
                    this.style.boxShadow = '0 0 0 3px rgba(27, 94, 32, 0.1)';
                });

                input.addEventListener('blur', function() {
                    if (!this.value && this.hasAttribute('required')) {
                        this.style.borderColor = '#4CAF50';
                    } else {
                        this.style.borderColor = '#ddd';
                    }
                    this.style.boxShadow = 'none';
                });
            });
        }

        // FAQ Accordion
        const faqQuestions = document.querySelectorAll('.faq-question');
        faqQuestions.forEach(question => {
            question.addEventListener('click', function() {
                const faqItem = this.closest('.faq-item');
                const answer = faqItem.querySelector('.faq-answer');

                // Close other open FAQs
                document.querySelectorAll('.faq-item').forEach(item => {
                    if (item !== faqItem && item.classList.contains('active')) {
                        item.classList.remove('active');
                        item.querySelector('.faq-answer').style.maxHeight = '0';
                        item.querySelector('.faq-answer').style.paddingTop = '0';
                    }
                });

                // Toggle current FAQ
                faqItem.classList.toggle('active');
                if (faqItem.classList.contains('active')) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    answer.style.paddingTop = '25px';
                } else {
                    answer.style.maxHeight = '0';
                    answer.style.paddingTop = '0';
                }
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

        // Add hover effects to cards
        const cards = document.querySelectorAll('.contact-card, .social-card > div, .center-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Phone number formatting (optional)
        const phoneInputs = document.querySelectorAll('input[type="tel"]');
        phoneInputs.forEach(input => {
            input.addEventListener('input', function() {
                let value = this.value.replace(/\D/g, '');
                if (value.length > 0) {
                    value = '+255 ' + value.substring(0, 3) + ' ' + value.substring(3, 6) + ' ' + value.substring(6, 9);
                }
                this.value = value;
            });
        });

        // Initialize animations
        setTimeout(() => {
            document.querySelectorAll('.contact-card, .social-card > div').forEach(card => {
                card.style.opacity = '1';
            });
        }, 100);
    });

    // Function to handle external links
    function trackExternalLink(platform) {
        console.log(`Opening ${platform}...`);
        // In a real implementation, you would track this with analytics
    }
</script>

@endsection
