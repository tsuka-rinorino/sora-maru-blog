<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'soramaru_wp' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C[L*t_oH[?>&@rpasXJ!=OE<2&7F :WEM,:`vKG]#qf)M8[bs/S:D:y,DWtFEk=4' );
define( 'SECURE_AUTH_KEY',  '?u&ZvU{<Sdf <;t5Ks, jARlh+f*35G9n<Y)#rN`du+l71+EKi5l7<=2|G[+v6VR' );
define( 'LOGGED_IN_KEY',    'L!tM%[kPj__&g3H8(;l-SXU6IzP`s/,x|.+I1/Y^&a~i]1BJriL]WNXSiz&rK$P`' );
define( 'NONCE_KEY',        'P6+9u#3&-xf{J[qW_W`WnzNO1}I>d$jpd|fT<=J8f :xZ3?y-bJ=d[jL~EY`8h]:' );
define( 'AUTH_SALT',        'shsZ ,%,1vhD1O<HT`]1mP[nkxkhm>ew- 0H-uv*t`p5Rza?EJWyB;ZakQ5zWmyw' );
define( 'SECURE_AUTH_SALT', '0j.{R&z&5&nMf;ChAm<6,/dJsTwc,&oL{xhLR%=?u1PfCmV(q6Wp}YukBq#G4y(m' );
define( 'LOGGED_IN_SALT',   'X.P}pDYBaof~XJ0kU9)kW[-C1a|1Eihh@XvH~z i#9{rfc$|<_bfF#,MqEGd_lYw' );
define( 'NONCE_SALT',       'Na(zKM2hktSi8inz<Sp*&d}dim2AQ=rA0>P=Co8B aX-[&W*oudfW$xuUL^G/8,S' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'sm_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
