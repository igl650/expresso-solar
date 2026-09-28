<?php
// ATENÇÃO: Ao publicar em produção, altere a SITE_URL para o domínio final com https://
define('SITE_URL', rtrim(getenv('SITE_URL') !== false ? getenv('SITE_URL') : 'http://localhost:8000', '/'));
define('APP_PATH', __DIR__);
define('PUBLIC_PATH', dirname(__DIR__) . '/public');

$empresa = [
    'nome' => 'Expresso Solar',
    'telefone_formatado' => '(74) 99963-8519',
    'telefone_link' => '5574999638519',
    'whatsapp_msg' => 'Olá! Vim pelo site e gostaria de uma análise para energia solar.',
    'endereco' => 'Rua Ozelina Dias da Silva, 482, Alto da Maravilha',
    'cidade' => 'Juazeiro/BA',
    'maps_link' => 'https://maps.app.goo.gl/qcxDjUVS22YosTNK7',
    'maps_reviews_link' => 'https://www.google.com/maps/place/Expresso+Solar/@-9.4218716,-40.5034946,17z/data=!4m8!3m7!1s0x77371ad1f923369:0x9df9f7d545e0e625!8m2!3d-9.4218716!4d-40.5034946!9m1!1b1',
    'maps_embed' => 'https://www.google.com/maps?q=Expresso+Solar,+Rua+Ozelina+Dias+da+Silva,+482,+Juazeiro+-+BA&ll=-9.4218716,-40.5034946&z=16&hl=pt-BR&output=embed',
    'maps_rota' => 'https://www.google.com/maps/dir/?api=1&destination=-9.4218716,-40.5034946',
    'google_nota' => '5,0',
    'google_total' => 43,
    'instagram' => '@expressosolarjua',
    'instagram_link' => 'https://www.instagram.com/expressosolarjua/'
];
