# mixed_vinyl

## TO START THIS PROJECT
```
symfony serve -d
npm install & yarn install
yarn build --watch
```

## CREATE A NEW PROJECT 

```
symfony new mixed_vinyl
cd mixed_vinyl
symfony check:req
symfony serve -d
```


### GIT COMMANDS 
```
git show --name-only
```

### COMPOSER COMMANDS 
```
composer recipes [RECIPE_NAME]
composer require templates
composer require debug

// WEBPACK
composer require encore
```

### PHP BIN/CONSOLE COMMANDS 
```
// DEBUG
php bin/console debug:router
php bin/console debug:autowiring [SERVICE_NAME OR CLASS & INTERFACE]

// ROUTER
php bin/console router:match [ROUTE]
php bin/console router:match /api/song/5 --method=POST
```
