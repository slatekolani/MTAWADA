<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\SEOHelper;

class MTAWADAController extends Controller
{
    public function home()
    {
        $seo = SEOHelper::generateMetaTags('home');
        $breadcrumb = [
            [
                "@type" => "ListItem",
                "position" => 1,
                "name" => "Home",
                "item" => "https://mtawada.or.tz"
            ]
        ];
        return view('Pages.home', compact('seo', 'breadcrumb'));
    }

    public function about()
    {
        $seo = SEOHelper::generateMetaTags('about');
        $breadcrumb = [
            [
                "@type" => "ListItem",
                "position" => 1,
                "name" => "Home",
                "item" => "https://mtawada.or.tz"
            ],
            [
                "@type" => "ListItem",
                "position" => 2,
                "name" => "About Us",
                "item" => "https://mtawada.or.tz/mtawada/about"
            ]
        ];
        return view('Pages.About.about', compact('seo', 'breadcrumb'));
    }

    public function mission()
    {
        $seo = SEOHelper::generateMetaTags('mission');
        $breadcrumb = [
            [
                "@type" => "ListItem",
                "position" => 1,
                "name" => "Home",
                "item" => "https://mtawada.or.tz"
            ],
            [
                "@type" => "ListItem",
                "position" => 2,
                "name" => "Mission & Vision",
                "item" => "https://mtawada.or.tz/mtawada/mission"
            ]
        ];
        return view('Pages.About.mission', compact('seo', 'breadcrumb'));
    }

    public function history()
    {
        $seo = SEOHelper::generateMetaTags('history');
        $breadcrumb = [
            [
                "@type" => "ListItem",
                "position" => 1,
                "name" => "Home",
                "item" => "https://mtawada.or.tz"
            ],
            [
                "@type" => "ListItem",
                "position" => 2,
                "name" => "Our History",
                "item" => "https://mtawada.or.tz/mtawada/history"
            ]
        ];
        return view('Pages.About.history', compact('seo', 'breadcrumb'));
    }

    public function coreValues()
    {
        $seo = SEOHelper::generateMetaTags('core-values');
        $breadcrumb = [
            [
                "@type" => "ListItem",
                "position" => 1,
                "name" => "Home",
                "item" => "https://mtawada.or.tz"
            ],
            [
                "@type" => "ListItem",
                "position" => 2,
                "name" => "Core Values",
                "item" => "https://mtawada.or.tz/mtawada/coreValues"
            ]
        ];
        return view('Pages.About.core-values', compact('seo', 'breadcrumb'));
    }

    public function impact()
    {
        $seo = SEOHelper::generateMetaTags('impact');
        $breadcrumb = [
            [
                "@type" => "ListItem",
                "position" => 1,
                "name" => "Home",
                "item" => "https://mtawada.or.tz"
            ],
            [
                "@type" => "ListItem",
                "position" => 2,
                "name" => "Our Impact",
                "item" => "https://mtawada.or.tz/mtawada/impact"
            ]
        ];
        return view('Pages.impact', compact('seo', 'breadcrumb'));
    }

    public function gallery()
    {
        $seo = SEOHelper::generateMetaTags('gallery');
        $breadcrumb = [
            [
                "@type" => "ListItem",
                "position" => 1,
                "name" => "Home",
                "item" => "https://mtawada.or.tz"
            ],
            [
                "@type" => "ListItem",
                "position" => 2,
                "name" => "Gallery",
                "item" => "https://mtawada.or.tz/mtawada/gallery"
            ]
        ];
        return view('Pages.gallery', compact('seo', 'breadcrumb'));
    }

    public function contact()
    {
        $seo = SEOHelper::generateMetaTags('contact');
        $breadcrumb = [
            [
                "@type" => "ListItem",
                "position" => 1,
                "name" => "Home",
                "item" => "https://mtawada.or.tz"
            ],
            [
                "@type" => "ListItem",
                "position" => 2,
                "name" => "Contact Us",
                "item" => "https://mtawada.or.tz/mtawada/contact"
            ]
        ];
        return view('Pages.contact', compact('seo', 'breadcrumb'));
    }

    public function programs()
    {
        $seo = SEOHelper::generateMetaTags('programs');
        $breadcrumb = [
            [
                "@type" => "ListItem",
                "position" => 1,
                "name" => "Home",
                "item" => "https://mtawada.or.tz"
            ],
            [
                "@type" => "ListItem",
                "position" => 2,
                "name" => "Our Programs",
                "item" => "https://mtawada.or.tz/mtawada/programs"
            ]
        ];
        return view('Pages.programs', compact('seo', 'breadcrumb'));
    }

    public function donate()
    {
        $seo = SEOHelper::generateMetaTags('donate');
        $breadcrumb = [
            [
                "@type" => "ListItem",
                "position" => 1,
                "name" => "Home",
                "item" => "https://mtawada.or.tz"
            ],
            [
                "@type" => "ListItem",
                "position" => 2,
                "name" => "Donate",
                "item" => "https://mtawada.or.tz/mtawada/donate"
            ]
        ];
        return view('Pages.donate', compact('seo', 'breadcrumb'));
    }
}
