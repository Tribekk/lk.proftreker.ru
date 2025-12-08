<div class="d-flex align-items-center my-4 cursor-pointer hover-opacity-50"
     wire:click="answerTheQuestion(<?php echo e($question->id); ?>, <?php echo e($answer->id); ?>)">
    <?php if($answer->value == 1): ?>
        <span class="font-size-sm-h4 font-size-lg d-block mx-3 text-success font-hero">Да</span>
    <?php endif; ?>
    <span class="rounded-pill min-w-25px min-h-25px border border-2 <?php echo e($answer->value == 1 ? 'border-success' : 'border-silver'); ?> <?php if($answer->madeByUser(Auth::id())): ?> <?php echo e($answer->value == 1 ? 'bg-success' : 'bg-silver'); ?> <?php endif; ?> d-block mx-4"></span>
    <?php if($answer->value == 0): ?>
        <span class="font-size-sm-h4 font-size-lg d-block mx-3 text-silver font-hero">Нет</span>
    <?php endif; ?>
</div>

<?php $__env->startPush('css'); ?>
    <style>
        .bg-silver {
            background: #c6c6c7!important;
        }

        .border-silver {
            border-color: #c6c6c7!important;
        }

        .text-silver {
            color: #8e8e92 !important;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/quiz/_run-quiz/_question-yn.blade.php ENDPATH**/ ?>