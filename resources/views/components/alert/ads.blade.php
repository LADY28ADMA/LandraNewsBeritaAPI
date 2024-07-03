<style>
    .mySlides {
        display: none;
    }
</style>
<div
    id="popupDialog"
    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden"
    style="z-index: 9999999999"
>
    
    <div class="p-8 rounded-lg relative">
        
        <button
            id="closePopup"
            class="absolute top-0 right-1 py-4 text-white hover:text-gray-300 focus:outline-none"
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
                class="icon icon-tabler icons-tabler-outline icon-tabler-square-x"
            >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z"
                />
                <path d="M9 9l6 6m0 -6l-6 6" />
            </svg>
        </button>

        <div
            id="imageSlider"
            class="flex items-center justify-center gap-2 mt-4"
        >
            <div class="w3-content w3-section" style="max-width: 500px">
                <a href="https://www.primetimedigital.id" target="_blank"
                    ><img
                        class="mySlides"
                        src="https://malang.fun/wp-content/uploads/2023/12/for_websites_2.webp"
                        style="width: 100%"
                /></a>
                <a href="https://www.youtube.com/@sukareviewjuga" target="_blank"
                    ><img
                        class="mySlides"
                        src="https://malang.fun/wp-content/uploads/2023/12/for-websites-rev-scaled.webp"
                        style="width: 100%"
                /></a>
            </div>
        </div>

       
        <label for="hidePopup" class="mt-4 flex text-white">
            <input type="checkbox" id="hidePopup" class="mr-2" />
            <p>Hide For Today</p>
        </label>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const popup = document.getElementById("popupDialog");
        const hideCheckbox = document.getElementById("hidePopup");
        const closeButton = document.getElementById("closePopup");
        const isHidden = getCookie("hidePopup");

        if (!isHidden) {
            popup.classList.remove("hidden");
        } else {
            const hideUntil = new Date(isHidden);
            if (hideUntil <= new Date()) {
                popup.classList.remove("hidden");
            }
        }

        
        closeButton.addEventListener("click", function () {
            popup.classList.add("hidden");

            
            if (hideCheckbox.checked) {
                const hideUntil = new Date();
                hideUntil.setDate(hideUntil.getDate() + 1); 
                setCookie("hidePopup", hideUntil, 1); 
            }
        });
    });

    
    function setCookie(name, value, days) {
        const expires = new Date();
        expires.setTime(expires.getTime() + days * 24 * 60 * 60 * 1000);
        document.cookie =
            name + "=" + value + ";expires=" + expires.toUTCString();
    }

    
    function getCookie(name) {
        const cookieArray = document.cookie.split(";");
        for (let i = 0; i < cookieArray.length; i++) {
            const cookie = cookieArray[i].trim();
            if (cookie.startsWith(name + "=")) {
                return cookie.substring(name.length + 1);
            }
        }
        return null;
    }
</script>
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1;
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 3500); 
    }
</script>
