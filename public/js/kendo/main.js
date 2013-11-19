var app;

require.config({
	paths: {
	    jQuery: "../jquery",
		kendo: "kendo.web.min",
	},
    shim: {
        jQuery: {
            exports: "jQuery"
        },
        kendo: {
            exports: "kendo"
        }
    }
});

require(["app"], function(application) {
    $(function() {
        app = application
        application.init();
    });
});