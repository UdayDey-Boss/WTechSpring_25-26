function analyzeText(){

let text = document.getElementById("textInput").value;


let charCount = text.length;


let words = text.trim().split(/\s+/);
let wordCount = text.trim() === "" ? 0 : words.length;


let reversed = text.split("").reverse().join("");


document.getElementById("charCount").value = charCount;
document.getElementById("wordCount").value = wordCount;
document.getElementById("reverseText").value = reversed;

}