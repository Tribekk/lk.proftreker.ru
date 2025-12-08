<?php $__env->startSection('subheader'); ?>
     <?php if (isset($component)) { $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Subheader::class, ['title' => 'Прохождение КВИЗ организации']); ?>
<?php $component->withName('subheader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b)): ?>
<?php $component = $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b; ?>
<?php unset($__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card card-custom gutter-b">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">


                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <img alt="<?php echo e($orgunit->title); ?>" src="<?php echo e($orgunit->logoUrl); ?>">

                        </div>

                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h2 class="font-size-h1 font-hero"><?php echo e($orgunit->title); ?></h2>

                        </div>
                        <div class="d-flex align-items-center justify-content-center mt-2">

                            <?php echo e(@$orgunit->personal_quiz["quiz_title"]); ?>



                        </div>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <?php echo @$orgunit->personal_quiz["quiz_description"]; ?>

                        </div>

                        <form action="<?php echo e(route('orgunits.personal_quiz_send', $orgunit)); ?>" enctype="multipart/form-data" method="get">
                            <?php echo csrf_field(); ?>

                           <?php $__currentLoopData = @$orgunit->personal_quiz["quiz_question_text"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pos=>$q_text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                               <?php if($q_text!=""): ?>
                                <div class="d-flex align-items-center justify-content-center mt-2" style="padding:25px;border:1px solid #b5b5c3;border-radius:5px;">
                                    <table style="width: 100%">
                                        <tr>
                                            <td colspan="2" align="center">
                                                <div style="width: 50%;margin: auto">

                                                    <?php if(@$orgunit->personal_quiz["photo_link"][$pos]!=""): ?>
                                                        <a href="<?php echo e(@$orgunit->personal_quiz["photo_link"][$pos]); ?>"
                                                           target="_blank">
                                                            <img src="<?php echo e(@$orgunit->personal_quiz["photo_link"][$pos]); ?>"
                                                                 style="width: 100%;padding: 20px;">
                                                        </a>
                                                        <br>
                                                    <?php endif; ?>


                                                    <?php if(@$orgunit->personal_quiz["video_link"][$pos]!=""): ?>
                                                        
                                                        <div id="player"></div>
                                                        <script src="/js/playerjs.js" type="text/javascript"></script>
                                                        <script>
                                                            var player = new Playerjs({
                                                                id: "player",
                                                                file: "<?php echo e(@$orgunit->personal_quiz["video_link"][$pos]); ?>"
                                                            });
                                                        </script>
                                                        <br><br>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td valign="top" style="font-size: 1.7rem;"><?php echo e($pos); ?>.</td>

                                            <td valign="top">
                                                <div> <?php echo @$orgunit->personal_quiz["quiz_question_text"][$pos]; ?></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top"></td>
                                            <td valign="top">

                                                <?php
                                                    $quiz_variants=explode("\r\n",$orgunit->personal_quiz["quiz_variants"][$pos]);
                                                ?>

                                                <?php if(@$orgunit->personal_quiz["type_quiz_question"][$pos]=="one_variant"): ?>

                                                    <?php $__currentLoopData = $quiz_variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var_pos=>$quiz_var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                        <input type="radio" id="answer_<?php echo e($var_pos); ?>_<?php echo e($pos); ?>"
                                                               name="answer[<?php echo e($pos); ?>]" value="<?php echo e($quiz_var); ?>">
                                                        <label for="answer_<?php echo e($var_pos); ?>_<?php echo e($pos); ?>"> <?php echo e($quiz_var); ?></label>
                                                        <br>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <?php endif; ?>

                                                <?php if(@$orgunit->personal_quiz["type_quiz_question"][$pos]=="many_variants"): ?>

                                                    <?php $__currentLoopData = $quiz_variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var_pos=>$quiz_var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                        <input type="checkbox" id="answer_<?php echo e($var_pos); ?>_<?php echo e($pos); ?>"
                                                               name="answer[<?php echo e($pos); ?>][<?php echo e($var_pos); ?>]"
                                                               value="<?php echo e($quiz_var); ?>">
                                                        <label for="answer_<?php echo e($var_pos); ?>_<?php echo e($pos); ?>"> <?php echo e($quiz_var); ?></label>
                                                        <br>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <?php endif; ?>

                                                <?php if(@$orgunit->personal_quiz["type_quiz_question"][$pos]=="text"): ?>

                                                    <input type="text" id="answer_<?php echo e($var_pos); ?>_<?php echo e($pos); ?>"
                                                           name="answer[<?php echo e($pos); ?>]">
                                                    <br>

                                                <?php endif; ?>

                                            </td>
                                        </tr>

                                    </table>
                                   </div>

                                <?php endif; ?>

                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <div class="d-flex align-items-center justify-content-center mt-2">

                             <?php if (isset($component)) { $__componentOriginal0d75fdd1ee12f34e798ece0533de749fd4d3d96a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\Submit::class, ['title' => 'Я закончил тест!']); ?>
<?php $component->withName('inputs.submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal0d75fdd1ee12f34e798ece0533de749fd4d3d96a)): ?>
<?php $component = $__componentOriginal0d75fdd1ee12f34e798ece0533de749fd4d3d96a; ?>
<?php unset($__componentOriginal0d75fdd1ee12f34e798ece0533de749fd4d3d96a); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                            </div>
                        </form>
                    </div>


                <div class="separator separator-solid my-7"></div>


                </div>


                <br><br><br>

                <div class="row">



                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c41010/proftracker-new.na4u.ru/www/resources/views/orgunits/personal_quiz.blade.php ENDPATH**/ ?>