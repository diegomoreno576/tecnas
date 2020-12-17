# Glup Web

## Installing

Install gulp

```
sudo npm install gulp -g
```

Install dependencies

```
npm install
```

And run

```
gulp set
gulp
```

## Render partials

To reduce code, create a file '\_partial_name.haml' in partials folder and render wherever you want with this:
(We recommend to create all partials inside partial's folder)

```
= render('app/partials/_partial_name.haml')
```
