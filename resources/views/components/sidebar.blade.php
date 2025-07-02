<nav id="sidebar"
     class="dark:bg-gray-800 bg-cyan-950 text-white dark:text-gray-300 p-4 rounded-lg h-full flex-col gap-4 hidden lg:flex">

    <div class="menu-item space-y-1">
        <button class="flex items-center justify-between w-full gap-2 transition-all duration-300 cursor-pointer">
            <div class="flex items-center gap-2">
                <i class="bi bi-box"></i>
                <span>Leilões</span>
            </div>
            <i class="bi bi-caret-down transition-transform duration-300"></i>
        </button>
        <ul class="submenu overflow-hidden max-h-0 transition-all duration-500 ease-in-out flex-col pl-0 gap-2 text-sm flex">
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-2 rounded cursor-pointer">
                <i class="bi bi-view-list text-[12px]"></i>
                <a href="{{ route('leiloes.index') }}">Consultar leilões</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-2 rounded cursor-pointer">
                <i class="bi bi-calendar2-week text-[12px]"></i>
                <a href="{{ route('leiloes.agenda-leiloes') }}">Agenda de leilões</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-2 rounded cursor-pointer">
                <i class="bi bi-inboxes text-[12px]"></i>
                <a href="{{ route('leiloes.create') }}">Cadastrar leilão</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-2 rounded cursor-pointer">
                <i class="bi bi-journal-text text-[12px]"></i>
                <a href="{{ route('leiloes.acompanhamento') }}">Acompanhamento</a>
            </li>
        </ul>
    </div>

    <div class="menu-item space-y-1">
        <button class="flex items-center justify-between w-full gap-2 transition-all duration-300 cursor-pointer">
            <div class="flex items-center gap-2">
                <i class="bi bi-briefcase"></i>
                <span>Gerencial</span>
            </div>
            <i class="bi bi-caret-down transition-transform duration-300"></i>
        </button>
        <ul class="submenu overflow-hidden max-h-0 transition-all duration-500 ease-in-out flex-col pl-0 gap-2 text-sm flex">
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-2 rounded cursor-pointer">
                <i class="bi bi-person-vcard text-[12px]"></i>
                <a href="{{ route('gerencial.leiloeiro.index') }}">Leiloeiro</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-2 rounded cursor-pointer">
                <i class="bi bi-geo text-[12px]"></i>
                <a href="{{ route('gerencial.localidade.index') }}">Localidade</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-2 rounded cursor-pointer">
                <i class="bi bi-people text-[12px]"></i>
                <a href="{{ route('gerencial.comitente.index') }}">Comitente</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-2 rounded cursor-pointer">
                <i class="bi bi-toggles text-[12px]"></i>
                <a href="{{ route('gerencial.status.index') }}">Tabela status</a>
            </li>
        </ul>
    </div>

    <div class="menu-item space-y-1">
        <button class="flex items-center justify-between w-full gap-2 transition-all duration-300 cursor-pointer">
            <div class="flex items-center gap-2">
                <i class="bi bi-list-ul"></i>
                <span>Vistoria</span>
            </div>
            <i class="bi bi-caret-down transition-transform duration-300"></i>
        </button>
        <ul class="submenu overflow-hidden max-h-0 transition-all duration-500 ease-in-out flex-col pl-0 gap-2 text-sm flex">
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-2 rounded cursor-pointer">
                <i class="bi bi-truck text-[12px]"></i>
                <a href="{{ route('vistoria.veiculo.index') }}">Veículos</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-2 rounded cursor-pointer">
                <i class="bi bi-boxes text-[12px]"></i>
                <a href="{{ route('vistoria.equipamento.index') }}">Equipamentos</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-2 rounded cursor-pointer">
                <i class="bi bi-building text-[12px]"></i>
                <a href="{{ route('vistoria.imovel.index') }}">Imóveis</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-2 rounded cursor-pointer">
                <i class="bi bi-toggles text-[12px]"></i>
                <a href="{{ route('vistoria.veiculo.index') }}">Tabela status</a>
            </li>
        </ul>
    </div>

    <div class="menu-item space-y-1">
        <button class="flex items-center justify-between w-full gap-2 transition-all duration-300 cursor-pointer">
            <div class="flex items-center gap-2">
                <i class="bi bi-file-text"></i>
                <span>Documentação</span>
            </div>
            <i class="bi bi-caret-down transition-transform duration-300"></i>
        </button>
        <ul class="submenu overflow-hidden max-h-0 transition-all duration-500 ease-in-out flex-col pl-0 gap-2 text-sm flex">
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Consultar leilões</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Agenda de leilões</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Cadastrar leilão</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Acompanhamento</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Dashboard BI</a>
            </li>
        </ul>
    </div>

    <div class="menu-item space-y-1">
        <button class="flex items-center justify-between w-full gap-2 transition-all duration-300 cursor-pointer">
            <div class="flex items-center gap-2">
                <i class="bi bi-person-gear"></i>
                <span>Usuário</span>
            </div>
            <i class="bi bi-caret-down transition-transform duration-300"></i>
        </button>
        <ul class="submenu overflow-hidden max-h-0 transition-all duration-500 ease-in-out flex-col pl-0 gap-2 text-sm flex">
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Consultar leilões</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Agenda de leilões</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Cadastrar leilão</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Acompanhamento</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Dashboard BI</a>
            </li>
        </ul>
    </div>

    <div class="menu-item space-y-1">
        <button class="flex items-center justify-between w-full gap-2 transition-all duration-300 cursor-pointer">
            <div class="flex items-center gap-2">
                <i class="bi bi-newspaper"></i>
                <span>Publicidade</span>
            </div>
            <i class="bi bi-caret-down transition-transform duration-300"></i>
        </button>
        <ul class="submenu overflow-hidden max-h-0 transition-all duration-500 ease-in-out flex-col pl-0 gap-2 text-sm flex">
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Consultar leilões</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Agenda de leilões</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Cadastrar leilão</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Acompanhamento</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Dashboard BI</a>
            </li>
        </ul>
    </div>

    <div class="menu-item space-y-1">
        <button class="flex items-center justify-between w-full gap-2 transition-all duration-300 cursor-pointer">
            <div class="flex items-center gap-2">
                <i class="bi bi-arrow-left-right"></i>
                <span>Pós Leilão</span>
            </div>
            <i class="bi bi-caret-down transition-transform duration-300"></i>
        </button>
        <ul class="submenu overflow-hidden max-h-0 transition-all duration-500 ease-in-out flex-col pl-0 gap-2 text-sm flex">
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Consultar leilões</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Agenda de leilões</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Cadastrar leilão</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Acompanhamento</a>
            </li>
            <li class="flex items-center gap-2 hover:bg-cyan-900 p-1 rounded cursor-pointer">
                <i class="bi bi-asterisk text-[10px]"></i>
                <a href="#">Dashboard BI</a>
            </li>
        </ul>
    </div>
</nav>
