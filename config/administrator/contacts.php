<?php
return array(
'title'=>'Contacts',
    'single'=>'contact',
    'model' => 'App\Models\StaticContent',
    'columns'=>['title','body','updated_at'],
    'edit_fields'=>['title',
                    'body'=>['type'=>'wysiwyg',],
        ],
        'form_width' => 500,
    );