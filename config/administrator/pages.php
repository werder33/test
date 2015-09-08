<?php
return array(
  'title' => 'pages',
    'single' => 'images',
    'model' => 'App\Models\Page',
    'columns' => ['id','project_id',
        'main_image' =>
            ['relationship' => 'project',
            'title' => 'main-img',
            'select' => "img",
            'output' => "<img src='/media/images/project/(:value)' width='200px'>"],
        'images' => ['type'=>'image',
            'output'=>"<img src='/media/images/project/(:value)' width='100px'>" ]],

  'filters'=>['project_id'],
  'edit_fields' => ['images'=> ['type'=>'image',
                                'location'=>public_path() . '/media/images/project/',],
                    'project' => ['type' => 'relationship',
                                    'title' => 'small-img',
                                    'name_field' => 'id'],],


);