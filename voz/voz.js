document.getElementById('voz').addEventListener("click",()=>{
    hablar(document.getElementById('text').value);
})

function hablar(text){
    speechSynthesis.speak(new SpeechSynthesisUtterance(text));
}