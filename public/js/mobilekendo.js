var userUrl="http://localhost/larajs.git/public/user"

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


$(function() {
	kendo.init(document.body);
});
