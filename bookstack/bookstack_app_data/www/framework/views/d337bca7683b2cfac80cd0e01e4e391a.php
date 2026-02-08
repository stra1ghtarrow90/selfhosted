<?php $__env->startSection('body'); ?>

    <div class="container">

        <div class="my-s">
            <?php echo $__env->make('entities.breadcrumbs', ['crumbs' => [
                $book,
                $book->getUrl('/sort') => [
                    'text' => trans('entities.books_sort'),
                    'icon' => 'sort',
                ]
            ]], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>

        <div class="grid left-focus gap-xl">
            <div>
                <div component="book-sort" class="card content-wrap auto-height">
                    <h1 class="list-heading"><?php echo e(trans('entities.books_sort')); ?></h1>

                    <div class="flex-container-row gap-m wrap mb-m">
                        <p class="text-muted flex min-width-s mb-none"><?php echo e(trans('entities.books_sort_desc')); ?></p>
                        <div class="min-width-s">
                            <?php
                                $autoSortVal = intval(old('auto-sort') ?? $book->sort_rule_id ?? 0);
                            ?>
                            <label for="auto-sort"><?php echo e(trans('entities.books_sort_auto_sort')); ?></label>
                            <select id="auto-sort"
                                    name="auto-sort"
                                    form="sort-form"
                                    class="<?php echo e($errors->has('auto-sort') ? 'neg' : ''); ?>">
                                <option value="0" <?php if($autoSortVal === 0): ?> selected <?php endif; ?>>-- <?php echo e(trans('common.none')); ?>

                                    --
                                </option>
                                <?php $__currentLoopData = \BookStack\Sorting\SortRule::allByName(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($rule->id); ?>"
                                            <?php if($autoSortVal === $rule->id): ?> selected <?php endif; ?>
                                    >
                                        <?php echo e($rule->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <div refs="book-sort@sortContainer">
                        <?php echo $__env->make('books.parts.sort-box', ['book' => $book, 'bookChildren' => $bookChildren], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </div>

                    <form id="sort-form" action="<?php echo e($book->getUrl('/sort')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="_method" value="PUT">
                        <input refs="book-sort@input" type="hidden" name="sort-tree">
                        <div class="list text-right">
                            <a href="<?php echo e($book->getUrl()); ?>" class="button outline"><?php echo e(trans('common.cancel')); ?></a>
                            <button class="button" type="submit"><?php echo e(trans('entities.books_sort_save')); ?></button>
                        </div>
                    </form>
                </div>
            </div>

            <div>
                <main class="card content-wrap auto-height sticky-top-m">
                    <h2 class="list-heading"><?php echo e(trans('entities.books_sort_show_other')); ?></h2>
                    <p class="text-muted"><?php echo e(trans('entities.books_sort_show_other_desc')); ?></p>

                    <?php echo $__env->make('entities.selector', ['name' => 'books_list', 'selectorSize' => 'compact', 'entityTypes' => 'book', 'entityPermission' => 'update'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                </main>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /app/www/resources/views/books/sort.blade.php ENDPATH**/ ?>