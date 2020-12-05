<?php
require __DIR__ . '/EditorStyle.php';
require __DIR__ . '/Style.php';
require __DIR__ . '/Post.php';
require __DIR__ . '/filters/ChaoThemeFilters.php';

use com\xingchaovv\chao2020\Style;
use com\xingchaovv\chao2020\EditorStyle;
use com\xingchaovv\chao2020\Post;
use com\xingchaovv\chao2020\Filters\ChaoThemeFilters;

(new Style());
(new EditorStyle());
(new Post());

$chaoThemeFilters = new ChaoThemeFilters();
add_filter('twentytwenty_get_localized_font_family_types', [$chaoThemeFilters, 'localizedFontFamilyTypesFilter']);
