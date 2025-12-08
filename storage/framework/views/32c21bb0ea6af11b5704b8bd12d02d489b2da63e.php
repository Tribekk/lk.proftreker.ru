<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.select-city', ['name' => 'question_'.e($questions->firstItem() + $index).'','id' => 'city','url' => ''.e(route('kladr.cities', ['country' => 'rus'])).'','event' => 'setCityQuestion','placeholder' => ''.e(__('Укажите город')).'','selected' => ''.e(optional($question->answers[0]->user(Auth::id()))->value ?? null).'','selectedItemUrl' => '/kladr/cities'])->html();
} elseif ($_instance->childHasBeenRendered('WSursLk')) {
    $componentId = $_instance->getRenderedChildComponentId('WSursLk');
    $componentTag = $_instance->getRenderedChildComponentTagName('WSursLk');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('WSursLk');
} else {
    $response = \Livewire\Livewire::mount('components.select-city', ['name' => 'question_'.e($questions->firstItem() + $index).'','id' => 'city','url' => ''.e(route('kladr.cities', ['country' => 'rus'])).'','event' => 'setCityQuestion','placeholder' => ''.e(__('Укажите город')).'','selected' => ''.e(optional($question->answers[0]->user(Auth::id()))->value ?? null).'','selectedItemUrl' => '/kladr/cities']);
    $html = $response->html();
    $_instance->logRenderedChild('WSursLk', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function () {

            window.livewire.on('setCityQuestion', cityCode => {
                if(cityCode.toString() !== 'undefined') {
                    window.livewire.find('<?php echo e($_instance->id); ?>').call('answerTheQuestion', <?php echo e($question->id); ?>, <?php echo e($question->answers[0]->id); ?>, cityCode);
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/proftracker/resources/views/quiz/_run-quiz/_question-select_city.blade.php ENDPATH**/ ?>