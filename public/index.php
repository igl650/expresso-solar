<?php
require_once dirname(__DIR__) . '/app/config.php';
require_once APP_PATH . '/content.php';
$page_title = 'O Sol do Vale trabalhando para você';
require_once APP_PATH . '/partials/header.php';
?>

<main id="conteudo-principal">
    <!-- Hero Section -->
    <section id="inicio" class="hero-section">
        <div class="hero-media">
            <img src="<?= asset_url('img/instalacao-instagram-2026.jpg') ?>" alt="Instalação de painéis solares pela Expresso Solar" class="hero-img" fetchpriority="high" decoding="sync">
            <div class="hero-gradient"></div>
        </div>

        <div class="container hero-container">
            <div class="hero-copy reveal">
                <span class="badge-location">
                    JUAZEIRO • PETROLINA • VALE DO SÃO FRANCISCO
                </span>
                <h1 class="hero-title">
                    O sol daqui pode trabalhar pela sua economia.
                </h1>
                <p class="hero-text">
                    Projetos de energia solar pensados para o seu consumo, com atendimento em Juazeiro, Petrolina e região.
                </p>
                <a href="<?= whatsapp_link() ?>" class="btn-primary btn-large cta-icon" target="_blank" rel="noopener noreferrer">
                    Pedir análise do meu consumo
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>
        </div>
        
        <div class="hero-caption">Instalação publicada pela Expresso Solar · set/2026</div>
    </section>

    <!-- Trust Bar -->
    <section class="trust-bar">
        <div class="container trust-container">
            <a href="<?= $empresa['maps_link'] ?>" class="trust-link" target="_blank" rel="noopener noreferrer">
                ★ 5,0 no Google · 43 avaliações <span class="trust-date">(consultado em setembro de 2026)</span> ↗
            </a>
            <span class="trust-item">Projetos pensados para cada consumo</span>
            <span class="trust-item">Suporte depois da instalação</span>
        </div>
    </section>

    <!-- Solutions -->
    <section id="solucoes" class="solutions-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Soluções sob medida para o seu dia a dia.</h2>
                <p class="section-desc">De residências a negócios locais e áreas rurais, avaliamos cada consumo para propor uma solução adequada no Vale do São Francisco.</p>
            </div>

            <div class="solution-grid">
                <article class="solution-card">
                    <span class="solution-index">01 / CASA</span>
                    <h3>Mais liberdade para viver.</h3>
                    <p>Um sistema dimensionado para os hábitos e o consumo da sua família.</p>
                    <a href="<?= whatsapp_link() ?>" class="solution-link">Conversar sobre minha casa ↗</a>
                </article>
                <article class="solution-card">
                    <span class="solution-index">02 / NEGÓCIO</span>
                    <h3>Energia para crescer.</h3>
                    <p>Planejamento para tornar os gastos com energia mais previsíveis.</p>
                    <a href="<?= whatsapp_link() ?>" class="solution-link">Conversar sobre meu negócio ↗</a>
                </article>
                <article class="solution-card">
                    <span class="solution-index">03 / CAMPO</span>
                    <h3>Produzir com o sol do Vale.</h3>
                    <p>Projetos avaliados segundo a demanda da sua propriedade rural.</p>
                    <a href="<?= whatsapp_link() ?>" class="solution-link">Conversar sobre o campo ↗</a>
                </article>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section id="como-funciona" class="process-section">
        <div class="container">
            <div class="process-layout">
                <div class="process-intro">
                    <h2 class="process-title">Transição simples, <span class="text-light">passo a passo.</span></h2>
                </div>
                <div class="process-steps">
                    <div class="process-step">
                        <span class="step-number">01</span>
                        <h4>Análise Técnica</h4>
                        <p>Entendemos seu consumo e as características do local antes de propor o projeto.</p>
                    </div>
                    <div class="process-step">
                        <span class="step-number">02</span>
                        <h4>Instalação Ágil</h4>
                        <p>A instalação é planejada com atenção à segurança e aos detalhes do imóvel.</p>
                    </div>
                    <div class="process-step">
                        <span class="step-number">03</span>
                        <h4>Entrega e acompanhamento</h4>
                        <p>Acompanhamos a entrega e orientamos você depois que o sistema começa a operar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Project -->
    <section id="projetos" class="featured-project-section">
        <div class="container">
            <div class="featured-header">
                <h2 class="featured-title">Trabalho que aparece<br>na paisagem.</h2>
                <span class="featured-badge">PROJETO EM DESTAQUE / 2026</span>
            </div>
            
            <div class="project-card">
                <div class="project-image-wrapper">
                    <img src="<?= asset_url('img/instalacao-instagram-2026.jpg') ?>" alt="Painéis instalados em telhado cerâmico, com veículo da Expresso Solar" class="project-img" loading="lazy" decoding="async">
                </div>
                <div class="project-info">
                    <small class="project-meta">Publicado pela Expresso Solar · 18/09/2026</small>
                    <h3 class="project-heading">Do planejamento à instalação.</h3>
                    <p class="project-desc">Uma instalação em telhado cerâmico registrada pela própria equipe. Cada projeto pede leitura do consumo, do espaço e das necessidades de quem vai usar a energia.</p>
                    <a href="https://www.instagram.com/p/DdRTTp7TYRh/" target="_blank" rel="noopener noreferrer" class="project-link">Ver publicação original no Instagram ↗</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Avaliações Google -->
    <section id="avaliacoes" class="reviews-section" aria-labelledby="reviews-title">
        <div class="container reviews-header">
            <span class="reviews-eyebrow">AVALIAÇÕES NO GOOGLE</span>
            <h2 id="reviews-title" class="reviews-title">A confiança de quem já gera a própria energia.</h2>
            <a href="<?= $empresa['maps_reviews_link'] ?>" class="reviews-score" target="_blank" rel="noopener noreferrer">
                <?= google_icon() ?>
                <strong><?= $empresa['google_nota'] ?></strong>
                <span class="reviews-stars" aria-hidden="true">★★★★★</span>
                <span class="reviews-count"><?= $empresa['google_total'] ?> avaliações ↗</span>
            </a>
        </div>

        <div class="reviews-marquee">
            <div class="reviews-track">
                <?php for ($copia = 0; $copia < 2; $copia++): ?>
                <ul class="reviews-group"<?= $copia ? ' aria-hidden="true"' : '' ?>>
                    <?php foreach ($avaliacoes_google as $avaliacao): ?>
                    <li class="review-card">
                        <div class="review-top">
                            <?= google_icon() ?>
                            <span class="review-stars" aria-label="5 de 5 estrelas">★★★★★</span>
                        </div>
                        <p class="review-text"><?= htmlspecialchars($avaliacao['texto']) ?></p>
                        <div class="review-author">
                            <span class="review-avatar" aria-hidden="true"><?= htmlspecialchars(preg_match('/./u', $avaliacao['nome'], $inicial) ? $inicial[0] : '') ?></span>
                            <div>
                                <strong><?= htmlspecialchars($avaliacao['nome']) ?></strong>
                                <small>Avaliação no Google</small>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- Localização -->
    <section id="localizacao" class="location-section" aria-labelledby="location-title">
        <div class="location-map">
            <iframe src="<?= $empresa['maps_embed'] ?>" title="Mapa com a localização da Expresso Solar em Juazeiro/BA" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
        </div>

        <div class="container location-container">
            <div class="location-card">
                <span class="location-label">NOSSA BASE É AQUI</span>
                <h2 id="location-title" class="location-title">Perto de quem faz o Vale acontecer.</h2>
                <p class="location-desc">Com sede em Juazeiro, a Expresso Solar conversa com famílias, negócios e produtores que querem entender a energia solar antes de investir.</p>

                <div class="location-address">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    <div>
                        <strong><?= $empresa['endereco'] ?></strong>
                        <span><?= $empresa['cidade'] ?> · Atendimento também em Petrolina e região</span>
                    </div>
                </div>

                <div class="location-actions">
                    <a href="<?= $empresa['maps_rota'] ?>" class="btn-primary location-btn" target="_blank" rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>
                        Traçar rota
                    </a>
                    <a href="<?= $empresa['maps_link'] ?>" class="location-link" target="_blank" rel="noopener noreferrer">Abrir no Google Maps ↗</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq-section">
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
            <h2 class="final-cta-title">Vamos conversar sobre<br>o seu consumo?</h2>
            <a href="<?= whatsapp_link() ?>" class="btn-primary btn-large cta-icon" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"/><path d="M10 14h.01"/><path d="M14 10h.01"/></svg>
                Fazer um orçamento sem compromisso
            </a>
        </div>
    </section>

</main>

<?php require_once APP_PATH . '/partials/footer.php'; ?>
