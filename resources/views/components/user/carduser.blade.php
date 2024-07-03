<!-- <div class="carddusr carddd">
    <div class="overlayy"></div>
    <div class="circleuser">

        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="23 29 78 60" height="60px" width="78px">
  
            <defs></defs>
            <g transform="translate(23.000000, 29.500000)" fill-rule="evenodd" fill="none" stroke-width="1" stroke="none" id="icon">
                <rect rx="4.70247832" height="21.8788565" width="9.40495664" y="26.0333433" x="67.8357511" fill="#AC8BE9" id="Rectangle-3"></rect>
                <rect rx="4.70247832" height="10.962961" width="9.40495664" y="38.776399" x="67.8357511" fill="#6A5297" id="Rectangle-3"></rect>
                <polygon points="57.3086772 0 67.1649301 26.3776902 14.4413177 45.0699507 4.58506484 18.6922605" fill="#6A5297" id="Rectangle-2">
                </polygon>
                <path fill="#8B6FC0" id="Rectangle" d="M0,19.6104296 C0,16.2921718 2.68622235,13.6021923 5.99495032,13.6021923 L67.6438591,13.6021923 C70.9547788,13.6021923 73.6388095,16.2865506 73.6388095,19.6104296 L73.6388095,52.6639057 C73.6388095,55.9821635 70.9525871,58.672143 67.6438591,58.672143 L5.99495032,58.672143 C2.68403068,58.672143 0,55.9877847 0,52.6639057 L0,19.6104296 Z"></path>
                <path fill="#F6F1FF" id="Fill-12" d="M47.5173769,27.0835169 C45.0052827,24.5377699 40.9347162,24.5377699 38.422622,27.0835169 L36.9065677,28.6198808 L35.3905134,27.0835169 C32.8799903,24.5377699 28.8078527,24.5377699 26.2957585,27.0835169 C23.7852354,29.6292639 23.7852354,33.7559532 26.2957585,36.3001081 L36.9065677,47.0530632 L47.5173769,36.3001081 C50.029471,33.7559532 50.029471,29.6292639 47.5173769,27.0835169"></path>
                <rect height="12.863158" width="15.6082259" y="26.1162588" x="58.0305835" fill="#AC8BE9" id="Rectangle-4"></rect>
                <ellipse ry="2.23319575" rx="2.20116007" cy="33.0919007" cx="65.8346965" fill="#FFFFFF" id="Oval">
                </ellipse>
            </g>
        </svg>

    </div>
    <div class="midtsra z-10">
        <p>nama</p>
        <p>username</p>
    </div>
    
</div> -->

@if(Auth::check())

<!-- component -->
<html>
    <head>
        <link
            rel="stylesheet"
            href="https://horizon-tailwind-react-corporate-git-main-horizon-ui.vercel.app/static/css/main.d7f96858.css"
        />
    </head>
    <body>
        <div class="w-10/12 h-auto pb-6 shadow-lg rounded-2xl mt-4 relative p-2 max-sm:shadow-md bg-white">
            <div class="btnflot absolute top-3 right-3 text-white z-10">
                <button id="open-upload-modal">
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
                        class="icon icon-tabler icons-tabler-outline icon-tabler-pencil"
                    >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"
                        />
                        <path d="M13.5 6.5l4 4" />
                    </svg>
                </button>
            </div>
            <div
                class="relative flex h-32 w-full justify-center rounded-xl bg-cover"
            >
                <img
                    src="{{ Auth::user()->coverPhoto ? Auth::user()->coverPhoto : asset('images/ivos-cover.webp') }}"
                    class="absolute flex h-32 w-full justify-center rounded-xl bg-cover object-cover"
                    alt="ivos cover"
                />
                <div
                    class="absolute -bottom-12 flex h-[87px] w-[87px] items-center justify-center rounded-full border-[4px] border-white bg-pink-400 dark:!border-navy-700"
                >
                    <img
                        class="h-full w-full rounded-full object-cover"
                        src="{{ Auth::user()->profilePhoto ? Auth::user()->profilePhoto : asset('images/ivos-avatar.webp') }}"
                        alt="ivos avatar profile"
                    />
                </div>
            </div>
            <div class="flex flex-col items-center mt-12 gap-1">
                <h4 class="text-xl font-bold text-navy-700 dark:text-red-500 text-center">
                    {{ ucwords(strtolower(Auth::user()->fullName ? Auth::user()->fullName : 'User Guest')) }}
                </h4>
                
    
                <span
                    class="relative inline-block px-3 py-1 font-semibold leading-tight text-pink-900"
                >
                    <span
                        aria-hidden
                        class="absolute inset-0 opacity-50 rounded-full bg-pink-200"
                    ></span>
                    <span class="relative"
                        >@
                        {{ Auth::user()->username ? Auth::user()->username : 'Username' }}</span
                    >
                </span>
                <div
                    class="flex items-center justify-center text-sm font-thin p-0 m-0"
                >
                    <p>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-mail"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"
                            />
                            <path d="M3 7l9 6l9 -6" />
                        </svg>
                    </p>
                    <p class="text-center break-all">
                        {{ Auth::user()->email ? Auth::user()->email : 'email' }}
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
@endif
