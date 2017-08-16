<?php
/**
 * (c) 2017 WebOD LTD
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace {

    /** @var \Joomla\Registry\Registry $params */

    $title = $params->get('title', '');
    $imageUrl = $params->get('image_url', '');
    $content = $params->get('content', '');
    $ctoText = $params->get('cto_text', '');
    $ctoLink = $params->get('cto_link', '');
    $ratingCurrent = $params->get('rating_current', '');
    $ratingMax = $params->get('rating_maximum', '');
    $ratingLink = $params->get('rating_link', '');

    require JModuleHelper::getLayoutPath('mod_banner', 'default');

    unset($content);
}
