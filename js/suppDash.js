

// open text area to reply

function openPopRpl(){//opening

    let popup = document.getElementById("pop-Rpl");

    popup.classList.add("openPopRpl");
}

function closePopRpl(){//closing
    let popup = document.getElementById("pop-Rpl");

    popup.classList.remove("openPopRpl");
}



// open pop up  to delete

function openDelete(){//opening

    let del = document.getElementById("pop-del");

    del.classList.add("openPopDel");
}

function closeDelete(){//closing
    let del = document.getElementById("pop-del");

    del.classList.remove("openPopDel");
}



//active nav bar item

var current = window.location.pathname;
var navLink = document.querySelectorAll('.nav');

navLink.forEach(function(link) {
    if(link.getAttribute('href') === current){
        link.classList.add('active');
    }
});
