<?php
/**
 * Northern Sotho (Sesotho sa Leboa)
 *
 * @ingroup Language
 */
class LanguageNso extends Language {
	/**
	 * Use singular form for zero
	 *
	 * @param $count int
	 * @param $forms array
	 *
	 * @return string
	 */
	function convertPlural( $count, $forms ) {
		if ( !count( $forms ) ) { return ''; }
		$forms = $this->preConvertPlural( $forms, 2 );

		return ( $count <= 1 ) ? $forms[0] : $forms[1];
	}
}
