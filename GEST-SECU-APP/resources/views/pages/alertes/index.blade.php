@extends('layouts.app')

@section('title', 'Alertes')

@section('content')

            <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2 gap-4">
                    <div>
                        <h1 class="text-3xl font-extrabold text-gray-800">Alertes</h1>
                        <p class="text-gray-500">Gestion des alertes</p>
                    </div>
                    <button class="bg-slate-800 hover:bg-slate-600 text-white transition duration-200 font-bold py-2 px-4 rounded-lg">
                    Actualiser <i class="fas fa-sync-alt"></i>
                    </button>
            </div>
            <!-- HISTORIQUE DES ALERTES -->
            <div class="bg-white shadow-md rounded-lg p-4">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Date</th>
                            <th class="py-3 px-6 text-left">Statut</th>
                            <th class="py-3 px-6 text-left">Agent</th>
                            <th class="py-3 px-6 text-left">Site</th>
                            <th class="py-3 px-6 text-left">Description</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <!-- Exemple de ligne d'alerte -->
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">2025-22-10</td>
                            <td class="py-3 px-6 text-left"><span class="bg-gray-100 py-1 px-3 rounded-full">Ouverte</span></td>
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center gap-2">
                                    <span>OYEKAN JOEL</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">PETROCI</td>
                            <td class="py-3 px-6 text-left">Retard Prise de service: AG-001 sur PETROCI</td>
                        </tr>

                    </tbody>
                </table>
            </div>


             <!-- SECTION REPLACEMENT D'AGENT -->
            <div class="bg-white p-6 rounded-2xl shadow">
                <h2 class="font-semibold mb-4">Remplacement d'agent</h2>

                <div class="space-y-3">
                    <select class="w-full p-3 border rounded-xl">
                        <option>Affectation</option>
                    </select>

                    <select class="w-full p-3 border rounded-xl">
                        <option>Vigile</option>
                    </select>

                    <button class="w-full bg-blue-600 text-white py-3 rounded-xl">
                        Remplacer
                    </button>
                </div>
            </div>


@endsection

