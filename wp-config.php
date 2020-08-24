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
define( 'DB_NAME', 'wkcz_vanxuan' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'V/p()wuD5N77kN$@#]`)8jQ:$e5KNq6/}=u`R]/+`(;P]!VaSQ.ERPx.n?K^5hW=' );
define( 'SECURE_AUTH_KEY',  'M]<N+Wz*rX0+aGGNON1U1xdMpxI?9i4u8^Z_C*Af6u]xLNB_IO?T_H!$X)wP1%6%' );
define( 'LOGGED_IN_KEY',    '1SVj#!S6lfKdy#R/_DiC0},l/klR9m|u[6bSDCg@g]k#N_fTofzPL$LN06l~/h.w' );
define( 'NONCE_KEY',        'Nxdl^?xGg[{h*&;(lHsrJ^iX_Z2]~<<V?j-}}#Ay+}TH=77jCF-wz>b2@**IW;<R' );
define( 'AUTH_SALT',        'eT#h5tcRqCt(|&1>VLbH/{K_sU@.+`)S<(tg[izZd0x[]LWC2w);0z@D*E-{<~|_' );
define( 'SECURE_AUTH_SALT', '#=5rVnAE9|o)#!n8YtS9*uXkV-Ny~T}r_f;9K5?tp#0(Q6gJ/WV pi_9JckBYIQb' );
define( 'LOGGED_IN_SALT',   'xC@97TSyH0ifm EC&<^yb>YU(D(RF?@(pwUC:l{gF9h%Oq8RvxRk]vO^O NuCo)^' );
define( 'NONCE_SALT',       'ELv7KM+tWX4]!?Eb7MAQ5TLj0z/k:Dq>3|U$Q ke-I2) 8;^[8.O`qpKDA$kacLR' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
