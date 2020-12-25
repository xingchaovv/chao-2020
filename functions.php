<?php
require __DIR__ . '/EditorStyle.php';
require __DIR__ . '/Style.php';
require __DIR__ . '/Post.php';
require __DIR__ . '/filters/ChaoThemeFilters.php';
require __DIR__ . '/hooks/Footer.php';

use com\xingchaovv\chao2020\Style;
use com\xingchaovv\chao2020\EditorStyle;
use com\xingchaovv\chao2020\Post;
use com\xingchaovv\chao2020\Filters\ChaoThemeFilters;
use com\xingchaovv\chao2020\hooks\Footer;

(new Style());
(new EditorStyle());
(new Post());
(new Footer());

$chaoThemeFilters = new ChaoThemeFilters();
add_filter('twentytwenty_get_localized_font_family_types', [$chaoThemeFilters, 'localizedFontFamilyTypesFilter']);
