// config
const config = require('../config')
// common
const { src, dest } = require('gulp')
const plumber = require('gulp-plumber')
const notify = require('gulp-notify')
const browserSync = require('browser-sync')

// module
module.exports = () => {
  return src(config.path.src + '/img/**/*.{png,jpg,jpeg,gif,svg}')
    .pipe(dest(config.path.dist + '/img'))
    .pipe(browserSync.reload({
      stream: true
    }))
}
