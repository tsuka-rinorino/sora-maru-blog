const { series } = require('gulp')
const config = require('../config')
// task
const scss = require('../task/scss')
const img = require('../task/img')

// module
module.exports = series(scss, img)
