<!-- Navbar -->
<nav
class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start"
navbar-main
navbar-scroll="false"
>
<div
    class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit"
>
    <nav>
        <!-- breadcrumb -->
        {{-- <ol
            class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16"
        >
            <li class="text-sm leading-normal">
                <a
                    class="text-white opacity-50"
                    href="javascript:;"
                    >Pages</a
                >
            </li>
            <li
                class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']"
                aria-current="page"
            >
                Tables
            </li>
        </ol>
        <h6 class="mb-0 font-bold text-white capitalize">
            Tables
        </h6> --}}
    </nav>

    <div
        class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto"
    >
        <div class="flex items-center md:ml-auto md:pr-4">
            <div
                class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease"
            >
                
            </div>
        </div>
        <ul
            class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full"
        >
            
        <li class="flex items-center mx-2">
            <form action="/logout" method="POST"
                href="#"
                class="block px-2 py-1 text-sm font-semibold text-white transition-all ease-nav-brand rounded-md bg-red-400"
            >
            @csrf
                <i
                    class="fa fa-sign-out"
                    aria-hidden="true"
                ></i>
                <button class="hidden sm:inline">Logout</button>
            </form>
        </li>
            <li class="flex items-center pl-4 xl:hidden">
                <a
                    href="javascript:;"
                    class="block p-0 text-sm text-white transition-all ease-nav-brand"
                    sidenav-trigger
                >
                    <div class="w-4.5 overflow-hidden">
                        <i
                            class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"
                        ></i>
                        <i
                            class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"
                        ></i>
                        <i
                            class="ease relative block h-0.5 rounded-sm bg-white transition-all"
                        ></i>
                    </div>
                </a>
            </li>
            <li class="flex items-center px-4">
                <a
                    href="javascript:;"
                    class="p-0 text-sm text-white transition-all ease-nav-brand"
                >
                    <i
                        fixed-plugin-button-nav
                        class="cursor-pointer fa fa-cog"
                    ></i>
                    <!-- fixed-plugin-button-nav  -->
                </a>
            </li>

            
        </ul>
    </div>
</div>
</nav>