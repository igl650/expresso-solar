<?php
require_once dirname(__DIR__, 2) . '/app/config.php';
require_once APP_PATH . '/content.php';
$page_title = 'Projetos e Instalações';
$page_description = 'Conheça instalações registradas pela equipe da Expresso Solar em Juazeiro e Petrolina.';
require_once APP_PATH . '/partials/header.php';
?>

<main id="conteudo-principal">
    <header class="page-header">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?= base_url() ?>">Início</a>
                <span>/</span>
                <span aria-current="page">Projetos</span>
            </div>
            <h1 class="page-title">Trabalho transparente.</h1>
            <p class="page-subtitle">Instalações registradas pela equipe da Expresso Solar em Juazeiro, Petrolina e região.</p>
        </div>
    </header>

    <section class="inner-content-section">
        <div class="container">
            <div class="projects-gallery">
                <?php foreach($projetos_aprovados as $projeto): ?>
                <article class="project-card">
                    <div class="project-image-wrapper">
                        <img src="<?= asset_url($projeto['imagem']) ?>" alt="<?= htmlspecialchars($projeto['imagem_alt']) ?>" class="project-img" loading="lazy" decoding="async">
                    </div>
                    <div class="project-info">
                        <small class="project-meta">Publicado pela Expresso Solar · <?= htmlspecialchars($projeto['data_publicacao']) ?></small>
                        <h2 class="project-heading"><?= htmlspecialchars($projeto['titulo']) ?></h2>
                        <p class="project-desc"><?= htmlspecialchars($projeto['descricao']) ?></p>
                        <a href="<?= htmlspecialchars($projeto['instagram_link']) ?>" target="_blank" rel="noopener noreferrer" class="project-link">Ver publicação original no Instagram ↗</a>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>

            <div class="more-projects">
                <p>Muitas instalações ainda não possuem registro fotográfico aprovado para o site.<br>Acompanhe atualizações e rotina de trabalho diretamente nas nossas redes.</p>
                <a href="<?= $empresa['instagram_link'] ?>" class="btn-primary btn-large cta-icon" target="_blank" rel="noopener noreferrer">
                    Acompanhar no Instagram
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="final-cta">
        <div class="container text-center">
            <h2 class="final-cta-title">Vamos avaliar a viabilidade<br>para o seu telhado?</h2>
            <a href="<?= whatsapp_link() ?>" class="btn-primary btn-large cta-icon" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"/><path d="M10 14h.01"/><path d="M14 10h.01"/></svg>
                Fazer um orçamento sem compromisso
            </a>
        </div>
    </section>
</main>

<?php require_once APP_PATH . '/partials/footer.php'; ?>
