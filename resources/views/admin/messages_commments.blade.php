@extends('layouts.app1')

@section('content')
<main class="p-6 min-h-screen bg-gray-50">
    <div class="max-w-4xl mx-auto">
        <!-- Titre -->
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Messages des Clients</h1>

        <!-- Liste des messages -->
        <div class="space-y-6">
            <!-- Exemple de message -->
            <div class="bg-white rounded-lg shadow p-5 border">
                <div class="mb-2">
                    <p class="text-sm text-gray-500">De : <span class="font-semibold text-gray-700">client@example.com</span></p>
                    <p class="text-sm text-gray-500">Envoyé le : 18 juillet 2025 à 14h32</p>
                </div>
                <p class="text-gray-700 mb-4">
                    Bonjour, j’aimerais avoir plus d’informations concernant ma commande #4523.
                </p>

                <!-- Champ de réponse -->
                <form action="#" method="POST" class="space-y-3">
                    <textarea
                        name="reponse"
                        rows="3"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Répondre à ce message..."></textarea>
                    <div class="text-right">
                        <button
                            type="submit"
                            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                            Envoyer la réponse
                        </button>
                    </div>
                </form>
            </div>

            <!-- Dupliquer pour d’autres messages -->
            <div class="bg-white rounded-lg shadow p-5 border">
                <div class="mb-2">
                    <p class="text-sm text-gray-500">De : <span class="font-semibold text-gray-700">amina@client.com</span></p>
                    <p class="text-sm text-gray-500">Envoyé le : 17 juillet 2025 à 09h20</p>
                </div>
                <p class="text-gray-700 mb-4">
                    Le produit que j’ai reçu ne correspond pas à ma commande initiale.
                </p>

                <form action="#" method="POST" class="space-y-3">
                    <textarea
                        name="reponse"
                        rows="3"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Répondre à ce message..."></textarea>
                    <div class="text-right">
                        <button
                            type="submit"
                            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                            Envoyer la réponse
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
