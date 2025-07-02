@extends('layouts.app')

@section('content')
    <div class="space-y-6">
        <!-- Cabeçalho -->
        <div class="flex flex-col gap-2">
            <div class="flex items-end gap-2">
                <i class="bi bi-toggles text-2xl"></i>
                <h2 class="text-xl font-semibold text-gray-800">Listagem de Status do SIG</h2>
            </div>
            <div>
                <p class="text-sm text-gray-500 dark:text-gray-400">Gerencie as tabelas de status.</p>
            </div>
        </div>

        <!-- Alerta informativo -->
        <x-alerta-info>
            Para realizar o gerenciamento dos status, selecione a tabela desejada e edite ou crie um novo status.
        </x-alerta-info>

        <!-- Filtro -->
        <form method="GET" class="bg-white dark:bg-gray-900 p-4 rounded shadow space-y-4">
            <div class="flex flex-wrap items-end gap-4">
                <div class="flex-1 min-w-[250px]">
                    <x-form.select name="tabela" label="Tabela">
                        <option value="statusindicecorrecao" selected>statusindicecorrecao</option>
                    </x-form.select>
                </div>
                <div>
                    <a href=""
                       class="bg-blue-600 dark:bg-blue-800 hover:bg-blue-700 text-white rounded transition-all p-2 flex items-center gap-2">
                        <i class="bi bi-search text-sm"></i> Buscar
                    </a>
                </div>
                <div>
                    <a href=""
                       class="bg-green-600 dark:bg-green-800 hover:bg-green-700 text-white rounded transition-all p-2 flex items-center gap-2">
                        <i class="bi bi-plus-lg"></i> Novo
                    </a>
                </div>
            </div>
        </form>

        <!-- Resultado -->
        <div class="bg-white dark:bg-gray-900 rounded shadow">
            <div class="px-4 py-2 text-sm text-gray-700 dark:text-gray-200">
                <strong>Tabela:</strong> <span class="font-medium">statusindicecorrecao</span>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-300 dark:divide-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Nome</th>
                        <th class="px-4 py-2 text-right">Ações</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700 dark:text-gray-200">
                    <tr>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">IGP-M (FGV)</td>
                        <td class="px-4 py-2 text-right space-x-2">
                            <a href="#"
                               class="text-gray-600 hover:text-blue-600 cursor-pointer">
                                <i class="bi bi-search"></i>
                            </a>
                            <form action=""
                                  method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Deseja excluir?')"
                                        class="text-red-600 dark:text-red-400 hover:text-red-800 cursor-pointer">
                                    <i class="bi bi-trash2"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
