<label class="radio radio-<?php echo e($answer->color); ?> font-size-sm-h4 font-size-lg">
    <input
        type="radio"
        name="question_<?php echo e($questions->firstItem() + $index); ?>"
        wire:click="answerTheQuestion(<?php echo e($question->id); ?>, <?php echo e($answer->id); ?>)"
        <?php if($answer->madeByUser(Auth::id())): ?> checked <?php endif; ?>
    >
    <span></span><?php echo e($answer->title); ?>

</label>
<?php /**PATH /home/c41010/proftracker-new.na4u.ru/www/resources/views/quiz/_run-quiz/_question-yns.blade.php ENDPATH**/ ?>