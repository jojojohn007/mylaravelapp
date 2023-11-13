<?php
namespace App\Views\Composer ;

use App\Models\User; 
use Illuminate\View\View ;
class UserComposer {
public function compose(View $view){
$view->with('user',['name'=>'jojo']);
}
}