<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <div
            class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
            <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl">Mensaje de
                    {{ $message->full_name }}</h2>
            </header>
            <div class="p-3">

                <div class="p-6 ">

                    <div class="flex flex-col gap-3 pb-10">
                        <p>
                            <span class="font-bold text-[18px]">Nombre:</span> <span
                                class="text-[16px]">{{ $message->full_name }}</span>
                        </p>
                        <p>
                            <span class="font-bold text-[18px]">Teléfono:</span> <span
                                class="text-[16px]">{{ $message->phone }}</span>
                        </p>
                        <p>
                          <span class="font-bold text-[18px]">RUC:</span> <span
                              class="text-[16px]">{{ $message->ruc }}</span>
                      </p>
                        <p>
                            <span class="font-bold text-[18px]">Correo:</span> <span
                                class="text-[16px]">{{ $message->email }}</span>
                        </p>

                        <p>
                            <span class="font-bold text-[18px]">Servicio:</span> <span
                                class="text-[16px]">{{ $message->service_product_servicio }}</span>
                        </p>

                        <p>
                            <span class="font-bold text-[18px]">Tipo de transporte:</span> <span
                                class="text-[16px]">{{ $message->service_product }}</span>
                        </p>

                    </div>

                    <a href="{{ route('mensajes.index') }}" class="bg-blue-500 px-4 py-2 rounded text-white"><span><i
                                class="fa-solid fa-arrow-left mr-2"></i></span> Volver</a>

                </div>
            </div>
        </div>

    </div>



</x-app-layout>
