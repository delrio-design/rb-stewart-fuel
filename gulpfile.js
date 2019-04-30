const { src, dest, series, watch } = require('gulp');
const nunjucks = require('gulp-nunjucks');
const rename = require('gulp-rename');
const copy = require('gulp-copy');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');

function html() {
    return src('./src/*.njk')
        .pipe(nunjucks.compile())
        .pipe(rename(path => {
            path.extname = ".html";
        }))
        .pipe(dest('./dist/'));
}

function css() {
    return src('./src/css/main.scss')
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(dest('./dist/css'));
}

function copyBootstrap() {
    return src('./node_modules/bootstrap/js/dist/collapse.js')
    .pipe(dest('./dist/js'));
}

function copyJquery() {
    return src('./node_modules/jquery/dist/jquery.js')
    .pipe(dest('./dist/js'));
}

function watchAll() {
    return watch(['src/*.njk', 'src/templates/*.njk', 'src/css/*.scss'], series(html, css));
}

exports.html = html;
exports.css = css;
exports.copybootstrap = copyBootstrap;
exports.copyjquery = copyJquery;
exports.watch = watchAll;
exports.default = watchAll;