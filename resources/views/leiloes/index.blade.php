@extends('layouts.app')

@section('content')
    <div class="space-y-6">

        <!-- Alerta Superior -->
        <x-alerta-info>
            Aqui é possível criar, listar, visualizar e administrar seus leilões com tudo que lhe compõe como criar o
            loteamento do leilão...
        </x-alerta-info>

        <!-- Alertas de hoje -->
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow p-4 space-y-2">
            <div class="flex items-center gap-2 text-sm text-gray-800 dark:text-gray-200">
                <span class="text-green-600"><i class="bi bi-check-circle"></i></span>
                <p class="dark:text-gray-200"><strong class="dark:text-gray-200">Hoje:</strong> <span
                        class="text-blue-700 dark:text-blue-400 font-semibold">#(15822) LJ/SER-2608</span> -
                    Analisar página no site dos leiloeiros [...]</p>
            </div>
            <div class="flex items-center gap-2 text-sm text-gray-800 dark:text-gray-900">
                <span class="text-green-600"><i class="bi bi-check-circle"></i></span>
                <p class="dark:text-gray-200"><strong class="dark:text-gray-200">Hoje:</strong> <span
                        class="text-blue-700 dark:text-blue-400 font-semibold">#(15819) TESTE - VITRINEMG</span> -
                    leiloesjudiciais [...]</p>
            </div>
        </section>

        <!-- Filtros -->
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow p-4">
            <h2 class="text-lg font-semibold text-cyan-900 dark:text-cyan-600 mb-4">Filtrar listagem</h2>

            <form class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                <div>
                    <label class="block mb-1 dark:text-gray-200">Localidade</label>
                    <select class="w-full p-2 border rounded dark:bg-gray-700 dark:text-gray-200">
                        <option>Selecionar</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1 dark:text-gray-200">Procurar por</label>
                    <select class="w-full p-2 border rounded dark:bg-gray-700 dark:text-gray-200">
                        <option>Título</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1 dark:text-gray-200">Palavra chave</label>
                    <input type="text" class="w-full p-2 border rounded dark:bg-gray-700 dark:text-gray-200">
                </div>
                <div>
                    <label class="block mb-1 dark:text-gray-200">Tipo do Leilão</label>
                    <select class="w-full p-2 border rounded dark:bg-gray-700 dark:text-gray-200">
                        <option>Selecione o Tipo</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1 dark:text-gray-200">Leilão de</label>
                    <input type="date" class="w-full p-2 border rounded dark:bg-gray-700 dark:text-gray-200">
                </div>
                <div>
                    <label class="block mb-1 dark:text-gray-200">Leilão até</label>
                    <input type="date" class="w-full p-2 border rounded dark:bg-gray-700 dark:text-gray-200">
                </div>
                <div>
                    <label class="block mb-1 dark:text-gray-200">Leiloeiro</label>
                    <select class="w-full p-2 border rounded dark:bg-gray-700 dark:text-gray-200">
                        <option>Selecionar Leiloeiro(a)</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1 dark:text-gray-200">Relação da lista</label>
                    <select class="w-full p-2 border rounded dark:bg-gray-700 dark:text-gray-200">
                        <option>Próximos</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1 dark:text-gray-200">Ordenar por</label>
                    <select class="w-full p-2 border rounded dark:bg-gray-700 dark:text-gray-200">
                        <option>Crescente</option>
                    </select>
                </div>
                <div class="md:col-span-3 flex justify-end">
                    <button type="submit"
                            class="px-4 py-2 bg-cyan-800 text-white rounded hover:bg-cyan-900 transition cursor-pointer">
                        Buscar
                    </button>
                </div>
            </form>
        </section>

        <!-- Tabela de resultados -->
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow p-4">
            <p class="text-sm text-gray-700 dark:text-gray-200 mb-4"><strong>(15)</strong> leilões encontrados.</p>

            <div class="overflow-auto">
                <table class="w-full text-sm text-left border border-black dark:border-cyan-400">
                    <thead class="bg-cyan-800 text-white dark:text-gray-200">
                    <tr>
                        <th class="p-2">#</th>
                        <th class="p-2">Data</th>
                        <th class="p-2">Leilão</th>
                        <th class="p-2">Tipo de Leilão</th>
                        <th class="p-2">Resumo</th>
                        <th class="p-2 text-center">Ações</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y">
                    <tr class="hover:bg-gray-200 dark:hover:bg-gray-600">
                        <td class="p-2 dark:text-gray-200 text-gray-700">15822</td>
                        <td class="p-2 dark:text-gray-200 text-gray-700">27/06/2025<br>09:31:00</td>
                        <td class="p-2">
                            <a href="#" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline">#LJSER-2608</a><br>
                            <span
                                class="dark:text-gray-200 text-gray-700">Analisar página no site dos leiloeiros [...].</span><br>
                            <span
                                class="text-xs text-gray-600 dark:text-gray-200">Empresa(s): Teste TI-Serrano III</span>
                        </td>
                        <td class="p-2 dark:text-gray-200 text-gray-700">Judicial Online</td>
                        <td class="p-2 text-center">
                            <span class="text-green-700 dark:text-green-400 font-bold">1 Lote(s)</span><br>
                            <span class="dark:text-gray-200 text-gray-700">0 Lance(s)</span>
                        </td>
                        <td class="p-2 text-center">
                            <button class="bg-gray-700 text-white px-3 py-1 rounded hover:bg-gray-800">Administrar
                            </button>
                            <button class="bg-gray-500 text-white px-3 py-1 rounded hover:bg-gray-600">Editar</button>
                        </td>
                    </tr>
                    <!-- Outras linhas aqui -->
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
