<div
    class="<?php if($answer->madeByUser(Auth::id())): ?> selected <?php endif; ?> answer-circle justify-content-center my-4 rounded-circle w-200px h-200px mr-5 font-size-base d-flex align-items-center text-center p-1"
    wire:click.prevent="toggleInterest(<?php echo e($question->id); ?>, <?php echo e($answer->id); ?>)"
>
    <?php echo e($answer->title); ?>

</div>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/quiz/_run-quiz/_question-circle.blade.php ENDPATH**/ ?>