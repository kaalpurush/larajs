var userUrl="http://localhost/php.git/larajs/public/user"

var users = new kendo.data.DataSource({
    schema: { model: {id:"id"} },
    transport: {
        read: { url: userUrl+"/list", dataType: "json" },
        update: {
            url: function (user_id) {
                return userUrl + "/user/" + user_id;
            },
            dataType: "json",
            type: "PUT",
            success: function (response) {
                console.log(response);
            }
        },
        destroy: {
            url: function (user) {
                return userUrl + "/user/"+user.id;
            },
            dataType: "json",
            type: "DELETE"
        },
        create: {
            url: function () {
                return userUrl;
            },
            dataType: "json",
            type: "PUT"
        }
    },
    requestEnd: function(e) {
        //console.log(e);
        var response = e.response;
        var type = e.type;
        if(type=="destroy")
            if(response==1){
                alert("User deleted!");
                history.back();
            }
    }
});

var userModel = kendo.observable({
    users: users,
    setCurrent: function(user_id) {
        this.set("current", users.get(user_id));
    },
    delete: function(){
        users.remove(this.get("current"));
        users.sync();
    }
});

var viewModel = kendo.observable({
    click: function(e) {
        alert("sfsf");
    }
});



var layout = new kendo.Layout("baselayout");
var usertemplate = new kendo.Layout("usertemplate", { model: userModel });


kendo.bind($("#userlistview"), userModel);

var app = new kendo.Router({
    init: function() {
        layout.render("#app");
    }
});

// Routing
app.route("/", function() {
    var userlistview = new kendo.View("userlistview",{ model: userModel });
    layout.showIn("#app_content", userlistview);
});

app.route("/user/:id", function(user_id) {
    users.fetch(function(e) {
        userModel.setCurrent(user_id);
        var userview = new kendo.View("userview", { model: userModel });
        layout.showIn("#app_content", userview);
});
});

$(function() {
    app.start();
});
