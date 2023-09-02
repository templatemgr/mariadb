<?php

declare(strict_types=1);

$cfg['blowfish_secret'] = 'REPLACE_BLOWFISH_SECRECT'; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */

/* Servers configuration */
$i = 0;

/* Server: sqldb [1] */
$i++;
$cfg['Servers'][$i]['verbose'] = 'REPLACE_SERVER_NAME';
$cfg['Servers'][$i]['host'] = 'REPLACE_SERVER_NAME';
$cfg['Servers'][$i]['port'] = 3306;
$cfg['Servers'][$i]['socket'] = '/tmp/mysql.sock';
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['user'] = '';
$cfg['Servers'][$i]['password'] = '';
$cfg['Servers'][$i]['hide_db'] = '^(mysql|performance_schema|information_schema|sys|phpmyadmin|test)$';

// /* Server: local [2] */
// $i++;
// $cfg['Servers'][$i]['verbose'] = 'local';
// $cfg['Servers'][$i]['host'] = 'localhost';
// $cfg['Servers'][$i]['port'] = 3306;
// $cfg['Servers'][$i]['socket'] = '/tmp/mysql.sock';
// $cfg['Servers'][$i]['auth_type'] = 'cookie';
// $cfg['Servers'][$i]['user'] = 'root';
// $cfg['Servers'][$i]['password'] = '';
// $cfg['Servers'][$i]['hide_db'] = '^(mysql|performance_schema|information_schema|sys|phpmyadmin|test)$';


// $cfg['Servers'][$i]['controlhost'] = '';
// $cfg['Servers'][$i]['controlport'] = '';
// $cfg['Servers'][$i]['controluser'] = '';
// $cfg['Servers'][$i]['controlpass'] = '';

$cfg['Servers'][$i]['pmadb'] = 'phpmyadmin';
$cfg['Servers'][$i]['bookmarktable'] = 'pma__bookmark';
$cfg['Servers'][$i]['relation'] = 'pma__relation';
$cfg['Servers'][$i]['table_info'] = 'pma__table_info';
$cfg['Servers'][$i]['table_coords'] = 'pma__table_coords';
$cfg['Servers'][$i]['pdf_pages'] = 'pma__pdf_pages';
$cfg['Servers'][$i]['column_info'] = 'pma__column_info';
$cfg['Servers'][$i]['history'] = 'pma__history';
$cfg['Servers'][$i]['table_uiprefs'] = 'pma__table_uiprefs';
$cfg['Servers'][$i]['tracking'] = 'pma__tracking';
$cfg['Servers'][$i]['userconfig'] = 'pma__userconfig';
$cfg['Servers'][$i]['recent'] = 'pma__recent';
$cfg['Servers'][$i]['favorite'] = 'pma__favorite';
$cfg['Servers'][$i]['users'] = 'pma__users';
$cfg['Servers'][$i]['usergroups'] = 'pma__usergroups';
$cfg['Servers'][$i]['navigationhiding'] = 'pma__navigationhiding';
$cfg['Servers'][$i]['savedsearches'] = 'pma__savedsearches';
$cfg['Servers'][$i]['central_columns'] = 'pma__central_columns';
$cfg['Servers'][$i]['designer_settings'] = 'pma__designer_settings';
$cfg['Servers'][$i]['export_templates'] = 'pma__export_templates';

$cfg['UploadDir'] = '/tmp';
$cfg['SaveDir'] = '/tmp';
$cfg['RowActionType'] = 'both';
$cfg['ShowAll'] = true;
$cfg['MaxRows'] = 50;
$cfg['ProtectBinary'] = false;
$cfg['DefaultLang'] = 'en';
$cfg['PropertiesNumColumns'] = 2;
$cfg['QueryHistoryDB'] = true;
$cfg['QueryHistoryMax'] = 100;
$cfg['SendErrorReports'] = 'always';
$cfg['ThemeDefault'] = 'blueberry';
