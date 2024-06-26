<?php
require_once __DIR__.'/partials/_header.php';
?>
<body>
<?php
require_once __DIR__.'/partials/_nav.php';
?>
<!-- Edit Post -->
<div>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
            <div class="mb-4">
                <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
                    Edit Post
                </h1>
            </div>

            <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                <form method="POST" action="/post/update">
                    <!-- Title -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700" for="title">
                            Title
                        </label>

                        <input
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="email" placeholder="180" value="<?php echo $post->title; ?>" />
                    </div>
                    <!-- Slug -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700" for="slug">
                            Slug
                        </label>

                        <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="slug" placeholder="180" value="<?php echo $post->slug; ?>" />
                    </div>
                    <!-- Description -->
                    <div class="mt-4">
                        <label class="block text-sm font-bold text-gray-700" for="body">
                            Body
                        </label>
                        <textarea name="description"
                                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                  rows="4" placeholder="400"><?php echo $post->body; ?></textarea>
                    </div>

                    <!-- Thumbnail -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700" for="thumbnail">
                            Thumbnail
                        </label>

                        <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="file" name="thumbnail" value="<?php echo $post->thumbnail; ?>"/>
                    </div>

                    <div class="flex items-center justify-start mt-4 gap-x-2">
                        <button type="submit"
                                class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                            Update
                        </button>
                        <button type="submit"
                                class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                            Cancel
                        </button>
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