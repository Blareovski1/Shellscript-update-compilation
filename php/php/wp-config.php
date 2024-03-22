<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'edu' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RvKWdlZOcO,Ia|Sf]qGODUv;MX0rU|eE6I2ol*dV87*Jj.NUdJvJFOs.`Z+3S9*F' );
define( 'SECURE_AUTH_KEY',  'vcdLOX9tvoS/=H8*+l@EEry|U}GW#jdQ{D,Ck@T./:%Krf(b?P ^!A13FN5gihXu' );
define( 'LOGGED_IN_KEY',    'ETRp%:n&^z$u`KayNN[WB/cpY;}pNi/`9rDkww%Q]~XI$$W?njh?7|,qU^|V$;N(' );
define( 'NONCE_KEY',        'Sjl$HuiLgXZ@7@Y-z1:fTGV8ZWYa%HnR:$TL,~$HU+UCV.-b,W#0{%(/N-[u@[w(' );
define( 'AUTH_SALT',        'q>0MTm~:ULQ a_*d?G;Jh=DkWOw!P-B:^x&ktM_Pt)N;.`^q,,owR-dF6u#iF/8;' );
define( 'SECURE_AUTH_SALT', '|p?S*K[zP:?hHajOeSys@L:xb-1cB/?WQJh.c)kVe?Fali~q?t=F_#G_C(_laEb3' );
define( 'LOGGED_IN_SALT',   'nDwSU*Svrr:Q6%EY4>rvE4JKij}<HNruJu[8Y6kuqzsY:@AQ|grb!9>`Er` .})Z' );
define( 'NONCE_SALT',       '%NzHU5VrB/W}~)BkBD.U>vj2e)S e%B1Q+L:@}L.Nw1uiEr<%OD?Rct}G6Jhb:U]' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
