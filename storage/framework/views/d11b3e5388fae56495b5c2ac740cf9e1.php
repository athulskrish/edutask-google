<div class="rating">
    <ul>
        <li>
            <?php
                $learn = 0;
                $price = 0;
                $value = 0;
                $reviews = App\ReviewRating::where('course_id', $courseId)->get();
            ?>

            <?php if($reviews->isNotEmpty()): ?>
                <?php
                    $count = $reviews->count();
                    foreach($reviews as $review) {
                        // Accumulate ratings for learn, price, and value
                        $learn += $review->learn;
                        $price += $review->price;
                        $value += $review->value;
                    }

                    // Calculate the average rating
                    $average_rating = ($learn + $price + $value) / ($count * 3) * 100;
                ?>

                <div class="pull-left">
                    <div class="star-ratings-sprite">
                        <span style="width: <?php echo e($average_rating); ?>%" class="star-ratings-sprite-rating"></span>
                    </div>
                </div>
            <?php else: ?>
                <div class="pull-left"><?php echo e(__('No Rating')); ?></div>
            <?php endif; ?>
        </li>

        <!-- Display total number of reviews -->
        <li class="reviews">
            <?php echo e($reviews->count()); ?> Reviews
        </li>
    </ul>
</div>
<?php /**PATH F:\downloaded apps\xampp\htdocs\edutask\resources\views/ratings/courseratings.blade.php ENDPATH**/ ?>