<?php
require_once APP_PATH . '/helpers.php';
$title_suffix = ' — Expresso Solar';
$final_title = isset($page_title) ? $page_title . $title_suffix : 'Expresso Solar' . $title_suffix;
$final_desc = isset($page_description) ? $page_description : 'Projetos de energia solar dimensionados para o seu consumo em Juazeiro, Petrolina e região.';
$current_url = base_url(parse_url($_SERVER['REQUEST_URI'] ?? (getenv('REQUEST_URI') ?: '/'), PHP_URL_PATH));
$og_image = asset_url('img/instalacao-instagram-2026.jpg');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($final_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($final_desc) ?>">
    
    <link rel="canonical" href="<?= htmlspecialchars($current_url) ?>">
    
    <meta property="og:title" content="<?= htmlspecialchars($final_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($final_desc) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($current_url) ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?= htmlspecialchars($og_image) ?>">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&family=Inter:wght@400;500;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&family=Inter:wght@400;500;700&display=swap" rel="stylesheet"></noscript>
    <link rel="stylesheet" href="<?= asset_url('css/style.css') ?>">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Expresso Solar",
      "url": "<?= htmlspecialchars(base_url()) ?>",
      "telephone": "+<?= htmlspecialchars($empresa['telefone_link']) ?>",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Rua Ozelina Dias da Silva, 482",
        "addressLocality": "Juazeiro",
        "addressRegion": "BA",
        "addressCountry": "BR"
      }
    }
    </script>
</head>
<body>
    <div class="site-wrapper">
        <header class="site-header" id="main-header">
            <div class="container header-container">
                <a href="<?= base_url() ?>" class="logo-link">
                    <img src="<?= asset_url('img/logo-provisorio.png') ?>" alt="Expresso Solar" class="logo-img">
                </a>
                
                <?php
                $current_path = parse_url($_SERVER['REQUEST_URI'] ?? (getenv('REQUEST_URI') ?: '/'), PHP_URL_PATH);
                $is_active = function($path) use ($current_path) {
                    return strpos($current_path, $path) !== false ? 'active' : '';
                };
                ?>
                <nav class="main-nav" id="main-nav">
                    <a href="<?= base_url('como-funciona/') ?>" class="nav-link <?= $is_active('/como-funciona') ?>">Como funciona</a>
                    <a href="<?= base_url('projetos/') ?>" class="nav-link <?= $is_active('/projetos') ?>">Projetos</a>
                    <a href="<?= base_url('sobre/') ?>" class="nav-link <?= $is_active('/sobre') ?>">Sobre</a>
                    <a href="<?= base_url('contato/') ?>" class="nav-link <?= $is_active('/contato') ?>">Contato</a>
                </nav>

                <a href="<?= whatsapp_link() ?>" class="btn-primary header-cta" target="_blank" rel="noopener noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"/><path d="M10 14h.01"/><path d="M14 10h.01"/></svg>
                    FALAR NO WHATSAPP
                </a>

                <button class="mobile-menu-toggle" id="menu-toggle" aria-label="Abrir menu" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
                </button>
            </div>
        </header>
