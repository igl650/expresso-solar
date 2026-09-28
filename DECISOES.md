# Convenções e Decisões de Arquitetura

Este documento registra as principais decisões para o desenvolvimento do site modelo da Expresso Solar.

## 1. Estrutura de Pastas e Rotas

Adotamos uma estrutura baseada em páginas físicas `.php` organizadas em pastas para garantir URLs limpas (`/projetos/`, `/sobre/`, etc.) sem a necessidade de um roteador complexo (`mod_rewrite` avançado ou frameworks).

*   `site/app/`: Lógica da aplicação, não acessível diretamente via web.
    *   `config.php`: Configurações globais (URL base, informações da empresa).
    *   `helpers.php`: Funções auxiliares (formatação, resolução de caminhos).
    *   `content.php`: Dados centralizados (projetos, FAQs) provisórios.
    *   `partials/`: Fragmentos reutilizáveis de interface (`header.php`, `footer.php`, cartões).
*   `site/public/`: Raiz do servidor web (Document Root). Todos os acessos externos devem ser direcionados para cá.
    *   `index.php`: Página inicial.
    *   `{secao}/index.php`: Páginas internas.
    *   `assets/`: Arquivos estáticos (CSS, JS, Imagens).

## 2. Componentes e Partials

*   **Header (`app/partials/header.php`)**: Responsável por incluir a estrutura `<html>`, `<head>`, importar o CSS base e renderizar a navegação principal.
*   **Footer (`app/partials/footer.php`)**: Renderiza o rodapé, links úteis, fechamento do `<body>` e inclusão de scripts JS.
*   Os caminhos de assets e links no header/footer usam a função helper `base_url()` para garantir que funcionem independentemente do nível de profundidade da página atual.

## 3. Estilização e Interatividade

*   **CSS**: Utilização de CSS puro (Vanilla CSS). Sem Tailwind, Bootstrap ou qualquer outro framework. As variáveis do design system (cores, tipografia) são mapeadas como CSS Custom Properties no `:root`.
*   **JavaScript**: Vanilla JS. Modularizado apenas logicamente em pequenos arquivos ou encapsulado para funções simples (menu responsivo, accordions de FAQ).
*   **Ícones**: Como SVGs inline para evitar dependência de CDNs externas.

## 4. Dados (Conteúdo)

*   Todo o conteúdo simulado (projetos em destaque, textos) é isolado em `app/content.php` (como arrays associativos em PHP). Isso facilita a substituição futura por um banco de dados ou CMS caso o projeto cresça.
*   Nomes de clientes, certificados, garantias e valores de economia não são declarados ainda, por decisão de projeto e regras do briefing.

## 5. Servidor Local

Para execução local nativa do PHP, a pasta raiz a ser servida é a `site/public/`. O comando padrão é:
`php -S localhost:8000 -t public/` (executado a partir da pasta `site/`).

## 6. Otimizações para Produção (Preparação)
- **SEO Básico:** Titles dinâmicos por rota, canonical configurável, Open Graph e meta descriptions preenchidos com foco regional.
- **LocalBusiness Schema (JSON-LD):** Implantado no `head` do site com telefone, nome e endereço oficial para aumentar relevância nas pesquisas regionais (Juazeiro/Petrolina).
- **Imagens:** Priority hints (`fetchpriority="high"`) aplicados na imagem *above the fold* (hero), e `loading="lazy"` aplicado nas imagens de projeto para economizar banda. O formato atual segue `.jpg` ou `.png`. Conversão para WebP ou geração de srcsets dependerá do servidor final.
- **Indexação (Robots):** Atualmente configurado para `Disallow: /` (bloqueio total) em `public/robots.txt` para evitar indexação precoce de demonstrações.
- **Privacidade/LGPD:** Como não há coleta de conta de luz, submissão de leads via formulários ou tags do Google/Facebook instaladas no código, não inventamos políticas de privacidade provisórias. Todo o fluxo é um redirecionamento amigável para o WhatsApp comercial público.

## 7. Pendências da Expresso Solar para Lançamento (Go-Live)
Antes da publicação oficial via domínio e FTP/Hospedagem, as seguintes lacunas do planejamento deverão ser preenchidas pelos diretores:
1.  **Imagens Finais:** Trocar o logo atual pela versão final em vetor (SVG) sem fundo invisível gigante. Liberar de 2 a 3 fotos de projetos autênticos para preencher o loop da aba "Projetos".
2.  **Aprovação Comercial:** Validar o CTA central (*"Olá! Vim pelo site e gostaria de uma análise para energia solar."*).
3.  **Domínio Real:** Ajustar a diretiva `BASE_URL` no arquivo `config.php` de *localhost* para `https://www.expressosolar...`.
4.  **Horários de Expediente:** O site afirma ser aconselhável um "contato prévio para garantir disponibilidade técnica" presencial. Se a Ozelina Dias da Silva possuir balcão aberto das 8h às 18h, o texto de `/contato/` precisará ser ajustado.
5.  **Políticas Anteriores:** Os anúncios de teste antigos com "R$ 4.890" em 21x foram propositalmente suprimidos para preservar a Expresso Solar contra promessas que poderiam não estar válidas; a inserção futura dessas cláusulas demandará inclusão explícita no `content.php`.
