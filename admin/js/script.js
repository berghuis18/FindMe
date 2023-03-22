                // window.onscroll = function() {myFunction()};
                
                // var header = document.getElementById("myheader");
                // var sticky = header.offsetTop;
    
                // function myFunction() {
                //     if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150){
                // //   if (window.pageYOffset > sticky) {
                //     header.classList.add("sticky");
                // } else {
                //     header.classList.remove("sticky");
                // }
                // }



window.onscroll = function() {myFunction()};
    
    var header = document.getElementById("myheader");
    // var sticky = header.offsetTop;
    // var sticky = header.offsetTop;

    function myFunction() {
        if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150){
    //   if (window.pageYOffset > sticky) {
        // header.classList.remove("");

        header.classList.add("sticky");
        // if (document.body.scrollTop > 750 || document.documentElement.scrollTop > 750){
        //     header.classList.add("stick")
        // }else{
        //     header.classList.remove("stick");
        // }

    } else {
        header.classList.remove("sticky");
    }
    }
        

window.onload = function() {myFunction1();};
window.onload = function() {myFunction2();};
window.onload = function() {myFunction3();};
                function myFunction1() {
                    // Declare variables
                    var input, filter, ul, li, a, i, txtValue;
                    input = document.getElementById('myInput').value;
                    filter = input.toUpperCase();
                    li = document.querySelectorAll('#myul li');
                    
                    for (i = 0; i < li.length; i++) {
                        a = li[i].querySelectorAll("a #positions")[0];
                        txtValue = a.textContent || a.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        li[i].style.display = "";
                        } else {
                        li[i].style.display = "none";
                        }
                    }
                    }

                function myFunction2() {
                    // Declare variables
                    var input, filter, ul, li, a, i, txtValue;
                    input = document.getElementById('worktypeinp').value;
                    filter = input.toUpperCase();
                    li = document.querySelectorAll('#myul li');
                    
                    for (i = 0; i < li.length; i++) {
                        a = li[i].querySelectorAll("a #worktype")[0];
                        txtValue = a.textContent || a.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        li[i].style.display = "";
                        } else {
                        li[i].style.display = "none";
                        }
                    }
                    }

                function myFunction3() {
                    // Declare variables
                    var input, filter, ul, li, a, i, txtValue;
                    input = document.getElementById('jobcategoryinp').value;
                    filter = input.toUpperCase();
                    li = document.querySelectorAll('#myul li');
                    
                    for (i = 0; i < li.length; i++) {
                        a = li[i].querySelectorAll("a #jobcategory")[0];
                        txtValue = a.textContent || a.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        li[i].style.display = "";
                        } else {
                        li[i].style.display = "none";
                        }
                    }
                    }
