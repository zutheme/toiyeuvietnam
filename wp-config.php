<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'toiyeuviet_dbtoiyeu' );
define( 'DB_USER', 'toiyeuviet_dbtoiyeu' );
define( 'DB_PASSWORD', 'TzEdw22OW' );

// define( 'DB_NAME', 'toiyeuviet_demo' );
// define( 'DB_USER', 'toiyeuviet_demo' );
// define( 'DB_PASSWORD', 'TzEdw22OW' );

define( 'DB_HOST', "45.117.168.156" );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Zq[[poNaA;d#qyl@9b$XEPSwAQ{%0=0T,~eZu_yM>!T?+tR)3EY%00u4];QYb`Q/' );
define( 'SECURE_AUTH_KEY',  '8o+iCX;D|?qE@jXmsw0@K#7fS)wasQ^A&xSaqZ%~C? nc,y>H<GzVC%d#muPp*;K' );
define( 'LOGGED_IN_KEY',    'HG,w!%<y#sQHM!>:_k5_VEgI!E/S,3ordq>K?SG@L6`gp:ect_5*}CGS%3|KhFy9' );
define( 'NONCE_KEY',        'MU[{,|~wOmo_ZJ|ssqxBuD[w8X|4#:,El3z >4&(0%-eOKr{UqUzhZqY7DZE5;O<' );
define( 'AUTH_SALT',        '|#+gXACKHS9KEic77&QkrZi%/1} KfH.Wg9.>@eJ];IWq^/R;K!d<07|V;|M&3R8' );
define( 'SECURE_AUTH_SALT', 'W*aAo!M1&Yk0JN9V7_0: N}elui+LZc:?56#I$,(0>_}*^R@m%.>o*xDk,d,x1oS' );
define( 'LOGGED_IN_SALT',   '|9qG@GWa~b](cCpeaF!GSqZG{I)e,((4w{8GBvM{3Zpms;mL<l1B*[ptO!S6=LKN' );
define( 'NONCE_SALT',       'KGN$e7uYQ@J/.pgBJGFa@/[s N5+fn{Ji607&F,)Hw~oeWT)wrOj]*YnvNufxYDm' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'tyv_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
