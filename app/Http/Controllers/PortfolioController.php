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


        // If this is an AJAX request, return only the portfolio cards HTML
        if ($request->ajax() || $request->get('ajax')) {
            $html = '';
            
            if ($portfolios->count() > 0) {
                foreach ($portfolios as $index => $portfolio) {
                    $delay = $index * 0.1;
                    $cardHtml = view('components.portfoliocard', ['portfolio' => $portfolio])->render();
                    // Wrap each card with animation div
                    $html .= '<div class="animate-fade-in-up" style="animation-delay: ' . $delay . 's;">' . $cardHtml . '</div>';
                }
            } else {
                // Empty state HTML
                $html = '
                    <div class="col-span-full text-center py-20 animate-fade-in">
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-32 h-32 bg-gradient-to-br from-purple-100 to-pink-100 rounded-full animate-pulse opacity-50"></div>
                            </div>
                            <div class="relative z-10">
                                <div class="text-gray-400 text-2xl mb-4 font-semibold">No projects found</div>
                                <p class="text-gray-500 text-lg">Try adjusting your filters to see more results.</p>
                                <div class="mt-6">
                                    <button id="view-all-btn" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-xl hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                        View All Projects
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
            }

            return response()->json([
                'html' => $html,
                'count' => $portfolios->count()
            ]);
        }

        // For regular page loads, return the full view
        return view('pages.portfolio', compact('portfolios', 'technologies', 'categories', 'filterTech', 'filterCategory'));
    }

    public function show($id)
    {
        // Portfolio detail view - implement as needed
        return view('pages.portfolio', compact('id'));
    }
}