function loadData(name){
    if (name=='bn1'){
        document.getElementById("para").innerHTML="No, our CV packages do not have an expiry date. You can use your quota any day until you receive the CV number you paid for, you can use one CV package between several number of positions. Only our Unlimited CVs a month package is a monthly package, all our 50,100,250,500 CV packages do not have an expiry date.";
    }

    else if (name=='bn2'){
        document.getElementById("para").innerHTML="Yes, if you get a 100CV package and post 4 adverts you can allocate 25CVs each per position. Advert will automaticity archive when it reaches the selected number of CVs.";
    }

    else if (name=='bn3'){
        document.getElementById("para").innerHTML="You can ask the system to send you only passed candidates or you can ask the system to send you all candidates. Depending on your preference.";
    }
    else if (name=='bn4'){
        document.getElementById("para").innerHTML="Yes, our system is designed for you to put up the adverts your self. If you are struggling alternatively you can send it to us too.";
    }
    else if (name=='bn5'){
        document.getElementById("para").innerHTML="No, we do not give you access to our CV data base due to privacy issues. Plus looking at CVs from a data base is never successful from our experience and you wouldn’t like us to share the CVs your company got with another? Now would you ? instead we do give you your own CV data base. Anyone who applies to you stays in your system eventually getting you your own cv database.";
    }
    else{
        alert("Invalid");
    }
}



