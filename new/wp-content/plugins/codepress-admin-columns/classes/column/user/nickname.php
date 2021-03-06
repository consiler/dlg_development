<?php

/**
 * CPAC_Column_User_Nickname
 *
 * @since 2.0.0
 */
class CPAC_Column_User_Nickname extends CPAC_Column {

	function __construct( $storage_model ) {

		// define properties
		$this->properties['type']	 = 'column-nickname';
		$this->properties['label']	 = __( 'Nickname', 'cpac' );

		parent::__construct( $storage_model );
	}

	/**
	 * @see CPAC_Column::get_value()
	 * @since 2.0.0
	 */
	function get_value( $user_id ) {

		$userdata = get_userdata( $user_id );

		return $userdata->nickname;
	}
}