<nav class="fixed bg-zinc-900 h-[12.5%] w-full">
  <div class="flex items-center h-full">
    <div class="w-[25%] h-full">
      <a href="/">
        <img src={{ asset('images/logo/LogoVallenPutih.png') }} class="h-full p-4 m-auto"/>
      </a>
    </div>
    <div class="inline-block w-[75%] md:hidden text-white text-right mobile-menu-button">
      <img src="{{ asset('images/burger_menu_dark.png') }}" class="p-4 float-right"/>
    </div>
    <ul class="md:flex flex-row text-white w-[75%] font-montserrat hidden">
      <li class="m-auto group">
        {{-- Short explanation about me --}}
        <a href="/" class="group-hover:text-yellow-600 transition duration-300">Home</a>
        <div class="@if($active == "Home")bg-yellow-400 @endif group-hover:bg-yellow-400 transition duration-300 h-[1px]"></div>
      </li>
      <li class="m-auto group">
        {{-- Education, skill, hobby, achievements --}}
        <a href="/about-me" class="group-hover:text-yellow-600">About Me</a>
        <div class="@if($active == "About Me")bg-yellow-400 @endif group-hover:bg-yellow-400 transition duration-300 h-[1px]"></div>
      </li>
      <li class="m-auto group">
        {{-- Projects --}}
        <a href="/projects" class="group-hover:text-yellow-600">Projects</a>
        <div class="@if($active == "Projects")bg-yellow-400 @endif group-hover:bg-yellow-400 transition duration-300 h-[1px]"></div>
      </li>
    </ul>
  </div>
  <div class="hidden mobile-menu border-yellow-600 border rounded-b-lg">
    <ul class="">
      <li><a href="/" class="block text-sm px-2 py-4 text-white @if($active == "Home")bg-yellow-400 @endif hover:bg-yellow-500 font-montserrat">Home</a></li>
      <li><a href="/about-me" class="block text-sm px-2 py-4 text-white @if($active == "About Me")bg-yellow-400 @endif hover:bg-yellow-500 font-montserrat transition duration-300">About Me</a></li>
      <li><a href="/projects" class="block text-sm px-2 py-4 text-white @if($active == "Projects")bg-yellow-400 @endif hover:bg-yellow-500 font-montserrat transition duration-300 rounded-b-lg">Projects</a></li>
    </ul>
  </div>
</nav>