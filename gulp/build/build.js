const { series } = require('gulp')
const config = require('../config')
// task
const scss = require('../task/scss')

// module
module.exports = (done) => {
  series(scss)
  done()
}
