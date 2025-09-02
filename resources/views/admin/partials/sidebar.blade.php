<div class="fixed inset-y-0 left-0 z-50 w-64 bg-slate-900 text-white transform transition-transform duration-300 ease-in-out lg:translate-x-0"
     :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'">

    <!-- Logo -->
    <div class="flex items-center justify-between p-4 border-b border-slate-700">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/PHOTO1.jpg') }}" alt="Logo Comptoir"
                 class="h-10 w-10 object-cover rounded-full shadow-md" />
            <div>
                <h1 class="text-lg font-bold text-white">Comptoir SENAN</h1>
                <p class="text-sm text-slate-400">Market</p>
            </div>
        </div>
        <button @click="sidebarOpen = false" class="lg:hidden">
            <i class="fas fa-times text-xl text-white"></i>
        </button>
    </div>

    <!-- Navigation -->
    <nav class="mt-8 space-y-1">

        <a href="{{ route('admin.dashboard') }}"
           class="w-full flex items-center space-x-3 px-6 py-3 hover:bg-slate-800 transition-colors 
           {{ request()->routeIs('admin.dashboard') ? 'bg-slate-800 border-r-2 border-blue-400' : '' }}">
            <i class="fas fa-home w-5"></i>
            <span class="text-sm font-medium">Tableau de bord</span>
        </a>

        <a href="{{route('admin.listCategories')}}"
           class="w-full flex items-center space-x-3 px-6 py-3 hover:bg-slate-800 transition-colors 
           {{ request()->routeIs('admin.listCategories') ? 'bg-slate-800 border-r-2 border-blue-400' : '' }}">
            <i class="fas fa-box w-5"></i>
            <span class="text-sm font-medium">Catégorie</span>
        </a>
        <a href="{{route('admin.listProducts')}}"
           class="w-full flex items-center space-x-3 px-6 py-3 hover:bg-slate-800 transition-colors 
           {{ request()->routeIs('admin.listProducts') ? 'bg-slate-800 border-r-2 border-blue-400' : '' }}">
            <i class="fas fa-box w-5"></i>
            <span class="text-sm font-medium">Catalogue Produits</span>
        </a>

        <a href="{{route('orders')}}"
           class="w-full flex items-center space-x-3 px-6 py-3 hover:bg-slate-800 transition-colors 
           {{ request()->routeIs('orders') ? 'bg-slate-800 border-r-2 border-blue-400' : '' }}">
            <i class="fas fa-shopping-cart w-5"></i>
            <span class="text-sm font-medium">Commandes</span>
        </a>

        <a href="{{route('admin.users')}}"
           class="w-full flex items-center space-x-3 px-6 py-3 hover:bg-slate-800 transition-colors 
           {{ request()->routeIs('admin.users') ? 'bg-slate-800 border-r-2 border-blue-400' : '' }}">
            <i class="fas fa-users w-5"></i>
            <span class="text-sm font-medium">Admnistrateurs Secondaires</span>
        </a>

        <a href="{{route('admin.messages')}}"
           class="w-full flex items-center space-x-3 px-6 py-3 hover:bg-slate-800 transition-colors 
           {{ request()->routeIs('admin.messages') ? 'bg-slate-800 border-r-2 border-blue-400' : '' }}">
            <i class="fas fa-comment w-5"></i>
            <span class="text-sm font-medium">Messages</span>
        </a>

        <a href="{{route("admin.promotions")}}"
           class="w-full flex items-center space-x-3 px-6 py-3 hover:bg-slate-800 transition-colors 
           {{ request()->routeIs('admin.promotions') ? 'bg-slate-800 border-r-2 border-blue-400' : '' }}">
            <i class="fas fa-percent w-5"></i>
            <span class="text-sm font-medium">Promotions</span>
        </a>

        <a href="{{route('admin.news')}}"
           class="w-full flex items-center space-x-3 px-6 py-3 hover:bg-slate-800 transition-colors 
           {{ request()->routeIs('admin.news') ? 'bg-slate-800 border-r-2 border-blue-400' : '' }}">
            <i class="fas fa-newspaper w-5"></i>
            <span class="text-sm font-medium">Actualités</span>
        </a>

        <a href="{{route('admin.delivery')}}"
           class="w-full flex items-center space-x-3 px-6 py-3 hover:bg-slate-800 transition-colors 
           {{ request()->routeIs('admin.delivery') ? 'bg-slate-800 border-r-2 border-blue-400' : '' }}">
            <i class="fas fa-truck w-5"></i>
            <span class="text-sm font-medium">Livraisons</span>
        </a>

        <a href="{{route("admin.create")}}"
           class="w-full flex items-center space-x-3 px-6 py-3 hover:bg-slate-800 transition-colors 
           {{ request()->routeIs('admin.create') ? 'bg-slate-800 border-r-2 border-blue-400' : '' }}">
            <i class="fas fa-user-plus w-5"></i>
            <span class="text-sm font-medium">Administrateurs</span>
        </a>

        <a href="{{route('logout')}}"
           class="w-full flex items-center space-x-3 px-6 py-3 hover:bg-slate-800 transition-colors 
           {{ request()->routeIs('logout') ? 'bg-slate-800 border-r-2 border-blue-400' : '' }}">
            <i class="fas fa-cog w-5"></i>
            <span class="text-sm font-medium b">Deconnexion</span>
        </a>

    </nav>
</div>
