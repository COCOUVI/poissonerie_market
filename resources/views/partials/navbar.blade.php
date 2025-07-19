<header class="bg-white shadow-lg sticky top-0 z-30">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">

        <!-- Logo et Titre -->
        <div class="flex items-center space-x-4">
            <div class="bg-white p-1 rounded-lg shadow border border-gray-200">
                <img src="/images/PHOTO1.jpg" alt="Logo Comptoir SENAN Market" class="h-14 w-14 object-contain">
            </div>
            <h1 class="text-2xl md:text-3xl font-bold">
                Comptoir <span class="text-red-400">SENAN</span> Market
            </h1>
        </div>
        <!-- Navigation desktop -->
        <nav class="hidden md:flex items-center space-x-6">
            <a href="/" class="hover:text-blue-600 font-medium transition">Accueil</a>
            <a href="#produits" class="hover:text-blue-600 font-medium transition">Produits</a>
            <a href="#apropos" class="hover:text-blue-600 font-medium transition">À propos</a>
            <a href="#contact" class="hover:text-blue-600 font-medium transition">Contact</a>
            @guest
                <a href="/register" class="hover:text-blue-600 font-medium transition">S'inscrire</a>
                <a href="/login" class="hover:text-blue-600 font-medium transition">Se connecter</a>
                    <a href="/espace-client"
                        class="hover:text-blue-600 font-medium transition">
                        Espace client
                    </a>
                <form method="POST" action="">
                    @csrf
                    <button type="submit"
                        class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded shadow-md transition duration-300">
                        Déconnexion
                    </button>
                </form>
            @endguest
        </nav>


        <!-- Menu hamburger mobile -->
        <button class="md:hidden text-2xl text-blue-900" id="menu-toggle">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- Menu mobile -->
    <div class="md:hidden hidden bg-blue-100 px-4 py-2" id="mobile-menu">
        <a href="/" class="block py-2 hover:text-blue-600 font-medium">Accueil</a>
        <a href="#produits" class="block py-2 hover:text-blue-600 font-medium">Produits</a>
        <a href="#apropos" class="block py-2 hover:text-blue-600 font-medium">À propos</a>
        <a href="#contact" class="block py-2 hover:text-blue-600 font-medium">Contact</a>
        @guest
            <a href="/register" class="block py-2 hover:text-blue-600 font-medium">S'inscrire</a>
            <a href="/login" class="block py-2 hover:text-blue-600 font-medium">Se connecter</a>
        @else
            <form method="POST" action="">
                @csrf
                <button type="submit" class="w-full text-left py-2 hover:text-red-700 font-medium">Déconnexion</button>
            </form>
        @endguest
    </div>
</header>
