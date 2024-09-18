{{-- <header class="absolute flex justify-between w-11/12 mx-auto left-0 right-0 py-5 z-[200]">
    <div class="flex justify-center items-center z-40">
        <a href="{{ route('index') }}">
            <img src="{{ asset('images/svg/image_1.svg') }}" alt="SMO" class="logo_1 logo_blanco" />
            <img src="{{ asset('images/svg/image_13.svg') }}" alt="SMO" class="logo_2 hidden" />
        </a>
    </div>

    <nav class="flex h-20 items-center justify-between">
        <!-- <input type="checkbox" id="menu" class="peer/menu hidden menu" /> -->
        <!-- <label for="menu" class="hamburguesa transition-all z-40 md:hidden">
        </label> -->

        <input type="checkbox" id="menu" class="peer/menu menu hidden" />
        <label for="menu"
            class="transition-all flex flex-col gap-1 z-40 md:hidden hamburguesa justify-center items-center">
            <!-- peer-checked:[&>*]:nth-child(2):hidden -->
            <p class="w-7 h-1 bg-white bg_verde transition-transform duration-500 bg_color"></p>
            <p class="w-7 h-1 bg-white bg_verde transition-transform duration-500 bg_color"></p>
            <p class="w-7 h-1 bg-white bg_verde transition-transform duration-500 bg_color"></p>
        </label>

        <!-- <ul
          class="fixed inset-0 bg-[#2E67A4] px-[5%] grid auto-rows-max content-center justify-items-center clip-circle-0 peer-checked/menu:clip-circle-full transition-[clip-path] duration-500 gap-10 md:clip-circle-full md:relative md:flex md:justify-items-center md:p-0 md:bg-transparent font-archivo font-medium text-text16 md:text-text18 text-white"
        > -->
        <ul
            class="fixed inset-0 bg-[#ffffff] px-[5%] flex flex-col md:flex-row md:items-center pt-32 clip-circle-0 peer-checked/menu:clip-circle-full transition-[clip-path] duration-500 gap-10 md:clip-circle-full md:relative md:flex md:justify-items-center md:p-0 md:bg-transparent font-archivo font-bold md:font-medium text-text32 md:text-text18 text-[#2E67A4] md:text-white">
            <li class="block md:hidden text-text20">
                <p class="text-[#289A7B]">Menu</p>
            </li>
            <li>
                <a href="{{ route('index') }}" class="text_azul">Inicio</a>
            </li>
            <li>
                <a href="{{ route('nosotros') }}" class="text_verde">Nosotros</a>
            </li>
            <li>
                <a href="{{ route('index') . '#servicios' }}" class="text_azul">Servicios</a>
            </li>
            <li>
                <a href="{{ route('contacto') }}" class="text_azul">Contacto</a>
            </li>

            <li class="w-full">
                <a target="_blank"
                    href="https://api.whatsapp.com/send?phone={{ $general->whatsapp }}&text={{ $general->mensaje_whatsapp }}"
                    class="bg-[#289A7B] py-3 w-full md:w-auto md:py-4 rounded-full px-5 inline-block text-center text-white text-text16">Quiero
                    una cita</a>
            </li>
        </ul>
    </nav>
</header> --}}


<header>
    <nav class="bg-[#00557B] py-4">
        <div class="flex justify-center md:justify-between items-center w-11/12 mx-auto">
            <div class="hidden md:flex">
                <p class="font-inter font-normal text-text14 text-white">
                   @if (!is_null($datosgenerales[0]->htop))
                     {{$datosgenerales[0]->htop}}
                   @endif
                </p>
            </div>
            <div class="flex justify-center md:justify-center items-center gap-10 w-full md:w-auto">
                <div class="flex justify-center items-center gap-4">
                    <div class="flex justify-center items-center gap-2">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/svg/image_1.svg') }}" alt="" />
                        </div>
                        <p class="font-inter font-normal text-text14 text-white">
                            @if (!is_null($datosgenerales[0]->cellphone))
                            {{$datosgenerales[0]->cellphone}}
                          @endif
                        </p>
                    </div>

                    <div class="flex justify-center items-center gap-2">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/svg/image_2.svg') }}" alt="" />
                        </div>
                        <p class="font-inter font-normal text-text14 text-white">
                            @if (!is_null($datosgenerales[0]->email))
                            {{$datosgenerales[0]->email}}
                          @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="flex flex-col md:flex-row justify-between items-center w-11/12 mx-auto py-5 gap-5">
        <div class="flex justify-center items-center">
            <a href="{{route('index')}}"><img src="{{ asset('images/img/image_3.png') }}" alt="Partners Logistic Peru" class="w-full" /></a>
        </div>
        <div class="flex justify-center items-center w-full md:w-auto gap-5">

            <a href="#tarifarios"
            class="bg-[#FF7B29] text-white font-inter font-semibold text-text16 rounded-xl py-3 px-5 w-full md:w-auto text-center">Tarifarios</a>

            <a target="_blank" href="https://miranda-soft.com.pe/project/seguimiento-orden.php"
            class="bg-[#FF7B29] text-white font-inter font-semibold text-text16 rounded-xl py-3 px-5 w-full md:w-auto text-center">Trazabilidad</a>
            
            <a target="_blank" href="https://api.whatsapp.com/send?phone={{$datosgenerales[0]->whatsapp}}&text={{$datosgenerales[0]->mensaje_whatsapp}}"
                class="bg-[#00557B] text-white font-inter font-semibold text-text16 rounded-xl py-3 px-5 w-full md:w-auto text-center">Conversemos</a>
        </div>
    </div>



    <div class="flex justify-end w-11/12 mx-auto z-[100] relative">
        <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20 cursor-pointer">
            <a target="_blank" id="whatsapp-toggle" href="https://api.whatsapp.com/send?phone={{$datosgenerales[0]->whatsapp}}&text={{$datosgenerales[0]->mensaje_whatsapp}}">
                <img src="{{ asset('images/svg/image_11.svg') }}" alt="whatsapp" class="w-16 h-16 md:w-24 md:h-24">
            </a>
        </div>
    </div>
</header>
