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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'projetomod4' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'projeto' );

/** Nome do host do MySQL */
define( 'DB_HOST', '172.30.5.8:3306' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         'h51lb+ma~r0o5QqZ$0Xmzqt<Bo:}kIp{bOrv)WuYU3=S[|R[!-}!aV0#r/I9n0%}');
define('SECURE_AUTH_KEY',  'PxpWvQwbALCk}`; ^eH7=Pd[s:=&mRIOP ){<U7@#{c]:,lvx+]b2f+Jz}>e%!iR');
define('LOGGED_IN_KEY',    '2*~};{/`~Yw&&l|!MQ,R}Jh>d|+zBDp}_,co(5Z&%.[{(Idub*?Rpg6R|%|8*g),');
define('NONCE_KEY',        '}:aF&{sbm!x26{Sl&IEeqg<|@(IR])C_,,(r%lJhsc%<BPYaL3^`N|91O9!h^.=A');
define('AUTH_SALT',        '$-O9p$bh`;9ADb~+)%~O9RL:J.1`N:F9r^+ l@vX 1hoSx$z$z^+&)gKuc{z?Ait');
define('SECURE_AUTH_SALT', '5_W=2rET{myx0?mMg_LVYLH46usY9SsB?:~}/|;NX)&2x:2PO)9S/+zm|u2`0#@&');
define('LOGGED_IN_SALT',   '[$O-6+Jae8z1-f`p8H.+}vfKi0h%y6w7D3}^Tm}A*Tem`|!{8P|%Kd>+ExNOA_$>');
define('NONCE_SALT',       'VN)Q_!J/tQCc$eDA~mxq <G`| _h@A,6lLrrp+Nl+Q>}w@<gN(O-ADu/%D~c=EuC');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once( ABSPATH . 'wp-settings.php' );
