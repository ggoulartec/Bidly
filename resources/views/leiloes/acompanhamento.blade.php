@extends('layouts.app')

@section('content')
    <div class="space-y-6">
        <!-- Cabeçalho -->
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <i class="bi bi-journal-text text-2xl"></i>
                <h2 class="text-xl font-semibold text-gray-800">Acompanhamento</h2>
            </div>
            <span class="text-sm text-gray-500 dark:text-gray-400">Para maior controle de ações relacionadas às negociações.</span>
        </div>

        <!-- Alerta azul -->
        <x-alerta-info>
            Esta tela é destinada ao acompanhamento dos lotes do leilão, quais foram vendidos, quais estão em
            condicional e etc.<br>
            Caso tenha algum em condicional há a possibilidade de decidir através de opções objetivas se o lote será
            vendido ou qual será a sua contraproposta.
        </x-alerta-info>

        <!-- Tabela -->
        <div class="overflow-x-auto bg-white dark:bg-gray-900 shadow rounded-lg">
            <table class="min-w-full text-sm text-left">
                <thead class="bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-100">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Leilão</th>
                    <th class="px-4 py-2">Título</th>
                    <th class="px-4 py-2">Intervalo</th>
                    <th class="px-4 py-2">Tipo</th>
                    <th class="px-4 py-2">Nu.</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Abertos</th>
                    <th class="px-4 py-2">Total</th>
                    <th class="px-4 py-2">Ação</th>
                </tr>
                </thead>
                <tbody class="divide-y dark:divide-gray-800">
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-800 dark:text-gray-300">
                    <td class="px-4 py-2">15735</td>
                    <td class="px-4 py-2 font-medium">30/06/25 12:17:00</td>
                    <td class="px-4 py-2">#LJSER-2608 - Analisar página no site dos leiloeiros existentes (desativada)
                        para exibir os leilões finalizados no último mês.
                    </td>
                    <td class="px-4 py-2 text-center">00:03:00</td>
                    <td class="px-4 py-2">Justicial Presencial/Online</td>
                    <td class="px-4 py-2 text-center">2</td>
                    <td class="px-4 py-2">
                        <span class="text-xs font-medium">Aberto para Lance</span>
                    </td>
                    <td class="px-4 py-2 text-center text-red-600 dark:text-red-400">506</td>
                    <td class="px-4 py-2 text-center text-blue-600 dark:text-blue-400">506</td>
                    <td class="px-4 py-2">
                        <a href="#" class="text-blue-600 hover:underline dark:text-blue-400"></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
