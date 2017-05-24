// Load plugins
var gulp      = require('gulp'),
	  plugins   = require('gulp-load-plugins')({ camelize: true }),
    path      = require('path'),
    asset_dir = './wp-content/themes/thestore/',
	  lr        = require('tiny-lr'),
	  server    = lr();

// Compile CSS
gulp.task('build-css', function() {
  gulp.src(path.join(asset_dir, 'less/application.less'))
    .pipe(plugins.less({
      paths: [path.join(asset_dir, 'less')]
    }))
    .pipe(plugins.csso())
    .pipe(gulp.dest(path.join(asset_dir, 'build/css')));
});

// Clean
gulp.task('clean', function() {
  gulp.src([path.join(asset_dir, 'build/css/*.css')], {read: false})
    .pipe(plugins.clean-css());
});

// Watch
gulp.task('watch', function() {
  server.listen(35729, function(err) {
    if (err) return console.log(err);
  });

  gulp.watch(path.join(asset_dir, 'less/**/*.less'), ['build-css'])
});

// Default task
gulp.task('default', ['clean', 'build-css', 'watch']);

// Production Build
gulp.task('build-prd', ['clean', 'build-css']);
