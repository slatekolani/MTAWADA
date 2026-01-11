<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" ';
        $sitemap .= 'xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">';

        $urls = [
            [
                'loc' => 'https://mtawada.or.tz/',
                'lastmod' => '2025-01-11',
                'changefreq' => 'daily',
                'priority' => '1.0'
            ],
            [
                'loc' => 'https://mtawada.or.tz/mtawada/home',
                'lastmod' => '2025-01-11',
                'changefreq' => 'daily',
                'priority' => '1.0'
            ],
            [
                'loc' => 'https://mtawada.or.tz/mtawada/about',
                'lastmod' => '2025-01-11',
                'changefreq' => 'weekly',
                'priority' => '0.9'
            ],
            [
                'loc' => 'https://mtawada.or.tz/mtawada/mission',
                'lastmod' => '2025-01-11',
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => 'https://mtawada.or.tz/mtawada/history',
                'lastmod' => '2025-01-11',
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
            [
                'loc' => 'https://mtawada.or.tz/mtawada/coreValues',
                'lastmod' => '2025-01-11',
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
            [
                'loc' => 'https://mtawada.or.tz/mtawada/programs',
                'lastmod' => '2025-01-11',
                'changefreq' => 'weekly',
                'priority' => '0.9'
            ],
            [
                'loc' => 'https://mtawada.or.tz/mtawada/impact',
                'lastmod' => '2025-01-11',
                'changefreq' => 'weekly',
                'priority' => '0.9'
            ],
            [
                'loc' => 'https://mtawada.or.tz/mtawada/donate',
                'lastmod' => '2025-01-11',
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => 'https://mtawada.or.tz/mtawada/gallery',
                'lastmod' => '2025-01-11',
                'changefreq' => 'weekly',
                'priority' => '0.8'
            ],
            [
                'loc' => 'https://mtawada.or.tz/mtawada/contact',
                'lastmod' => '2025-01-11',
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
        ];

        foreach ($urls as $url) {
            $sitemap .= '<url>';
            $sitemap .= '<loc>' . $url['loc'] . '</loc>';
            $sitemap .= '<lastmod>' . $url['lastmod'] . '</lastmod>';
            $sitemap .= '<changefreq>' . $url['changefreq'] . '</changefreq>';
            $sitemap .= '<priority>' . $url['priority'] . '</priority>';
            $sitemap .= '</url>';
        }

        $sitemap .= '</urlset>';

        return response($sitemap, 200)
            ->header('Content-Type', 'text/xml');
    }
}
