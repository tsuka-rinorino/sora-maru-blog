"use strict"
const { src, dest, series, parallel, watch } = require('gulp')
const config = require('./gulp/config')
const server = require('./gulp/task/server')
// build
const build = require('./gulp/build/build')
const watcher = require('./gulp/build/watch')

exports.default = build
exports.watch = watcher
