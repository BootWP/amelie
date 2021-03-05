const { src, dest, watch, parallel, series } = require('gulp');
const scss = require('gulp-sass');
const concat = require('gulp-concat');
const autoprefixer = require('gulp-autoprefixer');
const imagemin = require('gulp-imagemin');
const del = require('del');
const browserSync = require('browser-sync').create();

// Browser sync
function browsersync() {
	browserSync.init({
		server: {
			baseDir: 'app/'
		},
		notify: false,
		open: false,
	})
}

// SCSS to CSS
function styles() {
	return src('app/scss/*.scss')
		.pipe(scss({ outputStyle: 'expanded' }))
		.pipe(autoprefixer({
			// overrideBrowserslist: ['last 3 versions'],
			// grid: true
		}))
		.pipe(dest('app/css'))
		.pipe(browserSync.stream());
}

// JS
function scripts() {
	return src([
		'app/js/main.js'
	])
		.pipe(browserSync.stream())
}

// Image min
function images() {
	return src('app/images/**/*')
		.pipe(imagemin([
			imagemin.gifsicle({ interlaced: true }),
			imagemin.mozjpeg({ quality: 75, progressive: true }),
			imagemin.optipng({ optimizationLevel: 5 }),
			imagemin.svgo({
				plugins: [
					{ removeViewBox: true },
					{ cleanupIDs: false }
				]
			})
		]))
		.pipe(dest('dist/images'))
}

// Dist
function build() {
	return src([
		'app/**/*.html',
		'app/fonts/**/*',
		'app/css/*.css',
		'app/js/*.js',
	], { base: 'app' })
		.pipe(dest('dist'))
}

// Dist del
function cleanDist() {
	return del('dist')
}

// Watching
function watching() {
	watch(['app/scss/**/*.scss'], styles);
	watch(['app/js/**/main.js'], scripts);
	watch(['app/**/*.html']).on('change', browserSync.reload)
}

exports.styles = styles;
exports.scripts = scripts;
exports.browsersync = browsersync;
exports.watching = watching;
exports.images = images;
exports.cleanDist = cleanDist;

exports.build = series(cleanDist, images, build);
exports.default = parallel(styles, scripts, browsersync, watching);

