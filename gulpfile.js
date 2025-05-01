const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const sourcemaps = require('gulp-sourcemaps');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const browserSync = require('browser-sync').create();
const imagemin = require('gulp-imagemin');
const rename = require('gulp-rename');
const gulpif = require('gulp-if');
const fs = require('fs');

// Define file paths (relative to theme root)
const paths = {
  styles: {
    src: 'assets/scss/main.scss',
    watch: 'assets/scss/**/*.scss',
    dest: 'dist/css/'
  },
  scripts: {
    src: [
      'assets/js/**/*.js',
      'assets/js/main.js'
    ],
    dest: 'dist/js/'
  },
  images: {
    src: 'assets/images/**/*',
    dest: 'dist/images/'
  },
  php: {
    watch: '**/*.php'
  }
};

// Environment variable - set to 'production' when building
const isProduction = process.env.NODE_ENV === 'production';

// Process SCSS files
function styles() {
  return gulp.src(paths.styles.src)
    .pipe(gulpif(!isProduction, sourcemaps.init()))
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([
      autoprefixer(),
      cssnano()
    ]))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulpif(!isProduction, sourcemaps.write('.')))
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(browserSync.stream());
}

// Process JS files
function scripts() {
  return gulp.src(paths.scripts.src)
    .pipe(gulpif(!isProduction, sourcemaps.init()))
    .pipe(babel({
      presets: ['@babel/preset-env']
    }))
    .pipe(concat('main.js'))
    .pipe(gulpif(isProduction, uglify()))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulpif(!isProduction, sourcemaps.write('.')))
    .pipe(gulp.dest(paths.scripts.dest))
    .pipe(browserSync.stream());
}

// Optimize images
function images() {
  return gulp.src(paths.images.src)
    .pipe(imagemin())
    .pipe(gulp.dest(paths.images.dest));
}

// Create necessary directories
function createDirs(done) {
  const dirs = [
    paths.styles.dest,
    paths.scripts.dest,
    paths.images.dest
  ];
  
  dirs.forEach(dir => {
    if (!fs.existsSync(dir)) {
      fs.mkdirSync(dir, { recursive: true });
    }
  });
  
  done();
}

// Watch for file changes
function watch() {
    browserSync.init({
      proxy: "http://code-craft.local", // updated for Local by Flywheel
      notify: false
    });
  
    gulp.watch(paths.styles.watch, styles);
    gulp.watch(paths.scripts.src, scripts);
    gulp.watch(paths.images.src, images);
    gulp.watch(paths.php.watch).on('change', browserSync.reload);
  }
  

// Define tasks
const build = gulp.series(createDirs, gulp.parallel(styles, scripts, images));
const dev = gulp.series(build, watch);

// Export tasks
exports.styles = styles;
exports.scripts = scripts;
exports.images = images;
exports.watch = watch;
exports.build = build;
exports.default = dev;
