var gulp = require('gulp'),
  cssmin = require('gulp-cssmin'),
  image = require('gulp-image'),
  uglify = require('gulp-uglify'),
  connect = require('gulp-connect');

// abre um servidor no localhost na porta 9001
gulp.task('connect', function () {
  connect.server({
    root: './',
    livereload: true,
    port: 9001
  });
})

// minifica arquivos css
gulp.task('build-css', function () {
  gulp.src('assets/src/css/**/*.css')
    .pipe(cssmin())
    .pipe(gulp.dest('assets/dist/css'))
    .pipe(connect.reload());
});

// minifica arquivos js
gulp.task('build-js', function () {
  gulp.src('assets/src/js/**/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('assets/dist/js'))
    .pipe(connect.reload());
});

// comprimi o tamanho das imagens
gulp.task('compress-images', function () {
  gulp.src('assets/src/media/images/**/*')
    .pipe(image())
    .pipe(gulp.dest('assets/dist/media/images'));
});

gulp.task('watch', function () {
  gulp.watch('assets/src/css/**/*.css', ['build-css']);
  gulp.watch('assets/src/js/**/*.js', ['build-js']);
});

gulp.task('default', ['build-css', 'compress-images', 'build-js', 'connect', 'watch']);
