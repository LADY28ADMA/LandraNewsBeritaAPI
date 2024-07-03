document.addEventListener("DOMContentLoaded", function() {
    var inputs = document.getElementsByName("tahun_kendaraan");

    inputs.forEach(function(input) {
        input.addEventListener("input", function() {
            if (this.value.length > 4) {
                this.value = this.value.slice(0, 4); 
            }
        });
    });
});

