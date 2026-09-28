<?php
// Gera a versão estática do site em dist/ (usada pela Vercel).
// Uso: php build.php            -> links relativos à raiz (/)
//      SITE_URL=https://www.dominio.com.br php build.php  -> links absolutos
if (getenv('SITE_URL') === false) putenv('SITE_URL=');

$public = __DIR__ . '/public';
$dist = __DIR__ . '/dist';

function rrmdir($dir) {
    if (!is_dir($dir)) return;
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST) as $f) {
        $f->isDir() ? rmdir($f) : unlink($f);
    }
    rmdir($dir);
}
rrmdir($dist);
mkdir($dist, 0777, true);

$php = escapeshellarg(PHP_BINARY);
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($public, FilesystemIterator::SKIP_DOTS));
foreach ($it as $file) {
    $rel = substr($file->getPathname(), strlen($public) + 1);
    $target = $dist . '/' . $rel;
    @mkdir(dirname($target), 0777, true);
    if ($file->getExtension() === 'php') {
        $html = shell_exec($php . ' ' . escapeshellarg($file->getPathname()));
        if ($html === null || $html === '') { fwrite(STDERR, "Falha ao gerar $rel\n"); exit(1); }
        file_put_contents(preg_replace('/\.php$/', '.html', $target), $html);
        echo "gerado  $rel\n";
    } else {
        copy($file->getPathname(), $target);
    }
}
echo "Pronto: dist/\n";
