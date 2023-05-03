<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="refresh" content="1200" />
        <title>Monitor Marketing</title>
        <link href="monitor/dist/output.css" rel="stylesheet" />
    </head>
    <body
        class="bg-gradient-to-tr from-indigo-200 from-20% via-teal-200 via-60% to-green-200 to-80% h-screen dark:bg-gradient-to-r dark:from-indigo-200 dark:via-slate-900 dark:to-green-200"
    >
        <section id="head" class="flex justify-center  h-[7vh] ">
            <div class="w-3/12 pt-1">
                <div
                    class="bg-slate-700 w-1/3 text-white rounded-md pb-1 pt-0 px-2 ml-7"
                >
                    <div class="h-5/7 text-center text-3xl" id="clock">
                        20:32
                    </div>
                    <div class="h-2/7 text-center">04-Jan-2025</div>
                </div>
            </div>
            <div class="flex w-6/12 justify-center">
                <div class="mr-4 flex items-center">
                    <img src="monitor/img/pura.png" alt="logo" class="h-auto w-16" />
                </div>
                <div class="">
                    <div class="flex justify-center">
                        <h1 class="font-bold text-lg">
                            PT. PURA BARUTAMA DIVISI ENGINEERING
                        </h1>
                    </div>
                    <p class="text-sm">
                        Jl. Kudus - Pati KM. 12 Kudus 59382 Telp. 0291 431121,
                        431606 Fax. 0291 433755
                    </p>
                    <p class="text-sm">
                        Email: marketing_wks@kudus.puragroup.com, http:
                        //engineering.puragroup.com
                    </p>
                </div>
            </div>
            <div class="w-3/12 pt-1">
                <div
                    class="bg-red-400 text-white py-4 px-2 rounded-md animate-pulsecepat mt-2 mr-7 text-center"
                >
                    Peringatan apapun ada di sini? hahaha kok lucu ya
                </div>
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
                            <ul class="p-4 absolute w-full animate-naik  @if(count($list_katalog) > 4) animate-naik @endif">
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

                            <ul class="p-4 absolute w-full  @if(count($list_katalog) > 4) animate-naik2 @endif">
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

                <div class="w-full h-full basis-4/10 flex flex-col mx-2">
                    <div
                        class="bg-white rounded-md shadow-md bg-cover overflow-hidden h-5/6 mb-3"
                    >
                        <video autoplay muted loop>
                            <source
                                src="monitor/video/PURA GROUP INDONESIA.mp"
                                type="video/mp4"
                            />
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div
                        class="bg-white rounded-md shadow-md bg-cover overflow-hidden h-1/6 grid grid-cols-5 gap-4"
                    >
                        <div class="flex items-center justify-center">
                            Cash In
                        </div>
                        <div class="col-span-2 flex justify-center py-1">
                            <div class="text-center">
                                <p>Target</p>
                                <p class="text-xl font-bold">
                                    Rp. <span> @if (isset($budget))
                                                    {{ number_format($budget->target, 0, ',', '.') }}
                                                @else
                                                    0
                                                @endif </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-span-2 flex justify-center py-1">
                            <div class="text-center">
                                <p>Realisasi</p>
                                <p class="text-xl font-bold">
                                    Rp. <span>@if (isset($budget))
                                        {{ number_format($budget->realisasi, 0, ',', '.') }}
                                    @else
                                        0
                                    @endif</span>
                                </p>
                            </div>
                        </div>
                    </div>
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
                        <ul class="p-4 w-full absolute @if(count($list_bast) > 4) animate-naik @endif ">
                            @foreach ($list_bast as $bast)

                            <li class="bg-slate-200 p-2 mb-2 rounded-sm">
                                <div class="mb-1 text-base font-semibold">
                                    NO POI : {{ $bast->no_poi }}
                                    <span class="ml-3 font-thin text-base"
                                        >( {{ $bast->barang }} )</span
                                    >
                                </div>
                                <div class="grid grid-cols-6 gap-1">
                                    <div class=" @if($bast->detail) bg-teal-600 @else bg-orange-300 @endif text-white rounded-md overflow-hidden" >
                                        <div class="text-center">Kontrak</div>
                                        @if(isset($bast->selesai_kontrak))
                                        <div class="text-center text-sm">
                                            {{ $bast->selesai_kontrak }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class=" @if(isset($bast->kirim)) bg-teal-600 text-white @else bg-gray-300 @endif  rounded-md overflow-hidden" >
                                        <div class="text-center">Kirim</div>
                                        @if(isset($bast->kirim))  
                                        <div class="text-center text-sm">
                                            {{ $bast->kirim }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="@if(isset($bast->sampai)) bg-teal-600 text-white  @else bg-gray-300 @endif rounded-md overflow-hidden" >
                                        <div class="text-center">Sampai</div>
                                        @if(isset($bast->sampai))
                                        <div class="text-center text-sm">
                                            {{ $bast->sampai }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="@if(isset($bast->selesai_pasang)) bg-teal-600 text-white @elseif(isset($bast->proses_pasang)) bg-orange-300 text-white @else bg-gray-300 @endif rounded-md overflow-hidden" >
                                        <div class="text-center">Pasang</div>
                                        @if(isset($bast->selesai_pasang))  
                                        <div class="text-center text-sm">
                                            {{ $bast->selesai_pasang }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="@if(isset($bast->selesai_uji_coba)) bg-teal-600 text-white @elseif(isset($bast->proses_uji_coba)) bg-orange-300 text-white @else bg-gray-300 @endif rounded-md overflow-hidden" >
                                        <div class="text-center">Uji coba</div>
                                        @if(isset($bast->selesai_uji_coba))
                                        <div class="text-center text-sm">
                                            {{ $bast->selesai_uji_coba }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="@if(isset($bast->bast)) bg-teal-600 text-white @else bg-gray-300 @endif rounded-md overflow-hidden" >
                                        <div class="text-center">BAST</div>
                                        @if(isset($bast->bast))  
                                        <div class="text-center text-sm">
                                            {{ $bast->bast }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <ul class="p-4 w-full absolute  @if(count($list_bast) > 4) animate-naik2 @endif">
                            @foreach ($list_bast as $bast)

                            <li class="bg-slate-200 p-2 mb-2 rounded-sm">
                                <div class="mb-1 text-base font-semibold">
                                    NO POI : {{ $bast->no_poi }}
                                    <span class="ml-3 font-thin text-base"
                                        >( {{ $bast->barang }} )</span
                                    >
                                </div>
                                <div class="grid grid-cols-6 gap-1">
                                    <div class=" @if($bast->detail) bg-teal-600 @else bg-orange-300 @endif text-white rounded-md overflow-hidden" >
                                        <div class="text-center">Kontrak</div>
                                        @if(isset($bast->selesai_kontrak))  
                                        <div class="text-center text-sm">
                                            {{ $bast->selesai_kontrak }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class=" @if(isset($bast->kirim)) bg-teal-600 text-white @else bg-gray-300 @endif  rounded-md overflow-hidden" >
                                        <div class="text-center">Kirim</div>
                                        @if(isset($bast->kirim))  
                                        <div class="text-center text-sm">
                                            {{ $bast->kirim }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="@if(isset($bast->sampai)) bg-teal-600 text-white  @else bg-gray-300 @endif rounded-md overflow-hidden" >
                                        <div class="text-center">Sampai</div>
                                        @if(isset($bast->sampai))
                                        <div class="text-center text-sm">
                                            {{ $bast->sampai }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="@if(isset($bast->selesai_pasang)) bg-teal-600 text-white @elseif(isset($bast->proses_pasang)) bg-orange-300 text-white @else bg-gray-300 @endif rounded-md overflow-hidden" >
                                        <div class="text-center">Pasang</div>
                                        @if(isset($bast->selesai_pasang))  
                                        <div class="text-center text-sm">
                                            {{ $bast->selesai_pasang }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="@if(isset($bast->selesai_uji_coba)) bg-teal-600 text-white @elseif(isset($bast->proses_uji_coba)) bg-orange-300 text-white @else bg-gray-300 @endif rounded-md overflow-hidden" >
                                        <div class="text-center">Uji coba</div>
                                        @if(isset($bast->selesai_uji_coba))
                                        <div class="text-center text-sm">
                                            {{ $bast->selesai_uji_coba }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="@if(isset($bast->bast)) bg-teal-600 text-white @else bg-gray-300 @endif rounded-md overflow-hidden" >
                                        <div class="text-center">BAST</div>
                                        @if(isset($bast->bast))  
                                        <div class="text-center text-sm">
                                            {{ $bast->bast }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            @endforeach
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
                            {{-- @dd($poi_telat) --}}
                            <ul class="p-4 absolute w-full animate-naiklambatbanget">
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($list_poi as $poi)

                                <li class="@if($selisih_poi[$i] <= 14 && $poi->JENIS == 'POI') bg-red-300 animate-pulsecepat @else bg-slate-200 @endif p-2 rounded-sm mb-2 shadow-sm" >
                                    <div class="flex justify-between">
                                        <h1 class="text-md font-bold">
                                            {{ $poi->NO_POI }}
                                        </h1>

                                        <div>
                                            <div class="flex justify-end text-center" >
                                                <p class="py-1 px-3 @if($poi->JENIS == 'POS') bg-orange-300 text-orange-900 @elseif($poi->JENIS == 'POI') bg-teal-600 text-white @endif text-center text-sm rounded-lg " >
                                                    @if($poi->JENIS == 'POS') POS @elseif($poi->JENIS == 'POI') POI @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row">
                                        <p class="basis-4/5 font-base">
                                            {{ $poi->NAMA_BARANG }}
                                        </p>

                                        <div class="basis-1/5">
                                            <p
                                                class="py-1 px-2 bg-teal-600 text-center text-sm rounded-lg text-white mt-2"
                                            >
                                                70 %
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex justify-between font-bold">
                                        <div>NO ORDER : {{ $poi->NO_ORDER }}</div>
                                        <p class="text-gray-600 font-bold text-end" >
                                            {{ $poi->DELTIME }}
                                        </p>
                                    </div>
                                </li>
                                @php
                                    $i++;
                                @endphp
                                @endforeach
                                
                            </ul>

                            <ul class="p-4 absolute w-full animate-naiklambatbanget2">
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($list_poi as $key => $poi)
                                
                                <li class="@if($selisih_poi[$i] <= 14 && $poi->JENIS == 'POI') bg-red-300 animate-pulsecepat @else bg-slate-200 @endif p-2 rounded-sm mb-2 shadow-sm" >
                                    <div class="flex justify-between">
                                        <h1 class="text-md font-bold">
                                            {{ $poi->NO_POI }}
                                        </h1>

                                        <div>
                                            <div class="flex justify-end text-center" >
                                                <p class="py-1 px-3 @if($poi->JENIS == 'POS') bg-orange-300 text-orange-900 @elseif($poi->JENIS == 'POI') bg-teal-600 text-white @endif text-center text-sm rounded-lg " >
                                                    @if($poi->JENIS == 'POS') POS @elseif($poi->JENIS == 'POI') POI @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row">
                                        <p class="basis-4/5 font-base">
                                            {{ $poi->NAMA_BARANG }}
                                        </p>

                                        <div class="basis-1/5">
                                            <p
                                                class="py-1 px-2 bg-teal-600 text-center text-sm rounded-lg text-white mt-2"
                                            >
                                                70 %
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex justify-between font-bold">
                                        <div>NO ORDER : {{ $poi->NO_ORDER }}</div>
                                        <p class="text-gray-600 font-bold text-end" >
                                            {{ $poi->DELTIME }}
                                        </p>
                                    </div>
                                </li>
                                @php
                                    $i++;
                                @endphp
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-white w-full basis-4/10 mx-2 rounded-md shadow-md" >
                    <div class="block rounded-md h-full overflow-hidden pb-2 w-full" >
                        <div class="border-b-2 border-neutral-100 py-3 px-6 text-center h-1/7" >
                            <span class="font-bold text-lg">Task</span>
                        </div>
                        <div class="overflow-y-hidden h-6/7 relative">
                            <ul class="p-4 absolute w-full  @if(count($list_task) > 5) animate-naiklambat @endif grid grid-cols-2 gap-2" >

                                
                                @foreach ($list_task as $sales)
                                
                                <li class="bg-slate-200 rounded-sm mb-2 mr-2 shadow-sm relative flex overflow-hidden w-full">
                                    
                                    <div class="flex flex-row w-full">
                                        <div class="bg-teal-500 text-white font-semibold basis-1/5 flex justify-center items-center rounded-e-xl w-full" >
                                            {{ $sales->user_id }}
                                        </div>
                                        <div class="basis-4/5 p-2 relative flex flex-col" >
                                            <div class="text-base font-semibold basis-2/6" >
                                                {{ $sales->judul }}
                                            </div>
                                            <div class="text-sm basis-3/6">
                                                {{ Str::limit($sales->deskripsi, $limit = 100, $end = '...') }}
                                            </div>

                                            <div class="flex justify-end basis-1/6" >
                                                <div class="text-center rounded-lg p-1  @if($sales->status == 'Selesai') bg-teal-600 text-white @else  bg-orange-300  @endif text-sm mr-2" >
                                                    {{ $sales->status }}
                                                </div>
                                                <div class="rounded-lg p-1 bg-slate-700 text-white text-sm text-center" >
                                                    {{ $sales->deadline }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            <ul class="p-4 absolute w-full @if(count($list_task) > 5) animate-naiklambat2 @endif grid grid-cols-2 gap-2" >
                                @foreach ($list_task as $sales)
                                
                                <li class="bg-slate-200 rounded-sm mb-2 mr-2 shadow-sm relative flex overflow-hidden w-full">
                                    
                                    <div class="flex flex-row w-full">
                                        <div class="bg-teal-500 text-white font-semibold basis-1/5 flex justify-center items-center rounded-e-xl w-full" >
                                            {{ $sales->user_id }}
                                        </div>
                                        <div class="basis-4/5 p-2 relative flex flex-col" >
                                            <div class="text-base font-semibold basis-2/6" >
                                                {{ $sales->judul }}
                                            </div>
                                            <div class="text-sm basis-3/6">
                                                {{ Str::limit($sales->deskripsi, $limit = 100, $end = '...') }}
                                            </div>

                                            <div class="flex justify-end basis-1/6" >
                                                <div class="text-center rounded-lg p-1 @if($sales->status == 'Selesai') bg-teal-600 text-white @else  bg-orange-300  @endif  text-sm mr-2" >
                                                    {{ $sales->status }}
                                                </div>
                                                <div class="rounded-lg p-1 bg-slate-700 text-white text-sm text-center" >
                                                    {{ $sales->deadline }}
                                                </div>
                                            </div>
                                        </div>
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
                            <ul class="p-4 absolute w-full  @if(count($list_inquiry) > 3) animate-naiklambat @endif" >
                                @foreach ($list_inquiry as $inquiry)
                                <li class="bg-slate-200 p-2 rounded-sm mb-2 shadow-sm" >
                                    <div class="flex flex-col">
                                        <div class="font-semibold">
                                            {{ $inquiry->no_lpp }}
                                        </div>
                                        <div class="flex justify-between">
                                            <div class="text-blue-500">
                                                {{ $inquiry->proyek }}
                                            </div>
                                            <div class="text-violet-500 font-semibold" >
                                                {{ $inquiry->sales }}
                                            </div>
                                        </div>
                                        <div class="flex flex-row">
                                            <div class="basis-4/5 text-sm">
                                                {{ $inquiry->customer }} ( {{ $inquiry->alamat }} )
                                            </div>
                                            <div class="basis-1/5">
                                                <span class="px-1 bg-orange-300 rounded-md text-xs flex" >
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                    {{ $inquiry->deadline }}
                                                </span >
                                            </div>
                                        </div>
                                        <div class="flex justify-between">
                                            <div class="flex items-end">
                                                <div class="px-1 bg-orange-700 text-white rounded-md text-sm flex" >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1 text-xs">
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                                                        />
                                                    </svg>
                                                    {{ $inquiry->tgl_prospek }}
                                                </div>
                                            </div>
                                            <div
                                                class="px-2 py-1 @if($inquiry->status == '2') bg-blue-600 text-white @elseif($inquiry->status == '3') bg-teal-600 text-white @elseif($inquiry->status == '4') bg-red-400 text-white @else bg-orange-300 text-orange-900  @endif mt-1 rounded-md"
                                            >
                                                {{ $inquiry->status_inquiry->status }}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            <ul class="p-4 absolute w-full @if(count($list_inquiry) > 3) animate-naiklambat2 @endif" >
                                
                            @foreach ($list_inquiry as $inquiry)
                            <li class="bg-slate-200 p-2 rounded-sm mb-2 shadow-sm" >
                                <div class="flex flex-col">
                                    <div class="font-semibold">
                                        {{ $inquiry->no_lpp }}
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="text-blue-500">
                                            {{ $inquiry->proyek }}
                                        </div>
                                        <div class="text-violet-500 font-semibold" >
                                            {{ $inquiry->sales }}
                                        </div>
                                    </div>
                                    <div class="flex flex-row">
                                        <div class="basis-4/5 text-sm">
                                            {{ $inquiry->customer }} ( {{ $inquiry->alamat }} )
                                        </div>
                                        <div class="basis-1/5">
                                            <span class="px-1 bg-orange-300 rounded-md text-xs flex" >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                {{ $inquiry->deadline }}
                                            </span >
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex items-end">
                                            <div class="px-1 bg-orange-700 text-white rounded-md text-sm flex" >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1 text-xs">
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                                                    />
                                                </svg>
                                                {{ $inquiry->tgl_prospek }}
                                            </div>
                                        </div>
                                        <div
                                            class="px-2 py-1 @if($inquiry->status == '2') bg-blue-600 text-white @elseif($inquiry->status == '3') bg-teal-600 text-white @elseif($inquiry->status == '4') bg-red-400 text-white @else bg-orange-300 text-orange-900  @endif mt-1 rounded-md"
                                        >
                                            {{ $inquiry->status_inquiry->status }}
                                        </div>
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
        <section class="flex justify-center h-[3vh] bg-slate-700"></section>

        <script>
            function showTime() {
                const now = new Date();
                let hours = now.getHours();
                let minutes = now.getMinutes();
                let seconds = now.getSeconds();
                if (hours < 10) {
                    hours = "0" + hours;
                }
                if (minutes < 10) {
                    minutes = "0" + minutes;
                }
                if (seconds < 10) {
                    seconds = "0" + seconds;
                }
                const time = hours + ":" + minutes + ":" + seconds;
                document.getElementById("clock").innerText = time;
                setTimeout(showTime, 1000);
            }

            showTime();
        </script>
    </body>
</html>
