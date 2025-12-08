<label for="" class="d-block font-size-h6 font-hero">Кликните по изображению для выбора:</label>
<div class="row">
    <?php $__currentLoopData = $question->answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div wire:click="answerTheQuestion(<?php echo e($question->id); ?>, <?php echo e($answer->id); ?>)"
             class="col-md-2 col-sm-3 col-6 my-2 cursor-pointer hover-opacity-50 border-success rounded text-center <?php echo e($answer->madeByUser(Auth::id()) ? 'border border-2' : ''); ?> px-6 py-5">
            <img src="<?php echo e($answer->image_path); ?>" alt="" class="img-fluid max-h-100px max-h-md-150px">
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/quiz/_run-quiz/_question-image.blade.php ENDPATH**/ ?>