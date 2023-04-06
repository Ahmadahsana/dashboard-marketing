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
                <h6 class="dark:text-white">Hai {{ $nama->nama }}, ini menu awal lhooo 😎</h6>
            </div>
            
        </div>
    </div>
</div>
@endsection