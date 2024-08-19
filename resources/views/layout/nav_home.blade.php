<!-- <div id="navbar" class="navbar bg-transparent fixed shadow-md top-0 left-0 flex items-center z-10 w-full justify-between transition-shadow duration-300">

<div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul
        tabindex="0"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
        <li><a href="#home">Home</a></li>
        <li><a>Surah</a></li>
        <li><a>Dzikir</a></li>
        <li><a href="#doa">Doa</a></li>
      </ul>
    </div>

  <div class="">
    <a class="ml-2 text-xs text-center">Masjid <br> Al - Muttaqin</a>
  </div> -->
  
    <!-- <div class="border border-white rounded ">
    <a href="#" class="text-xs m-2">Sign Up</a>
    </div> -->
<!-- 
    <div class="w-14">
    <a href="#" class="text-xs m-2 text-primary">.</a>
    </div>

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
    </script> -->

    <div id="navbar" class="navbar bg-white fixed shadow-md top-0 left-0 flex items-center z-10 w-full justify-between transition-shadow duration-300">
    <div class="flex items-center ml-4">
        <a href="{{ route('home') }}" class="text-xs text-center text-black">
            <i class="fas fa-chevron-left"></i> <!-- Font Awesome Back Icon -->
        </a>
    </div>
    <div class="flex-1 justify-center items-center">
        <a class="ml-2 text-xs text-center">Masjid <br> Al - Muttaqin</a>
    </div>
    <div class="flex items-center ml-4">
        <a href="" class="text-xs text-center text-black">
 <!-- Font Awesome Back Icon -->
        </a>
    </div>
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
