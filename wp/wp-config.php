<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'progetto_settimana2_backend' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~^@h:WfpcJ^7;`J##@}@r%Ax,tRp ~L.SV&y%Ex`D#^U0+pQt+`Q].YA&|tWI][t' );
define( 'SECURE_AUTH_KEY',  'H-_zPq-%FZ/JVg#LD:eAo6O5gikDe>%M)H,f^*i9;u~q;+Y#,$aJ~wKS~=.;@/W/' );
define( 'LOGGED_IN_KEY',    '^6&h.qN #iBLp8L:;biMkU:!%bfV;H+:s>uYp8.K&f7Ki*e_7mNz:$Y16yv6W~XA' );
define( 'NONCE_KEY',        'u-_^~[;>rZ2;eIsNu] F#>D:q~CciO$5lB(3blDnb3QK.iRm9Z,cfiW^tD<$X,p`' );
define( 'AUTH_SALT',        '|4;q]of-1f@)fY0V6ug=E$nqGqUW-!f^F[:shj4<8|Atwo`x6Lr|6#2b03k/d=%)' );
define( 'SECURE_AUTH_SALT', 'ki5PjfFP9<i<{DUq1>#2SD@nHGGH|.`26zqMJH3t5Cta/h6?QKYRc8!T{pk3Rqv ' );
define( 'LOGGED_IN_SALT',   'S2D1FqR.7Q.lV,`%aiK*gvfv~|gm_{ef&*85 9<AFD$E0TV5TEi_}1YMi,;7d&pe' );
define( 'NONCE_SALT',       'niKf:5wEqY~58107`&:#^ghpw.fkMjaJM~HOh(7@t7T]{Z Tm,s)BrcM/:0j+z[4' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
