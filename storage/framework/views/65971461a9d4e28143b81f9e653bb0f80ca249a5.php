<section class="text-gray-600 body-font border-b border-gray-100">
    <div class="container mx-auto flex flex-col px-5 pt-16 pb-8 justify-center items-center">
        <div class="w-full md:w-2/3 flex flex-col items-center text-center">
        <h1 class="text-4xl tracking-tight font-extrabold text-black sm:text-5xl md:text-6xl">Top Marketing Jobs in Deutschland</h1>
            <p class="mb-8 leading-relaxed">Auf der Suche nach der nächsten spannenden Herausforderung im Marketing? Egal, ob Sie aktiv nach einer neuen Position suchen oder sich einfach über aktuelle Karrieremöglichkeiten informieren möchten – bei uns finden Sie eine sorgfältig kuratierte Auswahl an Marketing-Positionen. Von Start-ups bis zu etablierten Unternehmen, von München bis Hamburg, von Digital Marketing bis Brand Management: Entdecken Sie vielfältige Jobmöglichkeiten, die zu Ihren Karrierezielen passen.</p>
            <form class="flex w-full justify-center items-end" action="<?php echo e(route('listings.index')); ?>" method="get">
                <div class="relative mr-4 w-full lg:w-1/2 text-left">
                    <input type="text" id="s" name="s" value="<?php echo e(request()->get('s')); ?>" class="w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Suchen</button>
            </form>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\Nutzer\Desktop\Marketingjobsdeutschland.de\resources\views/components/hero.blade.php ENDPATH**/ ?>