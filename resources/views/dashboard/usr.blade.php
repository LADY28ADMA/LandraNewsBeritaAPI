<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard - Ivos</title>
        @vite('resources/css/app.css')

        <!-- @notifyCss -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" /> -->
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="{{ asset('css/fomreg.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/carduser.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/homee.css') }}" />
        <link
            rel="shortcut icon"
            href="{{ asset('images/ivos.webp') }}"
            type="image/x-icon"
        />
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        <!-- @notifyCss -->
    </head>
    <style>
        body {
            background-color: #fff;
        }
        h2 {
            font-size: clamp(18px, (2.5vw), 28px);
            font-weight: 600;
        }
        @media (max-width: 640px) {
            .sideleft {
                width: 70%;
            }
        }
    </style>
    <body
        class="w-full min-h-dvh flex flex-col items-center max-sm:gap-2 pt-20"
        style="background-color: white"
    >
        @include('components.nav.revamp') @include('components.banner.bnralert')
        @include('sweetalert::alert')
        <div
            class="mainuser flex items-center lg:items-start w-11/12 min-h-dvh mx-2 max-sm:flex-col gap-2 pl-1 max-sm:mx-1 max-md:items-center"
        >
            <div
                class="sideleft lg:w-1/3 h-5/6 flex items-start justify-center"
            >
                <!-- left side card -->
                @include('components.user.carduser')
            </div>
            <div class="sideright lg:w-2/3 max-md:w-full h-5/6">
                <div
                    class="sideinn container w-full h-full rounded-xl xl:text-2xl p-2"
                >
                    <div
                        class="tebbar flex flex-col w-11/12 h-full gap-6 max-sm:mx-auto"
                    >
                        <!-- Tab Navigations -->
                        <div class="w-full">
                            <nav
                                class="flex items-center max-sm:justify-center"
                            >
                                <a
                                    href="#progress"
                                    class="nav-link block border-b-2 xl:border-b-4 border-gray-300 pr-4 py-2 pl-1 text-gray-800 font-semibold"
                                >
                                    <div class="utmm flex gap-1">
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
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-progress"
                                        >
                                            <path
                                                stroke="none"
                                                d="M0 0h24v24H0z"
                                                fill="none"
                                            />
                                            <path
                                                d="M10 20.777a8.942 8.942 0 0 1 -2.48 -.969"
                                            />
                                            <path
                                                d="M14 3.223a9.003 9.003 0 0 1 0 17.554"
                                            />
                                            <path
                                                d="M4.579 17.093a8.961 8.961 0 0 1 -1.227 -2.592"
                                            />
                                            <path
                                                d="M3.124 10.5c.16 -.95 .468 -1.85 .9 -2.675l.169 -.305"
                                            />
                                            <path
                                                d="M6.907 4.579a8.954 8.954 0 0 1 3.093 -1.356"
                                            />
                                        </svg>
                                        Progress
                                    </div></a
                                >
                                <a
                                    href="#about"
                                    class="nav-link inline-block border-b-2 xl:border-b-4 border-gray-300 pr-4 py-2 pl-1 text-gray-800 font-semibold"
                                    >
                                    <div class="utmm flex gap-1">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M16 19h6" /><path d="M19 16v6" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4" /></svg>
                                        Registrasi
                                    </div>
                                    </a
                                >
                                <a
                                    href="#porto"
                                    class="nav-link block border-b-2 border-gray-300 xl:border-b-4 pr-4 py-2 pl-1 text-gray-800 font-semibold"
                                    >
                                    <div class="utmm flex gap-1">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-motorbike"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 16m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M19 16m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M7.5 14h5l4 -4h-10.5m1.5 4l4 -4" /><path d="M13 6h2l1.5 3l2 4" /></svg>
                                        Data
                                    </div>
                                    </a
                                >
                                <a
                                    href="#akun"
                                    class="nav-link block border-b-2 border-gray-300 xl:border-b-4 pr-4 py-2 pl-1 text-gray-800 font-semibold"
                                    >
                                    <div class="utmm flex gap-1">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-key"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.555 3.843l3.602 3.602a2.877 2.877 0 0 1 0 4.069l-2.643 2.643a2.877 2.877 0 0 1 -4.069 0l-.301 -.301l-6.558 6.558a2 2 0 0 1 -1.239 .578l-.175 .008h-1.172a1 1 0 0 1 -.993 -.883l-.007 -.117v-1.172a2 2 0 0 1 .467 -1.284l.119 -.13l.414 -.414h2v-2h2v-2l2.144 -2.144l-.301 -.301a2.877 2.877 0 0 1 0 -4.069l2.643 -2.643a2.877 2.877 0 0 1 4.069 0z" /><path d="M15 9h.01" /></svg>
                                        Akun
                                    </div>
                                    </a
                                >
                            </nav>
                        </div>
                        <!-- Tab Content -->
                        <div
                            class="w-full rounded-lg h-full p-2 overflow-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-slate-700 dark:[&::-webkit-scrollbar-thumb]:bg-slate-500"
                        >
                            <div id="progress" class="tab-content">
                                @include('components.user.fomdtdir')
                            </div>
                            <div id="about" class="hidden tab-content">
                                @include('components.user.regisfom')
                            </div>

                            <div id="porto" class="hidden tab-content">
                                @yield('isinyapo') @yield('kategori')
                            </div>
                            <div id="akun" class="hidden tab-content">
                                @include('components.user.pwc')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.footer.footer')
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const tabs = document.querySelectorAll(".nav-link");
                const defaultTab = document.querySelector(
                    ".nav-link:first-child"
                );
                const defaultTabContent = document.getElementById(
                    defaultTab.getAttribute("href").substring(1)
                );
                defaultTab.classList.add("active");
                defaultTabContent.classList.remove("hidden");

                tabs.forEach((tab) => {
                    tab.addEventListener("click", function (e) {
                        e.preventDefault();
                        const target = this.getAttribute("href").substring(1);
                        const tabContents =
                            document.querySelectorAll(".tab-content");
                        tabContents.forEach((content) => {
                            content.classList.add("hidden");
                        });
                        document
                            .getElementById(target)
                            .classList.remove("hidden");

                        // Remove active class from all tabs
                        tabs.forEach((tab) => {
                            tab.classList.remove("active");
                        });
                        // Add active class to the clicked tab
                        this.classList.add("active");
                    });
                });
            });
        </script>
        <script>
            const form = document.getElementById("editable-form");
            const agreementCheckbox = document.getElementById("agreement");
            const submitBtn = document.getElementById("submit-btn");

            // Add event listener to agreement checkbox
            agreementCheckbox.addEventListener("change", function () {
                if (this.checked) {
                    submitBtn.classList.remove("disabled");
                } else {
                    submitBtn.classList.add("disabled");
                }
            });
        </script>
    </body>
</html>
