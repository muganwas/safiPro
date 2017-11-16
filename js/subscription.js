//javascript document
function showprofile(ele){
	"use strict";
	var ele1 = ele.firstElementChild;
	//var tdiv = ele.firstElementChild;
	var odiv = document.getElementsByClassName("person");
	var no = odiv.length;

	for(var i =0; i<no; i++) {
		var odiv1 = odiv[i].firstElementChild;
		if (ele !== odiv[i]){
			if (odiv1.classList.contains("viz")) {	
				odiv1.classList.remove("viz");
			}
		}

	}
	if (ele1.classList.contains("viz")) {
		ele1.classList.remove("viz");
	} else {
		ele1.classList.add("viz");
	}


}
var xmlHttp = getXmlHttpRequestObject();

function  getXmlHttpRequestObject(){
	"use strict";

    var xmlHttp;
    if(window.XMLHttpRequest){

        try{
            xmlHttp = new XMLHttpRequest();
        }catch(e){

            return false;
        }

    }else{
        try{
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
         }catch(e){

            return false;

        }

    }
    if(xmlHttp){

        return xmlHttp;

    }else{

        alert("Something is wrong with your browser!");
    }


}
function searchingi(){
	"use strict";

        if(xmlHttp.readyState === 0 || xmlHttp.readyState === 4){

            var search = document.getElementById("s_search").value;
            var params = "search_b=" + search;
            xmlHttp.open("POST", "xml/search_rez.php", true);
            xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlHttp.onreadystatechange = searchingiResut;
            xmlHttp.send(params);
        }else{

            setTimeout(searchingi(), 1000);
        }
    
}
function proclaim(){
	"use strict";
    try{
        if(xmlHttp.readyState === 0 || xmlHttp.readyState === 4){
            var email = document.getElementById("sub_email").value;
            try{
                    if(email !=="") {

                        document.getElementById("sub_res").innerHTML = "Subscribe for our News letter and updates";

                    }else{

                        document.getElementById("sub_res").innerHTML = "Subscribe for our News letter and updates";

                    }
                }catch(e){
                    alert(e.toString());
                }
        }else{

            document.getElementById("sub_res").innerHTML = "issues with xmlHttp!";
        }
    }catch(e){

        alert(e.toString());
    }
}
function sendmail(){
	"use strict";
	var website;
      try{

        if(xmlHttp){

            var email = document.getElementById("u_email").value;
            var name = document.getElementById("u_name").value;
            var message = document.getElementById("u_message").value;
            var iwebsite = document.getElementById("u_website").value;
            if(iwebsite !=="" && iwebsite !==""){

                website = iwebsite;
                
            }else{

                website = "None";
            }
            if(email !=="" && name !=="" && message !=="" && website!=="") {

                var emailregex = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
                if(email.match(emailregex)){

                    try{

                        xmlHttp.open("GET", "xml/email_query.php?name=" + name + "&email=" + email + "&website=" + website + "&message=" + message, true);
                        xmlHttp.onreadystatechange = doTheInsertion1;
                        xmlHttp.send(null);

                    }catch(e){

                        alert(e.toString());
                    }

                }else{

                    document.getElementById("email_res").innerHTML = "Please enter an email address";
                }
            }else{

                document.getElementById("email_res").innerHTML = "Fill in all the required fields!";
            }
        }

    }catch(e){

        alert(e.toString());
    }
}
function submitted(){
	"use strict";
    try{

        if(xmlHttp){

            var email = document.getElementById("sub_email").value;
            if(email !=="") {
                var emailregex = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
                if(email.match(emailregex)){

                    try{

                    xmlHttp.open("GET", "xml/subscription_res.php?subscribe=" + email, true);
                    xmlHttp.onreadystatechange = doTheInsertion;
                    xmlHttp.send(null);

                    }catch(e){

                        alert(e.toString());
                    }

                }else{

                    document.getElementById("sub_res1").innerHTML = "Please enter an email address";
                }
            }else{

                document.getElementById("sub_res1").innerHTML = "Email cannot be empty!";
            }
        }

    }catch(e){

        alert(e.toString());
    }
}
function doTheInsertion(){
	"use strict";

    try{

        if(xmlHttp.readyState === 4){

            try{
                if(xmlHttp.status === 200){

                    var xmlResponse = xmlHttp.responseXML;
                    var xmlDocumentElement = xmlResponse.documentElement;
                    var message = xmlDocumentElement.firstChild.data;
                    document.getElementById("sub_res1").innerHTML = message;
                    
                }
            }catch(e){

                alert(e.toString());

            } 

        }
    }catch(e){
        alert(e.toString());
    }


}
function doTheInsertion1(){
	"use strict";

    try{

        if(xmlHttp.readyState === 4){

            try{
                if(xmlHttp.status === 200){

                    var xmlResponse = xmlHttp.responseXML;
                    var xmlDocumentElement = xmlResponse.documentElement;
                    var message = xmlDocumentElement.firstChild.data;
                    document.getElementById("email_res").innerHTML = message;
                    
                }
            }catch(e){

                alert(e.toString());

            } 

        }else{

            document.getElementById("email_res").innerHTML = "Processing...";

        }
    }catch(e){
        alert(e.toString());
    }


}
function focuss(){
	"use strict";

    if(xmlHttp.readyState === 0 || xmlHttp.readyState === 4){

        var email = encodeURIComponent(document.getElementById("sub_email").value);
        xmlHttp.open("GET", "xml/email_chck.php?subscribe=" + email, true);
        xmlHttp.onreadystatechange = getserverresponse;
        xmlHttp.send(null);

    }else{

         setTimeout(focuss(), 1000);
    }

}

function searchingiResut(){
	"use strict";

	try{

	if(xmlHttp.readyState === 4){
		
		try{

			if(xmlHttp.status ===200){

				var xmlResponse = xmlHttp.responseXML;
				var xmlDocumentElement = xmlResponse.documentElement;
				var message = xmlDocumentElement.firstChild.data;
				document.getElementById("s_search_rez").innerHTML = message;
				
				setTimeout(searchingi(), 1000);

			}
		}catch(e){
			
			alert(e.toString());
		}

    }
	}catch(e){
		
		alert(e.toString());
	}
					 					   
}

function getserverresponse(){
	"use strict";

    if(xmlHttp.readyState === 4){

        if(xmlHttp.status === 200){

            var xmlResponse = xmlHttp.responseXML;
            var xmlDocumentElement = xmlResponse.documentElement;
            var msg = xmlDocumentElement.firstChild.data;
            var response = document.getElementById("sub_res");
            response.innerHTML = msg;

            setTimeout(focuss(), 1000);
        }
        
    }
}