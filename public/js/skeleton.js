   
    function replaceSkeletonWithActual() {
        document.getElementById('skeleton').style.display = 'none';
        document.getElementById('actualContent').style.display = 'block';
    }

    
    setTimeout(replaceSkeletonWithActual, 1500);
