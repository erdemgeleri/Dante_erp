<?php
defined('BASEPATH') OR exit('No direct script access allowed');



// Genel
$lang['app_name']           = 'Dante ERP';
$lang['app_tagline']        = 'Business Management System';

// Kayıt / Giriş (auth.php)
$lang['title_login']        = 'Login';
$lang['title_register']     = 'Register';
$lang['label_email']        = 'Email';
$lang['label_password']     = 'Password';
$lang['label_first_name']   = 'First Name';
$lang['label_last_name']    = 'Last Name';
$lang['label_username']     = 'Username';
$lang['label_phone']        = 'Phone';
$lang['label_address']      = 'Address';
$lang['label_role']         = 'User Role';
$lang['placeholder_email']  = 'Your email address';
$lang['placeholder_password'] = 'Your password';
$lang['btn_login']          = 'Login';
$lang['btn_register']       = 'Register';
$lang['link_register']      = 'Register';
$lang['link_login']         = 'Login';
$lang['text_no_account']    = "Don't have an account?";
$lang['text_has_account']   = 'Already have an account?';
$lang['msg_invalid_credentials'] = 'Invalid email or password.';

// Header
$lang['btn_logout']         = 'Logout';
$lang['user_role_admin']    = 'Administrator';
$lang['user_role_super_admin'] = 'Super Administrator';
$lang['user_role_user']     = 'User';

// Hata mesajları
$lang['access_denied']      = 'Access denied. Insufficient permissions.';

// Dil Seçenekleri
$lang['lang_tr']            = 'Türkçe';
$lang['lang_en']            = 'English';

// SuperAdmin - Kullanıcı Yönetimi (user_list.php)
$lang['page_user_management']   = 'User Management';
$lang['nav_dashboard']          = 'Dashboard';
$lang['nav_users']              = 'Users';
$lang['nav_permissions']        = 'Permissions';
$lang['nav_settings']           = 'Settings';
$lang['stat_total_users']       = 'Total Users';
$lang['stat_registered']        = 'Registered in system';
$lang['stat_active_users']      = 'Active Users';
$lang['stat_active_30_days']    = 'Active in last 30 days';
$lang['stat_administrators']    = 'Administrators';
$lang['stat_admin_super']       = 'Admin + Super Admin';
$lang['title_user_list']        = 'User List';
$lang['desc_manage_users']      = 'Manage and control system users';
$lang['btn_new_user']           = 'New User';
$lang['th_user']                = 'User';
$lang['th_email']               = 'Email';
$lang['th_role']                = 'Role';
$lang['th_phone']               = 'Phone';
$lang['th_address']             = 'Address';
$lang['th_actions']             = 'Actions';
$lang['btn_edit']               = 'Edit';
$lang['btn_delete']             = 'Delete';
$lang['empty_no_users']         = 'No user records yet.';
$lang['pagination_total_users'] = 'Total %s Users';
$lang['modal_confirm_delete']   = 'Confirm Delete';
$lang['modal_confirm_delete_prefix'] = 'Are you sure you want to delete ';
$lang['modal_confirm_delete_suffix'] = '? This action cannot be undone.';
$lang['btn_cancel']             = 'Cancel';

// SuperAdmin - Kullanıcı Düzenle (edit_user.php)
$lang['page_edit_user']           = 'Edit User';
$lang['desc_edit_user']          = 'Update user information';
$lang['info_required_fields']    = 'Fields marked with an asterisk (<span class="required">*</span>) are required.';
$lang['section_personal']        = 'Personal Information';
$lang['section_account']         = 'Account Information';
$lang['section_role']            = 'Role and Permissions';
$lang['section_password']        = 'Change Password';
$lang['label_full_name']         = 'Full Name';
$lang['label_new_password']      = 'New Password';
$lang['placeholder_full_name']   = 'Enter full name';
$lang['placeholder_phone']        = '+1 (XXX) XXX-XXXX';
$lang['placeholder_address']     = 'Enter full address';
$lang['placeholder_username']    = 'Enter username';
$lang['placeholder_email_edit']   = 'example@example.com';
$lang['placeholder_role']        = 'Select role';
$lang['placeholder_password_optional'] = 'Leave blank if you do not want to change password';
$lang['help_full_name']          = 'User\'s full name';
$lang['help_phone']              = 'Enter a valid phone number';
$lang['help_address']            = 'Home or work address';
$lang['help_username']           = 'Username used for login';
$lang['help_email']              = 'Enter a valid email address';
$lang['help_role']               = 'Determines the user\'s role and permissions in the system';
$lang['help_password_optional']  = 'Leave this field blank if you do not want to change the password. Must be at least 6 characters if changing.';
$lang['btn_back']                = 'Back';
$lang['btn_save_changes']        = 'Save Changes';
$lang['btn_saving']              = 'Saving...';
$lang['msg_fill_required']       = 'Please fill in all required fields.';
$lang['msg_valid_email']         = 'Please enter a valid email address';
$lang['msg_password_min']       = 'Password must be at least 6 characters';

// SuperAdmin - Kullanıcı Ekle (add_user.php)
$lang['page_add_user']            = 'Add User';
$lang['title_add_user']           = 'Add New User';
$lang['desc_add_user']            = 'Create a new user account in the system';
$lang['alert_error']             = 'Error!';
$lang['alert_success']           = 'Success!';
$lang['alert_validation_error']  = 'Validation Error!';
$lang['placeholder_name']        = 'Enter first name';
$lang['placeholder_surname']     = 'Enter last name';
$lang['placeholder_email_add']   = 'example@dante.com';
$lang['placeholder_phone_add']   = '+1 555 555 5555';
$lang['placeholder_select']      = '-- Select --';
$lang['placeholder_address_short'] = 'Enter full address';
$lang['placeholder_username_add'] = 'Enter username';
$lang['placeholder_password_strong'] = 'Create a strong password';
$lang['placeholder_password_confirm'] = 'Re-enter password';
$lang['help_min_2_chars']        = 'At least 2 characters';
$lang['help_role_select']        = 'Select the user\'s system role';
$lang['help_address_max']        = 'Home or work address (max 200 characters)';
$lang['help_username_range']     = 'Must be between 4-50 characters';
$lang['help_password_match']     = 'Verify that passwords match';
$lang['label_password_confirm']  = 'Confirm Password';
$lang['password_requirements']   = 'Password Requirements:';
$lang['password_req_min']        = 'Minimum 6 characters';
$lang['password_req_mixed']      = 'Uppercase, lowercase and numbers recommended';
$lang['password_req_special']    = 'Special characters (@, #, $, %) make it more secure';
$lang['btn_add_user']            = 'Add User';
$lang['msg_password_mismatch']   = 'Passwords do not match!';

// Auth kayıt formu 
$lang['placeholder_first_name']  = 'First name';
$lang['placeholder_last_name']   = 'Last name';
$lang['placeholder_username_short'] = 'Username';
$lang['placeholder_email_reg']   = 'example@student.edu';
$lang['placeholder_phone_reg']   = '+1 555 555 5555';
$lang['placeholder_address_reg'] = 'Your address';
$lang['placeholder_password_min'] = 'Password (min. 6 characters)';
$lang['hint_username_3_20']      = '3-20 characters';

// Anasayfa - Dashboard (dashboard/index.php)
$lang['page_dashboard']           = 'Dashboard';
$lang['nav_home']                 = 'Home';
$lang['nav_projects']             = 'Projects';
$lang['nav_reports']              = 'Reports';
$lang['nav_messages']             = 'Messages';
$lang['welcome_title']            = 'Welcome! 👋';
$lang['welcome_desc']             = 'View and manage your system status.';
$lang['stat_active_ops']          = 'Active Operations';
$lang['stat_this_month']          = 'This Month';
$lang['stat_completed']           = 'Completed';
$lang['stat_avg_score']           = 'Average Score';
$lang['stat_new']                 = '↑ 1 new';
$lang['stat_increase']            = '↑ 24% increase';
$lang['stat_pending_count']       = '2 pending';
$lang['stat_great']               = '⭐ Great';
$lang['card_recent_ops']          = 'Recent Operations';
$lang['card_recent_activities']   = 'Recent Activities';
$lang['status_active']            = 'Active';
$lang['status_pending']           = 'Pending';
$lang['status_completed']         = 'Completed';
$lang['btn_all_ops']              = 'All Operations';
$lang['earnings_total']            = 'Total Earnings';
$lang['earnings_paid']             = 'Paid:';
$lang['earnings_pending']         = 'Pending:';
$lang['btn_details']              = 'Details';
$lang['activity_completed']       = 'Operation Completed';
$lang['activity_new_message']     = 'New Message';
$lang['activity_5_stars']         = '5 Stars';
$lang['activity_payment']         = 'Payment Made';
$lang['time_2h_ago']              = '2 hours ago';
$lang['time_4h_ago']              = '4 hours ago';
$lang['time_1d_ago']              = '1 day ago';
$lang['time_3d_ago']              = '3 days ago';

// SuperAdmin - Anasayfa (superadmin/dashboard.php)
$lang['page_superadmin_dashboard']   = 'Super Admin Dashboard';
$lang['sa_welcome_title']            = 'Welcome';
$lang['sa_welcome_desc']             = 'ERP Management System - System Administrator Panel';
$lang['sa_stat_user']                = 'Users';
$lang['sa_stat_health']              = 'System Health';
$lang['sa_stat_modules']             = 'Modules';
$lang['sa_section_tools']             = 'Management Tools';
$lang['sa_module_users']             = 'Users';
$lang['sa_module_users_desc']         = 'Manage user accounts';
$lang['sa_module_permissions']       = 'Permissions';
$lang['sa_module_permissions_desc']  = 'Roles and authorization';
$lang['sa_module_config']            = 'Configuration';
$lang['sa_module_config_desc']       = 'System settings and parameters';
$lang['sa_module_logs']              = 'Logs';
$lang['sa_module_logs_desc']         = 'System and user logs';
$lang['sa_module_notifications']     = 'Notifications';
$lang['sa_module_notifications_desc']= 'Email and system notifications';
$lang['sa_module_transfer']          = 'Data Transfer';
$lang['sa_module_transfer_desc']     = 'Manage import and export';
$lang['sa_module_integrations']      = 'Integrations';
$lang['sa_module_integrations_desc'] = 'External system connections';
$lang['sa_module_maintenance']       = 'Maintenance';
$lang['sa_module_maintenance_desc']  = 'System maintenance and optimization';
$lang['sa_section_status']           = 'System Status';
$lang['sa_server_status']            = 'Server Status';
$lang['sa_db_status']                = 'Database';
$lang['sa_healthy']                  = 'Healthy';
$lang['sa_badge_running']            = 'RUNNING';
$lang['sa_cpu_usage']                = 'CPU Usage';
$lang['sa_memory']                   = 'Memory';
$lang['sa_disk_space']               = 'Disk Space';
$lang['sa_connections']              = 'Connections';
$lang['sa_size']                     = 'Size';
$lang['sa_last_backup']              = 'Last Backup';
$lang['sa_btn_refresh']              = 'Refresh';
$lang['sa_btn_settings']             = 'Settings';
$lang['sa_btn_backup']               = 'Backup';
$lang['sa_btn_test']                 = 'Test';
$lang['sa_section_activities']       = 'Recent Activities';
$lang['sa_time_2m_ago']              = '2 minutes ago';
$lang['sa_time_14m_ago']             = '14 minutes ago';
$lang['sa_time_28m_ago']             = '28 minutes ago';
$lang['sa_time_1h_ago']              = '1 hour ago';
$lang['sa_time_3h_ago']              = '3 hours ago';
$lang['sa_activity_login']            = 'User - Logged In';
$lang['sa_activity_backup']           = 'System Backup Completed';
$lang['sa_activity_hr_used']         = 'User - HR Module Used';
$lang['sa_activity_update']          = 'System Update Applied v2.14.5';
$lang['sa_activity_user_added']      = 'New User Added: Merve Kaya';

// Admin - Anasayfa (admin/dashboard.php)
$lang['ad_admin_dashboard']           = 'Admin Dashboard';
$lang['ad_manage_business']           = 'Manage your business';
$lang['ad_welcome_back']              = 'Welcome back, %s!';
$lang['ad_ready_to_manage']           = 'You are ready to manage your business.';
$lang['ad_stat_customers']            = 'Customers';
$lang['ad_stat_ongoing_jobs']         = 'Ongoing Jobs';
$lang['ad_stat_employees']            = 'Employees';
$lang['ad_stat_contracts']            = 'Active Contracts';
$lang['ad_customers']                 = 'Customers';
$lang['ad_manage_customers']          = 'Manage customer records';
$lang['ad_jobs']                      = 'Jobs';
$lang['ad_manage_jobs']               = 'Manage job listings';
$lang['ad_contracts']                 = 'Contracts';
$lang['ad_manage_contracts']          = 'Manage contracts';
$lang['ad_employees']                 = 'Employees';
$lang['ad_manage_employees']          = 'Manage employee records';
$lang['ad_projects']                  = 'Projects';
$lang['ad_manage_projects']           = 'Manage projects';
$lang['ad_reports']                   = 'Reports';
$lang['ad_view_reports']              = 'View reports';
$lang['ad_analytics']                 = 'Analytics';
$lang['ad_finance']                   = 'Finance';
$lang['ad_manage_payments']           = 'Manage payments';
$lang['ad_accounting']               = 'Accounting';
$lang['ad_settings']                  = 'Settings';
$lang['ad_configure_system']          = 'Configure system';
$lang['ad_preferences']               = 'Preferences';
$lang['ad_total']                     = 'Total';
$lang['ad_active']                    = 'Active';
$lang['ad_quick_actions']             = 'Quick Actions';
$lang['ad_add_customer']              = 'Add Customer';
$lang['ad_new_job']                   = 'New Job';
$lang['ad_new_contract']              = 'New Contract';
$lang['ad_add_employee']              = 'Add Employee';
$lang['ad_new_project']               = 'New Project';
$lang['ad_export_data']               = 'Export Data';
