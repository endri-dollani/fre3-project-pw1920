<?php $__env->startComponent('mail::message'); ?>

# Thank you for your message

<strong>Name: </strong> <?php echo e($data['name']); ?>

<br>
<strong>Email: </strong> <?php echo e($data['email']); ?>

<br>
<strong>Subject:</strong>
<?php echo e($data['subject']); ?>

<br>
<strong>Message:</strong>
<br>
<?php echo e($data['message']); ?>

<br>
<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\tp\resources\views/emails/contact/contact-form.blade.php ENDPATH**/ ?>