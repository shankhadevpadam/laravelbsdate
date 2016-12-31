# A laravel Nepali Date (Bikram Sambat Date Conveter & viceversa) package.
A laravel date package which convert AD to BS and viceversa.

#installation
1) In order to install Laravel 5 Laravelbsdate, just add the following to your composer.json. Then run composer update:

```json
"shankhadev/bsdate": "dev-master"
```

2) Open your `config/app.php` and add the following to the `providers` array:

```php
Shankhadev\Bsdate\BsdateServiceProvider::class,
```

3) In the same `config/app.php` and add the following to the `aliases ` array: 

```php
'Bsdate' => Shankhadev\Bsdate\BsdateFacade::class,
```

## Usage

```php
Bsdate::eng_to_nep(2016,12,31); //For converting AD TO BS
Bsdate::nep_to_eng(2073,09,16); //For converting BS TO AD
```
