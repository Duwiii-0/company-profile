@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-12 lg:px-8 mt-2 bg-gray-100">
    <!-- Header Section with enhanced animations -->
    <div class="mb-12 animate-slide-up">
        <div class="relative overflow-hidden rounded-2xl p-8 lg:p-12">
            <!-- Background decoration -->
            <div class="absolute inset-0 bg-gradient-to-br from-purple-100/20 to-pink-100/20"></div>
            <div class="absolute -top-20 -right-20 w-40 h-40 bg-purple-200/30 rounded-full blur-3xl animate-float"></div>
            <div class="absolute -bottom-20 -left-20 w-40 h-40 bg-pink-200/30 rounded-full blur-3xl animate-float-delayed"></div>
            
            <div class="relative z-10">
                <h1 class="text-4xl lg:text-5xl font-bold mb-6 bg-gradient-to-r from-red-700 to-pink-500 bg-clip-text text-transparent animate-gradient-shift">
                    Our Portfolio
                </h1>
                <p class="text-gray-600 leading-relaxed max-w-4xl text-lg">
                    We place ourselves on our unwavering commitment to quality and customer satisfaction. We strive to exceed our client's expectations at every step of the way, 
                    delivering reliable, sustainable, and lovable software solutions.
                </p>
            </div>
        </div>
    </div>

    <!-- Filter Section with enhanced styling -->
    <div class="mb-12 animate-slide-up" style="animation-delay: 0.2s;">
        <h2 class="text-2xl font-semibold mb-8 text-gray-900">See our works by</h2>
        
        <div class="flex flex-wrap items-center gap-6 mb-8 p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
            <!-- Technology Filters -->
            <div class="flex flex-wrap gap-3">
                @foreach($technologies as $tech)
                    <button data-tech="{{ $tech }}" 
                       class="tech-filter group px-6 py-3 rounded-full text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg
                              {{ ($filterTech ?? 'all') === $tech 
                                 ? 'bg-gradient-to-r from-red-600 to-pink-600 text-white shadow-lg shadow-purple-500/25 active' 
                                 : 'bg-gray-100 text-gray-700 hover:bg-gradient-to-r hover:from-red-100 hover:to-pink-100 hover:text-red-600' }}">
                        @if($tech === 'all')
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-2 transition-transform duration-300 group-hover:rotate-12" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                                </svg>
                                All
                            </span>
                        @elseif($tech === 'android')
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-2 transition-transform duration-300 group-hover:bounce" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.523 15.3414c-.5511 0-.9993-.4486-.9993-.9997s.4482-.9993.9993-.9993c.5511 0 .9993.4486.9993.9993.0001.5511-.4482.9997-.9993.9997m-11.046 0c-.5511 0-.9993-.4486-.9993-.9997s.4482-.9993.9993-.9993c.5511 0 .9993.4486.9993.9993 0 .5511-.4482.9997-.9993.9997m11.4045-6.02l1.9973-3.4592a.416.416 0 00-.1521-.5676.416.416 0 00-.5676.1521l-2.0223 3.503C15.5902 8.2439 13.8533 7.8508 12 7.8508s-3.5902.3931-5.1333 1.0329L4.8442 5.4419a.416.416 0 00-.5676-.1521.416.416 0 00-.1521.5676l1.9973 3.4592C2.6889 11.1867.3432 14.6456 0 18.761h24c-.3432-4.1154-2.6889-7.5743-6.1185-9.4396"/>
                                </svg>
                                Android
                            </span>
                        @elseif($tech === 'ios')
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-2 transition-transform duration-300 group-hover:pulse" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
                                </svg>
                                iOS
                            </span>
                        @elseif($tech === 'web')
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-2 transition-transform duration-300 group-hover:rotate-180" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                Web
                            </span>
                        @elseif($tech === 'androidtv')
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-2 transition-transform duration-300 group-hover:scale-110" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5l-1 1v1h8v-1l-1-1h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 12H3V5h18v10z"/>
                                </svg>
                                AndroidTV
                            </span>
                        @endif
                    </button>
                @endforeach
            </div>

            <!-- Category Filter -->
            <div class="ml-auto">
                <select id="category-filter" name="category" 
                        class="px-6 py-3 border border-gray-300 rounded-xl text-sm focus:outline-none hover:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition-all duration-300 hover:shadow-md bg-white">
                    @foreach($categories as $value => $label)
                        <option value="{{ $value }}" {{ ($filterCategory ?? 'all') === $value ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Reset Button -->
            <button id="reset-filters" class="px-6 py-3 text-sm text-gray-600 hover:text-red-600 transition-all duration-300 hover:scale-105 rounded-xl border border-gray-200 hover:border-red-200 hover:bg-red-50">
                Reset
            </button>
        </div>
    </div>

    <!-- Portfolio Grid Container with relative positioning for loading overlay -->
    <div class="relative">
        <!-- Loading overlay - now positioned relative to portfolio grid only -->
        <div id="loading-overlay" class="absolute inset-0 mt-30 bg-white/90 backdrop-blur-[100px] z-10 flex items-center justify-center rounded-2xl">
            </div>
        </div>

        <!-- Portfolio Grid with staggered animations -->
        <div id="portfolio-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($portfolios as $index => $portfolio)
                <div class="animate-fade-in-up" style="animation-delay: {{ $index * 0.1 }}s;">
                    @include('components.portfoliocard', ['portfolio' => $portfolio])
                </div>
            @empty
                <div class="col-span-full text-center py-20 animate-fade-in">
                    <div class="relative">
                        <!-- Animated background elements -->
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
                </div>
            @endforelse
        </div>
        @if ($portfolios->hasPages())
        <div class="mt-12 flex justify-center">
            <nav class="inline-flex rounded-md shadow-sm" role="navigation" aria-label="Pagination">
                {{ $portfolios->withQueryString()->links('pagination::tailwind') }}
            </nav>
        </div>
        @endif
    </div>
</div>

<style>
/* Custom animations */
@keyframes fade-in {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slide-up {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-20px) rotate(5deg);
    }
}

@keyframes float-delayed {
    0%, 100% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-15px) rotate(-3deg);
    }
}

@keyframes gradient-shift {
    0%, 100% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
}

.animate-fade-in {
    animation: fade-in 0.8s ease-out forwards;
}

.animate-slide-up {
    animation: slide-up 0.8s ease-out forwards;
    opacity: 0;
}

.animate-fade-in-up {
    animation: fade-in-up 0.8s ease-out forwards;
    opacity: 0;
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-float-delayed {
    animation: float-delayed 8s ease-in-out infinite;
    animation-delay: 2s;
}

.animate-gradient-shift {
    background-size: 200% 200%;
    animation: gradient-shift 4s ease infinite;
}

/* Hover effects for portfolio cards */
.portfolio-card {
    transition: all 0.3s ease;
}

.portfolio-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

/* Loading skeleton animation */
@keyframes skeleton-loading {
    0% {
        background-position: -200px 0;
    }
    100% {
        background-position: calc(200px + 100%) 0;
    }
}

.skeleton {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200px 100%;
    animation: skeleton-loading 1.5s infinite;
}

/* Filter transition effects */
.tech-filter.active {
    background: linear-gradient(to right, #9333ea, #ec4899) !important;
    color: white !important;
    box-shadow: 0 4px 15px rgba(147, 51, 234, 0.25);
}

.portfolio-fade-out {
    opacity: 0.3;
    transform: translateY(10px);
    transition: all 0.3s ease;
}

.portfolio-fade-in {
    opacity: 1;
    transform: translateY(0);
    transition: all 0.3s ease;
}

/* Responsive improvements */
@media (max-width: 768px) {
    .container {
        padding-left: 1rem;
        padding-right: 1rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let currentTech = '{{ $filterTech ?? "all" }}';
    let currentCategory = '{{ $filterCategory ?? "all" }}';
    
    // Technology filter buttons
    const techFilters = document.querySelectorAll('.tech-filter');
    const categoryFilter = document.getElementById('category-filter');
    const resetButton = document.getElementById('reset-filters');
    const portfolioGrid = document.getElementById('portfolio-grid');
    const loadingOverlay = document.getElementById('loading-overlay');
    const viewAllBtn = document.getElementById('view-all-btn');

    // Add CSRF token to all AJAX requests
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
    
    // Function to show loading state
    function showLoading() {
        loadingOverlay.classList.remove('hidden');
        portfolioGrid.classList.add('portfolio-fade-out');
    }
    
    // Function to hide loading state
    function hideLoading() {
        loadingOverlay.classList.add('hidden');
        portfolioGrid.classList.remove('portfolio-fade-out');
        portfolioGrid.classList.add('portfolio-fade-in');
    }
    
    // Function to update filter button states
    function updateFilterStates() {
        techFilters.forEach(btn => {
            const tech = btn.getAttribute('data-tech');
            if (tech === currentTech) {
                btn.classList.add('active');
                btn.classList.remove('bg-gray-100', 'text-gray-700');
                btn.classList.add('bg-gradient-to-r', 'from-purple-600', 'to-pink-600', 'text-white', 'shadow-lg', 'shadow-purple-500/25');
            } else {
                btn.classList.remove('active');
                btn.classList.remove('bg-gradient-to-r', 'from-purple-600', 'to-pink-600', 'text-white', 'shadow-lg', 'shadow-purple-500/25');
                btn.classList.add('bg-gray-100', 'text-gray-700');
            }
        });
        
        categoryFilter.value = currentCategory;
    }
    
    // Function to fetch filtered portfolios
    async function fetchPortfolios() {
        showLoading();
        
        try {
            const params = new URLSearchParams();
            if (currentTech !== 'all') params.append('tech', currentTech);
            if (currentCategory !== 'all') params.append('category', currentCategory);
            params.append('ajax', '1');
            
            const response = await fetch(`{{ url()->current() }}?${params.toString()}`, {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                }
            });
            
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            
            const data = await response.json();
            
            // Update the portfolio grid with staggered animation
            setTimeout(() => {
                portfolioGrid.innerHTML = data.html;
                
                // Add staggered animations to new cards
                const newCards = portfolioGrid.querySelectorAll('.animate-fade-in-up');
                newCards.forEach((card, index) => {
                    card.style.animationDelay = `${index * 0.1}s`;
                });
                
                // Update URL without page refresh
                const url = new URL(window.location);
                if (currentTech === 'all') {
                    url.searchParams.delete('tech');
                } else {
                    url.searchParams.set('tech', currentTech);
                }
                
                if (currentCategory === 'all') {
                    url.searchParams.delete('category');
                } else {
                    url.searchParams.set('category', currentCategory);
                }
                
                window.history.pushState({}, '', url);
                
                hideLoading();
                
                // Re-observe new portfolio cards for scroll animations
                observePortfolioCards();
                
                // Re-attach view all button event listener if it exists
                const newViewAllBtn = document.getElementById('view-all-btn');
                if (newViewAllBtn) {
                    attachViewAllHandler(newViewAllBtn);
                }
                
            }, 300);
            
        } catch (error) {
            console.error('Error fetching portfolios:', error);
            hideLoading();
            
            // Show error message
            portfolioGrid.innerHTML = `
                <div class="col-span-full text-center py-20">
                    <div class="text-red-400 text-2xl mb-4 font-semibold">Error loading projects</div>
                    <p class="text-gray-500 text-lg">Please try again later.</p>
                    <button onclick="location.reload()" class="mt-4 px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-xl hover:shadow-lg transition-all duration-300">
                        Refresh Page
                    </button>
                </div>
            `;
        }
    }
    
    // Function to reset all filters
    function resetAllFilters() {
        currentTech = 'all';
        currentCategory = 'all';
        updateFilterStates();
        fetchPortfolios();
    }
    
    // Function to attach view all button handler
    function attachViewAllHandler(button) {
        if (button) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                resetAllFilters();
            });
        }
    }
    
    // Technology filter click handlers
    techFilters.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const tech = this.getAttribute('data-tech');
            
            if (currentTech !== tech) {
                currentTech = tech;
                updateFilterStates();
                fetchPortfolios();
            }
        });
    });
    
    // Category filter change handler
    categoryFilter.addEventListener('change', function() {
        const category = this.value;
        
        if (currentCategory !== category) {
            currentCategory = category;
            fetchPortfolios();
        }
    });
    
    // Reset button handler
    resetButton.addEventListener('click', function(e) {
        e.preventDefault();
        
        if (currentTech !== 'all' || currentCategory !== 'all') {
            resetAllFilters();
        }
    });
    
    // Initial view all button handler attachment
    attachViewAllHandler(viewAllBtn);
    
    // Function to observe portfolio cards for scroll animations
    function observePortfolioCards() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);

        // Observe all portfolio cards
        document.querySelectorAll('.portfolio-card').forEach(card => {
            observer.observe(card);
        });
    }
    
    // Handle browser back/forward buttons
    window.addEventListener('popstate', function(event) {
        const urlParams = new URLSearchParams(window.location.search);
        currentTech = urlParams.get('tech') || 'all';
        currentCategory = urlParams.get('category') || 'all';
        updateFilterStates();
        fetchPortfolios();
    });
    
    // Initial setup
    updateFilterStates();
    observePortfolioCards();
});
</script>
@endsection