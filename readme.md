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
Run locally at `/calc_mk2`

## Pages changed from default mk2
- src/Controller/calc_mk2Controller.php
- src/Entity/calculator.php
- templates/calc_mk2.html.twig
- config/routes.yaml

## With more time

Most time was spent trying and failing to get twig blocks to work. Ideally the bootstrap parts, calulator js, and calculator html would be in their own template blocks.

The continual operations also continue after the equals press which is not intuitive.

Would also ideally add numpad inputs.