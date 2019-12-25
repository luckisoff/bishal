<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $models=File::allFiles(app_path('Models'));
        foreach($models as $model)
        {
            $name=strtolower(substr($model->getFilename(),0,-4));
            Permission::firstOrCreate(['name'=>'view '.$name,'guard_name'=>'web']);
            Permission::firstOrCreate(['name'=>'create '.$name,'guard_name'=>'web']);
            Permission::firstOrCreate(['name'=>'update '.$name,'guard_name'=>'web']);
            Permission::firstOrCreate(['name'=>'delete '.$name,'guard_name'=>'web']);
        }
    }
}
