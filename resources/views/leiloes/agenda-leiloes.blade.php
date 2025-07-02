@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-700">Agenda de Leilões</h2>

    <div class="bg-white dark:bg-gray-100 rounded-lg shadow p-4">
        <!-- Cabeçalho da semana -->
        <div class="flex justify-between items-center mb-2">
            <button class="text-xl font-bold text-cyan-900 dark:text-cyan-800">&lt;</button>
            <span class="text-lg font-medium text-gray-700 dark:text-gray-600">Jun 22 — 28 2025</span>
            <button class="text-xl font-bold text-cyan-900 dark:text-cyan-800">&gt;</button>
        </div>

        <!-- Grade semanal -->
        <div class="grid grid-cols-7 gap-2">
            <!-- Cabeçalho dos dias -->
            <div class="font-semibold text-center text-sm text-gray-700 dark:text-gray-600">Dom - 22/6</div>
            <div class="font-semibold text-center text-sm text-gray-700 dark:text-gray-600">Seg - 23/6</div>
            <div class="font-semibold text-center text-sm text-gray-700 dark:text-gray-600">Ter - 24/6</div>
            <div class="font-semibold text-center text-sm text-gray-700 dark:text-gray-600">Qua - 25/6</div>
            <div class="font-semibold text-center text-sm text-gray-700 dark:text-gray-600">Qui - 26/6</div>
            <div class="font-semibold text-center text-sm text-gray-700 dark:text-gray-600">Sex - 27/6</div>
            <div class="font-semibold text-center text-sm text-gray-700 dark:text-gray-600">Sáb - 28/6</div>

            <!-- Colunas de eventos -->
            <!-- Domingo -->
            <div class="min-h-[100px] bg-gray-100 dark:bg-gray-300 rounded p-1"></div>

            <!-- Segunda -->
            <div class="bg-cyan-800 dark:bg-cyan-600 rounded text-white text-sm p-2 space-y-1">
                <div>
                    <div class="font-bold text-xs">10:29</div>
                    <div>(Online) LEILÃO SIMULAÇÃO</div>
                </div>
                <div>
                    <div class="font-bold text-xs">14:15</div>
                    <div>Presencial - múltiplas datas</div>
                </div>
            </div>

            <!-- Terça -->
            <div class="bg-cyan-800 dark:bg-cyan-600 rounded text-white text-sm p-2 space-y-1">
                <div>
                    <div class="font-bold text-xs">12:46</div>
                    <div>(Online) TESTE 3-180</div>
                </div>
                <div>
                    <div class="font-bold text-xs">17:10</div>
                    <div>BUSCA 3 - GIORDANO</div>
                </div>
            </div>

            <!-- Quarta -->
            <div class="bg-cyan-800 dark:bg-cyan-600 rounded text-white text-sm p-2">
                <div>
                    <div class="font-bold text-xs">12:10</div>
                    <div>REPASSAR COM RESET</div>
                </div>
            </div>

            <!-- Quinta -->
            <div class="bg-cyan-800 dark:bg-cyan-600 rounded text-white text-sm p-2 space-y-1">
                <div>
                    <div class="font-bold text-xs">11:40</div>
                    <div>TESTE RÓTULOS</div>
                </div>
                <div>
                    <div class="font-bold text-xs">12:10</div>
                    <div>REPETIR TESTE</div>
                </div>
            </div>

            <!-- Sexta (destaque) -->
            <div class="bg-orange-500 rounded text-white text-sm p-2 space-y-1">
                <div>
                    <div class="font-bold text-xs">09:31</div>
                    <div>#LJSER-2608 - Página dos leiloeiros</div>
                </div>
                <div>
                    <div class="font-bold text-xs">13:00</div>
                    <div>TESTE - VITRINEMG</div>
                </div>
            </div>

            <!-- Sábado -->
            <div class="min-h-[100px] bg-gray-100 dark:bg-gray-300 rounded p-1"></div>
        </div>
    </div>
@endsection
