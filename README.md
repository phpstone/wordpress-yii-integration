# Integrating WordPress and Yii

Run WordPress inside Yii Application, you could show all WordPress content and create custom page or special admin page by Yii  

This base on http://www.yiiframework.com/wiki/322/integrating-wordpress-and-yii-still-another-approach-using-yii-as-the-router-controller/

Testing environment:

WordPress 4.6 
Yii 1.1.17

How to use:

* Download Zip or pull down the repository, copy all files to the webroot.
* Create the folder that will be create by Yii Application but not list here, and change to the right permission. 
* Edit webroot/index.php, specify the path of Yii framework
* Install WordPress as normal and put all WordPress file into webroot folder name as 'wordpress'. If you use the other name, change the path in webroot/index.php at same time
* Change WordPress Address (URL), add path '/wordpress' at end of current setting.
