@extends('layouts.app')

@section('content')
    <div class="space-y-6">
        <!-- Cabeçalho -->
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <i class="bi bi-people text-2xl"></i>
                <h2 class="text-xl font-semibold text-gray-800">Comintentes cadastrados</h2>
            </div>
            <span class="text-sm text-gray-600">Para maior controle de ações relacionadas às negociações.</span>
        </div>

        <!-- Alerta azul -->
        <x-alerta-info>
            Nesta página é possível verificar e pesquisar quais são os comitentes já cadastrados através de uma
            listagem junto a uma prévia de dados dos mesmos. <br>Caso deseje adicionar um novo na lista, basta clicar
            em <strong>“Cadastro”</strong> no submenu da lateral esquerda.
        </x-alerta-info>

        <!-- Tabela -->
        <div class="overflow-x-auto bg-white dark:bg-gray-900 shadow rounded-lg">
            <table class="min-w-full text-sm text-left">
                <thead class="bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-100">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Empresa</th>
                    <th class="px-4 py-2">Coligação</th>
                    <th class="px-4 py-2">Contato</th>
                    <th class="px-4 py-2 text-center">Comissão %</th>
                    <th class="px-4 py-2">UF</th>
                    <th class="px-4 py-2"></th>
                </tr>
                </thead>
                <tbody class="divide-y dark:divide-gray-800">
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-800 dark:text-gray-300">
                    <td class="px-4 py-2">2461</td>
                    <td class="px-4 py-2 text-red-600 dark:text-red-400 uppercase">07ª unidade jurisdicional cível – 19º
                        jd de belo horizonte/mg
                    </td>
                    <td class="px-4 py-2">Nenhuma</td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2 text-center"><strong
                            class="bg-green-600 text-gray-200 dark:bg-green-400 dark:text-gray-950 px-1 rounded-sm">5</strong>
                    </td>
                    <td class="px-4 py-2">MG</td>
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
