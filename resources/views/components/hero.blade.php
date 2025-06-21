<section id="home"
    class="relative min-h-screen flex items-center justify-center text-white overflow-hidden bg-gradient-to-br from-red-700 via-red-600 to-pink-700 p-8">
    {{-- Plus Pattern Background --}}
    <div class="absolute inset-0 z-0">
        {{-- Radial Gradient Overlay --}}
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-red-600/30 via-transparent to-red-800/30">
        </div>

        {{-- Plus pattern: Hanya di area atas --}}
        <div class="absolute top-0 left-22 right-0 w-[38%] rotate-180 h-2/5 bg-repeat opacity-65"
            style="background-image: url('data:image/svg+xml;utf8,<svg width=&quot;80&quot; height=&quot;80&quot; viewBox=&quot;0 0 80 80&quot; fill=&quot;none&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><path d=&quot;M40 20V60M20 40H60&quot; stroke=&quot;white&quot; stroke-opacity=&quot;0.5&quot; stroke-width=&quot;1&quot;/></svg>'); background-size: 80px 80px; background-position: 0 0;">
        </div>
    </div>

    <div class="container mx-auto relative z-10 text-left px-4 sm:px-6 lg:px-8">
        <div class="max-w-xl md:max-w-2xl lg:max-w-4xl">
            <h1
                class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-black mb-4 text-shadow-glow leading-none tracking-tight">
                Adipratama <br>
                <span class="block">Kreatif solusi.</span>
            </h1>
        </div>
    </div>

    {{-- Company Profile Section - Positioned at bottom left --}}
    <div class="absolute bottom-60 left-108 right-0 z-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-start text-right">
                <span class="text-white text-opacity-90 font-medium tracking-[0.3em] uppercase mb-3"
                    style="font-size: 20px;">COMPANY
                    PROFILE</span>
                {{-- Garis horizontal yang dimulai dari kiri layar --}}
                <div class="h-px bg-white bg-opacity-60 -ml-[50vw]" style="width: 67vw;"></div>
            </div>
        </div>
    </div>

    {{-- Hero Numbers (20 25) - Made smaller --}}
    <div class="absolute bottom-0 right-0 text-[12rem] sm:text-[15rem] md:text-[18rem] lg:text-[22rem] xl:text-[25rem] font-black text-white opacity-15 leading-none z-0 flex flex-col items-end transform translate-x-[8%] translate-y-[3%]"
        style="text-shadow: 2px 2px 8px rgba(0,0,0,0.3); font-family: 'Inter', sans-serif;">
        <span>20</span>
        <span class="-mt-8 sm:-mt-12 md:-mt-16 lg:-mt-20">25</span>
        <div class="absolute top-0 left-0 right-0 w-1/2 h-2/5 bg-repeat opacity-80"
            style="background-image: url('data:image/svg+xml;utf8,<svg width=&quot;80&quot; height=&quot;80&quot; viewBox=&quot;0 0 80 80&quot; fill=&quot;none&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><path d=&quot;M40 20V60M20 40H60&quot; stroke=&quot;white&quot; stroke-opacity=&quot;0.5&quot; stroke-width=&quot;1&quot;/></svg>'); background-size: 80px 80px; background-position: 0 0;">
        </div>
    </div>
</section>