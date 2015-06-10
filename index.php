<?php


    <html xmlns="http://www.w3.org/1999/xhtml"><head>
     
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
     
    <title>Hacked for FreeAnons</title>
    <style type="text/css">
                    body{
                    background-image: url('http://i.imgur.com/87qwlYK.gif');
                    }
    </style>
     
    <style type="text/css">
     
    *,html,body,div,p,h2{padding: 0px;margin: 0px;}body{background-color: #000000;}#container{margin: 0 auto;width: 980px;padding-top: 40px;}#content-container{float: left;width: 980px;}#content{clear: left;float: left;width: 581px;padding: 20px 0 20px 0;margin: 0 0 0 30px;display: inline;color: #333;}#content h2 {font-family: Cambria;font-size: 170px;}#aside{float: right;width: 348px;padding: 0px;display: inline;background-image: url('');height: 876px;}.hacker{float: right;font-family: Cambria;font-size: 30px;font-weight: bold;}.notes{padding-top: 90px;line-height: 1.3em;font-weight: bold;font-size: 16px;font-family: "Courier New";}.contact{padding-top :  30px;font-size: 18px;font-family: "Courier New", Courier, monospace;font-weight: bold;color: #800000;}#music{padding: 80px 80px 0px 0px;float: right;clear: right;}</style>
     
    <meta name="keywords" content="Free Anons">
    <meta name="description" content="You should?ve Expected us ">
     
    <script type="text/javascript">/*<![CDATA[*/
     
    TypingText = function(element, interval, cursor, finishedCallback) {
     
     if((typeof document.getElementById == "undefined") || (typeof element.innerHTML == "undefined")) {
     
       this.running = true;
     
       return;
     
     }
     
     this.element = element;
     
     this.finishedCallback = (finishedCallback ? finishedCallback : function() { return; });
     
     this.interval = (typeof interval == "undefined" ? 100 : interval);
     
     this.origText = this.element.innerHTML;
     
     this.unparsedOrigText = this.origText;
     
     this.cursor = (cursor ? cursor : "");
     
     this.currentText = "";
     
     this.currentChar = 0;
     
     this.element.typingText = this;
     
     if(this.element.id == "") this.element.id = "typingtext" + TypingText.currentIndex++;
     
     TypingText.all.push(this);
     
     this.running = false;
     
     this.inTag = false;
     
     this.tagBuffer = "";
     
     this.inHTMLEntity = false;
     
     this.HTMLEntityBuffer = "";
     
    }
     
    TypingText.all = new Array();
     
    TypingText.currentIndex = 0;
     
    TypingText.runAll = function() {
     
     for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();
     
    }
     
    TypingText.prototype.run = function() {
     
     if(this.running) return;
     
     if(typeof this.origText == "undefined") {
     
       setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
     
       return;
     
     }
     
     if(this.currentText == "") this.element.innerHTML = "";
     
     if(this.currentChar < this.origText.length) {
     
       if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {
     
         this.tagBuffer = "<";
     
         this.inTag = true;
     
         this.currentChar++;
     
         this.run();
     
         return;
     
       } else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {
     
         this.tagBuffer += ">";
     
         this.inTag = false;
     
         this.currentText += this.tagBuffer;
     
         this.currentChar++;
     
         this.run();
     
         return;
     
       } else if(this.inTag) {
     
         this.tagBuffer += this.origText.charAt(this.currentChar);
     
         this.currentChar++;
     
         this.run();
     
         return;
     
       } else if(this.origText.charAt(this.currentChar) == "&" && !this.inHTMLEntity) {
     
         this.HTMLEntityBuffer = "&";
     
         this.inHTMLEntity = true;
     
         this.currentChar++;
     
         this.run();
     
         return;
     
       } else if(this.origText.charAt(this.currentChar) == ";" && this.inHTMLEntity) {
     
         this.HTMLEntityBuffer += ";";
     
         this.inHTMLEntity = false;
     
         this.currentText += this.HTMLEntityBuffer;
     
         this.currentChar++;
     
         this.run();
     
         return;
     
       } else if(this.inHTMLEntity) {
     
         this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);
     
         this.currentChar++;
     
         this.run();
     
         return;
     
       } else {
     
         this.currentText += this.origText.charAt(this.currentChar);
     
       }
     
       this.element.innerHTML = this.currentText;
     
       this.element.innerHTML += (this.currentChar < this.origText.length - 1 ? (typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) : "");
     
       this.currentChar++;
     
       setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
     
     } else {
     
           this.currentText = "";
     
           this.currentChar = 0;
     
           this.running = false;
     
           this.finishedCallback();
     
     }
     
    }
     
     
     
    /*]]>*/</script></head>
     
     
     
     
     
    <body>
     
    <div id="container">
     
            <div id="content-container">
     
                    <div id="content">
     
     
    <center><img src="http://2.bp.blogspot.com/-nSKhxp47TVM/UKH4YucwpcI/AAAAAAAACxA/p-iTIPUiPvw/s1600/AwQCFOKCAAEjRKj.jpg+large.jpg"></center>
    <h2>FREE Anons</h2>
     <object width="0" height="0"><param name="movie" value="https://www.youtube.com/v/UbF0QZ1e6eM&autoplay=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="https://www.youtube.com/watch?v=wZZ7oFKsKzYpt_BR&amp;version=3&autoplay=1" type="application/x-shockwave-flash" width="0" height="0" allowscriptaccess="always" allowfullscreen="true"></embed></object>
    <p class=":v">Hacked by <font size="6" color="darkred">Sterben</font></p>
    <br><br>
    <center>
    <br><br>
    [<marquee align="center" scrollamount="5" width="560"><font color="Pink" size="-1">The Cats from space will take Revenge</marquee>]
     
    </center>
    <p id="message" class="notes">        
     
     
    Hacked By <br>
    <font color="#800000">sterbencrew99@gmail.com</font>
     
    <br>
     
    This Website has been seized by Sterben Crew in Support of FreeAnons.<br>
    This is not the only thing we will do to take Revenge <br>
    We Support our Brothers<br></p>
     
    <p class="notes">
     FREE OTHERWISE AND FREE AKEN
    .</p>
     
    <script type="text/javascript">/*<![CDATA[*/
     
    new TypingText(document.getElementById("message"), 90, function(i){ var ar = new Array("_", " ", "_", " "); return " " + ar[i.length % ar.length]; });
     
     
     
    //Type out examples:
     
    TypingText.runAll();
     
     /*]]>*/</script>
     
                    </div>
     
                    <div id="aside">
     
     
     
                    </div>
     
     
     
                    <div id="music">
     
                    &nbsp;</div>
     
            </div>
     
        <p>&nbsp;</p>
     
    </div>
     
     
     
     <div id=bar style="position: fixed; width: 100%; bottom: 0px; font-family: tahoma; height: 20px; color: darkred; font-size: 13px; left: 0px; border-top: 1px solid #222; padding: 5px; background-color: #222">
    <CENTEr><B>>https://www.facebook.com/profile.php?id=100009279356821<</B></CENTER></div>
    </body></html>
