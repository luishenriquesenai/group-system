<x-app-layout>
    <!-- component -->
    <div>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
                 class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

            <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
                 class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-black lg:translate-x-0 lg:static lg:inset-0">
                <div class="flex items-center justify-center scroll-mx-0">
                    <div class="flex justify-center w-44">
                        <x-logo-dashboard/>
                    </div>
                </div>

                <div class="p-0.5 bg-verde_logo"></div>

                <nav class="mt-2">
                    <div class="py-4 overflow-y-auto">
                        <ul id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist"
                            class="space-y-2 font-medium">

                            <li>
                                <button type="button"
                                        class="flex items-center w-full p-3 text-base text-white transition duration-75  group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-5 h-5 text-gray-500 transition duration-75  dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                                         viewBox="0 0 448 512" fill="currentColor">
                                        <path
                                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                    </svg>
                                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Cadastro</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>
                                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                                    <li>
                                        <button data-modal-target="addReserva" data-modal-toggle="addReserva"
                                                class="flex items-center w-full p-3 text-white transition duration-75 pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                            Reservas
                                        </button>
                                    </li>
                                    <li>
                                        <button data-modal-target="addSP" data-modal-toggle="addSP"
                                                class="flex items-center w-full p-3 text-white transition duration-75  pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                            Serviços Prestados
                                        </button>
                                    </li>
                                    <li>
                                        <button data-modal-target="addCliente" data-modal-toggle="addCliente"
                                                class="flex items-center w-full p-3 text-white transition duration-75  pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                            Clientes
                                        </button>
                                    </li>
                                </ul>
                            </li>


                            <li class="me-2">
                                <button id="about-tab" data-tabs-target="#about" type="button" role="tab"
                                        aria-controls="about" aria-selected="true"
                                        class="flex items-center p-3 text-white  dark:text-white hover:bg-gray-100 hover:text-white dark:hover:bg-gray-700 group w-full">
                                    <svg
                                        class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M216 64c-13.3 0-24 10.7-24 24s10.7 24 24 24h16v33.3C119.6 157.2 32 252.4 32 368H480c0-115.6-87.6-210.8-200-222.7V112h16c13.3 0 24-10.7 24-24s-10.7-24-24-24H256 216zM24 400c-13.3 0-24 10.7-24 24s10.7 24 24 24H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H24z"/>
                                    </svg>
                                    <span class="ml-3">Reservas</span>
                                </button>
                            </li>

                            <li class="me-2">
                                <button id="services-tab" data-tabs-target="#services" type="button" role="tab"
                                        aria-controls="services" aria-selected="false"
                                        class="flex items-center p-3 text-white  dark:text-white hover:bg-gray-100 hover:text-white dark:hover:bg-gray-700 group w-full">
                                    <svg
                                        class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                        viewBox="0 0 512 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M0 32C0 14.3 14.3 0 32 0H480c17.7 0 32 14.3 32 32s-14.3 32-32 32V448c17.7 0 32 14.3 32 32s-14.3 32-32 32H304V464c0-26.5-21.5-48-48-48s-48 21.5-48 48v48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V64C14.3 64 0 49.7 0 32zm96 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16zM240 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H240zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H368c-8.8 0-16 7.2-16 16zM112 192c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H112zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H240c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H368zM328 384c13.3 0 24.3-10.9 21-23.8c-10.6-41.5-48.2-72.2-93-72.2s-82.5 30.7-93 72.2c-3.3 12.8 7.8 23.8 21 23.8H328z"/>
                                    </svg>
                                    <span class="ml-3">Serviços Prestados</span>
                                </button>
                            </li>

                            <li class="me-2">
                                <button id="statistics-tab" data-tabs-target="#statistics" type="button" role="tab"
                                        aria-controls="statistics" aria-selected="false"
                                        class="flex items-center p-3 text-white  dark:text-white hover:bg-gray-100 hover:text-white dark:hover:bg-gray-700 group w-full">
                                    <svg
                                        class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                                        viewBox="0 0 448 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                                    </svg>
                                    <span class="ml-3">Clientes</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="flex flex-col flex-1 overflow-hidden">
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container px-6 py-8 mx-auto">
                        <div class="flex flex-col mt-8">
                            <x-option-button/>
                            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 mt-12 lg:px-8"
                                 id="render-table">

                                {{-- tabelas --}}
                                <div
                                    class="w-full">
                                    <ul
                                        class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">

                                    </ul>
                                    <div id="defaultTabContent">
                                        <div class="hidden p-4 bg-gray-200 rounded-lg md:p-8 "
                                             id="about" role="tabpanel" aria-labelledby="about-tab">
                                            <link
                                                href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
                                                rel="stylesheet">
                                            <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
                                                  rel="stylesheet">
                                            <div class="flex items-center justify-center min-h-screen bg-gray-200">
                                                <div class="col-span-12">
                                                    <div class="overflow-auto lg:overflow-visible ">
                                                        <table
                                                            class="table text-gray-400 border-separate space-y-6 text-sm">
                                                            <thead class="bg-gray-800 text-gray-500">
                                                            <tr>
                                                                <th class="p-3">Cliente</th>
                                                                <th class="p-3 text-left">Serviço adiquirido</th>
                                                                <th class="p-3 text-left">Atendente</th>
                                                                <th class="p-3 text-left">Status</th>
                                                                <th class="p-3 text-left">Reservado em:</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach ($reservations as $reservation)
                                                                <tr class="bg-gray-800">
                                                                    <td class="p-3">
                                                                        <div class="flex align-items-center">
                                                                            <img
                                                                                class="rounded-full h-12 w-12   object-cover"
                                                                                src="https://images.unsplash.com/photo-1600856209923-34372e319a5d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2135&q=80"
                                                                                alt="unsplash image">
                                                                            <div class="ml-3">
                                                                                <div
                                                                                    class="">{{ $reservation->customer->name }}</div>
                                                                                <div
                                                                                    class="text-gray-500">{{ $reservation->customer->email }}</div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="p-3">
                                                                        {{ $reservation->servicesProvided->name }}
                                                                    </td>
                                                                    <td class="p-3 font-bold">
                                                                        {{ $reservation->user->name }}
                                                                    </td>
                                                                    <td class="p-3">
                                                                        <span
                                                                            class="{{ $reservation->statusColor }} rounded-md px-2">{{ $reservation->status->name }}</span>
                                                                    </td>
                                                                    <td class="p-3">
                                                                        {{ $reservation->getReservedAtAttribute($reservation->reserved_at) }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <style>
                                                .table {
                                                    border-spacing: 0 15px;
                                                }

                                                i {
                                                    font-size: 1rem !important;
                                                }

                                                .table tr {
                                                    border-radius: 20px;
                                                }

                                                tr td:nth-child(n+5),
                                                tr th:nth-child(n+5) {
                                                    border-radius: 0 .625rem .625rem 0;
                                                }

                                                tr td:nth-child(1),
                                                tr th:nth-child(1) {
                                                    border-radius: .625rem 0 0 .625rem;
                                                }
                                            </style>
                                        </div>
                                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-black"
                                             id="services" role="tabpanel" aria-labelledby="services-tab">
                                            2...
                                        </div>
                                        <div class="hidden p-4 bg-gray-200 rounded-lg md:p-8 dark:bg-black"
                                             id="statistics" role="tabpanel" aria-labelledby="statistics-tab">
                                            <div class="flex items-center justify-center min-h-screen bg-gray-200">
                                                <div class="col-span-12">
                                                    <div class="overflow-auto lg:overflow-visible ">
                                                        <table
                                                            class="table text-gray-400 border-separate space-y-6 text-sm">
                                                            <thead class="bg-gray-800 text-gray-500">
                                                            <tr>
                                                                <th class="p-3">Nome</th>
                                                                <th class="p-3 text-left">Telefone</th>
                                                                <th class="p-3 text-left">CPF</th>
                                                                <th class="p-3 text-left">Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach ($customers as $customer)
                                                                <tr class="bg-gray-800">
                                                                    <td class="p-3">
                                                                        <div class="flex align-items-center">
                                                                            <img
                                                                                class="rounded-full h-12 w-12   object-cover"
                                                                                src="https://images.unsplash.com/photo-1600856209923-34372e319a5d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2135&q=80"
                                                                                alt="unsplash image">
                                                                            <div class="ml-3">
                                                                                <div
                                                                                    class="">{{ $customer->name }}</div>
                                                                                <div
                                                                                    class="text-gray-500">{{ $customer->email }}</div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="p-3">
                                                                        {{ $customer->telephone }}
                                                                    </td>
                                                                    <td class="p-3 font-bold">
                                                                        {{ $customer->cpf }}
                                                                    </td>
                                                                    <td class="p-3">
                                                                        <a href="#"
                                                                           class="text-gray-400 hover:text-gray-100 mr-2">
                                                                            <i class="material-icons-outlined text-base">visibility</i>
                                                                        </a>
                                                                        <a href="#"
                                                                           class="text-gray-400 hover:text-gray-100 mx-2">
                                                                            <i class="material-icons-outlined text-base">edit</i>
                                                                        </a>
                                                                        <a href="#"
                                                                           class="text-gray-400 hover:text-gray-100 ml-2">
                                                                            <i class="material-icons-round text-base">delete_outline</i>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>


    {{-- modalADD RESERVAS --}}

    <div id="addReserva" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-black">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Adicionar Nova Reserva
                    </h3>

                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome
                                completo</label>
                            <input type="text" name="name" id="name"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                   placeholder="Nome do Cliente" required="">
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Serviço
                                adiquirido</label>
                            <select id="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="">Selecione</option>
                                <option value="TV">TV/Monitors</option>
                                <option value="PC">PC</option>
                                <option value="GA">Gaming/Console</option>
                                <option value="PH">Phones</option>
                            </select>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Atendente</label>
                            <select id="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="">Selecione</option>
                                <option value="TV">TV/Monitors</option>
                                <option value="PC">PC</option>
                                <option value="GA">Gaming/Console</option>
                                <option value="PH">Phones</option>
                            </select>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Preço</label>
                            <input type="number" name="price" id="price"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                   placeholder="$2999" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data
                                da reserva</label>
                            <input type="date" name="price" id="price"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                   placeholder="$2999" required="">
                        </div>
                        <div class="col-span-2">
                            <label for="description"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                            <textarea id="description" rows="4"
                                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                      placeholder="Write product description here"></textarea>
                        </div>
                    </div>
                    <button type="submit"
                            class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800">
                        <svg class="me-1 ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span
                            class="ml-1 relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-black rounded-md group-hover:bg-opacity-0">
                            Adicionar
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- modalADD SERVICO PRESTADO --}}

    <div id="addSP" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-black">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Adicionar Novo Serviço
                    </h3>

                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome
                                do Serviço</label>
                            <input type="text" name="name" id="name"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                   placeholder="Type product name" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Valor</label>
                            <input type="number" name="price" id="price"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                   placeholder="$2999" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo
                                de Serviço</label>
                            <select id="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="">Selecione</option>
                                <option value="TV">TV/Monitors</option>
                                <option value="PC">PC</option>
                                <option value="GA">Gaming/Console</option>
                                <option value="PH">Phones</option>
                            </select>
                        </div>
                        <div class="col-span-2">
                            <label for="description"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição</label>
                            <textarea id="description" rows="4"
                                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                      placeholder="Write product description here"></textarea>
                        </div>
                    </div>
                    <button type="submit"
                            class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800">
                        <svg class="me-1 ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span
                            class="ml-1 relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-black rounded-md group-hover:bg-opacity-0">
                            Adicionar
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- modalADD CLIENTE --}}

    <div id="addCliente" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-black">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Adicionar Novo Cliente
                    </h3>

                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="name" id="name"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                   placeholder="Type product name" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone</label>
                            <input type="text" id="telefone"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                   placeholder="$2999" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Atendente</label>
                            <select id="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="">Select category</option>
                                <option value="TV">TV/Monitors</option>
                                <option value="PC">PC</option>
                                <option value="GA">Gaming/Console</option>
                                <option value="PH">Phones</option>
                            </select>
                        </div>
                        <div class="col-span-2">
                            <label for="description"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                Description</label>
                            <textarea id="description" rows="4"
                                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                      placeholder="Write product description here"></textarea>
                        </div>
                    </div>
                    <button type="submit"
                            class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800">
                        <svg class="me-1 ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span
                            class="ml-1 relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-black rounded-md group-hover:bg-opacity-0">
                            Adicionar
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>

<script>
    function replaceComponent(route) {
        const renderTables = document.getElementById("render-table");

        fetch(route).then((response) => {
            response.json().then((data) => {
                console.log(data)
                renderTables.replaceWith(data);
            });
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        // Selecione o elemento de input pelo ID e aplique a máscara de telefone
        const telefoneInput = document.getElementById('telefone');
        Inputmask('(99) 9999-9999').mask(telefoneInput);
    });
</script>
