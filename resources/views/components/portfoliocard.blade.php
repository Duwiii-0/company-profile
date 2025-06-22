<div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
    <!-- Portfolio Image -->
    <div class="relative overflow-hidden bg-gradient-to-br from-purple-100 to-blue-100 aspect-[4/3]">
        @if(isset($portfolio['image']) && $portfolio['image'])
            <img src="{{ $portfolio['image'] }}" 
                 alt="{{ $portfolio['title'] }}" 
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        @endif
        
        <!-- Fallback when image is not available -->
        <div class="absolute inset-0 flex items-center justify-center text-4xl font-bold text-purple-600" 
             style="{{ isset($portfolio['image']) && $portfolio['image'] ? 'display: none;' : '' }}">
            {{ substr($portfolio['title'], 0, 2) }}
        </div>
        
        <!-- Hover Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <button class="bg-white text-purple-600 px-4 py-2 rounded-full text-sm font-medium hover:bg-purple-50 transition-colors">
                    View Project
                </button>
            </div>
        </div>
        
        <!-- Technology Tags (positioned over image) -->
        <div class="absolute top-3 left-3 flex flex-wrap gap-1">
            @foreach($portfolio['technologies'] as $tech)
                <span class="inline-flex items-center px-2 py-1 text-xs font-medium rounded-full
                           {{ $tech === 'Web' ? 'bg-blue-100 text-blue-700' : 
                              ($tech === 'Android' ? 'bg-green-100 text-green-700' : 
                               ($tech === 'iOS' ? 'bg-gray-100 text-gray-700' : 'bg-purple-100 text-purple-700')) }}">
                    @if($tech === 'Web')
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    @elseif($tech === 'Android')
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.523 15.3414c-.5511 0-.9993-.4486-.9993-.9997s.4482-.9993.9993-.9993c.5511 0 .9993.4486.9993.9993.0001.5511-.4482.9997-.9993.9997m-11.046 0c-.5511 0-.9993-.4486-.9993-.9997s.4482-.9993.9993-.9993c.5511 0 .9993.4486.9993.9993 0 .5511-.4482.9997-.9993.9997"/>
                        </svg>
                    @elseif($tech === 'iOS')
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
                        </svg>
                    @endif
                    {{ $tech }}
                </span>
            @endforeach
        </div>
    </div>
    
    <!-- Portfolio Content -->
    <div class="p-6">
        <!-- Company Logo/Brand (if available) -->
        @if(isset($portfolio['logo']))
            <div class="mb-3">
                <img src="{{ $portfolio['logo'] }}" alt="{{ $portfolio['title'] }} logo" class="h-8 w-auto">
            </div>
        @endif
        
        <!-- Project Title -->
        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-purple-600 transition-colors">
            {{ $portfolio['title'] }}
        </h3>
        
        <!-- Project Category -->
        <p class="text-sm text-gray-600 mb-4">
            {{ $portfolio['category'] }}
        </p>
        
        <!-- Technology Stack -->
        <div class="flex items-center justify-between">
            <div class="flex space-x-2">
                @foreach($portfolio['technologies'] as $tech)
                    @if($tech === 'Web')
                        <div class="w-6 h-6 rounded bg-blue-100 flex items-center justify-center" title="Web">
                            <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    @elseif($tech === 'Android')
                        <div class="w-6 h-6 rounded bg-green-100 flex items-center justify-center" title="Android">
                            <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.523 15.3414c-.5511 0-.9993-.4486-.9993-.9997s.4482-.9993.9993-.9993c.5511 0 .9993.4486.9993.9993.0001.5511-.4482.9997-.9993.9997"/>
                            </svg>
                        </div>
                    @elseif($tech === 'iOS')
                        <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center" title="iOS">
                            <svg class="w-3 h-3 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79"/>
                            </svg>
                        </div>
                    @endif
                @endforeach
            </div>
            
            <!-- View More Arrow -->
            <div class="text-purple-600 group-hover:translate-x-1 transition-transform duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>
        </div>
    </div>
</div>