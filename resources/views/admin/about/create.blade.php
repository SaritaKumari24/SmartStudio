<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Image Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="bg-gray-900 font-sans">

   
    <header class="bg-gray-900 text-white py-4 px-6 shadow-md fixed top-0 left-0 right-0 z-10">
        <div class="max-w-screen-xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img src="https://th.bing.com/th?id=OIP.XfloBSB32f50RImZskOHFwHaHa&w=250&h=250" alt="Logo"
                    class="w-12 h-12 rounded-full">
                <span class="text-2xl font-semibold">Smart Studio</span>
            </div>

            <nav class="hidden md:flex space-x-6">
                <a href="{{route('home')}}" class="text-yellow-500 hover:text-yellow-300">Home</a>
                <a href="{{route('about')}}" class="hover:text-yellow-500">About</a>
                <a href="{{route('gallery')}}" class="hover:text-yellow-500">Gallery</a>
                <a href="{{route('portfolio')}}" class="hover:text-yellow-500">Portfolio</a>
                <a href="{{route('contact')}}" class="hover:text-yellow-500">Contact</a>
            </nav>

            <div class="flex space-x-4">
                <a href="https://facebook.com" target="_blank" class="text-xl hover:text-blue-600">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://instagram.com" target="_blank" class="text-xl hover:text-pink-500">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://twitter.com" target="_blank" class="text-xl hover:text-blue-400">
                    <i class="bi bi-twitter"></i>
                </a>
            </div>
        </div>
    </header>

    <main class="pt-24 pb-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-xl">

            @if(session('success'))
                <div class="bg-green-100 text-green-700 border border-green-400 p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

           
            <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create About Page Content</h2>

             
                <div class="mb-6">
                    <label for="title" class="block text-lg text-gray-700 font-medium">Title</label>
                    <input type="text" name="title" id="title" class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:outline-none" required>
                </div>

               
                <div class="mb-6">
                    <label for="content" class="block text-lg text-gray-700 font-medium">Content</label>
                    <textarea name="content" id="content" rows="6" class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:outline-none" required></textarea>
                </div>
                <div class="mb-6">
                    <label for="image" class="block text-lg text-gray-700 font-medium">Image (optional)</label>
                    <input type="file" name="image" id="image" class="mt-2 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:outline-none">
                </div>
                <button type="submit" class="w-full bg-yellow-500 text-white py-3 rounded-md font-semibold hover:bg-yellow-600 transition duration-300">
                    Submit
                </button>
            </form>

        </div>
    </main>

</body>

</html>
