<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Miền Active Directory',
    'ad_domain_help'			=> 'Đôi khi giống như tên miền email của bạn, nhưng không phải luôn luôn.',
    'admin_cc_email'            => 'CC Email',
    'admin_cc_email_help'       => 'If you would like to send a copy of checkin/checkout emails that are sent to users to an additional email account, enter it here. Otherwise leave this field blank.',
    'is_ad'				        => 'Đây là một máy chủ Active Directory',
	'alert_email'				=> 'Gửi cảnh báo đến',
	'alerts_enabled'			=> 'Bật Cảnh báo',
	'alert_interval'			=> 'Ngưỡng Cảnh báo Hết hạn (theo ngày)',
	'alert_inv_threshold'		=> 'Ngưỡng thông báo khoảng không quảng cáo',
	'asset_ids'					=> 'ID tài sản',
	'audit_interval'            => 'Khoảng Kiểm toán',
    'audit_interval_help'       => 'Nếu bạn được yêu cầu kiểm tra thường xuyên tài sản của mình, hãy nhập khoảng thời gian trong nhiều tháng.',
	'audit_warning_days'        => 'Ngưỡng cảnh báo kiểm tra',
    'audit_warning_days_help'   => 'Bao nhiêu ngày trước chúng tôi nên cảnh báo bạn khi tài sản đến hạn kiểm toán?',
	'auto_increment_assets'		=> 'Tạo ID tài sản tự động tăng',
	'auto_increment_prefix'		=> 'Tiền tố (tùy chọn)',
	'auto_incrementing_help'    => 'Cho phép ID tài sản tự động tăng đầu tiên được đặt cho nó',
	'backups'					=> 'Sao lưu',
	'barcode_settings'			=> 'Cài đặt mã vạch',
    'confirm_purge'			    => 'Xác nhận Xóa',
    'confirm_purge_help'		=> 'Nhập văn bản "DELETE" vào hộp dưới đây để xóa các bản ghi đã xóa của bạn. Hành động này không thể được hoàn tác.',
	'custom_css'				=> 'CSS tùy chỉnh',
	'custom_css_help'			=> 'Nhập bất kỳ CSS tùy chỉnh. Không bao gồm thẻ &lt;style&gt;&lt;/style&gt.',
    'custom_forgot_pass_url'	=> 'Custom Password Reset URL',
    'custom_forgot_pass_url_help'	=> 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'dashboard_message'			=> 'Dashboard Message',
    'dashboard_message_help'	=> 'This text will appear on the dashboard for anyone with permission to view the dashboard.',
	'default_currency'  		=> 'Tiền tệ mặc định',
	'default_eula_text'			=> 'EULA mặc định',
  'default_language'			=> 'Ngôn ngữ mặc định',
	'default_eula_help_text'	=> 'Bạn cũng có thể liên kế EULA tùy chỉnh đến danh mục tài sản riêng biệt.',
    'display_asset_name'        => 'Hiển thị tên tài sản',
    'display_checkout_date'     => 'Hiển thị ngày checkout',
    'display_eol'               => 'Hiển thị EOL ở bảng',
    'display_qr'                => 'Mã quảng cáo hiển thị',
	'display_alt_barcode'		=> 'Hiển thị mã vạch 1D',
	'barcode_type'				=> 'Loại mã vạch 2D',
	'alt_barcode_type'			=> 'Loại mã vạch 1D',
    'eula_settings'				=> 'Cài đặt EULA',
    'eula_markdown'				=> 'Đây là EULA cho phép <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'footer_text'               => 'Additional Footer Text ',
    'footer_text_help'          => 'This text will appear in the right-side footer. Links are allowed using <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Line breaks, headers, images, etc may result in unpredictable results.',
    'general_settings'			=> 'Cài đặt thường',
	'generate_backup'			=> 'Tạo Sao lưu',
    'header_color'              => 'Màu Header',
    'info'                      => 'Các thiết lập này cho phép bạn tùy chỉnh một số khía cạnh của quá trình cài đặt.',
    'laravel'                   => 'Phiên bản Laravel',
    'ldap_enabled'              => 'Bật LDAP',
    'ldap_integration'          => 'Tích hợp LDAP',
    'ldap_settings'             => 'Cài đặt LDAP',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_server'               => 'Máy chủ LDAP',
    'ldap_server_help'          => 'Điều này sẽ bắt đầu với ldap: // (cho không mã hóa hoặc TLS) hoặc ldaps: // (cho SSL)',
	'ldap_server_cert'			=> 'Xác thực giấy chứng nhận LDAP SSL',
	'ldap_server_cert_ignore'	=> 'Cho phép Chứng chỉ SSL không hợp lệ',
	'ldap_server_cert_help'		=> 'Chọn hộp kiểm này nếu bạn đang sử dụng chứng chỉ SSL ký tự và muốn chấp nhận chứng chỉ SSL không hợp lệ.',
    'ldap_tls'                  => 'Sử dụng TLS',
    'ldap_tls_help'             => 'Điều này chỉ nên được kiểm tra nếu bạn đang chạy STARTTLS trên máy chủ LDAP của mình.',
    'ldap_uname'                => 'LDAP Bind Username',
    'ldap_pword'                => 'LDAP Bind Password',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'Bộ lọc LDAP',
    'ldap_pw_sync'              => 'Đồng bộ hóa mật khẩu LDAP',
    'ldap_pw_sync_help'         => 'Bỏ chọn hộp này nếu bạn không muốn giữ mật khẩu LDAP được đồng bộ với mật khẩu cục bộ. Tắt tính năng này có nghĩa là người dùng của bạn không thể đăng nhập nếu máy chủ LDAP của bạn không thể truy cập được vì một số lý do.',
    'ldap_username_field'       => 'Trường tên người dùng',
    'ldap_lname_field'          => 'Họ',
    'ldap_fname_field'          => 'Tên LDAP',
    'ldap_auth_filter_query'    => 'Truy vấn xác thực LDAP',
    'ldap_version'              => 'Phiên bản LDAP',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_emp_num'              => 'Số nhân viên LDAP',
    'ldap_email'                => 'Email LDAP',
    'license'                  => 'Software License',
    'load_remote_text'          => 'Remote Scripts',
    'load_remote_help_text'		=> 'Cài đặt Snipe-IT này có thể tải các tập lệnh từ thế giới bên ngoài.',
    'login_note'                => 'Lưu ý đăng nhập',
    'login_note_help'           => 'Tùy chọn bao gồm một vài câu trên màn hình đăng nhập của bạn, ví dụ để hỗ trợ những người đã tìm thấy thiết bị bị mất hoặc bị đánh cắp. Trường này chấp nhận <a href="https://help.github.com/articles/github-flavored-markdown/">Bài nhãn hiệu có hương vị cố định</a>',
    'login_remote_user_text'    => 'Remote User login options',
    'login_remote_user_enabled_text' => 'Enable Login with Remote User Header',
    'login_remote_user_enabled_help' => 'This option enables Authentication via the REMOTE_USER header according to the "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Disable other authentication mechanisms',
    'login_common_disabled_help' => 'This option disables other authentication mechanisms. Just enable this option if you are sure that your REMOTE_USER login is already working',
    'login_remote_user_custom_logout_url_text' => 'Custom logout URL',
    'login_remote_user_custom_logout_url_help' => 'If a url is provided here, users will get redirected to this URL after the user logs out of Snipe-IT. This is useful to close the user sessions of your Authentication provider correctly.',
    'logo'                    	=> 'Logo',
    'full_multiple_companies_support_help_text' => 'Hạn chế người dùng (kể cả quản trị viên) được giao cho các công ty vào tài sản của công ty họ.',
    'full_multiple_companies_support_text' => 'Hỗ trợ nhiều công ty',
    'show_in_model_list'   => 'Show in Model Dropdowns',
    'optional'					=> 'tùy ý',
    'per_page'                  => 'Kết quả trên trang',
    'php'                       => 'Phiên bản PHP',
    'php_gd_info'               => 'Bạn phải cài đặt php-gd để hiển thị QR codes, xem cấu trúc cài đặt.',
    'php_gd_warning'            => 'PHP Image Processing và GD plugin thì CHƯA cài đặt.',
    'pwd_secure_complexity'     => 'Mật khẩu phức tạp',
    'pwd_secure_complexity_help' => 'Chọn bất kỳ quy tắc phức tạp về mật khẩu nào bạn muốn thực thi.',
    'pwd_secure_min'            => 'Ký tự tối thiểu mật khẩu',
    'pwd_secure_min_help'       => 'Giá trị cho phép tối thiểu là 5',
    'pwd_secure_uncommon'       => 'Ngăn chặn mật khẩu thông thường',
    'pwd_secure_uncommon_help'  => 'Điều này sẽ không cho phép người dùng sử dụng mật khẩu thông thường từ 10.000 mật khẩu hàng đầu được báo cáo là vi phạm.',
    'qr_help'                   => 'Bật QR Code đầu tiên để gán cho nó',
    'qr_text'                   => 'Chuỗi QR Code',
    'setting'                   => 'Cài đặt',
    'settings'                  => 'Cài đặt',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Archived Assets',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'show_images_in_email'     => 'Show images in emails',
    'show_images_in_email_help'   => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name'                 => 'Tên trang web',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Cài đặt Slack',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new">create an incoming webhook</a> on your Slack account.',
    'slack_integration_help_button'    => 'Once you have saved your Slack information, a test button will appear.',
    'slack_test_help'           => 'Test whether your Slack integration is configured correctly. YOU MUST SAVE YOUR UPDATED SLACK SETTINGS FIRST.',
    'snipe_version'  			=> 'Phiên bản Snipe-IT',
    'support_footer'            => 'Support Footer Links ',
    'support_footer_help'       => 'Specify who sees the links to the Snipe-IT Support info and Users Manual.',
    'version_footer'            => 'Version in Footer ',
    'version_footer_help'       => 'Specify who sees the Snipe-IT version and build number.',
    'system'                    => 'Thông tin hệ thống',
    'update'                    => 'Cập nhật cài đặt',
    'value'                     => 'Giá trị',
    'brand'                     => 'Xây dựng thương hiệu',
    'about_settings_title'      => 'Giới thiệu Cài đặt',
    'about_settings_text'       => 'Các cài đặt này cho phép bạn tuỳ chỉnh các khía cạnh nhất định trong quá trình cài đặt của bạn.',
    'labels_per_page'           => 'Nhãn trên mỗi trang',
    'label_dimensions'          => 'Kích thước nhãn (inch)',
    'next_auto_tag_base'        => 'Tiếp theo tự động tăng',
    'page_padding'              => 'Lề trang (inch)',
    'privacy_policy_link'       => 'Link to Privacy Policy',
    'privacy_policy'            => 'Privacy Policy',
    'privacy_policy_link_help'  => 'If a url is included here, a link to your privacy policy will be included in the app footer and in any emails that the system sends out, in compliance with GDPR. ',
    'purge'                     => 'Xóa các bản ghi đã xóa',
    'labels_display_bgutter'    => 'Nhãn máng đáy',
    'labels_display_sgutter'    => 'Nhãn máng xối',
    'labels_fontsize'           => 'Kích thước phông chữ nhãn',
    'labels_pagewidth'          => 'Chiều rộng nhãn nhãn',
    'labels_pageheight'         => 'Chiều cao tấm nhãn',
    'label_gutters'        => 'Khoảng cách nhãn (inch)',
    'page_dimensions'        => 'Kích thước trang (inch)',
    'label_fields'          => 'Gắn nhãn các lĩnh vực hiển thị',
    'inches'        => 'inch',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Liên kết đến Snipe-IT trong email',
    'show_url_in_emails_help_text'      => 'Bỏ chọn hộp này nếu bạn không muốn liên kết lại với cài đặt Snipe-IT của mình trong phần chân trang email. Có ích nếu hầu hết người dùng của bạn không đăng nhập.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Chiều cao thu nhỏ tối đa',
    'thumbnail_max_h_help'   => 'Chiều cao tối đa bằng pixel mà hình thu nhỏ có thể hiển thị trong chế độ xem danh sách. Tối thiểu 25, tối đa 500.',
    'two_factor'        => 'Xác thực hai nhân tố',
    'two_factor_secret'        => 'Mã số hai nhân tố',
    'two_factor_enrollment'        => 'Đăng ký Hai nhân tố',
    'two_factor_enabled_text'        => 'Kích hoạt hai yếu tố',
    'two_factor_reset'        => 'Đặt lại Hai yếu tố bí mật',
    'two_factor_reset_help'        => 'Thao tác này sẽ bắt buộc người dùng đăng ký lại thiết bị của họ bằng Google Authenticator. Điều này có thể hữu ích nếu thiết bị đang học của họ bị mất hoặc bị đánh cắp.',
    'two_factor_reset_success'          => 'Thiết lập thành công hai yếu tố',
    'two_factor_reset_error'          => 'Thiết lập lại thiết bị hai yếu tố không thành công',
    'two_factor_enabled_warning'        => 'Bật hai yếu tố nếu hiện tại không được bật sẽ buộc bạn phải xác thực ngay lập tức bằng thiết bị được đăng ký Google Auth. Bạn sẽ có khả năng đăng ký thiết bị của bạn nếu một trong số đó hiện không đăng ký.',
    'two_factor_enabled_help'        => 'Điều này sẽ bật xác thực hai yếu tố bằng Google Authenticator.',
    'two_factor_optional'        => 'Chọn lọc (Người dùng có thể bật hoặc tắt nếu được phép)',
    'two_factor_required'        => 'Bắt buộc cho tất cả người dùng',
    'two_factor_disabled'        => 'Tàn tật',
    'two_factor_enter_code'	=> 'Nhập mã số hai nhân tố',
    'two_factor_config_complete'	=> 'Gửi Mã',
    'two_factor_enabled_edit_not_allowed' => 'Quản trị viên của bạn không cho phép bạn chỉnh sửa cài đặt này.',
    'two_factor_enrollment_text'	=> "Yêu cầu xác thực hai yếu tố, tuy nhiên thiết bị của bạn chưa được đăng ký. Mở ứng dụng Google Authenticator của bạn và quét mã QR dưới đây để đăng ký thiết bị của bạn. Khi bạn đã đăng ký thiết bị của mình, hãy nhập mã dưới đây",
    'require_accept_signature'      => 'Yêu cầu Chữ ký',
    'require_accept_signature_help_text'      => 'Bật tính năng này sẽ yêu cầu người dùng đăng ký về việc chấp nhận nội dung.',
    'left'        => 'trái',
    'right'        => 'đúng',
    'top'        => 'hàng đầu',
    'bottom'        => 'đáy',
    'vertical'        => 'theo chiều dọc',
    'horizontal'        => 'ngang',
    'unique_serial'                => 'Unique serial numbers',
    'unique_serial_help_text'                => 'Checking this box will enforce a uniqueness constraint on asset serials',
    'zerofill_count'        => 'Chiều dài của các thẻ thuộc tính, bao gồm zerofill',
);
