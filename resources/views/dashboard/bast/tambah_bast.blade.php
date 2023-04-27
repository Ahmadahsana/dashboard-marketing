@extends('dashboard.layout.main')

@section('content')

<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div class="w-full max-w-full px-3 shrink-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
              
             
             <form action="/tambah_bast" method="post">
                @csrf
              <div class="flex-auto p-6">
                <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Tambah BAST</p>
                <div class="flex flex-wrap -mx-3">
                  
                  <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                    <div class="mb-4">
                      <label for="nopoi" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NO POI</label>
                      <input type="text" list="poi" id="no_poi" name="nopoi" value="" autocomplete="off" required class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                      <datalist id="poi">
                      </datalist>
                    </div>
                  </div>

                  <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                    <div class="mb-4">
                      <label for="mesin" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama mesin</label>
                      <input type="text" name="mesin" required class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                    </div>
                  </div>
                  
                  <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                    {{-- <div class="mb-4">
                      <label for="status" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Status</label>
                      <select type="text" name="status" required class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                        <option selected disabled value="">Pilih status</option>
                        <option>Proses kontrak</option>
                        <option>Selesai kontrak</option>
                        <option>Kirim</option>
                        <option>Sampai</option>
                        <option>Pasang</option>
                        <option>Uji coba</option>
                        <option>BAST</option>
                      </select>
                    </div> --}}
                  </div>

                </div>
                
                <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
                
                
                {{-- <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Upload Katalog</p>
                <div class="flex flex-wrap -mx-3">
                  <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                    <div class="mb-4">
                      <label for="about me" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Katalog</label>
                      <input type="file" name="about me" value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source." class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none  file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100" />
                    </div>
                  </div>
                </div> --}}

                <button class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all  rounded-lg cursor-pointer text-sm ease-in shadow-md bg-blue-500 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25">simpan</button>
              </div>
             </form>
            </div>
        </div>


        {{-- <div class="w-full max-w-full px-3 shrink-0 mt-10">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
              
             
             <form action="/insert_inquiry_bulk" method="post" enctype="multipart/form-data">
                @csrf
              <div class="flex-auto p-6">
                <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Bulk insert</p>
                
                <div class="flex flex-wrap -mx-3">
                  <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                    <div class="mb-4">
                      <label for="inquiry" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">File berbentuk exel</label>
                      <input type="file" name="inquiry" value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source." class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none  file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100" />
                    </div>
                  </div>
                </div>

                <button class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all  rounded-lg cursor-pointer text-sm ease-in shadow-md bg-blue-500 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25">Upload</button>
              </div>
             </form>
            </div>
        </div> --}}
    </div>
</div>



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