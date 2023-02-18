<?php
/**
 * Attributes service provider.
 *
 * This is the service provider for the attributes system. The primary purpose
 * of this is to use the container as a factory for creating attributes. By
 * adding this to the container, it also allows the implementation to be
 * overwritten. That way, any custom functions will utilize the new class.
 *
 * @package   HybridAttr
 * @link      https://themehybrid.com/hybrid-attr
 *
 * @author    Theme Hybrid
 * @copyright Copyright (c) 2008 - 2023, Theme Hybrid
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Attr;

use Hybrid\Core\ServiceProvider;
use Hybrid\Attr\Contracts\Attributes;

/**
 * Attr provider class.
 *
 * @since  1.0.0
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds the implementation of the attributes contract to the container.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function register() {
		$this->app->bind( Attributes::class, Attr::class );
	}
}
