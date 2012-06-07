<?php
/**
*
* acp_styles.php [Farsi]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @Persian translated by www.Maghsad.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
// Ple-pase loc-hate ea-pch one pa-brticles in ne-bar of ea-ich oth-rer,t-ahis is secr-net fo-.r disgr-cace on-oe sit-me.
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_IMAGESETS_EXPLAIN'	=> 'مجموعه تصاویر همه کلید های انجمن و فولدرهایشان را در برمی گیرند. شما می توانید استایل هایی که تصاویر آنها تعریف نشده است را در این قسمت تعریف کرده یا مجموعه تصاویر استایل های دیگر را ویرایش ، حذف ، خارج و یا فعال نمایید.',
	'ACP_STYLES_EXPLAIN'	=> 'در اين قسمت شما مي توانيد استايل هاي قابل استفاده انجمن را ويرايش کنيد. يک استايل عبارت است از قالب, ريشه و مجموعه عکس ها. شما مي توانيد استايل هاي موجود را اصلاح, حذف, غيرفعال, فعال سازي دوباره, ايجاد و يا وارد سازي کنيد. همچنين شما مي توانيد توسط فانکشن پيش نمايش قبل از استفاده از استايل ها از آنها يک بررسي کامل انجام دهيد. استايل پيشفرض کنوني با نشانه ستاره (*) نشان داده شده است.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'یک مجموعه قالب در برگیرنده همه طرح و لایه های انجمن شماست . در اینجا شما می توانید مجموعه قالب های موجود را ویرایش ، حذف و خارج سازی ، وارد سازی و رویت کنید . همچنین شما می توانید کدهای قابلی را برای ساخت BBCode بکار ببرید .',
	'ACP_THEMES_EXPLAIN'	=> 'از اینجا شما می توانید ریشه ها را ایجاد ، ویرایش ، نصب ، حذف و یا خارج سازی کنید . یک ریشه حاوی رنگ ها و گاهی هم تصاویری است که برای منظره بهتر در قالب های انجمن شما بکار رفته اند.برای مشاهده  برای اطلاعات بیشتر از دایرکتوری Themes واقع در هر استایل دیدن فرمایید.',
	'ADD_IMAGESET'	=> 'ايجاد مجموعه تصوير',
	'ADD_IMAGESET_EXPLAIN'	=> 'Here you can create a new imageset. Depending on your server configuration and file permissions you may have additional options here. For example you may be able to base this imageset on an existing one. You may also be able to upload or import (from the store directory) a imageset archive. If you upload or import an archive the imageset name can be optionally taken from the archive name (to do this leave the imageset name blank).',//(moc.naribbphp)inverse it
	'ADD_STYLE'	=> 'ايجاد استايل',
	'ADD_STYLE_EXPLAIN'	=> 'Here you can create a new style. Depending on your server configuration and file permissions you may have additional options. For example you may be able to base this style on an existing one. You may also be able to upload or import (from the store directory) a style archive. If you upload or import an archive the style name will be determined automatically.',
	'ADD_TEMPLATE'	=> 'ايجاد قالب',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Here you can add a new template. Depending on your server configuration and file permissions you may have additional options here. For example you may be able to base this template set on an existing one. You may also be able to upload or import (from the store directory) a template archive. If you upload or import an archive the template name can be optionally taken from the archive name (to do this leave the template name blank).',
	'ADD_THEME'	=> 'ايجاد ريشه',
	'ADD_THEME_EXPLAIN'	=> 'Here you can add a new theme. Depending on your server configuration and file permissions you may have additional options here. For example you may be able to base this theme on an existing one. You may also be able to upload or import (from the store directory) a theme archive. If you upload or import an archive the theme name can be optionally taken from the archive name (to do this leave the theme name blank).',
	'ARCHIVE_FORMAT'	=> 'نوع فايل آرشيو',
	'AUTOMATIC_EXPLAIN'	=> 'براي بازيابي خودکار اين را خالي رها کنيد.',
	'BACKGROUND'	=> 'پس زمينه',
	'BACKGROUND_COLOUR'	=> 'رنگ پس زمينه',
	'BACKGROUND_IMAGE'	=> 'تصوير پس زمينه',
	'BACKGROUND_REPEAT'	=> 'تکرار شدن پس زمينه',
	'BOLD'	=> 'Bold',
	'CACHE'	=> 'Cache',
	'CACHE_CACHED'	=> 'ذخيره شده',
	'CACHE_FILENAME'	=> 'فايل قالب',
	'CACHE_FILESIZE'	=> 'حجم فايل',
	'CACHE_MODIFIED'	=> 'ويرايش شده',
	'CONFIRM_IMAGESET_REFRESH'	=> 'آیا از بروز آوری همه داده های مجموعه تصویر اطمینان دارید ؟ این تنظیمات با توجه به تغییرات اعمال شده در فایل پیکربندی مجموعه تصویر بازنشانی می شود.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'آيا از پاکسازي همه نسخه هاي انبار شده فايل هاي قالب اطمينان داريد ؟',
	'CONFIRM_TEMPLATE_REFRESH'	=> 'آیا از بروز آوری همه داده های قالب در پایگاه داده ها با محتویات فایل های قالب در " فایل سیستم " اطمینان دارید ؟ تغییرات اعمال شده شما بجای قسمت های انبار شده قالب ها در پایگاه داده ها بکارگیری می شود.',
	'CONFIRM_THEME_REFRESH'	=> 'آیا از بروز آوری همه داده های ریشه در پایگاه داده ها با محتویات داده های ریشه در " فایل سیستم " اطمینان دارید ؟ تغییرات اعمال شده شما بجای قسمت های انبار شده ریشه ها در پایگاه داده ها بکارگیری می شود.',
	'COPYRIGHT'	=> 'حق انتشار',
	'CREATE_IMAGESET'	=> 'ايجاد مجموعه تصوير جديد',
	'CREATE_STYLE'	=> 'ايجاد استايل جديد',
	'CREATE_TEMPLATE'	=> 'ايجاد قالب جديد',
	'CREATE_THEME'	=> 'ايجاد ريشه جديد',
	'CURRENT_IMAGE'	=> 'تصوير کنوني',
	'DEACTIVATE_DEFAULT'	=> 'شما نمي توانيد قالب پيشفرض را غيرفعال کنيد.',
	'DELETE_FROM_FS'	=> 'حذف از پرونده هاي سيستم',
	'DELETE_IMAGESET'	=> 'حذف مجموعه تصوير',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Here you can remove the selected imageset from the database. Please note that there is no undo capability. It is recommended that you first export your set for possible future use.',
	'DELETE_STYLE'				=> 'حذف قالب',
	'DELETE_STYLE_EXPLAIN'		=> 'در اینجا می توانید استایل مورد نظر را حذف کنید؛ در استفاده از این گزینه دقت کنید چون امکان بازگشت فرایند وجود ندارد.',
	'DELETE_TEMPLATE'			=> 'حذف template',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Here you can remove the selected template set from the database. Please note that there is no undo capability. It is recommended that you first export your set for possible future use.',
	'DELETE_THEME'				=> 'حذف theme',
	'DELETE_THEME_EXPLAIN'		=> 'Here you can remove the selected theme from the database. Please note that there is no undo capability. It is recommended that you first export your theme for possible future use.',	'DETAILS'	=> 'جزييات',
	'DIMENSIONS_EXPLAIN'	=> 'در صورتي که مي خواهيد ابعاد را هم قرار دهيد ، بلي را انتخاب کنيد.',
	'EDIT_DETAILS_IMAGESET'	=> 'ويرايش جزييات مجموعه تصوير',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'	=> 'در اين بخش شما مي توانيد برخي از اطلاعات مجموع تصوير ها را تغيير دهيد.',
	'EDIT_DETAILS_STYLE'	=> 'ويرايش استايل',
	'EDIT_DETAILS_STYLE_EXPLAIN'	=> 'با استفاده از فرم زير شما مي توانيد استايل کنوني را تغيير دهيد. شما مي توانيد آميزش هاي قالب, ريشه و مجموعه تصاوير هر کدام بصورت جداگانه مشخص نماييد.(بهتر است ازحالت هاي پيشفرض استايل استفاده نماييد)',
	'EDIT_DETAILS_TEMPLATE'	=> 'ويرايش مشخصات قالب',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'	=> 'در اين قسمت شما مي توانيد برخي از اطلاعات قالب از قبيل نام را تغيير دهيد. همجنين شما مي توانيد گزينه هاي خود را در stylesheet برروي فايل هاي سيستمي پايگاه داده ها ذخيره کنيد. اين اطلاعات وابسته است به پيکربندي PHP سرور شما و چيزي که از آن انتظار داريد.',
	'EDIT_DETAILS_THEME'	=> 'ويرايش جزييات ريشه',
	'EDIT_DETAILS_THEME_EXPLAIN'	=> 'از اينجا شما مي توانيد جزيياتي از قبيل نام ریشه مشخص شده را تغيير دهيد. همچنین شما نیز می توانید مکان انبار stylesheet را به یکی از دو گزینه " فایل سیستم " و " پایگاه داده ها " تغییر دهید . این گزینه به پیکربندی PHP و نوشتنی بودن stylesheet در  سرور وب شما بستگی دارد .',
	'EDIT_IMAGESET'	=> 'ويرايش مجموعه تصوير',
	'EDIT_IMAGESET_EXPLAIN'	=> 'در اینجا شما می توانید هر کدام از تصاویر مجموعه تصویر را بصورت انفرادی دگرگون کنید . شما نیز می توانید ابعاد تصویر را مشخص کنید . ابعاد اختیاری هستند . با تعیین نکردن آنها شما بمقدار بسیار کمی از حجم پایگاه داده های خود می کاهید .',
	'EDIT_TEMPLATE'	=> 'ويرايش قالب',
	'EDIT_TEMPLATE_EXPLAIN'	=> 'از اینجا شما می توانید مجموعه قالب را بصورت مستقیم ویرایش کنید. لطفا به خاطر داشته باشید که که این ویرایشها پایدار است و باطل ساختن آنها مقدور نمی باشد. اگر PHP بتواند فایل های قالب شما را در دایرکتوری استایل بنویسد ( سطح دسترسی نوشتنی ) از اینجا می توانید همه قالب ها رامستقیما ویرایش کنید . اگر PHP نتواند آن فایل ها را بنویسد ، آنها به پایگاه داده ها کپی می شوند و تغییرات صورت گرفته فقط در آنجا محسوس می شود .لطفا هنگامی که مجموعه قالب خود را ویرایش می کنید ، اصطلاحات {XXXX} و بیانیه های نامعلوم را نگهداری کنید .',
	'EDIT_TEMPLATE_STORED_DB'	=> 'فایل قالب غیر قابل نوشتن بود ، بنابراین دستگاه قالب در حال حاصر در پایگاه داده ها انبار شده است و تغییرات در آنجا محسوس است.',
	'EDIT_THEME'	=> 'ويرايش ريشه',
	'EDIT_THEME_EXPLAIN'	=> 'از اینجا شما می توانید ریشه انتخاب شده را ویرایش کنید. همچنین می توانید رنگ ها و تصاویر و ... را تغییر دهید.',
	'EDIT_THEME_STORED_DB'	=> 'فایل stylesheet غیر قابل نوشتن بود ، بنابراین stylesheet در حال حاصر در پایگاه داده ها انبار شده است و تغییرات در آنجا محسوس است.',
	'EDIT_THEME_STORE_PARSED'	=> 'اين ريشه نياز به تجزيه شده stylesheet دارد. اين امر تنها با انبار شدن در پايگاه داده ها محتمل است.',
	'EDITOR_DISABLED'					=> 'The template editor is disabled.',
	'EXPORT'	=> 'خارج کردن',
	'FOREGROUND'	=> 'پيش نما',
	'FONT_COLOUR'	=> 'رنگ فونت',
	'FONT_FACE'	=> 'چهره فونت',
	'FONT_FACE_EXPLAIN'	=> 'شما می توانید فونت های متعددی را با مجزا کردن آنها از هم بوسیله کاما ( , ) بکار ببرید. در صورتی که کاربر فونت نخست را نصب شده نداشته باشد ، فونت دیگری که نصب شده است انتخاب می شود..',
	'FONT_SIZE'	=> 'سايز فونت',
	'GLOBAL_IMAGES'	=> 'سراسري',
	'HIDE_CSS'	=> 'Hide raw CSS',
	'IMAGE_WIDTH'	=> 'عرض تصوير',
	'IMAGE_HEIGHT'	=> 'ارتفاع تصوير',
	'IMAGE'	=> 'تصوير',
	'IMAGE_NAME'	=> 'نام تصوير',
	'IMAGE_PARAMETER'	=> 'پارامتر',
	'IMAGE_VALUE'	=> 'مقدار',
	'IMAGESET_ADDED'	=> 'imageset جديد در فايل سيستم اضافه شد.',
	'IMAGESET_ADDED_DB'	=> 'imageset جديد در پايگاه اضافه شد.',
	'IMAGESET_DELETED'	=> 'Imageset با موفقيت حذف شد.',
	'IMAGESET_DELETED_FS'	=> 'Imageset از پايگاه داده ها حذف شد زيرا تعدادي از فايل ها در پايگاه داده ها باقي مانده است.',
	'IMAGESET_DETAILS_UPDATED'	=> 'جزييات Imageset ويرايش شد.',
	'IMAGESET_ERR_ARCHIVE'	=> 'لطفا روش بايگاني را انتخاب کنيد.',
	'IMAGESET_ERR_COPY_LONG'	=> 'کپي رايت مي بايست کمتر از 60 کاراکتر باشد.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'نام مجموعه تصوير فقط مي تواند حاوي  کاراکتر هاي آلفا نامبريک باشد, -, +, _ و فاصله.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'يک مجموعه تصوير با اين نام موجود است.',
	'IMAGESET_ERR_NAME_LONG'	=> 'نام مجموعه تصوير نمي تواند بيش از 30 کاراکتر باشد.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'آرشيو تعيين شده يک مجموعه تصوير صحيح نمي باشد.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'شما بايد يک نام براي اين مجموعه تصوير برگزينيد.',
	'IMAGESET_EXPORT'	=> 'خارج کردن مجموعه تصوير',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'از اينجا شما ميتوانيد مجموعه تصوير را با يک حالت آرشيوي خارج کنيد. اين آرشيو حاوي اطلاعات ضروري براي نصب مجموعه تصوير بر روي بورد هاي ديگر است. شما می توانید تعیین کنید که فایل را مستقیما دانلود کرده یا آنرا در شاخه store برای دانلود در آینده ذخیره کنید.',
	'IMAGESET_EXPORTED'	=> 'مجموعه تصوير با موفقيت خارج و در شاخه %s انبار شد.',
	'IMAGESET_NAME'	=> 'نام مجموعه تصوير',
	'IMAGESET_REFRESHED'	=> 'مجموعه تصوير با موفقيت بروز آوري شد.',
	'IMAGESET_UPDATED'	=> 'مجموعه تصوير با موفقيت آپديت شد.',
	'ITALIC'	=> 'Italic',
	'IMG_CAT_BUTTONS'	=> 'کليد هاي محلي',
	'IMG_CAT_CUSTOM'	=> 'تصاوير سفارشي',
	'IMG_CAT_FOLDERS'	=> 'نماد هاي مبحث',
	'IMG_CAT_FORUMS'	=> 'نماد هاي انجمن',
	'IMG_CAT_ICONS'	=> 'نماد هاي متداول',
	'IMG_CAT_LOGOS'	=> 'لوگو ها',
	'IMG_CAT_POLLS'	=> 'تصاوير نظر سنجي',
	'IMG_CAT_UI'	=> 'عناصر سراسري کاربري',
	'IMG_CAT_USER'	=> 'تصاوير فرعي',
	'IMG_SITE_LOGO'	=> 'لوگوي اصلي',
	'IMG_UPLOAD_BAR'	=> 'پيشرونده آپلود',
	'IMG_POLL_LEFT'	=> 'پايان سمت چپ نظر سنجي',
	'IMG_POLL_CENTER'	=> 'ميان نظر سنجي',
	'IMG_POLL_RIGHT'	=> 'پايان سمت راست نظر سنجي',
	'IMG_ICON_FRIEND'	=> 'افزودن بعنوان دوست',
	'IMG_ICON_FOE'	=> 'افزودن بعنوان دشمن',
	'IMG_FORUM_LINK'	=> 'انجمن لينک',
	'IMG_FORUM_READ'	=> 'انجمن',
	'IMG_FORUM_READ_LOCKED'	=> 'انجمن بسته است',
	'IMG_FORUM_READ_SUBFORUM'	=> 'زير انجمن',
	'IMG_FORUM_UNREAD'			=> 'پست های خوانده نشده انجمن',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'پست های قفل شده و خوانده نشده انجمن',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'پست های خوانده نشده زیر انجمن',
	'IMG_SUBFORUM_READ'			=> 'راهنمای زیر انجمن',
	'IMG_SUBFORUM_UNREAD'		=> 'راهنمای پست های خوانده نشده زیر انجمن',
	'IMG_TOPIC_MOVED'	=> 'مبحث انتقال يافته',
	'IMG_TOPIC_READ'	=> 'مبحث',
	'IMG_TOPIC_READ_MINE'	=> 'موضوعات پست شده به',
	'IMG_TOPIC_READ_HOT'	=> 'مبحث محبوب',
	'IMG_TOPIC_READ_HOT_MINE'	=> 'موضوعات معروف پست شده به',
	'IMG_TOPIC_READ_LOCKED'	=> 'مبحث بسته شده',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Topic locked posted to',

	'IMG_TOPIC_UNREAD'				=> 'Topic unread posts',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Topic posted to unread',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Topic popular unread posts',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Topic popular posted to unread',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Topic locked unread',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Topic locked posted to unread',

	'IMG_STICKY_READ'				=> 'Sticky topic',
	'IMG_STICKY_READ_MINE'			=> 'Sticky topic posted to',
	'IMG_STICKY_READ_LOCKED'		=> 'Sticky topic locked',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Sticky topic locked posted to',
	'IMG_STICKY_UNREAD'				=> 'Sticky topic unread posts',
	'IMG_STICKY_UNREAD_MINE'		=> 'Sticky topic posted to unread',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Sticky topic locked unread posts',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Sticky topic locked posted to unread',

	'IMG_ANNOUNCE_READ'					=> 'Announcement',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Announcement posted to',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Announcement locked',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Announcement locked posted to',
	'IMG_ANNOUNCE_UNREAD'				=> 'Announcement unread posts',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Announcement posted to unread',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Announcement locked unread posts',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Announcement locked posted to unread',

	'IMG_GLOBAL_READ'					=> 'Global',
	'IMG_GLOBAL_READ_MINE'				=> 'Global posted to',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Global locked',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Global locked posted to',
	'IMG_GLOBAL_UNREAD'					=> 'Global unread posts',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Global posted to unread',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Global locked unread posts',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Global locked posted to unread',

	'IMG_PM_READ'	=> 'پیام خصوصي خوانده شده',
	'IMG_PM_UNREAD'	=> 'پیام خصوصي خوانده نشده',
	'IMG_ICON_BACK_TOP'	=> 'بالا',
	'IMG_ICON_CONTACT_AIM'	=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'ارسالE-Mail',
	'IMG_ICON_CONTACT_ICQ'	=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'	=> 'MSNM',
	'IMG_ICON_CONTACT_PM'	=> 'ارسال پیام',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'	=> 'وب سايت',
	'IMG_ICON_POST_DELETE'	=> 'حذف پست',
	'IMG_ICON_POST_EDIT'	=> 'ويرايش پست',
	'IMG_ICON_POST_INFO'	=> 'نمايش جزييات پست',
	'IMG_ICON_POST_QUOTE'	=> 'نقل قول پست',
	'IMG_ICON_POST_REPORT'	=> 'گزارش پست',
	'IMG_ICON_POST_TARGET'	=> 'پست کوچک',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'پست کوچک جديد',
	'IMG_ICON_TOPIC_ATTACH'	=> 'پيوست',
	'IMG_ICON_TOPIC_LATEST'	=> 'آخرين پست',
	'IMG_ICON_TOPIC_NEWEST'	=> 'آخرين پست خوانده نشده',
	'IMG_ICON_TOPIC_REPORTED'	=> 'آخرين گزارش داده شده',
	'IMG_ICON_TOPIC_UNAPPROVED'	=> 'پست تاييد نشده',
	'IMG_ICON_USER_ONLINE'	=> 'کاربر آنلاين',
	'IMG_ICON_USER_OFFLINE'	=> 'کاربر آفلاين',
	'IMG_ICON_USER_PROFILE'	=> 'نمايش مشخصات',
	'IMG_ICON_USER_SEARCH'	=> 'جستجوي پست ها',
	'IMG_ICON_USER_WARN'	=> 'کاربر اخطاري',
	'IMG_BUTTON_PM_FORWARD'	=> 'فوروارد پیام خصوصي',
	'IMG_BUTTON_PM_NEW'	=> 'پیام خصوصي جديد',
	'IMG_BUTTON_PM_REPLY'	=> 'پاسخ پیام خصوصي',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'مبحث بسته است',
	'IMG_BUTTON_TOPIC_NEW'	=> 'مبحث جديد',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'پاسخ مبحث',
	'IMG_USER_ICON1'	=> 'تصوير تعريف شده توسط کاربر 1',
	'IMG_USER_ICON2'	=> 'تصوير تعريف شده توسط کاربر 2',
	'IMG_USER_ICON3'	=> 'تصوير تعريف شده توسط کاربر 3',
	'IMG_USER_ICON4'	=> 'تصوير تعريف شده توسط کاربر 4',
	'IMG_USER_ICON5'	=> 'تصوير تعريف شده توسط کاربر 5',
	'IMG_USER_ICON6'	=> 'تصوير تعريف شده توسط کاربر 6',
	'IMG_USER_ICON7'	=> 'تصوير تعريف شده توسط کاربر 7',
	'IMG_USER_ICON8'	=> 'تصوير تعريف شده توسط کاربر 8',
	'IMG_USER_ICON9'	=> 'تصوير تعريف شده توسط کاربر 9',
	'IMG_USER_ICON10'	=> 'تصوير تعريف شده توسط کاربر 10',
	'INCLUDE_DIMENSIONS'	=> 'ابعاد متضمن',
	'INCLUDE_IMAGESET'	=> 'شامل imageset',
	'INCLUDE_TEMPLATE'	=> 'شامل template',
	'INCLUDE_THEME'	=> 'شامل theme',
	'INHERITING_FROM'			=> 'Inherits from',
	'INSTALL_IMAGESET'	=> 'نصب مجموعه تصوير',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'از اينجا شما مي توانيد مجموعه ي تصاوير انتخاب شده را نصب کنيد. شما مي توانيد برخي از جزييات را تغيير داده و يا به همان صورت پيش فرض آنها را بکار گيريد.',
	'INSTALL_STYLE'	=> 'نصب استايل',
	'INSTALL_STYLE_EXPLAIN'	=> 'Here you can install a new style and if appropriate the corresponding style elements. If you already have the relevant style elements installed they will not be overwritten. Some styles require existing style elements to already be installed. If you try installing such a style and do not have the required elements you will be notified.',
	'INSTALL_TEMPLATE'	=> 'نصب قالب',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Here you can install a new template set. Depending on your server configuration you may have a number of options here.',
	'INSTALL_THEME'	=> 'Install theme',
	'INSTALL_THEME_EXPLAIN'	=> 'Here you can install your selected theme. You can edit certain details if you wish or use the installation defaults.',
	'INSTALLED_IMAGESET'	=> 'مجموعه تصاوير نصب شده',
	'INSTALLED_STYLE'	=> 'استايل هاي نصب شده',
	'INSTALLED_TEMPLATE'	=> 'قالب هاي نصب شده',
	'INSTALLED_THEME'	=> 'ريشه هاي نصب شده',
	'KEEP_IMAGESET'				=> 'imageset مربوط به “%s” را نگه دار',
	'KEEP_TEMPLATE'				=> 'template مربوط به “%s” را نگه دار',
	'KEEP_THEME'				=> 'theme مربوط به “%s” را نگه دار',
	'LINE_SPACING'	=> 'فاصله خطوط',
	'LOCALISED_IMAGES'	=> 'Localised',
	'LOCATION_DISABLED_EXPLAIN'	=> 'This setting is inherited and cannot be changed.',
	'NO_CLASS'	=> 'رده در stylesheet يافت نشد.',
	'NO_IMAGESET'	=> 'قادر به يافتن مجموعه تصوير در پرونده هاي سيستم نيست.',
	'NO_IMAGE'	=> 'بدون تصوير',
	'NO_IMAGE_ERROR'	=> 'قادر به يافتن تصوير در پرونده هاي سيستم نيست.',
	'NO_STYLE'	=> 'قادر به يافتن استایل در پرونده هاي سيستم نيست.',
	'NO_TEMPLATE'	=> 'قادر به يافتن قالب در پرونده هاي سيستم نيست.',
	'NO_THEME'	=> 'قادر به يافتن ریشه در پرونده هاي سيستم نيست.',
	'NO_UNINSTALLED_IMAGESET'	=> 'هيچ مجموعه تصوير نصب نشده اي يافت نشد.',
	'NO_UNINSTALLED_STYLE'	=> 'هيچ استايل نصب نشده اي يافت نشد.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'هيچ قالب نصب نشده اي يافت نشد.',
	'NO_UNINSTALLED_THEME'	=> 'هيچ theme نصب نشده اي يافت نشد.',
	'NO_UNIT'	=> 'هيچ',
	'ONLY_IMAGESET'	=> 'این تنها مجموعه تصویر باقی مانده است ، شما نمی توانید آنرا حذف کنید.',
	'ONLY_STYLE'	=> 'این تنها استایل باقی مانده است ، شما نمی توانید آنرا حذف کنید.',
	'ONLY_TEMPLATE'	=> 'این تنها دستگاه قالب باقی مانده است ، شما نمی توانید آنرا حذف کنید.',
	'ONLY_THEME'	=> 'این تنها ریشه باقی مانده است ، شما نمی توانید آنرا حذف کنید.',
	'OPTIONAL_BASIS'	=> 'انتخاب بر پايه',
	'REFRESH'	=> 'بروز آوري',
	'REPEAT_NO'	=> 'هيچ',
	'REPEAT_X'	=> 'فقط افقي',
	'REPEAT_Y'	=> 'فقط عمودي',
	'REPEAT_ALL'	=> 'هردوي بعد ها',
	'REPLACE_IMAGESET'	=> 'جايگزين نمودن مجموعه تصوير با',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'This imageset will replace the one you are deleting in any styles that use it.',
	'REPLACE_STYLE'	=> 'جايگزين نمودن استايل با',
	'REPLACE_STYLE_EXPLAIN'	=> 'This style will replace the one being deleted for members that use it.',
	'REPLACE_TEMPLATE'	=> 'تعويض قالب با',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'This template set will replace the one you are deleting in any styles that use it.',
	'REPLACE_THEME'	=> 'تعويض ريشه با',
	'REPLACE_THEME_EXPLAIN'	=> 'This theme will replace the one you are deleting in any styles that use it.',
	'REPLACE_WITH_OPTION'		=> 'با “%s” جایگزین شود',
	'REQUIRES_IMAGESET'	=> 'استايل براي نصب به مجموعه تصوير احتياج دارد %s.',
	'REQUIRES_TEMPLATE'	=> 'استايل براي نصب به دستگاه قالب احتياج دارد.',
	'REQUIRES_THEME'	=> 'استايل براي نصب به ريشه احتياج دارد %s.',
	'SELECT_IMAGE'	=> 'انتخاب تصوير',
	'SELECT_TEMPLATE'	=> 'انتخاب فايل قالب',
	'SELECT_THEME'	=> 'انتخاب فايل ريشه',
	'SELECTED_IMAGE'	=> 'تصوير انتخاب شده',
	'SELECTED_IMAGESET'	=> 'مجموعه تصوير انتخاب شده',
	'SELECTED_TEMPLATE'	=> 'قالب انتخاب شده',
	'SELECTED_TEMPLATE_FILE'	=> 'فايل قالب انتخاب شده',
	'SELECTED_THEME'	=> 'ريشه انتخاب شده',
	'SELECTED_THEME_FILE'	=> 'فايل ريشه انتخاب شده',
	'STORE_DATABASE'	=> 'پايگاه داده',
	'STORE_FILESYSTEM'	=> 'فايل سيستم',
	'STYLE_ACTIVATE'	=> 'فعال کردن',
	'STYLE_ACTIVE'	=> 'فعال',
	'STYLE_ADDED'	=> 'استايل با موفقيت اضافه شد.',
	'STYLE_DEACTIVATE'	=> 'غيرفعال سازي',
	'STYLE_DEFAULT'	=> 'انتخاب بعنوان قالب پيشفرض',
	'STYLE_DELETED'	=> 'استايل با موفقيت حذف شد.',
	'STYLE_DETAILS_UPDATED'	=> 'استايل با موفقيت ويرايش شد.',
	'STYLE_ERR_ARCHIVE'	=> 'لطفا يک روش بايگاني را برگزينيد.',
	'STYLE_ERR_COPY_LONG'	=> 'کپي رايت نبايد بيش از  60 کاراکتر باشد.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'شما در کمترين حالت مي بايست يکي از عناصر استايل را انتخاب کنيد.',
	'STYLE_ERR_NAME_CHARS'	=> 'نام استايل فقط مي تواند حاوي کاراکتر هاي ابتدايي باشد, -, +, _ و فاصله.',
	'STYLE_ERR_NAME_EXIST'	=> 'يک قالب با آن نام موجو است.',
	'STYLE_ERR_NAME_LONG'	=> 'نام استايل بايد حاوي کمتر از 30 کاراکتر باشد.',
	'STYLE_ERR_NO_IDS'	=> 'شما بايد يک قالب, ريشه و مجموعه تصوير براي اين استايل انتخاب کنيد.',
	'STYLE_ERR_NOT_STYLE'	=> 'فايل وارد يا آپلود شده حاوي آرشيو صحيح استايل نمي باشد.',
	'STYLE_ERR_STYLE_NAME'	=> 'شما بايد يک نام براي اين استايل تعيين کنيد.',
	'STYLE_EXPORT'	=> 'خارج کردن استايل',
	'STYLE_EXPORT_EXPLAIN'	=> 'از اينجا شما ميتوانيد استایل را با يک حالت آرشيوي خارج کنيد.یک خارج سازی نیازمند انتخاب همه دستگاه ها نیست . برای مثال اگر شما ریشه و مجموعه تصویر را ویرایش کرده اید می توانید فقط آنها را بدون در نظر گرفتن قالب انتخاب کنید. شما می توانید تعیین کنید که فایل را مستقیما دانلود کرده یا آنرا در شاخه store برای دانلود در آینده ذخیره کنید.',
	'STYLE_EXPORTED'	=> 'استايل با موفقيت خارج و در %s ذخيره شد.',
	'STYLE_IMAGESET'	=> 'مجموعه تصوير',
	'STYLE_NAME'	=> 'نام استايل',
	'STYLE_TEMPLATE'	=> 'قالب',
	'STYLE_THEME'	=> 'ريشه',
	'STYLE_USED_BY'	=> 'استفاده شده (مشمول robots)',
	'TEMPLATE_ADDED'	=> 'دستگاه قالب افزوده و در پرونده هاي سيستم انبار شد.',
	'TEMPLATE_ADDED_DB'	=> 'دستگاه قالب اضافه و در پايگاه داده ها انبار شد.',
	'TEMPLATE_CACHE'	=> 'نهانگاه قالب',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'By default phpBB caches the compiled version of its templates. This decreases the load on the server each time a page is viewed and thus may reduce the page generation time. Here you can view the cache status of each file and delete individual files or the entire cache.',
	'TEMPLATE_CACHE_CLEARED'	=> 'نهانگاه قالب با موفقيت تميز شد.',
	'TEMPLATE_CACHE_EMPTY'	=> 'قالب هاي نهان شده موجود نيست.',
	'TEMPLATE_DELETED'	=> 'دستگاه قالب با موفقيت حذف شد.',
	'TEMPLATE_DELETE_DEPENDENT'	=> 'The template set cannot be deleted as there are one or more other template sets inheriting from it:',
	'TEMPLATE_DELETED_FS'	=> 'دستگاه قالب از پايگاه داده ها حدف شد اما برخي از فايل ها در پرونده هاي سيستم باقي مانده اند.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'جزييات قالب با موفقيت بروز شد.',
	'TEMPLATE_EDITOR'	=> 'ویرایشگر بی الایش HTML',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'ارتفاع ويرايشگر قالب',
	'TEMPLATE_ERR_ARCHIVE'	=> 'لطفا يک حالت آرشيوي انتخاب کنيد.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'The cache directory used to store cached versions of template files could not be opened.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'حق انتشار مي بايست کمتر از 60 کاراکتر امتداد داشته باشد.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'نام قالب تنها بايد کاراکتر هاي ابتدايي را در برگيرد, -, +, _ و فاصله.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'يک دستگاه قالب با اين نام موجود است.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'نام قالب بايد کمتر از 30 کاراکتر امتداد داشته باشد.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'آرشيو تعيين شده قالب صحيحي را شامل نمي شود.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'The new template set requires the template %s to be installed and not inheriting itself.#m#',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'شما بايد يک نام براي اين قالب تدارک ببينيد.',
	'TEMPLATE_EXPORT'	=> 'خارج کردن قالب ها',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'از اينجا شما ميتوانيد قالب را با يک حالت آرشيوي خارج کنيد. اين آرشيو حاوي اطلاعات ضروري براي نصب قالب بر روي بورد هاي ديگر است. شما می توانید تعیین کنید که فایل را مستقیما دانلود کرده یا آنرا در شاخه store برای دانلود در آینده ذخیره کنید.',
	'TEMPLATE_EXPORTED'	=> 'قالب ها با موفقيت خارج و در %s انبار شدند.',
	'TEMPLATE_FILE'	=> 'فايل قالب',
	'TEMPLATE_FILE_UPDATED'	=> 'فايل قالب با موفقيت بروز شد.',
	'TEMPLATE_INHERITS'			=> 'This template sets inherits from %s and thus cannot have a different storage setting than its super template.',
	'TEMPLATE_LOCATION'	=> 'ذخيره قالب ها در',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'تصاوير هميشه در پرونده هاي سيستم مستقرند.',
	'TEMPLATE_NAME'	=> 'نام قالب',
		'TEMPLATE_FILE_NOT_WRITABLE'=> 'فایل %s قابل نوشتن نیست. لطفا سطوح دسترسی آن را چک کنید.',
	'TEMPLATE_REFRESHED'	=> 'قالب با موفقيت بروز آوري شد.',
	'THEME_ADDED'	=> 'ريشه جديد به پرونده هاي سيستم اضافه شد.',
	'THEME_ADDED_DB'	=> 'ريشه جديد به پايگاه داده ها اضافه شد.',
	'THEME_CLASS_ADDED'	=> 'کلاس سفارشي با موفقيت اضافه شد.',
	'THEME_DELETED'	=> 'ريشه با موفقيت حذف شد.',
	'THEME_DELETED_FS'	=> 'ريشه از پايگاه داده ها حذف شد اما فايل ها در پرونده هاي سيستم باقي مانده اند.',
	'THEME_DETAILS_UPDATED'	=> 'جزييات ريشه با موفقيت بروز شد.',
	'THEME_EDITOR'	=> 'ويرايشگر ريشه',
	'THEME_EDITOR_HEIGHT'	=> 'ارتفاع ويرايشگر ريشه',
	'THEME_ERR_ARCHIVE'	=> 'لطفا يک حالت آرشيوي را انتخاب کنيد.',
	'THEME_ERR_CLASS_CHARS'	=> 'فقط کاراکتر هاي ابتدايي بهمراه ., :, -, _ و # classname هاي صحيح هستند.',
	'THEME_ERR_COPY_LONG'	=> 'حق انتشار مي بايست کمتر از 60 کاراکتر باشد.',
	'THEME_ERR_NAME_CHARS'	=> 'نام يک ريشه تنها مي تواند کاراکتر هاي اوليه را در بر گيرد, -, +, _ و فاصله.',
	'THEME_ERR_NAME_EXIST'	=> 'يک ريشه با اين نام قبلا ثبت شده است.',
	'THEME_ERR_NAME_LONG'	=> 'نام ريشه بايد زير 30 کاراکتر باشد.',
	'THEME_ERR_NOT_THEME'	=> 'آرشيو تعيين شده ريشه صحيحي را شامل نمي شود.',
	'THEME_ERR_REFRESH_FS'	=> 'اين ريشه در پرونده هاي سيستم انبار شده است ، بنابر اين احتياجي به بروز آوري ندارد.',
	'THEME_ERR_STYLE_NAME'	=> 'شما بايد نامي براي اين ريشه تدارک ببينيد.',
	'THEME_FILE'	=> 'فايل ',
	'THEME_EXPORT'	=> 'خارج کردن ريشه',
	'THEME_EXPORT_EXPLAIN'	=> 'از اينجا شما ميتوانيد ریشه را با يک حالت آرشيوي خارج کنيد. اين آرشيو حاوي اطلاعات ضروري براي نصب ریشه بر روي بورد هاي ديگر است. شما می توانید تعیین کنید که فایل را مستقیما دانلود کرده یا آنرا در شاخه store برای دانلود در آینده ذخیره کنید.',
	'THEME_EXPORTED'	=> 'ريشه با موفقيت خارج و در %s ذخيره شد.',
	'THEME_LOCATION'	=> 'انبار stylesheet در',
	'THEME_LOCATION_EXPLAIN'	=> 'تصاوير هميشه در سيستم انبار شده هستند.',
	'THEME_NAME'	=> 'نام ريشه',
	'THEME_REFRESHED'	=> 'ريشه با موفقيت تازه شد.',
	'THEME_UPDATED'	=> 'ريشه با موفقيت بروز رساني شد.',
	'UNDERLINE'	=> 'خط زيرين',
	'UNINSTALLED_IMAGESET'	=> 'مجموعه تصاوير نصب نشده',
	'UNINSTALLED_STYLE'	=> 'استايل هاي نصب نشده',
	'UNINSTALLED_TEMPLATE'	=> 'قالب هاي نصب نشده',
	'UNINSTALLED_THEME'	=> 'ريشه نصب نشده',
	'UNSET'	=> 'Undefined',
));

?>