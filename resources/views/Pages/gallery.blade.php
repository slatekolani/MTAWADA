@extends('welcome')

@section('title', 'Gallery - MTAWADA')

@section('content')

<!-- Lightbox Modal -->
<div class="lightbox-modal" id="lightbox-modal">
    <div class="lightbox-overlay"></div>
    <div class="lightbox-container">
        <button class="lightbox-close" id="lightbox-close">
            <i class="fas fa-times"></i>
        </button>
        <button class="lightbox-nav prev" id="lightbox-prev">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="lightbox-nav next" id="lightbox-next">
            <i class="fas fa-chevron-right"></i>
        </button>

        <div class="lightbox-content">
            <div class="lightbox-image-container">
                <img id="lightbox-image" src="" alt="">
            </div>
            <div class="lightbox-info">
                <h3 id="lightbox-title"></h3>
                <p id="lightbox-description"></p>
                <div class="lightbox-meta">
                    <span class="meta-item">
                        <i class="fas fa-calendar"></i>
                        <span id="lightbox-date"></span>
                    </span>
                    <span class="meta-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span id="lightbox-location"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="gallery-hero" style="margin-top: 90px; position: relative; overflow: hidden;">
    <div class="hero-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        <div class="bg-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(27, 94, 32, 0.6), rgba(46, 125, 50, 0.5)); z-index: 1;"></div>
        <div class="bg-image" style="position: absolute; top: 0; left: 0; width: 100%; height: 160%; background-image: url('/images/Education4.jpg'); background-size: cover; background-position: center; z-index: 0; animation: zoomEffect 20s infinite alternate;"></div>
    </div>

    <!-- Floating Elements -->
    <div class="floating-element" style="position: absolute; top: 20%; left: 15%; font-size: 60px; opacity: 0.15; color: white; animation: float 15s infinite ease-in-out; z-index: 2;">📸</div>
    <div class="floating-element" style="position: absolute; bottom: 30%; right: 10%; font-size: 50px; opacity: 0.15; color: white; animation: float 20s infinite ease-in-out reverse; z-index: 2;">🖼️</div>

    <div class="container" style="position: relative; z-index: 3; min-height: 500px; display: flex; align-items: center;">
        <div class="hero-content" style="max-width: 800px; padding: 100px 0;">
            <h1 style="font-size: 56px; font-weight: 800; color: white; margin-bottom: 20px; line-height: 1.2; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);">
                Our <span style="color: #66BB6A;">Visual</span> Journey
            </h1>
            <p style="font-size: 24px; color: rgba(255, 255, 255, 0.95); margin-bottom: 30px; line-height: 1.6;">
                Capturing moments of transformation, community, and environmental impact
            </p>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator" style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); color: white; z-index: 3; text-align: center;">
        <div style="font-size: 14px; letter-spacing: 2px; margin-bottom: 10px; opacity: 0.9;">EXPLORE GALLERY</div>
        <i class="fas fa-chevron-down" style="font-size: 20px; animation: bounce 2s infinite;"></i>
    </div>
</section>

<section class="featured-gallery-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <h2>Our Gallery Collection</h2>
            <div class="tag">MOMENTS THAT MATTER</div>
            <p>Click on any image to view details about our work and impact</p>
        </div>

        <!-- Gallery Filter -->
        <div class="gallery-filter">
            <button class="filter-btn active" data-filter="all">All Photos</button>
            <button class="filter-btn" data-filter="community">Community</button>
            <button class="filter-btn" data-filter="advocacy">Advocacy</button>
            <button class="filter-btn" data-filter="education">Education</button>
            <button class="filter-btn" data-filter="environment">Environment</button>
        </div>

        <!-- Photo Grid -->
        <div class="photo-grid">
            <!-- Image 1: Community Clean-Up Day -->
            <div class="photo-item large" data-filter="community">
                <div class="photo-card"
                     data-image="/images/Field work.jpg"
                     data-title="Community Clean-Up Day"
                     data-description="Waste pickers and community members working together in Ubungo municipality to clean public spaces. This initiative not only improves the environment but also fosters community solidarity and recognition of waste pickers' essential role in urban cleanliness."
                     data-date="June 15, 2024"
                     data-location="Ubungo, Dar es Salaam">
                    <img src="/images/Field work.jpg" alt="Community Clean Up" loading="lazy">
                    <div class="photo-overlay">
                        <div class="photo-content">
                            <i class="fas fa-hands-helping photo-icon"></i>
                            <h3 class="photo-title">Community Clean-Up Day</h3>
                            <p class="photo-desc">Waste pickers and community members working together in Ubungo</p>
                            <div class="photo-tags">
                                <span class="tag">Community</span>
                                <span class="tag">Environment</span>
                            </div>
                            <div class="photo-cta">
                                <span>Click to view details</span>
                                <i class="fas fa-expand-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 2: Field Registration Work -->
            <div class="photo-item" data-filter="advocacy">
                <div class="photo-card"
                     data-image="/images/Scripting.jpg"
                     data-title="Field Registration & Data Collection"
                     data-description="Our team conducting field registration of waste pickers in Kinondoni municipality. This crucial data helps us advocate for formal recognition and better working conditions. Each registration brings us closer to comprehensive representation of waste pickers' needs."
                     data-date="May 20, 2024"
                     data-location="Kinondoni, Dar es Salaam">
                    <img src="/images/Scripting.jpg" alt="Field Registration Work" loading="lazy">
                    <div class="photo-overlay">
                        <div class="photo-content">
                            <i class="fas fa-clipboard-list photo-icon"></i>
                            <h4 class="photo-title">Field Registration Work</h4>
                            <p class="photo-desc">Data collection for waste picker advocacy</p>
                            <div class="photo-tags">
                                <span class="tag">Advocacy</span>
                                <span class="tag">Research</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 3: Women Waste Pickers Meeting -->
            <div class="photo-item" data-filter="community">
                <div class="photo-card"
                     data-image="/images/Speaking4.jpg"
                     data-title="Women Waste Pickers Assembly"
                     data-description="A gathering of women waste pickers in Temeke municipality discussing challenges and solutions. Women comprise over 40% of waste pickers in Dar es Salaam and face unique challenges. These meetings empower them to voice their concerns and contribute to collective decision-making."
                     data-date="April 10, 2024"
                     data-location="Temeke, Dar es Salaam">
                    <img src="/images/Speaking4.jpg" alt="Women Waste Pickers Meeting" loading="lazy">
                    <div class="photo-overlay">
                        <div class="photo-content">
                            <i class="fas fa-users photo-icon"></i>
                            <h4 class="photo-title">Women's Assembly</h4>
                            <p class="photo-desc">Women waste pickers discussing their challenges</p>
                            <div class="photo-tags">
                                <span class="tag">Community</span>
                                <span class="tag">Gender</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 4: Community Training Session -->
            <div class="photo-item" data-filter="education">
                <div class="photo-card"
                     data-image="/images/Outside gathering.jpg"
                     data-title="MTAWADA Exchange Session"
                     data-description="Educational workshop on occupational safety and workers' rights for waste pickers in Ilala municipality. Participants learn about protective equipment, handling hazardous materials, and their legal rights as informal sector workers."
                     data-date="July 5, 2024"
                     data-location="Ilala, Dar es Salaam">
                    <img src="/images/Outside gathering.jpg" alt="Community Training Session" loading="lazy">
                    <div class="photo-overlay">
                        <div class="photo-content">
                            <i class="fas fa-graduation-cap photo-icon"></i>
                            <h4 class="photo-title">Safety Training Session</h4>
                            <p class="photo-desc">Workshop on occupational safety and rights</p>
                            <div class="photo-tags">
                                <span class="tag">Education</span>
                                <span class="tag">Safety</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 5: Advocacy Meeting -->
            <div class="photo-item" data-filter="advocacy">
                <div class="photo-card"
                     data-image="/images/Speaking 3.jpg"
                     data-title="Annual General Meeting"
                     data-description="MTAWADA representatives meeting with local government officials in Kigamboni to discuss waste picker recognition and integration into formal waste management systems. These dialogues are crucial for policy change and sustainable solutions."
                     data-date="March 22, 2024"
                     data-location="Kigamboni, Dar es Salaam">
                    <img src="/images/Speaking 3.jpg" alt="Advocacy Meeting" loading="lazy">
                    <div class="photo-overlay">
                        <div class="photo-content">
                            <i class="fas fa-handshake photo-icon"></i>
                            <h4 class="photo-title">Advocacy Meeting</h4>
                            <p class="photo-desc">Dialogues with local government officials</p>
                            <div class="photo-tags">
                                <span class="tag">Advocacy</span>
                                <span class="tag">Policy</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Lightbox Modal Styles */
.lightbox-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    display: none;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.lightbox-modal.active {
    display: block;
    opacity: 1;
    animation: fadeIn 0.3s ease;
}

.lightbox-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.95);
    backdrop-filter: blur(10px);
}

.lightbox-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 90%;
    max-width: 1200px;
    height: 90vh;
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
}

.lightbox-close {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 50px;
    height: 50px;
    background: #1B5E20;
    color: white;
    border: none;
    border-radius: 50%;
    font-size: 20px;
    cursor: pointer;
    z-index: 10;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.lightbox-close:hover {
    background: #0D4A18;
    transform: rotate(90deg);
}

.lightbox-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 60px;
    height: 60px;
    background: rgba(27, 94, 32, 0.9);
    color: white;
    border: none;
    border-radius: 50%;
    font-size: 20px;
    cursor: pointer;
    z-index: 10;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.lightbox-nav:hover {
    background: #0D4A18;
    transform: translateY(-50%) scale(1.1);
}

.lightbox-nav.prev {
    left: 20px;
}

.lightbox-nav.next {
    right: 20px;
}

.lightbox-content {
    display: flex;
    height: 100%;
}

.lightbox-image-container {
    flex: 0 0 65%;
    height: 100%;
    overflow: hidden;
    background: #f8f9fa;
}

#lightbox-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
    animation: zoomIn 0.5s ease;
}

.lightbox-info {
    flex: 0 0 35%;
    padding: 40px;
    background: #F8FAFC;
    overflow-y: auto;
}

.lightbox-info h3 {
    color: #1B5E20;
    font-size: 28px;
    margin-bottom: 20px;
    font-weight: 700;
    line-height: 1.3;
}

.lightbox-info p {
    color: #666;
    line-height: 1.7;
    margin-bottom: 30px;
    font-size: 16px;
}

.lightbox-meta {
    display: flex;
    flex-direction: column;
    gap: 15px;
    padding-top: 20px;
    border-top: 1px solid #e0e0e0;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #666;
    font-size: 14px;
}

.meta-item i {
    color: #1B5E20;
    width: 20px;
}

/* Gallery Filter */
.gallery-filter {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-bottom: 40px;
    flex-wrap: wrap;
}

.filter-btn {
    background: white;
    border: 2px solid #E8F5E9;
    color: #1B5E20;
    padding: 10px 25px;
    border-radius: 25px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.filter-btn:hover {
    background: #E8F5E9;
    transform: translateY(-2px);
}

.filter-btn.active {
    background: #1B5E20;
    color: white;
    border-color: #1B5E20;
}

/* Enhanced Photo Grid */
.photo-grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-auto-rows: minmax(200px, auto);
    gap: 25px;
    margin-bottom: 40px;
}

.photo-item.large {
    grid-column: span 8;
    grid-row: span 2;
}

.photo-item:not(.large) {
    grid-column: span 4;
    grid-row: span 1;
}

.photo-card {
    position: relative;
    overflow: hidden;
    border-radius: 18px;
    height: 100%;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    background: white;
    aspect-ratio: 1/1;
}

.photo-item.large .photo-card {
    aspect-ratio: 2/1;
}

.photo-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}

.photo-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to top,
        rgba(27, 94, 32, 0.95) 0%,
        rgba(27, 94, 32, 0.7) 30%,
        rgba(27, 94, 32, 0.3) 70%,
        transparent 100%
    );
    opacity: 0;
    transition: opacity 0.4s ease;
    display: flex;
    align-items: flex-end;
    padding: 30px;
}

.photo-card:hover .photo-overlay {
    opacity: 1;
}

.photo-card:hover img {
    transform: scale(1.05);
}

.photo-content {
    width: 100%;
    color: white;
    transform: translateY(20px);
    transition: transform 0.4s ease;
}

.photo-card:hover .photo-content {
    transform: translateY(0);
}

.photo-icon {
    font-size: 40px;
    margin-bottom: 15px;
    display: block;
    color: #66BB6A;
}

.photo-item:not(.large) .photo-icon {
    font-size: 30px;
    margin-bottom: 10px;
}

.photo-title {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 10px;
    line-height: 1.3;
}

.photo-item:not(.large) .photo-title {
    font-size: 18px;
    margin-bottom: 5px;
}

.photo-desc {
    font-size: 14px;
    opacity: 0.9;
    line-height: 1.5;
    margin-bottom: 15px;
}

.photo-tags {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
    margin-bottom: 15px;
}

.photo-tags .tag {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    padding: 4px 12px;
    border-radius: 12px;
    font-size: 12px;
    font-weight: 600;
}

.photo-cta {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 12px;
    opacity: 0.8;
    margin-top: 10px;
}

.photo-cta i {
    color: #66BB6A;
}

/* Hover Effects */
.photo-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow:
        0 25px 50px rgba(27, 94, 32, 0.2),
        0 0 0 1px rgba(102, 187, 106, 0.2);
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes zoomIn {
    from { transform: scale(0.95); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(5deg); }
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
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Photo card entrance animation */
.photo-item {
    animation: fadeInUp 0.6s ease forwards;
    opacity: 0;
}

.photo-item:nth-child(1) { animation-delay: 0.1s; }
.photo-item:nth-child(2) { animation-delay: 0.2s; }
.photo-item:nth-child(3) { animation-delay: 0.3s; }
.photo-item:nth-child(4) { animation-delay: 0.4s; }
.photo-item:nth-child(5) { animation-delay: 0.5s; }

/* Responsive Design */
@media (max-width: 1024px) {
    .photo-grid {
        grid-template-columns: repeat(6, 1fr);
        gap: 20px;
    }

    .photo-item.large {
        grid-column: span 6;
        grid-row: span 2;
    }

    .photo-item:not(.large) {
        grid-column: span 3;
        grid-row: span 1;
    }

    .photo-item.large .photo-card {
        aspect-ratio: 1/1;
    }

    .lightbox-content {
        flex-direction: column;
    }

    .lightbox-image-container {
        flex: 0 0 60%;
    }

    .lightbox-info {
        flex: 0 0 40%;
    }
}

@media (max-width: 768px) {
    .gallery-hero h1 {
        font-size: 42px !important;
    }

    .gallery-hero p {
        font-size: 20px !important;
    }

    .photo-grid {
        grid-template-columns: repeat(1, 1fr);
        gap: 15px;
    }

    .photo-item.large {
        grid-column: span 1;
        grid-row: span 1;
    }

    .photo-item:not(.large) {
        grid-column: span 1;
        grid-row: span 1;
    }

    .photo-card {
        height: 300px;
    }

    .photo-item.large .photo-card {
        height: 350px;
    }

    .photo-overlay {
        padding: 20px;
    }

    .lightbox-container {
        width: 95%;
        height: 95vh;
    }

    .lightbox-image-container {
        flex: 0 0 50%;
    }

    .lightbox-info {
        flex: 0 0 50%;
        padding: 20px;
    }

    .lightbox-info h3 {
        font-size: 22px;
    }

    .gallery-stats {
        grid-template-columns: repeat(2, 1fr) !important;
        padding: 20px !important;
    }

    .stat-number {
        font-size: 32px !important;
    }
}

@media (max-width: 576px) {
    .gallery-hero h1 {
        font-size: 36px !important;
    }

    .gallery-hero p {
        font-size: 18px !important;
    }

    .photo-card {
        height: 250px;
    }

    .photo-item.large .photo-card {
        height: 300px;
    }

    .lightbox-container {
        height: 100vh;
        border-radius: 0;
        width: 100%;
    }

    .lightbox-content {
        flex-direction: column;
    }

    .lightbox-image-container {
        flex: 0 0 40%;
    }

    .lightbox-info {
        flex: 0 0 60%;
    }

    .gallery-stats {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
    }

    .gallery-filter {
        gap: 10px;
    }

    .filter-btn {
        padding: 8px 15px;
        font-size: 14px;
    }
}

/* Loading animation for images */
img[loading="lazy"] {
    opacity: 0;
    transition: opacity 0.3s ease;
}

img[loading="lazy"].loaded {
    opacity: 1;
}

/* Touch device optimization */
.touch-device .photo-card {
    cursor: pointer;
}

.photo-card:active {
    transform: scale(0.98);
}

</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gallery Data
    const galleryData = [
        {
            image: "/images/Field work.jpg",
            title: "Community Clean-Up Day",
            description: "Waste pickers and community members working together in Ubungo municipality to clean public spaces. This initiative not only improves the environment but also fosters community solidarity and recognition of waste pickers' essential role in urban cleanliness.",
            date: "June 15, 2024",
            location: "Ubungo, Dar es Salaam",
            category: "community"
        },
        {
            image: "/images/Scripting.jpg",
            title: "Advocacy Session Using Media Outlets",
            description: "Picture showing Wastepickers and Media representatives from TBC 1 (Tanzania Broadcast Company ). The session was conducted on February 28, 2025, at Kisiwani Street, Ubungo Municipality. The focus was to advocate for our sectoral rights while drawing attention to the significant difficulties that routinely impede our work. Specifically, the session aimed to sensitize the wider society to our integral contribution to environmental conservation and to clearly articulate the barriers that are slowing down the sector's advancement.",
            date: "May 20, 2024",
            location: "Kinondoni, Dar es Salaam",
            category: "advocacy"
        },
        {
            image: "/images/Speaking4.jpg",
            title: "Women Waste Pickers Assembly",
            description: "A gathering of women waste pickers in Temeke municipality discussing challenges and solutions. Women comprise over 40% of waste pickers in Dar es Salaam and face unique challenges. These meetings empower them to voice their concerns and contribute to collective decision-making.",
            date: "April 10, 2024",
            location: "Temeke, Dar es Salaam",
            category: "community"
        },
        {
            image: "/images/Outside gathering.jpg",
            title: "MTAWADA Exchange Session",
            description: "Following our formal registration in April 2024, we successfully hosted various exchange Session for our members. The core focus was on organization building and grassroots capacity enhancement. At this event, attendees gained essential skills and knowledge regarding MTAWADA's structure, objectives, and upcoming initiatives. Furthermore, the session addressed member rights and strategized on actionable plans to overcome current organizational challenges.",
            date: "July 5, 2024",
            location: "Ilala, Dar es Salaam",
            category: "education"
        },
        {
            image: "/images/Speaking 3.jpg",
            title: "Advocacy Strategy Meeting",
            description: "MTAWADA representatives meeting with local government officials in Kigamboni to discuss waste picker recognition and integration into formal waste management systems. These dialogues are crucial for policy change and sustainable solutions.",
            date: "March 22, 2024",
            location: "Kigamboni, Dar es Salaam",
            category: "advocacy"
        }
    ];

    // Lightbox Elements
    const lightbox = document.getElementById('lightbox-modal');
    const lightboxImage = document.getElementById('lightbox-image');
    const lightboxTitle = document.getElementById('lightbox-title');
    const lightboxDescription = document.getElementById('lightbox-description');
    const lightboxDate = document.getElementById('lightbox-date');
    const lightboxLocation = document.getElementById('lightbox-location');
    const lightboxClose = document.getElementById('lightbox-close');
    const lightboxPrev = document.getElementById('lightbox-prev');
    const lightboxNext = document.getElementById('lightbox-next');

    // Gallery Elements
    const photoCards = document.querySelectorAll('.photo-card');
    const filterButtons = document.querySelectorAll('.filter-btn');
    let currentImageIndex = 0;

    // Open Lightbox
    function openLightbox(index) {
        const item = galleryData[index];
        lightboxImage.src = item.image;
        lightboxTitle.textContent = item.title;
        lightboxDescription.textContent = item.description;
        lightboxDate.textContent = item.date;
        lightboxLocation.textContent = item.location;
        currentImageIndex = index;

        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    // Close Lightbox
    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }

    // Navigate Lightbox
    function navigateLightbox(direction) {
        currentImageIndex += direction;

        if (currentImageIndex < 0) {
            currentImageIndex = galleryData.length - 1;
        } else if (currentImageIndex >= galleryData.length) {
            currentImageIndex = 0;
        }

        const item = galleryData[currentImageIndex];
        lightboxImage.src = item.image;
        lightboxTitle.textContent = item.title;
        lightboxDescription.textContent = item.description;
        lightboxDate.textContent = item.date;
        lightboxLocation.textContent = item.location;

        // Add transition effect
        lightboxImage.style.animation = 'none';
        setTimeout(() => {
            lightboxImage.style.animation = 'zoomIn 0.5s ease';
        }, 10);
    }

    // Filter Gallery
    function filterGallery(category) {
        const items = document.querySelectorAll('.photo-item');

        items.forEach(item => {
            if (category === 'all' || item.dataset.filter === category) {
                item.style.display = 'block';
                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }, 10);
            } else {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    item.style.display = 'none';
                }, 300);
            }
        });

        // Update active filter button
        filterButtons.forEach(btn => {
            btn.classList.remove('active');
            if (btn.dataset.filter === category) {
                btn.classList.add('active');
            }
        });
    }

    // Event Listeners
    photoCards.forEach((card, index) => {
        card.addEventListener('click', () => openLightbox(index));

        // Keyboard navigation for accessibility
        card.addEventListener('keypress', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                openLightbox(index);
            }
        });
    });

    lightboxClose.addEventListener('click', closeLightbox);
    lightboxPrev.addEventListener('click', () => navigateLightbox(-1));
    lightboxNext.addEventListener('click', () => navigateLightbox(1));

    // Keyboard navigation for lightbox
    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('active')) return;

        switch(e.key) {
            case 'Escape':
                closeLightbox();
                break;
            case 'ArrowLeft':
                navigateLightbox(-1);
                break;
            case 'ArrowRight':
                navigateLightbox(1);
                break;
        }
    });

    // Filter button events
    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            filterGallery(btn.dataset.filter);
        });
    });

    // Close lightbox when clicking overlay
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });

    // Image lazy loading
    const images = document.querySelectorAll('img[loading="lazy"]');
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.classList.add('loaded');
                imageObserver.unobserve(img);
            }
        });
    });

    images.forEach(img => imageObserver.observe(img));

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

    // Touch device detection
    if ('ontouchstart' in window) {
        document.body.classList.add('touch-device');
    }
});

// Add CSS for loaded images
const style = document.createElement('style');
style.textContent = `
    .photo-item {
        transition: all 0.3s ease;
    }

    .lightbox-image-container {
        transition: all 0.3s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .photo-card,
        .photo-overlay,
        .photo-content,
        .lightbox-modal,
        .lightbox-image,
        * {
            animation: none !important;
            transition: none !important;
        }
    }
`;
document.head.appendChild(style);
</script>

@endsection
