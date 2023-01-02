<div class="bg-zinc-900">
  <div class="flex flex-row">
    <div class="w-[50vw]">
      <a href="/" class="h-fit">
        <img src={{ asset('images/logo/LogoVallenPutih.png') }} class="w-[50%] p-6 m-auto"/>
      </a>
    </div>
    <div class="w-[50vw] m-auto">
        <ul class="text-white w-[75%] font-montserrat">
          <li class="m-auto group">
            {{-- Short explanation about me --}}
            <a href="/" class="group-hover:text-yellow-600 transition duration-300">Home</a>
            <div class=" group-hover:bg-yellow-400 transition duration-300 h-[1px]"></div>
          </li>
          <li class="m-auto group">
            {{-- Education, skill, hobby, achievements --}}
            <a href="/about-me" class="group-hover:text-yellow-600">About Me</a>
            <div class="group-hover:bg-yellow-400 transition duration-300 h-[1px]"></div>
          </li>
          <li class="m-auto group">
            {{-- Projects --}}
            <a href="/projects" class="group-hover:text-yellow-600">Projects</a>
            <div class="group-hover:bg-yellow-400 transition duration-300 h-[1px]"></div>
          </li>
        </ul> 
    </div>
  </div>
  <div class="flex flex-row">
    <a href="/">
      <img src={{ asset('images/logo/discord.png') }} class="p-4 m-auto rounded-full"/>
    </a>
    <a href="/">
      <img src={{ asset('images/logo/github.png') }} class="p-4 m-auto rounded-full"/>
    </a>
    <a href="/">
      <img src={{ asset('images/logo/line.png') }} class="p-4 m-auto rounded-full"/>
    </a>
  </div>
  <div class="w-full text-white text-center text-xs py-1">
    &copy; Vallencius Gavriel 2023
  </div>
</div>