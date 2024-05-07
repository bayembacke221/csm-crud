<?php

/**
Description: C'est
 * un fichier de démarrage qui permet de créer les tables de la base de données.
 */


use App\Request;
use App\Router;


try {
    CreateUsersTable::usersTable(connect());
    CreatePostsTable::postsTable(connect());
} catch (Exception $e) {
}

try {
    Router::load('routes.php')->show(Request::uri(), Request::method());
} catch (Exception $e) {
}

