// common
const browserSync = require('browser-sync')
// config
const config = require('../config')

// module
module.exports = (done) => {
  browserSync({
    proxy: config.server
  })
  done()
}
