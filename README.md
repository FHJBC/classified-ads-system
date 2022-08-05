To create a new symfony project:
```bash
$ symfony new \<project-name\> --version=\<specific-symfony-version-number\> --webapp
```

1. symfony console make:controller HomeController
2. symfony console doctrine:database:create
3. symfony serve -d or symfony console server:start
4. symfony console make:entity
5. symfony console make:migration
6. symfony console doctrine:migrations:migrate

To set up registration and authentication feature:
1. symfony console make:user
2. symfony console make:registration-form


#### To install and configure Bootstrap CSS Framework with Webpack Encore 
```bash
$ composer require encore
$ yarn install
$ yarn add bootstrap
$ yarn add node-sass sass-loader --dev
$ yarn add postcss-loader autoprefixer --dev
```
1. Change the css extension of *assets/styles/app.css* into *app.scss*
2. Update the import in **assets/app.js** from *'./styles/app.css'* to *'./styles/app.scss'*
3. Enable Sass/SCSS support in **webpack.config.js**

To compile assets once:
__$ yarn encore dev__ or __$ yarn encore dev-server__

To recompile assets automatically when files change:
__$ yarn encore dev --watch__

To create a production build:
__$ yarn encore production__

After that, you can install bootstrap:
__$ yarn add bootstrap --dev__
