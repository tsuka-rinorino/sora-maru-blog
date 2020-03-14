const { series, watch } = require('gulp')
const config = require('../config')
// task
const server = require('../task/server')
const scss = require('../task/scss')
const img = require('../task/img')

// module
module.exports = series(server, () => {
  watch(config.path.src + '/scss/**/*.scss', scss)
  watch(config.path.src + '/img/**/*.{png,jpg,jpeg,gif,svg}', img)
})
