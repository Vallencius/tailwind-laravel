<nav class="fixed h-[12.5%] w-full">
  <div class="flex items-center h-full">
    <div class="w-[25%] h-full">
      <img src={{ asset('images/logo/LogoVallenPutih.png') }} class="h-full p-4 m-auto"/>
    </div>
    <ul class="flex flex-row text-white w-[75%] font-montserrat">
      <li class="m-auto hover:text-yellow-700 transition duration-300">
        {{-- Short explanation about me --}}
        <a href="/">Home</a>
        <div class="@if($active == "Home")bg-yellow-400 @endif hover:bg-yellow-400 transition duration-300 h-[1px]"></div>
      </li>
      <li class="m-auto hover:text-yellow-700 transition duration-300">
        {{-- Education, skill, hobby, achievements --}}
        <a href="/about-me" class="hover:border-b-yellow-400">About Me</a>
        <div class="@if($active == "About Me")bg-yellow-400 @endif hover:bg-yellow-400 transition duration-300 h-[1px]"></div>
      </li>
      <li class="m-auto hover:text-yellow-700 transition duration-300">
        {{-- Projects --}}
        <a href="/projects">Projects</a>
        <div class="@if($active == "Projects")bg-yellow-400 @endif hover:bg-yellow-400 transition duration-300 h-[1px]"></div>
      </li>
    </ul>
  </div>
</nav>