@extends('layouts.app')
@section('content')
    <section id="accueil" class="hero-bg text-white py-24 md:py-36 flex items-center justify-center relative">
        <!-- Bulles décoratives -->
        <div class="bubble bg-white w-24 h-24 left-10 bottom-10" style="animation-delay: 0s;"></div>
        <div class="bubble bg-white w-16 h-16 left-1/2 bottom-0" style="animation-delay: 2s;"></div>
        <div class="bubble bg-white w-20 h-20 right-10 bottom-5" style="animation-delay: 4s;"></div>

        <!-- Vague -->
        <div class="wave"></div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="flex flex-col md:flex-row items-center justify-center">
                <div class="md:w-2/3">
                    <h1 class="text-4xl md:text-6xl font-extrabold mb-6 drop-shadow-lg">Fraîcheur & Saveurs de la Mer
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 font-light">Découvrez chaque jour le meilleur de la mer, livré
                        avec passion à votre table.</p>
                    <a href="{{route('product.all')}}"
                        class="bg-white text-blue-900 font-bold py-3 px-8 rounded-full shadow-lg hover:bg-blue-100 transition inline-block">Voir
                        nos produits</a>
                </div>
                <div class="md:w-1/3 mt-10 md:mt-0 flex justify-center">
                    <!-- Poisson animé avec une meilleure image -->
                    <img src="/images/vue.png" alt="Poisson SVG animé" class="w-48 fish-anim">
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                <div class="p-8 rounded-2xl bg-blue-50 shadow hover:scale-105 transition">
                    <i class="fas fa-fish text-5xl text-blue-700 mb-4 fish-anim"></i>
                    <h3 class="text-2xl font-bold mb-2 text-blue-900">Ultra Frais</h3>
                    <p class="text-gray-600">Arrivages quotidiens, sélectionnés à l'aube pour garantir une fraîcheur
                        inégalée.</p>
                </div>
                <div class="p-8 rounded-2xl bg-blue-50 shadow hover:scale-105 transition">
                    <i class="fas fa-truck text-5xl text-blue-700 mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2 text-blue-900">Livraison Express</h3>
                    <p class="text-gray-600">Livraison rapide et soignée, partout dans la région, pour particuliers et
                        pros.</p>
                </div>
                <div class="p-8 rounded-2xl bg-blue-50 shadow hover:scale-105 transition">
                    <i class="fas fa-award text-5xl text-blue-700 mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2 text-blue-900">Qualité Premium</h3>
                    <p class="text-gray-600">Des produits rigoureusement contrôlés, pour une expérience gustative
                        unique.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="produits" class="py-20 bg-gradient-to-b from-blue-50 to-blue-100">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-extrabold text-center mb-14 text-blue-900">Nos Produits Vedettes</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
                <!-- Example product cards, replace with dynamic content if needed -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Scaus_u0.gif/330px-Scaus_u0.gif"
                        alt="Saloumon" class="w-full h-48 object-cover group-hover:scale-110 transition">
                    <div class="p-5">
                        <h3 class="font-bold text-xl mb-1 text-blue-900">Saloumon</h3>
                        <p class="text-gray-500 mb-3 text-sm">Le maquereau, poisson populaire et savoureux.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-blue-700">1600 FCFA/kg</span>
                            <button
                                class="bg-blue-700 text-white py-1 px-4 rounded-full font-semibold hover:bg-blue-900 transition">Commander</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition group">
                    <img src="https://www.frais-livre.fr/1408-home_default/chinchard-095-105-kg.jpg" alt="Chinchard"
                        class="w-full h-48 object-cover group-hover:scale-110 transition">
                    <div class="p-5">
                        <h3 class="font-bold text-xl mb-1 text-blue-900">Chinchard</h3>
                        <p class="text-gray-500 mb-3 text-sm">Chinchard frais, pêche durable.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-blue-700">€39.99/kg</span>
                            <button
                                class="bg-blue-700 text-white py-1 px-4 rounded-full font-semibold hover:bg-blue-900 transition">Commander</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition group">
                    <img src="https://www.koudijs.com/globalassets/animal-nutrition/animals/aqua/de-heus-animal-nutrition_aqua_black-tilapia_group.jpg?mode=crop&width=600&height=435"
                        alt="Tilapia" class="w-full h-48 object-cover group-hover:scale-110 transition">
                    <div class="p-5">
                        <h3 class="font-bold text-xl mb-1 text-blue-900">Tilapia</h3>
                        <p class="text-gray-500 mb-3 text-sm">Tilapia frais, chair tendre et délicate.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-blue-700">€29.99/kg</span>
                            <button
                                class="bg-blue-700 text-white py-1 px-4 rounded-full font-semibold hover:bg-blue-900 transition">Commander</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition group">
                    <img src="https://i0.wp.com/cook.saveurdafrique.ca/wp-content/uploads/2023/04/342CE42A-6423-4591-8FF3-60AF66E2DCA2.png?resize=300%2C300&ssl=1"
                        alt="Faux Bar" class="w-full h-48 object-cover group-hover:scale-110 transition">
                    <div class="p-5">
                        <h3 class="font-bold text-xl mb-1 text-blue-900">Faux Bar</h3>
                        <p class="text-gray-500 mb-3 text-sm">Bar sauvage, entier ou en filet.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-blue-700">€32.99/kg</span>
                            <button
                                class="bg-blue-700 text-white py-1 px-4 rounded-full font-semibold hover:bg-blue-900 transition">Commander</button>
                        </div>
                    </div>
                </div>
                <!-- Add more products as needed -->
            </div>
            <div class="text-center mt-14">
                <a href="{{route('product.all')}}"
                    class="inline-block bg-blue-700 text-white py-3 px-10 rounded-full font-bold shadow-lg hover:bg-blue-900 transition">Voir
                    tous les produits</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="apropos" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-10">
                <!-- Image -->
                <div class="md:w-1/2">
                    <img src="/images/PHOTO1.jpg" alt="Notre poissonnerie" class="rounded-2xl shadow-xl w-full h-auto">
                </div>

                <!-- Texte -->
                <div class="md:w-1/2">
                    <h2 class="text-3xl sm:text-4xl font-extrabold mb-6 text-blue-900">Notre Histoire</h2>
                    <p class="text-base sm:text-lg mb-4 text-gray-700">
                        Depuis 2019, Poissonnerie Bleue s'engage à offrir le meilleur de la mer, avec une sélection
                        exigeante et un service personnalisé.
                    </p>
                    <p class="text-base sm:text-lg mb-4 text-gray-700">
                        Notre équipe passionnée accompagne chaque client, du professionnel au particulier, pour une
                        expérience unique et savoureuse.
                    </p>

                    <!-- Statistiques -->
                    <div class="flex flex-col md:flex-row gap-6 mt-8">
                        <div class="bg-blue-100 p-6 rounded-xl text-center flex-1">
                            <h3 class="font-bold text-2xl text-blue-900">20+</h3>
                            <p class="text-sm text-gray-600">Années d'expérience</p>
                        </div>
                        <div class="bg-blue-100 p-6 rounded-xl text-center flex-1">
                            <h3 class="font-bold text-2xl text-blue-900">50+</h3>
                            <p class="text-sm text-gray-600">Espèces disponibles</p>
                        </div>
                        <div class="bg-blue-100 p-6 rounded-xl text-center flex-1">
                            <h3 class="font-bold text-2xl text-blue-900">100%</h3>
                            <p class="text-sm text-gray-600">Satisfaction client</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Section -->
    <!-- Section Actualités & Offres -->
    <section class="bg-gradient-to-b from-white to-blue-50 py-16">
        <div class="container mx-auto px-4">
            <!-- Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-extrabold text-blue-900 mb-4">
                    Actualités & Offres
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Découvrez nos dernières nouveautés et promotions exclusives
                </p>
            </div>

            <!-- Carousel Container -->
            <div class="relative w-full max-w-6xl mx-auto">
                <!-- Carousel wrapper -->
                <div class="relative h-80 md:h-[500px] overflow-hidden rounded-2xl shadow-2xl">

                    <!-- Slide 1 -->
                    <div class="carousel-slide absolute inset-0 opacity-100 transition-all duration-700 ease-in-out transform translate-x-0"
                        data-slide="0">
                        <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?auto=format&fit=crop&w=1280&q=80"
                            class="w-full h-full object-cover" alt="Lancement boutique">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8">
                            <div class="animate-slide-up">
                                <span
                                    class="inline-block bg-gradient-to-r from-blue-500 to-blue-700 text-white px-3 py-1 rounded-full text-xs font-semibold mb-3">
                                    NOUVEAU
                                </span>
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-3">
                                    Lancement de notre boutique en ligne
                                </h3>
                                <p class="text-gray-200 text-base md:text-lg mb-4 max-w-2xl">
                                    Découvrez notre plateforme de commande moderne et rapide. Commandez vos produits frais
                                    en quelques clics !
                                </p>
                                <button
                                    class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-6 py-2 rounded-lg font-semibold transform hover:-translate-y-0.5 hover:shadow-lg transition-all duration-300">
                                    Découvrir la boutique
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-slide absolute inset-0 opacity-0 transition-all duration-700 ease-in-out transform translate-x-full"
                        data-slide="1">
                        <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?auto=format&fit=crop&w=1280&q=80"
                            class="w-full h-full object-cover" alt="Promotion crevettes">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8">
                            <div class="animate-slide-up">
                                <span
                                    class="inline-block bg-gradient-to-r from-orange-500 to-red-500 text-white px-3 py-1 rounded-full text-xs font-semibold mb-3">
                                    PROMO -15%
                                </span>
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-3">
                                    Offre Été : Crevettes fraîches
                                </h3>
                                <p class="text-gray-200 text-base md:text-lg mb-4 max-w-2xl">
                                    Profitez de -15% sur toutes nos crevettes fraîches. Offre valable jusqu'au 31 août 2025.
                                </p>
                                <button
                                    class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-6 py-2 rounded-lg font-semibold transform hover:-translate-y-0.5 hover:shadow-lg transition-all duration-300">
                                    Profiter de l'offre
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-slide absolute inset-0 opacity-0 transition-all duration-700 ease-in-out transform translate-x-full"
                        data-slide="2">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=1280&q=80"
                            class="w-full h-full object-cover" alt="Dégustation">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8">
                            <div class="animate-slide-up">
                                <span
                                    class="inline-block bg-gradient-to-r from-green-500 to-green-600 text-white px-3 py-1 rounded-full text-xs font-semibold mb-3">
                                    ÉVÉNEMENT
                                </span>
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-3">
                                    Dégustation gratuite ce week-end
                                </h3>
                                <p class="text-gray-200 text-base md:text-lg mb-4 max-w-2xl">
                                    Rendez-vous samedi à 10h pour découvrir nos produits ! Dégustation gratuite et conseils
                                    de nos experts.
                                </p>
                                <button
                                    class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-6 py-2 rounded-lg font-semibold transform hover:-translate-y-0.5 hover:shadow-lg transition-all duration-300">
                                    Réserver ma place
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="carousel-slide absolute inset-0 opacity-0 transition-all duration-700 ease-in-out transform translate-x-full"
                        data-slide="3">
                        <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=1280&q=80"
                            class="w-full h-full object-cover" alt="Nouveaux produits">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8">
                            <div class="animate-slide-up">
                                <span
                                    class="inline-block bg-gradient-to-r from-purple-500 to-purple-600 text-white px-3 py-1 rounded-full text-xs font-semibold mb-3">
                                    NOUVEAUTÉ
                                </span>
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-3">
                                    Nouveaux produits de saison
                                </h3>
                                <p class="text-gray-200 text-base md:text-lg mb-4 max-w-2xl">
                                    Découvrez notre sélection de produits frais de saison. Qualité premium garantie.
                                </p>
                                <button
                                    class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-6 py-2 rounded-lg font-semibold transform hover:-translate-y-0.5 hover:shadow-lg transition-all duration-300">
                                    Voir les nouveautés
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <button id="prevBtn"
                    class="absolute top-1/2 left-4 z-30 -translate-y-1/2 w-12 h-12 bg-white/80 hover:bg-white rounded-full shadow-lg flex items-center justify-center group transition-all duration-300 hover:scale-105">
                    <svg class="w-6 h-6 text-blue-800 group-hover:text-blue-900" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button id="nextBtn"
                    class="absolute top-1/2 right-4 z-30 -translate-y-1/2 w-12 h-12 bg-white/80 hover:bg-white rounded-full shadow-lg flex items-center justify-center group transition-all duration-300 hover:scale-105">
                    <svg class="w-6 h-6 text-blue-800 group-hover:text-blue-900" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- Dots Navigation -->
                <div class="flex justify-center mt-6 space-x-2">
                    <button
                        class="carousel-dot w-3 h-3 rounded-full bg-white shadow-md transition-all duration-300 opacity-100 scale-110"
                        data-slide="0"></button>
                    <button
                        class="carousel-dot w-3 h-3 rounded-full bg-white/50 shadow-md transition-all duration-300 hover:bg-white/70"
                        data-slide="1"></button>
                    <button
                        class="carousel-dot w-3 h-3 rounded-full bg-white/50 shadow-md transition-all duration-300 hover:bg-white/70"
                        data-slide="2"></button>
                    <button
                        class="carousel-dot w-3 h-3 rounded-full bg-white/50 shadow-md transition-all duration-300 hover:bg-white/70"
                        data-slide="3"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-extrabold text-center mb-12 text-blue-900">Contactez-nous</h2>
            <div class="flex flex-col md:flex-row gap-10">
                <div class="md:w-1/2">
                    <div class="bg-blue-50 rounded-2xl p-8 shadow mb-8">
                        <h3 class="text-xl font-bold mb-4 text-blue-900">Nos coordonnées</h3>
                        <ul class="space-y-4 text-gray-700">
                            <li><i class="fas fa-map-marker-alt text-blue-700 mr-2"></i> TORI GARE, BENIN</li>
                            <li><i class="fas fa-phone-alt text-blue-700 mr-2"></i> 01 68 68 49 49</li>
                            <li><i class="fas fa-envelope text-blue-700 mr-2"></i> senanmarket29@gmail.com</li>
                            <li><i class="fas fa-clock text-blue-700 mr-2"></i> Lundi - Dimanche: 7h30 - 20h</li>
                        </ul>
                        <div class="flex space-x-4 mt-6">
                            <a href="#"
                                class="w-10 h-10 bg-blue-700 text-white rounded-full flex items-center justify-center hover:bg-blue-900 transition"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#"
                                class="w-10 h-10 bg-blue-700 text-white rounded-full flex items-center justify-center hover:bg-blue-900 transition"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#"
                                class="w-10 h-10 bg-blue-700 text-white rounded-full flex items-center justify-center hover:bg-blue-900 transition"><i
                                    class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <form class="bg-blue-50 rounded-2xl p-8 shadow space-y-6">
                        <div>
                            <label for="name" class="block mb-1 font-medium text-blue-900">Nom complet</label>
                            <input type="text" id="name"
                                class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-700">
                        </div>
                        <div>
                            <label for="email" class="block mb-1 font-medium text-blue-900">Email</label>
                            <input type="email" id="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-700">
                        </div>
                        <div>
                            <label for="message" class="block mb-1 font-medium text-blue-900">Message</label>
                            <textarea id="message" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-700"></textarea>
                        </div>
                        <button type="submit"
                            class="bg-blue-700 text-white py-3 px-8 rounded-full font-bold hover:bg-blue-900 transition">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 20,
            slidesPerView: 1,
            autoplay: {
                delay: 4000,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-in-out',
                        'slide-up': 'slideUp 0.8s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateX(100%)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateX(0)'
                            },
                        },
                        slideUp: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(20px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            },
                        }
                    }
                }
            }
        }
    </script>
    <script>
        class TailwindCarousel {
            constructor() {
                this.currentSlide = 0;
                this.slides = document.querySelectorAll('.carousel-slide');
                this.dots = document.querySelectorAll('.carousel-dot');
                this.prevBtn = document.getElementById('prevBtn');
                this.nextBtn = document.getElementById('nextBtn');
                this.autoPlayInterval = null;
                this.autoPlayDelay = 5000;

                this.init();
            }

            init() {
                // Navigation buttons
                this.prevBtn.addEventListener('click', () => this.prevSlide());
                this.nextBtn.addEventListener('click', () => this.nextSlide());

                // Dots navigation
                this.dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => this.goToSlide(index));
                });

                // Touch support
                this.addTouchSupport();

                // Auto-play
                this.startAutoPlay();

                // Pause on hover
                const carousel = document.querySelector('.relative.w-full.max-w-6xl');
                carousel.addEventListener('mouseenter', () => this.stopAutoPlay());
                carousel.addEventListener('mouseleave', () => this.startAutoPlay());
            }

            goToSlide(index) {
                // Remove active styles from current slide and dot
                this.slides[this.currentSlide].classList.remove('opacity-100', 'translate-x-0');
                this.slides[this.currentSlide].classList.add('opacity-0', 'translate-x-full');

                this.dots[this.currentSlide].classList.remove('opacity-100', 'scale-110');
                this.dots[this.currentSlide].classList.add('bg-white/50');

                // Update current slide
                this.currentSlide = index;

                // Add active styles to new slide and dot
                this.slides[this.currentSlide].classList.remove('opacity-0', 'translate-x-full');
                this.slides[this.currentSlide].classList.add('opacity-100', 'translate-x-0');

                this.dots[this.currentSlide].classList.remove('bg-white/50');
                this.dots[this.currentSlide].classList.add('opacity-100', 'scale-110');
            }

            nextSlide() {
                const nextIndex = (this.currentSlide + 1) % this.slides.length;
                this.goToSlide(nextIndex);
            }

            prevSlide() {
                const prevIndex = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
                this.goToSlide(prevIndex);
            }

            startAutoPlay() {
                this.autoPlayInterval = setInterval(() => {
                    this.nextSlide();
                }, this.autoPlayDelay);
            }

            stopAutoPlay() {
                if (this.autoPlayInterval) {
                    clearInterval(this.autoPlayInterval);
                    this.autoPlayInterval = null;
                }
            }

            addTouchSupport() {
                const carousel = document.querySelector('.relative.h-80.md\\:h-\\[500px\\]');
                let startX = 0;
                let endX = 0;

                carousel.addEventListener('touchstart', (e) => {
                    startX = e.touches[0].clientX;
                });

                carousel.addEventListener('touchend', (e) => {
                    endX = e.changedTouches[0].clientX;
                    const diff = startX - endX;

                    if (Math.abs(diff) > 50) {
                        if (diff > 0) {
                            this.nextSlide();
                        } else {
                            this.prevSlide();
                        }
                    }
                });
            }
        }

        // Initialize carousel
        document.addEventListener('DOMContentLoaded', () => {
            new TailwindCarousel();
        });
    </script>
@endpush
