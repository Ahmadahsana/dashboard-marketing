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
            <a  class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all bg-transparent rounded-lg cursor-pointer text-sm ease-in shadow-md bg-150 bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25" href="/tambah_inquiry"> <i class="fas fa-plus"> </i>&nbsp;&nbsp;Tambah Inquiry</a>
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
                                        Data berhasil diinput
                                        
                                    </div>
                                </div>
                        </div>    
                @endif
            <div
                class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
            >
                <h6 class="dark:text-white">List Inquiry</h6>
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
                                    Judul
                                </th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                >
                                    Sales
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                >
                                    Jenis instansi
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                >
                                    Tanggal prospek
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                >
                                    Alamat instansi
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                >
                                    status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listInquiry as $Inquiry)
                                
                            
                            <tr>
                                <td
                                    class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent"
                                >
                                    <span
                                        class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"
                                        >{{ $loop->iteration }}</span
                                    >
                                </td>
                                <td
                                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent"
                                >
                                    <div class="flex px-2 py-1">
                                        
                                        <div
                                            class="flex flex-col justify-center"
                                        >
                                            <h6
                                                class="mb-0 text-sm leading-normal dark:text-white"
                                            >
                                                {{ $Inquiry->judul }}
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
                                        {{ $Inquiry->sales }}
                                    </p>
                                </td>
                                <td
                                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent"
                                >
                                        <span
                                        class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"
                                        >{{ $Inquiry->jenis_instansi }}</span
                                    >
                                </td>
                                <td
                                    class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent"
                                >
                                    <span
                                        class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"
                                        >{{ $Inquiry->tgl_prospek }}</span
                                    >
                                </td>
                                <td
                                    class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent"
                                >
                                    <span
                                        class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"
                                        >{{ $Inquiry->alamat_instansi }}</span
                                    >
                                </td>
                                <td
                                    class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent"
                                >
                                        <span
                                        class=" @if($Inquiry->status == 'kontrak') bg-blue-600 text-white @elseif($Inquiry->status == 'deal') bg-teal-600 text-white @elseif($Inquiry->status == 'nego') bg-orange-300 text-orange-900 @endif px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none "
                                        >{{ $Inquiry->status }}</span
                                    >
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent" >
                                                    <a href="javascript:;"
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

{{-- modal --}}

    <div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
		style="background: rgba(0,0,0,.7);">
		<div
			class="border border-teal-500  modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold">Header</p>
					<div class="modal-close cursor-pointer z-50">
						<svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
							viewBox="0 0 18 18">
							<path
								d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
							</path>
						</svg>
					</div>
				</div>
				<!--Body-->
				<div class="my-5">
					<p>Inliberali Persius Multi iustitia pronuntiaret expeteretur sanos didicisset laus angusti ferrentur arbitrium arbitramur huic desiderent.?</p>
				</div>
				<!--Footer-->
				<div class="flex justify-end pt-2">
					<button
						class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancel</button>
					<button
						class="focus:outline-none px-4 bg-teal-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Confirm</button>
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