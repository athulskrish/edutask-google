
<div class="rating">
    <ul>
        <?php
            $reviews = App\ReviewRating::where('course_id', $courseId)->get();
            $reviewCount = $reviews->count();
            $overallRating = 0;

            if ($reviewCount > 0) {
                $totalRating = 0;

                foreach ($reviews as $review) {
                    $learn = $review->learn * 5;
                    $price = $review->price * 5;
                    $value = $review->value * 5;
                    $subTotal = $learn + $price + $value;
                    $totalRating += $subTotal;
                }

                $maxPossibleRating = ($reviewCount * 3) * 5;
                $overallRating = ($totalRating / $maxPossibleRating) * 5;
                $overallRatingPercentage = ($overallRating / 5) * 100;
            }
        ?>

        <?php if($reviewCount > 0): ?>
            <li>
                <div class="pull-left">
                    <div class="star-ratings-sprite">
                        <span style="width: <?php echo e($overallRatingPercentage); ?>%" class="star-ratings-sprite-rating"></span>
                    </div>
                </div>
            </li>
            <li class="reviews">
                (<?php echo e($reviewCount); ?> Reviews)
            </li>
        <?php else: ?>
            <li>
                <div class="pull-left"><?php echo e(__('No Rating')); ?></div>
            </li>
        <?php endif; ?>
    </ul>
</div>
<?php /**PATH /home/keramfvp/edutech.keralify.com/resources/views/ratings/discountratings.blade.php ENDPATH**/ ?>