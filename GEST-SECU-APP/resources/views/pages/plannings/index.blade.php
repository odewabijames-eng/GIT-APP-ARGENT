@extends('layouts.app')

@section('title', 'Plannings')

@section('content')
                         <!-- gestion des plannings -->
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2 gap-4">
                            <div>
                                <h1 class="text-3xl font-extrabold text-gray-800">Plannings</h1>
                                <p class="text-gray-500">Gestion des plannings</p>
                            </div>
                            <button class="bg-slate-800 hover:bg-slate-600 text-white transition duration-200 font-bold py-2 px-4 rounded-lg">
                            Actualiser <i class="fas fa-sync-alt"></i>
                            </button>
                    </div>

                          <!-- regles cobra -->
                    <div class="bg-white p-4 rounded-2xl mb-2">
                        <p class="text-gray-500">Regle cobra: 2 Agents minimun par site avec 2 posts fixe.<strong>Jour 06:00-18:00</strong>et<strong>Nuit 18:00-06:00(lendemain).</strong>
                        La passation se fait au plage de <strong>06:00-07:00</strong> et <strong>18:00-19:00</strong>. Le systemes lie automatiquement la relève entre les posts</p>
                    </div>


                      <!-- Table des plannings -->
                    <div class="bg-white p-6 rounded-2xl shadow">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="font-semibold">Derniers plannings</h2>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full table-auto">
                                <thead>
                                    <tr class="bg-gray-200 text-left">
                                        <th class="px-2 py-1 uppercase">Date</th>
                                        <th class="px-4 py-2 uppercase">Site</th>
                                        <th class="px-4 py-2">Poste</th>
                                        <th class="px-4 py-2">Agent</th>
                                        <th class="px-4 py-2">Creneau</th>
                                        <th class="px-4 py-2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-t">
                                        <td class="px-2 py-1">12/10/2024</td>
                                        <td class="px-2 py-1">PETROCI</td>
                                        <td class="px-2 py-1">Jour</td>
                                        <td class="px-2 py-1">OYEKAN JOEL</td>
                                        <td class="px-2 py-1">
                                                 08:00 - 18:00
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

                               <!-- formulaire de nouvelle affectation -->
                    <div class="bg-white p-4 rounded-lg shadow">
                        <h2 class="text-xl font-bold mb-4">Nouvelle affectation</h2>
                        <form method="POST" action="">
                             @csrf
                            <div class="mb-4">
                                <label for="agent" class="block text-sm font-medium text-gray-700">Agent</label>
                                <select id="agent" name="agent" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="">Sélectionner un agent</option>
                                    <option value="1">OYEKAN JOEL</option>
                                    <option value="2">AGBOU KOUAKOU</option>
                                    <option value="3">KOUADIO KOUAKOU</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="site" class="block text-sm font-medium text-gray-700">Site</label>
                                <select id="site" name="site" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="">Sélectionner un site</option>
                                    <option value="1">PETROCI</option>
                                    <option value="2">SIR</option>
                                    <option value="3">SODECI</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="poste" class="block text-sm font-medium text-gray-700">Poste</label>
                                <select id="poste" name="poste" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="">Sélectionner un poste</option>
                                    <option value="1">Jour</option>
                                    <option value="2">Nuit</option>
                                    <option value="3">Weekend</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                                <input type="date" id="date" name="date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div class="mb-4">
                                <label for="creneau" class="block text-sm font-medium text-gray-700">Créneau horaire</label>
                                <input type="text" id="creneau" name="creneau" placeholder="Ex: 08:00 - 18:00" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded">
                                Ajouter
                            </button>
                        </form>
                    </div>


@endsection
