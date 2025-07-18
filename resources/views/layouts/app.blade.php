<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poissonnerie Bleue - Fraîcheur & Saveurs</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Alpine.js nécessaire -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        .hero-bg {
            background: linear-gradient(120deg, #2563eb 60%, #38bdf8 100%);
            position: relative;
            overflow: hidden;
        }

        .bubble {
            position: absolute;
            border-radius: 50%;
            opacity: 0.2;
            background: white;
            animation: float 12s infinite linear;
        }

        @keyframes float {
            0% {
                transform: translateY(0) scale(1);
                opacity: 0.2;
            }

            100% {
                transform: translateY(-600px) scale(1.2);
                opacity: 0;
            }
        }

        .fish-anim {
            animation: swim 7s infinite ease-in-out;
            filter: drop-shadow(0 5px 10px rgba(0, 0, 0, 0.2));
        }

        @keyframes swim {
            0% {
                transform: translateX(-20px) translateY(-10px) rotate(-5deg);
            }

            25% {
                transform: translateX(30px) translateY(5px) rotate(3deg);
            }

            50% {
                transform: translateX(60px) translateY(-5px) rotate(-3deg);
            }

            75% {
                transform: translateX(30px) translateY(0) rotate(2deg);
            }

            100% {
                transform: translateX(-20px) translateY(-10px) rotate(-5deg);
            }
        }

        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 80px;
            background: url('https://svgshare.com/i/12wq.svg') repeat-x;
            animation: waveMove 12s linear infinite;
        }

        @keyframes waveMove {
            0% {
                background-position-x: 0;
            }

            100% {
                background-position-x: 1000px;
            }
        }
    </style>
    <!-- Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

</head>

<body class="font-sans bg-white">
    <!-- Header -->
    @include('partials.navbar')
    <!-- Hero Section -->
    @yield('content')
    <!-- Footer -->
    @include('partials.footer')
    <script>
        // Menu toggle for mobile
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    @stack('scripts')
</body>

</html>
