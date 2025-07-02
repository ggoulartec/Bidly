@extends('layouts.app')

@section('content')
    <div class="space-y-6">
        <!-- Cabeçalho -->
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <i class="bi bi-person-vcard text-2xl"></i>
                <h2 class="text-xl font-semibold text-gray-800">Leiloeiros cadastrados</h2>
            </div>
            <span class="text-sm text-gray-600">Para maior controle de ações relacionadas às negociações.</span>
        </div>

        <!-- Alerta azul -->
        <x-alerta-info>
            Nesta página é possível verificar e pesquisar quais são os leiloeiros já cadastrados através de uma listagem
            junto a uma prévia de seus dados.<br>
            Caso deseje adicionar um novo na lista, basta clicar em “Cadastro” no submenu de navegação a esquerda.
        </x-alerta-info>

        <!-- Tabela -->
        <div class="overflow-x-auto bg-white dark:bg-gray-900 shadow rounded-lg">
            <table class="min-w-full text-sm text-left">
                <thead class="bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-100">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Nome</th>
                    <th class="px-4 py-2">E-mail</th>
                    <th class="px-4 py-2">CPF</th>
                    <th class="px-4 py-2">RG</th>
                    <th class="px-4 py-2"></th>
                </tr>
                </thead>
                <tbody class="divide-y dark:divide-gray-800">
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-800 dark:text-gray-300">
                    <td class="px-4 py-2">35</td>
                    <td class="px-4 py-2 font-bold">Alan Carlos dos Santos</td>
                    <td class="px-4 py-2 text-blue-600 dark:text-blue-400 cursor-pointer hover:underline">
                        alan@matogrossoleiloes.com.br
                    </td>
                    <td class="px-4 py-2">07858278975</td>
                    <td class="px-4 py-2">11056844-4</td>
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
