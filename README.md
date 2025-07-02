
# Sistema de Leilões

Plataforma de gerenciamento de leilões judiciais e extrajudiciais, com suporte a cadastro, acompanhamento em tempo real, filtros avançados e controle financeiro.

## 📋 Funcionalidades principais

- Cadastro completo de leilões
    - Informações gerais, datas, tipo de leilão e status
    - Controle financeiro por leilão (comissão, despesas, descrição)
    - Opções de publicação, destaque e vídeo de apresentação

- Acompanhamento de Leilões
    - Listagem dos leilões em andamento
    - Status em tempo real (pregão, aberto, encerrado)
    - Número de lotes abertos e totais
    - Acesso rápido à página de cada leilão

- Gerenciamento de Status
    - Tabelas dinâmicas de índices, status, situações
    - Edição e exclusão direta na tabela

- Listagem de Veículos
    - Filtros avançados por palavra-chave, localidade, status, categoria, sucata, datas e mais
    - Exportação com opções customizadas (com ou sem histórico, comprador, arrematante, evento)
    - Tabela de resultados com colunas completas: marca, modelo, cor, sinistro, entrada e venda

## 🧱 Estrutura de Componentes Blade

Sistema modular baseado em componentes reutilizáveis:

### Principais componentes:

- `<x-form.group>` — Agrupador de campos com grid responsivo
- `<x-form.input>` — Campo de entrada de texto
- `<x-form.select>` — Select estilizado
- `<x-form.checkbox>` — Checkbox tradicional
- `<x-form.toggle>` — Toggle (sim/não) estilizado
- `<x-alert.info>` — Alerta informativo reutilizável

Exemplo de uso:

```blade
<x-form.group cols="3" label="Filtros de busca">
    <x-form.input name="chassi" label="Placa/Chassi" />
    <x-form.select name="categoria" label="Categoria" :options="$categorias" />
    <x-form.toggle name="sucata" label="Sucata" />
</x-form.group>
```

## 🛠️ Tecnologias Utilizadas

- Laravel 10+
- Blade (Componentes e Layouts)
- TailwindCSS 3+
- Bootstrap - icons 1.13.1

## ⚙️ Como Rodar Localmente

```bash
git clone https://github.com/seuusuario/Bidly.git
cd Bidly

composer install
npm install && npm run dev

cp .env.example .env
php artisan key:generate

# Configure banco de dados no .env

php artisan migrate --seed
php artisan serve
```

Acesse em [http://localhost:8000](http://localhost:8000)

## 🧩 Páginas implementadas

#### Leilões:
- `/leiloes` — Página inicial com listagem de leilões
- `/leiloes/create` — Cadastro de novo leilão
- `/leiloes/acompanhamento` — Acompanhamento dos leilões ativos
- `/leiloes/agenda-leiloes` — Agenda no formato de calendário semanal
#### Gerencial:
- `/gerencial/leiloeiro` — Gestão de tabelas de status (índices, correções, etc.)
- `/gerencial/localidade` — Gestão de tabelas de status (índices, correções, etc.)
- `/gerencial/comitente` — Gestão de tabelas de status (índices, correções, etc.)
- `/gerencial/status` — Gestão de tabelas de status (índices, correções, etc.)
#### Vistoria:
- `/vistoria` — Cadastro de vistorias (veículos, imóveis, equipamentos e semoventes)
- `/veiculos/veiculo` — Filtros e listagem de veículos em estoque
- `/veiculos/equipamento` — Filtros e listagem de equipamentos em estoque
- `/veiculos/imovel` — Filtros e listagem de imóveis em estoque
- `/veiculos/semovente` — Filtros e listagem de semoventes em estoque

## ✍️ Autor

Goularte — Programador das antigas, com apreço pela clareza, organização e pelo bom e velho sistema robusto de sempre.

## 📜 Licença

Este projeto é de uso interno e/ou privado. Consulte os termos de uso definidos para a organização responsável.
