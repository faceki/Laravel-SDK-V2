var success_meaasge= sessionStorage.getItem("success_meaasge");
var success_redirect_url= sessionStorage.getItem("success_redirect_url");
var declined_meaasge= sessionStorage.getItem("declined_meaasge");
var declined_redirect_url= sessionStorage.getItem("declined_redirect_url");
var invalid_meaasge= sessionStorage.getItem("invalid_meaasge");
var invalid_redirect_url= sessionStorage.getItem("invalid_redirect_url");

var widthOfCrop = 500; // width of frame where we have to fit ID for desktop
var heightOfCrop = 300; // height of frame where we have to fit ID for desktop
var xCrop = 390; // x axis distance of where we start cropping
var yCrop = 195; // y axis distance of where we start cropping

var front_image='';
var back_image='';
var selfie_image='';
var is_mobile_device = false;
(function(a) {
    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4)))
        is_mobile_device = true;
})(navigator.userAgent || navigator.vendor || window.opera);

    (function() {

		$(document).ready(function() {	

			// Scroll to Top
			jQuery('.scrolltotop').click(function(){
				jQuery('html').animate({'scrollTop' : '0px'}, 400);
				return false;
			});
			
			jQuery(window).scroll(function(){
				var upto = jQuery(window).scrollTop();
				if(upto > 500) {
					jQuery('.scrolltotop').fadeIn();
				} else {
					jQuery('.scrolltotop').fadeOut();
				}
			});
		
			$("#owl-csel1").owlCarousel({
				items: 1,
				autoplay: false,
				autoplayTimeout: 3000,
				rtl: false,
				loop: true,
				margin: 15,
				dots: true,
				nav: false,
				// center:true,
				// stagePadding: 2,
				navText: [
							'<i class="fa fa-angle-left" aria-hidden="true"></i>',
							'<i class="fa fa-angle-right" aria-hidden="true"></i>'
						],
				navContainer: '.main-content .custom-nav',
				responsive:{
					0: {
						items: 1,						
					},
					767: {
						items: 1,						
					},
					1200: {
						items: 1,						
					}
				}
	
			});
			
			jQuery('.tabs .tab-links a').on('click', function(e)  {
				var currentAttrValue = jQuery(this).attr('href'); 
				// Show/Hide Tabs
				// Show/Hide Tabs
			jQuery('.tabs ' + currentAttrValue).siblings().hide();
			jQuery('.tabs ' + currentAttrValue).delay().show();             
				// Change/remove current tab to active
				jQuery(this).parent('li').addClass('activet').siblings().removeClass('activet');
				e.preventDefault();
			});
			
		});

		const steps = Array.from(document.querySelectorAll("main .step"));
		const nextBtn = document.querySelectorAll("main .next-btn");
		const prevBtn = document.querySelectorAll("main .previous-btn");

		nextBtn.forEach((button) => {
			button.addEventListener("click", () => {
				changeStep("nexts");
			});
		});

		prevBtn.forEach((button) => {
			button.addEventListener("click", () => {
				changeStep("prevs");
			});
		});

		function changeStep(btn) {
			let index = 0;
			const active = document.querySelector(".actives");
			index = steps.indexOf(active);
			//alert(index);
			if (steps.includes(steps[index])) {
				steps[index].classList.remove("actives");
			}
			if (btn === "nexts") {
				if(index==3){
					if(!document.getElementById("agree_check").checked){
						alert('Please agree terms and conditions!');
						index--;
					}
				}
				index++;
			} else if (btn === "prevs") {
				index--;
			}
			if (steps.includes(steps[index])) {
				steps[index].classList.add("actives");
			}
			console.log(index)
			if(index==2){
				let selected_doc_type=sessionStorage.getItem("selected_doc_type")
				document.getElementsByClassName("doc_type")[0].innerHTML = selected_doc_type;
				document.getElementsByClassName("doc_type")[1].innerHTML = selected_doc_type;
			}
			if(index==5){
				switchCamera("environment");
			}
			if(index==6){
				switchCamera1("environment");
			}
			if(index==10){
				selfie_start();
			}
		
		}

        var startbutton = document.getElementById("startbutton");
        var retakebuton = document.getElementById("retake-button");

		var startbutton1 = document.getElementById("startbutton1");
        var retakebuton1 = document.getElementById("retake-button1");

		var startbutton2 = document.getElementById("startbutton2");

        // Prefer camera resolution nearest to 1280x720.
        var constraints = {
            audio: false,
            video: {
                width: (is_mobile_device==true)?720:1920,
                height: (is_mobile_device==true)?480:1080,
                facingMode: "environment"
            },
        };

        async function getMediaStream(constraints) {
            try {
                var mediaStream = await navigator.mediaDevices.getUserMedia(constraints);
                let video = document.getElementById('videoCam');
                video.srcObject = mediaStream;
                video.onloadedmetadata = (event) => {
                    video.play();
                };
            } catch (err) {
                console.error(err.message);
            }
        };

        async function switchCamera(cameraMode) {
            try {
                // set the video source to null
                document.getElementById('videoCam').srcObject = null;
                // change "facingMode"
                if(is_mobile_device == true){
                   constraints.video.facingMode = 'environment';
                }else{
                   constraints.video.facingMode = 'user'; 
                }
                // get new media stream
                await getMediaStream(constraints);
            } catch (err) {
                console.error(err.message);
                alert(err.message);
            }
        }

		function takePicture() {
            let canvas = document.getElementById('canvas');
            let video = document.getElementById('videoCam');
            let photo = document.getElementById('photo');
            let context = canvas.getContext('2d');
            const height = video.videoHeight;
            const width = video.videoWidth;
            video.pause();
            if (width && height) {
				canvas.width = width;
				canvas.height = height;
				context.drawImage(video, 0, 0, width, height);
				if(is_mobile_device==true){
    			  var data = canvas.toDataURL("image/png", 0.7);
    			}else{
    			  var data = canvas.toDataURL("image/png", 1.0);
    			}
				console.log('data123',data);
				photo.setAttribute('src', data);
                front_image=data;
            }
        }

		startbutton.addEventListener("click", function(ev) {
				takePicture(); 
				ev.preventDefault();
			},
			false
		);

		retakebuton.addEventListener("click", function(ev) {
				changeStep("prevs");
				ev.preventDefault();
			},
			false
		);

		async function getMediaStream1(constraints) {
            try {
                var mediaStream1 = await navigator.mediaDevices.getUserMedia(constraints);
                let video1 = document.getElementById('videoCam1');
                video1.srcObject = mediaStream1;
                video1.onloadedmetadata = (event) => {
                    video1.play();
                };
            } catch (err) {
                console.error(err.message);
            }
        };

        async function switchCamera1(cameraMode) {
            try {
                // set the video source to null
                document.getElementById('videoCam1').srcObject = null;
                // change "facingMode"
                if(is_mobile_device == true){
                   constraints.video.facingMode = 'environment';
                }else{
                   constraints.video.facingMode = 'user'; 
                }
                // get new media stream
                await getMediaStream1(constraints);
            } catch (err) {
                console.error(err.message);
                alert(err.message);
            }
        }

        function takePicture1() {
            let canvas = document.getElementById('canvas1');
            let video = document.getElementById('videoCam1');
            let photo = document.getElementById('photo1');
            let context = canvas.getContext('2d');
            const height = video.videoHeight;
            const width = video.videoWidth;
            if (width && height) {
				canvas.width = width;
				canvas.height = height;
				context.drawImage(video, 0, 0, width, height);
				if(is_mobile_device==true){
    			  var data = canvas.toDataURL("image/png", 0.7);
    			}else{
    			  var data = canvas.toDataURL("image/png", 1.0);
    			}
				photo.setAttribute('src', data);
                back_image=data;
            }
        }

		startbutton1.addEventListener("click", function(ev) {
				takePicture1(); 
				ev.preventDefault();
			},
			false
		);

		retakebuton1.addEventListener("click", function(ev) {
				changeStep("prevs");
				ev.preventDefault();
			},
			false
		);

        function selfie_start() {
          let video2 = document.getElementById("videoCam2");
          let selfie_constraints = {
            audio: false,
            video: {
                width: {
                    ideal: (is_mobile_device==true)?1280:1920
                },
                height: {
                    ideal: (is_mobile_device==true)?720:1080
                },
                facingMode: "user"
            },
          };

          if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
            navigator.mediaDevices.getUserMedia(selfie_constraints)
              .then(function (stream) {
                video2.srcObject = stream;
                video2.setAttribute("autoplay", "");
                video2.setAttribute("muted", "");
                video2.setAttribute("playsinline", "");
                video2.play();
              })
              .catch(function (err0r) {
                console.log("Something went wrong!");
              });
          }
        }

		startbutton2.addEventListener("click", function(ev) {
			callApi(); 
			ev.preventDefault();
			},
			false
		);

		function callApi(){
			let video2 = document.getElementById("videoCam2");
            video2.pause(); 
            takeSelfie(video2).then(blob =>{
               getAccessToken();
            });
        }

		function takeSelfie(vid) {
			const canvas = document.getElementById('canvas2');
			const ctx = canvas.getContext("2d");
			canvas.width = vid.videoWidth;
			canvas.height = vid.videoHeight;
			ctx.drawImage(vid, 0, 0);
			if(is_mobile_device==true){
			 var imageData = canvas.toDataURL("image/png", 0.7);
			}else{
			 var imageData = canvas.toDataURL("image/png", 1.0);
			}
			selfie_image=imageData;
			return new Promise((res, rej) => {
			  canvas.toBlob(res, "image/png");
			});
		}

		function getAccessToken(){
			const ACCESS_API_URL = API_BASE_URL+"/auth/api/access-token?clientId="+client_id+"&clientSecret="+client_secret;
			fetch(ACCESS_API_URL, {
				method: "GET",
				headers: {
					'Accept': 'application/json',
					'Content-Type': 'application/json'
				},
			}).then(response=>{
				return response.json();
			}).then(function(res){
				let access_token=res.data.access_token;
				console.log('access_token',access_token);

				console.log('front_image',front_image);
				console.log('back_image',back_image);
				console.log('selfie_image',selfie_image);

				var doc1_jpegFile64 = front_image.replace(/^data:image\/(png|jpeg);base64,/, "");
                var doc1_jpegBlob = base64ToBlob(doc1_jpegFile64, 'image/png');
                var doc1_frontImge = new File([doc1_jpegBlob], "filename-front.png",{ type: 'image/png' });

                var doc1_bjpegFile64 = back_image.replace(/^data:image\/(png|jpeg);base64,/, "");
                var doc1_bjpegBlob = base64ToBlob(doc1_bjpegFile64, 'image/png');
                var doc1_backImg = new File([doc1_bjpegBlob], "filename-back.png",{ type: 'image/png' });

				var sjpegFile64 = selfie_image.replace(/^data:image\/(png|jpeg);base64,/, "");
                var sjpegBlob = base64ToBlob(sjpegFile64, 'image/png');
                var selfieImg = new File([sjpegBlob], "filename-selfie.png",{ type: 'image/png' });

				sendImgeToKyc(access_token,doc1_frontImge,doc1_backImg,selfieImg);

			})
        }

		function sendImgeToKyc(access_token,doc1_frontImge,doc1_backImg,selfieImg) {
			const kycurl = API_BASE_URL+'/kycverify/api/kycverify/kyc-verification';
			const data_auth = new FormData();
			data_auth.append('doc_front_image', doc1_frontImge);
			data_auth.append('doc_back_image', doc1_backImg);
			data_auth.append('selfie_image', selfieImg);

			fetch(kycurl, {
				method: "POST",
				headers: {
				'Accept': 'application/json',
				'Authorization': 'Bearer '+access_token
			},
			body: data_auth
			}).then(response=>{
				return response.json()
			})
			.then(function(res){
				console.log('res123',res);
				let face_issue_array=[8004,8005,8006,8007,8008,8009];
				let face_issue_details={
					'8004':'Face image cropped! , Please try again!',
					'8005':'Face image too closed! , Please try again!',
					'8006':'Face image not found! , Please try again!',
					'8007':'Face image closed to border! , Please try again!',
					'8008':'Face image too small! , Please try again!',
					'8009':'Face image captured in low light! , Please try again!',
				};
				if(res.responseCode==0){
					changeStep("nexts");
				}if(face_issue_array.includes(res.responseCode)){
                    alert(face_issue_details[res.responseCode]);
					changeStep("prevs");
				}else if(res.responseCode==8001){
					alert('Document images required!');
					changeStep("nexts");
					changeStep("nexts");
				}else if(res.responseCode==8002){
					alert('Document verification failed!');
					changeStep("nexts");
					changeStep("nexts");
				}else{
					changeStep("nexts");
					changeStep("nexts");
				}
			}).catch(e=>{
				console.log(e);
				changeStep("nexts");
				changeStep("nexts");
			})

		}

		function base64ToBlob(base64, mime)
         {
             mime = mime || '';
             var sliceSize = 1024;
             var byteChars = window.atob(base64);
             var byteArrays = [];

             for (var offset = 0, len = byteChars.length; offset < len; offset += sliceSize) {
                 var slice = byteChars.slice(offset, offset + sliceSize);

                 var byteNumbers = new Array(slice.length);
                 for (var i = 0; i < slice.length; i++) {
                     byteNumbers[i] = slice.charCodeAt(i);
                 }

                 var byteArray = new Uint8Array(byteNumbers);

                 byteArrays.push(byteArray);
             }

             return new Blob(byteArrays, {type: mime});
         }

})();

	