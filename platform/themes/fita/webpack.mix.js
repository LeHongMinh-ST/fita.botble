let mix = require('laravel-mix');

const path = require('path');
let directory = path.basename(path.resolve(__dirname));

const source = 'platform/themes/' + directory;
const dist = 'public/themes/' + directory;

mix
    .js(source + '/assets/js/script.js', dist + '/js')

    .copyDirectory(dist + '/js', source + '/public/js');
