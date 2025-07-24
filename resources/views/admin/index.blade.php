@extends('layouts.app1')
@section('content')
    <main class="p-6 min-h-screen">

        <!-- Dashboard Content -->
        <div x-show="activeSection === 'dashboard'" class="space-y-6">

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Ventes aujourd'hui -->
                <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Ventes aujourd'hui</p>
                            <p class="text-2xl font-bold text-gray-900">1,250 €</p>
                            <p class="text-sm text-green-600">+12%</p>
                        </div>
                        <i class="fas fa-euro-sign text-2xl text-green-600"></i>
                    </div>
                </div>

                <!-- Commandes en attente -->
                <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Commandes en attente</p>
                            <p class="text-2xl font-bold text-gray-900">23</p>
                            <p class="text-sm text-blue-600">+5</p>
                        </div>
                        <i class="fas fa-shopping-cart text-2xl text-blue-600"></i>
                    </div>
                </div>

                <!-- Produits en stock -->
                <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Produits en stock</p>
                            <p class="text-2xl font-bold text-gray-900">145</p>
                            <p class="text-sm text-purple-600">-8</p>
                        </div>
                        <i class="fas fa-box text-2xl text-purple-600"></i>
                    </div>
                </div>

                <!-- Nouveaux clients -->
                <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Nouveaux clients</p>
                            <p class="text-2xl font-bold text-gray-900">12</p>
                            <p class="text-sm text-orange-600">+3</p>
                        </div>
                        <i class="fas fa-users text-2xl text-orange-600"></i>
                    </div>
                </div>
            </div>

            <!-- Recent Orders & Top Products -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <!-- Commandes récentes -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900">Commandes récentes</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium text-gray-900">Marie Dubois</p>
                                    <p class="text-sm text-gray-600">Saumon frais 2kg</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-medium text-gray-900">45€</p>
                                    <span
                                        class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">
                                        En préparation
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium text-gray-900">Jean Martin</p>
                                    <p class="text-sm text-gray-600">Crevettes 1kg</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-medium text-gray-900">28€</p>
                                    <span
                                        class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                        Expédiée
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium text-gray-900">Sophie Laurent</p>
                                    <p class="text-sm text-gray-600">Sole 1.5kg</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-medium text-gray-900">65€</p>
                                    <span
                                        class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                        Livrée
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium text-gray-900">Pierre Bernard</p>
                                    <p class="text-sm text-gray-600">Dorade 2kg</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-medium text-gray-900">38€</p>
                                    <span
                                        class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-800">
                                        En attente
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produits les plus vendus -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900">Produits les plus vendus</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium text-gray-900">Saumon frais</p>
                                    <p class="text-sm text-gray-600">45 ventes</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-medium text-green-600">1,125€</p>
                                    <i class="fas fa-arrow-trend-up text-green-500"></i>
                                </div>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium text-gray-900">Crevettes</p>
                                    <p class="text-sm text-gray-600">32 ventes</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-medium text-green-600">896€</p>
                                    <i class="fas fa-arrow-trend-up text-green-500"></i>
                                </div>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium text-gray-900">Sole</p>
                                    <p class="text-sm text-gray-600">28 ventes</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-medium text-green-600">1,820€</p>
                                    <i class="fas fa-arrow-trend-up text-green-500"></i>
                                </div>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium text-gray-900">Dorade</p>
                                    <p class="text-sm text-gray-600">24 ventes</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-medium text-green-600">912€</p>
                                    <i class="fas fa-arrow-trend-up text-green-500"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Actions rapides -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900">Actions rapides</h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <a href="/admin/ajouter-produits"
                            class="flex items-center space-x-3 p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <i class="fas fa-plus text-blue-600"></i>
                            <span class="font-medium text-blue-900">Ajouter un produit</span>
                        </a>

                        <a href="{{ route('promotions.create') }}"
                            class="flex items-center space-x-3 p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors">
                            <i class="fas fa-calendar text-green-600"></i>
                            <span class="font-medium text-green-900">Créer une promotion</span>
                        </a>

                        <a href="{{ route('news.create') }}"
                            class="flex items-center space-x-3 p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                            <i class="fas fa-newspaper text-purple-600"></i>
                            <span class="font-medium text-purple-900">Publier une actualité</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <!-- Other sections content -->
        <div x-show="activeSection !== 'dashboard'" class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">
            <div class="text-center">
                <div class="mx-auto w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-cog text-blue-600 text-2xl"
                        :class="{
                            'fa-box': activeSection === 'products',
                            'fa-shopping-cart': activeSection === 'orders',
                            'fa-users': activeSection === 'customers',
                            'fa-comment': activeSection === 'messages',
                            'fa-percent': activeSection === 'promotions',
                            'fa-newspaper': activeSection === 'news',
                            'fa-truck': activeSection === 'delivery',
                            'fa-chart-bar': activeSection === 'reports',
                            'fa-user-plus': activeSection === 'admins',
                            'fa-shield-alt': activeSection === 'security',
                            'fa-cog': activeSection === 'settings'
                        }"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2"
                    x-text="
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
                            activeSection === 'settings' ? 'Paramètres' : 'Section'
                        ">
                </h3>
                <p class="text-gray-600">
                    Cette section est en cours de développement. Vous pourrez bientôt accéder à toutes les
                    fonctionnalités de gestion pour cette partie de votre plateforme.
                </p>
            </div>
        </div>
    </main>
@endsection
