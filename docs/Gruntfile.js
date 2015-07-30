module.exports = function(grunt) {

    // file variables
    var input   = '../api/routes/';
    var output  = './output/';

    // url variables
    var port    = 9000;
    var url     = 'http://localhost:' + port;

    // project configuration
    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        // https://github.com/apidoc/grunt-apidoc
        apidoc: {
            default: {
                src: input,
                dest: output,
                template:"template"
            }
        },

        // https://github.com/gruntjs/grunt-contrib-connect
        // http://stackoverflow.com/questions/21836478/grunt-watch-connect
        connect: {
            server: {
                options: {
                    livereload: true,
                    base: output,
                    port: port
                }
            }
        },

        // https://github.com/jsoverson/grunt-open
        open:{
            docs : {
                path: url
            }
        },

        // https://github.com/gruntjs/grunt-contrib-watch
        watch: {
            scripts: {
                files: [input + '*.php'],
                tasks: ['apidoc'],
                options: {
                    spawn: false,
                    livereload:true
                }
            }
        }
    });

    // load modules
    grunt.loadNpmTasks('grunt-contrib-connect');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-open');
    grunt.loadNpmTasks('grunt-apidoc');


   // set default task
    grunt.registerTask('default', ['connect', 'open', 'apidoc', 'watch']);

};