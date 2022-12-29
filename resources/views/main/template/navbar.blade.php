<nav class="fixed h-[12.5%] w-full">
  <div class="flex items-center h-full">
    <div class="w-[25%] h-full">
      <a href="/">
        <img src={{ asset('images/logo/LogoVallenPutih.png') }} class="h-full p-4 m-auto"/>
      </a>
    </div>
    <ul class="flex flex-row text-white w-[75%] font-montserrat">
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
</nav>