@extends('layouts.app')

@section('title', 'Rapports')

@section('content')


            <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2 gap-4">
                    <div>
                        <h1 class="text-3xl font-extrabold text-gray-800">Rapports</h1>
                        <p class="text-gray-500">Gestion des rapports</p>
                    </div>
                    <button class="bg-slate-800 hover:bg-slate-600 text-white transition duration-200 font-bold py-2 px-4 rounded-lg">
                    Actualiser <i class="fas fa-sync-alt"></i>
                    </button>
            </div>

            <!-- filtre pour les rapports -->
            <div class="bg-white shadow-md rounded-lg p-4 mb-6">
                <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
                    <div class="flex items-center gap-2">
                        <label for="date" class="text-gray-700 font-medium">Date precise:</label>
                        <input type="date" id="date" name="date" class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="flex items-center gap-2">
                        <label for="month" class="text-gray-700 font-medium">Mois:</label>
                        <input type="month" id="month" name="month" class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="flex items-center gap-2">
                        <label for="employee" class="text-gray-700 font-medium">Site:</label>
                        <select id="employee" name="employee" class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">tous les Sites</option>
                            <!-- Ajouter des  sites -->
                        </select>
                    </div>
                    <div class="flex items-center gap-2">
                        <label for="employee" class="text-gray-700 font-medium">Agent:</label>
                        <select id="employee" name="employee" class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">tous les Agents</option>
                            <!-- Ajouter des Agents -->
                        </select>
                    </div>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white transition duration-200 font-bold py-2 px-4 rounded-lg">
                        Filtrer <i class="fas fa-filter"></i>
                    </button>
                    <p class="text-gray-500 text-sm">
                        Si une date est enregistrée, elle prime sur le mois.
                    </p>
                </div>
            </div>
            <!-- tableau des rapports -->
            <div class="bg-white shadow-md rounded-lg p-4">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-semibold mb-4">Rapport de pointage</h2>
                    <button class="bg-green-500 hover:bg-green-600 text-white transition duration-200 font-bold py-2 px-4 rounded-lg">
                        Exporter <i class="fas fa-file-export"></i>
                </div>
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Date</th>
                            <th class="py-3 px-6 text-left">Agent</th>
                            <th class="py-3 px-6 text-left">Site</th>
                            <th class="py-3 px-6 text-left">Debut</th>
                            <th class="py-3 px-6 text-left">Fin</th>
                            <th class="py-3 px-6 text-left">Retard</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <!-- Exemple de ligne de rapport -->
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">2025-22-10</td>
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center gap-2">
                                    <span>OYEKAN JOEL</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">PETROCI</td>
                            <td class="py-3 px-6 text-left">2025-22-10 08:00</td>
                            <td class="py-3 px-6 text-left">2025-22-10 17:00</td>
                            <td class="py-3 px-6 text-left"><span class="bg-green-500 text-white py-1 px-3 rounded-full">Non</span></td>
                        </tr>
                        <!-- Ajouter d'autres lignes de rapport -->
                    </tbody>
                </table>
            </div>
@endsection
