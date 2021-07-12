import babel from '@rollup/plugin-babel'
import commonjs from '@rollup/plugin-commonjs'
import resolve from '@rollup/plugin-node-resolve'
import { terser } from 'rollup-plugin-terser'

const autoprefixer = require('autoprefixer')
const changed = require('gulp-changed')
const cssnano = require('cssnano')
const del = require('del')
const gulp = require('gulp')
const postcss = require('gulp-postcss')
const rename = require('gulp-rename')
const rollup = require('rollup')
const sass = require('gulp-sass')

sass.compiler = require('node-sass')

const paths = {
  scss: {
    src: 'src/sass/**/*.scss',
    dest: 'dist/css/'
  },
  js: {
    src: 'src/js/**/*.js',
    dest: 'dist/js/'
  },
  images: {
    src: 'src/images/**/*.*',
    dest: 'dist/images/'
  }
}

/* Not all tasks need to use streams, a gulpfile is just another node program
 * and you can use all packages available on npm, but it must return either a
 * Promise, a Stream or take a callback and call it
 */
function clean () {
  // You can use multiple globbing patterns as you would with `gulp.src`,
  // for example if you are using del 2.0 or above, return its promise
  return del(['dist'])
}

/*
 * Define our tasks using plain functions
 */
function scss () {
  const plugins = [autoprefixer(), cssnano()]
  return (
    gulp
      .src(paths.scss.src)
      .pipe(changed(paths.scss.dest))
      .pipe(sass().on('error', sass.logError))
      .pipe(postcss(plugins))
      .pipe(
        rename({
          suffix: '.min'
        })
      )
      .pipe(gulp.dest(paths.scss.dest))
  )
}

function scripts () {
  return rollup.rollup({
    input: './src/js/main.js',
    plugins: [
      resolve(),
      commonjs(),
      babel({ babelHelpers: 'bundled' }),
      terser({
        keep_fnames: true,
        format: {
          quote_style: 1,
          comments: false
        }
      })
    ]
  }).then(bundle => {
    return bundle.write({
      file: './dist/js/bundled.min.js',
      format: 'iife',
      name: 'bundled',
      sourcemap: false
    })
  })
}

function images () {
  return gulp
    .src(paths.images.src)
    .pipe(changed(paths.images.dest))
    .pipe(gulp.dest(paths.images.dest))
}

function watch () {
  gulp.watch(paths.scss.src, scss)
  gulp.watch(paths.js.src, scripts)
  gulp.watch(paths.images.src, images)
}

/*
 * Specify if tasks run in series or parallel using `gulp.series` and `gulp.parallel`
 */
// var build = gulp.series(clean, gulp.parallel(scss, js, images, sprite, ajax, fonts, watch));
const build = gulp.series(
  gulp.parallel(scss, scripts, images, watch)
)

/*
 * You can use CommonJS `exports` module notation to declare tasks
 */
exports.clean = clean
exports.scss = scss
exports.scripts = scripts
exports.images = images
exports.watch = watch
exports.build = build

/*
 * Define default task that can be called by just running `gulp` from cli
 */
exports.default = build
