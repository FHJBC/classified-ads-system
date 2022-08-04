To create a new symfony project:
__$ symfony new <project-name> --version=<specific-symfony-version-number> --webapp__

1. symfony console make:controller HomeController
2. symfony console doctrine:database:create
3. symfony serve -d or symfony console server:start
4. symfony console make:entity
5. symfony console make:migration
6. symfony console doctrine:migrations:migrate

To set up registration and authentication feature:
1. symfony console make:user
2. symfony console make:registration-form


#### To install and configure Webpack Encore 
```bash
composer require encore
yarn install
yarn encore dev-server
```

To compile assets once:
__$ yarn encore dev__

To recompile assets automatically when files change:
__$ yarn encore dev --watch__

To create a production build:
__$ yarn encore production__
