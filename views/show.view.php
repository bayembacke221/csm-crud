<?php
require_once __DIR__.'/partials/_header.php';
?>
    <body>
<?php
require_once __DIR__.'/partials/_nav.php';
?>
<div>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">

        <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">

            <div class="mb-4">
                <h1 class="font-serif text-3xl font-bold underline decoration-gray-400"> Post Show</h1>
            </div>

            <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                <form method="POST" action="#">
                    <!-- Title -->
                    <div>
                        <h3 class="text-2xl font-semibold"><?php echo $post->title?></h3>
                        <div class="flex items-center mb-4 space-x-2">
                            <span class="text-xs text-gray-500"> <?php echo $post->created_at ?></span><span class="text-xs text-gray-500"><?php echo $post->slug ?></span>
                        </div>
                        <p class="text-base text-gray-700"><?php echo $post->body ?></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    </body>
<?php
require_once __DIR__.'/partials/_footer.php';
?>
