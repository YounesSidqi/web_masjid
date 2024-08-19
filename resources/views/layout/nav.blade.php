<div id="navbar" class="navbar bg-white fixed shadow-md top-0 left-0 flex items-center z-10 w-full justify-center transition-shadow duration-300">
    <div class="justify-center items-center">
        <a class="ml-2 text-xs text-center"></a>
    </div>
    <div class="justify-center items-center">
        <a class="ml-2 text-xs text-center">Masjid <br> Al - Muttaqin</a>
    </div>
    <!-- Optional Sign Up button -->
    <!-- <div class="border border-white rounded">
        <a href="#" class="text-xs m-2">Sign Up</a>
    </div> -->
</div>

<script>
        document.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.remove('shadow-md');
            } else {
                navbar.classList.add('shadow-md');
            }
        });
    </script>