
<?php
require __DIR__.'/../../views/partials/_header.php';
?>
<body>
<div class="flex overflow-hidden h-screen items-center justify-center">

    <div class="px-4 lg:py-12">

        <div class="lg:gap-4 lg:flex">
            <div
                class="flex flex-col items-center justify-center md:py-24 lg:py-32"
            >
                <h1 class="font-bold text-amber-600 text-9xl">404</h1>
                <p
                    class="mb-2 text-2xl font-bold text-center text-gray-800 md:text-3xl"
                >
                    <span class="text-red-500">Oops!</span> Page not found
                </p>
                <p class="mb-8 text-center text-white md:text-lg">
                    The page you’re looking for doesn’t exist.
                </p>
                <a
                    class="px-6 py-2 text-sm font-semibold text-blue-800 bg-blue-100"
                >Go home</a
                >
            </div>

        </div>
    </div>

</div>
</body>

<?php
require __DIR__.'/../../views/partials/_footer.php';
?>