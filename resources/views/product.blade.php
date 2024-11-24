@extends('layouts.app')
@section('content')
    <div class="bg-gray-100">
    <header class="bg-white shadow">
    <div class="container mx-auto px-6 py-3 flex justify-between items-center">
        <div>
        <a class="text-gray-800 text-xl font-bold" href="#">
        Brand
        </a>
        </div>
        <div class="flex items-center">
        <a class="text-gray-800 text-sm font-medium mx-2" href="#">
        Home
        </a>
        <a class="text-gray-800 text-sm font-medium mx-2" href="#">
        Shop
        </a>
        <a class="text-gray-800 text-sm font-medium mx-2" href="#">
        Contact
        </a>
        <a class="text-gray-800 text-sm font-medium mx-2" href="#">
        About
        </a>
        </div>
    </div>
    </header>
    <main class="container mx-auto px-6 py-8">
    <div class="flex flex-col md:flex-row">
        <div class="md:w-1/2">
        <img alt="Detailed view of the product showing its features and design" class="w-full h-auto rounded-lg shadow-md" height="400" src="https://storage.googleapis.com/a1aa/image/sBkCL3MZyKbyKZpWJmvl4IMwwcEjtXH7meJW4mGhszf3kN0TA.jpg" width="600"/>
        </div>
        <div class="md:w-1/2 md:ml-8 mt-8 md:mt-0">
        <h2 class="text-3xl font-bold text-gray-800">
        Product Name
        </h2>
        <p class="text-xl text-gray-600 mt-2">
        $99.99
        </p>
        <p class="text-gray-700 mt-4">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div class="mt-4">
        <label class="block text-gray-700">
        Date
        </label>
        <input class="w-full mt-2 p-2 border rounded-lg" type="date"/>
        </div>
        <div class="mt-4">
        <label class="block text-gray-700">
        Time
        </label>
        <input class="w-full mt-2 p-2 border rounded-lg" type="time"/>
        </div>
        <button class="mt-6 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
        Add to Cart
        </button>
        </div>
    </div>
    <div class="mt-12">
        <h3 class="text-2xl font-bold text-gray-800">
        Product Details
        </h3>
        <p class="text-gray-700 mt-4">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <p class="text-gray-700 mt-4">
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>
    <div class="mt-12">
        <h3 class="text-2xl font-bold text-gray-800">
        Customer Reviews
        </h3>
        <div class="mt-4">
        <div class="flex items-center">
        <div class="w-12 h-12 rounded-full overflow-hidden">
        <img alt="Profile picture of the reviewer" height="48" src="https://storage.googleapis.com/a1aa/image/UqLAYEchDr7NH5hzfLfF2B6kKGGFWbANexznfsPK4f2AnsheE.jpg" width="48"/>
        </div>
        <div class="ml-4">
        <h4 class="text-gray-800 font-bold">
            John Doe
        </h4>
        <div class="flex items-center">
            <i class="fas fa-star text-yellow-500">
            </i>
            <i class="fas fa-star text-yellow-500">
            </i>
            <i class="fas fa-star text-yellow-500">
            </i>
            <i class="fas fa-star text-yellow-500">
            </i>
            <i class="fas fa-star text-gray-300">
            </i>
        </div>
        </div>
        </div>
        <p class="text-gray-700 mt-2">
        Great product! Highly recommend.
        </p>
        </div>
        <div class="mt-4">
        <div class="flex items-center">
        <div class="w-12 h-12 rounded-full overflow-hidden">
        <img alt="Profile picture of the reviewer" height="48" src="https://storage.googleapis.com/a1aa/image/UqLAYEchDr7NH5hzfLfF2B6kKGGFWbANexznfsPK4f2AnsheE.jpg" width="48"/>
        </div>
        <div class="ml-4">
        <h4 class="text-gray-800 font-bold">
            Jane Smith
        </h4>
        <div class="flex items-center">
            <i class="fas fa-star text-yellow-500">
            </i>
            <i class="fas fa-star text-yellow-500">
            </i>
            <i class="fas fa-star text-yellow-500">
            </i>
            <i class="fas fa-star text-gray-300">
            </i>
            <i class="fas fa-star text-gray-300">
            </i>
        </div>
        </div>
        </div>
        <p class="text-gray-700 mt-2">
        Good quality but a bit expensive.
        </p>
        </div>
    </div>
    </main>
    <footer class="bg-white shadow mt-12">
    <div class="container mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
        <p class="text-gray-800">
        © 2023 Brand. All rights reserved.
        </p>
        <div class="flex items-center">
        <a class="text-gray-800 mx-2" href="#">
        <i class="fab fa-facebook-f">
        </i>
        </a>
        <a class="text-gray-800 mx-2" href="#">
        <i class="fab fa-twitter">
        </i>
        </a>
        <a class="text-gray-800 mx-2" href="#">
        <i class="fab fa-instagram">
        </i>
        </a>
        </div>
        </div>
    </div>
    </footer>
    </div>

@endsection
