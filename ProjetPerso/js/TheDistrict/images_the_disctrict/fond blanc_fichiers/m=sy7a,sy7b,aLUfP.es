this._s=this._s||{};(function(_){var window=this;
try{
_.Kyc=function(a){this.Bk=a};
}catch(e){_._DumpException(e)}
try{
var Lyc=function(a){_.zn.call(this,a.Ja);var b=this;this.window=a.service.window.get();this.wa=this.Bk();this.oa=window.orientation;this.ka=function(){var c=b.Bk(),d=b.Tcb()&&90===Math.abs(window.orientation)&&b.oa===-1*window.orientation;b.oa=window.orientation;if(c!==b.wa||d){b.wa=c;d=_.Wa(b.Ee);for(var e=d.next();!e.done;e=d.next()){e=e.value;var f=new _.Kyc(c);try{e(f)}catch(g){_.ca(g)}}}};this.Ee=new Set;this.window.addEventListener("resize",this.ka);this.Tcb()&&this.window.addEventListener("orientationchange",
this.ka)};_.B(Lyc,_.zn);Lyc.yb=_.zn.yb;Lyc.Ea=function(){return{service:{window:_.An}}};Lyc.prototype.addListener=function(a){this.Ee.add(a)};Lyc.prototype.removeListener=function(a){this.Ee.delete(a)};
Lyc.prototype.Bk=function(){if(Myc()){var a=_.wl(this.window);a=new _.cl(a.width,Math.round(a.width*this.window.innerHeight/this.window.innerWidth))}else a=this.Vb()||(_.ta()?Myc():this.window.visualViewport)?_.wl(this.window):new _.cl(this.window.innerWidth,this.window.innerHeight);return a.height<a.width};Lyc.prototype.destroy=function(){this.window.removeEventListener("resize",this.ka);this.window.removeEventListener("orientationchange",this.ka)};var Myc=function(){return _.ta()&&_.wh.vF()&&!navigator.userAgent.includes("GSA")};
Lyc.prototype.Vb=function(){return _.Nyc};Lyc.prototype.Tcb=function(){return"orientation"in window};_.Nyc=!1;_.Bn(_.j_a,Lyc);
_.Nyc=!0;
}catch(e){_._DumpException(e)}
try{
_.l("aLUfP");

_.n();
}catch(e){_._DumpException(e)}
})(this._s);
// Google Inc.
