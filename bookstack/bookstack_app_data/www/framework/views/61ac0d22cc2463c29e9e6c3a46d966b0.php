<?php $__env->startSection('body'); ?>
    <?php echo $__env->make('books.parts.list', ['books' => $books, 'view' => $view], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('left'); ?>
    <?php echo $__env->make('home.parts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('right'); ?>
    <div class="actions mb-xl">
        <h5><?php echo e(trans('common.actions')); ?></h5>
        <div class="icon-list text-link">
            <?php if(user()->can('book-create-all')): ?>
                <a href="<?php echo e(url("/create-book")); ?>" class="icon-list-item">
                    <span><?php echo (new \BookStack\Util\SvgIcon('add'))->toHtml(); ?></span>
                    <span><?php echo e(trans('entities.books_create')); ?></span>
                </a>
            <?php endif; ?>
            <?php echo $__env->make('entities.view-toggle', ['view' => $view, 'type' => 'books'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <a href="<?php echo e(url('/tags')); ?>" class="icon-list-item">
                <span><?php echo (new \BookStack\Util\SvgIcon('tag'))->toHtml(); ?></span>
                <span><?php echo e(trans('entities.tags_view_tags')); ?></span>
            </a>
            <?php echo $__env->make('home.parts.expand-toggle', ['classes' => 'text-link', 'target' => '.entity-list.compact .entity-item-snippet', 'key' => 'home-details'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->make('common.dark-mode-toggle', ['classes' => 'icon-list-item text-link'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tri', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /app/www/resources/views/home/books.blade.php ENDPATH**/ ?>