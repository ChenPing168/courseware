module.exports = function (grunt) {
  // 项目配置
  grunt.initConfig({
  // 这里的 grunt.file.readJSON就会将我们的配置文件读出，并且转换为json对象，然后我们在后面的地方就可以采用pkg.XXX的方式访问其中的数据了
    pkg: grunt.file.readJSON('package.json'),
    // uglify是一个压缩插件，它会读取我们的package.json里面的配置项
    // 它主要干了一下几件事情：
    // 1.在src文件中找到zepto进行压缩（具体名字在package.json里面找）
    // 2.找到dest目录，没有就新建，然后将压缩文件搞进去
    // 3.在上面加几个描述语言
    uglify: {
      build: {
        // 被压缩的文件的路径
        src: 'src/<%=pkg.file %>.js',
        // 生成的压缩文件
        dest: 'dest/<%= pkg.file %>.min.js'
      }
    }
  });
  // 加载提供"uglify"（压缩）任务的插件
  grunt.loadNpmTasks('grunt-contrib-uglify');
  // 默认任务（执行）
  grunt.registerTask('default', ['uglify']);
}