#!/bin/bash

cp web/scss/_settings.scss.dist web/scss/_settings.scss
cp web/scss/app.scss.dist web/scss/app.scss
cp -R vendor/pmc/slim-fast/app .
cp -R vendor/pmc/slim-fast/web .
sass --scss --compass -I vendor/pmc/simple-foundation/scss web/scss/app.scss web/css/app.css
