<?php
// Heading
$_['heading_title']                = '商家管理';

// Text
$_['text_settings']                = '设置';
$_['text_success']                 = '商家管理设置成功!';
$_['text_list']                    = '商户列表';
$_['text_add']                     = '添加商户';
$_['text_edit']                    = '编辑用户';
$_['text_items']                   = '项目';
$_['text_tax']                     = '税';
$_['text_account']                 = '帐单';
$_['text_checkout']                = '付款';
$_['text_stock']                   = '进货';
$_['text_shipping']                = '收货地址';
$_['text_payment']                 = '支付地址';

// Column
$_['column_name']                  = '商家名称';
$_['column_url']	               = '商家网址';
$_['column_action']                = '编辑';

// Entry
$_['entry_url']                    = '商家网址';
$_['entry_ssl']                    = 'SSL URL';
$_['entry_meta_title']             = 'Meta Title';
$_['entry_meta_description']       = 'Meta Tag Description';
$_['entry_meta_keyword']           = 'Meta Tag Keywords';
$_['entry_layout']                 = '默认布局';
$_['entry_theme']                  = '主题';
$_['entry_name']                   = '商家名称';
$_['entry_owner']                  = '我的商户';
$_['entry_address']                = '地址';
$_['entry_geocode']                = 'Geo代码';
$_['entry_email']                  = '邮箱';
$_['entry_telephone']              = '电话';
$_['entry_fax']                    = '传真';
$_['entry_image']                  = '图片';
$_['entry_open']                   = '开放时间';
$_['entry_comment']                = '内空';
$_['entry_location']               = '商户位置';
$_['entry_country']                = '国家';
$_['entry_zone']                   = '省市 / 区';
$_['entry_language']               = '语言';
$_['entry_currency']               = '国家';
$_['entry_tax']                    = '显示带税价格';
$_['entry_tax_default']            = '使用商家开票地址';
$_['entry_tax_customer']           = '使用商户开票地址';
$_['entry_customer_group']         = '客户组';
$_['entry_customer_group_display'] = '客户群组';
$_['entry_customer_price']         = '登录显示价格';
$_['entry_account']                = '帐期';
$_['entry_cart_weight']            = '在购物车页显示重量';
$_['entry_checkout_guest']         = '游客付款';
$_['entry_checkout']               = '付款期限';
$_['entry_order_status']           = '订单状态';
$_['entry_stock_display']          = 'Display Stock';
$_['entry_stock_checkout']         = 'Stock Checkout';
$_['entry_logo']                   = '商户标志';
$_['entry_icon']                   = '图标';
$_['entry_secure']                 = '使用 SSL';

// Help
$_['help_url']                     = '添加完整URL到您的商户. 确保在后面添加 \'/\' . 例如: http://www.yourdomain.com/path/<br /><br />Don\'t use directories to create a new store. You should always point another domain or sub domain to your hosting.';
$_['help_ssl']                     = 'SSL URL to your store. Make sure to add \'/\' at the end. Example: http://www.yourdomain.com/path/<br /><br />Don\'t use directories to create a new store. You should always point another domain or sub domain to your hosting.';
$_['help_geocode']                 = '请手动输入你的通用地理位置编号 geocode.';
$_['help_open']                    = '请填写商店开放时间!';
$_['help_comment']                 = 'This field is for any special notes you would like to tell the customer i.e. Store does not accept cheques.';
$_['help_location']                = 'The different store locations you have that you want displayed on the contact us form.';
$_['help_currency']                = '修改默认货币后请 清理浏览器的缓存及cookie后重新查看!';
$_['help_tax_default']             = 'Use the store address to calculate taxes if customer is not logged in. You can choose to use the store address for the customer\'s shipping or payment address.';
$_['help_tax_customer']            = 'Use the customers default address when they login to calculate taxes. You can choose to use the default address for the customer\'s shipping or payment address.';
$_['help_customer_group']          = '默认客户组';
$_['help_customer_group_display']  = 'Display customer groups that new customers can select to use such as wholesale and business when signing up.';
$_['help_customer_price']          = '客户登录后再显示价格';
$_['help_account']                 = 'Forces people to agree to terms before an account can be created.';
$_['help_checkout_guest']          = 'Allow customers to checkout without creating an account. This will not be available when a downloadable product is in the shopping cart.';
$_['help_checkout']                = 'Forces people to agree to terms before an a customer can checkout.';
$_['help_order_status']            = 'Set the default order status when an order is processed.';
$_['help_stock_display']           = 'Display stock quantity on the product page.';
$_['help_stock_checkout']          = 'Allow customers to still checkout if the products they are ordering are not in stock.';
$_['help_icon']                    = 'icon 必须是 16x16px的PNG';
$_['help_secure']                  = 'To use SSL check with your host if a SSL certificate is installed.';

// Error
$_['error_warning']                = '警告: 请仔细检查相关错误!';
$_['error_permission']             = '警告: 没有商户修改权限!';
$_['error_url']                    = '商户地址URL不能为空!';
$_['error_meta_title']             = '标题长度 3-32 字符!';
$_['error_name']                   = '店名长度 3-32 字符!';
$_['error_owner']                  = '店主长度 3-64 字符!';
$_['error_address']                = '商户地址长度 10-256个字符!';
$_['error_email']                  = '邮箱地址无效!';
$_['error_telephone']              = '手机号码长度 3-32个字符!';
$_['error_customer_group_display'] = '在使用之前请先导入默认用户组!';
$_['error_default']                = '警告: 禁止删除默认商户!';
$_['error_store']                  = '警告: 当前商户有%s订单, 禁止删除!';