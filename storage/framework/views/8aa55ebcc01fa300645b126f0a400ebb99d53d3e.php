<script type="text/javascript">

    // Confirm Form Submit Modal
    $('<?php echo e($formTrigger); ?>').on('show.bs.modal', function (e) {
        var message = $(e.relatedTarget).attr('data-message');
        var title = $(e.relatedTarget).attr('data-title');
        var form = $(e.relatedTarget).closest('form');
        $(this).find('.modal-body p').text(message);
        $(this).find('.modal-title').text(title);
        $(this).find('#confirm').data('form', form);
    });
    $('<?php echo e($formTrigger); ?>').find('#confirm').on('click', function(){
        $(this).data('form').submit();
    });

</script>
<?php /**PATH E:\WORK(2022)\SuzukiWork\11-3(Laravel)\WORK\laravel-auth\vendor\jeremykenedy\laravel-logger\src/resources/views//scripts/confirm-modal.blade.php ENDPATH**/ ?>