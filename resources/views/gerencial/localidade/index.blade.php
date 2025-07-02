@extends('layouts.app')

@section('content')
    <div class="space-y-6">
        <!-- Cabeçalho -->
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <i class="bi bi-geo text-2xl"></i>
                <h2 class="text-xl font-semibold text-gray-800">Localidades cadastradas</h2>
            </div>
            <span class="text-sm text-gray-600">Para maior controle de ações relacionadas às negociações.</span>
        </div>

        <!-- Alerta azul -->
        <x-alerta-info>
            Nesta página é possível verificar e pesquisar quais são as localidades já cadastradas através de uma
            listagem junto a uma prévia de dados das mesmas. <br>
            Caso deseje adicionar uma nova na lista, basta clicar em <strong>“Cadastro”</strong> no submenu da lateral esquerda.
        </x-alerta-info>

        <!-- Tabela -->
        <div class="overflow-x-auto bg-white dark:bg-gray-900 shadow rounded-lg">
            <table class="min-w-full text-sm text-left">
                <thead class="bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-100">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Localidade</th>
                    <th class="px-4 py-2">Endereço</th>
                    <th class="px-4 py-2">Cidade</th>
                    <th class="px-4 py-2">UF</th>
                    <th class="px-4 py-2"></th>
                </tr>
                </thead>
                <tbody class="divide-y dark:divide-gray-800">
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-800 dark:text-gray-300">
                    <td class="px-4 py-2">3</td>
                    <td class="px-4 py-2">Oculto</td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2">
                        <a href="#"
                           class="py-1 px-2 rounded text-blue-600 dark:text-blue-400 hover:bg-gray-300 bg-gray-200 dark:hover:bg-gray-700 dark:bg-gray-600">
                            <i class="bi bi-search"></i>
                        </a>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-800 dark:text-gray-300">
                    <td class="px-4 py-2">9</td>
                    <td class="px-4 py-2">Leilões Judiciais Serrano</td>
                    <td class="px-4 py-2">Avenida Colombo</td>
                    <td class="px-4 py-2">Maringá</td>
                    <td class="px-4 py-2">PR</td>
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
