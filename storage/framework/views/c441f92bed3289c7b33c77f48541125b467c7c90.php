

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

                        <form action="<?php echo e(route('orgunits.personal_quiz_send', $orgunit)); ?>" enctype="multipart/form-data" method="post">
                            <?php echo csrf_field(); ?>

                           <?php $__currentLoopData = @$orgunit->personal_quiz["quiz_question_text"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pos=>$q_text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                               <?php if($q_text!=""): ?>
                                <div class="d-flex align-items-center justify-content-center mt-2" style="padding-top:25px;border:1px solid black;border-radius:5px;">
                                    <table>

                                        <tr><td colspan="8" align="center">

                                                <?php if(@$orgunit->personal_quiz["photo_link"][$pos]!=""): ?>
                                                    <a href="<?php echo e(@$orgunit->personal_quiz["photo_link"][$pos]); ?>" target="_blank">
                                                        <img src="<?php echo e(@$orgunit->personal_quiz["photo_link"][$pos]); ?>" width="100">
                                                    </a>
                                                    <br>
                                                <?php endif; ?>


                                                    <?php if(@$orgunit->personal_quiz["video_link"][$pos]!=""): ?>
                                                        <iframe width="600" scrolling="no" height="700" frameborder="0" style="width: 600px; height: 280px;" src="<?php echo e(@$orgunit->personal_quiz["video_link"][$pos]); ?>"></iframe>

                                                        <br><Br>
                                                    <?php endif; ?>
                                            </td></tr>

                               <tr style="padding:20px;">
                                   <td valign="top"><h2><?php echo e($pos); ?></h2>.</td><td width="15"></td>
                                   <td valign="top">

                                   </><td width="5"></td>
                                   <td valign="top">

                                      <h3> <?php echo @$orgunit->personal_quiz["quiz_question_text"][$pos]; ?></h3>

                                       <br>
                                   </td><td width="25"></td>
                                   <td valign="top">

                                       <?php
                                           $quiz_variants=explode("\r\n",$orgunit->personal_quiz["quiz_variants"][$pos]);
                                       ?>



                                       <?php if(@$orgunit->personal_quiz["type_quiz_question"][$pos]=="one_variant"): ?>

                                         <?php $__currentLoopData = $quiz_variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var_pos=>$quiz_var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                               <input type="radio" id="answer_<?php echo e($var_pos); ?>_<?php echo e($pos); ?>" name="answer[<?php echo e($pos); ?>]" value="<?php echo e($quiz_var); ?>">
                                           <label for="answer_<?php echo e($var_pos); ?>_<?php echo e($pos); ?>"> <?php echo e($quiz_var); ?></label>
                                            <br>

                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                       <?php endif; ?>



                                       <?php if(@$orgunit->personal_quiz["type_quiz_question"][$pos]=="many_variants"): ?>

                                           <?php $__currentLoopData = $quiz_variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var_pos=>$quiz_var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                               <input type="checkbox" id="answer_<?php echo e($var_pos); ?>_<?php echo e($pos); ?>" name="answer[<?php echo e($pos); ?>]" value="<?php echo e($quiz_var); ?>">
                                               <label for="answer_<?php echo e($var_pos); ?>_<?php echo e($pos); ?>"> <?php echo e($quiz_var); ?></label>
                                               <br>

                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                       <?php endif; ?>


                                       <?php if(@$orgunit->personal_quiz["type_quiz_question"][$pos]=="text"): ?>

                                               <input type="text" id="answer_<?php echo e($var_pos); ?>_<?php echo e($pos); ?>" name="answer[<?php echo e($pos); ?>]">
                                               <br>

                                       <?php endif; ?>


                                   </td><td width="25"></td> </tr>


                                        <tr><td></td><td></td><td></td><td></td><td><Br><br></td><td></td><td></td><td></td></tr>
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

                    <div class="col-md-3">
                        <div>
                            <a href="<?php echo e($orgunit->answer_bucklet); ?>" target="_blank">
                                <h3 class="font-size-h3 font-weight-bold font-hero mb-4">Правильные ответы</h3>
                            </a>
                            <br>

                        </div>
                        <div>
                            <h3 class="font-size-h3 font-weight-bold font-hero mb-4">О компании</h3>
                            <div><?php echo $orgunit->about_orgunit; ?></div>
                        </div>
                        <div class="separator separator-solid my-7"></div>
                        <div>
                            <h3 class="font-size-h3 font-weight-bold font-hero mb-4">Контакты</h3>
                           <?php echo $orgunit->contacts; ?>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/proftracker/resources/views/orgunits/personal_quiz.blade.php ENDPATH**/ ?>