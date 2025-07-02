@extends('layouts.app')

@section('content')
    <div class="space-y-6">
        <!-- Título e Informação -->
        <div class="flex flex-col justify-between">
            <h2 class="text-xl mb-4 font-semibold text-gray-800 dark:text-white">Listagem de Equipamentos</h2>
            <x-alerta-info>
                Utilize os filtros abaixo para refinar a listagem de equipamentos conforme os critérios desejados.
            </x-alerta-info>
        </div>

        <!-- Filtros -->
        <form method="GET" class="bg-white dark:bg-gray-900 p-4 rounded shadow space-y-4">
            <x-form.group cols="4" label="Filtros de busca">
                <x-form.select name="empresa" label="Comitente">
                    <option value="">Todos</option>
                    <option value="Teste TI Serrano">Teste TI Serrano</option>
                </x-form.select>
                <x-form.input name="palavra_chave" label="Palavra Chave"/>
                <x-form.select name="tipo_evento" label="Tipo de evento:">
                    <option value="">Selecionar</option>
                </x-form.select>
                <x-form.select name="situacao_evento" label="Situação do evento:">
                    <option value="">Selecionar</option>
                </x-form.select>
                <x-form.select name="localidade" label="Localidade">
                    <option value="">Selecionar</option>
                </x-form.select>
                <x-form.select name="comitente" label="Comitente">
                    <option value="">Selecionar</option>
                </x-form.select>
                <x-form.select name="estoque" label="Estoque">
                    <option value="">Selecionar</option>
                    <option value="1">Em estoque</option>
                    <option value="0">Retirados</option>
                </x-form.select>
                <x-form.select name="status_lote" label="Status do lote">
                    <option value="">Selecionar</option>
                </x-form.select>
                <x-form.date name="entrada_de" label="Entrada de"/>
                <x-form.date name="entrada_ate" label="Entrada até"/>
                <x-form.toggle name="pago" label="Pago"/>
            </x-form.group>

            <div class="flex justify-end">
                <button type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Buscar
                </button>
            </div>
        </form>

        <!-- Resultados -->
        <div class="bg-white dark:bg-gray-900 rounded shadow overflow-x-auto">
            <table class="min-w-full text-sm text-left">
                <thead class="bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-100">
                <tr>
                    <th class="px-4 py-2">Imagem</th>
                    <th class="px-4 py-2">Vistoria</th>
                    <th class="px-4 py-2">Empresa</th>
                    <th class="px-4 py-2">Descrição</th>
                    <th class="px-4 py-2">Entrada</th>
                    <th class="px-4 py-2">Saída</th>
                    <th class="px-4 py-2">Nota</th>
                    <th class="px-4 py-2">Venda</th>
                    <th class="px-4 py-2">Ação</th>
                </tr>
                </thead>
                <tbody class="divide-y dark:divide-gray-800">
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-800">
                    <td class="px-4 py-2">
                        <img src="/img/logo.png"
                             class="w-12 h-12 rounded" alt=""/>
                    </td>
                    <td class="px-4 py-2 font-medium text-green-600">vistoria_id</td>
                    <td class="px-4 py-2">empresa</td>
                    <td class="px-4 py-2">equipamento teste - 001</td>
                    <td class="px-4 py-2">05/06/2025</td>
                    <td class="px-4 py-2">05/06/2025</td>
                    <td class="px-4 py-2">nota</td>
                    <td class="px-4 py-2">16/06/2025</td>
                    <td class="px-4 py-2">
                        <a href="#" class="text-blue-600 hover:underline">Visualizar</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
