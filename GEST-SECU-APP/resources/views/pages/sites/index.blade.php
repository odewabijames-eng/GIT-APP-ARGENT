@extends('layouts.app')

@section('title', 'Sites')

@section('content')

                <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2 gap-4">
                    <div>
                        <h1 class="text-3xl font-extrabold text-gray-800">Sites</h1>
                        <p class="text-gray-500">Gestion des sites</p>
                    </div>
                    <button class="bg-slate-800 hover:bg-slate-600 text-white transition duration-200 font-bold py-2 px-4 rounded-lg">
                        Actualiser <i class="fas fa-sync-alt"></i>
                    </button>
                </div>

                <div class="container mx-auto px-4 py-6">
                              <!-- Formulaire de recherche -->
                    <div class="mb-2">
                        <input type="text" placeholder="Rechercher un site..." class="w-full p-2 border rounded">
                    </div>
                                <!-- Liste des sites -->
                    <div class="bg-white p-4 rounded-lg shadow">
                        <table class="min-w-full ">
                            <thead>
                                <tr>

                                    <th class="px-2 py-2">Nom du Site</th>
                                    <th class="px-2 py-2">Adresse</th>
                                    <th class="px-2 py-2">statut</th>
                                    <th class="px-2 py-2">Responsable</th>
                                    <th class="px-2 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Exemple de ligne de site -->
                                <tr>
                                    <td class="px-4 py-2">PETROCI</td>
                                    <td class="px-4 py-2">Marcory-Residentiel, Abidjan</td>
                                    <td class="px-4 py-2">Actif</td>
                                    <td class="px-4 py-2">Jean Roland</td>
                                    <td class="px-4 py-2">
                                        <div class="flex space-x-2">
                                            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button class="bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                            <!-- formulaire pour ajouter d'autres lignes de sites  -->
                    <div class="mt-6 bg-white p-4 rounded-lg shadow">
                        <h2 class="text-xl font-bold mb-4">Ajouter un nouveau site</h2>
                        <form>
                            <div class="mb-4">
                                <label for="siteName" class="block text-gray-700">Nom du Site</label>
                                <input type="text" id="siteName" class="w-full p-2 border rounded">
                            </div>
                            <div class="mb-4">
                                <label for="siteAddress" class="block text-gray-700">Adresse</label>
                                <input type="text" id="siteAddress" class="w-full p-2 border rounded">
                            </div>
                            <div class="mb-4">
                                <label for="siteStatus" class="block text-gray-700">Statut</label>
                                <select id="siteStatus" class="w-full p-2 border rounded">
                                    <option value="actif">Actif</option>
                                    <option value="inactif">Inactif</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="siteManager" class="block text-gray-700">Responsable</label>
                                <input type="text" id="siteManager" class="w-full p-2 border rounded">
                            </div>
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded">
                                Ajouter le site
                            </button>
                        </form>
                    </div>

                        <!-- suivi des incidents par site -->
                    <div class="bg-white p-4 rounded-lg shadow mt-6">
                        <h2 class="text-xl font-bold mb-4">Suivi des incidents par site</h2>
                        <p class="text-gray-500">Affichage du nombre d'incidents en cours, résolus et non résolus pour chaque site.</p>
                    </div>
@endsection
