<?php $attributes = $attributes->exceptProps(['listing']); ?>
<?php foreach (array_filter((['listing']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "JobPosting",
    "title": "<?php echo e($listing->title); ?>",
    "description": "<?php echo e(strip_tags($listing->content)); ?>",
    "datePosted": "<?php echo e($listing->created_at->toISOString()); ?>",
    "validThrough": "<?php echo e($listing->created_at->addDays(30)->toISOString()); ?>",
    "hiringOrganization": {
        "@type": "Organization",
        "name": "<?php echo e($listing->company); ?>",
        "logo": "<?php echo e($listing->logo ? asset('storage/'.$listing->logo) : ''); ?>"
    },
    "jobLocation": {
        "@type": "Place",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "<?php echo e($listing->location); ?>"
        }
    },
    "applicationUrl": "<?php echo e(route('listings.apply', $listing->slug)); ?>",
    "skills": [
        <?php $__currentLoopData = $listing->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            "<?php echo e($tag->name); ?>"<?php if(!$loop->last): ?>,<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    ]
}
</script><?php /**PATH C:\Users\Nutzer\Desktop\laravel-job-board.test\resources\views/components/job-schema.blade.php ENDPATH**/ ?>