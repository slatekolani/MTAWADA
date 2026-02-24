<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Helpers\SEOHelper;
use App\Mail\DonationRequestMail;
use App\Mail\ContactMail;

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

    public function submitDonation(Request $request)
    {
        $validated = $request->validate([
            'amount'        => 'required|numeric|min:1',
            'currency'      => 'required|in:TZS,USD',
            'first_name'    => 'required|string|max:100',
            'last_name'     => 'required|string|max:100',
            'email'         => 'required|email|max:255',
            'phone'         => 'required|string|max:30',
            'country'       => 'nullable|string|max:100',
            'donation_type' => 'required|in:one-time,monthly',
            'comments'      => 'nullable|string|max:2000',
        ]);

        try {
            Mail::to('info@mtawada.or.tz')->send(new DonationRequestMail($validated));
            return response()->json([
                'success' => true,
                'message' => "Thank you {$validated['first_name']}! Your donation request has been received. Our team will contact you at {$validated['email']} with payment instructions within 24 hours.",
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, there was an error sending your request. Please try again or contact us directly at info@mtawada.or.tz.',
            ], 500);
        }
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'first_name'   => 'required|string|max:100',
            'last_name'    => 'required|string|max:100',
            'email'        => 'required|email|max:255',
            'phone'        => 'nullable|string|max:30',
            'inquiry_type' => 'required|string|max:50',
            'message'      => 'required|string|max:5000',
        ]);

        try {
            Mail::to('info@mtawada.or.tz')->send(new ContactMail($validated));
            return response()->json([
                'success' => true,
                'message' => "Thank you {$validated['first_name']}! Your message has been sent. We will get back to you within 24 hours.",
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, there was an error sending your message. Please try again or contact us directly at info@mtawada.or.tz.',
            ], 500);
        }
    }
}
