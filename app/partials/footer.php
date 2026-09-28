<?php 
global $empresa; 
require_once APP_PATH . '/helpers.php';
?>
        <footer class="site-footer">
            <div class="container">
                <div class="footer-layout">
                    <img src="<?= asset_url('img/logo-provisorio.png') ?>" alt="Expresso Solar" class="footer-logo">
                    
                    <div class="footer-links">
                        <a href="<?= $empresa['instagram_link'] ?>" target="_blank" rel="noopener noreferrer">Instagram</a>
                        <a href="<?= $empresa['maps_link'] ?>" target="_blank" rel="noopener noreferrer">Google Maps</a>
                        <a href="tel:+<?= $empresa['telefone_link'] ?>"><?= $empresa['telefone_formatado'] ?></a>
                        <span class="footer-region"><?= $empresa['cidade'] ?> • Petrolina/PE</span>
                    </div>
                    
                    <p class="footer-copy">
                        &copy; <?= date('Y') ?> <?= $empresa['nome'] ?>. Todos os direitos reservados.
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <script src="<?= asset_url('js/main.js') ?>"></script>
</body>
</html>
