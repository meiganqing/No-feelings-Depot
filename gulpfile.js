let gulp=require('gulp');

gulp.task("watchall",async ()=>{
	gulp.watch("*.html",async()=>{
		gulp.src("*.html")
		.pipe(gulp.dest("D:\\phpStudy\\WWW\\h5_1811\\20190312"));
	})
	gulp.watch("css/*.css",async()=>{
		gulp.src("css/*.css")
		.pipe(gulp.dest("D:\\phpStudy\\WWW\\h5_1811\\20190312\\css"));

	})
	gulp.watch("img/**/*",async()=>{
		gulp.src("*/**/*")
		// .{jpg,png}
		.pipe(gulp.dest("D:\\phpStudy\\WWW\\h5_1811\\20190312"))
	})
	gulp.watch("img/**/*",async()=>{
		gulp.src("*/**/*")
		// .{jpg,png}
		.pipe(gulp.dest("D:\\phpStudy\\WWW\\h5_1811\\20190312"))
	})
});
