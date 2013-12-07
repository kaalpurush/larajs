define([], function () {
    var domain = "localhost/larajs.git/public/",
        serverUrl = "http://" + domain,
        userUrl = serverUrl + "/home/user";
    
    return {
        domain: domain,
        serverUrl: serverUrl,
        userUrl: userUrl,
    };
});