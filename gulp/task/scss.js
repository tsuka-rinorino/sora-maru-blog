// config
const config = require('../config')
// common
const { src, dest } = require('gulp')
const plumber = require('gulp-plumber')
const notify = require('gulp-notify')
const browserSync = require('browser-sync')
// sass
const sass = require('gulp-sass')
const postcss = require('gulp-postcss')
const autoprefixer = require('autoprefixer')
const cssmqpacker = require('css-mqpacker')
const sortCSSmq = require('sort-css-media-queries')
const cleanCSS = require('gulp-clean-css')
const sassGlob = require('gulp-sass-glob')

// module
module.exports = () => {
  return src(config.path.src + '/scss/**/*.scss', {
      sourcemaps: true,
    })
    .pipe(plumber({
      errorHandler: notify.onError('Error: <%= error.message %>')
    }))
    .pipe(sassGlob())
    .pipe(sass())
    .pipe(postcss([
      autoprefixer(),
      cssmqpacker({
        sort: sortCSSmq
      }),
    ]))
    .pipe(dest(config.path.dist + '/css', {sourcemaps: '.'}))
    .pipe(browserSync.stream({
      stream: true
    }))
}
