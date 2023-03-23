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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'pagbrasildb' );

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
define( 'AUTH_KEY',         'u>ag]c2H9.btKewbfX,X14C*zm6EYO(]|R4UANaVOf=:`T#pa8DNmz=8jxI:{;po' );
define( 'SECURE_AUTH_KEY',  '`(jiYJ%M`|(JGN(1^[ch+RUKr?$ouxK^FzKA]&~}vR@df?z>DFFZcEceCIXOILGH' );
define( 'LOGGED_IN_KEY',    'g}&//}b(y[<lai-*66t~{|V=.ZHqyH2oe5B#]U8<t?]k)0*l:-qAnR)K=)Qd:=k_' );
define( 'NONCE_KEY',        'j#!]3T(j9q&u~9h69_MHq ::Z:=5A${HPt*]yg>xS+>=f8`3Xza}P>NcNEziBjYd' );
define( 'AUTH_SALT',        '1F?`j_U,lQssh A{ztf8!lG:gyzuq*08^{HA`gB<io8$~q9Pr5pw__G{64rHA%p{' );
define( 'SECURE_AUTH_SALT', 'rmdcGSUDn57&I;D@B}+l092S{30XCy:O~Tct hPk#lv{0`#8C&O]Mv)ow,m&US_i' );
define( 'LOGGED_IN_SALT',   'Vs#{Ir5xFjtQ- |7FujSNSPRV<3c~jT!p-DS?=H2uzB%)kpe{(< GQzlf$h`lLt|' );
define( 'NONCE_SALT',       'S0,LQ9^HD&jUn(M=9P46A~#>9+q=v@@kYV3#Sq#)Ip8g$`UYzax$>D<*f2@rsi#$' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_pagbrasil';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
