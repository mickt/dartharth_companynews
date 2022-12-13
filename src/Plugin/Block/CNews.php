<?php

/**
 * @file
 * Contains \Drupal\dartharth_companynews\Plugin\Block\CNews.
 */

namespace Drupal\dartharth_companynews\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "cnews",
 *   admin_label = @Translation("CNews Block"),
 *   category = @Translation("DarthArth")
 * )
 */
class CNews extends BlockBase {

	/**
	 * {@inheritdoc}
	 */
	public function build() {

		$items = array();

		return array(
			'#items' => $items,
			'#theme' => 'cnews',
		);
	}
}
