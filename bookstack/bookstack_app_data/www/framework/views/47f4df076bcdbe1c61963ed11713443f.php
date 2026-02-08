<details class="sort-box" data-type="book" data-id="<?php echo e($book->id); ?>" open>
    <summary>
        <h5 class="flex-container-row items-center justify-flex-start gap-xs">
            <div class="text-book text-bigger caret-container">
                <?php echo (new \BookStack\Util\SvgIcon('caret-right'))->toHtml(); ?>
            </div>
            <div class="entity-list-item no-hover py-s text-book px-none">
                <span><?php echo (new \BookStack\Util\SvgIcon('book'))->toHtml(); ?></span>
                <span><?php echo e($book->name); ?></span>
            </div>
            <div class="flex-container-row items-center text-book">
                <?php if($book->sortRule): ?>
                    <span title="<?php echo e(trans('entities.books_sort_auto_sort_active', ['sortName' => $book->sortRule->name])); ?>"><?php echo (new \BookStack\Util\SvgIcon('auto-sort'))->toHtml(); ?></span>
                <?php endif; ?>
            </div>
        </h5>
    </summary>
    <div class="sort-box-options pb-sm">
        <button type="button" data-sort="name"
                class="button outline small"><?php echo e(trans('entities.books_sort_name')); ?></button>
        <button type="button" data-sort="created"
                class="button outline small"><?php echo e(trans('entities.books_sort_created')); ?></button>
        <button type="button" data-sort="updated"
                class="button outline small"><?php echo e(trans('entities.books_sort_updated')); ?></button>
        <button type="button" data-sort="chaptersFirst"
                class="button outline small"><?php echo e(trans('entities.books_sort_chapters_first')); ?></button>
        <button type="button" data-sort="chaptersLast"
                class="button outline small"><?php echo e(trans('entities.books_sort_chapters_last')); ?></button>
    </div>
    <ul class="sortable-page-list sort-list">

        <?php $__currentLoopData = $bookChildren; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookChild): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="text-<?php echo e($bookChild->getType()); ?>"
                data-id="<?php echo e($bookChild->id); ?>"
                data-type="<?php echo e($bookChild->getType()); ?>"
                data-name="<?php echo e($bookChild->name); ?>"
                data-created="<?php echo e($bookChild->created_at->timestamp); ?>"
                data-updated="<?php echo e($bookChild->updated_at->timestamp); ?>"
                tabindex="-1">
                <div class="flex-container-row items-center">
                    <div class="text-muted sort-list-handle px-s py-m"><?php echo (new \BookStack\Util\SvgIcon('grip'))->toHtml(); ?></div>
                    <div class="entity-list-item px-none no-hover">
                        <span><?php echo (new \BookStack\Util\SvgIcon($bookChild->getType()))->toHtml(); ?> </span>
                        <div>
                            <?php echo e($bookChild->name); ?>

                            <div>

                            </div>
                        </div>
                    </div>
                    <?php echo $__env->make('books.parts.sort-box-actions', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
                <?php if($bookChild->isA('chapter')): ?>
                    <ul class="sortable-page-sublist">
                        <?php $__currentLoopData = $bookChild->visible_pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="text-page flex-container-row items-center"
                                data-id="<?php echo e($page->id); ?>" data-type="page"
                                data-name="<?php echo e($page->name); ?>" data-created="<?php echo e($page->created_at->timestamp); ?>"
                                data-updated="<?php echo e($page->updated_at->timestamp); ?>"
                                tabindex="-1">
                                <div class="text-muted sort-list-handle px-s py-m"><?php echo (new \BookStack\Util\SvgIcon('grip'))->toHtml(); ?></div>
                                <div class="entity-list-item px-none no-hover">
                                    <span><?php echo (new \BookStack\Util\SvgIcon('page'))->toHtml(); ?></span>
                                    <span><?php echo e($page->name); ?></span>
                                </div>
                                <?php echo $__env->make('books.parts.sort-box-actions', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>
</details><?php /**PATH /app/www/resources/views/books/parts/sort-box.blade.php ENDPATH**/ ?>