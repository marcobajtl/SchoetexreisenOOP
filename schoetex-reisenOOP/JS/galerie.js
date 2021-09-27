document.querySelectorAll(".smimg").forEach(function (objElement) {
    objElement.addEventListener("click", function () {

        const intID = objElement.getAttribute('data-id')
        const intHotelID = objElement.getAttribute("data-hotelid")
        let objMain = document.getElementById("mainimg" + intHotelID);
        objMain.src = "bilder/hotels/" + intHotelID + "/" + intID + ".jpg";
        let objOverlay = document.getElementById("overlayimg");
        objOverlay.src = "bilder/hotels/" + intHotelID + "/" + intID + ".jpg";
    })
})

document.querySelectorAll(".toggleon").forEach(function (objElement) {
    objElement.addEventListener("click", function () {
        document.getElementById("overlay").style.display = "block";
    })
})

document.querySelectorAll("#overlay").forEach(function (objElement) {
    objElement.addEventListener("click", function () {
        document.getElementById("overlay").style.display = "none";
    })
})

document.querySelectorAll(".next").forEach(function (objElement) {
    objElement.addEventListener("click", function () {
        let intHotelID = objElement.getAttribute("data-hotelid");
        let objMain = document.getElementById("mainimg" + intHotelID);
        let intImgCount = objElement.getAttribute("data-imgcount");
        let intID = objMain.src[58];
        intID++;
        if(intID > intImgCount){
            intID = 1;
        }
        objMain.src = "bilder/hotels/" + intHotelID + "/" + intID + ".jpg";
        let objOverlay = document.getElementById("overlayimg");
        objOverlay.src = "bilder/hotels/" + intHotelID + "/" + intID + ".jpg";
    })
})

document.querySelectorAll(".prev").forEach(function (objElement) {
    objElement.addEventListener("click", function () {
        let intHotelID = objElement.getAttribute("data-hotelid");
        let objMain = document.getElementById("mainimg" + intHotelID);
        let intImgCount = objElement.getAttribute("data-imgcount");
        let intID = objMain.src[58];
        intID--;
        if (intID < 1) {
            intID = intImgCount;
        }
        objMain.src = "bilder/hotels/" + intHotelID + "/" + intID + ".jpg";
        let objOverlay = document.getElementById("overlayimg");
        objOverlay.src = "bilder/hotels/" + intHotelID + "/" + intID + ".jpg";
    })
})
