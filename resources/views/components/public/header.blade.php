<header>
    <div class="bg-bgBlack font-medium text-text14 xl:text-text18 italic">
        <p class="text-textWhite py-5 text-center">
            Regístrate y obtén un 20% de descuento en tu primer pedido.
            <a href="login_user.html" class="underline font-bold">
                Regístrate ahora
            </a>
        </p>
    </div>
    <div
        class="grid grid-cols-8 md:grid-cols-12 grid-rows-2 xl:grid-cols-12 xl:grid-rows-1 w-11/12 mx-auto my-10 gap-5 xl:gap-0">
        <div class="col-span-5 md:col-span-9 xl:col-span-2 order-1 xl:order-1 flex items-center">
            <a href="{{ route('index') }}">
                <img src="{{asset('images/img/logo.png')}}" alt="doomine" />
            </a>
        </div>

        <nav
            class="nav col-span-1 xl:col-span-7 order-3 xl:order-2 flex justify-end xl:justify-center xl:items-center">
            <label for="menu" class="nav__label">
                <div>
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5 18H20M4 12H20M4 6H20" stroke="black" stroke-width="2"
                            stroke-linecap="round" />
                    </svg>
                </div>
              
            </label>

            <input type="checkbox" id="menu" class="nav__input" />

            <div class="nav__menu text-textBlack w-full z-[100]">
                <div class="flex justify-end w-full pr-10">
                    <label for="menu" class="nav__label">
                        <img src="{{asset('images/svg/close.svg')}}" class="nav__img" />
                    </label>
                </div>

                <div class="nav__menu-center">
                    <p class="font-boldDisplay text-text32 italic block xl:hidden my-5">
                        Navegar
                    </p>
                    <div class="menues flex flex-col justify-center">
                        <!-- Menu movil -->
                        <div class="menu__desplegable-categorias toggleDropdownCategorias">
                            <div class="flex items-center gap-5 xl:gap-3 cursor-pointer py-5 xl:py-0">
                                <span
                                    class="font-mediumDisplay text-text20 lg:text-text24 cursor-pointer flex justify-start items-center gap-3 leading-none">
                                    Categorías
                                </span>
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 12 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.17736 3.72824C1.51789 3.3994 2.06052 3.40886 2.38937 3.74939L7.15275 8.68202L5.91958 9.87288L1.1562 4.94025C0.827356 4.59972 0.836834 4.05708 1.17736 3.72824Z"
                                            fill="black" />
                                        <path
                                            d="M4.84668 8.67969L9.61006 3.74706C9.9389 3.40653 10.4815 3.39707 10.8221 3.72591C11.1626 4.05475 11.1721 4.59739 10.8432 4.93791L6.07985 9.87054L4.84668 8.67969Z"
                                            fill="black" />
                                    </svg>
                                </span>
                            </div>

                            <div class="dropdown-content font-regularDisplay text-text20 xl:text-text24 rounded-xl">
                                @foreach ($submenucategorias as $item)
                                    <a href="{{route('catalogo', $item->id)}}">
                                        {{$item->name}}
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <div class="menu__desplegable-collection toggleDropdownCollection">
                            <div class="flex items-center gap-5 xl:gap-3 cursor-pointer py-5 xl:py-0">
                                <span
                                    class="font-mediumDisplay text-text20 lg:text-text24 cursor-pointer flex justify-start items-center gap-3 leading-none">
                                    Colecciones
                                </span>
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 12 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.17736 3.72824C1.51789 3.3994 2.06052 3.40886 2.38937 3.74939L7.15275 8.68202L5.91958 9.87288L1.1562 4.94025C0.827356 4.59972 0.836834 4.05708 1.17736 3.72824Z"
                                            fill="black" />
                                        <path
                                            d="M4.84668 8.67969L9.61006 3.74706C9.9389 3.40653 10.4815 3.39707 10.8221 3.72591C11.1626 4.05475 11.1721 4.59739 10.8432 4.93791L6.07985 9.87054L4.84668 8.67969Z"
                                            fill="black" />
                                    </svg>
                                </span>
                            </div>

                            <div class="dropdown-content font-regularDisplay text-text20 xl:text-text24 rounded-xl">
                                @foreach ($submenucolecciones as $item)
                                    <a href="{{route('coleccion', $item->id)}}">
                                        {{$item->name}}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <!-- Menu movil fin -->

                        <!--  -->
                        <a href="#new_arrivals"
                            class="nav__item font-mediumDisplay text-text20 lg:text-text24 py-5 xl:py-0 leading-none">
                            New Arrivals
                        </a>
                        <a href="{{ route('contacto') }}"
                            class="nav__item font-mediumDisplay text-text20 lg:text-text24 py-5 xl:py-0 leading-none">
                            Contáctanos
                        </a>
                    </div>
                </div>

                <div class="flex flex-row gap-10 justify-center items-center xl:hidden">
                    <a href="#">
                        <img src="{{asset('images/svg/twitter.svg')}}" alt="twitter" />
                    </a>

                    <a href="#">
                        <img src="{{asset('images/svg/facebook.svg')}}" alt="facebook" />
                    </a>

                    <a href="#">
                        <img src="{{asset('images/svg/instagram.svg')}}" alt="instagram" />
                    </a>
                </div>
            </div>
        </nav>

        <div
            class="col-span-8 md:col-span-12 xl:col-span-2 order-4 xl:order-3 flex justify-end bg-[#F5F5F5] items-center rounded-3xl px-2 gap-2">
            <div>
                <img src="{{asset('images/svg/lupa.svg')}}" alt="search" />
            </div>
            <input type="text" placeholder="Buscar"
                class="w-full xl:max-w-sm outline-none bg-[#F5F5F5] font-medium text-text16" />
        </div>

        <div class="col-span-2 md:col-span-2 xl:col-span-1 order-2 xl:order-4 flex justify-end">
            <div class="flex gap-2 justify-end items-center w-full">
                <div>
                    <label for="check">
                        <img src="{{ asset('images/svg/bag.svg') }}"  alt="doomine" class="cursor-pointer" />
                    </label>
                    <input type="checkbox" class="bag__modal" id="check" />

                    <div class="bag hidden absolute top-0 right-0 z-[200] md:w-[600px] cartContainer">
                        <!-- class="h-screen overflow-y-scroll " -->
                        <div class="p-4 flex flex-col h-screen justify-between">
                            <h2 class="font-mediumDisplay text-[28px] text-[#151515] pb-5">
                                Carrito
                            </h2>
                            <div class="overflow-y-scroll h-auto scroll__carrito">
                                <div class="flex flex-col gap-10" id="itemsCarrito">
                                    <!-- Para funcionalidad de agregar carrito -->
                                    <div class="flex justify-between border-b-[1px] pb-5">
                                        <div class="flex justify-center items-center gap-5">
                                            <div class="rounded-md p-4">
                                                <img src="./images/img/arrives_1.png" alt="producto"
                                                    class="w-24" />
                                            </div>
                                            <div class="flex flex-col gap-3 py-2">
                                                <h3 class="font-boldDisplay text-text14 xl:text-text18 text-[#151515]">
                                                    Producto 1
                                                </h3>
                                                <p
                                                    class="font-regularDisplay text-[12px] xl:text-text16 text-[#6C7275]">
                                                    Color: Black
                                                </p>
                                                <div
                                                    class="flex justify-center text-[#151515] border-[1px] border-[#6C7275] rounded-md">
                                                    <div
                                                        class="w-8 h-8 flex justify-center items-center cursor-pointer">
                                                        <span class="text-[20px]">-</span>
                                                    </div>
                                                    <div class="w-8 h-8 flex justify-center items-center">
                                                        <span
                                                            class="font-boldDisplay text-[12px] xl:text-text14">2</span>
                                                    </div>
                                                    <div
                                                        class="w-8 h-8 flex justify-center items-center cursor-pointer">
                                                        <span class="text-[20px]">+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-start py-2 gap-5 items-center pr-2">
                                            <p class="font-boldDisplay text-[14px] xl:text-text18 text-[#151515]">
                                                s/ 19.19
                                            </p>
                                            <div>
                                                <a href="#">
                                                    <img src="./images/svg/close_bag.svg" alt="close" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Para funcionalidad de agregar carrito -->

                                    <!-- Para item en el carrito -->
                                    <div class="flex justify-between border-b-[1px] pb-5">
                                        <div class="flex justify-center items-center gap-5">
                                            <div class="rounded-md p-4">
                                                <img src="./images/img/arrives_1.png" alt="producto"
                                                    class="w-24" />
                                            </div>
                                            <div class="flex flex-col gap-3 py-2">
                                                <h3 class="font-boldDisplay text-text14 xl:text-text18 text-[#151515]">
                                                    Producto 1
                                                </h3>
                                                <p
                                                    class="font-regularDisplay text-[12px] xl:text-text16 text-[#6C7275]">
                                                    Color: Black
                                                </p>
                                                <div
                                                    class="flex justify-center text-[#151515] border-[1px] border-[#6C7275] rounded-md">
                                                    <div
                                                        class="w-8 h-8 flex justify-center items-center cursor-pointer">
                                                        <span class="text-[20px]">-</span>
                                                    </div>
                                                    <div class="w-8 h-8 flex justify-center items-center">
                                                        <span
                                                            class="font-boldDisplay text-[12px] xl:text-text14">2</span>
                                                    </div>
                                                    <div
                                                        class="w-8 h-8 flex justify-center items-center cursor-pointer">
                                                        <span class="text-[20px]">+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-start py-2 gap-5 items-center pr-2">
                                            <p class="font-boldDisplay text-[14px] xl:text-text18 text-[#151515]">
                                                s/ 19.19
                                            </p>
                                            <div>
                                                <a href="#">
                                                    <img src="./images/svg/close_bag.svg" alt="close" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Para item en el carrito -->
                                </div>
                            </div>

                            <div class="font-poppins flex flex-col gap-2 pt-36">
                                <div class="text-[#141718] flex justify-between items-center">
                                    <p class="font-regularDisplay text-[16px]">Subtotal</p>
                                    <p class="font-boldDisplay text-[16px]">s/ 00.00</p>
                                </div>

                                <div
                                    class="text-[#141718] font-mediumDisplay text-[20px] flex justify-between items-center">
                                    <p>Total</p>
                                    <p>s/ 00.00</p>
                                </div>
                                <div>
                                    <a href="carrito.html"
                                        class="font-boldDisplay text-base bg-bgBlack py-3 px-5 rounded-2xl text-white cursor-pointer w-full inline-block text-center">
                                        Checkout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    @if (Auth::user() == null)
                        <a href="{{ route('login') }}"><img src="{{ asset('images/svg/perfil.svg') }}"
                                alt="user" /></a>
                    @else
                        <div class="relative inline-flex" x-data="{ open: false }">
                            <button class="inline-flex justify-center items-center group" aria-haspopup="true"
                                @click.prevent="open = !open" :aria-expanded="open">
                                <div class="flex items-center truncate">
                                    <span
                                        class="truncate ml-2 text-sm font-medium dark:text-slate-300 group-hover:text-slate-800 dark:group-hover:text-slate-200">{{ Auth::user()->name }}</span>
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400"
                                        viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </button>
                            <div class="origin-top-right z-10 absolute top-full min-w-44 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 py-1.5 rounded shadow-lg overflow-hidden mt-1"
                                @click.outside="open = false" @keydown.escape.window="open = false" x-show="open">
                                <ul>
                                    <li class="hover:bg-gray-100">
                                        <a class="font-medium text-sm text-black flex items-center py-1 px-3"
                                            href="{{ route('pedidos') }}" @click="open = false" @focus="open = true"
                                            @focusout="open = false">Mis pedidos</a>
                                    </li>
                                    <li class="hover:bg-gray-100">
                                        <a class="font-medium text-sm text-black flex items-center py-1 px-3"
                                            href="{{ route('direccion') }}" @click="open = false"
                                            @focus="open = true" @focusout="open = false">Dirección</a>
                                    </li>
                                    <li class="hover:bg-gray-100">
                                        <a class="font-medium text-sm text-black flex items-center py-1 px-3"
                                            href="{{ route('micuenta') }}" @click="open = false"
                                            @focus="open = true" @focusout="open = false">Ajustes</a>
                                    </li>
                                    <li class="hover:bg-gray-100">
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf
                                            <button type="submit"
                                                class="font-medium text-sm text-black flex items-center py-1 px-3"
                                                href="{{ route('logout') }}"
                                                @click.prevent="$root.submit(); open = false">
                                                {{ __('Cerrar sesión') }}
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- whatsapp -->
    <div class="flex justify-end relative">
        <div class="fixed bottom-[36px] z-[10] right-[15px] md:right-[25px]">
            <a href="#" class="">
                <img src="{{asset('images/img/WhatsApp.png')}}" alt="whatsapp" class="w-20" />
            </a>
        </div>
    </div>
</header>
