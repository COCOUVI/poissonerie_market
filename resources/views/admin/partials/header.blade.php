<header class="bg-white shadow-sm border-b border-gray-200">
    <div class="flex items-center justify-between px-6 py-4">
        <div class="flex items-center space-x-4">
            <button @click="sidebarOpen = true" class="lg:hidden">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <h2 class="text-2xl font-bold text-gray-900"
                x-text="
                            activeSection === 'dashboard' ? 'Tableau de bord' :
                            activeSection === 'products' ? 'Catalogue Produits' :
                            activeSection === 'orders' ? 'Commandes' :
                            activeSection === 'customers' ? 'Clients' :
                            activeSection === 'messages' ? 'Messages' :
                            activeSection === 'promotions' ? 'Promotions' :
                            activeSection === 'news' ? 'Actualités' :
                            activeSection === 'delivery' ? 'Livraisons' :
                            activeSection === 'reports' ? 'Rapports & Stats' :
                            activeSection === 'admins' ? 'Administrateurs' :
                            activeSection === 'security' ? 'Sécurité' :
                            activeSection === 'settings' ? 'Paramètres' : 'Tableau de bord'
                        ">
            </h2>
        </div>

        <div x-data="{ open: false }" class="relative">
            <!-- Bouton avatar + nom + flèche -->
            <div @click="open = !open" class="flex items-center space-x-2 cursor-pointer">
                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white font-medium">
                    
                </div>
                <span class="text-sm font-medium text-gray-700">{{ Auth::user()->name }}</span>
                <i :class="{ 'rotate-180': open }"
                    class="fas fa-chevron-down text-gray-400 transition-transform duration-300"></i>
            </div>

            <!-- Dropdown -->
            <div x-show="open" @click.away="open = false" x-transition
                class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg z-50">
                <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" 
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-t-lg">
                            Déconnexion
                        </button>
                
                </form>
            </div>
        </div>

    </div>
</header>
