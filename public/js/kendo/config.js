define([], function () {
    var domain = "localhost/php.git/larajs/public",
        serverUrl = "http://" + domain,
        userUrl = serverUrl + "/home/user";
    
    return {
        domain: domain,
        serverUrl: serverUrl,
        userUrl: userUrl,
    };
});