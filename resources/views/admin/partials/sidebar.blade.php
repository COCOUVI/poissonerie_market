<div class="fixed inset-y-0 left-0 z-50 w-64 bg-slate-900 text-white transform transition-transform duration-300 ease-in-out lg:translate-x-0"
     :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'">

     <!-- Logo -->
     <div class="flex items-center justify-between p-4 border-b border-slate-700">
         <!-- Logo + texte -->
         <div class="flex items-center space-x-3">
             <!-- Remplace "logo.png" par le chemin correct vers ton image locale -->
             <img src="{{ asset('images/PHOTO1.jpg') }}" alt="Logo Comptoir"
                 class="h-10 w-10 object-cover rounded-full shadow-md" />

             <div>
                 <h1 class="text-lg font-bold text-white">Comptoir SENAN</h1>
                 <p class="text-sm text-slate-400">Market</p>
             </div>
         </div>

         <!-- Bouton fermeture mobile -->
         <button @click="sidebarOpen = false" class="lg:hidden">
             <i class="fas fa-times text-xl text-white"></i>
         </button>
     </div>


     <!-- Navigation -->
     <nav class="mt-8">
         <button @click="activeSection = 'dashboard'; sidebarOpen = false"
             class="w-full flex items-center space-x-3 px-6 py-3 text-left hover:bg-slate-800 transition-colors"
             :class="activeSection === 'dashboard' ? 'bg-slate-800 border-r-2 border-blue-400' : ''">
             <i class="fas fa-home w-5"></i>
             <span class="text-sm font-medium">Tableau de bord</span>
         </button>

         <button @click="activeSection = 'products'; sidebarOpen = false"
             class="w-full flex items-center space-x-3 px-6 py-3 text-left hover:bg-slate-800 transition-colors"
             :class="activeSection === 'products' ? 'bg-slate-800 border-r-2 border-blue-400' : ''">
             <i class="fas fa-box w-5"></i>
             <span class="text-sm font-medium">Catalogue Produits</span>
         </button>

         <button @click="activeSection = 'orders'; sidebarOpen = false"
             class="w-full flex items-center space-x-3 px-6 py-3 text-left hover:bg-slate-800 transition-colors"
             :class="activeSection === 'orders' ? 'bg-slate-800 border-r-2 border-blue-400' : ''">
             <i class="fas fa-shopping-cart w-5"></i>
             <span class="text-sm font-medium">Commandes</span>
         </button>

         <button @click="activeSection = 'customers'; sidebarOpen = false"
             class="w-full flex items-center space-x-3 px-6 py-3 text-left hover:bg-slate-800 transition-colors"
             :class="activeSection === 'customers' ? 'bg-slate-800 border-r-2 border-blue-400' : ''">
             <i class="fas fa-users w-5"></i>
             <span class="text-sm font-medium">Clients</span>
         </button>

         <button @click="activeSection = 'messages'; sidebarOpen = false"
             class="w-full flex items-center space-x-3 px-6 py-3 text-left hover:bg-slate-800 transition-colors"
             :class="activeSection === 'messages' ? 'bg-slate-800 border-r-2 border-blue-400' : ''">
             <i class="fas fa-comment w-5"></i>
             <span class="text-sm font-medium">Messages</span>
         </button>

         <button @click="activeSection = 'promotions'; sidebarOpen = false"
             class="w-full flex items-center space-x-3 px-6 py-3 text-left hover:bg-slate-800 transition-colors"
             :class="activeSection === 'promotions' ? 'bg-slate-800 border-r-2 border-blue-400' : ''">
             <i class="fas fa-percent w-5"></i>
             <span class="text-sm font-medium">Promotions</span>
         </button>

         <button @click="activeSection = 'news'; sidebarOpen = false"
             class="w-full flex items-center space-x-3 px-6 py-3 text-left hover:bg-slate-800 transition-colors"
             :class="activeSection === 'news' ? 'bg-slate-800 border-r-2 border-blue-400' : ''">
             <i class="fas fa-newspaper w-5"></i>
             <span class="text-sm font-medium">Actualités</span>
         </button>

         <button @click="activeSection = 'delivery'; sidebarOpen = false"
             class="w-full flex items-center space-x-3 px-6 py-3 text-left hover:bg-slate-800 transition-colors"
             :class="activeSection === 'delivery' ? 'bg-slate-800 border-r-2 border-blue-400' : ''">
             <i class="fas fa-truck w-5"></i>
             <span class="text-sm font-medium">Livraisons</span>
         </button>

         <button @click="activeSection = 'reports'; sidebarOpen = false"
             class="w-full flex items-center space-x-3 px-6 py-3 text-left hover:bg-slate-800 transition-colors"
             :class="activeSection === 'reports' ? 'bg-slate-800 border-r-2 border-blue-400' : ''">
             <i class="fas fa-chart-bar w-5"></i>
             <span class="text-sm font-medium">Rapports & Stats</span>
         </button>

         <button @click="activeSection = 'admins'; sidebarOpen = false"
             class="w-full flex items-center space-x-3 px-6 py-3 text-left hover:bg-slate-800 transition-colors"
             :class="activeSection === 'admins' ? 'bg-slate-800 border-r-2 border-blue-400' : ''">
             <i class="fas fa-user-plus w-5"></i>
             <span class="text-sm font-medium">Administrateurs</span>
         </button>

         <button @click="activeSection = 'security'; sidebarOpen = false"
             class="w-full flex items-center space-x-3 px-6 py-3 text-left hover:bg-slate-800 transition-colors"
             :class="activeSection === 'security' ? 'bg-slate-800 border-r-2 border-blue-400' : ''">
             <i class="fas fa-shield-alt w-5"></i>
             <span class="text-sm font-medium">Sécurité</span>
         </button>

         <button @click="activeSection = 'settings'; sidebarOpen = false"
             class="w-full flex items-center space-x-3 px-6 py-3 text-left hover:bg-slate-800 transition-colors"
             :class="activeSection === 'settings' ? 'bg-slate-800 border-r-2 border-blue-400' : ''">
             <i class="fas fa-cog w-5"></i>
             <span class="text-sm font-medium">Paramètres</span>
         </button>
     </nav>
 </div>