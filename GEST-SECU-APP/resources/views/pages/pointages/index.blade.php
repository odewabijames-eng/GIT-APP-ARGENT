@extends('layouts.app')

@section('title', 'Pointages')

@section('content')
            <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2 gap-4">
                    <div>
                        <h1 class="text-3xl font-extrabold text-gray-800">Pointages</h1>
                        <p class="text-gray-500">Gestion des pointages</p>
                    </div>
                    <button class="bg-slate-800 hover:bg-slate-600 text-white transition duration-200 font-bold py-2 px-4 rounded-lg">
                    Actualiser <i class="fas fa-sync-alt"></i>
                    </button>
                </div>

                        <!-- TABLEAU DES DERNIERS POINTAGES -->
                        <div class="bg-white p-6 rounded-2xl shadow">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="font-semibold">Derniers pointages</h2>
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
                                            <th class="px-4 py-2">Affectation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-t">
                                            <td class="px-2 py-1">
                                                <img src="{{ asset('') }}" alt="Selfie" class="w-12 h-12 rounded-full object-cover">
                                            </td>
                                            <td class="px-2 py-1">AG-001</td>
                                            <td class="px-2 py-1">PETROCI</td>
                                            <td class="px-2 py-1">
                                                22/10/2025 - 08:00
                                            </td>
                                            <td class="px-2 py-1"><span class="text-white bg-gray-500 font-semibold rounded-lg text-xs px-2 py-1">prise de service</span></td>
                                            <td class="px-2 py-1">
                                                <span class="text-yellow-500 font-bold  text-xs px-2 py-1">Hors Zone</span>
                                                <p class="text-gray-500 font-semibold  text-xs px-2 py-1">(12346110 m)</p></td>
                                            <td class="px-2 py-1">
                                                <span class="text-green-500 font-bold  text-xs px-2 py-1">Zone A</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="border-t">
                                            <td class="px-2 py-1">
                                                <img src="{{ asset('') }}" alt="Selfie" class="w-12 h-12 rounded-full object-cover">
                                            </td>
                                            <td class="px-2 py-1">AG-002</td>
                                            <td class="px-2 py-1">PETROCI</td>
                                            <td class="px-2 py-1">22/10/2025 - 08:00</td>
                                            <td class="px-2 py-1"><span class="text-white bg-gray-500 font-semibold rounded-lg text-xs px-2 py-1">prise de service</span></td>
                                            <td class="px-2 py-1">
                                                <span class="text-yellow-500 font-bold  text-xs px-2 py-1">Hors Zone</span>
                                                <p class="text-gray-500 font-semibold  text-xs px-2 py-1">(12346110 m)</p></td>
                                            <td class="px-2 py-1">
                                                <span class="text-green-500 font-bold  text-xs px-2 py-1">Zone B</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="border-t">
                                            <td class="px-2 py-1">
                                                <img src="{{ asset('') }}" alt="Selfie" class="w-12 h-12 rounded-full object-cover">
                                            </td>
                                            <td class="px-2 py-1">AG-003</td>
                                            <td class="px-2 py-1">PETROCI</td>
                                            <td class="px-2 py-1">22/10/2025 - 08:00</td>
                                            <td class="px-2 py-1"><span class="text-white bg-gray-500 font-semibold rounded-lg text-xs px-2 py-1">prise de service</span></td>
                                            <td class="px-2 py-1">
                                                <span class="text-yellow-500 font-bold  text-xs px-2 py-1">Hors Zone</span>
                                                <p class="text-gray-500 font-semibold  text-xs px-2 py-1">(12346110 m)</p></td>
                                            <td class="px-2 py-1">
                                                <span class="text-green-500 font-bold  text-xs px-2 py-1">Zone C</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="border-t">
                                            <td class="px-2 py-1">
                                                <img src="{{ asset('') }}" alt="Selfie" class="w-12 h-12 rounded-full object-cover">
                                            </td>
                                            <td class="px-2 py-1">AG-003</td>
                                            <td class="px-2 py-1">PETROCI</td>
                                            <td class="px-2 py-1">22/10/2025 - 00:00</td>
                                            <td class="px-2 py-1"><span class="text-white text-xs bg-gray-500 font-semibold rounded-lg px-2 py-1">presence(selfie horaire)</span></td>
                                            <td class="px-2 py-1">
                                                <span class="text-yellow-500 font-bold  text-xs px-2 py-1">Hors Zone</span>
                                                <p class="text-gray-500 font-semibold  text-xs px-2 py-1">(12346110 m)</p></td>
                                            <td class="px-2 py-1">
                                                <span class="text-green-500 font-bold  text-xs px-2 py-1">Zone C</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="border-t">
                                            <td class="px-2 py-1">
                                                <img src="{{ asset('') }}" alt="Selfie" class="w-12 h-12 rounded-full object-cover">
                                            </td>
                                            <td class="px-2 py-1">AG-001</td>
                                            <td class="px-2 py-1">PETROCI</td>
                                            <td class="px-2 py-1">22/10/2025 - 00:00</td>
                                            <td class="px-2 py-1"><span class="text-white bg-gray-500 font-semibold rounded-lg text-xs px-2 py-1">fin de service</span></td>
                                            <td class="px-2 py-1">
                                                <span class="text-yellow-500 font-bold  text-xs px-2 py-1">Hors Zone</span>
                                                <p class="text-gray-500 font-semibold  text-xs px-2 py-1">(12346110 m)</p></td>
                                            <td class="px-2 py-1">
                                                <span class="text-green-500 font-bold  text-xs px-2 py-1">Zone A</span>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr class="border-t">
                                            <td class="px-2 py-1">
                                                <img src="{{ asset('') }}" alt="Selfie" class="w-12 h-12 rounded-full object-cover">
                                            </td>
                                            <td class="px-2 py-1">AG-002</td>
                                            <td class="px-2 py-1">PETROCI</td>
                                            <td class="px-2 py-1">22/10/2025 - 00:00</td>
                                            <td class="px-2 py-1"><span class="text-white bg-gray-500 font-semibold rounded-lg text-xs px-2 py-1">fin de service</span></td>
                                            <td class="px-2 py-1">
                                                <span class="text-yellow-500 font-bold  text-xs px-2 py-1">Hors Zone</span>
                                                <p class="text-gray-500 font-semibold  text-xs px-2 py-1">(12346110 m)</p></td>
                                            <td class="px-2 py-1">
                                                <span class="text-green-500 font-bold  text-xs px-2 py-1">Zone B</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="border-t">
                                            <td class="px-2 py-1">
                                                <img src="{{ asset('') }}" alt="Selfie" class="w-12 h-12 rounded-full object-cover">
                                            </td>
                                            <td class="px-2 py-1">AG-003</td>
                                            <td class="px-2 py-1">PETROCI</td>
                                            <td class="px-2 py-1">22/10/2025 - 00:00</td>
                                            <td class="px-2 py-1"><span class="text-white bg-gray-500 font-semibold rounded-lg text-xs px-2 py-1">fin de service</span></td>
                                            <td class="px-2 py-1">
                                                <span class="text-yellow-500 font-bold  text-xs px-2 py-1">Hors Zone</span>
                                                <p class="text-gray-500 font-semibold  text-xs px-2 py-1">(12346110 m)</p></td>
                                            <td class="px-2 py-1">
                                                <span class="text-green-500 font-bold  text-xs px-2 py-1">Zone C</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
@endsection
