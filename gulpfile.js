"use strict";

var gulp = require("gulp");
var sass = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer"); // Auto Vender pri (-webkit-..
var sourcemaps = require("gulp-sourcemaps"); // errorわかりやすく

sass.compiler = require("node-sass");

gulp.task("sass", function () {
  return gulp
    .src("./sass/**/*.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest("./css"));
});

gulp.task("watch", function () {
  gulp.watch("./sass/**/*.scss", ["sass"]);
});

// タスク"task-watch"がgulpと入力しただけでdefaultで実行されるようになる
gulp.task("default", ["watch"]);