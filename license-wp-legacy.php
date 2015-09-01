<?php
/*
    Plugin Name: License WP Legacy
    Plugin URI: https://www.never5.com/
    Description: Add legacy support to License WP.
    Version: 1.0.0
    Author: Barry Kooij
    Author URI: http://www.barrykooij.com
    License: GPL v2

	Copyright 2015 - Never5

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

function license_wp_legacy_fix_request( $request ) {

	// licence should license
	if ( isset( $request['licence_key'] ) ) {
		$request['license_key'] = $request['licence_key'];
		unset( $request['licence_key'] );
	}

	return $request;
}

add_filter( 'license_wp_api_activation_request', 'license_wp_legacy_fix_request' );
add_filter( 'license_wp_api_update_request', 'license_wp_legacy_fix_request' );