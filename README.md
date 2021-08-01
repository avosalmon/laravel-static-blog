It is great to build your site as a static site like [JAMstack](https://jamstack.org/), however, you need to learn how to use static site generator such as Next.js or Gatsby.js as well as headless CMS.

If you are familiar with Laravel, you can build your Laravel app as a static site and deploy it to CDN like Netlify without writing a single line of JavaScript.

This repository is a sample blog app powered by Laravel which is deployed as a static site [here](https://laravel-static-blog.netlify.app/).

## Tech stack
- PHP 8
- Laravel 8
- [Laravel Sail](https://laravel.com/docs/8.x/sail) for local Docker environemnt
- [Wink](https://github.com/themsaid/wink) for admin panel
- [Laravel Export](https://github.com/spatie/laravel-export)
- [Tailwind CSS](https://tailwindcss.com/)
- [Netlify CLI](https://docs.netlify.com/cli/get-started/)

## Setup
Copy env file.
```sh
cp .env.example .env
```

Start docker containers.
```sh
$ sail up -d
```

Install dependencies.
```sh
$ sail composer install
$ sail npm install
```

Migrate database tables.
```sh
$ sail artisan migrate
```

By default, this app uses the `s3` disk. So, add your AWS credentials as environment variables listed [here](https://github.com/avosalmon/laravel-static-blog/blob/main/.env.example#L39-L43).

If you want to use the `public` disk, create a [symbolic link](https://laravel.com/docs/8.x/filesystem#the-public-disk) with the command below.
```sh
$ sail artisan storage:link
```

Build assets.
```sh
$ sail npm run dev
```

Now you can access the app at http://localhost.
Admin panel is powered by [Wink](https://github.com/writingink/wink) and accessible at http://localhost/wink.

## Deploy the entire site as a static site to Netlify
You can export the entire site (excluding the admin panel) as a static site using [spatie/laravel-export](https://github.com/spatie/laravel-export) and deploy to Netlify. It's blazing fast and scalable 🚀.

In order to deploy your site to Netlify, you need to create a site on Netlify and add the [NETLIFY_SITE_ID](https://github.com/avosalmon/laravel-static-blog/blob/main/.env.example#L54-L55) and [NETLIFY_AUTH_TOKEN](https://github.com/avosalmon/laravel-static-blog/blob/main/.env.example#L56-L57) environment variables.

Once you've added thoese environment variables, run the command below.
```sh
$ sail artisan export
```

This command will build production assets, export the entire site into the `dist` folder, and then deploy the `dist` folder to Netlify. See [config/export.php](https://github.com/avosalmon/laravel-static-blog/blob/main/config/export.php) for more details.
