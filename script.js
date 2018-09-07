function disapear(target){
    var osobnyak = document.getElementsByClassName('osob'); 
    var osobleft = document.getElementById('os' + (target));
    var osobtarg = document.getElementById('os' + (target + 1));
    var osobright = document.getElementById('os' + (target + 2));
    if (target > 1){
        osobnyak[target-2].style.opacity = "0";
    };
    if (target > 0){
        osobleft.style.opacity = "0.5"; 
        osobnyak[target-1].style.opacity = "1";
    };
    osobtarg.style.opacity = "1";
    osobnyak[target].style.opacity = "1";
    if (target < (osobnyak.length - 1)) {
        osobright.style.opacity = "0.5";
        osobnyak[target+1].style.opacity = "1";
    };
    if (target < (osobnyak.length - 2)) {
        osobnyak[target+2].style.opacity = "0";
    };    
};

window.onload = function() {
    //var blueback = document.getElementById("blueback");
    //blueback.style.marginTop = ($("#doubleform").offset().top) + "px";
    var footerback = document.getElementById("footerback");
    footerback.style.marginTop = ($("#finalform").offset().top + 100) + "px";
    var headimg = document.getElementById("headimg");
    headimg.style.marginTop = -((headimg.offsetHeight)-528) + "px";    
    var target = 1;
    var osobnyak = document.getElementsByClassName('osob'); 
    var gallery = document.getElementById("gallery");
    var OsobWidth = osobnyak[0].offsetWidth +20;
    gallery.style.width = ((osobnyak.length) * OsobWidth) + "px";
    gallery.style.marginLeft = "calc(50% - " + ((OsobWidth/2) + (target * OsobWidth)) + "px)";    
    disapear(target);
    
    document.getElementById("buttonleft").onclick = function() {
        if (target > 0) {
            target--;
            gallery.style.marginLeft = "calc(50% - " + ((OsobWidth/2) + (target * OsobWidth)) + "px)";
        }
        disapear(target);        
    };
    document.getElementById("buttonright").onclick = function() {
        if (target < (osobnyak.length - 1)) {
            target++;
            gallery.style.marginLeft = "calc(50% - " + ((OsobWidth/2) + (target * OsobWidth)) + "px)";
        }
        disapear(target);
    };
    
    var swippe = document.getElementById("gallery");
    var hammertime = Hammer(swippe).on("swipeleft", function(event){
        if (target < (osobnyak.length - 1)) {
            target++;
            gallery.style.marginLeft = "calc(50% - " + ((OsobWidth/2) + (target * OsobWidth)) + "px)";
        }
        disapear(target);
    });
    var hammertime = Hammer(swippe).on("swiperight", function(event){
        if (target > 0) {
            target--;
            gallery.style.marginLeft = "calc(50% - " + ((OsobWidth/2) + (target * OsobWidth)) + "px)";
        }
        disapear(target);
    });

    window.onresize = function() {
        //var blueback = document.getElementById("blueback");
        //blueback.style.marginTop = ($("#doubleform").offset().top) + "px";
        var footerback = document.getElementById("footerback");
        footerback.style.marginTop = ($("#finalform").offset().top + 100) + "px";
        var headimg = document.getElementById("headimg");
        headimg.style.marginTop = -((headimg.offsetHeight)-528) + "px";
        var OsobWidth = osobnyak[0].offsetWidth +20;
        gallery.style.width = ((osobnyak.length) * OsobWidth) + "px";
        gallery.style.marginLeft = "calc(50% - " + ((OsobWidth/2) + (target * OsobWidth)) + "px)";
    };
};
