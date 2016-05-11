// SlideShow Script
var speed = 4000
var Pic = new Array()

Pic[0] = 'images/Saints-Row-IV2.png'
Pic[1] = 'images/Endless-Space-a.png'
Pic[2] = 'imagelinkhere'
Pic[3] = 'imagelinkhere'
Pic[4] = 'imagelinkhere'
Pic[5] = 'imagelinkhere'
Pic[6] = 'imagelinkhere'
Pic[7] = 'imagelinkhere'
Pic[8] = 'imagelinkhere'
Pic[9] = 'imagelinkhere'

var t
var j = 0
var p = Pic.length

var preLoad = new Array()
for (i = 0; i < p; i++){
	preLoad[i] = new Image()
	preLoad[i] .src = Pic[i]
}

function runSlideShow(){
	document.images.SlideShow.src = preLoad[j].src
	j = j + 1
	if (j > (p-1)) j=0
	t = setTimeout('runSlideShow()', speed)
}
