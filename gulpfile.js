var gulp            = require('gulp');
var sass            = require('gulp-sass');
var connect         = require('gulp-connect');
var uglify          = require('gulp-uglify');
var concat          = require('gulp-concat');
var gutil           = require('gulp-util');
var sourcemaps      = require('gulp-sourcemaps');
var modernizr       = require('gulp-modernizr');

var buildEnvironment = gutil.env.env || 'dev';

var sassConfig = {
    srcFile: 'scss/*.scss',
    localScssFiles: 'scss/**/*.scss',
    outputDirectory: 'dist/css/',
    outputStyle: 'expanded',
    includePaths: [ 
        'node_modules/foundation-sites/scss', 'node_modules/motion-ui/src'
    ]
}

var jsConfig = {
    inputDirectory: [
        'js/**.js'
      ],
    outputDirectory: 'dist/js'
};

var utilityComponents = [
    'node_modules/motion-ui/dist/motion-ui.js',
    'node_modules/foundation-sites/dist/js/foundation.js',
    'node_modules/what-input/dist/what-input.js',
    'node_modules/js-cookie/src/js.cookie.js',
    'node_modules/file-saver/FileSaver.min.js',
    'node_modules/moment/min/moment.min.js'
];

gulp.task('build-sass', function() {
    return gulp
        .src(sassConfig.srcFile)
        .pipe(buildEnvironment === 'prod' ? gutil.noop() : sourcemaps.init())
        .pipe(sass({
            includePaths: sassConfig.includePaths,
            outputStyle: sassConfig.outputStyle
        }).on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(sassConfig.outputDirectory));
});

gulp.task('build-js', function() {
    return gulp
        .src(utilityComponents.concat(jsConfig.inputDirectory))
        .pipe(concat('app.js'))
        //.pipe(modernizr())
        // .pipe(concat('app.js')) TODO: this should be happening
        // only Uglify in Production
        .pipe(gutil.env.env === 'prod' ? uglify() : gutil.noop())
        // move finally compiled file to dist folder to be used
        .pipe(gulp.dest(jsConfig.outputDirectory));
});

gulp.task('watch', function() {
    gulp.watch(sassConfig.localScssFiles, ['build-sass']);
    gulp.watch(jsConfig.inputDirectory, ['build-js']);
});

gulp.task('default', ['build-sass', 'build-js', 'watch']);

gulp.task('stage', ['build-sass', 'build-js']);
