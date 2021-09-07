const gulp = require('gulp');
const sass = require('gulp-sass');
const cssnano = require('cssnano');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const browserSync = require('browser-sync').create();

// compile scss to css
function styles() {

  // 1. locate source SCSS files
  return gulp.src('./assets/scss/**/*.scss')
    // 2. pass file to Sass Compiler
    .pipe(sass())
    // 3. locate destination for compiled CSS
    .pipe(gulp.dest('./'))
    // 4. stream changes to all browsers
    .pipe(browserSync.stream())
}

function refine() {
  const plugins = [
    autoprefixer({ browsers: ['last 1 version'] }),
    cssnano()
  ];
  return gulp.src('./style.css')
    .pipe(postcss(plugins))
    .pipe(gulp.dest('./'));
}

function watch() {
  browserSync.init({
    notify: false,
    proxy: {
      target: "https://skypizzeria.test",
    },
    https: {
      key: "/Applications/MAMP/Library/OpenSSL/certs/skypizzeria.test.key",
      cert: "/Applications/MAMP/Library/OpenSSL/certs/skypizzeria.test.crt"
    },
  });
  gulp.watch('./assets/scss/**/*.scss', styles);
  gulp.watch('**/*.php', browserSync.reload);
}

exports.styles = styles;
exports.refine = refine;
exports.watch = watch;
