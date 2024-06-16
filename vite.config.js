import {build, defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({

build:{
    minify:false,
    outDir:'public/build',
    assetsInlineLimit:0,
    },
plugins:[
    laravel({
        input:['resources/css/app.css',
                'resources/js/app.js',
                'resources/js/map.js',
                'resources/scss/app.scss',
                'resources/scss/media.scss',

        ],

        refresh:true,

    })
]

}
);
