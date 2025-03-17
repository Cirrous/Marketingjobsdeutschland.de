<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.job-schema','data' => ['listing' => $listing]]); ?>
<?php $component->withName('job-schema'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['listing' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($listing)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
        
            <div class="mb-12">
                <div class="flex items-center">
                <img src="https://www.getautismactive.com/wp-content/uploads/2021/01/Test-Logo-Circle-black-transparent.png" alt="Logo" class="w-16 h-16 rounded-full object-cover">
                <h1 class="text-3xl font-medium text-gray-900 title-font ml-2"> <?php echo e($listing->company); ?></h1>
                </div>
                <h3>
                    <?php echo e($listing->company); ?> &mdash; <span class="text-gray-600"><?php echo e($listing->location); ?></span>
                </h3>
                <div class="md:flex-grow mr-8 mt-2 flex items-center justify-start">
                    <?php $__currentLoopData = $listing->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="inline-block mr-2 tracking-wide text-indigo-500 text-xs font-medium title-font py-0.5 px-1.5 border border-indigo-500 uppercase"><?php echo e($tag->name); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                
            </div>
            <div class="-my-6">
                <div class="flex flex-wrap md:flex-nowrap">
                    <div class="content w-full md:w-4/6 pr-4 leading-relaxed text-base">
                        <?php echo $listing->content; ?>

                    </div>
                    <div class="w-full md:w-2/6 pl-4 justify-between h-full">
                    <a href="<?php echo e(route('listings.apply', $listing->slug)); ?>" class="block text-center tracking-wide bg-white text-indigo-500 text-sm font-medium title-font py-2 border border-indigo-500 hover:bg-indigo-500 hover:text-white uppercase">https://platzhalter/linkzurbewerbung.com</a>
                    <a class="block text-center my-4 tracking-wide bg-white text-indigo-500 text-sm font-medium title-font py-2 border border-indigo-500 hover:bg-indigo-500 hover:text-white uppercase" href="tel:+491234567890"> +49 (0)123 456 789</a>
                    <iframe width="480" height="300" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:<?php echo e($placeId); ?>&key=<?php echo e($apiKey); ?>"></iframe>
                    <div>
                        <h2 class="text-lg font-medium text-black title-font">Öffnungszeiten:</h2>
                        <p>Mo-Fr: 08:00 - 18:00
                            <br>
                            Sa: 08:00 - 14:00
                            <br>
                            So: Geschlossen
                        </p>
                    </div>
                </div>
        
                    
                
                </div>
            </div>
        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Nutzer\Desktop\laravel-job-board.test\resources\views/listings/show.blade.php ENDPATH**/ ?>