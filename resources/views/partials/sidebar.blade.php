<aside class="w-full md:w-64 bg-blue-900 text-white p-4 shadow-lg flex flex-col">
    <div class="flex-1">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-xl font-bold">Mon Espace</h2>
            
        </div>

        <nav>
            <h3 class="text-teal-200 uppercase text-xs font-semibold tracking-wider mb-2">Commandes</h3>
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('orders.my') }}"
                        class="flex items-center px-3 py-2 rounded transition 
                            {{ request()->routeIs('orders.my') ? 'bg-teal-700 font-bold' : 'hover:bg-teal-600' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        Commandes
                    </a>
                </li>
                <li>
                    <a href="{{ route('orders.hold') }}"
                        class="flex items-center px-3 py-2 rounded transition 
                            {{ request()->routeIs('orders.hold') ? 'bg-teal-700 font-bold' : 'hover:bg-teal-600' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Historique
                    </a>
                </li>
                 <li>
                    <a href="{{route('cart.show')}}"
                        class="flex items-center px-3 py-2 rounded transition 
                            {{ request()->routeIs('cart.show') ? 'bg-teal-700 font-bold' : 'hover:bg-teal-600' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Panier
                    </a>
                </li>
                
            
            </ul>
        </nav>
    </div>
</aside>
