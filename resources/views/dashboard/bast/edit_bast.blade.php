@extends('dashboard.layout.main')

@section('content')

<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div class="w-full max-w-full px-3 shrink-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
              
             
             <form action="/update_bast" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $bast->id}}">
              <div class="flex-auto p-6">
                <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Edit BAST</p>
                <div class="flex flex-wrap -mx-3">
                  
                  <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                    <div class="mb-4">
                      <label for="nopoi" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NO POI</label>
                      <input type="text" list="poi" id="no_poi" name="nopoi" value="{{ $bast->no_poi }}" autocomplete="off" required class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                      <datalist id="poi">
                      </datalist>
                    </div>
                  </div>

                  <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                    <div class="mb-4">
                      <label for="mesin" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama mesin</label>
                      <input type="text" name="mesin" value="{{ $bast->barang }}" required class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                    </div>
                  </div>
                     @php
                      $selanjutnya = $bast->status_bast_id + 1
                    @endphp
                  <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                    <div class="mb-4">
                      <label for="status" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Status terakhir</label>
                      <select type="text" name="status" disabled class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                        <option selected disabled value="">Pilih status</option>
                        @foreach ($status_bast as $status)
                        <option @if ($bast->status_bast_id == $status->id ) selected @endif value="{{ $status->id }}" >{{ $status->nama }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                    <div class="mb-4">
                      <label for="tanggal" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal</label>
                      <input type="date" name="tanggal" value="{{ $bast->barang }}" required class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                    </div>
                  </div>

                </div>
                
                <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />

                <button class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all  rounded-lg cursor-pointer text-sm ease-in shadow-md bg-blue-500 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25">Update proses</button>
              </div>
             </form>
            </div>
        </div>

    </div>
</div>
{{-- @foreach ($bast->detail as $status)
    @if ()
        yuyuy
    @endif
@endforeach --}}
<div class="flex flex-wrap -mx-3 mt-6">
    <div class="flex-none w-full max-w-full px-3">
        <div class="w-full max-w-full px-3 shrink-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">

              <div class="flex-auto p-6">
                <div
                class="pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
                >
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
                </div>
              </div>

            </div>
        </div>

    </div>
</div>

{{-- <div class="flex flex-wrap -mx-3 mt-6">
    <div class="flex-none w-full max-w-full px-3">
        <div class="w-full max-w-full px-3 shrink-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">

              <div class="flex-auto p-6">
                <div
                class="pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
                >
                    <div class="grid grid-cols-6 gap-1">
                      @foreach ($bast->detail as $detail)
                        @foreach ($status_bast as $status)
                          @if($status->id == $detail->status_bast_id)
                            <div class="@if($status->id == $detail->status_bast_id) bg-teal-600 text-white @else bg-gray-300 @endif  rounded-md overflow-hidden" >
                                <div class="text-center">{{ $status->nama }}</div>
                                  
                                <div class="text-center text-sm">
                                    tgl
                                </div>

                            </div>
                          @endif
                          @endforeach
                        @endforeach
                    </div>
                </div>
              </div>

            </div>
        </div>

    </div>
</div> --}}





<script>
    let no_poi = document.querySelector('#no_poi');
    let wadah_poi = document.querySelector('#poi');

    no_poi.addEventListener('keyup', function (params) {
        if (no_poi.value.length > 2) {
        const cari = fetch('/cari_poi', {
                method: 'POST', 
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'url': '/nobon',
                    "X-CSRF-Token": "{{ csrf_token() }}",
                },
                body : JSON.stringify({
                    poi : no_poi.value
                })

        })
            .then(response => response.json())
            .then(function (params) {
                let hasil = params;
                let poi = hasil.map(item => item.NO_POI);
                // console.log(poi);
                wadah_poi.innerHTML = '';
                poi.forEach(element => {
                    wadah_poi.insertAdjacentHTML('beforeend', `<option value="${element}">`)
                });
            })
        }
    })
</script>
@endsection