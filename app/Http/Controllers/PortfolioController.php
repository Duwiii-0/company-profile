<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        // Sample portfolio data - in real app, this would come from database
        $portfolios = collect([
            ['id' => 1, 'title' => 'IndiHomeTV', 'category' => 'Streaming • Video on Demand', 'technologies' => ['Web', 'Android', 'iOS'], 'image' => 'resources/images/mockup.png', 'type' => 'web'],
            ['id' => 2, 'title' => 'JHO (BPJS Ketenagakerjaan)', 'category' => 'Insurance • Finance', 'technologies' => ['Android', 'iOS'], 'image' => 'resources/images/mockup.png', 'type' => 'mobile'],
            ['id' => 3, 'title' => 'Eraspace', 'category' => 'E-commerce • Lifestyle', 'technologies' => ['Web', 'Android'], 'image' => 'resources/images/mockup.png', 'type' => 'web'],
            ['id' => 4, 'title' => 'MRT Jakarta', 'category' => 'Transportation • Lifestyle', 'technologies' => ['Android', 'iOS', 'Web'], 'image' => 'resources/images/mockup.png', 'type' => 'mobile'],
            ['id' => 5, 'title' => 'Paragon SPM', 'category' => 'Productivity • Sales Force', 'technologies' => ['Web', 'Android'], 'image' => 'resources/images/mockup.png', 'type' => 'web'],
            ['id' => 6, 'title' => 'TIX ID', 'category' => 'Streaming • Video on Demand', 'technologies' => ['Web', 'Android', 'iOS'], 'image' => 'resources/images/mockup.png', 'type' => 'mobile'],
            ['id' => 7, 'title' => 'Daihatsu', 'category' => 'Automotive • Lifestyle', 'technologies' => ['Android', 'iOS'], 'image' => 'resources/images/mockup.png', 'type' => 'mobile'],
            ['id' => 8, 'title' => 'Vovic', 'category' => 'Health • Wellness', 'technologies' => ['Web', 'Android'], 'image' => 'resources/images/mockup.png', 'type' => 'web'],
            ['id' => 9, 'title' => 'Acer', 'category' => 'Technology • E-commerce', 'technologies' => ['Web', 'Android', 'iOS'], 'image' => 'resources/images/mockup.png', 'type' => 'web'],
            ['id' => 10, 'title' => 'Travelista', 'category' => 'Travel • Booking', 'technologies' => ['Web', 'iOS'], 'image' => 'resources/images/mockup.png', 'type' => 'web'],
            ['id' => 11, 'title' => 'EduConnect', 'category' => 'Education • Platform', 'technologies' => ['Web', 'Android'], 'image' => 'resources/images/mockup.png', 'type' => 'web'],
            ['id' => 12, 'title' => 'FitNation', 'category' => 'Health • Fitness', 'technologies' => ['Android', 'iOS'], 'image' => 'resources/images/mockup.png', 'type' => 'mobile'],
            ['id' => 13, 'title' => 'Eventify', 'category' => 'Events • Ticketing', 'technologies' => ['Web'], 'image' => 'resources/images/mockup.png', 'type' => 'web'],
            ['id' => 14, 'title' => 'GreenKart', 'category' => 'E-commerce • Groceries', 'technologies' => ['Android', 'Web'], 'image' => 'resources/images/mockup.png', 'type' => 'web'],
            ['id' => 15, 'title' => 'FinLite', 'category' => 'Finance • Budgeting', 'technologies' => ['iOS'], 'image' => 'resources/images/mockup.png', 'type' => 'mobile'],
            ['id' => 16, 'title' => 'RideLink', 'category' => 'Transportation • Ridesharing', 'technologies' => ['Android', 'iOS'], 'image' => 'resources/images/mockup.png', 'type' => 'mobile'],
            ['id' => 17, 'title' => 'PetCare', 'category' => 'Health • Animals', 'technologies' => ['Web', 'iOS'], 'image' => 'resources/images/mockup.png', 'type' => 'web'],
            ['id' => 18, 'title' => 'SkillBoost', 'category' => 'Education • Skills', 'technologies' => ['Web', 'Android', 'iOS'], 'image' => 'resources/images/mockup.png', 'type' => 'web'],
        ]);


        // Filter by technology if requested
        $filterTech = $request->get('tech', 'all');
        if ($filterTech && $filterTech !== 'all') {
            $portfolios = $portfolios->filter(function ($portfolio) use ($filterTech) {
                $techMapping = [
                    'android' => 'Android',
                    'ios' => 'iOS',
                    'web' => 'Web',
                    'androidtv' => 'AndroidTV'
                ];
                $properTechName = $techMapping[strtolower($filterTech)] ?? ucfirst($filterTech);
                return in_array($properTechName, $portfolio['technologies']);
            });
        }

        // Filter by category if requested
        $filterCategory = $request->get('category', 'all');
        if ($filterCategory && $filterCategory !== 'all') {
            $portfolios = $portfolios->filter(function ($portfolio) use ($filterCategory) {
                return str_contains(strtolower($portfolio['category']), strtolower($filterCategory));
            });
        }

        // Paginate manually (since we're using a collection)
        $page = $request->get('page', 1);
        $perPage = 9;
        $pagedPortfolios = new LengthAwarePaginator(
            $portfolios->forPage($page, $perPage)->values(),
            $portfolios->count(),
            $perPage,
            $page,
            [
                'path' => $request->url(),
                'query' => $request->query(),
                'pageName' => 'page'
            ]
        );

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

        if ($request->ajax() || $request->get('ajax')) {
            $html = '';

            if ($pagedPortfolios->count() > 0) {
                foreach ($pagedPortfolios as $index => $portfolio) {
                    $delay = $index * 0.1;
                    $cardHtml = view('components.portfoliocard', ['portfolio' => $portfolio])->render();
                    $html .= '<div class="animate-fade-in-up" style="animation-delay: ' . $delay . 's;">' . $cardHtml . '</div>';
                }
            } else {
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
                                    <button id="view-all-btn" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-red-600 to-pink-500 text-white rounded-xl hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                        View All Projects
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>';
            }

            // Render pagination links with preserved filters
            $pagination = $pagedPortfolios->withQueryString()->links('pagination::tailwind')->render();

            return response()->json([
                'html' => $html,
                'pagination' => $pagination,
                'count' => $pagedPortfolios->count()
            ]);
        }

        return view('pages.portfolio', [
            'portfolios' => $pagedPortfolios,
            'technologies' => $technologies,
            'categories' => $categories,
            'filterTech' => $filterTech,
            'filterCategory' => $filterCategory
        ]);
    }

    public function show($id)
    {
        return view('pages.portfolio', compact('id'));
    }
}