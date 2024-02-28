const {watch,src,dest} = require("gulp"),
  sass = require("gulp-sass")(require("sass")),
  plumber = require("gulp-plumber"),
  rename = require("gulp-rename"),
  cssnano = require("cssnano"),
  autprefixer = require("autoprefixer"),
  postcss = require("gulp-postcss")

const css = async()=>{
  src("sass/**/*.scss")
  .pipe(plumber())
  .pipe(sass())
  // .pipe(rename({suffix:"-min"}))
  // .pipe(postcss([cssnano,autprefixer]))
  .pipe(dest("public/assets/css"))

}
const watchFiles = async()=>{
  watch("sass/**/*.scss",css)
}

exports.sass = css
exports.watch = watchFiles