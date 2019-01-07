# Cool and fun test calc

## Assumptions:
- Composer available.
- PHP7.1+ available.

## Installation steps local
```
$ composer create-project symfony/website-skeleton calculatortest
Installing symfony/website-skeleton (v4.2.1.6)
[...]

$ cd calculatortest
$ php bin/console server:run
[OK] Server listening on http://127.0.0.1:8000                                                          
// Quit the server with CONTROL-C.                                                                      
PHP 7.1.5 Development Server started at Mon Jan  7 09:50:50 2019
Listening on http://127.0.0.1:8000
[...]
```

## Pages changed from default
- src/Controller/calcController.php
- templates/calc.html.twig
- config/routes.yaml