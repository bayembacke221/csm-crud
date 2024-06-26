<?php
require_once __DIR__.'/partials/_header.php';
?>
<body>
<?php
require_once __DIR__.'/partials/_nav.php';
?>
<!-- Create Post -->
<div>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
            <div class="mb-4">
                <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
                    Create Post
                </h1>
            </div>

            <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                <form  id="createPostForm" method="POST" action="/posts/store" enctype="multipart/form-data">
                    <!-- Title -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700" for="title">
                            Title
                        </label>

                        <input
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="title" placeholder="180" />
                    </div>
                    <!-- Slug -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700" for="slug">
                            Slug
                        </label>

                        <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="slug" placeholder="180" />
                    </div>

                    <!-- Body -->
                    <div class="mt-4">
                        <label class="block text-sm font-bold text-gray-700" for="body">
                            Body
                        </label>
                        <textarea name="body"
                                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                  rows="4" placeholder="400"></textarea>
                    </div>
                    <!-- Thumbnail -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700" for="thumbnail">
                            Thumbnail
                        </label>

                        <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="file" name="thumbnail" />
                        <?php
                        if ($imgUrl = getSession('imgUrl')) {
                            ?>
                            <img src="<?php echo $imgUrl;?>" alt="" width="120"/>
                        <?php
                        }
                        ?>
                    </div>

                    <div class="flex items-center justify-start mt-4 gap-x-2">
                        <button type="submit" class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300" id="saveButton">
                            Save
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
<script>
    $(document).ready(function() {
        $('#createPostForm').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: '/posts/store',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Afficher le message de succès avec Toastr
                    toastr.success('Post created successfully');

                    // Réinitialiser le formulaire si nécessaire
                    $('#createPostForm')[0].reset();
                },
                error: function(xhr, status, error) {
                    // Gérer les erreurs si nécessaire
                    console.error(error);
                }
            });
        });
    });
</script>
<!-- Toastr -->
<script type='text/javascript'>
    <?php
    if (isset($_SESSION['success'])) { ?>
    toastr.success('<?php echo getSession('success'); ?>');
    <?php
    unsetSession('success');

    }
    ?>
</script>
</body>
<?php
require_once __DIR__.'/partials/_footer.php';
?>
