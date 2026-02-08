<div class="sort-box-actions flex-container-row items-center px-s gap-xxs">
    <button type="button" data-move="up" class="icon-button p-xs text-bigger"
            title="<?php echo e(trans('entities.books_sort_move_up')); ?>"><?php echo (new \BookStack\Util\SvgIcon('chevron-up'))->toHtml(); ?></button>
    <button type="button" data-move="down" class="icon-button p-xs text-bigger"
            title="<?php echo e(trans('entities.books_sort_move_down')); ?>"><?php echo (new \BookStack\Util\SvgIcon('chevron-down'))->toHtml(); ?></button>
    <div class="dropdown-container" component="dropdown">
        <button refs="dropdown@toggle"
                type="button"
                title="<?php echo e(trans('common.more')); ?>"
                class="icon-button p-xs text-bigger"
                aria-haspopup="true"
                aria-expanded="false">
            <?php echo (new \BookStack\Util\SvgIcon('more'))->toHtml(); ?>
        </button>
        <div refs="dropdown@menu" class="dropdown-menu" role="menu">
            <button type="button" class="text-item" data-move="prev_book"><?php echo e(trans('entities.books_sort_move_prev_book')); ?></button>
            <button type="button" class="text-item" data-move="next_book"><?php echo e(trans('entities.books_sort_move_next_book')); ?></button>
            <button type="button" class="text-item" data-move="prev_chapter"><?php echo e(trans('entities.books_sort_move_prev_chapter')); ?></button>
            <button type="button" class="text-item" data-move="next_chapter"><?php echo e(trans('entities.books_sort_move_next_chapter')); ?></button>
            <button type="button" class="text-item" data-move="book_start"><?php echo e(trans('entities.books_sort_move_book_start')); ?></button>
            <button type="button" class="text-item" data-move="book_end"><?php echo e(trans('entities.books_sort_move_book_end')); ?></button>
            <button type="button" class="text-item" data-move="before_chapter"><?php echo e(trans('entities.books_sort_move_before_chapter')); ?></button>
            <button type="button" class="text-item" data-move="after_chapter"><?php echo e(trans('entities.books_sort_move_after_chapter')); ?></button>
        </div>
    </div>
</div><?php /**PATH /app/www/resources/views/books/parts/sort-box-actions.blade.php ENDPATH**/ ?>