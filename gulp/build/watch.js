const { series, watch } = require('gulp')
const config = require('../config')
// task
const server = require('../task/server')
const scss = require('../task/scss')

// module
module.exports = () => {
  server
  watch(config.path.src + '/scss/**/*.scss', scss)
}