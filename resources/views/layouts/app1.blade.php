<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Comptoir SENAN Market</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div x-data="{ sidebarOpen: false, activeSection: 'dashboard' }" class="min-h-screen">

        <!-- Sidebar -->
         @include('admin.partials.sidebar')
        <!-- Main Content -->
        <div class="lg:ml-64">

            <!-- Header -->
            @include('admin.partials.header')
            <!-- Main Content Area -->
              @yield('content') 

            <!-- Footer -->
            @include("admin.partials.footer")
        </div>

        <!-- Sidebar overlay for mobile -->
        <div x-show="sidebarOpen" x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden"
            @click="sidebarOpen = false">
        </div>
    </div>
</body>

</html>
