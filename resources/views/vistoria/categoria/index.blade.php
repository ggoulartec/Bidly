@extends('layouts.app')

@section('content')
    <div class="space-y-6">
        <!-- Cabeçalho -->
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <i class="bi bi-list-nested text-2xl"></i>
                <h2 class="text-xl font-semibold text-gray-800">Categorias cadastrados</h2>
            </div>
            <span class="text-sm text-gray-600">Para maior controle de ações relacionadas às negociações.</span>
        </div>

        <!-- Alerta azul -->
        <x-alerta-info>
            Nesta página é possível verificar e pesquisar quais são as categorias dos bens já cadastradas através de uma
            listagem.
        </x-alerta-info>

        <!-- Tabela -->
        <div class="overflow-x-auto bg-white dark:bg-gray-900 shadow rounded-lg">
            <table class="min-w-full text-sm text-left">
                <thead class="bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-100">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Categoria</th>
                    <th class="px-4 py-2">Segmento</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2"></th>
                </tr>
                </thead>
                <tbody class="divide-y dark:divide-gray-800">
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-800 dark:text-gray-300">
                    <td class="px-4 py-2">2</td>
                    <td class="px-4 py-2 text-red-600 dark:text-red-400 uppercase">Bens Diversos</td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2">
                        <strong class="bg-green-800 dark:bg-green-600 px-2 rounded text-gray-200">Ativo</strong>
                    </td>
                    <td class="px-4 py-2">
                        <a href="#"
                           class="py-1 px-2 rounded text-blue-600 dark:text-blue-400 hover:bg-gray-300 bg-gray-200 dark:hover:bg-gray-700 dark:bg-gray-600">
                            <i class="bi bi-search"></i>
                        </a>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-800 dark:text-gray-300">
                    <td class="px-4 py-2">2008</td>
                    <td class="px-4 py-2 text-red-600 dark:text-red-400 uppercase">Bebidas quentes e assessórios</td>
                    <td class="px-4 py-2">Bens Diversos</td>
                    <td class="px-4 py-2">
                        <strong class="bg-red-600 dark:bg-red-400 px-2 rounded text-gray-200">Inativo</strong>
                    </td>
                    <td class="px-4 py-2">
                        <a href="#"
                           class="py-1 px-2 rounded text-blue-600 dark:text-blue-400 hover:bg-gray-300 bg-gray-200 dark:hover:bg-gray-700 dark:bg-gray-600">
                            <i class="bi bi-search"></i>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
