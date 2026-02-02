<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$lang['app_name']           = 'Dante ERP';
$lang['app_tagline']        = 'İşletme Yönetim Sistemi';

// Auth - Giriş / Kayıt
$lang['title_login']        = 'Giriş Yap';
$lang['title_register']     = 'Kayıt Ol';
$lang['label_email']        = 'Email';
$lang['label_password']     = 'Şifre';
$lang['label_first_name']   = 'Ad';
$lang['label_last_name']    = 'Soyad';
$lang['label_username']     = 'Kullanıcı Adı';
$lang['label_phone']        = 'Telefon';
$lang['label_address']      = 'Adres';
$lang['label_role']         = 'Kullanıcı Rolü';
$lang['placeholder_email'] = 'E-posta adresiniz';
$lang['placeholder_password'] = 'Şifreniz';
$lang['btn_login']          = 'Giriş Yap';
$lang['btn_register']       = 'Kayıt Ol';
$lang['link_register']      = 'Kayıt olun';
$lang['link_login']         = 'Giriş yapın';
$lang['text_no_account']    = 'Hesabınız yok mu?';
$lang['text_has_account']   = 'Zaten hesabınız var mı?';
$lang['msg_invalid_credentials'] = 'Geçersiz email veya şifre.';

// Header / Ortak
$lang['btn_logout']         = 'Çıkış Yap';
$lang['user_role_admin']    = 'Yönetici';
$lang['user_role_super_admin'] = 'Süper Yönetici';
$lang['user_role_user']     = 'Kullanıcı';

// Erişim
$lang['access_denied']      = 'Erişim reddedildi. Yetersiz yetki.';

// Dil seçici
$lang['lang_tr']            = 'Türkçe';
$lang['lang_en']            = 'English';

// SuperAdmin - Kullanıcı Yönetimi (users.php)
$lang['page_user_management']   = 'Kullanıcı Yönetimi';
$lang['nav_dashboard']          = 'Dashboard';
$lang['nav_users']              = 'Kullanıcılar';
$lang['nav_permissions']        = 'İzinler';
$lang['nav_settings']           = 'Ayarlar';
$lang['stat_total_users']       = 'Toplam Kullanıcılar';
$lang['stat_registered']        = 'Sistem içinde kayıtlı';
$lang['stat_active_users']      = 'Aktif Kullanıcılar';
$lang['stat_active_30_days']    = 'Son 30 gün içinde aktif';
$lang['stat_administrators']    = 'Yöneticiler';
$lang['stat_admin_super']       = 'Admin + Super Admin';
$lang['title_user_list']        = 'Kullanıcı Listesi';
$lang['desc_manage_users']      = 'Sistem kullanıcılarını yönetin ve kontrol edin';
$lang['btn_new_user']           = 'Yeni Kullanıcı';
$lang['th_user']                = 'Kullanıcı';
$lang['th_email']               = 'E-posta';
$lang['th_role']                = 'Rol';
$lang['th_phone']               = 'Telefon';
$lang['th_address']             = 'Adres';
$lang['th_actions']             = 'İşlemler';
$lang['btn_edit']               = 'Düzenle';
$lang['btn_delete']             = 'Sil';
$lang['empty_no_users']         = 'Henüz kullanıcı kaydı bulunmamaktadır.';
$lang['pagination_total_users'] = 'Toplam %s Kullanıcı';
$lang['modal_confirm_delete']   = 'Silmeyi Onaylayın';
$lang['modal_confirm_delete_prefix'] = '';
$lang['modal_confirm_delete_suffix'] = ' kullanıcısını silmek istediğinizden emin misiniz? Bu işlem geri alınamaz.';
$lang['btn_cancel']             = 'İptal';

// SuperAdmin - Kullanıcı Düzenle (edit_user.php)
$lang['page_edit_user']           = 'Kullanıcı Düzenle';
$lang['desc_edit_user']          = 'Kullanıcı bilgilerini güncelleyin';
$lang['info_required_fields']    = 'Yıldız (<span class="required">*</span>) ile işaretlenen alanlar zorunludur.';
$lang['section_personal']        = 'Kişisel Bilgiler';
$lang['section_account']         = 'Hesap Bilgileri';
$lang['section_role']            = 'Rol ve İzinler';
$lang['section_password']        = 'Şifre Değiştir';
$lang['label_full_name']         = 'Tam Ad';
$lang['label_new_password']      = 'Yeni Şifre';
$lang['placeholder_full_name']   = 'Tam adı giriniz';
$lang['placeholder_phone']        = '+90 (XXX) XXX XX XX';
$lang['placeholder_address']     = 'Tam adres giriniz';
$lang['placeholder_username']    = 'Kullanıcı adı giriniz';
$lang['placeholder_email_edit']   = 'ornek@example.com';
$lang['placeholder_role']        = 'Rol seçiniz';
$lang['placeholder_password_optional'] = 'Şifreyi değiştirmek istemiyorsanız boş bırakın';
$lang['help_full_name']          = 'Kullanıcının tam adı';
$lang['help_phone']              = 'Geçerli bir telefon numarası giriniz';
$lang['help_address']            = 'Ev veya iş adresi';
$lang['help_username']           = 'Oturum açma için kullanılan adı';
$lang['help_email']              = 'Geçerli bir e-posta adresi giriniz';
$lang['help_role']               = 'Kullanıcının sistem içinde sahip olacağı rol ve yetkileri belirler';
$lang['help_password_optional']  = 'Şifreyi değiştirmek istemiyorsanız bu alanı boş bırakın. Değiştirmek istiyorsanız en az 6 karakter olmalıdır.';
$lang['btn_back']                = 'Geri Dön';
$lang['btn_save_changes']        = 'Değişiklikleri Kaydet';
$lang['btn_saving']              = 'Kaydediliyor...';
$lang['msg_fill_required']       = 'Lütfen tüm zorunlu alanları doldurunuz.';
$lang['msg_valid_email']         = 'Geçerli bir e-posta adresi giriniz';
$lang['msg_password_min']       = 'Şifre en az 6 karakter olmalıdır';

// SuperAdmin - Kullanıcı Ekle (add_user.php)
$lang['page_add_user']            = 'Kullanıcı Ekle';
$lang['title_add_user']           = 'Yeni Kullanıcı Ekle';
$lang['desc_add_user']            = 'Sisteme yeni bir kullanıcı hesabı oluşturun';
$lang['alert_error']             = 'Hata!';
$lang['alert_success']           = 'Başarılı!';
$lang['alert_validation_error']  = 'Doğrulama Hatası!';
$lang['placeholder_name']        = 'Adı girin';
$lang['placeholder_surname']     = 'Soyadı girin';
$lang['placeholder_email_add']   = 'ornek@dante.com';
$lang['placeholder_phone_add']   = '+90 555 555 5555';
$lang['placeholder_select']      = '-- Seçin --';
$lang['placeholder_address_short']= 'Tam adres girin';
$lang['placeholder_username_add'] = 'Kullanıcı adı girin';
$lang['placeholder_password_strong'] = 'Güçlü bir şifre oluşturun';
$lang['placeholder_password_confirm'] = 'Şifreyi tekrar girin';
$lang['help_min_2_chars']        = 'En az 2 karakter';
$lang['help_role_select']        = 'Kullanıcının sistem rolünü seçin';
$lang['help_address_max']        = 'Ev veya iş adresi (en fazla 200 karakter)';
$lang['help_username_range']      = '4-50 karakter arasında olmalıdır';
$lang['help_password_match']     = 'Şifrelerin eşleştiğini kontrol edin';
$lang['label_password_confirm']   = 'Şifre Tekrarı';
$lang['password_requirements']   = 'Şifre Gereksinimleri:';
$lang['password_req_min']        = 'Minimum 6 karakter';
$lang['password_req_mixed']      = 'Büyük harf, küçük harf ve rakam içermesi önerilir';
$lang['password_req_special']    = 'Özel karakter (@, #, $, %) içermesi daha güvenli olur';
$lang['btn_add_user']            = 'Kullanıcı Ekle';
$lang['msg_password_mismatch']   = 'Şifreler eşleşmiyor!';

// Auth - Kayıt sayfası (register.php)
$lang['placeholder_first_name']  = 'Ad';
$lang['placeholder_last_name']   = 'Soyad';
$lang['placeholder_username_short'] = 'Kullanıcı adı';
$lang['placeholder_email_reg']   = 'ornek@ogrenci.edu.tr';
$lang['placeholder_phone_reg']   = '+90 555 555 5555';
$lang['placeholder_address_reg']  = 'Adresiniz';
$lang['placeholder_password_min'] = 'Şifre (min. 6 karakter)';
$lang['hint_username_3_20']      = '3-20 karakter';

// Dashboard (dashboard/index.php)
$lang['page_dashboard']           = 'Dashboard';
$lang['nav_home']                 = 'Anasayfa';
$lang['nav_projects']             = 'Projeler';
$lang['nav_reports']              = 'Raporlar';
$lang['nav_messages']             = 'Mesajlar';
$lang['welcome_title']            = 'Hoşgeldiniz! 👋';
$lang['welcome_desc']            = 'Sisteminizin güncel durumunu görüntüleyin ve yönetin.';
$lang['stat_active_ops']         = 'Aktif İşlemler';
$lang['stat_this_month']         = 'Bu Ay';
$lang['stat_completed']           = 'Tamamlanan';
$lang['stat_avg_score']           = 'Ortalama Puan';
$lang['stat_new']                 = '↑ 1 yeni';
$lang['stat_increase']            = '↑ %24 artış';
$lang['stat_pending_count']       = '2 beklemede';
$lang['stat_great']               = '⭐ Harika';
$lang['card_recent_ops']          = 'Son İşlemler';
$lang['card_recent_activities']   = 'Son Aktiviteler';
$lang['status_active']            = 'Aktif';
$lang['status_pending']            = 'Beklemede';
$lang['status_completed']         = 'Tamamlandı';
$lang['btn_all_ops']              = 'Tüm İşlemler';
$lang['earnings_total']            = 'Toplam Kazanç';
$lang['earnings_paid']             = 'Ödenen:';
$lang['earnings_pending']         = 'Beklenmede:';
$lang['btn_details']              = 'Detaylar';
$lang['activity_completed']       = 'İşlem Tamamlandı';
$lang['activity_new_message']     = 'Yeni Mesaj';
$lang['activity_5_stars']         = '5 Yıldız';
$lang['activity_payment']         = 'Ödeme Yapıldı';
$lang['time_2h_ago']              = '2 saat önce';
$lang['time_4h_ago']              = '4 saat önce';
$lang['time_1d_ago']              = '1 gün önce';
$lang['time_3d_ago']              = '3 gün önce';

// SuperAdmin - Dashboard (superadmin/dashboard.php)
$lang['page_superadmin_dashboard']   = 'Super Admin Dashboard';
$lang['sa_welcome_title']            = 'Hoş Geldiniz';
$lang['sa_welcome_desc']             = 'ERP Yönetim Sistemi - Sistem Yöneticisi Paneli';
$lang['sa_stat_user']                = 'Kullanıcı';
$lang['sa_stat_health']              = 'Sistem Sağlığı';
$lang['sa_stat_modules']             = 'Modüller';
$lang['sa_section_tools']             = 'Yönetim Araçları';
$lang['sa_module_users']             = 'Kullanıcılar';
$lang['sa_module_users_desc']         = 'Kullanıcı hesaplarını yönet';
$lang['sa_module_permissions']       = 'İzinler';
$lang['sa_module_permissions_desc']  = 'Rol ve yetkilendirme';
$lang['sa_module_config']            = 'Konfigürasyon';
$lang['sa_module_config_desc']       = 'Sistem ayarları ve parametreler';
$lang['sa_module_logs']              = 'Kayıtlar';
$lang['sa_module_logs_desc']         = 'Sistem ve kullanıcı logları';
$lang['sa_module_notifications']     = 'Bildirimler';
$lang['sa_module_notifications_desc']= 'E-posta ve sistem bildirimleri';
$lang['sa_module_transfer']          = 'Veri Transfer';
$lang['sa_module_transfer_desc']     = 'İthalatı ve ihraçatı yönet';
$lang['sa_module_integrations']      = 'Entegrasyonlar';
$lang['sa_module_integrations_desc'] = 'Dış sistem bağlantıları';
$lang['sa_module_maintenance']       = 'Bakım';
$lang['sa_module_maintenance_desc']  = 'Sistem bakım ve optimizasyon';
$lang['sa_section_status']           = 'Sistem Durumu';
$lang['sa_server_status']            = 'Sunucu Durumu';
$lang['sa_db_status']                 = 'Database';
$lang['sa_healthy']                  = 'Sağlıklı';
$lang['sa_badge_running']            = 'ÇALIŞAN';
$lang['sa_cpu_usage']                = 'CPU Kullanımı';
$lang['sa_memory']                   = 'Bellek';
$lang['sa_disk_space']               = 'Disk Alanı';
$lang['sa_connections']              = 'Bağlantılar';
$lang['sa_size']                     = 'Boyut';
$lang['sa_last_backup']              = 'Son Yedek';
$lang['sa_btn_refresh']              = 'Yenile';
$lang['sa_btn_settings']             = 'Ayarlar';
$lang['sa_btn_backup']               = 'Yedek Al';
$lang['sa_btn_test']                 = 'Test Et';
$lang['sa_section_activities']       = 'Son Aktiviteler';
$lang['sa_time_2m_ago']               = '2 dakika önce';
$lang['sa_time_14m_ago']             = '14 dakika önce';
$lang['sa_time_28m_ago']             = '28 dakika önce';
$lang['sa_time_1h_ago']              = '1 saat önce';
$lang['sa_time_3h_ago']              = '3 saat önce';
$lang['sa_activity_login']            = 'Cüneyt Yılmaz - Giriş Yaptı';
$lang['sa_activity_backup']           = 'Sistem Yedeklemesi Tamamlandı';
$lang['sa_activity_hr_used']          = 'Fatih Demirel - HR Modülü Kullandı';
$lang['sa_activity_update']           = 'Sistem Güncellemesi Uygulandı v2.14.5';
$lang['sa_activity_user_added']       = 'Yeni Kullanıcı Eklendi: Merve Kaya';

// Admin - Dashboard (admin/dashboard.php)
$lang['ad_admin_dashboard']           = 'Admin Dashboard';
$lang['ad_manage_business']           = 'İşletmenizi yönetin';
$lang['ad_welcome_back']              = 'Tekrar hoş geldiniz, %s!';
$lang['ad_ready_to_manage']          = 'İşletmenizi yönetmeye hazırsınız.';
$lang['ad_stat_customers']            = 'Müşteri';
$lang['ad_stat_ongoing_jobs']         = 'Devam Eden İş';
$lang['ad_stat_employees']            = 'Çalışan';
$lang['ad_stat_contracts']            = 'Aktif Kontrat';
$lang['ad_customers']                 = 'Müşteriler';
$lang['ad_manage_customers']          = 'Müşteri kayıtlarını yönetin';
$lang['ad_jobs']                      = 'İşler';
$lang['ad_manage_jobs']               = 'İş ilanlarını yönetin';
$lang['ad_contracts']                 = 'Kontratlar';
$lang['ad_manage_contracts']          = 'Sözleşmeleri yönetin';
$lang['ad_employees']                 = 'Çalışanlar';
$lang['ad_manage_employees']          = 'Çalışan kayıtlarını yönetin';
$lang['ad_projects']                  = 'Projeler';
$lang['ad_manage_projects']           = 'Projeleri yönetin';
$lang['ad_reports']                   = 'Raporlar';
$lang['ad_view_reports']              = 'Raporları görüntüleyin';
$lang['ad_analytics']                 = 'Analitik';
$lang['ad_finance']                   = 'Finansal';
$lang['ad_manage_payments']           = 'Ödemeleri yönetin';
$lang['ad_accounting']                = 'Muhasebe';
$lang['ad_settings']                  = 'Ayarlar';
$lang['ad_configure_system']          = 'Sistem yapılandırması';
$lang['ad_preferences']               = 'Tercihler';
$lang['ad_total']                     = 'Toplam';
$lang['ad_active']                    = 'Aktif';
$lang['ad_quick_actions']             = 'Hızlı İşlemler';
$lang['ad_add_customer']              = 'Müşteri Ekle';
$lang['ad_new_job']                   = 'Yeni İş';
$lang['ad_new_contract']              = 'Yeni Kontrat';
$lang['ad_add_employee']              = 'Çalışan Ekle';
$lang['ad_new_project']               = 'Yeni Proje';
$lang['ad_export_data']               = 'Veri Dışa Aktar';
