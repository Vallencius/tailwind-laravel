@extends('main.template.app-main')

@section('css')
@endsection

@section('content')
<div class="pt-[12.5vh] pb-[100%] bg-zinc-900 text-white">
    <div class="flex md:flex-row flex-col w-full">
        <div>
            <img src="{{ asset('images/photo/vallen-white.jpg') }}" class="md:h-[87.5vh] h-[37.5vh] rounded-3xl mx-auto max-w[50vw]"/>
        </div>
        <div class="text-white m-auto flex-col">
            <h3>Hi! I'm Vallencius Gavriel</h3>
            <h5>Programmer based in Tangerang, Indonesia</h5>
            <p>I specialize in web development. I am able to use Laravel framework, React JS, Ionic, as well as Java for Android development </p>
            <div class="flex-row m-auto">
                <button>ASD</button>
                <button>ASD</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection