Example
-------
* HelloWorld
~~~~
$ php App/index.php HelloWorld -h
---
Usage: App/index.php [-h, --help]

Optional Arguments:
	-h, --help
        Prints a usage statement
~~~~

~~~~
$ php App/index.php HelloWorld    
---
Hello World...!!!
~~~~

* Echo
~~~~
$ php App/index.php Echo -h
---
Usage: App/index.php [-h, --help] [-m message, --message message]

Optional Arguments:
	-h, --help 
	    Prints a usage statement
	-m message, --message message 
	    print a message
~~~~

~~~~
$ php App/index.php Echo -m Hola    
---
Hola
~~~~

