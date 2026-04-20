@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
                         <!-- En Tête -->
            <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2 gap-4">
                <div>
                    <h1 class="text-3xl font-extrabold text-gray-800">Tableau de bord</h1>
                    <p class="text-gray-500">Vue générale des activités</p>
                </div>
                <button class="bg-slate-800 hover:bg-slate-600 text-white transition duration-200 font-bold py-2 px-4 rounded-lg">
                  Actualiser <i class="fas fa-sync-alt"></i>
                 </button>
            </div>
            <div class="p-6 bg-gray-100 min-h-screen">

                <!-- BAR HORIZONTALE -->
                <div class="bg-white rounded-2xl shadow p-6 mb-8 flex flex-wrap gap-6 justify-between">
                    <div>
                        <p class="text-gray-500 text-sm uppercase font-bold">Aujourd'hui</p>
                        <p class="text-2xl font-bold">2</p>
                         <p class="text-gray-500 text-xl">Affectations</p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm uppercase font-bold">Planifiés</p>
                        <p class="text-2xl font-bold">2</p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm uppercase font-bold">Remplacés</p>
                        <p class="text-2xl font-bold">0</p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm uppercase font-bold">Terminés</p>
                        <p class="text-2xl font-bold">0</p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm uppercase font-bold">Manqués</p>
                        <p class="text-2xl font-bold">0</p>
                    </div>
                    <div class="bg-red-500 text-white px-4 py-2 rounded-xl">
                        <p class="text-sm uppercase font-bold">Alertes</p>
                        <p class="text-xl font-bold">3</p>
                    </div>
                </div>

                <!-- MAIN GRID -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

                    <!-- LEFT SIDE -->
                    <div class="lg:col-span-2 space-y-7">

                        <!-- ACTIVITE RECENTE -->
                        <div class="bg-white p-6 rounded-2xl shadow">
                            <h2 class="font-semibold mb-6">Activité récente</h2>

                            <div class="space-y-4">
                                <div class="flex items-start gap-4">
                                    <div class="w-3 h-3 bg-red-500 rounded-full mt-2"></div>
                                    <div>
                                        <p class="font-medium">OYEKAN JOEL</p>
                                        <p class="text-sm text-gray-500">Pas de confirmation - PETROCI</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div class="w-3 h-3 bg-orange-400 rounded-full mt-2"></div>
                                    <div>
                                        <p class="font-medium">OKEDARA SARAH</p>
                                        <p class="text-sm text-gray-500">Retard prise de service - PETROCI</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div class="w-3 h-3 bg-orange-400 rounded-full mt-2"></div>
                                    <div>
                                        <p class="font-medium">ODEWABI JAMES</p>
                                        <p class="text-sm text-gray-500">Retard prise de service - PETROCI</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gerer les alertes -->
                        <div class="bg-white p-6 rounded-2xl shadow">
                            <div class="flex justify-between items-center">
                                <h2 class="font-semibold mb-4">Gérer les alertes</h2>
                                <a href="{{ route('alertes') }}" class="text-blue-500 hover:text-blue-700 bg-blue-100 px-3 py-1 rounded-lg mb-4">
                                    <button>Voir Détails</button>
                                </a>

                            </div>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center border p-3 rounded-xl">
                                    <span>#7 - OYEKAN JOEL</span>
                                    <button class="bg-green-500 text-white px-3 py-1 rounded-lg">Acquitter</button>
                                </div>

                                <div class="flex justify-between items-center border p-3 rounded-xl">
                                    <span>#6 - OKEDARA SARAH</span>
                                    <button class="bg-green-500 text-white px-3 py-1 rounded-lg">Acquitter</button>
                                </div>

                                <div class="flex justify-between items-center border p-3 rounded-xl">
                                    <span>#5 - ODEWABI JAMES</span>
                                    <button class="bg-green-500 text-white px-3 py-1 rounded-lg">Acquitter</button>
                                </div>
                            </div>
                        </div>

                                  <!-- TABLEAU DES DERNIERS POINTAGES -->
                        <div class="bg-white p-6 rounded-2xl shadow">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="font-semibold">Derniers pointages</h2>
                                <a href="{{ route('pointages') }}" class="text-blue-500 hover:text-blue-700 bg-blue-100 px-3 py-1 rounded-lg">
                                    <button>Historiques</button>
                                </a>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full table-auto">
                                    <thead>
                                        <tr class="bg-gray-200 text-left">
                                            <th class="px-2 py-1">Selfie</th>
                                            <th class="px-4 py-2">Agent</th>
                                             <th class="px-4 py-2">Site</th>
                                            <th class="px-4 py-2">Date et heure</th>
                                            <th class="px-4 py-2">Type</th>
                                            <th class="px-4 py-2">Geoloc</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-t">
                                            <td class="px-2 py-1">
                                                <img src="{{ asset('') }}" alt="Selfie" class="w-12 h-12 rounded-full object-cover">
                                            </td>
                                            <td class="px-2 py-1">OYEKAN JOEL</td>
                                            <td class="px-2 py-1">PETROCI</td>
                                            <td class="px-2 py-1">
                                                22/10/2025 - 08:00
                                            </td>
                                            <td class="px-2 py-1"><span class="text-white bg-gray-500 font-semibold rounded-lg text-xs px-2 py-1">prise de service</span></td>
                                            <td class="px-2 py-1">
                                                <span class="text-yellow-500 font-bold  text-xs px-2 py-1">Hors Zone</span>
                                                <p class="text-gray-500 font-semibold  text-xs px-2 py-1">(12346110 m)</p></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="border-t">
                                            <td class="px-2 py-1">
                                                <img src="{{ asset('') }}" alt="Selfie" class="w-12 h-12 rounded-full object-cover">
                                            </td>
                                            <td class="px-2 py-1">OKEDARA SARAH</td>
                                            <td class="px-2 py-1">PETROCI</td>
                                            <td class="px-2 py-1">22/10/2025 - 08:00</td>
                                            <td class="px-2 py-1"><span class="text-white bg-gray-500 font-semibold rounded-lg text-xs px-2 py-1">prise de service</span></td>
                                            <td class="px-2 py-1">
                                                <span class="text-yellow-500 font-bold  text-xs px-2 py-1">Hors Zone</span>
                                                <p class="text-gray-500 font-semibold  text-xs px-2 py-1">(12346110 m)</p></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="border-t">
                                            <td class="px-2 py-1">
                                                <img src="{{ asset('') }}" alt="Selfie" class="w-12 h-12 rounded-full object-cover">
                                            </td>
                                            <td class="px-2 py-1">ODEWABI JAMES</td>
                                            <td class="px-2 py-1">PETROCI</td>
                                            <td class="px-2 py-1">22/10/2025 - 08:00</td>
                                            <td class="px-2 py-1"><span class="text-white bg-gray-500 font-semibold rounded-lg text-xs px-2 py-1">prise de service</span></td>
                                            <td class="px-2 py-1">
                                                <span class="text-yellow-500 font-bold  text-xs px-2 py-1">Hors Zone</span>
                                                <p class="text-gray-500 font-semibold  text-xs px-2 py-1">(12346110 m)</p></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="border-t">
                                            <td class="px-2 py-1">
                                                <img src="{{ asset('') }}" alt="Selfie" class="w-12 h-12 rounded-full object-cover">
                                            </td>
                                            <td class="px-2 py-1">ODEWABI JAMES</td>
                                            <td class="px-2 py-1">PETROCI</td>
                                            <td class="px-2 py-1">22/10/2025 - 00:00</td>
                                            <td class="px-2 py-1"><span class="text-white bg-gray-500 font-semibold rounded-lg text-xs px-2 py-1">fin de service</span></td>
                                            <td class="px-2 py-1">
                                                <span class="text-yellow-500 font-bold  text-xs px-2 py-1">Hors Zone</span>
                                                <p class="text-gray-500 font-semibold  text-xs px-2 py-1">(12346110 m)</p></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="border-t">
                                            <td class="px-2 py-1">
                                                <img src="{{ asset('') }}" alt="Selfie" class="w-12 h-12 rounded-full object-cover">
                                            </td>
                                            <td class="px-2 py-1">OYEKAN JOEL</td>
                                            <td class="px-2 py-1">PETROCI</td>
                                            <td class="px-2 py-1">22/10/2025 - 00:00</td>
                                            <td class="px-2 py-1"><span class="text-white text-xs bg-gray-500 font-semibold rounded-lg px-2 py-1">presence(selfie horaire)</span></td>
                                            <td class="px-2 py-1">
                                                <span class="text-yellow-500 font-bold  text-xs px-2 py-1">Hors Zone</span>
                                                <p class="text-gray-500 font-semibold  text-xs px-2 py-1">(12346110 m)</p></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="border-t">
                                            <td class="px-2 py-1">
                                                <img src="{{ asset('') }}" alt="Selfie" class="w-12 h-12 rounded-full object-cover">
                                            </td>
                                            <td class="px-2 py-1">OYEKAN JOEL</td>
                                            <td class="px-2 py-1">PETROCI</td>
                                            <td class="px-2 py-1">22/10/2025 - 00:00</td>
                                            <td class="px-2 py-1"><span class="text-white bg-gray-500 font-semibold rounded-lg text-xs px-2 py-1">fin de service</span></td>
                                            <td class="px-2 py-1">
                                                <span class="text-yellow-500 font-bold  text-xs px-2 py-1">Hors Zone</span>
                                                <p class="text-gray-500 font-semibold  text-xs px-2 py-1">(12346110 m)</p></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="border-t">
                                            <td class="px-2 py-1">
                                                <img src="{{ asset('') }}" alt="Selfie" class="w-12 h-12 rounded-full object-cover">
                                            </td>
                                            <td class="px-2 py-1">OYEKAN JOEL</td>
                                            <td class="px-2 py-1">PETROCI</td>
                                            <td class="px-2 py-1">22/10/2025 - 00:00</td>
                                            <td class="px-2 py-1"><span class="text-white bg-gray-500 font-semibold rounded-lg text-xs px-2 py-1">fin de service</span></td>
                                            <td class="px-2 py-1">
                                                <span class="text-yellow-500 font-bold  text-xs px-2 py-1">Hors Zone</span>
                                                <p class="text-gray-500 font-semibold  text-xs px-2 py-1">(12346110 m)</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>

                    <!-- coté droit -->
                    <div class="space-y-4">

                        <!-- Stat rapide RESUME -->
                        <div class="bg-white p-6 rounded-2xl shadow">

                            <div class="space-y-1">

                                <div class="flex flex-col">
                                    <span>Sites actifs</span>

                                    <div class="flex items-center justify-between">

                                        <div class="flex  items-center gap-10 p-1">

                                            <i class="fas fa-map-marker-alt"></i>
                                            <span class="font-bold text-xl">1</span>

                                        </div>

                                        <a href="{{ route('sites.index') }}" class="text-blue-500 hover:text-blue-700 bg-blue-100 px-3 py-1 rounded-lg"><button>Gérer</button></a>
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <span>Vigiles</span>

                                    <div class="flex items-center justify-between">

                                        <div class="flex items-center gap-8 p-1">
                                            <i class="fas fa-user-shield"></i>
                                            <span class="font-bold text-xl">2</span>
                                        </div>

                                        <a href="{{ route('agents.index') }}" class="text-blue-500 hover:text-blue-700 bg-blue-100 px-3 py-1 rounded-lg">
                                            <button>Gérer</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- SECTION REPLACEMENT D'AGENT -->
                        <div class="bg-white p-6 rounded-2xl shadow">
                            <h2 class="font-semibold mb-4">Remplacement rapide</h2>

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

                                <!-- RAPPORTS RECENTS -->
                        <div class="bg-white p-6 rounded-2xl shadow">
                            <div class="flex justify-between items-center gap-4">
                                <h2 class="font-semibold mb-4">Rapports recents</h2>
                                <a href="{{ route('rapports.index') }}" class="text-blue-500 hover:text-blue-700 bg-blue-100 px-3 py-1 rounded-lg mb-4">
                                    <button>Voir Détails</button>
                                </a>
                            </div>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center border p-3 rounded-xl">
                                    <div>
                                        <p class="font-medium">22/10/2025</p>
                                        <p class="text-sm text-gray-500">PETROCI - OYEKAN JOEL(AG-001) </p>
                                    </div>
                                    <span class="text-white bg-yellow-500 font-bold rounded-lg  px-3 py-1  ">Retard</span>
                                </div>
                                <div class="flex justify-between items-center border p-3 rounded-xl">
                                    <div>
                                        <p class="font-medium">22/10/2025</p>
                                        <p class="text-sm text-gray-500">PETROCI - OKEDARA SARAH(AG-002) </p>
                                    </div>
                                    <span class="text-white bg-green-500 font-bold rounded-lg  px-2 py-1">Deposer</span>
                                </div>
                                <div class="flex justify-between items-center border p-3 rounded-xl">
                                    <div>
                                        <p class="font-medium">22/10/2025</p>
                                        <p class="text-sm text-gray-500">PETROCI - ODEWABI JAMES(AG-003) </p>
                                    </div>
                                    <span class="text-white bg-green-500 font-bold rounded-lg  px-2 py-1">Deposer</span>
                                </div>
                            </div>
                        </div>

                        <!-- AFFECTATIONS DU JOUR   -->
                        <div class="bg-white p-6 rounded-2xl shadow">
                           <div class="flex justify-between items-center gap-4">
                                <h2 class="font-semibold mb-4">Affectations du jour</h2>
                                <a href="{{ route('plannings') }}" class="text-blue-500 hover:text-blue-700 bg-blue-100 px-3 py-1 rounded-lg mb-4">
                                    <button>Voir Détails</button>
                                </a>
                            </div>

                            <div class="space-y-3">
                                <div class="flex justify-between items-center border p-3 rounded-xl">
                                    <div>
                                        <p class="font-medium text-sm">PETROCI - OYEKAN JOEL(AG-001) </p>
                                        <p class="text-sm text-gray-500">22/10/2025</p>
                                    </div>
                                    <span class="text-white bg-green-500 font-bold rounded-lg  px-2 py-1">Affecté</span>
                                </div>
                                <div class="flex justify-between items-center border p-3 rounded-xl">
                                    <div>
                                        <p class="font-medium text-sm">PETROCI - OKEDARA SARAH(AG-002) </p>
                                        <p class="text-sm text-gray-500">22/10/2025</p>
                                    </div>
                                    <span class="text-white bg-green-500 font-bold rounded-lg  px-2 py-1">Affecté</span>
                                </div>
                                <div class="flex justify-between items-center border p-3 rounded-xl">
                                    <div>
                                        <p class="font-medium text-sm">PETROCI - ODEWABI JAMES(AG-003) </p>
                                        <p class="text-sm text-gray-500">22/10/2025</p>
                                    </div>
                                    <span class="text-white bg-green-500 font-bold rounded-lg  px-2 py-1">Affecté</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
