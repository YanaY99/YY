<?PHP
echo'Hello world!';
require 'vendor/autoload.php';
$app = new\atk4\ui\App('Registration');
$app->initLayout('Centered');
$button = $app->add('Button');
$button->set('Add Invoice');
$button->icon = 'plus';
$button->link('https://www.e-klase.lv/lv/');
