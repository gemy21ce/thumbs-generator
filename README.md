# thumbs-generator
Images thumbs generator, like facebook images thumps generator, generates cached thumps.

Usage:
call the liberary main page: thumb with the image file location as src parameter as follows:
http://localhost/thumbs/thumb.php?src=http://localhost/media/flowing_rock.jpg

This will call the image with the original size.

To call a customized size you can call the thumb.php with the required size as follows:

http://localhost/thumbs/thumb.php?src=http://localhost/media/flowing_rock.jpg&width=100&height=100&format=jpg&crop=1

id parameter is used to set wich location should the lib save the generated thumbs.
this id is compined with the config: BASE_URL
define ('BASE_URL','C:\xampp\htdocs\img_uploads');

if it's on the same server you should provide the location of the images you're loading from.