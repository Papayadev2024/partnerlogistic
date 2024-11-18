<footer class="bg-[#00557B]">
    <div class="w-11/12 mx-auto flex flex-col lg:flex-row lg:justify-between lg:items-start pt-20 gap-10">
        <div class="flex flex-col justify-start items-center">
            <a href="#">
                <img src="./images/svg/image_5.svg" alt="Partners Logistic Peru" />
            </a>
            
            <p class="font-inter font-bold text-text14 text-white">Jurisdicciones</p>  
            <p class="text-white text-opacity-75 font-inter font-normal text-text14">
                Callao, Chancay,  Chimbote, Ilo, Mollendo/Matarin, Paita, Pisco
            </p>
        </div>

        <div class="flex flex-col md:flex-row md:justify-between gap-10 md:gap-24 items-start">
            <div class="flex flex-col gap-5 w-80 md:w-96">
                <p class="font-inter font-bold text-text14 text-white">Contacto</p>
                <div class="flex flex-col gap-2">
                    <div>
                        <div class="flex flex-col gap-1 pt-1">
                            <p class="text-white text-opacity-75 font-inter font-normal text-text14">
                                @if (!is_null($datosgenerales[0]->cellphone))
                                {{$datosgenerales[0]->cellphone}}
                              @endif
                            </p>
                            <p class="text-white text-opacity-75 font-inter font-normal text-text14">
                                @if (!is_null($datosgenerales[0]->address))
                                    {{$datosgenerales[0]->address}},
                                @endif
                                @if (!is_null($datosgenerales[0]->inside))
                                     {{$datosgenerales[0]->inside}}
                                @endif
                                <br>
                                @if (!is_null($datosgenerales[0]->district))
                                    {{$datosgenerales[0]->district}},
                                @endif
                                @if (!is_null($datosgenerales[0]->country))
                                    {{$datosgenerales[0]->country}}
                                @endif
                            </p>

                            <p class="text-white text-opacity-75 font-inter font-normal text-text14">
                                info@pslgroup.pe
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-start items-center flex-col">
            <a href="#formContactos"
                class="text-white font-medium text-text16 py-4 px-5 bg-[#196688] rounded-xl w-full md:w-auto text-center">Más
                información</a>
            <a href="{{ route('librodereclamaciones') }}"><img class="w-24 mt-5"
                    src="{{ asset('images/img/reclamaciones.png') }}" /></a>
        </div>
    </div>

    <div
        class="w-11/12 mx-auto flex flex-col gap-10 md:gap-0 items-start md:flex-row md:justify-between md:items-center py-10 md:py-20">
        <div class="flex justify-start items-center gap-5 md:gap-2">
            @if (!is_null($datosgenerales[0]->facebook))  
                <a href="{{$datosgenerales[0]->facebook}}" target="_blank"><img src="{{asset('images/svg/image_6.svg')}}" alt="facebook" /></a>   
            @endif
          
            @if (!is_null($datosgenerales[0]->instagram))  
                <a href="{{$datosgenerales[0]->instagram}}"  target="_blank"><img src="{{asset('images/svg/image_7.svg')}}" alt="instagram" /></a>
            @endif

            @if (!is_null($datosgenerales[0]->youtube))  
                <a href="{{$datosgenerales[0]->youtube}}"  target="_blank"><img src="{{asset('images/svg/image_9.svg')}}" alt="linkedin" /></a>
            @endif
        </div>



        <div>
            <a href="#" target="_blank"
                class="text-white text-opacity-75 font-inter font-medium text-text12flex flex-col justify-end">
                <span class="block">&copy; 2024 - Mundo Web - All Rights Reserved</span>
            </a>
        </div>
    </div>
</footer>


{{-- <footer class="bg-[#289A7B]">
    <div class="flex flex-col md:flex-row md:justify-between w-11/12 mx-auto py-10 gap-10">
        <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
            <div class="flex justify-start items-center">
                <a href="{{ route('index') }}"><img src="{{ asset('images/svg/image_1.svg') }}" alt="SMO" /></a>
            </div>

            <p class="font-archivo font-normal text-text16 lg:text-text18 text-white w-2/3">
                Bienvenido a SMO. Especialistas en Salud Ocupacional y Gestión de Calidad
            </p>

            <div class="flex justify-start items-center gap-5" data-aos="fade-up" data-aos-offset="150">
                @if ($general->instagram != null)
                    <a target="_blank" href="https://{{ $general->instagram }}"> <img
                            src="{{ asset('images/svg/image_3.svg') }}" alt="instagram" /></a>
                @endif

                @if ($general->facebook != null)
                    <a target="_blank" href="https://{{ $general->facebook }}"> <img
                            src="{{ asset('images/svg/image_4.svg') }}" alt="facebook" /></a>
                @endif

                @if ($general->youtube != null)
                    <a target="_blank" href="https://{{ $general->youtube }}"> <img
                            src="{{ asset('images/svg/image_5.svg') }}" alt="youtube" /></a>
                @endif
            </div>
        </div>

        <div class="flex flex-col md:flex-row md:justify-between gap-10">
            <div class="flex flex-col gap-5 md:gap-8" data-aos="fade-up" data-aos-offset="150">
                <p class="font-archivo font-medium text-text16 lg:text-text18 text-white">
                    Navegador
                </p>
                <div class="font-normal font-archivo text-text14 lg:text-text16 text-white flex flex-col gap-5">
                    <a href="{{ route('index') }}">Inicio</a>
                    <a href="{{ route('nosotros') }}">Nosotros</a>
                    <a href="">Servicios</a>
                    <a href="{{ route('contacto') }}">Contacto</a>
                </div>
            </div>

            <div class="flex flex-col gap-5 md:gap-8" data-aos="fade-up" data-aos-offset="150">
                <p class="font-archivo font-medium text-text16 lg:text-text18 text-white">
                    Dirección
                </p>
                <div class="font-normal font-archivo text-text14 lg:text-text16 text-white flex flex-col gap-5">
                    <p>{{ $general->address }} - {{ $general->inside }} </p>
                    <p>{{ $general->district }}, Lima</p>
                    <p>{{ $general->country }}</p>
                    <p>{{ $general->cellphone }} </p>
                </div>
            </div>
        </div>
    </div>

    <div
        class="border-t border-[#FFFFFF] pt-5 pb-10 flex flex-col md:flex-row md:justify-start md:items-center text-white gap-2 w-11/12 mx-auto text-text12 lg:text-text14 font-normal">
        <p>Copyright &copy; 2023 Mundo Web. Reservados todos los derechos</p>

    </div>
</footer> --}}

