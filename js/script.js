

function voiceread() {
  
let msg = document.getElementById("text").innerHTML;
let msg3 = document.getElementById("text3").innerHTML;

let speech = new SpeechSynthesisUtterance();
speech.lang = "en-US";
speech.text=msg;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);



let speech3 = new SpeechSynthesisUtterance();
speech3.lang = "en-US";
speech3.text=msg3;
speech3.volume=3;
speech3.rate=1;
speech3.pitch=1;

window.speechSynthesis.speak(speech3);

  
  }



function maths() {
  
let msg = document.getElementById("text").innerHTML;
let msg2 = document.getElementById("text2").innerHTML;
let msg3 = document.getElementById("text3").innerHTML;

let speech = new SpeechSynthesisUtterance();
speech.lang = "en-US";
speech.text=msg;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);


let speech2 = new SpeechSynthesisUtterance();
speech2.lang = "en-US";
speech2.text=msg2;
speech2.volume=3;
speech2.rate=1;
speech2.pitch=1;

window.speechSynthesis.speak(speech2);



let speech3 = new SpeechSynthesisUtterance();
speech3.lang = "en-US";
speech3.text=msg3;
speech3.volume=3;
speech3.rate=1;
speech3.pitch=1;

window.speechSynthesis.speak(speech3);

  
  }


function maths_1() {
  
let msg = document.getElementById("text").innerHTML;

let speech = new SpeechSynthesisUtterance();
speech.lang = "en-US";
speech.text=msg;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);



  
  }

  function evil(fn) {
  return new Function('return ' + fn)();
}

  function number(value) {

    if (value == 'multiply by') {

       document.getElementById("first").textContent += " * ";

    }else if(value == 'minus'){

        document.getElementById("first").textContent += " - ";

    }
    else if(value == '+'){

        document.getElementById("first").textContent += " + ";

    }
    else if(value == 'divide by'){
        var divide = "&#247;";
            document.getElementById("first").textContent += " / ";
       
    }

   



    else if(value == 'clear screen'){
        document.getElementById("first").innerHTML = " ";
         document.getElementById("equal").innerHTML = " ";
          document.getElementById("result").innerHTML = " ";
    }else{
      
      document.getElementById("first").textContent +=  value.toString();
}
       let speech = new SpeechSynthesisUtterance();
  
    
speech.lang = "en-US";
speech.text=value;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);


  }

  function number1(value){
      document.getElementById("equal").innerHTML="=";
      var res = document.getElementById("first").innerHTML;
      var final = evil(res);
      document.getElementById("result").innerHTML = final;

        let speech = new SpeechSynthesisUtterance();
  
    
speech.lang = "en-US";
speech.text=value;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);

      let speech2 = new SpeechSynthesisUtterance();
speech2.lang = "en-US";
speech2.text=final;
speech2.volume=3;
speech2.rate=1;
speech2.pitch=1;

window.speechSynthesis.speak(speech2);

    }
  


  function computer() {
  
let msg = document.getElementById("text").innerHTML;
let msg2 = document.getElementById("text2").innerHTML;
let msg3 = document.getElementById("text3").innerHTML;

let speech = new SpeechSynthesisUtterance();
speech.lang = "en-US";
speech.text=msg;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);


let speech2 = new SpeechSynthesisUtterance();
speech2.lang = "en-US";
speech2.text=msg2;
speech2.volume=3;
speech2.rate=1;
speech2.pitch=1;

window.speechSynthesis.speak(speech2);



let speech3 = new SpeechSynthesisUtterance();
speech3.lang = "en-US";
speech3.text=msg3;
speech3.volume=3;
speech3.rate=1;
speech3.pitch=1;

window.speechSynthesis.speak(speech3);

  
  }



function cintro() {
  
let msg = document.getElementById("text").innerHTML;

let speech = new SpeechSynthesisUtterance();
speech.lang = "en-US";
speech.text=msg;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);



  
  }


  function left() {
 let head = document.getElementById("chead").innerHTML = "SPEAKER";

let msg = document.getElementById("explain").innerHTML = "A Computer Speaker is an output device that connects to a computer to generate sound. The signal used to produce the sound that comes from a computer speaker is created from the computer's sound card.";

let speech2 = new SpeechSynthesisUtterance();
speech2.lang = "en-US";
speech2.text=head;
speech2.volume=3;
speech2.rate=1;
speech2.pitch=1;

window.speechSynthesis.speak(speech2);


let speech = new SpeechSynthesisUtterance();
speech.lang = "en-US";
speech.text=msg;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);
  }


  function desktop() {
  let head = document.getElementById("chead").innerHTML = "MONITOR";
let msg = document.getElementById("explain").innerHTML = "A Monitor is a computer that fits on or under a desk. It is an area of a display screen where images, windows, icons and other graphical items appears.";


let speech2 = new SpeechSynthesisUtterance();
speech2.lang = "en-US";
speech2.text=head;
speech2.volume=3;
speech2.rate=1;
speech2.pitch=1;

window.speechSynthesis.speak(speech2);

let speech = new SpeechSynthesisUtterance();
speech.lang = "en-US";
speech.text=msg;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);

  }




    function cpu() {
 let head =  document.getElementById("chead").innerHTML = "CPU";
let msg = document.getElementById("explain").innerHTML = "Alternatively reffered to as processor, central processor, or micro-processor, the CPU is the central processing unit of a computer. The CPU handles all instructions it recieves from hardware and software running on the computer.";

let speech2 = new SpeechSynthesisUtterance();
speech2.lang = "en-US";
speech2.text=head;
speech2.volume=3;
speech2.rate=1;
speech2.pitch=1;

window.speechSynthesis.speak(speech2);

let speech = new SpeechSynthesisUtterance();
speech.lang = "en-US";
speech.text=msg;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);

  }

   function keyboard() {
  let head = document.getElementById("chead").innerHTML = "KEYBOARD";
let msg = document.getElementById("explain").innerHTML = "A Computer keyboard is an input device used to enter characters and functions into the computer system by pressing buttons or keys. It is the primary device used to enter text";

let speech2 = new SpeechSynthesisUtterance();
speech2.lang = "en-US";
speech2.text=head;
speech2.volume=3;
speech2.rate=1;
speech2.pitch=1;

window.speechSynthesis.speak(speech2);


let speech = new SpeechSynthesisUtterance();
speech.lang = "en-US";
speech.text=msg;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);

  }

   function mouse() {
 let head =  document.getElementById("chead").innerHTML = "MOUSE";
let msg = document.getElementById("explain").innerHTML = "A computer mouse is a hand held pointing device that detects two dimensional motion relative to a surface";

let speech2 = new SpeechSynthesisUtterance();
speech2.lang = "en-US";
speech2.text=head;
speech2.volume=3;
speech2.rate=1;
speech2.pitch=1;

window.speechSynthesis.speak(speech2);

let speech = new SpeechSynthesisUtterance();
speech.lang = "en-US";
speech.text=msg;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);

  }


  function english() {
  
let msg = document.getElementById("text").innerHTML;
let msg2 = document.getElementById("text2").innerHTML;
let msg3 = document.getElementById("text3").innerHTML;

let speech = new SpeechSynthesisUtterance();
speech.lang = "en-US";
speech.text=msg;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);


let speech2 = new SpeechSynthesisUtterance();
speech2.lang = "en-US";
speech2.text=msg2;
speech2.volume=3;
speech2.rate=1;
speech2.pitch=1;

window.speechSynthesis.speak(speech2);



let speech3 = new SpeechSynthesisUtterance();
speech3.lang = "en-US";
speech3.text=msg3;
speech3.volume=3;
speech3.rate=1;
speech3.pitch=1;

window.speechSynthesis.speak(speech3);

  
  }


function eintro() {
  
let msg = document.getElementById("text").innerHTML;

let speech = new SpeechSynthesisUtterance();
speech.lang = "en-US";
speech.text=msg;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);



  
  }

  function eng(value){


      if (value == 'SPACE') {

     var msg =  document.getElementById("first").textContent += "  ";

         let speech = new SpeechSynthesisUtterance();
  
    
speech.lang = "en-US";
speech.text=value;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);

    }else if(value == 'comma'){
        var msg =  document.getElementById("first").textContent += ", ";

         let speech = new SpeechSynthesisUtterance();
  
    
speech.lang = "en-US";
speech.text=value;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);
    }
    else if(value == 'full stop'){
        var msg =  document.getElementById("first").textContent += ". ";

         let speech = new SpeechSynthesisUtterance();
  
    
speech.lang = "en-US";
speech.text=value;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);
    }else if(value == 'question mark'){
        var msg =  document.getElementById("first").textContent += "? ";

         let speech = new SpeechSynthesisUtterance();
  
    
speech.lang = "en-US";
speech.text=value;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);
    }
    else if(value == 'ENTER'){

        var msg = document.getElementById("first").innerHTML;
         let speech = new SpeechSynthesisUtterance();
  
    
speech.lang = "en-US";
speech.text=msg;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);


    } 
     else if(value == 'DELETE'){

        var msg = document.getElementById("first").innerHTML;
        var fin = msg.slice(0, -1);
         document.getElementById("first").innerHTML = fin;
         let speech = new SpeechSynthesisUtterance();
  
    
speech.lang = "en-US";
speech.text=value;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);


    }  else if(value == 'CLEAR SCREEN'){
        document.getElementById("first").innerHTML = " ";
        let speech = new SpeechSynthesisUtterance();
  
    
speech.lang = "en-US";
speech.text=value;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);
    }else{
      
      document.getElementById("first").textContent +=  value.toString();

       let speech = new SpeechSynthesisUtterance();
  
    
speech.lang = "en-US";
speech.text=value;
speech.volume=3;
speech.rate=1;
speech.pitch=1;

window.speechSynthesis.speak(speech);


}
      



  }


  function playthis(){
    var text = document.getElementById("readthis").innerHTML;

    document.getElementById("playthis").innerHTML = '<span class="fa fa-pause" id="playthis" onclick="playthis()" style="background-color: orange;padding: 10px;color: #000;border-radius: 30px;"></span>';

    let speech = new SpeechSynthesisUtterance();

    speech.lang = "en-US";
    speech.text = text;
    speech.volume = 5;
    speech.rate = 1;
    speech.pitch = 1;

    window.speechSynthesis.speak(speech);

  }