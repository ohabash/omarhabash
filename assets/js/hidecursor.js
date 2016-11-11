$(document).ready(function() {  
        var idleMouseTimer;
        var forceMouseHide = false;

        // $("body").css('cursor', 'none');

        $(".st-pusher").mousemove(function(ev) {
                if(!forceMouseHide) {
                        $("body").css('cursor', '');

                        clearTimeout(idleMouseTimer);

                        idleMouseTimer = setTimeout(function() {
                                $("body").css('cursor', 'none');

                                forceMouseHide = true;
                                setTimeout(function() {
                                        forceMouseHide = false;
                                }, 200);
                        }, 1000);
                }
        });
});