<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Monitor</title>
        <link href="monitor/dist/output.css" rel="stylesheet" />
    </head>
    <body
        class="bg-gradient-to-tr from-indigo-200 from-50% via-teal-200 via-60% to-green-200 h-screen dark:bg-gradient-to-r dark:from-indigo-200 dark:via-slate-900 dark:to-green-200"
    >
        <section id="head" class="flex justify-center h-[10vh]">
            <div class="mr-4 flex items-center">
                <img src="monitor/img/pura.png" alt="logo" class="h-auto w-16" />
            </div>
            <div class="">
                <div class="flex justify-center">
                    <h1 class="font-bold text-lg">
                        PT. PURA BARUTAMA DIVISI ENGINEERING
                    </h1>
                </div>
                <p>
                    Jl. Kudus - Pati KM. 12 Kudus 59382 Telp. 0291 431121,
                    431606 Fax. 0291 433755
                </p>
                <p>
                    Email: marketing_wks@kudus.puragroup.com, http:
                    //engineering.puragroup.com
                </p>
            </div>
        </section>
        <section class="p-5 h-[90vh]">
            <div class="flex flex-row h-1/2 pb-2">
                <div
                    class="flex justify-center bg-white h-full w-full basis-3/10 mx-2 rounded-md shadow-md"
                >
                    <div class="block rounded-md h-full pb-2 w-full">
                        <div
                            class="border-b-2 border-neutral-100 py-3 px-6 text-center h-1/7"
                        >
                            <span class="font-bold text-lg">E-Katalog</span>
                        </div>
                        <div class="h-6/7 relative w-full overflow-y-hidden">
                            <ul class="p-4 absolute w-full animate-naik">
                                @foreach ($list_katalog as $katalog)
                                
                                <li class="bg-slate-200 p-2 rounded-sm mb-2 shadow-sm" >
                                    <div class="flex justify-between">
                                        <div>
                                            <h1 class="text-md font-bold">
                                                {{ $katalog->nama_mesin }}
                                                <span
                                                    class="text-base font-normal"
                                                    >(Qty {{ $katalog->qty }})</span >
                                            </h1>
                                            <p> {{ $katalog->lokasi }} </p>
                                            <p class="font-semibold text-blue-800" >
                                                {{ $katalog->sales }}
                                            </p>
                                        </div>
                                        <div class="text-end">
                                            <div class="flex justify-end text-center" >
                                                <p class="py-1 px-3 @if($katalog->status == 'nego') bg-orange-300 text-orange-900 @elseif($katalog->status == 'kontrak') bg-blue-600 text-white @elseif($katalog->status == 'deal') bg-teal-600 text-white  @endif text-center text-sm rounded-lg " >
                                                    {{ $katalog->status }}
                                                </p>
                                            </div>
                                            <p>Rp. {{ $katalog->nilai_kontrak }}</p>
                                            <p class="text-blue-500 font-bold">
                                                {{ $katalog->deltime }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                    
                                @endforeach
                                
                            </ul>

                            <ul class="p-4 absolute w-full animate-naik2">
                                @foreach ($list_katalog as $katalog)
                                
                                <li class="bg-slate-200 p-2 rounded-sm mb-2 shadow-sm" >
                                    <div class="flex justify-between">
                                        <div>
                                            <h1 class="text-md font-bold">
                                                {{ $katalog->nama_mesin }}
                                                <span
                                                    class="text-base font-normal"
                                                    >(Qty {{ $katalog->qty }})</span >
                                            </h1>
                                            <p> {{ $katalog->lokasi }} </p>
                                            <p class="font-semibold text-blue-800" >
                                                {{ $katalog->sales }}
                                            </p>
                                        </div>
                                        <div class="text-end">
                                            
                                            <div class="flex justify-end text-center" >
                                                <p class="py-1 px-3 @if($katalog->status == 'nego') bg-orange-300 text-orange-900 @elseif($katalog->status == 'kontrak') bg-blue-600 text-white @elseif($katalog->status == 'deal') bg-teal-600 text-white  @endif text-center text-sm rounded-lg " >
                                                    {{ $katalog->status }}
                                                </p>
                                            </div>
                                            <p>Rp. {{ $katalog->nilai_kontrak }}</p>
                                            <p class="text-blue-500 font-bold">
                                                {{ $katalog->deltime }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                    
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-white w-full basis-4/10 mx-2 rounded-md bg-cover overflow-hidden shadow-md"
                >
                    <video autoplay muted loop>
                        <source
                            src="/monitor/video/PURA GROUP INDONESIA.mp4"
                            type="video/mp4"
                        />
                        Your browser does not support the video tag.
                    </video>
                </div>

                <div
                    class="flex justify-center bg-white w-full basis-3/10 mx-2 rounded-md shadow-md"
                >
                <div class="block rounded-md h-full overflow-hidden pb-2 w-full" >
                    <div
                        class="border-b-2 border-neutral-100 py-3 px-6 text-center h-1/7"
                    >
                        <span class="font-bold text-lg">BAST</span>
                    </div>
                    <div class="overflow-y-hidden h-6/7 relative">
                        <ul class="p-4 w-full">
                            <li class="bg-slate-200 p-2 mb-2 rounded-sm">
                                <div class="mb-1 text-base font-semibold">
                                    NO POI : 09090/KTT/2022
                                    <span class="ml-3 font-thin text-base"
                                        >( Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Ex,
                                        qui! )</span
                                    >
                                </div>
                                <div class="grid grid-cols-6 gap-1">
                                    <div
                                        class="bg-teal-600 text-white rounded-md overflow-hidden"
                                    >
                                        <div class="text-center">
                                            Kontrak
                                        </div>
                                        <div class="text-center text-sm">
                                            8 April 2023
                                        </div>
                                    </div>
                                    <div
                                        class="bg-teal-600 text-white rounded-md overflow-hidden"
                                    >
                                        <div class="text-center">Kirim</div>
                                        <div class="text-center text-sm">
                                            17 agst 1945
                                        </div>
                                    </div>
                                    <div
                                        class="bg-orange-300 rounded-md overflow-hidden"
                                    >
                                        <div class="text-center">
                                            Sampai
                                        </div>
                                        <div
                                            class="text-center text-sm"
                                        ></div>
                                    </div>
                                    <div
                                        class="bg-gray-300 rounded-md overflow-hidden"
                                    >
                                        <div class="text-center">
                                            Pasang
                                        </div>
                                        <div
                                            class="text-center text-sm"
                                        ></div>
                                    </div>
                                    <div
                                        class="bg-gray-300 rounded-md overflow-hidden"
                                    >
                                        <div class="text-center">
                                            Uji coba
                                        </div>
                                        <div
                                            class="text-center text-sm"
                                        ></div>
                                    </div>
                                    <div
                                        class="bg-gray-300 rounded-md overflow-hidden"
                                    >
                                        <div class="text-center">BAST</div>
                                        <div
                                            class="text-center text-sm"
                                        ></div>
                                    </div>
                                </div>
                            </li>
                            <li class="bg-slate-200 p-2 mb-2 rounded-sm">
                                <div class="mb-1 text-base font-semibold">
                                    NO POI : 09090/KTT/2022
                                </div>
                                <div class="grid grid-cols-6 gap-1">
                                    <div
                                        class="bg-teal-600 rounded-md overflow-hidden"
                                    >
                                        <div class="text-center text-white">
                                            Kontrak
                                        </div>
                                        <div
                                            class="text-center text-sm text-white"
                                        >
                                            8 April 2023
                                        </div>
                                    </div>
                                    <div
                                        class="bg-gray-300 rounded-md overflow-hidden"
                                    >
                                        <div class="text-center">Kirim</div>
                                        <div
                                            class="text-center text-sm"
                                        ></div>
                                    </div>
                                    <div
                                        class="bg-gray-300 rounded-md overflow-hidden"
                                    >
                                        <div class="text-center">
                                            Sampai
                                        </div>
                                        <div
                                            class="text-center text-sm"
                                        ></div>
                                    </div>
                                    <div
                                        class="bg-gray-300 rounded-md overflow-hidden"
                                    >
                                        <div class="text-center">
                                            Pasang
                                        </div>
                                        <div
                                            class="text-center text-sm"
                                        ></div>
                                    </div>
                                    <div
                                        class="bg-gray-300 rounded-md overflow-hidden"
                                    >
                                        <div class="text-center">
                                            Uji coba
                                        </div>
                                        <div
                                            class="text-center text-sm"
                                        ></div>
                                    </div>
                                    <div
                                        class="bg-gray-300 rounded-md overflow-hidden"
                                    >
                                        <div class="text-center">BAST</div>
                                        <div
                                            class="text-center text-sm"
                                        ></div>
                                    </div>
                                </div>
                            </li>
                            <li class="bg-slate-200 p-2 mb-2 rounded-sm">
                                <div class="mb-1 text-base font-semibold">
                                    NO POI : 09090/KTT/2022
                                </div>
                                <div class="grid grid-cols-6 gap-1">
                                    <div
                                        class="bg-teal-600 rounded-md overflow-hidden"
                                    >
                                        <div class="text-center text-white">
                                            Kontrak
                                        </div>
                                        <div
                                            class="text-center text-sm text-white"
                                        >
                                            8 April 2023
                                        </div>
                                    </div>
                                    <div
                                        class="bg-teal-600 rounded-md overflow-hidden"
                                    >
                                        <div class="text-center text-white">
                                            Kirim
                                        </div>
                                        <div
                                            class="text-center text-sm text-white"
                                        >
                                            16 Jan 2024
                                        </div>
                                    </div>
                                    <div
                                        class="bg-teal-600 rounded-md overflow-hidden"
                                    >
                                        <div class="text-center text-white">
                                            Sampai
                                        </div>
                                        <div
                                            class="text-center text-sm text-white"
                                        >
                                            16 Jan 2024
                                        </div>
                                    </div>
                                    <div
                                        class="bg-teal-600 rounded-md overflow-hidden"
                                    >
                                        <div class="text-center text-white">
                                            Pasang
                                        </div>
                                        <div
                                            class="text-center text-sm text-white"
                                        >
                                            16 Jan 2024
                                        </div>
                                    </div>
                                    <div
                                        class="bg-gray-300 rounded-md overflow-hidden"
                                    >
                                        <div class="text-center">
                                            Uji coba
                                        </div>
                                        <div
                                            class="text-center text-sm"
                                        ></div>
                                    </div>
                                    <div
                                        class="bg-gray-300 rounded-md overflow-hidden"
                                    >
                                        <div class="text-center">BAST</div>
                                        <div
                                            class="text-center text-sm"
                                        ></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
            <div class="flex flex-row h-1/2 pt-2">
                <div
                    class="flex justify-center bg-white w-full basis-3/10 mx-2 rounded-md shadow-md"
                >
                    <div
                        class="block rounded-md h-full overflow-hidden pb-2 w-full"
                    >
                        <div
                            class="border-b-2 border-neutral-100 py-3 px-6 text-center h-1/7"
                        >
                            <span class="font-bold text-lg">POI / POS</span>
                        </div>
                        <div class="overflow-y-hidden h-6/7 relative">
                            <ul class="p-4 absolute w-full animate-naiklambatbanget">
                                {{-- @dd($list_poi) --}}
                                {{-- {{ $list_poi }} --}}
                                @foreach ($list_poi as $poi)
                                <li
                                    class="bg-slate-200 p-2 rounded-sm mb-2 shadow-sm relative"
                                >
                                    <div class="flex justify-between">
                                        <div>
                                            <h1 class="text-md font-semibold">
                                                {{ $poi->NAMA_BARANG }}
                                            </h1>
                                            <p class="font-bold">
                                                {{ $poi->NO_POI }}
                                            </p>
                                        </div>
                                        <div>
                                            <div
                                                class="flex justify-end text-center"
                                            >
                                                <p
                                                    class="py-1 px-3 @if($poi->JENIS == 'POS') bg-orange-300 text-orange-900 @elseif($poi->JENIS == 'POI') bg-teal-600 text-white @endif text-center text-sm rounded-lg"
                                                >
                                                    @if($poi->JENIS == 'POS') POS @elseif($poi->JENIS == 'POI') POI @endif
                                                </p>
                                            </div>
                                            <p class="text-gray-600 font-bold absolute bottom-0 right-0 p-2">
                                                {{ $poi->DELTIME }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>


                            <ul class="p-4 absolute w-full animate-naiklambatbanget2">
                                @foreach ($list_poi as $poi)
                                <li
                                    class="bg-slate-200 p-2 rounded-sm mb-2 shadow-sm relative"
                                >
                                    <div class="flex justify-between">
                                        <div>
                                            <h1 class="text-md font-semibold">
                                                {{ $poi->NAMA_BARANG }}
                                            </h1>
                                            <p class=" font-bold">
                                                {{ $poi->NO_POI }}
                                            </p>
                                        </div>
                                        <div>
                                            <div
                                                class="flex justify-end text-center"
                                            >
                                                <p
                                                    class="py-1 px-3 @if($poi->JENIS == 'POS') bg-orange-300 text-orange-900 @elseif($poi->JENIS == 'POI') bg-teal-600 text-white @endif text-center text-sm rounded-lg "
                                                >
                                                    @if($poi->JENIS == 'POS') POS @elseif($poi->JENIS == 'POI') POI @endif
                                                </p>
                                            </div>
                                            <p class="text-gray-600 font-bold  absolute bottom-0 right-0 p-2">
                                                {{ $poi->DELTIME }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-white w-full basis-4/10 mx-2 rounded-md shadow-md" >
                    <div class="block rounded-md h-full overflow-hidden pb-2 w-full" >
                        <div class="border-b-2 border-neutral-100 py-3 px-6 text-center h-1/7" >
                            <span class="font-bold text-lg">Sales</span>
                        </div>
                        <div class="overflow-y-hidden h-6/7 relative">
                            <ul
                                class="p-4 absolute w-full animate-naiklambatbanget grid grid-cols-2 gap-2"
                            >
                                @foreach ($list_task as $sales)
                                
                                <li
                                    class="bg-slate-200 rounded-sm mb-2 mr-2 shadow-sm relative flex overflow-hidden"
                                >
                                    <div class="flex flex-row">
                                        <div
                                            class="bg-teal-500 text-white font-semibold basis-1/5 flex justify-center items-center rounded-e-xl"
                                        >
                                            {{ $sales->user_id }}
                                        </div>
                                        <div
                                            class="basis-4/5 ml-2 p-2 relative"
                                        >
                                            <div class="text-lg font-semibold">
                                                {{ $sales->mesin }}
                                                (QTY {{ $sales->qty }})
                                            </div>
                                            <div class="text-sm">
                                                {{ $sales->wilayah }}
                                            </div>
                                            <div class="text-blue-600">
                                                Rp. {{ $sales->pagu }}
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="absolute bottom-0 right-0 p-1 m-1 rounded-lg bg-slate-700 text-white text-sm"
                                    >
                                        {{ $sales->kontrak }}
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div
                    class="flex justify-center bg-white w-full basis-3/10 mx-2 rounded-md shadow-md"
                >
                    <div
                        class="block rounded-md h-full overflow-hidden pb-2 w-full"
                    >
                        <div
                            class="border-b-2 border-neutral-100 py-3 px-6 text-center h-1/7"
                        >
                            <span class="font-bold text-lg">Inquiry</span>
                        </div>
                        <div class="overflow-y-hidden h-6/7 relative">
                            <ul class="p-4 absolute w-full animate-naiklambat" >
                                @foreach ($list_inquiry as $inquiry)
                                <li class="bg-slate-200 p-2 rounded-sm mb-2 shadow-sm relative" >
                                <div class="flex justify-between">
                                    <div>
                                        <h1 class="text-md font-bold">
                                            {{ $inquiry->judul }}
                                        </h1>
                                        <p class="font-semibold">
                                            {{ $inquiry->sales }}
                                        </p>
                                    </div>
                                    <div>
                                        <div class="flex justify-end text-center" >
                                            <p class="py-1 px-3 @if($inquiry->status == 'Pending') bg-orange-300 text-orange-900 @elseif($inquiry->status == 'Proses') bg-teal-600 text-white @elseif($inquiry->status == 'Order') bg-blue-600 text-white @elseif($inquiry->status == 'Gagal') bg-red-500 text-white @elseif($inquiry->status == 'DLL') bg-gray-600 text-white @endif text-center text-sm rounded-lg "
                                            >
                                                {{ $inquiry->status }}
                                            </p>
                                        </div>
                                        <p
                                            class="text-gray-600 font-bold absolute bottom-0 right-0 p-2"
                                        >
                                            {{ $inquiry->tgl_prospek }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                                @endforeach
                            </ul>
                            <ul
                                class="p-4 absolute w-full animate-naiklambat2"
                            >
                                
                            @foreach ($list_inquiry as $inquiry)
                            <li
                                class="bg-slate-200 p-2 rounded-sm mb-2 shadow-sm relative"
                            >
                                <div class="flex justify-between">
                                    <div>
                                        <h1 class="text-md font-bold">
                                            {{ $inquiry->judul }}
                                        </h1>
                                        <p class="font-semibold">
                                            {{ $inquiry->sales }}
                                        </p>
                                    </div>
                                    <div>
                                        <div
                                            class="flex justify-end text-center"
                                        >
                                            <p
                                                class="py-1 px-3 @if($inquiry->status == 'Pending') bg-orange-300 text-orange-900 @elseif($inquiry->status == 'Proses') bg-teal-600 text-white @elseif($inquiry->status == 'Order') bg-blue-600 text-white @elseif($inquiry->status == 'Gagal') bg-red-500 text-white @elseif($inquiry->status == 'DLL') bg-gray-600 text-white @endif text-center text-sm rounded-lg "
                                            >
                                                {{ $inquiry->status }}
                                            </p>
                                        </div>
                                        <p
                                            class="text-gray-600 font-bold absolute bottom-0 right-0 p-2"
                                        >
                                            {{ $inquiry->tgl_prospek }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
