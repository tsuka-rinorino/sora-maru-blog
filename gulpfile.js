"use strict"
const { src, dest, series, parallel, watch } = require('gulp')
const config = require('./gulp/config')
const server = require('./gulp/task/server')
// build
const watcher = require('./gulp/build/watch')

exports.default = watcher
exports.watch = watcher
