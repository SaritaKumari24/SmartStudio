<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography Category Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
</head>
<body class="bg-gray-900 text-white">
    <div class="w-full h-auto flex">
        <div class="w-[20%] h-auto bg-[#2f363e]">
            <div class="w-full h-16 flex items-center justify-center">
                <p class="text-3xl text-yellow-400 font-bold">SMART STUDIO</p>
            </div>
            <div class="w-full h-10 mt-6 text-base flex items-center pl-10 text-gray-500 font-semibold">
                <p>Main Menu</p>
            </div>
            <div class="w-full h-[50vh]">
                <div class="w-full h-full pl-10 mt-2">
                    <ul>
                        <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 hover:border-r-8 border-yellow-500">
                            <img width="24" height="24" src="https://img.icons8.com/material-rounded/24/eeeeee/dashboard-layout.png" alt="dashboard-layout" />
                            <a href="" class="text-[#eee] font-medium text-lg">Dashboard</a>
                        </li>
        
                        <details class="mt-2">
                            <summary class="flex items-center gap-3 cursor-pointer hover:bg-gray-700 hover:border-r-8 border-yellow-500 p-2 rounded transition duration-300">
                                <img width="24" height="24" src="https://img.icons8.com/fluency-systems-filled/50/eeeeee/event.png" alt="event" />
                                <span class="text-[#eee] font-medium text-lg">Event</span>
                            </summary>
                            <ul class="pl-8">
                                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                                    <a href="" class="text-[#eee] font-medium text-md">Add Event</a>
                                </li>
                                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                                    <a href="" class="text-[#eee] font-medium text-md">Check Schedule</a>
                                </li>
                                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                                    <a href="" class="text-[#eee] font-medium text-md">Ordered List</a>
                                </li>
                            </ul>
                        </details>
        
                        <details class="mt-2">
                            <summary class="flex items-center gap-3 cursor-pointer hover:bg-gray-700 hover:border-r-8 border-yellow-500 p-2 rounded transition duration-300">
                                <img width="24" height="24" src="https://img.icons8.com/ios/50/FFFFFF/user-male-circle--v1.png" alt="user-male-circle--v1"/>                                <span class="text-[#eee] font-medium text-lg">Customer</span>
                            </summary>
                            <ul class="pl-8">
                                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                                    <a href="" class="text-[#eee] font-medium text-md">Add Customer</a>
                                </li>
                                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                                    <a href="" class="text-[#eee] font-medium text-md">Manage Customers</a>
                                </li>
                            </ul>
                        </details>
                        <details class="mt-2">
                            <summary class="flex items-center gap-3 cursor-pointer hover:bg-gray-700 hover:border-r-8 border-yellow-500 p-2 rounded transition duration-300">
                                <img width="24" height="24" src="https://img.icons8.com/material-rounded/24/eeeeee/dashboard-layout.png" alt="dashboard-layout" />
                                <a href="{{route('category')}}" class="text-[#eee] font-medium text-lg">Category</a>
                            </summary>
                            {{-- <ul class="pl-8">
                                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                                    <a href="" class="text-[#eee] font-medium text-md">Add Category</a>
                                </li>
                                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                                    <a href="" class="text-[#eee] font-medium text-md">Manage Category</a>
                                </li>
                            </ul> --}}
                        </details>
        
                        
                        <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
                            <img width="24" height="24" src="https://img.icons8.com/ios-filled/50/eeeeee/settings.png" alt="settings" />
                            <a href="" class="text-[#eee] font-medium text-lg">Settings</a>
                        </li>
                       
                    </ul>
                </div>
            </div>
            {{-- <div class="w-full h-48 bg-blue-400 mt- flex items-center justify-center">
                <div class="w-5/6 h-36 bg-yellow-400 rounded-lg flex items-center justify-between p-8">
                    <div>
                        <p class="text-base font-bold text-white">Get Summary <br> report now</p>
                    </div>
                    <div class="w-14 h-14 bg-yellow-200 rounded-lg flex items-center justify-center">
                        <img width="40" height="40" src="https://img.icons8.com/ios-filled/50/FFFFFF/forward-arrow.png" alt="forward-arrow" />
                    </div>
                </div>
            </div>
            <div class="w-full h-28 bg-green-300 mt-0 flex items-center justify-center">
                <div class="w-5/6 h-full bg-red-300 flex-col flex justify-center gap-2">
                    <p class="text-sm font-medium text-[#eee]">Smart Studio Admin</p>
                    <p class="text-sm text-[#eee] font-medium">©2024 All Right Reserved</p>
                </div>
            </div> --}}
        </div>
        
        <div class="w-[80%] h-auto bg-[#24292d]">
            {{-- nav --}}
            <div class="w-full h-auto bg-[#2f363e] flex flex-col md:flex-row items-center p-4 mb-10">
                <div class="w-full md:w-1/3 h-auto flex items-center justify-center mb-2 md:mb-0">
                </div>
                <div class="w-full md:w-1/3 h-auto  p-2 flex items-center justify-center">
                    <div class="relative w-full">
                        <input type="text" placeholder="Search..." class="w-full pl-4 pr-10 py-2 bg-gray-500 rounded-full focus:outline-none">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <button class="p-2 rounded-full text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.414-1.415l4.243 4.243-1.414 1.415-4.243-4.243zM8 14a6 6 0 100-12 6 6 0 000 12z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 h-auto flex justify-center items-center gap-2">
                    <div class="w-full md:w-24 h-10 bg-gray-500 rounded-lg flex items-center justify-center text-center p-2">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class=" text-base font-semibold text-[#eee] px-4 py-2 rounded flex item-center justify-center">
                                <img width="24" height="24" src="https://img.icons8.com/sf-black/64/FFFFFF/exit.png" alt="exit" class="ml-1"/>
                                Logout
                            </button>
                        </form>
                        
                    </div>
                    <div class="w-12 h-12  rounded-full flex items-center justify-center">
                        <img src="https://pics.craiyon.com/2023-11-26/oMNPpACzTtO5OVERUZwh3Q.webp" class="rounded-full" alt=""/>
                    </div>
                </div>
            </div>
            
            
            {{-- Dashboard --}}

            
            <div class="flex justify-center item-center ">

            

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            
                    {{-- category form --}}
                    <div class="bg-gray-800 p-8 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold mb-6">Add New Category</h2>
                        <form class="space-y-4" action="" method="POST">
                            @csrf
                            <div>
                                <label for="category-name" class="block text-sm font-medium">Category Name</label>
                                <input type="text" id="" name="cat_name" value="{{old('cat_name')}}" placeholder="Enter category name" class="w-full p-3 mt-2 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                @error('cat_name')
                                <p class="text-sm text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            
                            <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-3 rounded-lg hover:bg-indigo-700">Add Category</button>
                        </form>
                    </div>
            
                {{-- table --}}
                    <div class="bg-gray-800 p-8 rounded-lg shadow-lg overflow-x-auto">
                        <h2 class="text-2xl font-semibold mb-6">Manage Categories</h2>
                        <table class="min-w-full bg-gray-700 rounded-lg">
                            <thead>
                                <tr class="bg-gray-600">
                                    <th class="px-4 py-3 text-left font-medium">Category_id</th>
                                    <th class="px-4 py-3 text-left font-medium">Category</th>
                                    <th class="px-4 py-3 font-medium">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $item)
                                <tr class="border-t border-gray-600">
                                    <td class="px-4 py-3">{{$item->id}}</td>
                                    <td class="px-4 py-3">{{$item->cat_name}}</td>
                                    <td class="px-4 py-3 text-right">
                                        <a class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Edit</a>
                                        <a class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 ml-2">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            
                </div>
            </div>
                
        </div>

        
</div>

</body>
</html>


