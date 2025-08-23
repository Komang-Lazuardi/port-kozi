<nav class="fixed top-0 left-0 w-full bg-white/40 backdrop-blur-2xl border-b border-white/10 shadow-xl z-50">
  <div class="max-w-7xl mx-auto px-6 md:px-12">
    <div class="flex items-center justify-between h-16">

      <!-- Logo / Profile -->
      <a href="/" class="flex items-center gap-2">
        <img src="{{ asset('images/profiles.png') }}" 
             alt="Profile" 
             class="w-10 h-10 rounded-full border border-white/30 shadow-sm">
        <span class="text-2xl font-bold text-[#F7F5F3]">KOZI</span>
      </a>

      <!-- Menu Desktop -->
      <div class="hidden md:flex space-x-8">
        <a href="#home" class="text-white font-bold hover:text-black hover:scale-105 transition-all duration-300">Home</a>
        <a href="#about" class="text-white font-bold hover:text-black hover:scale-105 transition-all duration-300">About</a>
        <a href="#projects" class="text-white font-bold hover:text-black hover:scale-105 transition-all duration-300">Projects</a>
        <a href="#contact" class="text-white font-bold hover:text-black hover:scale-105 transition-all duration-300">Contact</a>
      </div>

      <!-- Burger Button (Mobile) -->
      <div class="md:hidden">
        <button id="burger-btn" class="focus:outline-none">
          <svg id="burger-open" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg id="burger-close" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Menu Mobile -->
  <div id="mobile-menu" class="hidden md:hidden bg-white/40 backdrop-blur-2xl border-t border-white/10 shadow-xl">
    <a href="#home" class="block px-6 py-2 text-white font-bold hover:text-black hover:scale-105 transition-all duration-300">Home</a>
    <a href="#about" class="block px-6 py-2 text-white font-bold hover:text-black hover:scale-105 transition-all duration-300">About</a>
    <a href="#projects" class="block px-6 py-2 text-white font-bold hover:text-black hover:scale-105 transition-all duration-300">Projects</a>
    <a href="#contact" class="block px-6 py-2 text-white font-bold hover:text-black hover:scale-105 transition-all duration-300">Contact</a>
  </div>
</nav>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const burgerBtn = document.getElementById("burger-btn");
    const burgerOpen = document.getElementById("burger-open");
    const burgerClose = document.getElementById("burger-close");
    const mobileMenu = document.getElementById("mobile-menu");

    burgerBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
      burgerOpen.classList.toggle("hidden");
      burgerClose.classList.toggle("hidden");
    });
  });
</script>
