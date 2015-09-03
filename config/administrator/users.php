<?php
return array(
    'title'=>'Users',
    'single'=>'user',
    'model' => 'App\User',
'columns'=>array('id','name','email'),
    'filters'=>array('id','name','email'),
'edit_fields'=>array('email'=>array('title'=>'email',
                                    'type' =>'text'))
);
