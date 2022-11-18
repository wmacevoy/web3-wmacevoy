# Laravel Quickstart

This is a run-through of the laravel quickstart, the setup configures the quickstart.  Compared to the description on the laravel page, there are a few changes:

1. The edited files are in ./skeleton and copied to quickstart.  I had to change a `use` path and rename 'routes.php' to 'web.php' for the appliction to work.
2. To re-run setup from sctratch, deleting the quickstart and database, use `./setup --reset`.

## To use

```bash
./setup
```

After this, the quickstart directory should be the effective result of walking through the quickstart at

https://laravel.com/docs/5.1/quickstart

You can run the dev server with

```bash
cd quickstart
php artisan serve
```
