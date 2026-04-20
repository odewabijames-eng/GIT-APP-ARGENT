@extends('layouts.app')

@section('title', 'agents')

@section('content')

                <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2 gap-4">
                    <div>
                        <h1 class="text-3xl font-extrabold text-gray-800">Agents</h1>
                        <p class="text-gray-500">Gestion des agents</p>
                    </div>
                    <button class="bg-slate-800 hover:bg-slate-600 text-white transition duration-200 font-bold py-2 px-4 rounded-lg">
                    Actualiser <i class="fas fa-sync-alt"></i>
                    </button>
                </div>

                         <!-- MAIN GRID -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

                    <!-- LEFT SIDE -->
                    <div class="lg:col-span-2 space-y-7">


                        <div class="bg-white p-4 rounded-lg shadow">
                            <h2 class="text-xl font-bold mb-4">Liste des agents</h2>
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                        </tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">photo</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Identifiant</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Téléphone</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actif</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <!-- Exemple d'agent -->
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <img class="h-10 w-10 rounded-full" src="" alt="Photo de l'agent">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">ODEWABI JAMES</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">AG-001</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">odewabi.james@example.com</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">+225 01 02 54 67 55</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Oui</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex space-x-2">
                                                    <button class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <img class="h-10 w-10 rounded-full" src="" alt="Photo de l'agent">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">OKEDARA SARAH</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">AG-002</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">okedara.sarah@example.com</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">+225 05 74 66 35 55 </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Oui</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex space-x-2">
                                                    <a href="" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <button class="bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <img class="h-10 w-10 rounded-full" src="" alt="Photo de l'agent">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">OYEKAN JOEL</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">AG-003</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">oyekan.joel@example.com</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">+225 01 02 54 67 55</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Oui</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex space-x-2">
                                                    <button class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      <!-- RIGHT SIDE -->
                      <!-- formulaire de création d'un agent -->
                    <div class="space-y-4">
                       <form method="POST" action="{{ route('agents.create') }}">
                            <div class="bg-white p-4 rounded-lg shadow">
                                <h2 class="text-xl font-bold mb-4">Ajouter un agent</h2>
                                <div class="space-y-4">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700">Nom complet</label>
                                        <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    </div>
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                        <input type="email" name="email" id="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    </div>
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-gray-700">Téléphone</label>
                                        <input type="text" name="phone" id="phone" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    </div>
                                    <div>
                                        <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                                        <input type="password" name="password" id="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    </div>
                                    <div>
                                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">confirmer le mot de passe</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    </div>
                                    <div>

                                            <button type="submit" class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                                Ajouter l'agent
                                            </button>

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                              <!-- suivi des performances des agents -->
                <div class="bg-white p-4 rounded-lg shadow mt-6">
                    <h2 class="text-xl font-bold mb-4">Suivi des performances des agents</h2>
                    <p class="text-gray-500">Affichage des statistiques de performance des agents (ex: nombre d'incidents traités, temps de réponse moyen, etc.)</p>
                </div>



@endsection

