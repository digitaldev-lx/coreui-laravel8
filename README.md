- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- It is important set in __.env__ the host you will use in the global variable __APP_DOMAIN__
- You should create a local vhost with name __saas.base.test__ if you don't want to change config settings.
- Run __composer install__ and  __npm run dev__
- Run __php artisan key:generate__
- Run __php artisan storage:link__
- Fill in `.env` with your Stripe credentials
- Add your Stripe plan IDs in `roles` DB table directly or in Seed file
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- Add your Mailtrap or another mail service credentials to __.env__ file
- You must have installed __Redis__ and set variables in __.env__ file, otherwise you can use the following configuration for Cache, Queues and Session:

```
CACHE_DRIVER=file
QUEUE_CONNECTION=database
SESSION_DRIVER=file
SESSION_LIFETIME=120
QUEUE_FAILED_DRIVER=database-uuids
```

- Run __php artisan queue:work__ 
- That's it: launch the main URL.
- You can click Login to enter with admin credentials __admin@admin.com__ - __password__
- Or you can click Register / TRY NOW - you will be assigned a Free Plan until you choose the plan to upgrade
