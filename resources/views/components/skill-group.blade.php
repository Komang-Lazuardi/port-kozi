<div class="relative flex items-center justify-center {{ $class ?? '' }}">
    <!-- Foto Utama -->
    <div class="w-40 h-40 rounded-full overflow-hidden shadow-xl border-4 border-white z-10">
        <img src="{{ asset('images/profiles.png') }}" alt="My Photo" class="w-full h-full object-cover">
    </div>

    <!-- Lingkaran skill yang berputar -->
    <div class="absolute w-[300px] h-[300px] flex items-center justify-center animate-spin-slow">

        <!-- Icon Atas -->
        <div class="absolute -top-1 flex items-center justify-center">
            <x-skill-icon src="icons/tailwind.svg" alt="Tailwind"/>
        </div>

        <!-- Icon Kanan -->
        <div class="absolute right-[-1px] top-1/2 -translate-y-1/2">
            <x-skill-icon src="icons/figma.svg" alt="Figma"/>
        </div>

        <!-- Icon Kiri -->
        <div class="absolute left-[-1px] top-1/2 -translate-y-1/2">
            <x-skill-icon src="icons/laravel.svg" alt="Laravel"/>
        </div>

        <!-- Icon Bawah -->
        <div class="absolute -bottom-1 flex items-center justify-center">
            <x-skill-icon src="icons/premiere.svg" alt="Premiere"/>
        </div>

    </div>
</div>
