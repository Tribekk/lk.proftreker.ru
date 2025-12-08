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
                            <img alt="<?php echo e($orgunit->title); ?>" src="<?php echo e(asset($orgunit->logoUrl)); ?>">

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


                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h3>Поздравляем!</h3>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h3>Ваш результат <?php echo e($result); ?>%!</h3>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                           <br>
                             <?php if (isset($component)) { $__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\ButtonLink::class, ['type' => 'btn-outline-success','link' => ''.e(route('orgunits.personal_quiz', $orgunit)).'','title' => ''.e(__('Пройти КВИЗ еще раз!')).'']); ?>
<?php $component->withName('inputs.button-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f)): ?>
<?php $component = $__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f; ?>
<?php unset($__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                        </div>


                    </div>


                    <div class="separator separator-solid my-7"></div>


                </div>


                <br><br><br>

                <div class="row">
                    <div class="accordion" id="accordionExample" style="width:100%">
                        <div class="accordion-item">
                            <h1 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Правильные ответы
                                </button>
                            </h1>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php $__currentLoopData = @$orgunit->personal_quiz["quiz_question_text"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pos=>$q_text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <?php if($q_text!="" &&  array_key_exists($pos, $questions_correct_answers)): ?>
                                                <div class="d-flex align-items-center justify-content-center mt-2 quiztitletext" style="padding-top:25px;border:1px solid black;border-radius:5px;">
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
                                                            <td valign="top" style="font-size: 1rem;"><?php echo e($pos); ?>.</td>

                                                            <td valign="top">
                                                                <?php
                                                                    $html_no_rn = str_replace("\r\n", '', $orgunit->personal_quiz["quiz_question_text"][$pos]);
                                                                    $cleanHtml = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $html_no_rn);
                                                                ?>
                                                                <div><?php echo $cleanHtml; ?></div>
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

                                                                        <input type="radio" id="answer_<?php echo e($var_pos); ?>_<?php echo e($pos); ?>" name="answer[<?php echo e($pos); ?>]" value="<?php echo e($quiz_var); ?>" <?php if($quiz_answers[$pos] == $quiz_var): ?> checked <?php endif; ?> disabled>
                                                                        <label for="answer_<?php echo e($var_pos); ?>_<?php echo e($pos); ?>" <?php if($quiz_answers[$pos] == $quiz_var): ?> style="color:lightgreen" <?php endif; ?>> <?php echo e($quiz_var); ?></label>
                                                                        <br>

                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                <?php endif; ?>

                                                                <?php if(@$orgunit->personal_quiz["type_quiz_question"][$pos]=="many_variants"): ?>

                                                                    <?php $__currentLoopData = $quiz_variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var_pos=>$quiz_var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php
                                                                            $quiz_answers_pos_arr = explode("\r\n", $quiz_answers[$pos]);
                                                                        ?>

                                                                        <input type="checkbox" id="answer_<?php echo e($var_pos); ?>_<?php echo e($pos); ?>" name="answer[<?php echo e($pos); ?>]" value="<?php echo e($quiz_var); ?>" disabled="disabled" <?php if(in_array($quiz_var, $quiz_answers_pos_arr)): ?> checked <?php endif; ?>>
                                                                        <label for="answer_<?php echo e($var_pos); ?>_<?php echo e($pos); ?>" <?php if(in_array($quiz_var, $quiz_answers_pos_arr)): ?> style="color:lightgreen" <?php endif; ?>> <?php echo e($quiz_var); ?></label>
                                                                        <br>

                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                <?php endif; ?>

                                                                <?php if(@$orgunit->personal_quiz["type_quiz_question"][$pos]=="text"): ?>
                                                                    <input type="text" id="answer_<?php echo e($pos); ?>" name="answer[<?php echo e($pos); ?>]" value="<?php echo e($quiz_variants[0]); ?>" <?php if($quiz_variants[0] === $quiz_answers[$pos]): ?> style="color:lightgreen" <?php endif; ?>>
                                                                    <br>

                                                                <?php endif; ?>

                                                            </td>
                                                        </tr>

                                                    </table>

                                                </div>

                                            <?php endif; ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h1 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    О компании
                                </button>
                            </h1>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p><?php echo e($orgunit->title); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h1 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Контакты
                                </button>
                            </h1>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <h4 class="font-weight-bold">Юридический адрес</h4>
                                                <p>Регион: <?php echo e($orgunit->legal_region_string); ?></p>
                                                <p>Город: <?php echo e($orgunit->legal_city_string); ?></p>
                                                <p>Улица: <?php echo e($orgunit->legal_street_string); ?></p>
                                                <p>Номер дома: <?php echo e($orgunit->legal_house_string); ?></p>
                                            </div>
                                            <div class="col-sm">
                                                <h4 class="font-weight-bold">Фактический адрес</h4>
                                                <p>Регион: <?php echo e($orgunit->fact_region_string); ?></p>
                                                <p>Город: <?php echo e($orgunit->fact_city_string); ?></p>
                                                <p>Улица: <?php echo e($orgunit->fact_street_string); ?></p>
                                                <p>Номер дома: <?php echo e($orgunit->fact_house_string); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




















                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c41010/proftracker-new.na4u.ru/www/resources/views/orgunits/personal_quiz_result.blade.php ENDPATH**/ ?>