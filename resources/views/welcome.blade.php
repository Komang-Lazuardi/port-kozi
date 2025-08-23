@extends('layouts.app')

@section('content')
<section class="relative min-h-screen flex items-center justify-center pt-20 px-6 bg-cover bg-center"
         style="background-image: url('{{ asset('images/forest.jpg') }}');">
  
  <!-- Layer Gelap -->
  <div class="absolute inset-0 bg-black/40 z-0"></div> {{-- 40% opacity layer hitam --}}

  <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center w-full max-w-6xl relative z-10">

    <!-- Kiri: Teks -->
    <div class="text-center md:text-left">
      <h1 class="text-3xl md:text-5xl font-bold leading-snug text-white">
        WELCOME TO <br class="hidden md:block"> 
        KOZI PORTFOLIO
      </h1>
      <p class="mt-4 text-white">
        Explore my works, skills, and creativity in design & development.
      </p>
    </div>

    <!-- Kanan: Foto + Skill Group -->
    <x-skill-group class="relative md:translate-x-32 translate-x-0"/>

  </div>
</section>
@endsection
