<div class="px-2">
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label for="recommend" class="font-size-h6 font-weight-bolder text-dark">Рекомендация</label>
                <div class="radio-inline">
                    <label id="recommend" class="radio font-size-sm-h4 font-size-lg my-2 d-flex align-items-start align-content-start">
                        <input type="radio" id="recommend" name="recommend" value="recommend" wire:model.defer="result.recommend">
                        <span class="mr-4 min-w-20px w-20px h-20px min-h-20px"></span>Рекомендован
                    </label>
                    <label id="recommend" class="radio font-size-sm-h4 font-size-lg my-2 d-flex align-items-start align-content-start">
                        <input type="radio" id="recommend" name="recommend" value="not_recommend" wire:model.defer="result.recommend">
                        <span class="mr-4 min-w-20px w-20px h-20px min-h-20px"></span>Не рекомендован
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="form-group">
                <label for="agree" class="font-size-h6 font-weight-bolder text-dark">Согласие</label>
                <div class="radio-inline">
                    <label id="agree" class="radio font-size-sm-h4 font-size-lg my-2 d-flex align-items-start align-content-start">
                        <input type="radio" id="agree" name="agree" value="agree" wire:model.defer="result.agree">
                        <span class="mr-4 min-w-20px w-20px h-20px min-h-20px"></span>Согласны
                    </label>
                    <label id="recommend" class="radio font-size-sm-h4 font-size-lg my-2 d-flex align-items-start align-content-start">
                        <input type="radio" id="agree" name="agree" value="not_agree" wire:model.defer="result.agree">
                        <span class="mr-4 min-w-20px w-20px h-20px min-h-20px"></span>Не согласны
                    </label>
                    <label id="recommend" class="radio font-size-sm-h4 font-size-lg my-2 d-flex align-items-start align-content-start">
                        <input type="radio" id="agree" name="agree" value="think" wire:model.defer="result.agree">
                        <span class="mr-4 min-w-20px w-20px h-20px min-h-20px"></span>Думают
                    </label>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="agree" class="font-size-h6 font-weight-bolder text-dark">Оценка</label>
                <div class="d-flex">
                    <?php $__empty_1 = true; $__currentLoopData = $consultation->feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="font-size-sm-h4 font-size-lg my-2 mr-4 d-flex align-items-center">
                            <?php if($feedback->user_id == $consultation->child_id): ?> Ребенок <?php else: ?> Родитель <?php endif; ?>
                            <i class="mx-2 las la-<?php echo e($feedback->emotion); ?> <?php if($feedback->emotion == 'meh'): ?> font-blue <?php endif; ?> <?php if($feedback->emotion == 'frown'): ?> text-warning <?php endif; ?> <?php if($feedback->emotion == 'smile'): ?> font-alla <?php endif; ?>" style="font-size: 30px;"></i>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="font-size-sm-h4 font-size-lg my-2">Оценку еще не выставили</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <?php if($consultation->review): ?>
         <?php if (isset($component)) { $__componentOriginal92dd43559e887c5eb812495f8cc84efb27f8e842 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\TextArea::class, ['title' => 'Отзыв '.e($consultation->child_id ==  $consultation->review->user_id ? 'ребенка' : 'родителя').'','readOnly' => true,'name' => 'review','id' => 'review','value' => ''.e($consultation->review->text).'']); ?>
<?php $component->withName('inputs.text-area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal92dd43559e887c5eb812495f8cc84efb27f8e842)): ?>
<?php $component = $__componentOriginal92dd43559e887c5eb812495f8cc84efb27f8e842; ?>
<?php unset($__componentOriginal92dd43559e887c5eb812495f8cc84efb27f8e842); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
    <?php endif; ?>

    <div class="separator separator-solid my-7"></div>

    <div class="accordion accordion-light accordion-toggle-arrow" id="accordionTypes" wire:ignore.self>
        <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div class="card-header">
                    <div class="card-title collapsed font-weight-bold font-size-h4 mb-6" data-toggle="collapse" data-target="#<?php echo e($this->type($value)->code); ?>" wire:ignore.self>
                        <?php echo e($this->type($value)->title); ?>

                    </div>
                    <div id="<?php echo e($this->type($value)->code); ?>" class="collapse" data-parent="#accordionTypes" wire:ignore.self>
                        <div class="card-body">
                            <?php if($this->type($value)->code != 'results'): ?>
                                <?php echo $__env->make("consultations._report.report_type_{$this->type($value)->code}", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                <div class="separator separator-solid my-7"></div>
                            <?php endif; ?>

                             <?php if (isset($component)) { $__componentOriginal92dd43559e887c5eb812495f8cc84efb27f8e842 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\TextArea::class, ['title' => 'Комментарии, соответствие типажу для заказчика','rows' => '6','model' => 'values.'.e($index).'.comment','name' => 'values['.e($index).'][comment]','id' => 'values.'.e($index).'.comment']); ?>
<?php $component->withName('inputs.text-area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal92dd43559e887c5eb812495f8cc84efb27f8e842)): ?>
<?php $component = $__componentOriginal92dd43559e887c5eb812495f8cc84efb27f8e842; ?>
<?php unset($__componentOriginal92dd43559e887c5eb812495f8cc84efb27f8e842); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                             <?php if (isset($component)) { $__componentOriginal92dd43559e887c5eb812495f8cc84efb27f8e842 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\TextArea::class, ['title' => 'Рекомендации подростку и родителям по итогам консультации','rows' => '6','model' => 'values.'.e($index).'.comment_for_result','name' => 'values['.e($index).'][comment_for_result]','id' => 'values.'.e($index).'.comment_for_result']); ?>
<?php $component->withName('inputs.text-area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal92dd43559e887c5eb812495f8cc84efb27f8e842)): ?>
<?php $component = $__componentOriginal92dd43559e887c5eb812495f8cc84efb27f8e842; ?>
<?php unset($__componentOriginal92dd43559e887c5eb812495f8cc84efb27f8e842); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                             <?php if (isset($component)) { $__componentOriginal6f417fce8705f24be4ffdd0013eba9d6e3da039f = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\InputTextV::class, ['title' => 'Соответствие типажу','model' => 'values.'.e($index).'.conformity_type','name' => 'values['.e($index).'][conformity_type]','id' => 'values.'.e($index).'.conformity_type']); ?>
<?php $component->withName('inputs.input-text-v'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal6f417fce8705f24be4ffdd0013eba9d6e3da039f)): ?>
<?php $component = $__componentOriginal6f417fce8705f24be4ffdd0013eba9d6e3da039f; ?>
<?php unset($__componentOriginal6f417fce8705f24be4ffdd0013eba9d6e3da039f); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="button-group mt-12">
        <button class="btn btn-success font-weight-bold font-size-h6" wire:click.prevent="save">
            <i class="la la-save"></i>
            Сохранить
        </button>
    </div>
</div>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/livewire/consultations/report.blade.php ENDPATH**/ ?>