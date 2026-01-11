<?php

namespace App\Helpers;

class SEOHelper
{
    public static function generateMetaTags($page)
    {
        $seoData = self::getSEOData();
        $pageData = $seoData[$page] ?? $seoData['home'];

        $canonical = 'https://mtawada.or.tz' . $pageData['canonical'];

        return [
            'title' => $pageData['title'],
            'description' => $pageData['description'],
            'keywords' => $pageData['keywords'],
            'canonical' => $canonical,
            'og_title' => $pageData['og_title'] ?? $pageData['title'],
            'og_description' => $pageData['og_description'] ?? $pageData['description'],
            'og_image' => $pageData['og_image'] ?? 'https://mtawada.or.tz/Logo/Mtawada Logo.jpg',
            'og_url' => $canonical,
            'twitter_card' => 'summary_large_image',
            'twitter_title' => $pageData['twitter_title'] ?? $pageData['title'],
            'twitter_description' => $pageData['twitter_description'] ?? $pageData['description'],
        ];
    }

    public static function getSEOData()
    {
        return [
            'home' => [
                'title' => 'MTAWADA - Empowering Waste Pickers in Dar es Salaam',
                'description' => 'MTAWADA (Mtandao wa Waokota Taka Rejeshi Dar es Salaam) is a network uniting waste pickers across Dar es Salaam to fight for recognition, rights, and environmental sustainability through collective action and advocacy.',
                'keywords' => 'MTAWADA, waste pickers Tanzania, Dar es Salaam waste management, environmental conservation Tanzania, circular economy, waste pickers rights, recycling network Tanzania, sustainable waste management',
                'canonical' => '/',
                'og_title' => 'MTAWADA - Uniting Waste Pickers for a Sustainable Future',
                'og_description' => 'Join the movement empowering 1359+ waste pickers across 5 municipalities in Dar es Salaam. Fighting for recognition, rights, and environmental sustainability.',
            ],
            'about' => [
                'title' => 'About Us - MTAWADA Waste Pickers Network',
                'description' => 'Learn about MTAWADA, the leading waste pickers network in Dar es Salaam with over 1359 members across 5 municipalities working towards environmental justice and workers\' rights.',
                'keywords' => 'about MTAWADA, waste pickers organization, Tanzania environmental groups, waste management network, social justice Tanzania',
                'canonical' => '/mtawada/about',
                'og_title' => 'About MTAWADA - Empowering Waste Pickers Since Our Formation',
            ],
            'mission' => [
                'title' => 'Mission & Vision - MTAWADA',
                'description' => 'Discover MTAWADA\'s mission to empower waste pickers and our vision for a sustainable, inclusive waste management system in Dar es Salaam and Tanzania.',
                'keywords' => 'MTAWADA mission, MTAWADA vision, waste pickers goals, environmental sustainability Tanzania, social inclusion',
                'canonical' => '/mtawada/mission',
            ],
            'history' => [
                'title' => 'Our History - MTAWADA',
                'description' => 'Explore the history and journey of MTAWADA from its formation to becoming the leading voice for waste pickers in Dar es Salaam, Tanzania.',
                'keywords' => 'MTAWADA history, waste pickers movement Tanzania, environmental activism history, Dar es Salaam waste management history',
                'canonical' => '/mtawada/history',
            ],
            'core-values' => [
                'title' => 'Core Values - MTAWADA',
                'description' => 'Learn about the core values that guide MTAWADA: dignity, sustainability, solidarity, and justice for waste pickers in Tanzania.',
                'keywords' => 'MTAWADA values, environmental ethics, social justice values, waste pickers principles, organizational values',
                'canonical' => '/mtawada/coreValues',
            ],
            'programs' => [
                'title' => 'Our Programs - MTAWADA',
                'description' => 'Discover MTAWADA\'s programs including research, resource centre, news & events, and community initiatives supporting waste pickers in Dar es Salaam.',
                'keywords' => 'MTAWADA programs, waste management initiatives, environmental research Tanzania, community programs, resource centre',
                'canonical' => '/mtawada/programs',
            ],
            'impact' => [
                'title' => 'Our Impact - MTAWADA',
                'description' => 'See the real impact MTAWADA has made in empowering waste pickers, improving environmental conditions, and driving policy change in Tanzania.',
                'keywords' => 'MTAWADA impact, waste pickers success stories, environmental impact Tanzania, social change metrics, community transformation',
                'canonical' => '/mtawada/impact',
            ],
            'donate' => [
                'title' => 'Donate - Support MTAWADA',
                'description' => 'Support MTAWADA\'s mission to empower waste pickers in Dar es Salaam. Your donation helps improve working conditions, rights, and environmental sustainability.',
                'keywords' => 'donate MTAWADA, support waste pickers, Tanzania charity, environmental donations, social justice funding',
                'canonical' => '/mtawada/donate',
            ],
            'gallery' => [
                'title' => 'Photo Gallery - MTAWADA',
                'description' => 'View photos of MTAWADA\'s work with waste pickers in Dar es Salaam, including community events, training programs, and environmental initiatives.',
                'keywords' => 'MTAWADA photos, waste pickers Tanzania images, community gallery, environmental work photos',
                'canonical' => '/mtawada/gallery',
            ],
            'contact' => [
                'title' => 'Contact Us - MTAWADA',
                'description' => 'Get in touch with MTAWADA. Located in Ubungo, Dar es Salaam. Contact us for partnerships, support, or to learn more about our waste pickers network.',
                'keywords' => 'contact MTAWADA, Dar es Salaam waste pickers contact, environmental organization Tanzania, MTAWADA address phone email',
                'canonical' => '/mtawada/contact',
            ],
        ];
    }
}
