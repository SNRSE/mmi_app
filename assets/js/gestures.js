var myElement = document.getElementById('result');

// create a simple instance
// by default, it only adds horizontal recognizers
var mc = new Hammer(myElement);
mc.get('pan').set({ threshold:100 });
// listen to events...
mc.on("panleft", function(ev) {
    pageid = pageid + 1;
    showpage(idtopage(pageid));
    console.log(idtopage(pageid));
});

mc.on("panright", function(ev) {
   pageid = pageid - 1;
    showpage(idtopage(pageid));
    console.log(pageid);
});
/*mc.on("panleft panright tap press", function(ev) {
    myElement.textContent = ev.type +" gesture detected.";
});*/