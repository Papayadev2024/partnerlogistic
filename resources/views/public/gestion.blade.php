@extends('components.public.matrix')

@section('css_importados')
    <style>
        .logo_blanco {
            display: block;
        }
    </style>
@stop


@section('content')

    <main>
        <section>
            <img src=" {{ asset('images/img/image_21.png') }}" alt="" class="h-[280px] w-full hidden md:block">
            <img src=" {{ asset('images/img/image_27.png') }}" alt="" class="w-full block md:hidden">
        </section>

        <section>
            <div class="w-11/12 md:max-w-[768px] mx-auto pt-20">
                <h3 class="text-[#289A7B] font-archivo font-semibold text-text20 text-center">
                    Servicios
                </h3>
                <h2 class="text-[#2E67A4] font-archivo font-bold text-text40 md:text-text48 text-center leading-tight">
                    Soluciones Innovadoras en Salud Ocupacional y Gestion de Calidad
                </h2>
            </div>
            <!--  -->
            <div>
                <div class="w-full md:w-11/12 mx-auto">
                    <ul class="pt-10 w-11/12 md:max-w-[768px] mx-auto flex flex-wrap justify-center gap-5">

                        @foreach ($servicios as $servicio)
                            @if ($servicio->id == $id)
                                <li class="step step01 active" data-step="servicio_{{ $servicio->id }}">
                                    <p href="#"
                                        class="inline-block md:inline-flex border text-[#289A7B] border-[#289A7B] py-3 rounded-full px-5 font-semibold text-text16 md:text-text18 flex-shrink-0 step-inner cursor-pointer">
                                        {{ $servicio->title }}
                                    </p>
                                </li>
                            @else
                                <li class="step step01" data-step="servicio_{{ $servicio->id }}">
                                    <p href="#"
                                        class="inline-block md:inline-flex border text-[#289A7B] border-[#289A7B] py-3 rounded-full px-5 font-semibold text-text16 md:text-text18 flex-shrink-0 step-inner cursor-pointer">
                                        {{ $servicio->title }}
                                    </p>
                                </li>
                            @endif
                        @endforeach

                    </ul>

                    <div>
                        @foreach ($servicios as $servicio)
                            @if ($servicio->id == $id)
                                <div
                                    class="section-content active servicio_{{ $servicio->id }} text-left animate-fade hidden opacity-0 transform translate-y-[15px] pb-16 w-11/12 mx-auto ">
                                    <div class="flex justify-center items-center w-full py-10 2md:py-20">
                                        <img src="{{ asset('images/img/image_24.png') }}" alt=""
                                            class="hidden md:block object-cover w-full" />
                                        <img src="{{ asset('images/img/image_25.png') }}" alt=""
                                            class="block md:hidden object-cover w-full" />
                                    </div>
                                    <div class="flex flex-col 2md:flex-row 2md:justify-between gap-12">
                                        <div class="flex flex-col gap-3 flex-1">
                                            <h3 class="text-[#289A7B] font-bold font-archivo text-text20">
                                                Servicio
                                            </h3>
                                           
                                            <h2
                                                class="text-[#2E67A4] font-bold font-archivo text-text44 2md:text-text48 leading-tight">
                                                {{$servicio->title}}
                                                
                                            </h2>
                                            <div class="font-normal font-archivo text-text18 text-[#696969]">
                                                {!! $servicio->description !!}
                                            </div>
                                        </div>

                                        <div class="flex-1">
                                            <div class="mx-6">
                                                <div class="font-normal font-archivo text-text18 text-[#696969] list-disc">
                                                    {!! $servicio->second_description !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div
                                    class="section-content servicio_{{ $servicio->id }} text-left animate-fade hidden opacity-0 transform translate-y-[15px] pb-16 w-11/12 mx-auto ">
                                    <div class="flex justify-center items-center w-full py-10 2md:py-20">
                                        <img src="{{ asset('images/img/image_24.png') }}" alt=""
                                            class="hidden md:block object-cover w-full" />
                                        <img src="{{ asset('images/img/image_25.png') }}" alt=""
                                            class="block md:hidden object-cover w-full" />
                                    </div>
                                    <div class="flex flex-col 2md:flex-row 2md:justify-between gap-12">
                                        <div class="flex flex-col gap-3 flex-1">
                                            <h3 class="text-[#289A7B] font-bold font-archivo text-text20">
                                                Servicio
                                            </h3>
                                            
                                            <div
                                                class="text-[#2E67A4] font-bold font-archivo text-text44 2md:text-text48 leading-tight">
                                                {{$servicio->title}}
                                            </div>
                                            <p class="font-normal font-archivo text-text18 text-[#696969]">
                                                {!! $servicio->description !!}
                                            </p>
                                        </div>

                                        <div class="flex-1">
                                            <div class="mx-6">
                                                <div class="font-normal font-archivo text-text18 text-[#696969] list-disc">
                                                    {!! $servicio->second_description !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach


                    </div>
                </div>
            </div>

        </section>

        <section class="bg-[#2E67A4] flex flex-col lg:flex-row md:justify-between mt-20">
            <div class="flex-1 lg:-mt-[50px] order-2 lg:order-1">
                <img src="{{ asset('images/img/image_22.png') }}" alt="" class="hidden md:block" />
                <img src="{{ asset('images/img/image_23.png') }}" alt="" class="block md:hidden" />
            </div>

            <div class="flex-1 flex flex-col justify-center items-center order-1 lg:order-2 pt-16 pb-8">
                <div class="w-11/12 md:max-w-[646px] mx-auto flex flex-col justify-center gap-5" data-aos="fade-up" data-aos-offset="150">
                    <h2 class="text-white font-archivo font-bold text-text40 md:text-text48 leading-tight">
                        Si usted necesita información? Haga una cita ahora!
                    </h2>
                    <p class="text-text18 font-archivo font-normal text-white">
                        Cumplimos con altos estándares internacionales de calidad en
                        nuestros servicios
                    </p>

                    <div class="flex justify-start items-center">
                        <a target="_blank"
                            href="https://api.whatsapp.com/send?phone={{ $general->whatsapp }}&text={{ $general->mensaje_whatsapp }}"
                            class="text-[#2E67A4] font-bold font-archivo text-text16 bg-white py-3 px-6 rounded-full">Reservar
                            Cita
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>



@section('scripts_importados')

    <script>
        const menu = document.querySelector(".menu");
        const logo_1 = document.querySelector(".logo_blanco");
        const logo_2 = document.querySelector(".logo_2");
        const hamburguesa = document.querySelectorAll(".bg_color");
        const body = document.body;
        menu.addEventListener("click", (e) => {
            body.classList.toggle("overflow-hidden");

            if (body.classList.contains('overflow-hidden')) {
                hamburguesa.forEach(item => {
                    item.classList.remove('bg-white')
                    item.classList.add('bg-[#2E67A4]')
                })
                logo_1.classList.remove('logo_blanco');
                logo_1.classList.add('hidden');
                logo_2.classList.remove('hidden');
                logo_2.classList.add('block');
                return;
            }

            hamburguesa.forEach(item => {

                item.classList.remove('bg-[#2E67A4]')
                item.classList.add('bg-white')

            })
            logo_1.classList.add('logo_blanco');
            logo_1.classList.remove('hidden');
            logo_2.classList.add('hidden');
            logo_2.classList.remove('block');

        });
    </script>

    <script>
        $(".step").click(function() {
            $(this).addClass("active").prevAll().removeClass("active");
            $(this).nextAll().removeClass("active");
        });

        $(".step").click(function() {
            const step = $(this).data("step");
            $(`.${step}`).addClass("active").siblings().removeClass("active");
        });
    </script>



@stop

@stop
