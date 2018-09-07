window.onload = function() {
    var headimg = document.getElementById("headimg");
    headimg.style.marginTop = -((headimg.offsetHeight)-528) + "px";
    
    var target = 1;
    var osobnyak = document.getElementsByClassName('osob');
    var gallery = document.getElementById("gallery");
    gallery.style.width = ((osobnyak.length) * 400) + "px";
    gallery.style.marginLeft = (483 - (target * 400)) + "px";
    
    var osobleftt = document.getElementById('os' + (target - 1));
    var osobleft = document.getElementById('os' + (target));
    var osobtarg = document.getElementById('os' + (target + 1));
    var osobright = document.getElementById('os' + (target + 2));
    var osobrightt = document.getElementById('os' + (target + 3));
    if (target > 1){
        osobleftt.style.opacity = "0";
    };
    if (target > 0){
        osobleft.style.opacity = "0.5";   
    };
    osobtarg.style.opacity = "1";
    if (target < (osobnyak.length - 1)) {
        osobright.style.opacity = "0.5";
    };
    if (target < (osobnyak.length - 2)) {
        osobrightt.style.opacity = "0";
    };
    
    document.getElementById("buttonleft").onclick = function() {
        if (target > 0) {
            target--;
            gallery.style.marginLeft = (483 - (target * 400)) + "px";
        }
        var osobleftt = document.getElementById('os' + (target - 1));
        var osobleft = document.getElementById('os' + (target));
        var osobtarg = document.getElementById('os' + (target + 1));
        var osobright = document.getElementById('os' + (target + 2));
        var osobrightt = document.getElementById('os' + (target + 3));
        if (target > 1){
            osobleftt.style.opacity = "0";
        };
        if (target > 0){
            osobleft.style.opacity = "0.5";   
        };
        osobtarg.style.opacity = "1";
        if (target < (osobnyak.length - 1)) {
            osobright.style.opacity = "0.5";
        };
        if (target < (osobnyak.length - 2)) {
            osobrightt.style.opacity = "0";
        };
    };
    document.getElementById("buttonright").onclick = function() {
        if (target < (osobnyak.length - 1)) {
            target++;
            gallery.style.marginLeft = (483 - (target * 400)) + "px";
        }
        var osobleftt = document.getElementById('os' + (target - 1));
        var osobleft = document.getElementById('os' + (target));
        var osobtarg = document.getElementById('os' + (target + 1));
        var osobright = document.getElementById('os' + (target + 2));
        var osobrightt = document.getElementById('os' + (target + 3));
        if (target > 1){
            osobleftt.style.opacity = "0";
        };
        if (target > 0){
            osobleft.style.opacity = "0.5";   
        };
        osobtarg.style.opacity = "1";
        if (target < (osobnyak.length - 1)) {
            osobright.style.opacity = "0.5";
        };
        if (target < (osobnyak.length - 2)) {
            osobrightt.style.opacity = "0";
        };
    };
    
    window.onresize = function() {
        var headimg = document.getElementById("headimg");
        headimg.style.marginTop = -((headimg.offsetHeight)-528) + "px";
        
    };
};
