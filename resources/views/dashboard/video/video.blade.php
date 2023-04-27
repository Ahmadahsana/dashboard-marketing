@extends('dashboard.layout.main')

@section('content')

<div class="flex flex-wrap -mx-3 mt-6">
    <div class="flex-none w-full max-w-full px-3">
        <div class="w-full max-w-full px-3 shrink-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">

              <div class="flex-auto p-6">
                <div
                class="pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
                >
                <div class="aspect-video w-75 bg-red-300">
                    <video autoplay muted loop>
                        <source
                            src="/monitor/video/PURA GROUP INDONESIA.mp4"
                            type="video/mp4"
                        />
                        Your browser does not support the video tag.
                    </video>
                </div>
                <form action="/upload_video" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="katalog" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">File berformat .mp4</label>
                        <input type="file" name="katalog" value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source." class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none  file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100" />
                    </div>
                    <button class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all  rounded-lg cursor-pointer text-sm ease-in shadow-md bg-blue-500 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25">Simpan</button>
                </form>    
                {{-- <div class="grid grid-cols-6 gap-1">
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
                    </div> --}}
                </div>
              </div>

            </div>
        </div>

    </div>
</div>

@endsection