define(["data", "config", "utils", "user"],
       function(data,   config,   utils, user) {

    var init = function () {
		kendo.init(document.body);
    };

    return {
        config: config,
        init: init
    };
});