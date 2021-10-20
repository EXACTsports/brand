<?php


namespace EXACTSports\BladeComponentLibrary;

use EXACTSports\BladeComponentLibrary\Components\ExampleComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;


class BladeComponentLibraryProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/brand.php', 'brand');
        
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'bcl');

        foreach (File::files(__DIR__.'/../src/Components') as $file) {
            Blade::component('EXACTSports\\BladeComponentLibrary\\Components\\' . $file->getFilenameWithoutExtension(),
                Str::slug(join(' ', preg_split('/(?=[A-Z])/', $file->getFilenameWithoutExtension()))));
        }
    }
}