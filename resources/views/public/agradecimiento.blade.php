@extends('components.public.matrix')

@section('css_importados')
    <style>
        .bg_verde {
            background-color: #289A7B;
        }

        .text_verde {
            color: #2E67A4;
            /* font-weight: 700; */
        }

        .text_azul {
            color: #2E67A4;
        }

        .logo_blanco {
            display: none;
        }
    </style>
@stop


@section('content')
    <main class="w-11/12 mx-auto max-w-[868px] pt-32">

        <div class="flex flex-col gap-10 py-10 ">
            <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
                <h2 class="text-[#2E67A4] font-archivo text-text44 md:text-text56 font-bold text-center leading-tight">
                    ¡Gracias por Elegirnos para Cuidar tu
                    <span class="text-[#289A7B]">Salud Ocupacional!</span>
                </h2>

                <p class="text-[#696969] font-archivo font-normal text-center text-text20">
                    Un especialista en salud ocupacional pronto se comunicará contigo
                    para brindarte toda la información necesaria.
                </p>
            </div>

            <div class="flex flex-col gap-10" data-aos="fade-up" data-aos-offset="150">
                <div class="flex justify-center items-center">
                    <img src="{{asset('images/img/image_26.png')}}" alt="" />
                </div>
                <p
                    class="text-text24 font-archivo font-bold leading-tight text-[#2E67A4] max-w-[424px] mx-auto text-center">
                    ¡Gracias por confiar en nosotros para cuidar de tu bienestar
                    laboral!
                </p>

                <div class="flex justify-center items-center">
                    <a href="{{route('index')}}"
                        class="text-white font-archivo font-bold text-text16 py-3 px-6 bg-[#289A7B] rounded-full">Seguir
                        Navegando</a>
                </div>
            </div>
        </div>

    </main>

@section('scripts_importados')

    <script>
        const menu = document.querySelector(".menu");
        const logo_1 = document.querySelector(".logo_1");
        const logo_2 = document.querySelector(".logo_2");
        /* logo_1.classList.add('logo_blanco'); */
        logo_2.classList.remove('hidden');
        const body = document.body;
        menu.addEventListener("click", (e) => {
            body.classList.toggle("overflow-hidden");
        });
    </script>



@stop

@stop
