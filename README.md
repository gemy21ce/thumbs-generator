# thumbs-generator
Images thumbs generator, like facebook images thumps generator, generates cached thumps.

Usage:
call the liberary main page: thumb with the image file location as src parameter as follows:
http://localhost/thumbs/thumb.php?src=http://localhost/media/flowing_rock.jpg

This will call the image with the original size.

To call a customized size you can call the thumb.php with the required size as follows:

http://localhost/thumbs/thumb.php?src=http://localhost/media/flowing_rock.jpg&width=100&height=100&format=jpg&crop=1

If you are willing to generate a thumb for remote image not hosted on the same media server, in this case the lib will generate thumbs on the server to cache the required size, hence you should required to add 'id' parameter to the request this is which the lib will create a new dir for new cached image.