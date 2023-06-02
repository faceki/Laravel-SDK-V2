var client_id='7bsvancpl4tio60600pn6hnr58';
var client_secret='1d5bssl48phc3vjfh5ljntkl9b2u6a0r80kit6vg08f9kpf70ch9';
var API_BASE_URL = "https://sdk.faceki.com";
const pathUrl = window.location.pathname;
const baseUrl = window.location.origin;
const pathUrlArray1 = pathUrl.split("/");
const pathUrlArray = pathUrlArray1.filter(function (el) {
    return el != '';
});
var newPath=pathUrlArray.join("/");
sessionStorage.setItem("client_id",client_id);
sessionStorage.setItem("client_secret",client_secret);

const API_URL = API_BASE_URL+"/auth/api/access-token?clientId="+client_id+"&clientSecret="+client_secret;
fetch(API_URL, {
    method: "GET",
    headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
    },
}).then(response=>{
    return response.json();
}).then(function(res){
    let access_token=res.data.access_token;
    //let id_token='eyJraWQiOiJPWGdPd0kzRXMyUzBraGN1MStsaDRSUTFpU2R5UUIwSGZHbDM1MFhtbnYwPSIsImFsZyI6IlJTMjU2In0.eyJzdWIiOiI5NjYwMzgzOS1hZGU1LTQyMmYtYjEyZi1kNjY5ZjFmMGY5MGEiLCJjb2duaXRvOmdyb3VwcyI6WyJBZG1pbiJdLCJlbWFpbF92ZXJpZmllZCI6ZmFsc2UsImlzcyI6Imh0dHBzOlwvXC9jb2duaXRvLWlkcC5tZS1zb3V0aC0xLmFtYXpvbmF3cy5jb21cL21lLXNvdXRoLTFfNHRvVUVCem9mIiwicGhvbmVfbnVtYmVyX3ZlcmlmaWVkIjp0cnVlLCJjdXN0b206Y29tcGFueUlEIjoiYWVkNTEwNzQtNjBjYi00NTM1LTk5YTgtNGRjMDg1NTMxZjMyIiwiY29nbml0bzp1c2VybmFtZSI6Ijk2NjAzODM5LWFkZTUtNDIyZi1iMTJmLWQ2NjlmM…c0MDc1NjAyNTIiLCJleHAiOjE2ODQzODYyMTIsImlhdCI6MTY4NDI5OTgxMywianRpIjoiZTFkYmYyMTctNDFmMS00MWM2LThmZDAtYTE0ZmM1NzQ4ZjRlIiwiZW1haWwiOiJzYW1hbnRhbmFiaW4wMkBnbWFpbC5jb20ifQ.l8pzQDFRx_60OeqJrQkGh_fcjE9gQeNUtxJfbEo_4hUjlAKdkOBGMOCx4w3eiLeXE3w5SXIcWeYHeZlYP7vm7EZtxWX6HpablfoK7l0nDlApMlO7rkSVrxcuymSpk2XqNADrRgmJ-L0nFLEwGhnMxWdO4xhOg8q5mJdmtPexEOXDYdpW7xAgeJFnSoqf53P5ASd5x1pMtby2_NWVHdwv7KtN464sDtIxNToLSwXkFqmnKI9RbK183PUmBD4Lkv14gHFzKx47LDgjaFVOOBjUOCi7R8bQD-A055RU-NsRDInmgwTQ77sg_LkG5Ro_fPCPOFnPgHp0rG1CMhiiS4jZ-A';
      let KYC_RULES_API_URL=API_BASE_URL+"/kycrules/api/kycrules";
        fetch(KYC_RULES_API_URL,
        {
            headers: {
			'Accept': 'application/json',
			'Authorization': 'Bearer '+access_token,
		    }
        })
        .then(response => {
            return response.json()
        }).then(function(res){
            if(res.responseCode!=0){
                set_default_kyc_type();
            }
            console.log('response_data',res.data.allowedKycDocuments);
            sessionStorage.setItem("livenessCheckType",res.data.livenessCheckType);
            sessionStorage.setItem("multiKYCEnabled",res.data.multiKYCEnabled);

            sessionStorage.setItem("success_meaasge",res.data.success.meaasge);
            var success_redirect_url=res.data.success.redirect_url;
            if (success_redirect_url!=null && success_redirect_url.indexOf("http://") == -1 && success_redirect_url.indexOf("https://") == -1) {
               success_redirect_url="https://"+success_redirect_url;
            }
            sessionStorage.setItem("success_redirect_url",success_redirect_url);

            sessionStorage.setItem("declined_meaasge",res.data.declined.meaasge);
            var declined_redirect_url=res.data.declined.redirect_url;
            if (declined_redirect_url!=null && declined_redirect_url.indexOf("http://") == -1 && declined_redirect_url.indexOf("https://") == -1) {
               declined_redirect_url="https://"+declined_redirect_url;
            }
            sessionStorage.setItem("declined_redirect_url",declined_redirect_url);

            sessionStorage.setItem("invalid_meaasge",res.data.invalid.meaasge);
            var invalid_redirect_url=res.data.invalid.redirect_url;
            if (invalid_redirect_url!=null && invalid_redirect_url.indexOf("http://") == -1 && invalid_redirect_url.indexOf("https://") == -1) {
               invalid_redirect_url="https://"+invalid_redirect_url;
            }
            sessionStorage.setItem("invalid_redirect_url",invalid_redirect_url);
            set_kyc_type(res.data.allowedKycDocuments);
        })
        .catch(error => {
            console.log(error);
        });
})

function set_kyc_type(allowedKycDocuments){
    let kyc_type_html='';
    let ki=0;
    if(allowedKycDocuments.includes('ID Card')){
        let checked='';
        if(ki==0){
            checked='checked';
            sessionStorage.setItem("selected_doc_type","ID Card");
        }
        kyc_type_html+=`<div class="custom-radio_button">
        <input type="radio" id="radio1" name="radio-group" `+checked+` value="ID Card" onClick="set_doc_type('ID Card')">
        <label for="radio1"><img src="img/id1.svg" class="img-fluid" alt="">ID Card</label>
        </div>`;
        ki++;
    }
    if(allowedKycDocuments.includes('Passport')){
        let checked='';
        if(ki==0){
            checked='checked';
            sessionStorage.setItem("selected_doc_type","Passport");
        }
        kyc_type_html+=`<div class="custom-radio_button">
        <input type="radio" id="radio2" name="radio-group" `+checked+` value="Passport" onClick="set_doc_type('Passport')">
        <label for="radio2"><img src="img/id1.svg" class="img-fluid" alt="">Passport</label>
        </div>`;
        ki++;
    }
    if(allowedKycDocuments.includes('Driving License')){
        let checked='';
        if(ki==0){
            checked='checked';
            sessionStorage.setItem("selected_doc_type","Driving License");
        }
        kyc_type_html+=`<div class="custom-radio_button">
        <input type="radio" id="radio3" name="radio-group" `+checked+` value="Driving License" onClick="set_doc_type('Driving License')">
        <label for="radio3"><img src="img/id1.svg" class="img-fluid" alt="">Driving License</label>
        </div>`;
        ki++;
    }
    document.getElementById("kyc_type_form").innerHTML = kyc_type_html;
}

function set_default_kyc_type(){
    let kyc_type_html=`<div class="custom-radio_button">
        <input type="radio" id="radio1" name="radio-group" checked  value="ID Card" onClick="set_doc_type('ID Card')">
        <label for="radio1"><img src="img/id1.svg" class="img-fluid" alt="">ID Card</label>
        </div>`;
    document.getElementById("kyc_type_form").innerHTML = kyc_type_html;
    sessionStorage.setItem("selected_doc_type","ID Card");
}

function set_doc_type(doc_type){
    sessionStorage.setItem("selected_doc_type",doc_type);
    document.getElementsByClassName("doc_type")[0].innerHTML = doc_type;
	document.getElementsByClassName("doc_type")[1].innerHTML = doc_type;
}

