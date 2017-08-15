<?php
/**
 * (c) 2017 WebOD LTD
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/** @var string $title */
/** @var string $imageUrl */
/** @var string $content */
/** @var string $ctoText */
/** @var string $ctoLink */
/** @var string $ratingCurrent */
/** @var string $ratingMax */
/** @var string $ratingLink */

?>

<section class="promo" style="background-image: url(<?php echo $imageUrl; ?>);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xs-8 col-sm-10 col-lg-6">
                <div class="promo-card">
                    <div class="promo-block">

<?php if (strlen($title) > 0): ?>
                        <h3 class="promo-title">
                            <?php echo $title; ?>
                        </h3>
<?php endif; ?>

<?php if (strlen($content) > 0): ?>
                        <p class="promo-text">
                            <?php echo $content; ?>
                        </p>
<?php endif; ?>

<?php if (strlen($ctoText) > 0): ?>
                        <a class="btn btn-success btn-lg" href="<?php echo $ctoLink; ?>">
                            <?php echo $ctoText; ?>
                        </a>
<?php endif; ?>

                    </div>
                    <a class="promo-rating" href="<?php echo $ratingLink; ?>" target="_blank">
                        <i class="ic ic-star-o"></i>
                        <div class="promo-score">
                            <?php echo $ratingCurrent; ?> / <?php echo $ratingMax; ?>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
