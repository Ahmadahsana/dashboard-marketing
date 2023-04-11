<aside
            class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 xl:ml-6 max-w-64 ease-nav-brand z-990 rounded-2xl xl:left-0 xl:translate-x-0"
            aria-expanded="false"
        >
            <div class="h-19">
                <i
                    class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden"
                    sidenav-close
                ></i>
                <a
                    class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700"
                    href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html"
                    target="_blank"
                >
                    <img
                        src="/dashboard/build/assets/img/pura3.jpg"
                        class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8"
                        alt="main_logo"
                    />
                    <img
                        src="/dashboard/build/assets/img/pura3.jpg"
                        class="hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8"
                        alt="main_logo"
                    />
                    <span
                        class="ml-1 font-semibold transition-all duration-200 ease-nav-brand"
                        >Dashboard Marketing</span
                    >
                </a>
            </div>

            <hr
                class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"
            />

            <div
                class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full"
            >
                <ul class="flex flex-col pl-0 mb-0">
                    {{-- <li class="mt-0.5 w-full">
                        <a
                            class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                            href=""
                        >
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
                            >
                                <i
                                    class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"
                                ></i>
                            </div>
                            <span
                                class="ml-1 duration-300 opacity-100 pointer-events-none ease"
                                >Dashboard</span
                            >
                        </a>
                    </li> --}}

                    @can('katalog')
                    
                    <li class="w-full mt-4">
                        <h6
                            class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60"
                        >
                            Katalog
                        </h6>
                    </li>

                    
                    <li class="mt-0.5 w-full">
                        <a
                            class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80 @if (Request::is('dashboard_katalog')) active @endif"
                            href="/dashboard_katalog"
                        >
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
                            >
                                <i
                                    class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"
                                ></i>
                            </div>
                            <span
                                class="ml-1 duration-300 opacity-100 pointer-events-none ease"
                                >Dashboard</span
                            >
                        </a>
                    </li>    

                    <li class="mt-0.5 w-full">
                        <a
                            class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80 @if (Request::is('list_katalog')) active @endif"
                            href="/list_katalog"
                        >
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
                            >
                                <i
                                    class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"
                                ></i>
                            </div>
                            <span
                                class="ml-1 duration-300 opacity-100 pointer-events-none ease"
                                >Daftar katalog</span
                            >
                        </a>
                    </li>    
                    @endcan
                    @can('inquiry')
                    
                    <li class="w-full mt-4">
                        <h6
                            class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60"
                        >
                            Inquiry
                        </h6>
                    </li>


                    <li class="mt-0.5 w-full">
                        <a
                            class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80 @if (Request::is('list_inquiry')) active @endif"
                            href="/list_inquiry"
                        >
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
                            >
                                <i
                                    class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"
                                ></i>
                            </div>
                            <span
                                class="ml-1 duration-300 opacity-100 pointer-events-none ease"
                                >Daftar Inquiry</span
                            >
                        </a>
                    </li>    
                    @endcan

                    @can('admin')
                    
                    <li class="w-full mt-4">
                        <h6
                            class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60"
                        >
                            User
                        </h6>
                    </li>

                    
                    <li class="mt-0.5 w-full">
                        <a
                            class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80 @if (Request::is('list_user')) active @endif"
                            href="/list_user"
                        >
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
                            >
                                <i
                                    class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"
                                ></i>
                            </div>
                            <span
                                class="ml-1 duration-300 opacity-100 pointer-events-none ease"
                                >Daftar user</span
                            >
                        </a>
                    </li>    
                    @endcan

                    @can('sales')
                    
                    <li class="w-full mt-4">
                        <h6
                            class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60"
                        >
                            Sales
                        </h6>
                    </li>

                    
                    <li class="mt-0.5 w-full">
                        <a
                            class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80 @if (Request::is('list_user')) active @endif"
                            href="/task_sales"
                        >
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
                            >
                                <i
                                    class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"
                                ></i>
                            </div>
                            <span
                                class="ml-1 duration-300 opacity-100 pointer-events-none ease"
                                >Task sales</span
                            >
                        </a>
                    </li>    
                    @endcan

                    @can('bast')
                    
                    <li class="w-full mt-4">
                        <h6
                            class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60"
                        >
                            BAST
                        </h6>
                    </li>

                    
                    <li class="mt-0.5 w-full">
                        <a
                            class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80 @if (Request::is('list_user')) active @endif"
                            href="/task_sales"
                        >
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
                            >
                                <i
                                    class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"
                                ></i>
                            </div>
                            <span
                                class="ml-1 duration-300 opacity-100 pointer-events-none ease"
                                >Daftar bast</span
                            >
                        </a>
                    </li>    
                    @endcan
                    

                    {{-- <li class="mt-0.5 w-full">
                        <a
                            class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                            href="/dashboard/build/pages/billing.html"
                        >
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5"
                            >
                                <i
                                    class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-credit-card"
                                ></i>
                            </div>
                            <span
                                class="ml-1 duration-300 opacity-100 pointer-events-none ease"
                                >Billing</span
                            >
                        </a>
                    </li> --}}

                    {{-- <li class="w-full mt-4">
                        <h6
                            class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60"
                        >
                            Account pages
                        </h6>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a
                            class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                            href="/dashboard/build/pages/profile.html"
                        >
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
                            >
                                <i
                                    class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"
                                ></i>
                            </div>
                            <span
                                class="ml-1 duration-300 opacity-100 pointer-events-none ease"
                                >Profile</span
                            >
                        </a>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a
                            class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                            href="/dashboard/build/pages/sign-in.html"
                        >
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
                            >
                                <i
                                    class="relative top-0 text-sm leading-normal text-orange-500 ni ni-single-copy-04"
                                ></i>
                            </div>
                            <span
                                class="ml-1 duration-300 opacity-100 pointer-events-none ease"
                                >Sign In</span
                            >
                        </a>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a
                            class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                            href="/dashboard/build/pages/sign-up.html"
                        >
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
                            >
                                <i
                                    class="relative top-0 text-sm leading-normal text-cyan-500 ni ni-collection"
                                ></i>
                            </div>
                            <span
                                class="ml-1 duration-300 opacity-100 pointer-events-none ease"
                                >Sign Up</span
                            >
                        </a>
                    </li> --}}
                </ul>
            </div>

            <div class="mx-4"></div>
        </aside>