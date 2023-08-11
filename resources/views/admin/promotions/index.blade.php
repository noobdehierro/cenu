<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('promotions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="text-2xl font-bold mb-4">Clientes</h1>

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-dark shadow rounded">
                            <thead>
                                <tr class="bg-slate-950">
                                    <th class="py-3 px-6 text-left">Id</th>
                                    <th class="py-3 px-6 text-left">Nombre</th>
                                    <th class="py-3 px-6 text-left">Descripcion</th>
                                    <th class="py-3 px-6 text-left">Costo</th>
                                    <th class="py-3 px-6 text-left">Fecha Inicio</th>
                                    <th class="py-3 px-6 text-left">Fecha Fin</th>

                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">

                                @foreach ($promotions as $promotion)
                                    <tr class="hover:bg-gray-900">
                                        <td class="py-3 px-6">{{ $promotion->id }}</td>
                                        <td class="py-3 px-6">{{ $promotion->promotion_name }}</td>
                                        <td class="py-3 px-6">{{ $promotion->descripcion }}</td>
                                        <td class="py-3 px-6">{{ $promotion->promotion_cost }}</td>
                                        <td class="py-3 px-6">{{ $promotion->start_date }}</td>
                                        <td class="py-3 px-6">{{ $promotion->end_date }}</td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="d-flex justify-content-center">
                {!! $promotions->appends(\Request::except('page'))->render() !!}
            </div>
        </div>

    </div>
</x-app-layout>
