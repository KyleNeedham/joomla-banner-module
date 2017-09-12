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
    $imagePosition = $params->get('image_pos', '');
    $body = $params->get('content', '');
    $ctoText = $params->get('cto_text', '');
    $ctoLink = $params->get('cto_link', '');
    $ctoText2 = $params->get('cto_text2', '');
    $ctoLink2 = $params->get('cto_link2', '');
    $ratingCurrent = $params->get('rating_current', '');
    $ratingMax = $params->get('rating_maximum', '');
    $ratingLink = $params->get('rating_link', '');

    require JModuleHelper::getLayoutPath('mod_banner', 'default');
}
