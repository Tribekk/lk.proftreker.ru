<!DOCTYPE html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <?php echo $__env->make('layout.partials._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<?php echo $__env->make('layout.partials._header-mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">
        <?php echo $__env->make('layout.partials._aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <?php echo $__env->make('layout.partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <?php echo $__env->make('layout.partials._subheader.subheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <?php echo $__env->make('layout.partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>

<?php echo $__env->make('layout.partials._extras.offcanvas.quick-user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layout.partials._extras.chat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layout.partials._extras.scrolltop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>





<?php echo $__env->make('layout.partials.kt-settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="<?php echo e(asset('plugins/global/plugins.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/custom/prismjs/prismjs.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('js/scripts.bundle.js')); ?>"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)-->
<script src="<?php echo e(asset('plugins/custom/fullcalendar/fullcalendar.bundle.js')); ?>"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="<?php echo e(asset('js/pages/widgets.js')); ?>"></script>
<!--end::Page Scripts-->
<script src="<?php echo e(asset('js/bootstrap-datepicker.ru.min.js')); ?>" charset="UTF-8"></script>
<script src="<?php echo e(asset('js/bootstrap-datetimepicker.ru.js')); ?>"></script>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/custom/summernote/summernote.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/custom/summernote/lang/summernote-ru-RU.min.js')); ?>"></script>
<?php echo \Livewire\Livewire::scripts(); ?>


<?php echo $__env->yieldPushContent('scripts'); ?>

<script>
    window.addEventListener('show-notification', event => {
        toastr[event.detail.type](event.detail.message);
    })

    window.addEventListener('show-message', event => {
        Swal.fire({
            icon: event.detail.icon,
            title: event.detail.title,
            text: event.detail.text,
            confirmButtonColor: 'var(--success)',
            confirmButtonText: 'Закрыть',
        }).then(_ => {
            if(event.detail.redirect) {
                window.location.href = event.detail.redirect;
            }
        });
    })

</script>
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym"); ym(86712929, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, trackHash:true }); </script> <!-- /Yandex.Metrika counter -->
</body>

</html>
<?php /**PATH /var/www/proftracker/resources/views/layout/base.blade.php ENDPATH**/ ?>