<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        // Sample portfolio data - in real app, this would come from database
        $portfolios = collect([
            [
                'id' => 1,
                'title' => 'IndiHomeTV',
                'category' => 'Streaming • Video on Demand',
                'technologies' => ['Web', 'Android', 'iOS'],
                'image' => '/images/portfolio/indihometv.jpg',
                'type' => 'web'
            ],
            [
                'id' => 2,
                'title' => 'JHO (BPJS Ketenagakerjaan)',
                'category' => 'Insurance • Finance',
                'technologies' => ['Android', 'iOS'],
                'image' => '/images/portfolio/jho-bpjs.jpg',
                'type' => 'mobile'
            ],
            [
                'id' => 3,
                'title' => 'Eraspace',
                'category' => 'E-commerce • Lifestyle',
                'technologies' => ['Web', 'Android'],
                'image' => '/images/portfolio/eraspace.jpg',
                'type' => 'web'
            ],
            [
                'id' => 4,
                'title' => 'MRT Jakarta',
                'category' => 'Transportation • Lifestyle',
                'technologies' => ['Android', 'iOS', 'Web'],
                'image' => '/images/portfolio/mrt-jakarta.jpg',
                'type' => 'mobile'
            ],
            [
                'id' => 5,
                'title' => 'Paragon SPM',
                'category' => 'Productivity • Sales Force',
                'technologies' => ['Web', 'Android'],
                'image' => '/images/portfolio/paragon-spm.jpg',
                'type' => 'web'
            ],
            [
                'id' => 6,
                'title' => 'TIX ID',
                'category' => 'Streaming • Video on Demand',
                'technologies' => ['Web', 'Android', 'iOS'],
                'image' => '/images/portfolio/tix-id.jpg',
                'type' => 'mobile'
            ],
            [
                'id' => 7,
                'title' => 'Daihatsu',
                'category' => 'Automotive • Lifestyle',
                'technologies' => ['Android', 'iOS'],
                'image' => '/images/portfolio/daihatsu.jpg',
                'type' => 'mobile'
            ],
            [
                'id' => 8,
                'title' => 'Vovic',
                'category' => 'Health • Wellness',
                'technologies' => ['Web', 'Android'],
                'image' => '/images/portfolio/vovic.jpg',
                'type' => 'web'
            ],
            [
                'id' => 9,
                'title' => 'Acer',
                'category' => 'Technology • E-commerce',
                'technologies' => ['Web', 'Android', 'iOS'],
                'image' => '/images/portfolio/acer.jpg',
                'type' => 'web'
            ]
        ]);

        // Filter by technology if requested
        $filterTech = $request->get('tech');
        if ($filterTech && $filterTech !== 'all') {
            $portfolios = $portfolios->filter(function ($portfolio) use ($filterTech) {
                // Create a mapping for proper case conversion
                $techMapping = [
                    'android' => 'Android',
                    'ios' => 'iOS',           // This is the fix!
                    'web' => 'Web',
                    'androidtv' => 'AndroidTV'
                ];
                
                $properTechName = $techMapping[strtolower($filterTech)] ?? ucfirst($filterTech);
                return in_array($properTechName, $portfolio['technologies']);
            });
        }

        // Filter by category if requested
        $filterCategory = $request->get('category');
        if ($filterCategory && $filterCategory !== 'all') {
            $portfolios = $portfolios->filter(function ($portfolio) use ($filterCategory) {
                return str_contains(strtolower($portfolio['category']), strtolower($filterCategory));
            });
        }

        $technologies = ['all', 'android', 'ios', 'web', 'androidtv'];
        $categories = [
            'all' => 'All Category',
            'ecommerce' => 'E-commerce',
            'streaming' => 'Streaming',
            'finance' => 'Finance',
            'transportation' => 'Transportation',
            'productivity' => 'Productivity',
            'automotive' => 'Automotive',
            'health' => 'Health',
            'technology' => 'Technology'
        ];

        return view('pages.portfolio', compact('portfolios', 'technologies', 'categories', 'filterTech', 'filterCategory'));
    }

    public function show($id)
    {
        // Portfolio detail view - implement as needed
        return view('pages.portfolio', compact('id'));
    }
}