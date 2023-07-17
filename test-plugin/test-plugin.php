<?php /**
 * @package My Plugin
 * @version 1.6
 */

/*
Plugin Name: My Plugin
Plugin URI: http://www.cnblogs.com/fxmbz/p/4059678.html
Description: 我制作的第一个WP插件,这个插件就是在后台页面的头部显示一段文字
Author: zhangxl
Version: 1.0
Author URI: http://www.cnblogs.com/fxmbz
*/

/*
  Copyright 年份  作者名  (email : 你的邮箱)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// 在wp后台头部输出自定义的字符串
add_action('admin_head', 'my_first_plugin');
function my_first_plugin() {
    echo '<h1 style="margin-left:200px;">我制作的第一个WP插件</h1>';
}
?>
