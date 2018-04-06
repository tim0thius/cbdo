const mix = require('laravel-mix').mix;

const resources = 'resources';
const assets = 'assets';

mix.setPublicPath(assets);
mix.setResourceRoot('../');

// mix.browserSync({
//     proxy: 'http://cbdo.local',
//     files: [
//         `**/*.php`,
//         `${assets}/**/*.js`,
//         `${assets}/**/*.css`
//     ]
// });

mix.js(`${resources}/js/app.js`, `${assets}/js/`);

mix.sass(`${resources}/scss/style.scss`, `../`);
