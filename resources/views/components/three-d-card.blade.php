@props(['title', 'description', 'icon'])

<div class="three-d-card group perspective-1000">
    <div class="relative preserve-3d group-hover:rotate-y-180 transition-all duration-1000">
        <!-- Front of card -->
        <div class="absolute backface-hidden w-full h-full bg-white rounded-2xl shadow-xl p-8">
            <div class="text-indigo-600 mb-4 transform group-hover:scale-110 transition-transform duration-300">
                {!! $icon !!}
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $title }}</h3>
            <p class="text-gray-600">{{ $description }}</p>
        </div>
        
        <!-- Back of card -->
        <div class="absolute backface-hidden w-full h-full bg-indigo-600 rounded-2xl shadow-xl p-8 rotate-y-180">
            <div class="text-white">
                <h3 class="text-xl font-bold mb-2">{{ $title }}</h3>
                <p class="text-indigo-100">{{ $description }}</p>
            </div>
        </div>
    </div>
</div>

<style>
    .perspective-1000 {
        perspective: 1000px;
    }
    .preserve-3d {
        transform-style: preserve-3d;
    }
    .backface-hidden {
        backface-visibility: hidden;
    }
    .rotate-y-180 {
        transform: rotateY(180deg);
    }
</style> 