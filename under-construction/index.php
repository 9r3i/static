<?php
defined('MSERVER_FILE') 
  or define('MSERVER_FILE','server/mserver.php');
if(is_file(MSERVER_FILE)){
  @require_once(MSERVER_FILE);
  exit;
}
?><!DOCTYPE html><html lang="en"><head>
  <meta charset="utf-8" />
  <title>UNDER-CONSTRUCTION</title>
  <meta name="author" content="9r3i" />
  <meta name="keywords" content="UNDER-CONSTRUCTION" />
  <meta name="description" content="UNDER-CONSTRUCTION" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <script src="createjs.min.js"></script>
  <script src="construction.js"></script>
  <script type="text/javascript">
        var canvas, stage, exportRoot;
        function init() {
            canvas = document.getElementById("canvas");
            handleComplete();
        }
        function handleComplete() {
            exportRoot = new lib.construction();
            stage = new createjs.Stage(canvas);
            stage.addChild(exportRoot);
            createjs.Ticker.setFPS(lib.properties.fps);
            createjs.Ticker.addEventListener("tick", stage);
            (function(isResp, respDim, isScale, scaleType) {
                var lastW, lastH, lastS=1;
                window.addEventListener('resize', resizeCanvas);
                resizeCanvas();
                function resizeCanvas() {
                    var w = lib.properties.width, h = lib.properties.height;
                    var iw = window.innerWidth, ih=window.innerHeight;
                    var pRatio = window.devicePixelRatio, xRatio=iw/w, yRatio=ih/h, sRatio=1;
                    if(isResp) {
                        if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {
                            sRatio = lastS;
                        }
                        else if(!isScale) {
                            if(iw<w || ih<h)
                                sRatio = Math.min(xRatio, yRatio);
                        }
                        else if(scaleType==1) {
                            sRatio = Math.min(xRatio, yRatio);
                        }
                        else if(scaleType==2) {
                            sRatio = Math.max(xRatio, yRatio);
                        }
                    }
                    canvas.width = w*pRatio*sRatio;
                    canvas.height = h*pRatio*sRatio;
                    canvas.style.width = w*sRatio+'px';
                    canvas.style.height = h*sRatio+'px';
                    stage.scaleX = pRatio*sRatio;
                    stage.scaleY = pRatio*sRatio;
                    lastW = iw; lastH = ih; lastS = sRatio;
                }
            })(true,'both',false,1);
        }
  </script>
</head><body onload="init();" style="margin:0px;">
  <div id="wrapper">
    <div class="constraction">
      <canvas id="canvas" class="construction-canvas" width="200" height="165" style="display: block; background-color:rgba(255, 255, 255, 1.00)"></canvas>
    </div>
		<h3 class="title" style="color:#293A4A;">
		  <strong>UNDER-CONSTRUCTION</strong>
		</h3>
  </div>
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="footer_socials col-sm-12 text-center">
					<div class="copyright">Powered by <a href="https://github.com/9r3i" style="color: #3567d6">9r3i</a></div>
        </div>
      </div>
    </div>
  </footer>
<style>
*{
    font-family: 'Exo 2', sans-serif;
    font-weight: 300;
}
html{
    height: 100%;
}

h1, h2, h3, h4, h5, h6{
    color: #000000;
    font-weight: 600;
}
body {
    font-size: 16px;
    line-height: 24px;
    margin: 0 auto;
    position: relative;
    background-color: #ffffff;
}
h1 {
    font-size: 93px;
    line-height: 96px;
    margin-top: 48px;
    margin-bottom: 24px;
    font-weight: 900;
}
h2 {
    font-size: 52px;
    line-height: 72px;
    margin-top: 0px;
    margin-bottom: 24px;
    font-weight: 900;
}
h3 {
    font-size: 29px;
    line-height: 48px;
    margin-top: 24px;
    margin-bottom: 24px;
}
h4 {
    font-size: 16px;
    line-height: 24px;
    margin-top: 24px;
    margin-bottom: 24px;
}
p, ul, ol, pre, table, blockquote {
    margin-top: 24px;
    margin-bottom: 24px;
}
hr {
    border: 1px solid;
    margin: -1px 0;
}
ul ul, ol ol, ul ol, ol ul {
    margin-top: 0;
    margin-bottom: 0;
}
b, strong, em, small, code {
    line-height: 1;
}
sup, sub {
    vertical-align: baseline;
    position: relative;
    top: -0.4em;
}
sub {
    top: 0.4em;
}

p{
    font-weight: 300;
    color: #373b3e;
}
.title{
    font-size: 20px;
    font-weight: 300;
    text-align: center;
    color: #000000;
    line-height: 28px;
    margin: 25px 10px 10px 10px;
}
.construction-canvas{
    margin: 24px auto 0;
}

        section, footer {
            display: block;
            padding: 0;
            margin: 0;
        }
        .container {
            margin-left: auto;
            margin-right: auto;
            padding: 0 10px;
        }
        .sorry-text {
            font-size: 500%;
            color: #CCCCCC;
        }
        ul {
            display: inline-block;
            list-style: none outside none;
            margin: 0;
            padding: 0;
        }
        ul li {
            float: left;
            text-align: center;
        }
        .additional-info-items ul li {
            width: 100%;
        }
        .heading-text {
            font-weight: bold;
            display: block;
            text-align: left;
        }
        .description {
            text-align: left;
        }
        .info-image {
            padding: 10px;
        }
        footer {
            text-align: center;
            margin: 60px 0;
        }
        footer a {
            text-decoration: none;
        }
        .copyright {
            font-size: 10px;
            color: #3F4143;
        }
        @media (min-width: 768px) {
            .additional-info {
                background-image: none;
            }
            .additional-info-items {
                padding: 20px;
            }
            .container {
                width: 90%;
            }
            .additional-info-items ul li {
                width: 25%;
                padding: 20px;
            }
            .reason-text {
                font-size: 18px;
            }
            .contact-info {
                font-size: 18px;
            }
        }
        @media (min-width: 992px) {
            .container {
                width: 70%;
            }
            .sorry-text {
                font-size: 900%;
            }
        }
</style>
</body></html>
