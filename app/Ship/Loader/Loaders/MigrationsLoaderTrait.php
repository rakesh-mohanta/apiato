<?php

namespace App\Ship\Loader\Loaders;

use App;
use File;

/**
 * Class MigrationsLoaderTrait.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 */
trait MigrationsLoaderTrait
{

    /**
     * @param $containerName
     */
    public function loadMigrationsFromContainers($containerName)
    {
        $containerMigrationDirectory = base_path('app/Containers/' . $containerName . '/Data/Migrations');

        $this->loadMigrations($containerMigrationDirectory);
    }

    /**
     * @param $portFolderName
     */
    public function loadMigrationsFromShip($portFolderName)
    {
        $portMigrationDirectory = base_path('app/Ship/' . $portFolderName . '/Data/Migrations');

        $this->loadMigrations($portMigrationDirectory);
    }

    /**
     * @param $directory
     */
    private function loadMigrations($directory)
    {
        if (File::isDirectory($directory)) {

            App::afterResolving('migrator', function ($migrator) use ($directory) {
                foreach ((array)$directory as $path) {
                    $migrator->path($path);
                }
            });

        }
    }

}