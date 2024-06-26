<?php
require_once __DIR__.'/partials/_header.php';
?>
<body class="flex items-center justify-center
			min-h-screen bg-blue-200">
<div class=" bg-white rounded-lg shadow-md p-10
	transition-transform w-96 text-center">
    <h1 class="text-green-600 text-3xl">
        Posting Login
    </h1>
    <h3 class="text-lg">
        Enter your login credentials
    </h3>
    <form action="">
        <label for="first" class="block mt-4 mb-2 text-lef
			t text-gray-700 font-bold">Username:</label>
        <input type="text" id="first" name="first"
               placeholder="Enter your Username"
               class="block w-full mb-6 px-4 py-2 border border
				-gray-300 rounded-md focus:outline-none
				focus:border-green-400" required>

        <label for="password" class="block mb-2 text-left
			text-gray-700 font-bold">Password:</label>
        <input type="password" id="password" name="password"
               placeholder="Enter your Password"
               class="block w-full mb-6 px-4 py-2 border
				border-gray-300 rounded-md focus:outline-none
				focus:border-green-400" required>

        <div class="flex justify-center items-center">
            <button type="submit"
                    class="bg-green-600 text-white py-3 px-6 rounded
					-md cursor-pointer transition-colors
					duration-300 hover:bg-green-500">
                Submit
            </button>
        </div>
    </form>
    <p class="mt-4">Not registered?
        <a href="#" class="text-blue-500
			hover:underline">Create an account</a>
    </p>
</div>
</body>

<?php
require_once __DIR__.'/partials/_footer.php';
?>

