<?php
require_once dirname(__DIR__, 2) . '/app/config.php';
require_once APP_PATH . '/content.php';
$page_title = 'Contato';
$page_description = 'Fale diretamente com nossa equipe técnica via WhatsApp ou agende uma visita à nossa sede em Juazeiro/BA.';
require_once APP_PATH . '/partials/header.php';
?>

<main id="conteudo-principal">
    <header class="page-header">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?= base_url() ?>">Início</a>
                <span>/</span>
                <span aria-current="page">Contato</span>
            </div>
            <h1 class="page-title">Fale com a equipe.</h1>
            <p class="page-subtitle">Prontos para avaliar seu telhado, terreno ou necessidade de consumo em Juazeiro e região.</p>
        </div>
    </header>

    <section class="inner-content-section" style="background-color: var(--expresso-white);">
        <div class="container">
            <div class="contact-grid">
                
                <div class="contact-card">
                    <h3>Fale diretamente</h3>
                    <p style="margin-bottom: 32px; color: var(--text-muted);">Use o WhatsApp para enviar sua fatura de energia ou fazer perguntas iniciais sem compromisso.</p>
                    <div class="contact-info-list">
                        <div class="contact-info-item">
                            <span class="contact-label">Telefone / WhatsApp</span>
                            <a href="<?= whatsapp_link() ?>" class="contact-value contact-link" target="_blank" rel="noopener noreferrer">
                                <?= $empresa['telefone_formatado'] ?> ↗
                            </a>
                        </div>
                        <div class="contact-info-item">
                            <span class="contact-label">Instagram</span>
                            <a href="<?= $empresa['instagram_link'] ?>" class="contact-value contact-link" target="_blank" rel="noopener noreferrer">
                                @expressosolarjua ↗
                            </a>
                        </div>
                        <div class="contact-info-item" style="margin-top: 16px;">
                            <a href="<?= whatsapp_link() ?>" class="btn-primary btn-large cta-icon" target="_blank" rel="noopener noreferrer" style="width: 100%; font-size: 14px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"/><path d="M10 14h.01"/><path d="M14 10h.01"/></svg>
                                Iniciar conversa
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact-card" style="background: white; border: 1px solid var(--border-color);">
                    <h3>Visite a Sede</h3>
                    <p style="margin-bottom: 32px; color: var(--text-muted);">Para reuniões de projeto ou entendimento detalhado das propostas comerciais.</p>
                    <div class="contact-info-list">
                        <div class="contact-info-item">
                            <span class="contact-label">Endereço</span>
                            <span class="contact-value"><?= $empresa['endereco'] ?></span>
                            <a href="<?= $empresa['maps_link'] ?>" class="contact-link" style="margin-top: 8px;" target="_blank" rel="noopener noreferrer">Abrir rota no Google Maps ↗</a>
                        </div>
                        <div class="contact-info-item">
                            <span class="contact-label">Atendimento</span>
                            <span class="contact-value">Horário comercial<br><span style="font-size: 14px; color: var(--text-muted); font-weight: 400;">(Recomendamos contato prévio para garantir disponibilidade técnica).</span></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php require_once APP_PATH . '/partials/footer.php'; ?>
