@extends('main.template.app-main')

@section('css')
@endsection

@section('content')
<div class="pt-[12.5vh] bg-zinc-900 text-white">
    <div class="flex md:flex-row flex-col w-full">
        <div>
            <img src="{{ asset('images/photo/vallen-white.jpg') }}" class="md:h-[87.5vh] h-[37.5vh] rounded-3xl mx-auto max-w[50vw]"/>
        </div>
        <div class="text-white m-auto flex-col ml-5">
            <h3>Hi! I'm Vallencius Gavriel</h3>
            <h5>Programmer based in Tangerang, Indonesia</h5>
            <p>I specialize in web development. I am able to use Laravel framework, React JS, Ionic, as well as Java for Android development </p>
            <div class="flex-row m-auto">
                <a href="/about-me">
                    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-full">
                        More About Me
                    </button>
                </a>
                <a href="/projects">
                    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-full">
                        See My Projects
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection