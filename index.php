<?PHP
echo'Hello world!';
require 'vendor/autoload.php';
$app = new\atk4\ui\App('Registration');
$app->initLayout('Centered');
$button = add('Button');
$button->('Add Invoice');
$button->icon = 'plus';
