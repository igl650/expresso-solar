<?php
require_once dirname(__DIR__, 2) . '/app/config.php';
require_once APP_PATH . '/content.php';
$page_title = 'Sobre Nós';
$page_description = 'Com sede em Juazeiro, atuamos no Vale do São Francisco focados em projetos bem dimensionados e segurança elétrica.';
require_once APP_PATH . '/partials/header.php';
?>

<main id="conteudo-principal">
    <header class="page-header">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?= base_url() ?>">Início</a>
                <span>/</span>
                <span aria-current="page">Sobre nós</span>
            </div>
            <h1 class="page-title">Perto de quem faz<br>o Vale acontecer.</h1>
            <p class="page-subtitle">A Expresso Solar existe para garantir projetos bem dimensionados em Juazeiro e região.</p>
        </div>
    </header>

    <section class="about-section" style="padding-top: 120px;">
        <div class="container about-layout">
            <div class="about-content">
                <span class="about-label">COMPROMISSO TÉCNICO</span>
                <h2 class="about-title">Nossa base de trabalho.</h2>
                <p class="about-desc" style="margin-bottom: 24px;">Com sede em Juazeiro, atuamos no Vale do São Francisco focados em segurança elétrica e projetos adequados ao perfil de consumo de cada pessoa, comércio ou fazenda.</p>
                <p class="about-desc">Acreditamos que a energia solar vai além da instalação física; é necessário entender a fatura atual, orientar expectativas e assegurar suporte depois que a usina é ligada.</p>
            </div>
            <div class="about-contact">
                <span class="about-contact-label">JUAZEIRO / BAHIA</span>
                <p class="about-address"><?= $empresa['endereco'] ?></p>
                <p class="about-availability">Atendemos também Petrolina e entorno, conforme análise de viabilidade logística e técnica.</p>
                <a href="<?= $empresa['maps_link'] ?>" class="about-link" target="_blank" rel="noopener noreferrer">Ver localização no mapa ↗</a>
            </div>
        </div>
    </section>

    <!-- Call to Action Final -->
    <section class="final-cta">
        <div class="container text-center">
            <h2 class="final-cta-title">Ainda não tem certeza<br>se a energia solar é para você?</h2>
            <a href="<?= whatsapp_link() ?>" class="btn-primary btn-large cta-icon" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"/><path d="M10 14h.01"/><path d="M14 10h.01"/></svg>
                Fale conosco para tirar dúvidas
            </a>
        </div>
    </section>
</main>

<?php require_once APP_PATH . '/partials/footer.php'; ?>
