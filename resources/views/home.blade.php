<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KoziWeb</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- 🔹 Navbar -->
    <nav class="bg-white shadow-md px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-blue-600">KoziWeb</h1>
        <ul class="flex gap-6 text-gray-600 font-medium">
            <li><a href="#" class="hover:text-blue-600">Home</a></li>
            <li><a href="#" class="hover:text-blue-600">About</a></li>
            <li><a href="#" class="hover:text-blue-600">Services</a></li>
            <li><a href="#" class="hover:text-blue-600">Contact</a></li>
        </ul>
    </nav>

    <!-- 🔹 Hero Section -->
    <section class="h-[80vh] flex flex-col justify-center items-center bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-center">
        <h2 class="text-4xl md:text-6xl font-bold mb-4">Welcome to KoziWeb</h2>
        <p class="text-lg md:text-2xl max-w-2xl mb-6">Your modern Laravel + Tailwind website powered with Vite.</p>
        <a href="#services" class="bg-white text-blue-6
