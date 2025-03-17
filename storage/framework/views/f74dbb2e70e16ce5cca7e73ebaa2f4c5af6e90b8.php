<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.hero','data' => []]); ?>
<?php $component->withName('hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <section class="container px-5 py-12 mx-auto">
        <div class="mb-12">
            <div class="flex flex-wrap justify-center">
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('listings.index', ['tag' => $tag->slug])); ?>"
                        class="inline-block w-1/6 p-2 tracking-wide text-xs font-black title-font border border-indigo-500 uppercase <?php echo e($tag->slug === request()->get('tag') ? 'bg-indigo-500 text-white' : 'bg-white text-indigo-500'); ?> mr-4 mb-4 hover:bg-indigo-500 hover:text-white rounded-md text-center"
                    ><?php echo e($tag->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="mb-12">
            <h2 class="text-2xl font-medium text-gray-900 title-font px-4">Alle Jobs (<?php echo e($listings->count()); ?>)</h2>
        </div>
        <div class="-my-6">
            <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a
                    href="<?php echo e(route('listings.show', $listing->slug)); ?>"
                    class="py-6 px-4 flex flex-wrap md:flex-nowrap border-b border-gray-100 <?php echo e($listing->is_highlighted ? 'bg-yellow-100 hover:bg-yellow-200' : 'bg-white hover:bg-gray-100'); ?>"
                >
                    <div class="md:w-16 md:mb-0 mb-6 mr-4 flex-shrink-0 flex flex-col">
                        <img src="/storage/<?php echo e($listing->logo); ?>" alt="<?php echo e($listing->company); ?> logo" class="w-16 h-16 rounded-full object-cover">
                    </div>
                    <div class="md:w-1/2 mr-8 flex flex-col items-start justify-center">
                        <h2 class="text-xl font-bold text-gray-900 title-font mb-1"><?php echo e($listing->title); ?></h2>
                        <p class="leading-relaxed text-gray-900">
                            <?php echo e($listing->company); ?> &mdash; <span class="text-gray-600"><?php echo e($listing->location); ?></span>
                        </p>
                    </div>
                    <div class="md:flex-grow mr-8 flex items-center justify-start">
                        <?php $__currentLoopData = $listing->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <span class="inline-block ml-2 tracking-wide text-xs font-medium title-font py-0.5 px-1.5 border border-indigo-500 uppercase <?php echo e($tag->slug === request()->get('tag') ? 'bg-indigo-500 text-white' : 'bg-white text-indigo-500'); ?>">
                               <?php echo e($tag->name); ?>

                           </span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <span class="md:flex-grow flex items-center justify-end">
                        <span><?php echo e($listing->created_at->diffForHumans()); ?></span>
                    </span>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\Users\Nutzer\Desktop\Marketingjobsdeutschland.de\resources\views/listings/index.blade.php ENDPATH**/ ?>