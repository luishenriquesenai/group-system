<x-app-layout>
    <!-- component -->
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <div class="flex items-center justify-center min-h-screen bg-gray-900">
        <div class="col-span-12">
            <div class="overflow-auto lg:overflow-visible ">
                <table class="table text-gray-400 border-separate space-y-6 text-sm">
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
                                    <img class="rounded-full h-12 w-12   object-cover"
                                         src="https://images.unsplash.com/photo-1600856209923-34372e319a5d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2135&q=80"
                                         alt="unsplash image">
                                    <div class="ml-3">
                                        <div class="">{{ $reservation->customer->name }}</div>
                                        <div class="text-gray-500">{{ $reservation->customer->email }}</div>
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
                                    class="bg-yellow-400 text-gray-50  rounded-md px-2">{{ $reservation->status->name }}</span>
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
</x-app-layout>
