# Expresso Solar - Site Institucional

Este repositório contém a versão fundacional do site institucional da Expresso Solar. O projeto foi construído em PHP, HTML5 e CSS nativo, dispensando a necessidade de bancos de dados, npm, Tailwind ou frameworks pesados nesta etapa inicial.

## 1. Como executar o projeto localmente

Para visualizar o site e validar as alterações, abra o terminal nesta pasta e inicie o servidor embutido do PHP apontando para a pasta `public`:

```bash
php -S localhost:8000 -t public/
```

Em seguida, acesse `http://localhost:8000` no seu navegador.

## 2. Como editar textos, dados e FAQs

A maioria dos textos descritivos, dados de contato e informações técnicas está isolada e estruturada nos arquivos de configuração:

*   **Configurações e Contatos:** Edite `app/config.php` (telefone, endereço, mensagem do WhatsApp, links de redes sociais).
*   **Projetos, FAQ e Etapas:** Edite `app/content.php`. Novos projetos e perguntas frequentes devem ser adicionados como blocos no array, garantindo que o site seja atualizado sem você precisar encostar no HTML das páginas.

Para os textos hardcoded (como o H1 da página inicial ou descrições específicas), basta editar os respectivos arquivos `index.php` dentro da pasta `public/` (ex: `public/sobre/index.php`).

## 3. Substituição de Mídias (Logo e Instalações)

As imagens são servidas diretamente do diretório `public/assets/img/`.

1.  **Logotipo:** O arquivo atual é o `logo-provisorio.png`. Quando receber o vetor final (preferencialmente `.svg` ou `.png` ajustado sem fundo sobrando), substitua-o na pasta e atualize o nome do arquivo em `app/partials/header.php`.
2.  **Fotos:** Atualmente, a única foto licenciada é `instalacao-instagram-2026.jpg`. Novas imagens de projetos devem ser salvas na pasta `img/` e listadas no array em `app/content.php`.
3.  **Dica:** Sempre prefira fotos otimizadas e no tamanho final de exibição para garantir que o site carregue rapidamente.

## 4. O que configurar ANTES de publicar (Go-Live)

1.  **Configurar Domínio Base:** No arquivo `app/config.php`, mude o valor de `SITE_URL` de `http://localhost:8000` para o seu domínio real (ex: `https://www.expressosolar.com.br`). Isso ajustará todos os links, o canonical e as tags de compartilhamento (Open Graph).
2.  **Aprovar Mensagens Padrão:** Revise se o WhatsApp configurado e a mensagem padrão de contato em `app/config.php` estão validados com a equipe de vendas da Expresso Solar.
3.  **Desbloquear Buscadores (Robots):** No momento, o arquivo `public/robots.txt` proíbe o Google de escanear o site. No dia do lançamento oficial, mude o arquivo comentando o `Disallow` e ativando o `Allow: /`, para que o site seja encontrado nos buscadores.
4.  **Atualizar o Sitemap:** No arquivo `public/sitemap.xml`, altere o termo de demonstração `DOMINIO_AQUI` pelo seu URL definitivo.

## 5. Publicação (GitHub + Vercel)

A Vercel não executa PHP, por isso o site é publicado como HTML estático gerado na pasta `dist/` (que **deve ir para o GitHub**).

1. Após qualquer alteração, gere a versão estática: `php build.php`
   - Com domínio definido (links absolutos, canonical e Open Graph corretos): `SITE_URL=https://www.dominio.com.br php build.php`
2. Faça commit e push, incluindo a pasta `dist/`.
3. Na Vercel, importe o repositório com o preset **Other**. O `vercel.json` já define `dist/` como saída e dispensa o comando de build.
