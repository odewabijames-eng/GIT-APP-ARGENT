 <!-- Sidebar -->
    <div class="w-64 bg-slate-900 text-white flex flex-col justify-between h-screen">
        <div>
            <div class="p-5 text-xl font-bold border-b border-slate-700">
                🛡 Cobra Protection
            </div>

            <nav class="p-4 space-y-2">
                <ul>
                    <li>
                        <a href="{{ route('dashboard')}}" class="block p-3 hover:bg-slate-700 rounded-lg">
                            <i class="fas fa-home"></i>
                            Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('agents.index')}}" class="block p-3 hover:bg-slate-700 rounded-lg">
                            <i class="fas fa-user-shield"></i>
                            Agents
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('sites.index')}}" class="block p-3 hover:bg-slate-700 rounded-lg">
                            <i class="fas fa-map-marker-alt"></i>
                            Sites
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('plannings')}}" class="block p-3 hover:bg-slate-700 rounded-lg">
                            <i class="fas fa-user-tag"></i>
                            Affectations
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('alertes')}}" class="block p-3 hover:bg-slate-700 rounded-lg">
                            <i class="fas fa-bell"></i>
                            Alertes
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('rapports.index')}}" class="block p-3 hover:bg-slate-700 rounded-lg">
                            <i class="fas fa-file-alt"></i>
                            Rapports
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('pointages')}}" class="block p-3 hover:bg-slate-700 rounded-lg">
                            <i class="fas fa-user-check"></i>
                            Pointages
                        </a>
                    </li>

                    <li>
                        <a href="#" class="block p-3 hover:bg-slate-700 rounded-lg">
                            <i class="fas fa-mobile-alt"></i>
                            Push Mobile
                        </a>
                    </li>

                </ul>
            </nav>
        </div>

        <div class="p-4 border-t border-slate-700">
            <p class="text-sm">Admin</p>
            <button class="mt-2 w-full bg-red-500 p-2 rounded">
                <i class="fas fa-sign-out-alt"></i>
                Déconnexion
            </button>
        </div>
    </div>

