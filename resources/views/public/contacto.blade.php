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
        <section class="w-11/12 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 py-20">
                <div class="flex flex-col justify-between gap-5 md:gap-44">
                    <div class="flex flex-col gap-5 w-full md:max-w-[636px] mx-auto" data-aos="fade-up" data-aos-offset="150">
                        <h3 class="text-[#2E67A4] font-archivo font-bold text-text48 md:text-text64 leading-none">
                            Nuestros datos de <span class="text-[#289A7B]">contacto</span>
                        </h3>
                        <p class="text-[#696969] font-archivo font-normal text-text18">
                            Nullam nec orci dui. Praesent tristique facilisis quam, a
                            egestas lorem consectetur fringilla. Suspendisse cursus erat
                            eget ante auctor, non hendrerit ipsum egestas.
                        </p>
                    </div>

                    <div class="flex flex-col gap-10 w-full md:max-w-[636px] mx-auto">
                        <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
                            <p class="text-[#2E67A4] font-archivo text-text24 font-bold">
                                Horario
                            </p>
                            <div>
                                {{-- <p class="text-[#696969] font-archivo text-text16 font-normal">
                                    Lunes - Sábados
                                </p>
                                <p class="text-[#696969] font-archivo text-text16 font-normal">
                                    9:00 am - 5:00 pm
                                </p> --}}
                                <p class="text-[#696969] font-archivo text-text16 font-normal">
                                    {{ $general->schedule }}
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
                            <p class="text-[#2E67A4] font-archivo text-text24 font-bold">
                                Dirección
                            </p>
                            <div>
                                <p class="text-[#696969] font-archivo text-text16 font-normal">
                                    {{-- Av. Antonio Miroquesada 457, Ofic. 1301 - Magdalena del Mar,
                                    Lima - Perú (Ex Av.Juan de Aliaga) --}}
                                    {{ $general->address }}, {{ $general->inside }}, Lima - {{ $general->country }} (Ex
                                    Av.Juan de Aliaga)
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
                            <p class="text-[#2E67A4] font-archivo text-text24 font-bold">
                                Ponerse en contacto
                            </p>
                            <div>
                                <p class="text-[#696969] font-archivo text-text16 font-normal">
                                    {{ $general->cellphone }}
                                </p>
                                <p class="text-[#696969] font-archivo text-text16 font-normal">
                                    {{ $general->office_phone }}
                                </p>
                                <p class="text-[#696969] font-archivo text-text16 font-normal">
                                    {{ $general->whatsapp }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="max-w-[535px] mx-auto flex flex-col gap-10">
                        <div class="flex flex-col gap-2">
                            <h3 class="text-[#2E67A4] font-archivo font-semibold text-text32">
                                Deja tus datos
                            </h3>
                            <p class="text-[#696969] font-normal text-text18 font-archivo">
                                Donec ac nisl ut mauris facilisis finibus. Nulla sed ultrices
                                enim, nec consectetur tortor.
                            </p>
                        </div>
                        <form action="" id="formContactosNew" class="flex flex-col gap-5">
                            @csrf
                            <div data-aos="fade-up" data-aos-offset="150">
                                <input required type="text" name="full_name" placeholder="Nombre completo"
                                    class="placeholder:text-opacity-40 placeholder:text-[#121212] font-archivo text-text16 lg:text-text18 font-normal text-[#2E67A4] focus:font-semibold w-full py-5 px-5 focus:outline-none border-b border-[#2E67A4] transition-all focus:outline-0 focus:border-transparent border-t-0 border-l-0 border-r-0" />
                            </div>

                            <div data-aos="fade-up" data-aos-offset="150">
                                <input maxlength="9" required type="tel" name="phone" placeholder="Teléfono"
                                    id="telefonoContacto"
                                    class="placeholder:text-opacity-40 placeholder:text-[#121212] font-archivo text-text16 lg:text-text18 font-normal text-[#2E67A4] focus:font-semibold w-full py-5 px-5 focus:outline-none border-b border-[#2E67A4] transition-all focus:outline-0 focus:border-transparent border-t-0 border-l-0 border-r-0" />
                            </div>

                            <div data-aos="fade-up" data-aos-offset="150">
                                <input required type="email" name="email" placeholder="E-mail" id="emailContacto"
                                    class="placeholder:text-opacity-40 placeholder:text-[#121212] font-archivo text-text16 lg:text-text18 font-normal text-[#2E67A4] focus:font-semibold w-full py-5 px-5 focus:outline-none border-b border-[#2E67A4] transition-all focus:outline-0 focus:border-transparent border-t-0 border-l-0 border-r-0" />
                            </div>

                            <div data-aos="fade-up" data-aos-offset="150">
                                <div class="flex flex-col gap-2 z-[45]">
                                    <div>
                                        <!-- combo -->
                                        <div class="dropdown w-full">
                                            <div
                                                class="input-box focus:outline-none text-opacity-40 font-archivo text-text16 lg:text-text18 font-normal text-[#2E67A4] focus:font-semibold border-b border-[#2E67A4] py-9 px-5">
                                                <span
                                                    class="opacity-40 span-opacity text-[#2E67A4] font-archivo text-text16 lg:text-text18 font-semibold"
                                                    id="span-opacity">Tipo de servicios</span>
                                            </div>
                                            <div class="list overflow-y-scroll h-[150px] scroll-typeServiciosContacto">
                                                <div class="w-full">
                                                    <input type="radio" id="id0" class="radio"
                                                        name="service_product" value="Tipo de servicios" />

                                                    <label for="id0"
                                                        class="text-text16 md:text-text18 text-[#121212] text-opacity-40 typeServiciosContacto font-archivo">
                                                        Tipo de servicios
                                                    </label>
                                                </div>
                                                <div class="w-full">
                                                    <input type="radio" id="id1" class="radio"
                                                        name="service_product" value="Gestion ISO" />

                                                    <label for="id1"
                                                        class="text-text16 md:text-text18 text-[#121212] text-opacity-40 typeServiciosContacto font-archivo">
                                                        Gestión ISO
                                                    </label>
                                                </div>

                                                <div class="w-full">
                                                    <input type="radio" id="id2" class="radio"
                                                        name="service_product" />
                                                    <label for="id2"
                                                        class="text-text16 md:text-text18 text-[#121212] text-opacity-40 typeServiciosContacto font-archivo">
                                                        Capacitaciones
                                                    </label>
                                                </div>

                                                <div class="w-full">
                                                    <input type="radio" id="id3" class="radio"
                                                        name="service_product" />
                                                    <label for="id3"
                                                        class="text-text16 md:text-text18 text-[#121212] text-opacity-40 typeServiciosContacto font-archivo">
                                                        Inspecciones
                                                    </label>
                                                </div>

                                                <div class="w-full">
                                                    <input type="radio" id="id4" class="radio"
                                                        name="service_product" />
                                                    <label for="id4"
                                                        class="text-text16 md:text-text18 text-[#121212] text-opacity-40 typeServiciosContacto font-archivo">
                                                        Auditorías
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-center items-center" data-aos="fade-up" data-aos-offset="150">
                                <button type="submit"
                                    class="text-[#FFFFFF] font-archivo font-bold text-text16 lg:text-text20 w-full bg-[#2E67A4] py-4 px-10 text-center rounded-lg">
                                    Enviar
                                    solicitud
                                </button>
                            </div>
                        </form>
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
                <div class="w-11/12 md:max-w-[646px] mx-auto flex flex-col justify-center gap-5" data-aos="fade-up"
                    data-aos-offset="150">
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
                if (span.textContent.trim() === "Tipo de servicios") {
                    span.classList.add("opacity-40");
                } else {
                    span.classList.remove("opacity-40");
                }

                input.click();
            });
        });

        /* var valorSeleccionado = $('input[name="service_product"]:checked').val();
          if (
            valorSeleccionado === "Tipo de Servicios" ||
            valorSeleccionado === undefined
          ) {
            console.log("click");
          } */
    </script>

@stop

@stop
