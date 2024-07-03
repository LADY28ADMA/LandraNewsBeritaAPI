<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
            rel="stylesheet"
        />
        <script
            defer
            src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"
        ></script>
        <style>
            * {
                font-family: "Montserrat", sans-serif;
                font-optical-sizing: auto;
            }
            
        </style>
    </head>
    <body>
        <nav
            id="navbar"
            class="fixed top-0 left-0 w-full bg-transparent px-4 py-3 transition duration-300"
            style="z-index: 999999"
        >
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <a href="{{ url('/') }}" class="relative block">
                        <img
                            src="{{ asset('images/ivos.webp') }}"
                            alt="ivos logo"
                            class="w-16 h-16 rounded-full hover:opacity-75 object-contain bg-transparent"
                        />
                    </a>
                </div>
                <div class="itemr flex items-center gap-2">
                    <div class="spshoces relative">
                        <img src="{{ asset('images/sooon.png') }}" class="absolute w-6 h-6 object-contain z-20" alt="Coming Soon" style="left: 40%;" />
                        <span id="showcaseLink" class="m-0 hover:text-red-500 text-gray-400 opacity-50 leading-tight drop-shadow-sm relative z-10">
                            <a id="showcaseAnchor" style="color: inherit; text-decoration: inherit; font-weight: 600; font-size: .875rem;" href="{{ url('/feed') }}" onclick="return checkDate()">Showcase</a>
                        </span>
                    </div>
                
                
                @if(Auth::check())
                <!-- Jika sudah login -->
                <div
                    x-data="{ open: false }"
                    @mouseover="open = true"
                    @mouseleave="open = false"
                >
                    <button
                        type="button"
                        class="h-12 w-12 overflow-hidden rounded-full"
                    >
                        <img
                            src="{{ Auth::user()->profilePhoto ? Auth::user()->profilePhoto : asset('images/ivos-avatar.webp') }}"
                            alt="profile user ivos"
                            class="h-12 w-12 rounded-full object-cover"
                        />
                    </button>

                    <!-- dropdown profile -->
                    <div
                        class="absolute right-2 top-full mt-1 w-48 divide-y divide-gray-200 rounded-md border border-gray-200 bg-white shadow-md"
                        x-show="open"
                        @click.outside="open = false"
                        x-transition
                    >
                        <div class="flex items-center space-x-2 p-2">
                            <img
                                src="{{ Auth::user()->profilePhoto ? Auth::user()->profilePhoto : asset('images/ivos-avatar.webp') }}"
                                alt="profile user ivos"
                                class="h-10 w-10 rounded-full object-cover"
                            />
                            <div
                                class="font-medium"
                                style="
                                    overflow: hidden;
                                    white-space: nowrap;
                                    text-overflow: ellipsis;
                                    max-width: 50px;
                                "
                            >
                                {{ ucwords(strtolower(Auth::user()->fullName)) }}
                            </div>
                        </div>

                        <div class="flex flex-col space-y-3 p-2">
                            <a
                                href="{{ url('/dashboard') }}"
                                class="transition hover:text-red-600"
                                >My Profile</a
                            >
                            <a href="#" class="transition hover:text-red-600"
                                >Privacy Policy</a
                            >
                        </div>

                        <div class="p-2">
                            <button
                                class="flex items-center space-x-2 transition hover:text-red-600"
                            >
                                <form
                                    action="{{ route('logout') }}"
                                    method="post"
                                >
                                    @csrf
                                    <button
                                        type="submit"
                                        class="flex items-center justify-center rounded-md p-1 w-1/4 transition ease-in duration-200 uppercase bg-red-500 hover:bg-gray-800 text-white hover:text-white focus:outline-none"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-logout"
                                        >
                                            <path
                                                stroke="none"
                                                d="M0 0h24v24H0z"
                                                fill="none"
                                            />
                                            <path
                                                d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"
                                            />
                                            <path d="M9 12h12l-3 -3" />
                                            <path d="M18 15l3 -3" />
                                        </svg>
                                    </button>
                                </form>
                            </button>
                        </div>
                    </div>
                </div>

                @else
                <!-- Jika belum login -->
                <a href="{{ url('/registrasi') }}"
                    ><button class="bn632-hover bn27">Join</button></a
                >
                <link rel="stylesheet" href="{{ asset('css/homee.css') }}" />
                @endif
            </div>
            </div>
        </nav>
        <script src="{{ asset('js/logicfeed.js') }}"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>
    </body>
</html>
