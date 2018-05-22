//<![CDATA[
window.onload=function (){
document.querySelector("button").addEventListener("click", function (){
this.parentNode.querySelector("input") .type = (this.parentNode.querySelector("input").type === "text") ? "password" : "texe";},false)

};
