<?php

return array(
    'title'=>'Projects',
    'single'=>'project',
    'model' => 'App\Models\Project',
    'columns'=>array('id','title','opisanie',
        'img'=>['type'=>'image',
              'output'=>"<img src='/media/images/project/(:value)' width='100px'>" ],
     'created_at',),




    'filters'=>array('size', 'title'),
    'edit_fields'=>array(
        'title',
        'img'=>['type'=>'image', 'location'=>public_path() . '/media/images/project/',
            'sizes' => array(
                array(65, 57, 'crop', public_path() . '/media/images/project/small/', 100),)],


        'opisanie',
        'size',
        'roofing',
        'cover',
        'room',
        'fundament',
        'wall',
        'overlap',
        'socle',
        'finishing',
        'footer',
        'garage'=>['type'=>'enum','options' => array('есть', 'нет')],
        'level',
        'mansard'=>['type'=>'enum','options' => array('есть', 'нет')],
        'sauna'=>['type'=>'enum','options' => array('есть', 'нет')],

    )

);
