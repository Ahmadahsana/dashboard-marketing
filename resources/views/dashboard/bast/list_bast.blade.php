@extends('dashboard.layout.main')

@section('content')

<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border"
        >
            <div
                class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
            >
            <a  class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all bg-transparent rounded-lg cursor-pointer text-sm ease-in shadow-md bg-150 bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25" href="/tambah_bast"> <i class="fas fa-plus"> </i> Tambah Baru</a>
            </div>
                @if (session()->has('success'))
                
                        <div class="max-w-lg mx-auto">
                                <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert" >
                                    <svg
                                        class="w-5 h-5 inline mr-3"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                    <div>
                                        {{ session('success') }}

                                    </div>
                                </div>
                        </div>    
                @endif
            <div
                class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
            >
                <h6 class="dark:text-white">Task sales</h6>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <table
                        class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500"
                    >
                        <thead class="align-bottom">
                            <tr>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                >
                                    NO
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                >
                                    NO POI
                                </th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                >
                                    Nama Mesin
                                </th>
                                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Status
                                </th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_bast as $bast)
                                
                            
                            <tr>
                                <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent" >
                                    <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400" >{{ $loop->iteration }}</span
                                    >
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent" >
                                    <div class="flex px-2 py-1">
                                        
                                        <div class="flex flex-col justify-center" >
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white" >
                                                {{ $bast->no_poi }}
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td
                                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent"
                                >
                                    <p
                                        class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                    >
                                        {{ $bast->barang }}
                                    </p>
                                </td>
                                <td
                                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent"
                                >
                                        <span
                                        class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"
                                        >{{ $bast->status->nama }}</span
                                    >
                                </td>
                                
                                
                                <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent" >
                                                    <a href="/edit_bast/{{ $bast->id }}"
                                                        class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-blue-400 border-2 px-3 py-1 rounded-md border-blue-700 mr-2">
                                                        Edit
                                                    </a>
                                                    <a href="javascript:;" 
                                                        class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-red-400 border-2 px-3 py-1 rounded-md border-red-600">
                                                        Hapus
                                                    </a>
                                                    
                                                    
                                </td>
                            </tr>
                            @endforeach
                           
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    const modal = document.querySelector('.main-modal');
    const closeButton = document.querySelectorAll('.modal-close');

    const modalClose = () => {
        modal.classList.remove('fadeIn');
        modal.classList.add('fadeOut');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 500);
    }

    const openModal = () => {
        modal.classList.remove('fadeOut');
        modal.classList.add('fadeIn');
        modal.style.display = 'flex';
    }

    for (let i = 0; i < closeButton.length; i++) {

        const elements = closeButton[i];

        elements.onclick = (e) => modalClose();

        modal.style.display = 'none';

        window.onclick = function (event) {
            if (event.target == modal) modalClose();
        }
    }
</script>
@endsection