define(["config", "utils"], function (config, utils) {
    return {
        user: function () {
            return new kendo.data.DataSource({
                transport: {
                    read: {
                        url: config.userUrl+'/user-list',
                        type: "GET",
                        dataType: "json"
                    }
                },
                schema: {
                    model: {
                        id: "id",
						name: "name"
                    }
                },
                requestStart: function () {  },
                requestEnd: function () {  },
                error: function () { }
            });
        }
    };
});