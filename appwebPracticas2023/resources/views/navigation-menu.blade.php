<nav x-data="{ open: false }" class=" dark:bg-gray-800 border-b  dark:border-gray-700"
    style="position: relative; background: url('{{ asset('images/Fondoprincipal.png') }}') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">

                    <!--Inicio Barraa leteral-->
                    <div class="sidebar">
                        <aside style="background-color: rgba(0, 0, 0, 0.39);"
                            class="bg-white overflow-hidden shadow-sm -translate-x-80 fixed inset-0 z-50 my-4 ml-4 h-[calc(100vh-32px)]
                         w-72 rounded-xl transition-transform duration-300 xl:translate-x-0 border border-blue-gray-100">
                            <div class="relative" style="margin-top: 37px">
                                <a class="py-6 px-8 text-center" href="/">
                                    <img class="hidden w-auto lg:block"
                                        style="width: 150px; height: 50px; margin-left: 60px;" src="../images/logo2.png"
                                        alt="Your Company">
                                </a>
                                <button
                                    class="align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none
                            disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-white hover:bg-white/10 active:bg-white/30
                            absolute right-0 top-0 grid rounded-br-none rounded-tl-none xl:hidden"
                                    type="button"><span
                                        class="absolute top-1/2 left-1/2 transform
                            -translate-y-1/2 -translate-x-1/2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2.5" stroke="currentColor" aria-hidden="true"
                                            class="h-5 w-5 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg></span></button>
                            </div>
                            <div class="m-4">



                                @can('Ver dashboard')
                                    <a aria-current="page" class="active" href="{{ route('dashboard') }}"><button
                                            class="align-middle select-none font-sans font-bold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white bg-transparent bg-opacity-50 shadow-md shadow-orange-500/20 hover:bg-yellow-500 hover:text-black active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
                                            type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                                <path
                                                    d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z">
                                                </path>
                                                <path
                                                    d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z">
                                                </path>
                                            </svg>
                                            <p
                                                class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                                dashboard</p>
                                        </button>
                                    </a>
                                    <a class="" href="{{ route('admin.users') }}"><button
                                            class="align-middle select-none font-sans font-bold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white bg-transparent bg-opacity-50 shadow-md shadow-orange-500/20 hover:bg-yellow-500 hover:text-black active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
                                            type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                                <path fill-rule="evenodd"
                                                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <p
                                                class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                                Usuarios</p>
                                        </button></a>
                                    <a class="" href="{{ route('admin.rols') }}"><button
                                            class="align-middle select-none font-sans font-bold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white bg-transparent bg-opacity-50 shadow-md shadow-orange-500/20 hover:bg-yellow-500 hover:text-black active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
                                            type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                                <path fill-rule="evenodd"
                                                    d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <p
                                                class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                                Roles</p>
                                        </button></a>
                                    <a class="" href="{{ route('admin.sedes') }}"><button
                                            class="align-middle select-none font-sans font-bold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white bg-transparent bg-opacity-50 shadow-md shadow-orange-500/20 hover:bg-yellow-500 hover:text-black active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
                                            type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                                <path fill-rule="evenodd"
                                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 01.67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 11-.671-1.34l.041-.022zM12 9a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <p
                                                class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                                Sedes</p>
                                        </button>
                                    </a>
                                @endcan

                                @can('Gestionar Induccion')
                                    <a class="" href="{{ route('coordinador.Ginduccions') }}"
                                        :active="request() - > routeIs('coordinador.Ginduccions')"><x-button icon="user-circle" style="border: transparent"
                                            class="align-middle select-none font-sans font-bold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white bg-transparent bg-opacity-50 shadow-md shadow-orange-500/20 hover:bg-yellow-500 hover:text-black active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
                                            type="button">
                                            <p
                                                class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                                Gestionar Induccion</p>
                                        </x-button>
                                    </a>
                                @endcan

                                @can('Gestionar Sedes')
                                    <a class="" href="{{ route('coordinador.Gsedes') }}"
                                        :active="request() - > routeIs('coordinador.Gsedes')"><x-button style="border: transparent; " icon="book-open"
                                            class="align-middle select-none font-sans font-bold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white bg-transparent bg-opacity-50 shadow-md shadow-orange-500/20 hover:bg-yellow-500 hover:text-black active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
                                            type="button">
                                            <p
                                                class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                                Gestionar Sedes</p>
                                        </x-button>
                                    </a>
                                @endcan



                                @can('Inscribirse Induccion')
                                    <a class="" href="{{ route('student.induccions') }}"
                                        :active="request() - > routeIs('student.induccions')"><x-button icon="calendar" style="border: transparent"
                                            class="align-middle select-none font-sans font-bold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white bg-transparent bg-opacity-50 shadow-md shadow-orange-500/20 hover:bg-yellow-500 hover:text-black active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
                                            type="button">
                                            <p
                                                class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                                Inducciones </p>
                                        </x-button>
                                    </a>
                                @endcan

                                @can('Subir Sedes')
                                    <a class="" href="{{ route('student.subirsede') }}"
                                        :active="request() - > routeIs('student.subirsede')"><x-button icon="folder-open" style="border: transparent"
                                            class="align-middle select-none font-sans font-bold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white bg-transparent bg-opacity-50 shadow-md shadow-orange-500/20 hover:bg-yellow-500 hover:text-black active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
                                            type="button">
                                            <p
                                                class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                                Carta de Presentacion</p>
                                        </x-button>
                                    </a>
                                @endcan

                                @can('Subir Culminacion')
                                    <a class="" href="{{ route('student.culminacion') }}"
                                        :active="request() - > routeIs('student.culminacion')"><x-button icon="folder-open" style="border: transparent"
                                            class="align-middle select-none font-sans font-bold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white bg-transparent bg-opacity-50 shadow-md shadow-orange-500/20 hover:bg-yellow-500 hover:text-black active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
                                            type="button">
                                            <p
                                                class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                                Culminaciones</p>
                                        </x-button>
                                    </a>
                                @endcan


                                <!--Cerrar sesion-->
                                <div class="cerrar-sesion" style="margin-top: 60px;">
                                    <div class=" sm:flex sm:items-center sm:ml-6 ">
                                        <!-- Teams Dropdown -->
                                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                            <div class="mr-5 relative z-50">
                                                <x-dropdown align="left" width="15">
                                                    <x-slot name="content">
                                                        <div class="w-60">
                                                            <!-- Team Management -->
                                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                                {{ __('Manage Team') }}
                                                            </div>

                                                            <!-- Team Settings -->
                                                            <x-dropdown-link
                                                                href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                                                {{ __('Team Settings') }}
                                                            </x-dropdown-link>

                                                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                                                <x-dropdown-link href="{{ route('teams.create') }}">
                                                                    {{ __('Create New Team') }}
                                                                </x-dropdown-link>
                                                            @endcan

                                                            <!-- Team Switcher -->
                                                            @if (Auth::user()->allTeams()->count() > 1)
                                                                <div
                                                                    class="border-t border-gray-200 dark:border-gray-600">
                                                                </div>

                                                                <div class="block px-4 py-2 text-xs text-gray-400">
                                                                    {{ __('Switch Teams') }}
                                                                </div>

                                                                @foreach (Auth::user()->allTeams() as $team)
                                                                    <x-switchable-team :team="$team" />
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </x-slot>
                                                </x-dropdown>
                                            </div>
                                        @endif

                                        <!-- Settings Dropdown -->
                                        <div class="mr-5 relative">
                                            <x-dropdown align="left" width="15">
                                                <x-slot name="trigger">
                                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                        <button
                                                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                            <img class="h-8 w-8 rounded-full object-cover"
                                                                src="{{ Auth::user()->profile_photo_url }}"
                                                                alt="{{ Auth::user()->name }}" />
                                                        </button>
                                                    @else
                                                        <span class="inline-flex rounded-md">
                                                            <button type="button"
                                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-black bg-opacity-50 hover:bg-opacity-70 focus:outline-none focus:bg-opacity-70 active:bg-opacity-70 transition ease-in-out duration-150">
                                                                {{ Auth::user()->name }}

                                                                <svg class="ml-2 -mr-0.5 h-4 w-4"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                                </svg>
                                                            </button>
                                                        </span>
                                                    @endif
                                                </x-slot>

                                                <div class="pt-4 pb-1 border-t bg-transparet bg-opacity-50 text-black">
                                                    <div class="flex items-center px-4">
                                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                            <div class="shrink-0 mr-3">
                                                                <img class="h-10 w-10 rounded-full object-cover"
                                                                    src="{{ Auth::user()->profile_photo_url }}"
                                                                    alt="{{ Auth::user()->name }}" />
                                                            </div>
                                                        @endif

                                                        <div>
                                                            <div class="font-medium text-base">
                                                                {{ Auth::user()->name }}</div>
                                                            <div class="font-medium text-sm">
                                                                {{ Auth::user()->email }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-3 space-y-1">
                                                        <!-- Account Management -->
                                                        <x-responsive-nav-link href="{{ route('profile.show') }}"
                                                            :active="request()->routeIs('profile.show')">
                                                            {{ __('Profile') }}
                                                        </x-responsive-nav-link>

                                                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                                            <x-responsive-nav-link
                                                                href="{{ route('api-tokens.index') }}"
                                                                :active="request()->routeIs('api-tokens.index')">
                                                                {{ __('API Tokens') }}
                                                            </x-responsive-nav-link>
                                                        @endif

                                                        <!-- Authentication -->
                                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                                            @csrf

                                                            <x-responsive-nav-link href="{{ route('logout') }}"
                                                                @click.prevent="$root.submit();">
                                                                {{ __('Log Out') }}
                                                            </x-responsive-nav-link>
                                                        </form>

                                                        <!-- Team Management -->
                                                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                                            <div class="border-t border-gray-200 dark:border-gray-600">
                                                            </div>

                                                            <div class="block px-4 py-2 text-xs">
                                                                {{ __('Manage Team') }}
                                                            </div>

                                                            <!-- Team Settings -->
                                                            <x-responsive-nav-link
                                                                href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                                                                :active="request()->routeIs('teams.show')">
                                                                {{ __('Team Settings') }}
                                                            </x-responsive-nav-link>

                                                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                                                <x-responsive-nav-link href="{{ route('teams.create') }}"
                                                                    :active="request()->routeIs('teams.create')">
                                                                    {{ __('Create New Team') }}
                                                                </x-responsive-nav-link>
                                                            @endcan

                                                            <!-- Team Switcher -->
                                                            @if (Auth::user()->allTeams()->count() > 1)
                                                                <div
                                                                    class="border-t border-gray-200 dark:border-gray-600">
                                                                </div>

                                                                <div class="block px-4 py-2 text-xs">
                                                                    {{ __('Switch Teams') }}
                                                                </div>

                                                                @foreach (Auth::user()->allTeams() as $team)
                                                                    <x-switchable-team :team="$team"
                                                                        component="responsive-nav-link" />
                                                                @endforeach
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>


                                            </x-dropdown>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </aside>
                    </div>
                </div>




                <!-- Responsive Navigation Menu -->
                <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-responsive-nav-link>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                        <div class="flex items-center px-4">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <div class="shrink-0 mr-3">
                                    <img class="h-10 w-10 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}"
                                        alt="{{ Auth::user()->name }}" />
                                </div>
                            @endif

                            <div>
                                <div class="font-medium text-base text-gray-800 dark:text-gray-200">
                                    {{ Auth::user()->name }}
                                </div>
                                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <!-- Account Management -->
                            <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                {{ __('Profile') }}
                            </x-responsive-nav-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                                    {{ __('API Tokens') }}
                                </x-responsive-nav-link>
                            @endif

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>

                            <!-- Team Management -->
                            @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                <div class="border-t border-gray-200 dark:border-gray-600"></div>

                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Team') }}
                                </div>

                                <!-- Team Settings -->
                                <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                                    :active="request()->routeIs('teams.show')">
                                    {{ __('Team Settings') }}
                                </x-responsive-nav-link>

                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                    <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                        {{ __('Create New Team') }}
                                    </x-responsive-nav-link>
                                @endcan

                                <!-- Team Switcher -->
                                @if (Auth::user()->allTeams()->count() > 1)
                                    <div class="border-t border-gray-200 dark:border-gray-600"></div>

                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-switchable-team :team="$team" component="responsive-nav-link" />
                                    @endforeach
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .icon-container {
                    margin-left: 870px;
                }

                .container {
                    display: flex;
                }




                .flex {
                    display: flex;
                }

                .hidden {
                    display: none;
                }









                .\!h-5 {
                    height: 1.25rem !important;
                }

                .h-0 {
                    height: 0px;
                }

                .h-0\.5 {
                    height: 0.125rem;
                }

                .h-1 {
                    height: 0.25rem;
                }

                .h-1\.5 {
                    height: 0.375rem;
                }

                .h-10 {
                    height: 2.5rem;
                }

                .h-11 {
                    height: 2.75rem;
                }

                .h-12 {
                    height: 3rem;
                }

                .h-2 {
                    height: 0.5rem;
                }

                .h-2\.5 {
                    height: 0.625rem;
                }

                .h-3 {
                    height: 0.75rem;
                }

                .h-3\.5 {
                    height: 0.875rem;
                }

                .h-4 {
                    height: 1rem;
                }

                .h-5 {
                    height: 1.25rem;
                }

                .h-6 {
                    height: 1.5rem;
                }

                .h-64 {
                    height: 16rem;
                }

                .h-7 {
                    height: 1.75rem;
                }

                .h-72 {
                    height: 18rem;
                }

                .h-8 {
                    height: 2rem;
                }

                .h-9 {
                    height: 2.25rem;
                }

                .h-\[110px\] {
                    height: 110px;
                }

                .h-\[18px\] {
                    height: 18px;
                }

                .h-\[58px\] {
                    height: 58px;
                }

                .h-\[74px\] {
                    height: 74px;
                }

                .h-\[calc\(100vh-32px\)\] {
                    height: calc(100vh - 32px);
                }

                .h-full {
                    height: 100%;
                }

                .h-max {
                    height: -moz-max-content;
                    height: max-content;
                }

                .h-screen {
                    height: 100vh;
                }

                .max-h-96 {
                    max-height: 24rem;
                }

                .max-h-\[100vh\] {
                    max-height: 100vh;
                }

                .max-h-\[32px\] {
                    max-height: 32px;
                }

                .max-h-\[40px\] {
                    max-height: 40px;
                }

                .max-h-\[48px\] {
                    max-height: 48px;
                }

                .min-h-\[100px\] {
                    min-height: 100px;
                }

                .min-h-\[100vh\] {
                    min-height: 100vh;
                }

                .min-h-\[12px\] {
                    min-height: 12px;
                }

                .min-h-\[24px\] {
                    min-height: 24px;
                }

                .min-h-\[48px\] {
                    min-height: 48px;
                }

                .min-h-screen {
                    min-height: 100vh;
                }

                .\!w-5 {
                    width: 1.25rem !important;
                }

                .w-0 {
                    width: 0px;
                }

                .w-0\.5 {
                    width: 0.125rem;
                }

                .w-1\/3 {
                    width: 33.333333%;
                }

                .w-1\/4 {
                    width: 25%;
                }

                .w-10 {
                    width: 2.5rem;
                }

                .w-10\/12 {
                    width: 83.333333%;
                }

                .w-12 {
                    width: 3rem;
                }

                .w-2\/5 {
                    width: 40%;
                }

                .w-3 {
                    width: 0.75rem;
                }

                .w-3\.5 {
                    width: 0.875rem;
                }

                .w-3\/4 {
                    width: 75%;
                }

                .w-3\/5 {
                    width: 60%;
                }

                .w-4 {
                    width: 1rem;
                }

                .w-5 {
                    width: 1.25rem;
                }

                .w-6 {
                    width: 1.5rem;
                }

                .w-7 {
                    width: 1.75rem;
                }

                .w-72 {
                    width: 18rem;
                }

                .w-8 {
                    width: 2rem;
                }

                .w-80 {
                    width: 20rem;
                }

                .w-9 {
                    width: 2.25rem;
                }

                .w-96 {
                    width: 24rem;
                }

                .w-\[110px\] {
                    width: 110px;
                }

                .w-\[18px\] {
                    width: 18px;
                }

                .w-\[58px\] {
                    width: 58px;
                }

                .w-\[74px\] {
                    width: 74px;
                }

                .w-fit {
                    width: -moz-fit-content;
                    width: fit-content;
                }

                .w-full {
                    width: 100%;
                }

                .w-max {
                    width: -moz-max-content;
                    width: max-content;
                }

                .w-screen {
                    width: 100vw;
                }

                .min-w-\[100vw\] {
                    min-width: 100vw;
                }

                .min-w-\[12px\] {
                    min-width: 12px;
                }

                .min-w-\[180px\] {
                    min-width: 180px;
                }

                .min-w-\[200px\] {
                    min-width: 200px;
                }

                .min-w-\[240px\] {
                    min-width: 240px;
                }

                .min-w-\[24px\] {
                    min-width: 24px;
                }

                .min-w-\[48px\] {
                    min-width: 48px;
                }

                .min-w-\[640px\] {
                    min-width: 640px;
                }

                .min-w-\[80\%\] {
                    min-width: 80%;
                }

                .min-w-\[90\%\] {
                    min-width: 90%;
                }

                .min-w-\[95\%\] {
                    min-width: 95%;
                }

                .max-w-\[100vw\] {
                    max-width: 100vw;
                }

                .max-w-\[32px\] {
                    max-width: 32px;
                }

                .max-w-\[40px\] {
                    max-width: 40px;
                }

                .max-w-\[48px\] {
                    max-width: 48px;
                }

                .max-w-\[80\%\] {
                    max-width: 80%;
                }

                .max-w-\[90\%\] {
                    max-width: 90%;
                }

                .max-w-\[95\%\] {
                    max-width: 95%;
                }

                .max-w-full {
                    max-width: 100%;
                }

                .max-w-screen-2xl {
                    max-width: 1320px;
                }

                .max-w-screen-lg {
                    max-width: 960px;
                }

                .flex-none {
                    flex: none;
                }

                .flex-shrink-0 {
                    flex-shrink: 0;
                }

                .shrink {
                    flex-shrink: 1;
                }

                .shrink-0 {
                    flex-shrink: 0;
                }

                .basis-full {
                    flex-basis: 100%;
                }

                .table-auto {
                    table-layout: auto;
                }

                .-translate-x-1\/2 {
                    --tw-translate-x: -50%;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .-translate-x-2\/4 {
                    --tw-translate-x: -50%;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .-translate-x-80 {
                    --tw-translate-x: -20rem;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .-translate-y-1\/2 {
                    --tw-translate-y: -50%;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .-translate-y-1\/4 {
                    --tw-translate-y: -25%;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .-translate-y-2\/4 {
                    --tw-translate-y: -50%;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .translate-x-0 {
                    --tw-translate-x: 0px;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .translate-x-2\/4 {
                    --tw-translate-x: 50%;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .translate-x-96 {
                    --tw-translate-x: 24rem;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .translate-y-2\/4 {
                    --tw-translate-y: 50%;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .rotate-0 {
                    --tw-rotate: 0deg;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .rotate-180 {
                    --tw-rotate: 180deg;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .scale-100 {
                    --tw-scale-x: 1;
                    --tw-scale-y: 1;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .scale-x-0 {
                    --tw-scale-x: 0;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .scale-x-100 {
                    --tw-scale-x: 1;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .transform {
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                @keyframes spin {

                    to {
                        transform: rotate(360deg);
                    }
                }

                .animate-spin {
                    animation: spin 1s linear infinite;
                }

                .cursor-not-allowed {
                    cursor: not-allowed;
                }

                .cursor-pointer {
                    cursor: pointer;
                }

                .select-none {
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    user-select: none;
                }

                .\!resize-none {
                    resize: none !important;
                }

                .resize-none {
                    resize: none;
                }

                .resize-y {
                    resize: vertical;
                }

                .\!resize {
                    resize: both !important;
                }

                .resize {
                    resize: both;
                }

                .appearance-none {
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    appearance: none;
                }

                .grid-cols-1 {
                    grid-template-columns: repeat(1, minmax(0, 1fr));
                }

                .flex-row {
                    flex-direction: row;
                }

                .flex-col {
                    flex-direction: column;
                }

                .flex-col-reverse {
                    flex-direction: column-reverse;
                }

                .flex-wrap {
                    flex-wrap: wrap;
                }

                .place-items-center {
                    place-items: center;
                }

                .items-start {
                    align-items: flex-start;
                }

                .items-center {
                    align-items: center;
                }

                .justify-start {
                    justify-content: flex-start;
                }

                .justify-end {
                    justify-content: flex-end;
                }

                .justify-center {
                    justify-content: center;
                }

                .justify-between {
                    justify-content: space-between;
                }

                .gap-1 {
                    gap: 0.25rem;
                }

                .gap-12 {
                    gap: 3rem;
                }

                .gap-2 {
                    gap: 0.5rem;
                }

                .gap-3 {
                    gap: 0.75rem;
                }

                .gap-4 {
                    gap: 1rem;
                }

                .gap-6 {
                    gap: 1.5rem;
                }

                .gap-8 {
                    gap: 2rem;
                }

                .gap-x-6 {
                    -moz-column-gap: 1.5rem;
                    column-gap: 1.5rem;
                }

                .gap-y-10 {
                    row-gap: 2.5rem;
                }

                .gap-y-12 {
                    row-gap: 3rem;
                }

                .space-y-4> :not([hidden])~ :not([hidden]) {
                    --tw-space-y-reverse: 0;
                    margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
                    margin-bottom: calc(1rem * var(--tw-space-y-reverse));
                }

                .divide-x> :not([hidden])~ :not([hidden]) {
                    --tw-divide-x-reverse: 0;
                    border-right-width: calc(1px * var(--tw-divide-x-reverse));
                    border-left-width: calc(1px * calc(1 - var(--tw-divide-x-reverse)));
                }

                .divide-amber-600> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(255 179 0 / var(--tw-divide-opacity));
                }

                .divide-blue-600> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(30 136 229 / var(--tw-divide-opacity));
                }

                .divide-blue-gray-50> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(236 239 241 / var(--tw-divide-opacity));
                }

                .divide-blue-gray-600> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(84 110 122 / var(--tw-divide-opacity));
                }

                .divide-brown-600> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(109 76 65 / var(--tw-divide-opacity));
                }

                .divide-cyan-600> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(0 172 193 / var(--tw-divide-opacity));
                }

                .divide-deep-orange-600> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(244 81 30 / var(--tw-divide-opacity));
                }

                .divide-deep-purple-600> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(94 53 177 / var(--tw-divide-opacity));
                }

                .divide-gray-800> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(66 66 66 / var(--tw-divide-opacity));
                }

                .divide-green-600> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(67 160 71 / var(--tw-divide-opacity));
                }

                .divide-indigo-600> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(57 73 171 / var(--tw-divide-opacity));
                }

                .divide-light-blue-600> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(3 155 229 / var(--tw-divide-opacity));
                }

                .divide-light-green-600> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(124 179 66 / var(--tw-divide-opacity));
                }

                .divide-lime-600> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(192 202 51 / var(--tw-divide-opacity));
                }

                .divide-orange-600> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(251 140 0 / var(--tw-divide-opacity));
                }

                .divide-pink-600> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(216 27 96 / var(--tw-divide-opacity));
                }

                .divide-purple-600> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(142 36 170 / var(--tw-divide-opacity));
                }

                .divide-red-600> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(229 57 53 / var(--tw-divide-opacity));
                }

                .divide-teal-600> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(0 137 123 / var(--tw-divide-opacity));
                }

                .divide-yellow-600> :not([hidden])~ :not([hidden]) {
                    --tw-divide-opacity: 1;
                    border-color: rgb(253 216 53 / var(--tw-divide-opacity));
                }

                .justify-self-end {
                    justify-self: end;
                }

                .overflow-auto {
                    overflow: auto;
                }

                .overflow-hidden {
                    overflow: hidden;
                }

                .\!overflow-visible {
                    overflow: visible !important;
                }

                .overflow-x-hidden {
                    overflow-x: hidden;
                }

                .overflow-x-scroll {
                    overflow-x: scroll;
                }

                .truncate {
                    overflow: hidden;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                }

                .whitespace-normal {
                    white-space: normal;
                }

                .whitespace-nowrap {
                    white-space: nowrap;
                }

                .break-words {
                    overflow-wrap: break-word;
                }

                .break-all {
                    word-break: break-all;
                }

                .\!rounded-full {
                    border-radius: 9999px !important;
                }

                .\!rounded-none {
                    border-radius: 0px !important;
                }

                .rounded {
                    border-radius: 0.25rem;
                }

                .rounded-2xl {
                    border-radius: 1rem;
                }

                .rounded-3xl {
                    border-radius: 1.5rem;
                }

                .rounded-\[7px\] {
                    border-radius: 7px;
                }

                .rounded-full {
                    border-radius: 9999px;
                }

                .rounded-lg {
                    border-radius: 0.5rem;
                }

                .rounded-md {
                    border-radius: 0.375rem;
                }

                .rounded-none {
                    border-radius: 0px;
                }

                .rounded-xl {
                    border-radius: 0.75rem;
                }

                .rounded-l-full {
                    border-top-left-radius: 9999px;
                    border-bottom-left-radius: 9999px;
                }

                .rounded-l-none {
                    border-top-left-radius: 0px;
                    border-bottom-left-radius: 0px;
                }

                .rounded-r-none {
                    border-top-right-radius: 0px;
                    border-bottom-right-radius: 0px;
                }

                .rounded-br-none {
                    border-bottom-right-radius: 0px;
                }

                .rounded-tl-none {
                    border-top-left-radius: 0px;
                }

                .border {
                    border-width: 1px;
                }

                .border-0 {
                    border-width: 0px;
                }

                .border-2 {
                    border-width: 2px;
                }

                .border-b {
                    border-bottom-width: 1px;
                }

                .border-l-2 {
                    border-left-width: 2px;
                }

                .border-r-0 {
                    border-right-width: 0px;
                }

                .border-r-2 {
                    border-right-width: 2px;
                }

                .border-t {
                    border-top-width: 1px;
                }

                .border-t-2 {
                    border-top-width: 2px;
                }

                .border-amber-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(255 193 7 / var(--tw-border-opacity));
                }

                .border-black {
                    --tw-border-opacity: 1;
                    border-color: rgb(0 0 0 / var(--tw-border-opacity));
                }

                .border-blue-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(33 150 243 / var(--tw-border-opacity));
                }

                .border-blue-gray-100 {
                    --tw-border-opacity: 1;
                    border-color: rgb(207 216 220 / var(--tw-border-opacity));
                }

                .border-blue-gray-200 {
                    --tw-border-opacity: 1;
                    border-color: rgb(176 190 197 / var(--tw-border-opacity));
                }

                .border-blue-gray-50 {
                    --tw-border-opacity: 1;
                    border-color: rgb(236 239 241 / var(--tw-border-opacity));
                }

                .border-blue-gray-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(96 125 139 / var(--tw-border-opacity));
                }

                .border-brown-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(121 85 72 / var(--tw-border-opacity));
                }

                .border-cyan-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(0 188 212 / var(--tw-border-opacity));
                }

                .border-deep-orange-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(255 87 34 / var(--tw-border-opacity));
                }

                .border-deep-purple-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(103 58 183 / var(--tw-border-opacity));
                }

                .border-gray-200 {
                    --tw-border-opacity: 1;
                    border-color: rgb(238 238 238 / var(--tw-border-opacity));
                }

                .border-gray-900 {
                    --tw-border-opacity: 1;
                    border-color: rgb(33 33 33 / var(--tw-border-opacity));
                }

                .border-green-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(76 175 80 / var(--tw-border-opacity));
                }

                .border-indigo-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(63 81 181 / var(--tw-border-opacity));
                }

                .border-light-blue-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(3 169 244 / var(--tw-border-opacity));
                }

                .border-light-green-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(139 195 74 / var(--tw-border-opacity));
                }

                .border-lime-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(205 220 57 / var(--tw-border-opacity));
                }

                .border-orange-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(255 152 0 / var(--tw-border-opacity));
                }

                .border-pink-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(233 30 99 / var(--tw-border-opacity));
                }

                .border-purple-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(156 39 176 / var(--tw-border-opacity));
                }

                .border-red-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(244 67 54 / var(--tw-border-opacity));
                }

                .border-teal-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(0 150 136 / var(--tw-border-opacity));
                }

                .border-transparent {
                    border-color: transparent;
                }

                .border-white {
                    --tw-border-opacity: 1;
                    border-color: rgb(255 255 255 / var(--tw-border-opacity));
                }

                .border-white\/80 {
                    border-color: rgb(255 255 255 / 0.8);
                }

                .border-yellow-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(255 235 59 / var(--tw-border-opacity));
                }

                .\!border-t-blue-gray-200 {
                    --tw-border-opacity: 1 !important;
                    border-top-color: rgb(176 190 197 / var(--tw-border-opacity)) !important;
                }

                .\!border-t-transparent {
                    border-top-color: transparent !important;
                }

                .border-b-blue-gray-100 {
                    --tw-border-opacity: 1;
                    border-bottom-color: rgb(207 216 220 / var(--tw-border-opacity));
                }

                .border-l-transparent {
                    border-left-color: transparent;
                }

                .border-r-transparent {
                    border-right-color: transparent;
                }

                .border-t-blue-gray-100 {
                    --tw-border-opacity: 1;
                    border-top-color: rgb(207 216 220 / var(--tw-border-opacity));
                }

                .border-t-transparent {
                    border-top-color: transparent;
                }

                .bg-amber-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 193 7 / var(--tw-bg-opacity));
                }

                .bg-amber-500\/10 {
                    background-color: rgb(255 193 7 / 0.1);
                }

                .bg-amber-500\/20 {
                    background-color: rgb(255 193 7 / 0.2);
                }

                .bg-black {
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 0 0 / var(--tw-bg-opacity));
                }

                .bg-blue-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(33 150 243 / var(--tw-bg-opacity));
                }

                .bg-blue-500\/10 {
                    background-color: rgb(33 150 243 / 0.1);
                }

                .bg-blue-500\/20 {
                    background-color: rgb(33 150 243 / 0.2);
                }

                .bg-blue-gray-100 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(207 216 220 / var(--tw-bg-opacity));
                }

                .bg-blue-gray-50 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(236 239 241 / var(--tw-bg-opacity));
                }

                .bg-blue-gray-50\/50 {
                    background-color: rgb(236 239 241 / 0.5);
                }

                .bg-blue-gray-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(96 125 139 / var(--tw-bg-opacity));
                }

                .bg-blue-gray-500\/10 {
                    background-color: rgb(96 125 139 / 0.1);
                }

                .bg-blue-gray-500\/20 {
                    background-color: rgb(96 125 139 / 0.2);
                }

                .bg-blue-gray-900 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(38 50 56 / var(--tw-bg-opacity));
                }

                .bg-brown-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(121 85 72 / var(--tw-bg-opacity));
                }

                .bg-brown-500\/10 {
                    background-color: rgb(121 85 72 / 0.1);
                }

                .bg-brown-500\/20 {
                    background-color: rgb(121 85 72 / 0.2);
                }

                .bg-current {
                    background-color: currentColor;
                }

                .bg-cyan-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 188 212 / var(--tw-bg-opacity));
                }

                .bg-cyan-500\/10 {
                    background-color: rgb(0 188 212 / 0.1);
                }

                .bg-cyan-500\/20 {
                    background-color: rgb(0 188 212 / 0.2);
                }

                .bg-deep-orange-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 87 34 / var(--tw-bg-opacity));
                }

                .bg-deep-orange-500\/10 {
                    background-color: rgb(255 87 34 / 0.1);
                }

                .bg-deep-orange-500\/20 {
                    background-color: rgb(255 87 34 / 0.2);
                }

                .bg-deep-purple-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(103 58 183 / var(--tw-bg-opacity));
                }

                .bg-deep-purple-500\/10 {
                    background-color: rgb(103 58 183 / 0.1);
                }

                .bg-deep-purple-500\/20 {
                    background-color: rgb(103 58 183 / 0.2);
                }

                .bg-gray-300 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(224 224 224 / var(--tw-bg-opacity));
                }

                .bg-gray-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(158 158 158 / var(--tw-bg-opacity));
                }

                .bg-gray-900 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(33 33 33 / var(--tw-bg-opacity));
                }

                .bg-gray-900\/10 {
                    background-color: rgb(33 33 33 / 0.1);
                }

                .bg-gray-900\/75 {
                    background-color: rgb(33 33 33 / 0.75);
                }

                .bg-green-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(76 175 80 / var(--tw-bg-opacity));
                }

                .bg-green-500\/10 {
                    background-color: rgb(76 175 80 / 0.1);
                }

                .bg-green-500\/20 {
                    background-color: rgb(76 175 80 / 0.2);
                }

                .bg-indigo-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(63 81 181 / var(--tw-bg-opacity));
                }

                .bg-indigo-500\/10 {
                    background-color: rgb(63 81 181 / 0.1);
                }

                .bg-indigo-500\/20 {
                    background-color: rgb(63 81 181 / 0.2);
                }

                .bg-light-blue-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(3 169 244 / var(--tw-bg-opacity));
                }

                .bg-light-blue-500\/10 {
                    background-color: rgb(3 169 244 / 0.1);
                }

                .bg-light-blue-500\/20 {
                    background-color: rgb(3 169 244 / 0.2);
                }

                .bg-light-green-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(139 195 74 / var(--tw-bg-opacity));
                }

                .bg-light-green-500\/10 {
                    background-color: rgb(139 195 74 / 0.1);
                }

                .bg-light-green-500\/20 {
                    background-color: rgb(139 195 74 / 0.2);
                }

                .bg-lime-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(205 220 57 / var(--tw-bg-opacity));
                }

                .bg-lime-500\/10 {
                    background-color: rgb(205 220 57 / 0.1);
                }

                .bg-lime-500\/20 {
                    background-color: rgb(205 220 57 / 0.2);
                }

                .bg-orange-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 152 0 / var(--tw-bg-opacity));
                }

                .bg-orange-500\/10 {
                    background-color: rgb(255 152 0 / 0.1);
                }

                .bg-orange-500\/20 {
                    background-color: rgb(255 152 0 / 0.2);
                }

                .bg-pink-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(233 30 99 / var(--tw-bg-opacity));
                }

                .bg-pink-500\/10 {
                    background-color: rgb(233 30 99 / 0.1);
                }

                .bg-pink-500\/20 {
                    background-color: rgb(233 30 99 / 0.2);
                }

                .bg-purple-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(156 39 176 / var(--tw-bg-opacity));
                }

                .bg-purple-500\/10 {
                    background-color: rgb(156 39 176 / 0.1);
                }

                .bg-purple-500\/20 {
                    background-color: rgb(156 39 176 / 0.2);
                }

                .bg-red-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(244 67 54 / var(--tw-bg-opacity));
                }

                .bg-red-500\/10 {
                    background-color: rgb(244 67 54 / 0.1);
                }

                .bg-red-500\/20 {
                    background-color: rgb(244 67 54 / 0.2);
                }

                .bg-teal-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 150 136 / var(--tw-bg-opacity));
                }

                .bg-teal-500\/10 {
                    background-color: rgb(0 150 136 / 0.1);
                }

                .bg-teal-500\/20 {
                    background-color: rgb(0 150 136 / 0.2);
                }

                .bg-transparent {
                    background-color: transparent;
                }

                .bg-white {
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 255 255 / var(--tw-bg-opacity));
                }

                .bg-white\/10 {
                    background-color: rgb(255 255 255 / 0.1);
                }

                .bg-white\/50 {
                    background-color: rgb(255 255 255 / 0.5);
                }

                .bg-yellow-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 235 59 / var(--tw-bg-opacity));
                }

                .bg-yellow-500\/10 {
                    background-color: rgb(255 235 59 / 0.1);
                }

                .bg-yellow-500\/20 {
                    background-color: rgb(255 235 59 / 0.2);
                }

                .bg-opacity-60 {
                    --tw-bg-opacity: 0.6;
                }

                .bg-opacity-80 {
                    --tw-bg-opacity: 0.8;
                }

                .bg-\[url\(\'\/img\/background-image\.png\'\)\] {
                    background-image: url('/img/background-image.png');
                }

                .bg-gradient-to-br {
                    background-image: linear-gradient(to bottom right, var(--tw-gradient-stops));
                }

                .bg-gradient-to-tr {
                    background-image: linear-gradient(to top right, var(--tw-gradient-stops));
                }

                .from-amber-600 {
                    --tw-gradient-from: #ffb300 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(255 179 0 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-black {
                    --tw-gradient-from: #000000 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-blue-600 {
                    --tw-gradient-from: #1e88e5 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(30 136 229 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-blue-gray-600 {
                    --tw-gradient-from: #546e7a var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(84 110 122 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-blue-gray-800 {
                    --tw-gradient-from: #37474f var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(55 71 79 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-brown-600 {
                    --tw-gradient-from: #6d4c41 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(109 76 65 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-cyan-600 {
                    --tw-gradient-from: #00acc1 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(0 172 193 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-deep-orange-600 {
                    --tw-gradient-from: #f4511e var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(244 81 30 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-deep-purple-600 {
                    --tw-gradient-from: #5e35b1 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(94 53 177 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-gray-100 {
                    --tw-gradient-from: #f5f5f5 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(245 245 245 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-gray-600 {
                    --tw-gradient-from: #757575 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(117 117 117 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-gray-800 {
                    --tw-gradient-from: #424242 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(66 66 66 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-gray-900 {
                    --tw-gradient-from: #212121 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(33 33 33 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-green-400 {
                    --tw-gradient-from: #66bb6a var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(102 187 106 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-green-600 {
                    --tw-gradient-from: #43a047 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(67 160 71 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-indigo-600 {
                    --tw-gradient-from: #3949ab var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(57 73 171 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-light-blue-600 {
                    --tw-gradient-from: #039be5 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(3 155 229 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-light-green-600 {
                    --tw-gradient-from: #7cb342 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(124 179 66 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-lime-600 {
                    --tw-gradient-from: #c0ca33 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(192 202 51 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-orange-400 {
                    --tw-gradient-from: #ffa726 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(255 167 38 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-orange-600 {
                    --tw-gradient-from: #fb8c00 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(251 140 0 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-pink-400 {
                    --tw-gradient-from: #ec407a var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(236 64 122 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-pink-600 {
                    --tw-gradient-from: #d81b60 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(216 27 96 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-purple-600 {
                    --tw-gradient-from: #8e24aa var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(142 36 170 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-red-400 {
                    --tw-gradient-from: #ef5350 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(239 83 80 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-red-600 {
                    --tw-gradient-from: #e53935 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(229 57 53 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-teal-600 {
                    --tw-gradient-from: #00897b var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(0 137 123 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .from-yellow-600 {
                    --tw-gradient-from: #fdd835 var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(253 216 53 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
                }

                .to-amber-400 {
                    --tw-gradient-to: #ffca28 var(--tw-gradient-to-position);
                }

                .to-black {
                    --tw-gradient-to: #000000 var(--tw-gradient-to-position);
                }

                .to-blue-400 {
                    --tw-gradient-to: #42a5f5 var(--tw-gradient-to-position);
                }

                .to-blue-gray-400 {
                    --tw-gradient-to: #78909c var(--tw-gradient-to-position);
                }

                .to-blue-gray-900 {
                    --tw-gradient-to: #263238 var(--tw-gradient-to-position);
                }

                .to-brown-400 {
                    --tw-gradient-to: #8d6e63 var(--tw-gradient-to-position);
                }

                .to-cyan-400 {
                    --tw-gradient-to: #26c6da var(--tw-gradient-to-position);
                }

                .to-deep-orange-400 {
                    --tw-gradient-to: #ff7043 var(--tw-gradient-to-position);
                }

                .to-deep-purple-400 {
                    --tw-gradient-to: #7e57c2 var(--tw-gradient-to-position);
                }

                .to-gray-100 {
                    --tw-gradient-to: #f5f5f5 var(--tw-gradient-to-position);
                }

                .to-gray-400 {
                    --tw-gradient-to: #bdbdbd var(--tw-gradient-to-position);
                }

                .to-gray-800 {
                    --tw-gradient-to: #424242 var(--tw-gradient-to-position);
                }

                .to-gray-900 {
                    --tw-gradient-to: #212121 var(--tw-gradient-to-position);
                }

                .to-green-400 {
                    --tw-gradient-to: #66bb6a var(--tw-gradient-to-position);
                }

                .to-green-600 {
                    --tw-gradient-to: #43a047 var(--tw-gradient-to-position);
                }

                .to-indigo-400 {
                    --tw-gradient-to: #5c6bc0 var(--tw-gradient-to-position);
                }

                .to-light-blue-400 {
                    --tw-gradient-to: #29b6f6 var(--tw-gradient-to-position);
                }

                .to-light-green-400 {
                    --tw-gradient-to: #9ccc65 var(--tw-gradient-to-position);
                }

                .to-lime-400 {
                    --tw-gradient-to: #d4e157 var(--tw-gradient-to-position);
                }

                .to-orange-400 {
                    --tw-gradient-to: #ffa726 var(--tw-gradient-to-position);
                }

                .to-orange-600 {
                    --tw-gradient-to: #fb8c00 var(--tw-gradient-to-position);
                }

                .to-pink-400 {
                    --tw-gradient-to: #ec407a var(--tw-gradient-to-position);
                }

                .to-pink-600 {
                    --tw-gradient-to: #d81b60 var(--tw-gradient-to-position);
                }

                .to-purple-400 {
                    --tw-gradient-to: #ab47bc var(--tw-gradient-to-position);
                }

                .to-red-400 {
                    --tw-gradient-to: #ef5350 var(--tw-gradient-to-position);
                }

                .to-red-600 {
                    --tw-gradient-to: #e53935 var(--tw-gradient-to-position);
                }

                .to-teal-400 {
                    --tw-gradient-to: #26a69a var(--tw-gradient-to-position);
                }

                .to-yellow-400 {
                    --tw-gradient-to: #ffee58 var(--tw-gradient-to-position);
                }

                .bg-cover {
                    background-size: cover;
                }

                .bg-clip-border {
                    background-clip: border-box;
                }

                .bg-clip-text {
                    -webkit-background-clip: text;
                    background-clip: text;
                }

                .bg-center {
                    background-position: center;
                }

                .object-cover {
                    -o-object-fit: cover;
                    object-fit: cover;
                }

                .object-center {
                    -o-object-position: center;
                    object-position: center;
                }

                .p-0 {
                    padding: 0px;
                }

                .p-0\.5 {
                    padding: 0.125rem;
                }

                .p-1 {
                    padding: 0.25rem;
                }

                .p-1\.5 {
                    padding: 0.375rem;
                }

                .p-2 {
                    padding: 0.5rem;
                }

                .p-3 {
                    padding: 0.75rem;
                }

                .p-4 {
                    padding: 1rem;
                }

                .p-5 {
                    padding: 1.25rem;
                }

                .p-6 {
                    padding: 1.5rem;
                }

                .px-0 {
                    padding-left: 0px;
                    padding-right: 0px;
                }

                .px-1 {
                    padding-left: 0.25rem;
                    padding-right: 0.25rem;
                }

                .px-2 {
                    padding-left: 0.5rem;
                    padding-right: 0.5rem;
                }

                .px-2\.5 {
                    padding-left: 0.625rem;
                    padding-right: 0.625rem;
                }

                .px-3 {
                    padding-left: 0.75rem;
                    padding-right: 0.75rem;
                }

                .px-4 {
                    padding-left: 1rem;
                    padding-right: 1rem;
                }

                .px-5 {
                    padding-left: 1.25rem;
                    padding-right: 1.25rem;
                }

                .px-6 {
                    padding-left: 1.5rem;
                    padding-right: 1.5rem;
                }

                .px-7 {
                    padding-left: 1.75rem;
                    padding-right: 1.75rem;
                }

                .px-8 {
                    padding-left: 2rem;
                    padding-right: 2rem;
                }

                .px-px {
                    padding-left: 1px;
                    padding-right: 1px;
                }

                .py-0 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }

                .py-0\.5 {
                    padding-top: 0.125rem;
                    padding-bottom: 0.125rem;
                }

                .py-1 {
                    padding-top: 0.25rem;
                    padding-bottom: 0.25rem;
                }

                .py-1\.5 {
                    padding-top: 0.375rem;
                    padding-bottom: 0.375rem;
                }

                .py-2 {
                    padding-top: 0.5rem;
                    padding-bottom: 0.5rem;
                }

                .py-2\.5 {
                    padding-top: 0.625rem;
                    padding-bottom: 0.625rem;
                }

                .py-3 {
                    padding-top: 0.75rem;
                    padding-bottom: 0.75rem;
                }

                .py-3\.5 {
                    padding-top: 0.875rem;
                    padding-bottom: 0.875rem;
                }

                .py-4 {
                    padding-top: 1rem;
                    padding-bottom: 1rem;
                }

                .py-5 {
                    padding-top: 1.25rem;
                    padding-bottom: 1.25rem;
                }

                .py-6 {
                    padding-top: 1.5rem;
                    padding-bottom: 1.5rem;
                }

                .\!pr-7 {
                    padding-right: 1.75rem !important;
                }

                .\!pr-9 {
                    padding-right: 2.25rem !important;
                }

                .pb-1 {
                    padding-bottom: 0.25rem;
                }

                .pb-1\.5 {
                    padding-bottom: 0.375rem;
                }

                .pb-2 {
                    padding-bottom: 0.5rem;
                }

                .pb-4 {
                    padding-bottom: 1rem;
                }

                .pb-6 {
                    padding-bottom: 1.5rem;
                }

                .pt-0 {
                    padding-top: 0px;
                }

                .pt-0\.5 {
                    padding-top: 0.125rem;
                }

                .pt-3 {
                    padding-top: 0.75rem;
                }

                .pt-4 {
                    padding-top: 1rem;
                }

                .pt-5 {
                    padding-top: 1.25rem;
                }

                .pt-8 {
                    padding-top: 2rem;
                }

                .pt-\[9px\] {
                    padding-top: 9px;
                }

                .pt-px {
                    padding-top: 1px;
                }

                .text-left {
                    text-align: left;
                }

                .text-center {
                    text-align: center;
                }

                .text-right {
                    text-align: right;
                }

                .text-start {
                    text-align: start;
                }

                .align-middle {
                    vertical-align: middle;
                }

                .font-sans {
                    font-family: Roboto, sans-serif;
                }

                .\!text-\[11px\] {
                    font-size: 11px !important;
                }

                .text-2xl {
                    font-size: 1.5rem;
                    line-height: 2rem;
                }

                .text-3xl {
                    font-size: 1.875rem;
                    line-height: 2.25rem;
                }

                .text-4xl {
                    font-size: 2.25rem;
                    line-height: 2.5rem;
                }

                .text-5xl {
                    font-size: 3rem;
                    line-height: 1;
                }

                .text-\[11px\] {
                    font-size: 11px;
                }

                .text-base {
                    font-size: 1rem;
                    line-height: 1.5rem;
                }

                .text-lg {
                    font-size: 1.125rem;
                    line-height: 1.75rem;
                }

                .text-sm {
                    font-size: 0.875rem;
                    line-height: 1.25rem;
                }

                .text-xl {
                    font-size: 1.25rem;
                    line-height: 1.75rem;
                }

                .text-xs {
                    font-size: 0.75rem;
                    line-height: 1rem;
                }

                .font-black {
                    font-weight: 900;
                }

                .font-bold {
                    font-weight: 700;
                }

                .font-light {
                    font-weight: 300;
                }

                .font-medium {
                    font-weight: 500;
                }

                .font-normal {
                    font-weight: 400;
                }

                .font-semibold {
                    font-weight: 600;
                }

                .uppercase {
                    text-transform: uppercase;
                }

                .capitalize {
                    text-transform: capitalize;
                }

                .normal-case {
                    text-transform: none;
                }

                .\!leading-tight {
                    line-height: 1.25 !important;
                }

                .leading-\[1\.3\] {
                    line-height: 1.3;
                }

                .leading-\[3\.75\] {
                    line-height: 3.75;
                }

                .leading-\[4\.1\] {
                    line-height: 4.1;
                }

                .leading-\[4\.25\] {
                    line-height: 4.25;
                }

                .leading-\[4\.875\] {
                    line-height: 4.875;
                }

                .leading-none {
                    line-height: 1;
                }

                .leading-normal {
                    line-height: 1.5;
                }

                .leading-relaxed {
                    line-height: 1.625;
                }

                .leading-snug {
                    line-height: 1.375;
                }

                .leading-tight {
                    line-height: 1.25;
                }

                .tracking-normal {
                    letter-spacing: 0em;
                }

                .\!text-black {
                    --tw-text-opacity: 1 !important;
                    color: rgb(0 0 0 / var(--tw-text-opacity)) !important;
                }

                .\!text-white {
                    --tw-text-opacity: 1 !important;
                    color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
                }

                .text-amber-500 {
                    --tw-text-opacity: 1;
                    color: rgb(255 193 7 / var(--tw-text-opacity));
                }

                .text-amber-700 {
                    --tw-text-opacity: 1;
                    color: rgb(255 160 0 / var(--tw-text-opacity));
                }

                .text-amber-900 {
                    --tw-text-opacity: 1;
                    color: rgb(255 111 0 / var(--tw-text-opacity));
                }

                .text-black {
                    --tw-text-opacity: 1;
                    color: rgb(0 0 0 / var(--tw-text-opacity));
                }

                .text-blue-400 {
                    --tw-text-opacity: 1;
                    color: rgb(66 165 245 / var(--tw-text-opacity));
                }

                .text-blue-500 {
                    --tw-text-opacity: 1;
                    color: rgb(33 150 243 / var(--tw-text-opacity));
                }

                .text-blue-700 {
                    --tw-text-opacity: 1;
                    color: rgb(25 118 210 / var(--tw-text-opacity));
                }

                .text-blue-900 {
                    --tw-text-opacity: 1;
                    color: rgb(13 71 161 / var(--tw-text-opacity));
                }

                .text-blue-gray-200 {
                    --tw-text-opacity: 1;
                    color: rgb(176 190 197 / var(--tw-text-opacity));
                }

                .text-blue-gray-300 {
                    --tw-text-opacity: 1;
                    color: rgb(144 164 174 / var(--tw-text-opacity));
                }

                .text-blue-gray-400 {
                    --tw-text-opacity: 1;
                    color: rgb(120 144 156 / var(--tw-text-opacity));
                }

                .text-blue-gray-500 {
                    --tw-text-opacity: 1;
                    color: rgb(96 125 139 / var(--tw-text-opacity));
                }

                .text-blue-gray-600 {
                    --tw-text-opacity: 1;
                    color: rgb(84 110 122 / var(--tw-text-opacity));
                }

                .text-blue-gray-700 {
                    --tw-text-opacity: 1;
                    color: rgb(69 90 100 / var(--tw-text-opacity));
                }

                .text-blue-gray-900 {
                    --tw-text-opacity: 1;
                    color: rgb(38 50 56 / var(--tw-text-opacity));
                }

                .text-brown-500 {
                    --tw-text-opacity: 1;
                    color: rgb(121 85 72 / var(--tw-text-opacity));
                }

                .text-brown-700 {
                    --tw-text-opacity: 1;
                    color: rgb(93 64 55 / var(--tw-text-opacity));
                }

                .text-brown-900 {
                    --tw-text-opacity: 1;
                    color: rgb(62 39 35 / var(--tw-text-opacity));
                }

                .text-current {
                    color: currentColor;
                }

                .text-cyan-500 {
                    --tw-text-opacity: 1;
                    color: rgb(0 188 212 / var(--tw-text-opacity));
                }

                .text-cyan-700 {
                    --tw-text-opacity: 1;
                    color: rgb(0 151 167 / var(--tw-text-opacity));
                }

                .text-cyan-900 {
                    --tw-text-opacity: 1;
                    color: rgb(0 96 100 / var(--tw-text-opacity));
                }

                .text-deep-orange-500 {
                    --tw-text-opacity: 1;
                    color: rgb(255 87 34 / var(--tw-text-opacity));
                }

                .text-deep-orange-700 {
                    --tw-text-opacity: 1;
                    color: rgb(230 74 25 / var(--tw-text-opacity));
                }

                .text-deep-orange-900 {
                    --tw-text-opacity: 1;
                    color: rgb(191 54 12 / var(--tw-text-opacity));
                }

                .text-deep-purple-500 {
                    --tw-text-opacity: 1;
                    color: rgb(103 58 183 / var(--tw-text-opacity));
                }

                .text-deep-purple-700 {
                    --tw-text-opacity: 1;
                    color: rgb(81 45 168 / var(--tw-text-opacity));
                }

                .text-deep-purple-900 {
                    --tw-text-opacity: 1;
                    color: rgb(49 27 146 / var(--tw-text-opacity));
                }

                .text-gray-300 {
                    --tw-text-opacity: 1;
                    color: rgb(224 224 224 / var(--tw-text-opacity));
                }

                .text-gray-500 {
                    --tw-text-opacity: 1;
                    color: rgb(158 158 158 / var(--tw-text-opacity));
                }

                .text-gray-700 {
                    --tw-text-opacity: 1;
                    color: rgb(97 97 97 / var(--tw-text-opacity));
                }

                .text-gray-900 {
                    --tw-text-opacity: 1;
                    color: rgb(33 33 33 / var(--tw-text-opacity));
                }

                .text-green-500 {
                    --tw-text-opacity: 1;
                    color: rgb(76 175 80 / var(--tw-text-opacity));
                }

                .text-green-700 {
                    --tw-text-opacity: 1;
                    color: rgb(56 142 60 / var(--tw-text-opacity));
                }

                .text-green-900 {
                    --tw-text-opacity: 1;
                    color: rgb(27 94 32 / var(--tw-text-opacity));
                }

                .text-indigo-500 {
                    --tw-text-opacity: 1;
                    color: rgb(63 81 181 / var(--tw-text-opacity));
                }

                .text-indigo-700 {
                    --tw-text-opacity: 1;
                    color: rgb(48 63 159 / var(--tw-text-opacity));
                }

                .text-indigo-900 {
                    --tw-text-opacity: 1;
                    color: rgb(26 35 126 / var(--tw-text-opacity));
                }

                .text-inherit {
                    color: inherit;
                }

                .text-light-blue-500 {
                    --tw-text-opacity: 1;
                    color: rgb(3 169 244 / var(--tw-text-opacity));
                }

                .text-light-blue-700 {
                    --tw-text-opacity: 1;
                    color: rgb(2 136 209 / var(--tw-text-opacity));
                }

                .text-light-blue-900 {
                    --tw-text-opacity: 1;
                    color: rgb(1 87 155 / var(--tw-text-opacity));
                }

                .text-light-green-500 {
                    --tw-text-opacity: 1;
                    color: rgb(139 195 74 / var(--tw-text-opacity));
                }

                .text-light-green-700 {
                    --tw-text-opacity: 1;
                    color: rgb(104 159 56 / var(--tw-text-opacity));
                }

                .text-light-green-900 {
                    --tw-text-opacity: 1;
                    color: rgb(51 105 30 / var(--tw-text-opacity));
                }

                .text-lime-500 {
                    --tw-text-opacity: 1;
                    color: rgb(205 220 57 / var(--tw-text-opacity));
                }

                .text-lime-700 {
                    --tw-text-opacity: 1;
                    color: rgb(175 180 43 / var(--tw-text-opacity));
                }

                .text-lime-900 {
                    --tw-text-opacity: 1;
                    color: rgb(130 119 23 / var(--tw-text-opacity));
                }

                .text-orange-500 {
                    --tw-text-opacity: 1;
                    color: rgb(255 152 0 / var(--tw-text-opacity));
                }

                .text-orange-700 {
                    --tw-text-opacity: 1;
                    color: rgb(245 124 0 / var(--tw-text-opacity));
                }

                .text-orange-900 {
                    --tw-text-opacity: 1;
                    color: rgb(230 81 0 / var(--tw-text-opacity));
                }

                .text-pink-500 {
                    --tw-text-opacity: 1;
                    color: rgb(233 30 99 / var(--tw-text-opacity));
                }

                .text-pink-700 {
                    --tw-text-opacity: 1;
                    color: rgb(194 24 91 / var(--tw-text-opacity));
                }

                .text-pink-900 {
                    --tw-text-opacity: 1;
                    color: rgb(136 14 79 / var(--tw-text-opacity));
                }

                .text-purple-500 {
                    --tw-text-opacity: 1;
                    color: rgb(156 39 176 / var(--tw-text-opacity));
                }

                .text-purple-700 {
                    --tw-text-opacity: 1;
                    color: rgb(123 31 162 / var(--tw-text-opacity));
                }

                .text-purple-900 {
                    --tw-text-opacity: 1;
                    color: rgb(74 20 140 / var(--tw-text-opacity));
                }

                .text-red-500 {
                    --tw-text-opacity: 1;
                    color: rgb(244 67 54 / var(--tw-text-opacity));
                }

                .text-red-600 {
                    --tw-text-opacity: 1;
                    color: rgb(229 57 53 / var(--tw-text-opacity));
                }

                .text-red-700 {
                    --tw-text-opacity: 1;
                    color: rgb(211 47 47 / var(--tw-text-opacity));
                }

                .text-red-900 {
                    --tw-text-opacity: 1;
                    color: rgb(183 28 28 / var(--tw-text-opacity));
                }

                .text-teal-500 {
                    --tw-text-opacity: 1;
                    color: rgb(0 150 136 / var(--tw-text-opacity));
                }

                .text-teal-700 {
                    --tw-text-opacity: 1;
                    color: rgb(0 121 107 / var(--tw-text-opacity));
                }

                .text-teal-900 {
                    --tw-text-opacity: 1;
                    color: rgb(0 77 64 / var(--tw-text-opacity));
                }

                .text-transparent {
                    color: transparent;
                }

                .text-white {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity));
                }

                .text-yellow-500 {
                    --tw-text-opacity: 1;
                    color: rgb(255 235 59 / var(--tw-text-opacity));
                }

                .text-yellow-700 {
                    --tw-text-opacity: 1;
                    color: rgb(251 192 45 / var(--tw-text-opacity));
                }

                .text-yellow-900 {
                    --tw-text-opacity: 1;
                    color: rgb(245 127 23 / var(--tw-text-opacity));
                }

                .underline {
                    text-decoration-line: underline;
                }

                .antialiased {
                    -webkit-font-smoothing: antialiased;
                    -moz-osx-font-smoothing: grayscale;
                }

                .opacity-0 {
                    opacity: 0;
                }

                .opacity-10 {
                    opacity: 0.1;
                }

                .opacity-50 {
                    opacity: 0.5;
                }

                .opacity-60 {
                    opacity: 0.6;
                }

                .opacity-75 {
                    opacity: 0.75;
                }

                .shadow {
                    --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
                    --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                }

                .shadow-2xl {
                    --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
                    --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                }

                .shadow-lg {
                    --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
                    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                }

                .shadow-md {
                    --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
                    --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                }

                .shadow-none {
                    --tw-shadow: 0 0 rgb(0, 0 / 0, 0);
                    --tw-shadow-colored: 0 0 var(--tw-shadow-color);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                }

                .shadow-sm {
                    --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
                    --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                }

                .shadow-amber-500\/20 {
                    --tw-shadow-color: rgb(255 193 7 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-amber-500\/40 {
                    --tw-shadow-color: rgb(255 193 7 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-blue-500\/20 {
                    --tw-shadow-color: rgb(33 150 243 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-blue-500\/40 {
                    --tw-shadow-color: rgb(33 150 243 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-blue-gray-500\/10 {
                    --tw-shadow-color: rgb(96 125 139 / 0.1);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-blue-gray-500\/20 {
                    --tw-shadow-color: rgb(96 125 139 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-blue-gray-500\/25 {
                    --tw-shadow-color: rgb(96 125 139 / 0.25);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-blue-gray-500\/40 {
                    --tw-shadow-color: rgb(96 125 139 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-blue-gray-500\/5 {
                    --tw-shadow-color: rgb(96 125 139 / 0.05);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-blue-gray-900\/10 {
                    --tw-shadow-color: rgb(38 50 56 / 0.1);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-brown-500\/20 {
                    --tw-shadow-color: rgb(121 85 72 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-brown-500\/40 {
                    --tw-shadow-color: rgb(121 85 72 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-cyan-500\/20 {
                    --tw-shadow-color: rgb(0 188 212 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-cyan-500\/40 {
                    --tw-shadow-color: rgb(0 188 212 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-deep-orange-500\/20 {
                    --tw-shadow-color: rgb(255 87 34 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-deep-orange-500\/40 {
                    --tw-shadow-color: rgb(255 87 34 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-deep-purple-500\/20 {
                    --tw-shadow-color: rgb(103 58 183 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-deep-purple-500\/40 {
                    --tw-shadow-color: rgb(103 58 183 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-gray-900\/10 {
                    --tw-shadow-color: rgb(33 33 33 / 0.1);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-gray-900\/20 {
                    --tw-shadow-color: rgb(33 33 33 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-green-500\/20 {
                    --tw-shadow-color: rgb(76 175 80 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-green-500\/40 {
                    --tw-shadow-color: rgb(76 175 80 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-indigo-500\/20 {
                    --tw-shadow-color: rgb(63 81 181 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-indigo-500\/40 {
                    --tw-shadow-color: rgb(63 81 181 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-light-blue-500\/20 {
                    --tw-shadow-color: rgb(3 169 244 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-light-blue-500\/40 {
                    --tw-shadow-color: rgb(3 169 244 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-light-green-500\/20 {
                    --tw-shadow-color: rgb(139 195 74 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-light-green-500\/40 {
                    --tw-shadow-color: rgb(139 195 74 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-lime-500\/20 {
                    --tw-shadow-color: rgb(205 220 57 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-lime-500\/40 {
                    --tw-shadow-color: rgb(205 220 57 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-orange-500\/20 {
                    --tw-shadow-color: rgb(255 152 0 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-orange-500\/40 {
                    --tw-shadow-color: rgb(255 152 0 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-pink-500\/20 {
                    --tw-shadow-color: rgb(233 30 99 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-pink-500\/40 {
                    --tw-shadow-color: rgb(233 30 99 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-purple-500\/20 {
                    --tw-shadow-color: rgb(156 39 176 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-purple-500\/40 {
                    --tw-shadow-color: rgb(156 39 176 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-red-500\/20 {
                    --tw-shadow-color: rgb(244 67 54 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-red-500\/40 {
                    --tw-shadow-color: rgb(244 67 54 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-teal-500\/20 {
                    --tw-shadow-color: rgb(0 150 136 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-teal-500\/40 {
                    --tw-shadow-color: rgb(0 150 136 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-yellow-500\/20 {
                    --tw-shadow-color: rgb(255 235 59 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .shadow-yellow-500\/40 {
                    --tw-shadow-color: rgb(255 235 59 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .outline-none {
                    outline: 2px solid transparent;
                    outline-offset: 2px;
                }

                .outline {
                    outline-style: solid;
                }

                .outline-0 {
                    outline-width: 0px;
                }

                .filter {
                    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
                }

                .backdrop-blur-2xl {
                    --tw-backdrop-blur: blur(40px);
                    -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
                    backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
                }

                .backdrop-blur-sm {
                    --tw-backdrop-blur: blur(4px);
                    -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
                    backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
                }

                .backdrop-saturate-200 {
                    --tw-backdrop-saturate: saturate(2);
                    -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
                    backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
                }

                .transition {
                    transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
                    transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
                    transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
                    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                    transition-duration: 150ms;
                }

                .transition-all {
                    transition-property: all;
                    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                    transition-duration: 150ms;
                }

                .transition-colors {
                    transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
                    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                    transition-duration: 150ms;
                }

                .transition-opacity {
                    transition-property: opacity;
                    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                    transition-duration: 150ms;
                }

                .transition-transform {
                    transition-property: transform;
                    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                    transition-duration: 150ms;
                }

                .duration-200 {
                    transition-duration: 200ms;
                }

                .duration-300 {
                    transition-duration: 300ms;
                }

                .duration-500 {
                    transition-duration: 500ms;
                }

                .ease-in-out {
                    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                }

                .content-\[\'\'\] {
                    --tw-content: '';
                    content: var(--tw-content);
                }

                .\[-webkit-appearance\:none\] {
                    -webkit-appearance: none;
                }

                .before\:pointer-events-none::before {
                    content: var(--tw-content);
                    pointer-events: none;
                }

                .before\:absolute::before {
                    content: var(--tw-content);
                    position: absolute;
                }

                .before\:left-2\/4::before {
                    content: var(--tw-content);
                    left: 50%;
                }

                .before\:top-2\/4::before {
                    content: var(--tw-content);
                    top: 50%;
                }

                .before\:mr-1::before {
                    content: var(--tw-content);
                    margin-right: 0.25rem;
                }

                .before\:mt-\[6\.5px\]::before {
                    content: var(--tw-content);
                    margin-top: 6.5px;
                }

                .before\:box-border::before {
                    content: var(--tw-content);
                    box-sizing: border-box;
                }

                .before\:block::before {
                    content: var(--tw-content);
                    display: block;
                }

                .before\:h-1::before {
                    content: var(--tw-content);
                    height: 0.25rem;
                }

                .before\:h-1\.5::before {
                    content: var(--tw-content);
                    height: 0.375rem;
                }

                .before\:h-10::before {
                    content: var(--tw-content);
                    height: 2.5rem;
                }

                .before\:h-12::before {
                    content: var(--tw-content);
                    height: 3rem;
                }

                .before\:w-10::before {
                    content: var(--tw-content);
                    width: 2.5rem;
                }

                .before\:w-12::before {
                    content: var(--tw-content);
                    width: 3rem;
                }

                .before\:w-2::before {
                    content: var(--tw-content);
                    width: 0.5rem;
                }

                .before\:w-2\.5::before {
                    content: var(--tw-content);
                    width: 0.625rem;
                }

                .before\:-translate-x-2\/4::before {
                    content: var(--tw-content);
                    --tw-translate-x: -50%;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .before\:-translate-y-2\/4::before {
                    content: var(--tw-content);
                    --tw-translate-y: -50%;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .before\:rounded-full::before {
                    content: var(--tw-content);
                    border-radius: 9999px;
                }

                .before\:rounded-tl-md::before {
                    content: var(--tw-content);
                    border-top-left-radius: 0.375rem;
                }

                .before\:border-l::before {
                    content: var(--tw-content);
                    border-left-width: 1px;
                }

                .before\:border-l-2::before {
                    content: var(--tw-content);
                    border-left-width: 2px;
                }

                .before\:border-t::before {
                    content: var(--tw-content);
                    border-top-width: 1px;
                }

                .before\:border-t-2::before {
                    content: var(--tw-content);
                    border-top-width: 2px;
                }

                .before\:\!border-blue-gray-200::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(176 190 197 / var(--tw-border-opacity)) !important;
                }

                .before\:border-amber-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(255 193 7 / var(--tw-border-opacity));
                }

                .before\:border-black::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(0 0 0 / var(--tw-border-opacity));
                }

                .before\:border-blue-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(33 150 243 / var(--tw-border-opacity));
                }

                .before\:border-blue-gray-200::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(176 190 197 / var(--tw-border-opacity));
                }

                .before\:border-blue-gray-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(96 125 139 / var(--tw-border-opacity));
                }

                .before\:border-brown-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(121 85 72 / var(--tw-border-opacity));
                }

                .before\:border-cyan-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(0 188 212 / var(--tw-border-opacity));
                }

                .before\:border-deep-orange-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(255 87 34 / var(--tw-border-opacity));
                }

                .before\:border-deep-purple-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(103 58 183 / var(--tw-border-opacity));
                }

                .before\:border-gray-900::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(33 33 33 / var(--tw-border-opacity));
                }

                .before\:border-green-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(76 175 80 / var(--tw-border-opacity));
                }

                .before\:border-indigo-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(63 81 181 / var(--tw-border-opacity));
                }

                .before\:border-light-blue-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(3 169 244 / var(--tw-border-opacity));
                }

                .before\:border-light-green-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(139 195 74 / var(--tw-border-opacity));
                }

                .before\:border-lime-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(205 220 57 / var(--tw-border-opacity));
                }

                .before\:border-orange-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(255 152 0 / var(--tw-border-opacity));
                }

                .before\:border-pink-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(233 30 99 / var(--tw-border-opacity));
                }

                .before\:border-purple-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(156 39 176 / var(--tw-border-opacity));
                }

                .before\:border-red-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(244 67 54 / var(--tw-border-opacity));
                }

                .before\:border-teal-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(0 150 136 / var(--tw-border-opacity));
                }

                .before\:border-transparent::before {
                    content: var(--tw-content);
                    border-color: transparent;
                }

                .before\:border-white::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(255 255 255 / var(--tw-border-opacity));
                }

                .before\:border-yellow-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(255 235 59 / var(--tw-border-opacity));
                }

                .before\:border-l-transparent::before {
                    content: var(--tw-content);
                    border-left-color: transparent;
                }

                .before\:border-t-transparent::before {
                    content: var(--tw-content);
                    border-top-color: transparent;
                }

                .before\:bg-blue-gray-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(96 125 139 / var(--tw-bg-opacity));
                }

                .before\:opacity-0::before {
                    content: var(--tw-content);
                    opacity: 0;
                }

                .before\:transition-all::before {
                    content: var(--tw-content);
                    transition-property: all;
                    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                    transition-duration: 150ms;
                }

                .before\:transition-opacity::before {
                    content: var(--tw-content);
                    transition-property: opacity;
                    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                    transition-duration: 150ms;
                }

                .before\:content-none::before {
                    --tw-content: none;
                    content: var(--tw-content);
                }

                .after\:pointer-events-none::after {
                    content: var(--tw-content);
                    pointer-events: none;
                }

                .after\:absolute::after {
                    content: var(--tw-content);
                    position: absolute;
                }

                .after\:-bottom-0::after {
                    content: var(--tw-content);
                    bottom: -0px;
                }

                .after\:-bottom-1::after {
                    content: var(--tw-content);
                    bottom: -0.25rem;
                }

                .after\:-bottom-1\.5::after {
                    content: var(--tw-content);
                    bottom: -0.375rem;
                }

                .after\:-bottom-2::after {
                    content: var(--tw-content);
                    bottom: -0.5rem;
                }

                .after\:-bottom-2\.5::after {
                    content: var(--tw-content);
                    bottom: -0.625rem;
                }

                .after\:-bottom-6::after {
                    content: var(--tw-content);
                    bottom: -1.5rem;
                }

                .after\:left-2\/4::after {
                    content: var(--tw-content);
                    left: 50%;
                }

                .after\:ml-1::after {
                    content: var(--tw-content);
                    margin-left: 0.25rem;
                }

                .after\:mt-\[6\.5px\]::after {
                    content: var(--tw-content);
                    margin-top: 6.5px;
                }

                .after\:box-border::after {
                    content: var(--tw-content);
                    box-sizing: border-box;
                }

                .after\:block::after {
                    content: var(--tw-content);
                    display: block;
                }

                .after\:h-0::after {
                    content: var(--tw-content);
                    height: 0px;
                }

                .after\:h-1::after {
                    content: var(--tw-content);
                    height: 0.25rem;
                }

                .after\:h-1\.5::after {
                    content: var(--tw-content);
                    height: 0.375rem;
                }

                .after\:h-4\/6::after {
                    content: var(--tw-content);
                    height: 66.666667%;
                }

                .after\:w-0::after {
                    content: var(--tw-content);
                    width: 0px;
                }

                .after\:w-0\.5::after {
                    content: var(--tw-content);
                    width: 0.125rem;
                }

                .after\:w-2::after {
                    content: var(--tw-content);
                    width: 0.5rem;
                }

                .after\:w-2\.5::after {
                    content: var(--tw-content);
                    width: 0.625rem;
                }

                .after\:w-full::after {
                    content: var(--tw-content);
                    width: 100%;
                }

                .after\:flex-grow::after {
                    content: var(--tw-content);
                    flex-grow: 1;
                }

                .after\:-translate-x-2\/4::after {
                    content: var(--tw-content);
                    --tw-translate-x: -50%;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .after\:scale-x-0::after {
                    content: var(--tw-content);
                    --tw-scale-x: 0;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .after\:scale-x-100::after {
                    content: var(--tw-content);
                    --tw-scale-x: 1;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .after\:rounded-tr-md::after {
                    content: var(--tw-content);
                    border-top-right-radius: 0.375rem;
                }

                .after\:border-b-2::after {
                    content: var(--tw-content);
                    border-bottom-width: 2px;
                }

                .after\:border-r::after {
                    content: var(--tw-content);
                    border-right-width: 1px;
                }

                .after\:border-r-2::after {
                    content: var(--tw-content);
                    border-right-width: 2px;
                }

                .after\:border-t::after {
                    content: var(--tw-content);
                    border-top-width: 1px;
                }

                .after\:border-t-2::after {
                    content: var(--tw-content);
                    border-top-width: 2px;
                }

                .after\:\!border-blue-gray-200::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(176 190 197 / var(--tw-border-opacity)) !important;
                }

                .after\:border-amber-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(255 193 7 / var(--tw-border-opacity));
                }

                .after\:border-black::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(0 0 0 / var(--tw-border-opacity));
                }

                .after\:border-blue-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(33 150 243 / var(--tw-border-opacity));
                }

                .after\:border-blue-gray-200::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(176 190 197 / var(--tw-border-opacity));
                }

                .after\:border-blue-gray-50::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(236 239 241 / var(--tw-border-opacity));
                }

                .after\:border-blue-gray-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(96 125 139 / var(--tw-border-opacity));
                }

                .after\:border-brown-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(121 85 72 / var(--tw-border-opacity));
                }

                .after\:border-cyan-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(0 188 212 / var(--tw-border-opacity));
                }

                .after\:border-deep-orange-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(255 87 34 / var(--tw-border-opacity));
                }

                .after\:border-deep-purple-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(103 58 183 / var(--tw-border-opacity));
                }

                .after\:border-gray-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(158 158 158 / var(--tw-border-opacity));
                }

                .after\:border-gray-900::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(33 33 33 / var(--tw-border-opacity));
                }

                .after\:border-green-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(76 175 80 / var(--tw-border-opacity));
                }

                .after\:border-indigo-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(63 81 181 / var(--tw-border-opacity));
                }

                .after\:border-light-blue-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(3 169 244 / var(--tw-border-opacity));
                }

                .after\:border-light-green-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(139 195 74 / var(--tw-border-opacity));
                }

                .after\:border-lime-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(205 220 57 / var(--tw-border-opacity));
                }

                .after\:border-orange-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(255 152 0 / var(--tw-border-opacity));
                }

                .after\:border-pink-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(233 30 99 / var(--tw-border-opacity));
                }

                .after\:border-purple-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(156 39 176 / var(--tw-border-opacity));
                }

                .after\:border-red-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(244 67 54 / var(--tw-border-opacity));
                }

                .after\:border-teal-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(0 150 136 / var(--tw-border-opacity));
                }

                .after\:border-transparent::after {
                    content: var(--tw-content);
                    border-color: transparent;
                }

                .after\:border-white::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(255 255 255 / var(--tw-border-opacity));
                }

                .after\:border-yellow-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(255 235 59 / var(--tw-border-opacity));
                }

                .after\:border-r-transparent::after {
                    content: var(--tw-content);
                    border-right-color: transparent;
                }

                .after\:border-t-transparent::after {
                    content: var(--tw-content);
                    border-top-color: transparent;
                }

                .after\:bg-blue-gray-50::after {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(236 239 241 / var(--tw-bg-opacity));
                }

                .after\:transition-all::after {
                    content: var(--tw-content);
                    transition-property: all;
                    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                    transition-duration: 150ms;
                }

                .after\:transition-transform::after {
                    content: var(--tw-content);
                    transition-property: transform;
                    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                    transition-duration: 150ms;
                }

                .after\:duration-300::after {
                    content: var(--tw-content);
                    transition-duration: 300ms;
                }

                .after\:content-\[\'\'\]::after {
                    --tw-content: '';
                    content: var(--tw-content);
                }

                .after\:content-none::after {
                    --tw-content: none;
                    content: var(--tw-content);
                }

                .checked\:border-amber-500:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(255 193 7 / var(--tw-border-opacity));
                }

                .checked\:border-blue-500:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(33 150 243 / var(--tw-border-opacity));
                }

                .checked\:border-blue-gray-500:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(96 125 139 / var(--tw-border-opacity));
                }

                .checked\:border-brown-500:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(121 85 72 / var(--tw-border-opacity));
                }

                .checked\:border-cyan-500:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(0 188 212 / var(--tw-border-opacity));
                }

                .checked\:border-deep-orange-500:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(255 87 34 / var(--tw-border-opacity));
                }

                .checked\:border-deep-purple-500:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(103 58 183 / var(--tw-border-opacity));
                }

                .checked\:border-gray-900:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(33 33 33 / var(--tw-border-opacity));
                }

                .checked\:border-green-500:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(76 175 80 / var(--tw-border-opacity));
                }

                .checked\:border-indigo-500:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(63 81 181 / var(--tw-border-opacity));
                }

                .checked\:border-light-blue-500:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(3 169 244 / var(--tw-border-opacity));
                }

                .checked\:border-light-green-500:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(139 195 74 / var(--tw-border-opacity));
                }

                .checked\:border-lime-500:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(205 220 57 / var(--tw-border-opacity));
                }

                .checked\:border-orange-500:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(255 152 0 / var(--tw-border-opacity));
                }

                .checked\:border-pink-500:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(233 30 99 / var(--tw-border-opacity));
                }

                .checked\:border-purple-500:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(156 39 176 / var(--tw-border-opacity));
                }

                .checked\:border-red-500:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(244 67 54 / var(--tw-border-opacity));
                }

                .checked\:border-teal-500:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(0 150 136 / var(--tw-border-opacity));
                }

                .checked\:border-yellow-500:checked {
                    --tw-border-opacity: 1;
                    border-color: rgb(255 235 59 / var(--tw-border-opacity));
                }

                .checked\:bg-amber-500:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 193 7 / var(--tw-bg-opacity));
                }

                .checked\:bg-blue-500:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(33 150 243 / var(--tw-bg-opacity));
                }

                .checked\:bg-blue-gray-500:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(96 125 139 / var(--tw-bg-opacity));
                }

                .checked\:bg-brown-500:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(121 85 72 / var(--tw-bg-opacity));
                }

                .checked\:bg-cyan-500:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 188 212 / var(--tw-bg-opacity));
                }

                .checked\:bg-deep-orange-500:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 87 34 / var(--tw-bg-opacity));
                }

                .checked\:bg-deep-purple-500:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(103 58 183 / var(--tw-bg-opacity));
                }

                .checked\:bg-gray-900:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(33 33 33 / var(--tw-bg-opacity));
                }

                .checked\:bg-green-500:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(76 175 80 / var(--tw-bg-opacity));
                }

                .checked\:bg-indigo-500:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(63 81 181 / var(--tw-bg-opacity));
                }

                .checked\:bg-light-blue-500:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(3 169 244 / var(--tw-bg-opacity));
                }

                .checked\:bg-light-green-500:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(139 195 74 / var(--tw-bg-opacity));
                }

                .checked\:bg-lime-500:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(205 220 57 / var(--tw-bg-opacity));
                }

                .checked\:bg-orange-500:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 152 0 / var(--tw-bg-opacity));
                }

                .checked\:bg-pink-500:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(233 30 99 / var(--tw-bg-opacity));
                }

                .checked\:bg-purple-500:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(156 39 176 / var(--tw-bg-opacity));
                }

                .checked\:bg-red-500:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(244 67 54 / var(--tw-bg-opacity));
                }

                .checked\:bg-teal-500:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 150 136 / var(--tw-bg-opacity));
                }

                .checked\:bg-yellow-500:checked {
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 235 59 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-amber-500:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 193 7 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-blue-500:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(33 150 243 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-blue-gray-500:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(96 125 139 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-brown-500:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(121 85 72 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-cyan-500:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 188 212 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-deep-orange-500:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 87 34 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-deep-purple-500:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(103 58 183 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-gray-900:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(33 33 33 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-green-500:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(76 175 80 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-indigo-500:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(63 81 181 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-light-blue-500:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(3 169 244 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-light-green-500:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(139 195 74 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-lime-500:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(205 220 57 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-orange-500:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 152 0 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-pink-500:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(233 30 99 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-purple-500:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(156 39 176 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-red-500:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(244 67 54 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-teal-500:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 150 136 / var(--tw-bg-opacity));
                }

                .checked\:before\:bg-yellow-500:checked::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 235 59 / var(--tw-bg-opacity));
                }

                .placeholder-shown\:border:-moz-placeholder-shown {
                    border-width: 1px;
                }

                .placeholder-shown\:border:placeholder-shown {
                    border-width: 1px;
                }

                .placeholder-shown\:border-blue-gray-200:-moz-placeholder-shown {
                    --tw-border-opacity: 1;
                    border-color: rgb(176 190 197 / var(--tw-border-opacity));
                }

                .placeholder-shown\:border-blue-gray-200:placeholder-shown {
                    --tw-border-opacity: 1;
                    border-color: rgb(176 190 197 / var(--tw-border-opacity));
                }

                .placeholder-shown\:border-green-500:-moz-placeholder-shown {
                    --tw-border-opacity: 1;
                    border-color: rgb(76 175 80 / var(--tw-border-opacity));
                }

                .placeholder-shown\:border-green-500:placeholder-shown {
                    --tw-border-opacity: 1;
                    border-color: rgb(76 175 80 / var(--tw-border-opacity));
                }

                .placeholder-shown\:border-red-500:-moz-placeholder-shown {
                    --tw-border-opacity: 1;
                    border-color: rgb(244 67 54 / var(--tw-border-opacity));
                }

                .placeholder-shown\:border-red-500:placeholder-shown {
                    --tw-border-opacity: 1;
                    border-color: rgb(244 67 54 / var(--tw-border-opacity));
                }

                .placeholder-shown\:border-t-blue-gray-200:-moz-placeholder-shown {
                    --tw-border-opacity: 1;
                    border-top-color: rgb(176 190 197 / var(--tw-border-opacity));
                }

                .placeholder-shown\:border-t-blue-gray-200:placeholder-shown {
                    --tw-border-opacity: 1;
                    border-top-color: rgb(176 190 197 / var(--tw-border-opacity));
                }

                .placeholder-shown\:border-t-green-500:-moz-placeholder-shown {
                    --tw-border-opacity: 1;
                    border-top-color: rgb(76 175 80 / var(--tw-border-opacity));
                }

                .placeholder-shown\:border-t-green-500:placeholder-shown {
                    --tw-border-opacity: 1;
                    border-top-color: rgb(76 175 80 / var(--tw-border-opacity));
                }

                .placeholder-shown\:border-t-red-500:-moz-placeholder-shown {
                    --tw-border-opacity: 1;
                    border-top-color: rgb(244 67 54 / var(--tw-border-opacity));
                }

                .placeholder-shown\:border-t-red-500:placeholder-shown {
                    --tw-border-opacity: 1;
                    border-top-color: rgb(244 67 54 / var(--tw-border-opacity));
                }

                .hover\:scale-105:hover {
                    --tw-scale-x: 1.05;
                    --tw-scale-y: 1.05;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .hover\:scale-110:hover {
                    --tw-scale-x: 1.1;
                    --tw-scale-y: 1.1;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .hover\:bg-amber-500\/10:hover {
                    background-color: rgb(255 193 7 / 0.1);
                }

                .hover\:bg-blue-500\/10:hover {
                    background-color: rgb(33 150 243 / 0.1);
                }

                .hover\:bg-blue-gray-50:hover {
                    --tw-bg-opacity: 1;
                    background-color: rgb(236 239 241 / var(--tw-bg-opacity));
                }

                .hover\:bg-blue-gray-500\/10:hover {
                    background-color: rgb(96 125 139 / 0.1);
                }

                .hover\:bg-brown-500\/10:hover {
                    background-color: rgb(121 85 72 / 0.1);
                }

                .hover\:bg-cyan-500\/10:hover {
                    background-color: rgb(0 188 212 / 0.1);
                }

                .hover\:bg-deep-orange-500\/10:hover {
                    background-color: rgb(255 87 34 / 0.1);
                }

                .hover\:bg-deep-purple-500\/10:hover {
                    background-color: rgb(103 58 183 / 0.1);
                }

                .hover\:bg-gray-900\/10:hover {
                    background-color: rgb(33 33 33 / 0.1);
                }

                .hover\:bg-green-500\/10:hover {
                    background-color: rgb(76 175 80 / 0.1);
                }

                .hover\:bg-indigo-500\/10:hover {
                    background-color: rgb(63 81 181 / 0.1);
                }

                .hover\:bg-light-blue-500\/10:hover {
                    background-color: rgb(3 169 244 / 0.1);
                }

                .hover\:bg-light-green-500\/10:hover {
                    background-color: rgb(139 195 74 / 0.1);
                }

                .hover\:bg-lime-500\/10:hover {
                    background-color: rgb(205 220 57 / 0.1);
                }

                .hover\:bg-orange-500\/10:hover {
                    background-color: rgb(255 152 0 / 0.1);
                }

                .hover\:bg-pink-500\/10:hover {
                    background-color: rgb(233 30 99 / 0.1);
                }

                .hover\:bg-purple-500\/10:hover {
                    background-color: rgb(156 39 176 / 0.1);
                }

                .hover\:bg-red-500\/10:hover {
                    background-color: rgb(244 67 54 / 0.1);
                }

                .hover\:bg-teal-500\/10:hover {
                    background-color: rgb(0 150 136 / 0.1);
                }

                .hover\:bg-transparent:hover {
                    background-color: transparent;
                }

                .hover\:bg-white\/10:hover {
                    background-color: rgb(255 255 255 / 0.1);
                }

                .hover\:bg-yellow-500\/10:hover {
                    background-color: rgb(255 235 59 / 0.1);
                }

                .hover\:bg-opacity-80:hover {
                    --tw-bg-opacity: 0.8;
                }

                .hover\:text-blue-500:hover {
                    --tw-text-opacity: 1;
                    color: rgb(33 150 243 / var(--tw-text-opacity));
                }

                .hover\:text-blue-gray-500:hover {
                    --tw-text-opacity: 1;
                    color: rgb(96 125 139 / var(--tw-text-opacity));
                }

                .hover\:text-blue-gray-900:hover {
                    --tw-text-opacity: 1;
                    color: rgb(38 50 56 / var(--tw-text-opacity));
                }

                .hover\:text-gray-900:hover {
                    --tw-text-opacity: 1;
                    color: rgb(33 33 33 / var(--tw-text-opacity));
                }

                .hover\:text-light-blue-500:hover {
                    --tw-text-opacity: 1;
                    color: rgb(3 169 244 / var(--tw-text-opacity));
                }

                .hover\:opacity-100:hover {
                    opacity: 1;
                }

                .hover\:opacity-75:hover {
                    opacity: 0.75;
                }

                .hover\:shadow-lg:hover {
                    --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
                    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                }

                .hover\:shadow-amber-500\/40:hover {
                    --tw-shadow-color: rgb(255 193 7 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-blue-500\/40:hover {
                    --tw-shadow-color: rgb(33 150 243 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-blue-gray-500\/20:hover {
                    --tw-shadow-color: rgb(96 125 139 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-blue-gray-500\/40:hover {
                    --tw-shadow-color: rgb(96 125 139 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-brown-500\/40:hover {
                    --tw-shadow-color: rgb(121 85 72 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-cyan-500\/40:hover {
                    --tw-shadow-color: rgb(0 188 212 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-deep-orange-500\/40:hover {
                    --tw-shadow-color: rgb(255 87 34 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-deep-purple-500\/40:hover {
                    --tw-shadow-color: rgb(103 58 183 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-gray-900\/20:hover {
                    --tw-shadow-color: rgb(33 33 33 / 0.2);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-green-500\/40:hover {
                    --tw-shadow-color: rgb(76 175 80 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-indigo-500\/40:hover {
                    --tw-shadow-color: rgb(63 81 181 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-light-blue-500\/40:hover {
                    --tw-shadow-color: rgb(3 169 244 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-light-green-500\/40:hover {
                    --tw-shadow-color: rgb(139 195 74 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-lime-500\/40:hover {
                    --tw-shadow-color: rgb(205 220 57 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-orange-500\/40:hover {
                    --tw-shadow-color: rgb(255 152 0 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-pink-500\/40:hover {
                    --tw-shadow-color: rgb(233 30 99 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-purple-500\/40:hover {
                    --tw-shadow-color: rgb(156 39 176 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-red-500\/40:hover {
                    --tw-shadow-color: rgb(244 67 54 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-teal-500\/40:hover {
                    --tw-shadow-color: rgb(0 150 136 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:shadow-yellow-500\/40:hover {
                    --tw-shadow-color: rgb(255 235 59 / 0.4);
                    --tw-shadow: var(--tw-shadow-colored);
                }

                .hover\:before\:opacity-10:hover::before {
                    content: var(--tw-content);
                    opacity: 0.1;
                }

                .focus\:scale-110:focus {
                    --tw-scale-x: 1.1;
                    --tw-scale-y: 1.1;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .focus\:border-2:focus {
                    border-width: 2px;
                }

                .focus\:border-amber-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(255 193 7 / var(--tw-border-opacity));
                }

                .focus\:border-black:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(0 0 0 / var(--tw-border-opacity));
                }

                .focus\:border-blue-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(33 150 243 / var(--tw-border-opacity));
                }

                .focus\:border-blue-gray-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(96 125 139 / var(--tw-border-opacity));
                }

                .focus\:border-blue-gray-900:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(38 50 56 / var(--tw-border-opacity));
                }

                .focus\:border-brown-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(121 85 72 / var(--tw-border-opacity));
                }

                .focus\:border-cyan-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(0 188 212 / var(--tw-border-opacity));
                }

                .focus\:border-deep-orange-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(255 87 34 / var(--tw-border-opacity));
                }

                .focus\:border-deep-purple-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(103 58 183 / var(--tw-border-opacity));
                }

                .focus\:border-gray-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(158 158 158 / var(--tw-border-opacity));
                }

                .focus\:border-gray-900:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(33 33 33 / var(--tw-border-opacity));
                }

                .focus\:border-green-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(76 175 80 / var(--tw-border-opacity));
                }

                .focus\:border-indigo-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(63 81 181 / var(--tw-border-opacity));
                }

                .focus\:border-light-blue-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(3 169 244 / var(--tw-border-opacity));
                }

                .focus\:border-light-green-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(139 195 74 / var(--tw-border-opacity));
                }

                .focus\:border-lime-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(205 220 57 / var(--tw-border-opacity));
                }

                .focus\:border-orange-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(255 152 0 / var(--tw-border-opacity));
                }

                .focus\:border-pink-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(233 30 99 / var(--tw-border-opacity));
                }

                .focus\:border-purple-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(156 39 176 / var(--tw-border-opacity));
                }

                .focus\:border-red-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(244 67 54 / var(--tw-border-opacity));
                }

                .focus\:border-teal-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(0 150 136 / var(--tw-border-opacity));
                }

                .focus\:border-white:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(255 255 255 / var(--tw-border-opacity));
                }

                .focus\:border-yellow-500:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(255 235 59 / var(--tw-border-opacity));
                }

                .focus\:\!border-t-gray-900:focus {
                    --tw-border-opacity: 1 !important;
                    border-top-color: rgb(33 33 33 / var(--tw-border-opacity)) !important;
                }

                .focus\:border-t-transparent:focus {
                    border-top-color: transparent;
                }

                .focus\:bg-blue-gray-50:focus {
                    --tw-bg-opacity: 1;
                    background-color: rgb(236 239 241 / var(--tw-bg-opacity));
                }

                .focus\:bg-transparent:focus {
                    background-color: transparent;
                }

                .focus\:bg-opacity-80:focus {
                    --tw-bg-opacity: 0.8;
                }

                .focus\:text-blue-gray-500:focus {
                    --tw-text-opacity: 1;
                    color: rgb(96 125 139 / var(--tw-text-opacity));
                }

                .focus\:text-blue-gray-900:focus {
                    --tw-text-opacity: 1;
                    color: rgb(38 50 56 / var(--tw-text-opacity));
                }

                .focus\:opacity-\[0\.85\]:focus {
                    opacity: 0.85;
                }

                .focus\:shadow-none:focus {
                    --tw-shadow: 0 0 rgb(0, 0 / 0, 0);
                    --tw-shadow-colored: 0 0 var(--tw-shadow-color);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                }

                .focus\:outline-none:focus {
                    outline: 2px solid transparent;
                    outline-offset: 2px;
                }

                .focus\:outline-0:focus {
                    outline-width: 0px;
                }

                .focus\:ring:focus {
                    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
                }

                .focus\:ring-amber-200:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 224 130 / var(--tw-ring-opacity));
                }

                .focus\:ring-blue-200:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(144 202 249 / var(--tw-ring-opacity));
                }

                .focus\:ring-blue-gray-200:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(176 190 197 / var(--tw-ring-opacity));
                }

                .focus\:ring-brown-200:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(188 170 164 / var(--tw-ring-opacity));
                }

                .focus\:ring-cyan-200:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(128 222 234 / var(--tw-ring-opacity));
                }

                .focus\:ring-deep-orange-200:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 171 145 / var(--tw-ring-opacity));
                }

                .focus\:ring-deep-purple-200:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(179 157 219 / var(--tw-ring-opacity));
                }

                .focus\:ring-gray-300:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(224 224 224 / var(--tw-ring-opacity));
                }

                .focus\:ring-green-200:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(165 214 167 / var(--tw-ring-opacity));
                }

                .focus\:ring-indigo-200:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(159 168 218 / var(--tw-ring-opacity));
                }

                .focus\:ring-light-blue-200:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(129 212 250 / var(--tw-ring-opacity));
                }

                .focus\:ring-light-green-200:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(197 225 165 / var(--tw-ring-opacity));
                }

                .focus\:ring-lime-200:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(230 238 156 / var(--tw-ring-opacity));
                }

                .focus\:ring-orange-200:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 204 128 / var(--tw-ring-opacity));
                }

                .focus\:ring-pink-200:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(244 143 177 / var(--tw-ring-opacity));
                }

                .focus\:ring-purple-200:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(206 147 216 / var(--tw-ring-opacity));
                }

                .focus\:ring-red-200:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(239 154 154 / var(--tw-ring-opacity));
                }

                .focus\:ring-teal-200:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(128 203 196 / var(--tw-ring-opacity));
                }

                .focus\:ring-white\/50:focus {
                    --tw-ring-color: rgb(255 255 255 / 0.5);
                }

                .focus\:ring-yellow-200:focus {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 245 157 / var(--tw-ring-opacity));
                }

                .active\:scale-100:active {
                    --tw-scale-x: 1;
                    --tw-scale-y: 1;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .active\:bg-amber-500\/30:active {
                    background-color: rgb(255 193 7 / 0.3);
                }

                .active\:bg-blue-500\/30:active {
                    background-color: rgb(33 150 243 / 0.3);
                }

                .active\:bg-blue-gray-50:active {
                    --tw-bg-opacity: 1;
                    background-color: rgb(236 239 241 / var(--tw-bg-opacity));
                }

                .active\:bg-blue-gray-500\/30:active {
                    background-color: rgb(96 125 139 / 0.3);
                }

                .active\:bg-brown-500\/30:active {
                    background-color: rgb(121 85 72 / 0.3);
                }

                .active\:bg-cyan-500\/30:active {
                    background-color: rgb(0 188 212 / 0.3);
                }

                .active\:bg-deep-orange-500\/30:active {
                    background-color: rgb(255 87 34 / 0.3);
                }

                .active\:bg-deep-purple-500\/30:active {
                    background-color: rgb(103 58 183 / 0.3);
                }

                .active\:bg-gray-900\/20:active {
                    background-color: rgb(33 33 33 / 0.2);
                }

                .active\:bg-green-500\/30:active {
                    background-color: rgb(76 175 80 / 0.3);
                }

                .active\:bg-indigo-500\/30:active {
                    background-color: rgb(63 81 181 / 0.3);
                }

                .active\:bg-light-blue-500\/30:active {
                    background-color: rgb(3 169 244 / 0.3);
                }

                .active\:bg-light-green-500\/30:active {
                    background-color: rgb(139 195 74 / 0.3);
                }

                .active\:bg-lime-500\/30:active {
                    background-color: rgb(205 220 57 / 0.3);
                }

                .active\:bg-orange-500\/30:active {
                    background-color: rgb(255 152 0 / 0.3);
                }

                .active\:bg-pink-500\/30:active {
                    background-color: rgb(233 30 99 / 0.3);
                }

                .active\:bg-purple-500\/30:active {
                    background-color: rgb(156 39 176 / 0.3);
                }

                .active\:bg-red-500\/30:active {
                    background-color: rgb(244 67 54 / 0.3);
                }

                .active\:bg-teal-500\/30:active {
                    background-color: rgb(0 150 136 / 0.3);
                }

                .active\:bg-transparent:active {
                    background-color: transparent;
                }

                .active\:bg-white\/30:active {
                    background-color: rgb(255 255 255 / 0.3);
                }

                .active\:bg-yellow-500\/30:active {
                    background-color: rgb(255 235 59 / 0.3);
                }

                .active\:bg-opacity-80:active {
                    --tw-bg-opacity: 0.8;
                }

                .active\:text-blue-gray-500:active {
                    --tw-text-opacity: 1;
                    color: rgb(96 125 139 / var(--tw-text-opacity));
                }

                .active\:text-blue-gray-900:active {
                    --tw-text-opacity: 1;
                    color: rgb(38 50 56 / var(--tw-text-opacity));
                }

                .active\:opacity-\[0\.85\]:active {
                    opacity: 0.85;
                }

                .active\:shadow-none:active {
                    --tw-shadow: 0 0 rgb(0, 0 / 0, 0);
                    --tw-shadow-colored: 0 0 var(--tw-shadow-color);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                }

                .disabled\:pointer-events-none:disabled {
                    pointer-events: none;
                }

                .disabled\:resize-none:disabled {
                    resize: none;
                }

                .disabled\:border-0:disabled {
                    border-width: 0px;
                }

                .disabled\:bg-blue-gray-50:disabled {
                    --tw-bg-opacity: 1;
                    background-color: rgb(236 239 241 / var(--tw-bg-opacity));
                }

                .disabled\:opacity-50:disabled {
                    opacity: 0.5;
                }

                .disabled\:shadow-none:disabled {
                    --tw-shadow: 0 0 rgb(0, 0 / 0, 0);
                    --tw-shadow-colored: 0 0 var(--tw-shadow-color);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                }

                .peer:checked~.peer-checked\:translate-x-full {
                    --tw-translate-x: 100%;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .peer:checked~.peer-checked\:border-amber-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(255 193 7 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:border-blue-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(33 150 243 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:border-blue-gray-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(96 125 139 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:border-brown-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(121 85 72 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:border-cyan-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(0 188 212 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:border-deep-orange-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(255 87 34 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:border-deep-purple-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(103 58 183 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:border-gray-900 {
                    --tw-border-opacity: 1;
                    border-color: rgb(33 33 33 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:border-green-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(76 175 80 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:border-indigo-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(63 81 181 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:border-light-blue-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(3 169 244 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:border-light-green-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(139 195 74 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:border-lime-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(205 220 57 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:border-orange-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(255 152 0 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:border-pink-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(233 30 99 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:border-purple-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(156 39 176 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:border-red-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(244 67 54 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:border-teal-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(0 150 136 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:border-yellow-500 {
                    --tw-border-opacity: 1;
                    border-color: rgb(255 235 59 / var(--tw-border-opacity));
                }

                .peer:checked~.peer-checked\:opacity-100 {
                    opacity: 1;
                }

                .peer:checked~.peer-checked\:before\:bg-amber-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 193 7 / var(--tw-bg-opacity));
                }

                .peer:checked~.peer-checked\:before\:bg-blue-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(33 150 243 / var(--tw-bg-opacity));
                }

                .peer:checked~.peer-checked\:before\:bg-blue-gray-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(96 125 139 / var(--tw-bg-opacity));
                }

                .peer:checked~.peer-checked\:before\:bg-brown-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(121 85 72 / var(--tw-bg-opacity));
                }

                .peer:checked~.peer-checked\:before\:bg-cyan-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 188 212 / var(--tw-bg-opacity));
                }

                .peer:checked~.peer-checked\:before\:bg-deep-orange-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 87 34 / var(--tw-bg-opacity));
                }

                .peer:checked~.peer-checked\:before\:bg-deep-purple-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(103 58 183 / var(--tw-bg-opacity));
                }

                .peer:checked~.peer-checked\:before\:bg-gray-900::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(33 33 33 / var(--tw-bg-opacity));
                }

                .peer:checked~.peer-checked\:before\:bg-green-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(76 175 80 / var(--tw-bg-opacity));
                }

                .peer:checked~.peer-checked\:before\:bg-indigo-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(63 81 181 / var(--tw-bg-opacity));
                }

                .peer:checked~.peer-checked\:before\:bg-light-blue-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(3 169 244 / var(--tw-bg-opacity));
                }

                .peer:checked~.peer-checked\:before\:bg-light-green-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(139 195 74 / var(--tw-bg-opacity));
                }

                .peer:checked~.peer-checked\:before\:bg-lime-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(205 220 57 / var(--tw-bg-opacity));
                }

                .peer:checked~.peer-checked\:before\:bg-orange-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 152 0 / var(--tw-bg-opacity));
                }

                .peer:checked~.peer-checked\:before\:bg-pink-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(233 30 99 / var(--tw-bg-opacity));
                }

                .peer:checked~.peer-checked\:before\:bg-purple-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(156 39 176 / var(--tw-bg-opacity));
                }

                .peer:checked~.peer-checked\:before\:bg-red-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(244 67 54 / var(--tw-bg-opacity));
                }

                .peer:checked~.peer-checked\:before\:bg-teal-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 150 136 / var(--tw-bg-opacity));
                }

                .peer:checked~.peer-checked\:before\:bg-yellow-500::before {
                    content: var(--tw-content);
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 235 59 / var(--tw-bg-opacity));
                }

                .peer:-moz-placeholder-shown~.peer-placeholder-shown\:text-sm {
                    font-size: 0.875rem;
                    line-height: 1.25rem;
                }

                .peer:placeholder-shown~.peer-placeholder-shown\:text-sm {
                    font-size: 0.875rem;
                    line-height: 1.25rem;
                }

                .peer:-moz-placeholder-shown~.peer-placeholder-shown\:leading-\[3\.75\] {
                    line-height: 3.75;
                }

                .peer:placeholder-shown~.peer-placeholder-shown\:leading-\[3\.75\] {
                    line-height: 3.75;
                }

                .peer:-moz-placeholder-shown~.peer-placeholder-shown\:leading-\[4\.1\] {
                    line-height: 4.1;
                }

                .peer:placeholder-shown~.peer-placeholder-shown\:leading-\[4\.1\] {
                    line-height: 4.1;
                }

                .peer:-moz-placeholder-shown~.peer-placeholder-shown\:leading-\[4\.25\] {
                    line-height: 4.25;
                }

                .peer:placeholder-shown~.peer-placeholder-shown\:leading-\[4\.25\] {
                    line-height: 4.25;
                }

                .peer:-moz-placeholder-shown~.peer-placeholder-shown\:leading-\[4\.875\] {
                    line-height: 4.875;
                }

                .peer:placeholder-shown~.peer-placeholder-shown\:leading-\[4\.875\] {
                    line-height: 4.875;
                }

                .peer:-moz-placeholder-shown~.peer-placeholder-shown\:leading-tight {
                    line-height: 1.25;
                }

                .peer:placeholder-shown~.peer-placeholder-shown\:leading-tight {
                    line-height: 1.25;
                }

                .peer:-moz-placeholder-shown~.peer-placeholder-shown\:text-blue-gray-500 {
                    --tw-text-opacity: 1;
                    color: rgb(96 125 139 / var(--tw-text-opacity));
                }

                .peer:placeholder-shown~.peer-placeholder-shown\:text-blue-gray-500 {
                    --tw-text-opacity: 1;
                    color: rgb(96 125 139 / var(--tw-text-opacity));
                }

                .peer:-moz-placeholder-shown~.peer-placeholder-shown\:text-green-500 {
                    --tw-text-opacity: 1;
                    color: rgb(76 175 80 / var(--tw-text-opacity));
                }

                .peer:placeholder-shown~.peer-placeholder-shown\:text-green-500 {
                    --tw-text-opacity: 1;
                    color: rgb(76 175 80 / var(--tw-text-opacity));
                }

                .peer:-moz-placeholder-shown~.peer-placeholder-shown\:text-red-500 {
                    --tw-text-opacity: 1;
                    color: rgb(244 67 54 / var(--tw-text-opacity));
                }

                .peer:placeholder-shown~.peer-placeholder-shown\:text-red-500 {
                    --tw-text-opacity: 1;
                    color: rgb(244 67 54 / var(--tw-text-opacity));
                }

                .peer:-moz-placeholder-shown~.peer-placeholder-shown\:before\:border-transparent::before {
                    content: var(--tw-content);
                    border-color: transparent;
                }

                .peer:placeholder-shown~.peer-placeholder-shown\:before\:border-transparent::before {
                    content: var(--tw-content);
                    border-color: transparent;
                }

                .peer:-moz-placeholder-shown~.peer-placeholder-shown\:after\:border-transparent::after {
                    content: var(--tw-content);
                    border-color: transparent;
                }

                .peer:placeholder-shown~.peer-placeholder-shown\:after\:border-transparent::after {
                    content: var(--tw-content);
                    border-color: transparent;
                }

                .peer:focus~.peer-focus\:text-\[11px\] {
                    font-size: 11px;
                }

                .peer:focus~.peer-focus\:text-sm {
                    font-size: 0.875rem;
                    line-height: 1.25rem;
                }

                .peer:focus~.peer-focus\:leading-tight {
                    line-height: 1.25;
                }

                .peer:focus~.peer-focus\:text-amber-500 {
                    --tw-text-opacity: 1;
                    color: rgb(255 193 7 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-black {
                    --tw-text-opacity: 1;
                    color: rgb(0 0 0 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-blue-500 {
                    --tw-text-opacity: 1;
                    color: rgb(33 150 243 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-blue-gray-500 {
                    --tw-text-opacity: 1;
                    color: rgb(96 125 139 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-brown-500 {
                    --tw-text-opacity: 1;
                    color: rgb(121 85 72 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-cyan-500 {
                    --tw-text-opacity: 1;
                    color: rgb(0 188 212 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-deep-orange-500 {
                    --tw-text-opacity: 1;
                    color: rgb(255 87 34 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-deep-purple-500 {
                    --tw-text-opacity: 1;
                    color: rgb(103 58 183 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-gray-900 {
                    --tw-text-opacity: 1;
                    color: rgb(33 33 33 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-green-500 {
                    --tw-text-opacity: 1;
                    color: rgb(76 175 80 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-indigo-500 {
                    --tw-text-opacity: 1;
                    color: rgb(63 81 181 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-light-blue-500 {
                    --tw-text-opacity: 1;
                    color: rgb(3 169 244 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-light-green-500 {
                    --tw-text-opacity: 1;
                    color: rgb(139 195 74 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-lime-500 {
                    --tw-text-opacity: 1;
                    color: rgb(205 220 57 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-orange-500 {
                    --tw-text-opacity: 1;
                    color: rgb(255 152 0 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-pink-500 {
                    --tw-text-opacity: 1;
                    color: rgb(233 30 99 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-purple-500 {
                    --tw-text-opacity: 1;
                    color: rgb(156 39 176 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-red-500 {
                    --tw-text-opacity: 1;
                    color: rgb(244 67 54 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-teal-500 {
                    --tw-text-opacity: 1;
                    color: rgb(0 150 136 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-white {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:text-yellow-500 {
                    --tw-text-opacity: 1;
                    color: rgb(255 235 59 / var(--tw-text-opacity));
                }

                .peer:focus~.peer-focus\:before\:border-l-2::before {
                    content: var(--tw-content);
                    border-left-width: 2px;
                }

                .peer:focus~.peer-focus\:before\:border-t-2::before {
                    content: var(--tw-content);
                    border-top-width: 2px;
                }

                .peer:focus~.peer-focus\:before\:\!border-amber-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(255 193 7 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-black::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(0 0 0 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-blue-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(33 150 243 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-blue-gray-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(96 125 139 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-brown-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(121 85 72 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-cyan-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(0 188 212 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-deep-orange-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(255 87 34 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-deep-purple-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(103 58 183 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-gray-900::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(33 33 33 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-green-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(76 175 80 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-indigo-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(63 81 181 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-light-blue-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(3 169 244 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-light-green-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(139 195 74 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-lime-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(205 220 57 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-orange-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(255 152 0 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-pink-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(233 30 99 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-purple-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(156 39 176 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-red-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(244 67 54 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-teal-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(0 150 136 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-white::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(255 255 255 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:\!border-yellow-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(255 235 59 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:before\:border-green-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(76 175 80 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:before\:border-red-500::before {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(244 67 54 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:scale-x-100::after {
                    content: var(--tw-content);
                    --tw-scale-x: 1;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                .peer:focus~.peer-focus\:after\:border-r-2::after {
                    content: var(--tw-content);
                    border-right-width: 2px;
                }

                .peer:focus~.peer-focus\:after\:border-t-2::after {
                    content: var(--tw-content);
                    border-top-width: 2px;
                }

                .peer:focus~.peer-focus\:after\:\!border-amber-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(255 193 7 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-black::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(0 0 0 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-blue-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(33 150 243 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-blue-gray-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(96 125 139 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-brown-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(121 85 72 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-cyan-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(0 188 212 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-deep-orange-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(255 87 34 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-deep-purple-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(103 58 183 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-gray-900::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(33 33 33 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-green-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(76 175 80 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-indigo-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(63 81 181 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-light-blue-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(3 169 244 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-light-green-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(139 195 74 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-lime-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(205 220 57 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-orange-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(255 152 0 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-pink-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(233 30 99 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-purple-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(156 39 176 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-red-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(244 67 54 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-teal-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(0 150 136 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-white::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(255 255 255 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:\!border-yellow-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1 !important;
                    border-color: rgb(255 235 59 / var(--tw-border-opacity)) !important;
                }

                .peer:focus~.peer-focus\:after\:border-amber-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(255 193 7 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-black::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(0 0 0 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-blue-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(33 150 243 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-blue-gray-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(96 125 139 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-brown-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(121 85 72 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-cyan-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(0 188 212 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-deep-orange-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(255 87 34 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-deep-purple-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(103 58 183 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-gray-900::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(33 33 33 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-green-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(76 175 80 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-indigo-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(63 81 181 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-light-blue-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(3 169 244 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-light-green-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(139 195 74 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-lime-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(205 220 57 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-orange-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(255 152 0 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-pink-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(233 30 99 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-purple-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(156 39 176 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-red-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(244 67 54 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-teal-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(0 150 136 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-white::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(255 255 255 / var(--tw-border-opacity));
                }

                .peer:focus~.peer-focus\:after\:border-yellow-500::after {
                    content: var(--tw-content);
                    --tw-border-opacity: 1;
                    border-color: rgb(255 235 59 / var(--tw-border-opacity));
                }

                .peer:disabled~.peer-disabled\:text-blue-gray-400 {
                    --tw-text-opacity: 1;
                    color: rgb(120 144 156 / var(--tw-text-opacity));
                }

                .peer:disabled~.peer-disabled\:text-transparent {
                    color: transparent;
                }

                .peer:disabled~.peer-disabled\:before\:border-transparent::before {
                    content: var(--tw-content);
                    border-color: transparent;
                }

                .peer:disabled~.peer-disabled\:after\:border-transparent::after {
                    content: var(--tw-content);
                    border-color: transparent;
                }

                .peer:disabled:-moz-placeholder-shown~.peer-disabled\:peer-placeholder-shown\:text-blue-gray-500 {
                    --tw-text-opacity: 1;
                    color: rgb(96 125 139 / var(--tw-text-opacity));
                }

                .peer:disabled:placeholder-shown~.peer-disabled\:peer-placeholder-shown\:text-blue-gray-500 {
                    --tw-text-opacity: 1;
                    color: rgb(96 125 139 / var(--tw-text-opacity));
                }

                @media (min-width: 720px) {

                    .md\:mr-4 {
                        margin-right: 1rem;
                    }

                    .md\:w-2\/3 {
                        width: 66.666667%;
                    }

                    .md\:w-3\/4 {
                        width: 75%;
                    }

                    .md\:w-3\/5 {
                        width: 60%;
                    }

                    .md\:w-5\/6 {
                        width: 83.333333%;
                    }

                    .md\:w-56 {
                        width: 14rem;
                    }

                    .md\:min-w-\[60\%\] {
                        min-width: 60%;
                    }

                    .md\:min-w-\[66\.666667\%\] {
                        min-width: 66.666667%;
                    }

                    .md\:min-w-\[75\%\] {
                        min-width: 75%;
                    }

                    .md\:min-w-\[83\.333333\%\] {
                        min-width: 83.333333%;
                    }

                    .md\:max-w-\[60\%\] {
                        max-width: 60%;
                    }

                    .md\:max-w-\[66\.666667\%\] {
                        max-width: 66.666667%;
                    }

                    .md\:max-w-\[75\%\] {
                        max-width: 75%;
                    }

                    .md\:max-w-\[83\.333333\%\] {
                        max-width: 83.333333%;
                    }

                    .md\:grid-cols-2 {
                        grid-template-columns: repeat(2, minmax(0, 1fr));
                    }

                    .md\:flex-row {
                        flex-direction: row;
                    }

                    .md\:items-center {
                        align-items: center;
                    }

                    .md\:justify-between {
                        justify-content: space-between;
                    }
                }

                @media (min-width: 960px) {

                    .lg\:mx-4 {
                        margin-left: 1rem;
                        margin-right: 1rem;
                    }

                    .lg\:mb-0 {
                        margin-bottom: 0px;
                    }

                    .lg\:mt-0 {
                        margin-top: 0px;
                    }

                    .lg\:block {
                        display: block;
                    }

                    .lg\:inline-block {
                        display: inline-block;
                    }

                    .lg\:hidden {
                        display: none;
                    }

                    .lg\:w-1\/2 {
                        width: 50%;
                    }

                    .lg\:w-2\/4 {
                        width: 50%;
                    }

                    .lg\:w-2\/5 {
                        width: 40%;
                    }

                    .lg\:w-3\/4 {
                        width: 75%;
                    }

                    .lg\:w-3\/5 {
                        width: 60%;
                    }

                    .lg\:min-w-\[40\%\] {
                        min-width: 40%;
                    }

                    .lg\:min-w-\[50\%\] {
                        min-width: 50%;
                    }

                    .lg\:min-w-\[60\%\] {
                        min-width: 60%;
                    }

                    .lg\:min-w-\[75\%\] {
                        min-width: 75%;
                    }

                    .lg\:max-w-\[40\%\] {
                        max-width: 40%;
                    }

                    .lg\:max-w-\[50\%\] {
                        max-width: 50%;
                    }

                    .lg\:max-w-\[60\%\] {
                        max-width: 60%;
                    }

                    .lg\:max-w-\[75\%\] {
                        max-width: 75%;
                    }

                    .lg\:grid-cols-2 {
                        grid-template-columns: repeat(2, minmax(0, 1fr));
                    }

                    .lg\:flex-row {
                        flex-direction: row;
                    }

                    .lg\:items-center {
                        align-items: center;
                    }

                    .lg\:gap-6 {
                        gap: 1.5rem;
                    }
                }

                @media (min-width: 1140px) {

                    .xl\:col-span-2 {
                        grid-column: span 2 / span 2;
                    }

                    .xl\:ml-80 {
                        margin-left: 20rem;
                    }

                    .xl\:flex {
                        display: flex;
                    }

                    .xl\:hidden {
                        display: none;
                    }

                    .xl\:h-40 {
                        height: 10rem;
                    }

                    .xl\:translate-x-0 {
                        --tw-translate-x: 0px;
                        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                    }

                    .xl\:grid-cols-3 {
                        grid-template-columns: repeat(3, minmax(0, 1fr));
                    }

                    .xl\:grid-cols-4 {
                        grid-template-columns: repeat(4, minmax(0, 1fr));
                    }
                }

                @media (min-width: 1320px) {

                    .\32xl\:w-1\/3 {
                        width: 33.333333%;
                    }

                    .\32xl\:w-1\/4 {
                        width: 25%;
                    }

                    .\32xl\:w-2\/5 {
                        width: 40%;
                    }

                    .\32xl\:w-3\/4 {
                        width: 75%;
                    }

                    .\32xl\:w-3\/5 {
                        width: 60%;
                    }

                    .\32xl\:min-w-\[25\%\] {
                        min-width: 25%;
                    }

                    .\32xl\:min-w-\[33\.333333\%\] {
                        min-width: 33.333333%;
                    }

                    .\32xl\:min-w-\[40\%\] {
                        min-width: 40%;
                    }

                    .\32xl\:min-w-\[60\%\] {
                        min-width: 60%;
                    }

                    .\32xl\:min-w-\[75\%\] {
                        min-width: 75%;
                    }

                    .\32xl\:max-w-\[25\%\] {
                        max-width: 25%;
                    }

                    .\32xl\:max-w-\[33\.333333\%\] {
                        max-width: 33.333333%;
                    }

                    .\32xl\:max-w-\[40\%\] {
                        max-width: 40%;
                    }

                    .\32xl\:max-w-\[60\%\] {
                        max-width: 60%;
                    }

                    .\32xl\:max-w-\[75\%\] {
                        max-width: 75%;
                    }
                }

                .\[\&\:\:-moz-range-thumb\]\:relative::-moz-range-thumb {
                    position: relative;
                }

                .\[\&\:\:-moz-range-thumb\]\:z-20::-moz-range-thumb {
                    z-index: 20;
                }

                .\[\&\:\:-moz-range-thumb\]\:-mt-1::-moz-range-thumb {
                    margin-top: -0.25rem;
                }

                .\[\&\:\:-moz-range-thumb\]\:-mt-\[3px\]::-moz-range-thumb {
                    margin-top: -3px;
                }

                .\[\&\:\:-moz-range-thumb\]\:h-2\.5::-moz-range-thumb {
                    height: 0.625rem;
                }

                .\[\&\:\:-moz-range-thumb\]\:h-3\.5::-moz-range-thumb {
                    height: 0.875rem;
                }

                .\[\&\:\:-moz-range-thumb\]\:h-5::-moz-range-thumb {
                    height: 1.25rem;
                }

                .\[\&\:\:-moz-range-thumb\]\:w-2\.5::-moz-range-thumb {
                    width: 0.625rem;
                }

                .\[\&\:\:-moz-range-thumb\]\:w-3\.5::-moz-range-thumb {
                    width: 0.875rem;
                }

                .\[\&\:\:-moz-range-thumb\]\:w-5::-moz-range-thumb {
                    width: 1.25rem;
                }

                .\[\&\:\:-moz-range-thumb\]\:appearance-none::-moz-range-thumb {
                    -moz-appearance: none;
                    appearance: none;
                }

                .\[\&\:\:-moz-range-thumb\]\:rounded-full::-moz-range-thumb {
                    border-radius: 9999px;
                }

                .\[\&\:\:-moz-range-thumb\]\:border-0::-moz-range-thumb {
                    border-width: 0px;
                }

                .\[\&\:\:-moz-range-thumb\]\:bg-white::-moz-range-thumb {
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 255 255 / var(--tw-bg-opacity));
                }

                .\[\&\:\:-moz-range-thumb\]\:ring-2::-moz-range-thumb {
                    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
                }

                .\[\&\:\:-moz-range-thumb\]\:ring-current::-moz-range-thumb {
                    --tw-ring-color: currentColor;
                }

                .\[\&\:\:-moz-range-thumb\]\:\[-webkit-appearance\:none\]::-moz-range-thumb {
                    -webkit-appearance: none;
                }

                .\[\&\:\:-moz-range-track\]\:h-full::-moz-range-track {
                    height: 100%;
                }

                .\[\&\:\:-moz-range-track\]\:rounded-full::-moz-range-track {
                    border-radius: 9999px;
                }

                .\[\&\:\:-moz-range-track\]\:bg-blue-gray-100::-moz-range-track {
                    --tw-bg-opacity: 1;
                    background-color: rgb(207 216 220 / var(--tw-bg-opacity));
                }

                .\[\&\:\:-webkit-slider-runnable-track\]\:h-full::-webkit-slider-runnable-track {
                    height: 100%;
                }

                .\[\&\:\:-webkit-slider-runnable-track\]\:rounded-full::-webkit-slider-runnable-track {
                    border-radius: 9999px;
                }

                .\[\&\:\:-webkit-slider-runnable-track\]\:bg-blue-gray-100::-webkit-slider-runnable-track {
                    --tw-bg-opacity: 1;
                    background-color: rgb(207 216 220 / var(--tw-bg-opacity));
                }

                .\[\&\:\:-webkit-slider-thumb\]\:relative::-webkit-slider-thumb {
                    position: relative;
                }

                .\[\&\:\:-webkit-slider-thumb\]\:z-20::-webkit-slider-thumb {
                    z-index: 20;
                }

                .\[\&\:\:-webkit-slider-thumb\]\:-mt-1::-webkit-slider-thumb {
                    margin-top: -0.25rem;
                }

                .\[\&\:\:-webkit-slider-thumb\]\:-mt-\[3px\]::-webkit-slider-thumb {
                    margin-top: -3px;
                }

                .\[\&\:\:-webkit-slider-thumb\]\:h-2\.5::-webkit-slider-thumb {
                    height: 0.625rem;
                }

                .\[\&\:\:-webkit-slider-thumb\]\:h-3\.5::-webkit-slider-thumb {
                    height: 0.875rem;
                }

                .\[\&\:\:-webkit-slider-thumb\]\:h-5::-webkit-slider-thumb {
                    height: 1.25rem;
                }

                .\[\&\:\:-webkit-slider-thumb\]\:w-2\.5::-webkit-slider-thumb {
                    width: 0.625rem;
                }

                .\[\&\:\:-webkit-slider-thumb\]\:w-3\.5::-webkit-slider-thumb {
                    width: 0.875rem;
                }

                .\[\&\:\:-webkit-slider-thumb\]\:w-5::-webkit-slider-thumb {
                    width: 1.25rem;
                }

                .\[\&\:\:-webkit-slider-thumb\]\:appearance-none::-webkit-slider-thumb {
                    -webkit-appearance: none;
                    appearance: none;
                }

                .\[\&\:\:-webkit-slider-thumb\]\:rounded-full::-webkit-slider-thumb {
                    border-radius: 9999px;
                }

                .\[\&\:\:-webkit-slider-thumb\]\:border-0::-webkit-slider-thumb {
                    border-width: 0px;
                }

                .\[\&\:\:-webkit-slider-thumb\]\:bg-white::-webkit-slider-thumb {
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 255 255 / var(--tw-bg-opacity));
                }

                .\[\&\:\:-webkit-slider-thumb\]\:ring-2::-webkit-slider-thumb {
                    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
                }

                .\[\&\:\:-webkit-slider-thumb\]\:ring-current::-webkit-slider-thumb {
                    --tw-ring-color: currentColor;
                }

                .\[\&\:\:-webkit-slider-thumb\]\:\[-webkit-appearance\:none\]::-webkit-slider-thumb {
                    -webkit-appearance: none;
                }
            </style>



</nav>
