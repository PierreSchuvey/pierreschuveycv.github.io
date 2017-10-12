(function(){
  var config = {
    viewFactor : 0.15,
    duration   : 800,
    distance   : "0px",
    scale      : 0.8,
  }
  window.sr = new ScrollReveal(config)
})()
var langages = {
  origin:"left",
  distance:"100px",
  duration:0,
  scale:0,
  reset:true,
}
sr.reveal("#langages",langages)

var Logiciels = {
  origin:"left",
  distance:"100px",
  duration:0,
  scale:0,
  reset:true,
}
sr.reveal("#Logiciels",Logiciels)

var OS = {
  origin:"left",
  distance:"100px",
  duration:0,
  scale:0,
  reset:true,
}
sr.reveal("#OS",OS)

var HTML = {
  origin:"left",
  distance:"100px",
  duration:2000,
  scale:0,
  reset:true,
}
sr.reveal(".HTML",HTML)

var PHP = {
  origin:"left",
  distance:"0px",
  duration:5000,
  scale:0,
  reset:true,
}
sr.reveal(".PHP",PHP)

var OSW = {
  origin:"left",
  distance:"100px",
  duration:1000,
  scale:0,
  reset:true,
}
sr.reveal(".OSW",OSW)

var OSL = {
  origin:"left",
  distance:"100px",
  duration:3000,
  scale:0,
  reset:true,
}
sr.reveal(".OSL",OSL)

var NANO = {
  origin:"left",
  distance:"100px",
  duration:4000,
  scale:0,
  reset:true,
}
sr.reveal(".NANO",NANO)

var moi = {
  origin:"right",
  distance:"100px",
  duration:500,
  scale:0,
  reset:true,
}
sr.reveal("#moi",moi)

var info = {
  origin:"bottom",
  distance:"100px",
  duration:1000,
  scale:0,
  reset:true,
}
sr.reveal("#info",info)

var experiences = {
  origin:"top",
  distance:"100px",
  duration:1000,
  scale:0,
  reset:true,
}
sr.reveal("#experiences p",experiences)

var formations = {
  origin:"bottom",
  distance:"100px;",
  duration:1000,
  scale:0,
  reset:true,
}
sr.reveal("#formations p",formations)
