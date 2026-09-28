<?php
require_once dirname(__DIR__, 2) . '/app/config.php';
require_once APP_PATH . '/content.php';
$page_title = 'Como Funciona';
$page_description = 'Entenda as etapas da transição para energia solar, desde a análise de consumo até a entrega do sistema.';
require_once APP_PATH . '/partials/header.php';
?>

<main id="conteudo-principal">
    <header class="page-header">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?= base_url() ?>">Início</a>
                <span>/</span>
                <span aria-current="page">Como funciona</span>
            </div>
            <h1 class="page-title">Um processo conduzido<br>com seriedade.</h1>
            <p class="page-subtitle">O caminho provável para quem deseja migrar para a energia solar com a Expresso Solar. A equipe orienta as etapas do seu projeto com clareza.</p>
        </div>
    </header>

    <section class="inner-content-section" style="background-color: var(--expresso-white);">
        <div class="container">
            <div class="timeline-grid">
                <?php $index = 1; foreach($etapas_processo as $etapa): ?>
                <div class="timeline-item">
                    <div class="timeline-marker"><?= str_pad($index, 2, '0', STR_PAD_LEFT) ?></div>
                    <div class="timeline-content">
                        <h3><?= htmlspecialchars($etapa['titulo']) ?></h3>
                        <p><?= htmlspecialchars($etapa['descricao']) ?></p>
                    </div>
                </div>
                <?php $index++; endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq-section" style="padding-top: 0; background-color: var(--expresso-white);">
        <div class="container faq-container">
            <h2 class="faq-title">Dúvidas Frequentes</h2>
            <div class="faq-list">
                <?php foreach($faqs as $faq): ?>
                <details class="faq-item">
                    <summary class="faq-question">
                        <?= htmlspecialchars($faq['pergunta']) ?>
                        <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </summary>
                    <div class="faq-answer">
                        <p><?= htmlspecialchars($faq['resposta']) ?></p>
                    </div>
                </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Call to Action Final -->
    <section class="final-cta">
        <div class="container text-center">
            <h2 class="final-cta-title">Quer entender a viabilidade<br>para o seu caso?</h2>
            <a href="<?= whatsapp_link() ?>" class="btn-primary btn-large cta-icon" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"/><path d="M10 14h.01"/><path d="M14 10h.01"/></svg>
                Conversar sobre um projeto
            </a>
        </div>
    </section>
</main>

<?php require_once APP_PATH . '/partials/footer.php'; ?>
