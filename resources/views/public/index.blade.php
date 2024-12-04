@extends('components.public.matrix')

@section('css_importados')
    <style>
        /*  @media(min-width:768px) {
                        .fill_plomo, .fill_azul, .fill_verde{
                            fill: #fff;
                        }
                    } */

        .logo_blanco {
            display: block;
        }

        .main {
            background-image: url({{ asset('images/img/image_1.png') }})
        }

        @media(min-width; 768px) {
            .main {
                background-image: url({{ asset('images/img/image_8.png') }})
            }
        }

        .bg__main {
        background-image: url(./images/img/image_14.png);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
      }

      @media (min-width: 768px) {
        .bg__main {
          background-image: url(./images/img/image_13.png);
        }
      }
    </style>
@stop


@section('content')

    <main>
        <section class="bg__main pb-20 pt-20">
            <div class="w-11/12 mx-auto flex flex-col gap-10 md:gap-20">
                <div class="w-full md:max-w-[1100px] mx-auto">
                    <h1 class="text-[#023B54] font-inter text-text40 md:text-text56 font-black text-center">
                        Especialistas en
                        <span class="text-[#FF7B29]">Transporte de Carga Internacional</span>
                    </h1>
                    <h2 class="text-[#818B90] font-inter font-semibold text-text24 text-center">
                        El servicio lo es todo, nuestra gente lo hace posible.
                    </h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-24">
                    <div class="flex justify-center items-start rounded-[24px]">
                        <!-- <div class="flex justify-center items-start">
                  <img src="./images/img/image_15.png" alt="" />
                </div> -->
                        <video width="480" height="700" controls class="rounded-[24px]">
                            <source src="./video/video.mp4" type="video/mp4" class="rounded-[24px]" />
                        </video>
                    </div>

                    <div>
                        <div class="flex justify-center items-center">
                            <div class="bg-primary rounded-xl mx-[3%] xl:mx-[7%] py-10 w-full">
                                <div class="bg-primary w-11/12 md:max-w-[552px] mx-auto flex flex-col gap-5">
                                    <h2 class="text-white font-inter font-bold text-text32 leading-tight">
                                        Solicita tu cotización
                                    </h2>

                                    <form action="" id="formContactos">
                                        @csrf
                                        <div class="bg-primary flex flex-col gap-5">
                                            <div class="relative w-full">
                                                <input id="" placeholder="Nombre" type="text" required name="full_name"
                                                    class="w-full py-3 px-4 focus:outline-none font-inter font-light text-text16 text-[#FFFFFF] focus:ring-0 placeholder:text-[#FFFFFF] placeholder:text-opacity-55 border-white border-b transition-all bg-primary focus:outline-0 border-t-0 border-l-0 border-r-0" />
                                                <p
                                                    class="absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer font-inter font-medium text-white text-text10">
                                                    Obligatorio
                                                </p>
                                            </div>

                                            <div class="relative w-full">
                                                <input id="" placeholder="RUC" type="text" required name="ruc"
                                                    class="w-full py-3 px-4 focus:outline-none font-inter font-light text-text16 text-[#FFFFFF] focus:ring-0 placeholder:text-[#FFFFFF] placeholder:text-opacity-55 border-white border-b transition-all bg-primary focus:outline-0 border-t-0 border-l-0 border-r-0" />
                                                <p
                                                    class="absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer font-inter font-medium text-white text-text10">
                                                    Obligatorio
                                                </p>
                                            </div>

                                            <div class="relative w-full"> 
                                                <input id="telefonoContacto" placeholder="Teléfono" type="tel" name="phone" required
                                                    class="w-full py-3 px-4 focus:outline-none font-inter font-light text-text16 text-[#FFFFFF] focus:ring-0 placeholder:text-[#FFFFFF] placeholder:text-opacity-55 border-white border-b transition-all bg-primary focus:outline-0 border-t-0 border-l-0 border-r-0" />
                                                <p
                                                    class="absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer font-inter font-medium text-white text-text10">
                                                    Obligatorio
                                                </p>
                                            </div>

                                            <div class="relative w-full">
                                                <input id="emailContacto" placeholder="Email" type="email"  name="email"
                                                    class="w-full py-3 px-4 focus:outline-none font-inter font-light text-text16 text-[#FFFFFF] focus:ring-0 placeholder:text-[#FFFFFF] placeholder:text-opacity-55 border-white border-b transition-all bg-primary focus:outline-0 border-t-0 border-l-0 border-r-0" />
                                            </div>

                                            <!-- comobo 1 -->

                                            <div>
                                                <div class="flex flex-col gap-2 z-[45]">
                                                    <div>
                                                        <!-- combo -->
                                                        <div class="dropdown w-full">
                                                            <div
                                                                class="input-box1 focus:outline-none text-opacity-55 font-inter text-text16 font-light text-white py-9 px-5">
                                                                <span
                                                                    class="opacity-55 span-opacity1 text-[#FFFFFF] font-inter font-light text-text16"
                                                                    id="span-opacity1">Tipo de Servicio</span>
                                                            </div>
                                                          
                                                            <div
                                                                class="list1 overflow-y-scroll h-[150px] scroll-typeServicios">
                                                                <div class="w-full">
                                                                    <input type="radio" id="id6" class="radio_1"
                                                                        name="service_product_servicio" value="Servicio" />

                                                                    <label for="id6"
                                                                        class="text-text16 text-[#FFFFFF] text-opacity-55 typeServicios1 font-inter font-light">
                                                                        Tipo de Servicio
                                                                    </label>
                                                                </div>
                                                                <div class="w-full">
                                                                    <input type="radio" id="id8" class="radio_1"
                                                                        name="service_product_servicio" value="Importación"/>

                                                                    <label for="id8"
                                                                        class="text-text16 text-[#FFFFFF] text-opacity-55 typeServicios1 font-inter font-light">
                                                                        Importación
                                                                    </label>
                                                                </div>

                                                                <div class="w-full">
                                                                    <input type="radio" id="id9" class="radio_1"
                                                                        name="service_product_servicio" value="Exportación"/>
                                                                    <label for="id9"
                                                                        class="text-text16 text-[#FFFFFF] text-opacity-55 typeServicios1 font-inter font-light">
                                                                        Exportación
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="flex flex-col gap-2 z-[45]">
                                                    <div>
                                                        <!-- combo 2 -->
                                                        <div class="dropdown w-full">
                                                            <div
                                                                class="input-box focus:outline-none text-opacity-55 font-inter text-text16 font-light text-white py-9 px-5">
                                                                <span
                                                                    class="opacity-55 span-opacity text-[#FFFFFF] font-inter font-light text-text16"
                                                                    id="span-opacity">Tipo de transporte</span>
                                                            </div>
                                                            <div
                                                                class="list overflow-y-scroll h-[150px] scroll-typeServicios">
                                                                <div class="w-full">
                                                                    <input type="radio" id="id0" class="radio"
                                                                        name="service_product" value="Tipo de transporte" />

                                                                    <label for="id0"
                                                                        class="text-text16 text-[#FFFFFF] text-opacity-55 typeServicios font-inter font-light">
                                                                        Tipo de transporte
                                                                    </label>
                                                                </div>
                                                                <div class="w-full">
                                                                    <input type="radio" id="id1" class="radio" value="Aéreo"
                                                                        name="service_product" />

                                                                    <label for="id1"
                                                                        class="text-text16 text-[#FFFFFF] text-opacity-55 typeServicios font-inter font-light">
                                                                        Aéreo
                                                                    </label>
                                                                </div>

                                                                <div class="w-full">
                                                                    <input type="radio" id="id2" class="radio" value="Marítimo"
                                                                        name="service_product" />
                                                                    <label for="id2"
                                                                        class="text-text16 text-[#FFFFFF] text-opacity-55 typeServicios font-inter font-light">
                                                                        Marítimo
                                                                    </label>
                                                                </div>

                                                                <div class="w-full">
                                                                    <input type="radio" id="id3" class="radio" value="Logística y aduanas"
                                                                        name="service_product" />
                                                                    <label for="id3"
                                                                        class="text-text16 text-[#FFFFFF] text-opacity-55 typeServicios font-inter font-light">
                                                                        Logística y aduanas
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- --- -->
                                            <div>
                                                <textarea name="message" id="" rows="3" cols="30"
                                                    class="w-full py-3 px-4 focus:outline-none font-inter font-light text-text16 text-[#FFFFFF] focus:ring-0 placeholder:text-[#FFFFFF] placeholder:text-opacity-55 border-white border-b transition-all bg-primary focus:outline-0 border-t-0 border-l-0 border-r-0"
                                                    placeholder="Mensaje"></textarea>
                                            </div>

                                            <div class="flex justify-center items-center py-5">
                                                <button type="submit"
                                                    class="font-bold text-text18 font-inter text-white bg-[#FF7B29] py-4 px-6 w-full text-center rounded-lg">Quiero
                                                    una cotización</button>
                                            </div>
                                            <div class="flex flex-col gap-1">
                                                <div class="flex justify-start items-center gap-2">
                                                    <input id="aceptar" type="checkbox" required
                                                        class="w-4 h-4 cursor-pointer" />
                                                    <label for="aceptar"
                                                        class="font-inter font-light text-text16 text-white cursor-pointer">Acepto
                                                        recibir comunicaciones</label>
                                                </div>
                                                {{-- <div class="flex justify-start items-center gap-1">
                                                    <p class="font-inter font-light text-text16 text-white">
                                                        Al facilitar mis datos acepto la
                                                    </p>
                                                    <a href="#" target="_blank"
                                                        class="font-inter font-light text-text16 text-white underline">Política
                                                        de Privacidad</a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-11/12 mx-auto py-20">
            <div class="grid grid-cols-1 2md:grid-cols-3 gap-10 md:gap-20">
                <div class="flex flex-col gap-2">
                    <p class="text-primary font-inter font-bold text-text80">
                        100<span class="text-secondary">%</span>
                    </p>
                    <p class="w-full h-[2px] bg-[#FF7B29]"></p>
                    <h2 class="text-[#00557B] font-inter font-semibold text-text18]">
                        Satisfacción del cliente
                    </h2>
                </div>

                <div class="flex flex-col gap-2">
                    <p class="text-primary font-inter font-bold text-text80">
                        24<span class="text-secondary">/</span>7
                    </p>
                    <p class="w-full h-[2px] bg-[#FF7B29]"></p>
                    <h2 class="text-[#00557B] font-inter font-semibold text-text18]">
                        Fiabilidad
                    </h2>
                </div>

                <div class="flex flex-col gap-2">
                    <p class="text-primary font-inter font-bold text-text80">
                        320k<span class="text-secondary">+</span>
                    </p>
                    <p class="w-full h-[2px] bg-[#FF7B29]"></p>
                    <h2 class="text-[#00557B] font-inter font-semibold text-text18]">
                        Total de entregas
                    </h2>
                </div>
            </div>

            <div class="flex flex-col md:flex-row md:justify-between gap-10 pt-20">
                <div class="basis-1/2">
                    <img src="./images/img/image_19.png" alt="" class="w-full" />
                </div>

                <div class="flex flex-col gap-5 basis-1/2 w-full md:max-w-[540px] mx-auto justify-center">
                    <h2 class="text-primary leading-tight font-inter font-black text-text40">
                        Tus importaciones y exportaciones
                        <span class="text-secondary"> en las mejores manos?</span>
                    </h2>
                    <p class="text-[#818B90] font-inter font-normal text-text16">
                       @if (!is_null($general->aboutus))
                         {{$general->aboutus}}
                       @endif
                    </p>

                    <div class="flex justify-start items-center w-full md:w-auto">
                        <a href="#formContactos"
                            class="bg-[#00557B] text-white font-inter font-semibold text-text16 rounded-xl py-4 px-5 w-full md:w-auto text-center">
                            Quiero una cotización
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#F8F8F8] py-10 md:py-20">
            <div class="w-11/12 mx-auto flex flex-col gap-10">
                <h3 class="text-[#023B54] font-inter font-black text-text40 leading-tight text-center">
                    Características <span class="text-[#FF7B29]">del servicio</span>
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                    <div class="flex flex-col gap-4 group bg-white hover:bg-[#FF7B29] p-6 rounded-xl">
                        <div class="flex flex-col gap-2">
                            <div>
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.83203 28.0007C5.83203 17.5512 5.83203 12.3265 9.07826 9.08021C12.3245 5.83398 17.5492 5.83398 27.9987 5.83398C38.4481 5.83398 43.6729 5.83398 46.9192 9.08021C50.1654 12.3265 50.1654 17.5512 50.1654 28.0007C50.1654 38.45 50.1654 43.6748 46.9192 46.9212C43.6729 50.1673 38.4481 50.1673 27.9987 50.1673C17.5492 50.1673 12.3245 50.1673 9.07826 46.9212C5.83203 43.6748 5.83203 38.45 5.83203 28.0007Z"
                                        fill="#FF7B29" fill-opacity="0.4" stroke="#FF7B29" stroke-width="3.5"
                                        class="group-hover:stroke-strokeWithe group-hover:fill-fillWhite md:duration-300" />
                                    <path d="M18.668 29.1667L24.5013 35L37.3346 21" stroke="#FF7B29" stroke-width="3.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="group-hover:stroke-strokeWithe md:duration-300" />
                                </svg>
                            </div>

                            <div>
                                <h3
                                    class="text-[#023B54] font-inter font-semibold text-text32 group-hover:text-white md:duration-300">
                                    Seguridad y Confianza
                                </h3>
                                <p
                                    class="text-[#818B90] font-inter font-light text-text18 group-hover:text-white md:duration-300">
                                    Protegemos tus mercancías en todo momento con sistemas de
                                    seguridad avanzados y prácticas confiables, asegurando que
                                    tus productos lleguen a su destino en perfectas condiciones.
                                </p>
                            </div>
                        </div>
                        {{-- <div>
                            <a href="#"
                                class="font-inter font-medium text-text16 text-[#FF7B29] flex justify-start items-center gap-2 group-hover:text-white md:duration-300">
                                <span>Más Información</span>
                                <div>
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.88628 1.33334L12.3307 6.00001M12.3307 6.00001L7.88628 10.6667M12.3307 6.00001L1.66406 6.00001"
                                            stroke="#FF7B29" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="group-hover:stroke-strokeWithe md:duration-300" />
                                    </svg>
                                </div>
                            </a>
                        </div> --}}
                    </div>

                    <div class="flex flex-col gap-4 group bg-white hover:bg-[#FF7B29] p-6 rounded-xl">
                        <div class="flex flex-col gap-2">
                            <div>
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.83203 28.0007C5.83203 17.5512 5.83203 12.3265 9.07826 9.08021C12.3245 5.83398 17.5492 5.83398 27.9987 5.83398C38.4481 5.83398 43.6729 5.83398 46.9192 9.08021C50.1654 12.3265 50.1654 17.5512 50.1654 28.0007C50.1654 38.45 50.1654 43.6748 46.9192 46.9212C43.6729 50.1673 38.4481 50.1673 27.9987 50.1673C17.5492 50.1673 12.3245 50.1673 9.07826 46.9212C5.83203 43.6748 5.83203 38.45 5.83203 28.0007Z"
                                        fill="#FF7B29" fill-opacity="0.4" stroke="#FF7B29" stroke-width="3.5"
                                        class="group-hover:stroke-strokeWithe group-hover:fill-fillWhite md:duration-300" />
                                    <path d="M18.668 29.1667L24.5013 35L37.3346 21" stroke="#FF7B29" stroke-width="3.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="group-hover:stroke-strokeWithe md:duration-300" />
                                </svg>
                            </div>

                            <div>
                                <h3
                                    class="text-[#023B54] font-inter font-semibold text-text32 group-hover:text-white md:duration-300">
                                    Comunicacion Constante
                                </h3>
                                <p
                                    class="text-[#818B90] font-inter font-light text-text18 group-hover:text-white md:duration-300">
                                    Mantenemos una comunicación fluida y transparente durante
                                    todo el proceso logístico, brindándote actualizaciones
                                    regulares y acceso a la información que necesitas.
                                </p>
                            </div>
                        </div>
                        {{-- <div>
                            <a href="#"
                                class="font-inter font-medium text-text16 text-[#FF7B29] flex justify-start items-center gap-2 group-hover:text-white md:duration-300">
                                <span>Más Información</span>
                                <div>
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.88628 1.33334L12.3307 6.00001M12.3307 6.00001L7.88628 10.6667M12.3307 6.00001L1.66406 6.00001"
                                            stroke="#FF7B29" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="group-hover:stroke-strokeWithe md:duration-300" />
                                    </svg>
                                </div>
                            </a>
                        </div> --}}
                    </div>

                    <div class="flex flex-col gap-4 group bg-white hover:bg-[#FF7B29] p-6 rounded-xl">
                        <div class="flex flex-col gap-2">
                            <div>
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.83203 28.0007C5.83203 17.5512 5.83203 12.3265 9.07826 9.08021C12.3245 5.83398 17.5492 5.83398 27.9987 5.83398C38.4481 5.83398 43.6729 5.83398 46.9192 9.08021C50.1654 12.3265 50.1654 17.5512 50.1654 28.0007C50.1654 38.45 50.1654 43.6748 46.9192 46.9212C43.6729 50.1673 38.4481 50.1673 27.9987 50.1673C17.5492 50.1673 12.3245 50.1673 9.07826 46.9212C5.83203 43.6748 5.83203 38.45 5.83203 28.0007Z"
                                        fill="#FF7B29" fill-opacity="0.4" stroke="#FF7B29" stroke-width="3.5"
                                        class="group-hover:stroke-strokeWithe group-hover:fill-fillWhite md:duration-300" />
                                    <path d="M18.668 29.1667L24.5013 35L37.3346 21" stroke="#FF7B29" stroke-width="3.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="group-hover:stroke-strokeWithe md:duration-300" />
                                </svg>
                            </div>

                            <div>
                                <h3
                                    class="text-[#023B54]  font-inter font-semibold text-text32 group-hover:text-white md:duration-300">
                                    Eficiencia en el seguimiento
                                </h3>
                                <p
                                    class="text-[#818B90] font-inter font-light text-text18 group-hover:text-white md:duration-300">
                                    Contamos con un equipo altamente calificado y los sistemas adecuados para realizar la
                                    trazabilidad que tus embarques requieren, logrando la mejor visibilidad del transporte
                                    de tus productos y mercancías.
                                </p>
                            </div>
                        </div>
                        {{-- <div>
                            <a href="#"
                                class="font-inter font-medium text-text16 text-[#FF7B29] flex justify-start items-center gap-2 group-hover:text-white md:duration-300">
                                <span>Más Información</span>
                                <div>
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.88628 1.33334L12.3307 6.00001M12.3307 6.00001L7.88628 10.6667M12.3307 6.00001L1.66406 6.00001"
                                            stroke="#FF7B29" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="group-hover:stroke-strokeWithe md:duration-300" />
                                    </svg>
                                </div>
                            </a>
                        </div> --}}
                    </div>

                    <div class="flex flex-col gap-4 group bg-white hover:bg-[#FF7B29] p-6 rounded-xl">
                        <div class="flex flex-col gap-2">
                            <div>
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.83203 28.0007C5.83203 17.5512 5.83203 12.3265 9.07826 9.08021C12.3245 5.83398 17.5492 5.83398 27.9987 5.83398C38.4481 5.83398 43.6729 5.83398 46.9192 9.08021C50.1654 12.3265 50.1654 17.5512 50.1654 28.0007C50.1654 38.45 50.1654 43.6748 46.9192 46.9212C43.6729 50.1673 38.4481 50.1673 27.9987 50.1673C17.5492 50.1673 12.3245 50.1673 9.07826 46.9212C5.83203 43.6748 5.83203 38.45 5.83203 28.0007Z"
                                        fill="#FF7B29" fill-opacity="0.4" stroke="#FF7B29" stroke-width="3.5"
                                        class="group-hover:stroke-strokeWithe group-hover:fill-fillWhite md:duration-300" />
                                    <path d="M18.668 29.1667L24.5013 35L37.3346 21" stroke="#FF7B29" stroke-width="3.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="group-hover:stroke-strokeWithe md:duration-300" />
                                </svg>
                            </div>

                            <div>
                                <h3
                                    class="text-[#023B54] font-inter font-semibold text-text32 group-hover:text-white md:duration-300">
                                    Personal Calificado
                                </h3>
                                <p
                                    class="text-[#818B90] font-inter font-light text-text18 group-hover:text-white md:duration-300">
                                    Nuestro equipo está compuesto por profesionales altamente
                                    capacitados y con amplia experiencia en logística
                                    internacional, asegurando un manejo eficiente y seguro de
                                    tus mercancías.
                                </p>
                            </div>
                        </div>
                        {{-- <div>
                            <a href="#"
                                class="font-inter font-medium text-text16 text-[#FF7B29] flex justify-start items-center gap-2 group-hover:text-white md:duration-300">
                                <span>Más Información</span>
                                <div>
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.88628 1.33334L12.3307 6.00001M12.3307 6.00001L7.88628 10.6667M12.3307 6.00001L1.66406 6.00001"
                                            stroke="#FF7B29" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="group-hover:stroke-strokeWithe md:duration-300" />
                                    </svg>
                                </div>
                            </a>
                        </div> --}}
                    </div>

                    <div class="flex flex-col gap-4 group bg-white hover:bg-[#FF7B29] p-6 rounded-xl">
                        <div class="flex flex-col gap-2">
                            <div>
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.83203 28.0007C5.83203 17.5512 5.83203 12.3265 9.07826 9.08021C12.3245 5.83398 17.5492 5.83398 27.9987 5.83398C38.4481 5.83398 43.6729 5.83398 46.9192 9.08021C50.1654 12.3265 50.1654 17.5512 50.1654 28.0007C50.1654 38.45 50.1654 43.6748 46.9192 46.9212C43.6729 50.1673 38.4481 50.1673 27.9987 50.1673C17.5492 50.1673 12.3245 50.1673 9.07826 46.9212C5.83203 43.6748 5.83203 38.45 5.83203 28.0007Z"
                                        fill="#FF7B29" fill-opacity="0.4" stroke="#FF7B29" stroke-width="3.5"
                                        class="group-hover:stroke-strokeWithe group-hover:fill-fillWhite md:duration-300" />
                                    <path d="M18.668 29.1667L24.5013 35L37.3346 21" stroke="#FF7B29" stroke-width="3.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="group-hover:stroke-strokeWithe md:duration-300" />
                                </svg>
                            </div>

                            <div>
                                <h3
                                    class="text-[#023B54] font-inter font-semibold text-text32 group-hover:text-white md:duration-300">
                                    Asesoría Aduanera Personalizada
                                </h3>
                                <p
                                    class="text-[#818B90] font-inter font-light text-text18 group-hover:text-white md:duration-300">
                                    Ofrecemos consultoría aduanera adaptada a tus necesidades,
                                    ayudándote a navegar por las complejidades de las
                                    regulaciones internacionales y simplificando el proceso de
                                    importación y exportación.
                                </p>
                            </div>
                        </div>
                        {{-- <div>
                            <a href="#"
                                class="font-inter font-medium text-text16 text-[#FF7B29] flex justify-start items-center gap-2 group-hover:text-white md:duration-300">
                                <span>Más Información</span>
                                <div>
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.88628 1.33334L12.3307 6.00001M12.3307 6.00001L7.88628 10.6667M12.3307 6.00001L1.66406 6.00001"
                                            stroke="#FF7B29" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="group-hover:stroke-strokeWithe md:duration-300" />
                                    </svg>
                                </div>
                            </a>
                        </div> --}}
                    </div>

                    <div class="flex flex-col gap-4 group bg-white hover:bg-[#FF7B29] p-6 rounded-xl">
                        <div class="flex flex-col gap-2">
                            <div>
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.83203 28.0007C5.83203 17.5512 5.83203 12.3265 9.07826 9.08021C12.3245 5.83398 17.5492 5.83398 27.9987 5.83398C38.4481 5.83398 43.6729 5.83398 46.9192 9.08021C50.1654 12.3265 50.1654 17.5512 50.1654 28.0007C50.1654 38.45 50.1654 43.6748 46.9192 46.9212C43.6729 50.1673 38.4481 50.1673 27.9987 50.1673C17.5492 50.1673 12.3245 50.1673 9.07826 46.9212C5.83203 43.6748 5.83203 38.45 5.83203 28.0007Z"
                                        fill="#FF7B29" fill-opacity="0.4" stroke="#FF7B29" stroke-width="3.5"
                                        class="group-hover:stroke-strokeWithe group-hover:fill-fillWhite md:duration-300" />
                                    <path d="M18.668 29.1667L24.5013 35L37.3346 21" stroke="#FF7B29" stroke-width="3.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="group-hover:stroke-strokeWithe md:duration-300" />
                                </svg>
                            </div>

                            <div>
                                <h3
                                    class="text-[#023B54] font-inter font-semibold text-text32 group-hover:text-white md:duration-300">
                                    Cobertura Global
                                </h3>
                                <p
                                    class="text-[#818B90] font-inter font-light text-text18 group-hover:text-white md:duration-300">
                                    Ofrecemos servicios de importación y exportación en más de
                                    170 países, garantizando una amplia cobertura geográfica.
                                </p>
                            </div>
                        </div>
                        {{-- <div>
                            <a href="#"
                                class="font-inter font-medium text-text16 text-[#FF7B29] flex justify-start items-center gap-2 group-hover:text-white md:duration-300">
                                <span>Más Información</span>
                                <div>
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.88628 1.33334L12.3307 6.00001M12.3307 6.00001L7.88628 10.6667M12.3307 6.00001L1.66406 6.00001"
                                            stroke="#FF7B29" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="group-hover:stroke-strokeWithe md:duration-300" />
                                    </svg>
                                </div>
                            </a>
                        </div> --}}
                    </div>

                    <div class="flex flex-col gap-4 group bg-white hover:bg-[#FF7B29] p-6 rounded-xl">
                        <div class="flex flex-col gap-2">
                            <div>
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.83203 28.0007C5.83203 17.5512 5.83203 12.3265 9.07826 9.08021C12.3245 5.83398 17.5492 5.83398 27.9987 5.83398C38.4481 5.83398 43.6729 5.83398 46.9192 9.08021C50.1654 12.3265 50.1654 17.5512 50.1654 28.0007C50.1654 38.45 50.1654 43.6748 46.9192 46.9212C43.6729 50.1673 38.4481 50.1673 27.9987 50.1673C17.5492 50.1673 12.3245 50.1673 9.07826 46.9212C5.83203 43.6748 5.83203 38.45 5.83203 28.0007Z"
                                        fill="#FF7B29" fill-opacity="0.4" stroke="#FF7B29" stroke-width="3.5"
                                        class="group-hover:stroke-strokeWithe group-hover:fill-fillWhite md:duration-300" />
                                    <path d="M18.668 29.1667L24.5013 35L37.3346 21" stroke="#FF7B29" stroke-width="3.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="group-hover:stroke-strokeWithe md:duration-300" />
                                </svg>
                            </div>

                            <div>
                                <h3
                                    class="text-[#023B54] font-inter font-semibold text-text32 group-hover:text-white md:duration-300">
                                    Transporte Marítimo con Partners Logistics Perú S.A.C.
                                </h3>
                                <p
                                    class="text-[#818B90] font-inter font-light text-text18 group-hover:text-white md:duration-300">
                                    Ofrecemos soluciones seguras y eficientes para envíos internacionales, tanto FCL como LCL, 
                                    asegurando puntualidad, reduciendo costos, y optimizando la logística de tus productos.  
                                    Garantizamos tarifas competitivas, espacio disponible y acceso a rutas comerciales globales. 
                                    Confía en nosotros para llevar tu carga a cualquier destino del mundo con seguridad y flexibilidad.
                                </p>
                            </div>
                        </div>
                        {{-- <div>
                            <a href="#"
                                class="font-inter font-medium text-text16 text-[#FF7B29] flex justify-start items-center gap-2 group-hover:text-white md:duration-300">
                                <span>Más Información</span>
                                <div>
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.88628 1.33334L12.3307 6.00001M12.3307 6.00001L7.88628 10.6667M12.3307 6.00001L1.66406 6.00001"
                                            stroke="#FF7B29" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="group-hover:stroke-strokeWithe md:duration-300" />
                                    </svg>
                                </div>
                            </a>
                        </div> --}}
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <a href="#formContactos"
                        class="font-inter font-bold text-text18 text-white bg-[#FF7B29] rounded-[8px] py-4 px-6">Quiero una
                        cotización</a>
                </div>
            </div>
        </section>

        <section>
            <div class="grid grid-cols-1 md:grid-cols-2 w-11/12 mx-auto gap-10 md:gap-24 py-20">
                <div class="order-2 md:order-1 flex flex-col gap-10 w-full md:max-w-[652px]">
                    <h3 class="font-black font-inter text-text40 text-[#023B54] leading-tight text-center md:text-left">
                        Beneficio <span class="text-[#FF7B29]">del servicio</span>
                    </h3>

                    <div class="flex flex-col gap-5">
                        <div class="flex justify-start items-start gap-3">
                            <div class="flex justify-start items-center">
                                <img src="./images/svg/image_4.svg" alt="servicios" />
                            </div>
                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#023B54] font-inter font-semibold text-text20 leading-tight">
                                    Eficiencia Operacional
                                </h2>
                                <p class="font-inter text-[#818B90] font-light text-text16">
                                    Nuestros servicios optimizados garantizan que sus operaciones logísticas se realicen de
                                    manera rápida y eficiente, reduciendo los sobrecostos operacionales y optimizando el
                                    traslado de sus cargas.
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-start items-start gap-3">
                            <div class="flex justify-start items-center">
                                <img src="./images/svg/image_4.svg" alt="servicios" />
                            </div>
                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#023B54] font-inter font-semibold text-text20 leading-tight">
                                    Reducción de riesgos
                                </h2>
                                <p class="font-inter text-[#818B90] font-light text-text16">
                                    Con nuestro soporte experto y servicios de seguimiento en tiempo real, minimizamos los
                                    riesgos y nos adelantamos a las situaciones que puedan afectar su cadena logística.
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-start items-start gap-3">
                            <div class="flex justify-start items-center">
                                <img src="./images/svg/image_4.svg" alt="servicios" />
                            </div>
                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#023B54] font-inter font-semibold text-text20 leading-tight">
                                    Cumplimiento y Regulación
                                </h2>
                                <p class="font-inter text-[#818B90] font-light text-text16">
                                    Nos aseguramos de que todas las operaciones de importación y exportación cuenten con el
                                    fiel cumplimiento de las normas logísticas y aduaneras, evitando costos adicionales por
                                    multas o sanciones.
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-start items-start gap-3">
                            <div class="flex justify-start items-center">
                                <img src="./images/svg/image_4.svg" alt="servicios" />
                            </div>
                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#023B54] font-inter font-semibold text-text20 leading-tight">
                                    Ahorro de costes
                                </h2>
                                <p class="font-inter text-[#818B90] font-light text-text16">
                                    Nuestras soluciones personalizadas y transporte multimodal
                                    ayudan a reducir costes, ofreciendo una excelente relación
                                    calidad-precio para su negocio.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-1 md:order-2">
                    <div class="flex justify-center items-start">
                        <img src="./images/img/image_7.png" alt="Partners Logistic"
                            class="rounded-3xl hidden md:block" />

                        <img src="./images/img/image_8.png" alt="Partners Logistic"
                            class="rounded-3xl block md:hidden" />
                    </div>
                </div>
            </div>
        </section>


        @if ($certificados->isEmpty())
        @else
            <section class="pt-0 pb-20" id="tarifarios">
                <div class="w-11/12 mx-auto">
                    <div class="w-full md:max-w-[1000px] mx-auto flex flex-col gap-16 py-20">
                        <div class="flex flex-col gap-2">
                            <h2
                                class="text-[#023B54] font-inter font-black text-text40 text-center leading-tight">
                                Nuestros <span class="text-[#FF7B29]">tarifarios</span></h2>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 lg:gap-20">
                        @foreach ($certificados as $descargable)
                            <div class="flex justify-start items-center gap-4 h-[100px]">
                                <div class="rounded-xl flex justify-center items-center w-2/5 h-full ">
                                    <img src="{{ asset('images/img/sobresalir.png') }}" alt="catalogo"
                                        class="w-[100px] md:w-[150px] h-[100px] object-contain object-right">
                                </div>
                                <div class="flex flex-col gap-4 w-3/5">
                                    <div class="flex flex-col gap-2">
                                        <h2 class="text-[#082252] font-roboto font-bold text-text18 leading-tight">
                                            {{$descargable->title}}</h2>
                                    </div>

                                    <a href="{{ asset('storage/archives/'.$descargable->name_archive) }}" target="_blank" 
                                        class="text-[#FF5E14] font-roboto font-normal text-text10 md:text-text16 flex justify-start items-center gap-2">
                                        <span>Descargar</span>
                                        <div>
                                            <img src="{{ asset('images/img/descargarimg.png') }}" alt="download"
                                                class="w-[25px] h-auto">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif


        <section>
            <div class="relative w-11/12 mx-auto py-10 md:pt-10 md:pb-20">
                <div class="flex justify-center items-center">
                    <img src="./images/img/image_9.png" alt="Partners Logistic Peru"
                        class="w-full h-[768px] object-cover hidden md:block rounded-2xl" />

                    <img src="./images/img/image_10.png" alt="Partners Logistic Peru"
                        class="w-full h-[768px] object-cover block md:hidden rounded-2xl" />
                </div>

                <div
                    class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-11/12 mx-auto md:max-w-[1000px] flex flex-col gap-5">
                    <h2 class="font-inter font-bold text-text40 md:text-text48 leading-tight text-white text-center">
                        Servicios de envío y logística
                    </h2>
                    <p class="font-inter font-normal text-text18 text-white text-center">
                        Nuestro principal objetivo es convertirnos en sus socios
                        estrategicos y apoyarlos en el manejo de todos los servicios que
                        intervienen en sus operaciones de comercio exterior
                    </p>

                    <div class="flex justify-center items-center">
                        <a href="#formContactos"
                            class="text-white font-inter font-bold text-text18 py-4 px-5 text-center bg-[#FF7B29] rounded-xl">Quiero
                            una cotización</a>
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
                console.log(hamburguesa)
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
        var swiper = new Swiper(".logos", {
            slidesPerView: 6,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    centeredSlides: true,
                },
                768: {
                    slidesPerView: 6,
                    centeredSlides: false,
                    autoplay: false,
                },
            },
        });

        var servicios = new Swiper(".servicios", {
            slidesPerView: 4,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            loop: false,
        });
    </script>

    <script>
        var input1 = document.querySelector(".input-box1");

        input1.onclick = function() {
            input1.classList.toggle("open");
            let list1 = input1.nextElementSibling;
            if (list1.style.maxHeight) {
                list1.style.maxHeight = null;
                list1.style.boxShadow = null;
            } else {
                /* list.style.maxHeight = list.scrollHeight + "px"; */
                list1.style.maxHeight = 150 + "px";
                list1.style.boxShadow =
                    "0 1px 2px 0 rgba(0, 0, 0, 0.15),0 1px 3px 1px rgba(0, 0, 0, 0.1)";
            }
        };

        var span1 = document.querySelector(".span-opacity1");
        var rad1 = document.querySelectorAll(".radio_1");
        rad1.forEach((item) => {
            item.addEventListener("change", () => {
                console.log("click");
                span1.textContent = item.nextElementSibling.textContent;
                if (span1.textContent.trim() === "Servicio") {
                    span1.classList.add("opacity-55");
                } else {
                    span1.classList.remove("opacity-55");
                }

                input1.click();
            });
        });
        /* ----------------------------------------------------------- */
        var input = document.querySelector(".input-box");

        input.onclick = function() {
            this.classList.toggle("open");
            let list = this.nextElementSibling;
            if (list.style.maxHeight) {
                list.style.maxHeight = null;
                list.style.boxShadow = null;
            } else {
                /* list.style.maxHeight = list.scrollHeight + "px"; */
                list.style.maxHeight = 150 + "px";
                list.style.boxShadow =
                    "0 1px 2px 0 rgba(0, 0, 0, 0.15),0 1px 3px 1px rgba(0, 0, 0, 0.1)";
            }
        };

        var span = document.querySelector(".span-opacity");
        var rad = document.querySelectorAll(".radio");
        rad.forEach((item) => {
            item.addEventListener("change", () => {
                /* input.innerHTML = item.nextElementSibling.innerHTML;
          input.click(); */
                span.textContent = item.nextElementSibling.textContent;
                if (span.textContent.trim() === "Tipo de transporte") {
                    span.classList.add("opacity-55");
                } else {
                    span.classList.remove("opacity-55");
                }

                input.click();
            });
        });
    </script>
@stop

@stop
