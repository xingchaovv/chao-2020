<?php
namespace com\xingchaovv\chao2020\filters;

class ChaoThemeFilters {

	public function localizedFontFamilyTypesFilter($types) {
		$enUSLocaleName = 'en-US';
		$enUSTypes = ["'PingFang SC'", "'Helvetica Neue'", "'Microsoft YaHei New'", "'STHeiti Light'", "sans-serif"];
		$types[$enUSLocaleName] = $enUSTypes;
		return $types;
	}
}
