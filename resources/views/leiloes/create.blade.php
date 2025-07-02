@extends('layouts.app')

@section('content')
    <div class="space-y-6">
        <!-- Bloco Informativo -->
        <x-alerta-info>
            Através desta página é possível cadastrar informações sobre os leilões, logos e arquivos, bem como seus
            segmentos e status...
        </x-alerta-info>
        <!-- Abas -->
        <div class="flex space-x-4 border-b border-gray-500 dark:border-gray-600">
            <button class="px-4 py-2 text-sm font-medium text-blue-600 border-b-2 border-blue-600">Cadastro de Leilão
            </button>
            <button class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-blue-600">Lotes</button>
            <button class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-blue-600">Arquivos</button>
        </div>

        <!-- Seção: Informações Gerais -->
        <section class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow space-y-4">
            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-100">Informações Gerais</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div>
                    <x-form.select name="leiloeiro" label="Leiloeiro">
                        <option>Selecionar</option>
                    </x-form.select>
                </div>
                <x-form.select name="localidade" label="Localidade">
                    <option>Selecionar</option>
                </x-form.select>
                <x-form.input type="number" name="fuso_horario" label="Fuso Horário (Brasília)"/>
                <div class="lg:col-span-3">
                    <x-form.input type="text" name="titulo" label="Título"/>
                </div>
                <div class="lg:col-span-3">
                    <label class="text-sm text-gray-700  dark:text-gray-200">Descrição</label>
                    <textarea
                        rows="3"
                        class="w-full p-1 px-2 rounded border text-sm dark:bg-gray-700 dark:text-gray-200"></textarea>
                </div>
            </div>
        </section>

        <!-- Seção: Tipo e Datas -->
        <section class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow space-y-4">
            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-100">Tipo de Leilão e Datas</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <x-form.select name="tipo_leilao" label="Tipo de Leilão">
                    <option>Selecionar</option>
                </x-form.select>
                <div class="flex items-center gap-2 mt-6">
                    <x-form.input name="dois_leiloes" type="checkbox" id="dois_leiloes"/>
                    <label for="dois_leiloes" class="text-sm text-gray-700 dark:text-gray-200">2º Leilão</label>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <x-form.date type="date" name="date" label="Data Início"/>
                <x-form.time type="time" name="time" label="Hora Início"/>
                <x-form.select name="rotulo" label="Rótulo">
                    <option>Selecionar</option>
                </x-form.select>
            </div>
        </section>

        <!-- Seção: Financeiro -->
        <section class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow space-y-4">
            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-100">Informações Financeiras</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <x-form.input type="number" name="comissao" label="Comissão (%)"/>
                <x-form.input type="number" name="despesas" label="Despesas Adm."/>
                <div class="lg:col-span-3">
                    <label class="text-sm text-gray-700 dark:text-gray-200">Descrição de Pagamento</label>
                    <textarea rows="3"
                              class="w-full rounded border p-1 px-2 dark:bg-gray-700 text-sm dark:text-gray-200"></textarea>
                </div>
            </div>
        </section>

        <!-- Ações -->
        <div class="flex justify-end">
            <button class="px-6 py-2 bg-green-600 text-white rounded shadow hover:bg-green-700">Salvar</button>
        </div>
    </div>
@endsection
