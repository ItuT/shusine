This is my setup. It's worked great for me for small - very large projects (including a social network).
These folders would all live within my main application folder:

config - contains custom PHP config files
css - contains the project's CSS files
helpers - contains 'helper' files (each file is a collection of functions)
images - contains the project's images
js - contains the project's Javascript files
lib - contains PHP classes specific to the project
modules - My MVC framework allows packaging site sections as modules
blog - An example module
controllers - contains the controllers for the module
models - contains the models for the module
views - contains the views for the module
views - contains views that should be globally accessible (page header, footer, etc)
All the directories could obviously contain sub-folders that would further organize your files. For example, the 'css' folder could have sub-folders named 'web' and 'mobile'. The 'images' folder could contain a 'user_uploaded' folder which could then contain`'profile'. And of course you can add folders as you see fit, in one project I have a folder called 'uploaders' which just contains stand-alone upload scripts.

I also use convenience methods which help construct the filenames of what I want to load. For example, my loadView() will look for the view file in the current module directory, or if you pass an optional $module argument, it will look specifically within that module's folder